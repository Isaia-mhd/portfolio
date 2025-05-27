<?php

namespace App\Http\Controllers;

use App\Models\Language;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class LanguageController extends Controller
{

    public function store()
    {
        request()->validate([
            "name" => "required|string|max:50",
            "part" => "required|string|max:100",
            "type" => "required|string|",
            "level_1" => "integer|max:100",
            "level_2" => "string|max:20",
        ]);

        if(Gate::denies("admin-action"))
        {
            return redirect()->back()->with("error", "Unauthorized.");
        }

        $language = Language::create([
            "name" => request()->name,
            "part" => request()->part,
            "type" => request()->type,
            "level_1" => request()->level_1,
            "level_2" => request()->level_2,

        ]);

        return redirect()->back()->with("success", "New Language Added Successfully.");
    }

    public  function update(Language $language)
    {
        request()->validate([
            "name" => "required|string|max:50",
            "part" => "required|string|max:100",
            "type" => "required|string|",
            "level_1" => "integer|max:100",
            "level_2" => "string|max:20",
        ]);

        if(Gate::denies("admin-action"))
        {
            return redirect()->back()->with("error", "Unauthorized.");
        }

        $language->update([
            "name" => request()->name,
            "part" => request()->part,
            "type" => request()->type,
            "level_1" => request()->level_1,
            "level_2" => request()->level_2,

        ]);

        return redirect()->back()->with("success", "Language Updated Successfully.");
    }

    public  function  destroy(Language $language)
    {
        if(Gate::denies("admin-action"))
        {
            return redirect()->back()->with("error", "Unauthorized.");

        }

        $language->delete();

        return redirect()->back()->with("success", "Language deleted Successfully.");

    }
}
