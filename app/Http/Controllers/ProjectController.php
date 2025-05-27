<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{

    public function store(Request $request)
    {
        $request->validate([
            "name" => "required|string|max:50",
            "description" => "required|string|max:255",
            "tech" => "required|string",
            "status" => "required|string",
            "url" => "nullable|string|max:255",
            "image" => "nullable|file|image|max:2048",
        ]);

        if (Gate::denies("admin-action")) {
            return redirect()->back()->with("error", "Unauthorized.");
        }

        $active = $request->has("active");
        $techs = json_encode(explode(", ", $request->tech));

        $project = Project::create([
            "name" => $request->name,
            "description" => $request->description,
            "tech" => $techs,
            "status" => $request->status,
            "url" => $request->url,
            "active" => $active
        ]);

        if ($request->hasFile("image")) {
            $path = $request->file("image")->store("projects", "public");
            $project->imgUrl = $path;
            $project->save();
        }

        return redirect()->back()->with("success", "Project Posted Successfully.");
    }

    public function update(Request $request, Project $project)
    {
        $request->validate([
            "name" => "required|string|max:50",
            "description" => "required|string|max:255",
            "tech" => "required|string",
            "status" => "required|string",
            "url" => "nullable|string|max:255",
            "image" => "nullable|file|image|max:2048",
        ]);

        if (Gate::denies("store-project")) {
            return redirect()->back()->with("error", "Unauthorized.");
        }

        $active = $request->has("active");
        $techs = json_encode(explode(", ", $request->tech));

        if ($request->hasFile("image")) {
            if ($project->imgUrl && Storage::disk('public')->exists($project->imgUrl)) {
                Storage::disk('public')->delete($project->imgUrl);
            }

            $path = $request->file("image")->store("projects", "public");
            $project->imgUrl = $path;
        }

        $project->update([
            "name" => $request->name,
            "description" => $request->description,
            "tech" => $techs,
            "status" => $request->status,
            "url" => $request->url,
            "active" => $active
        ]);

        return redirect()->back()->with("success", "Project Updated Successfully.");
    }

    public function destroy(Project $project)
    {
        if (Gate::denies("store-project")) {
            return redirect()->back()->with("error", "Unauthorized.");
        }

        if ($project->imgUrl && Storage::disk('public')->exists($project->imgUrl)) {
            Storage::disk('public')->delete($project->imgUrl);
        }

        $project->delete();

        return redirect()->back()->with("success", "Project Deleted Successfully.");
    }
}
