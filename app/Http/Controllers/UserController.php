<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index()
    {
        $user = User::where("role", "admin")->get();
        return view("welcome", compact("user"));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            "username" => "required|string|max:30",
            "about" => "required|string",
            "resume" => "nullable|file",
            "fullName" => "required|string|max:30",
            "birth" => "required|date",
            "from" => "required|string|max:20",
            "photo" => "nullable|file",
        ]);

        if(Gate::denies("admin-action"))
        {
            return redirect()->back()->with("error", "Unauthorized.");
        }

        $user = User::where("role", "admin")->first();

        if (!$user) {
            return redirect()->back()->with("error", "Admin user not found.");
        }

        $user->about = $validated['username'];
        $user->about = $validated['about'];
        $user->fullName = $validated['fullName'];
        $user->birth = $validated['birth'];
        $user->from = $validated['from'];


        if ($request->hasFile("resume")) {
            if ($user->resume) {
                Storage::disk('public')->delete($user->resume);
            }

            $path = $request->file("resume")->store("resume", "public");
            $user->resume = $path;
        }

        if ($request->hasFile("photo")) {
            if ($user->photo) {
                Storage::disk('public')->delete($user->photo);
            }

            $path = $request->file("photo")->store("photo", "public");
            $user->photo = $path;
        }

        $user->save();


        return redirect()->back()->with("success", "Profile Updated Successfully.");
    }
}
