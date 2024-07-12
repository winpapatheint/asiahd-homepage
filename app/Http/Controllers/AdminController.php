<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use App\Models\Project;
use App\Models\SectionStory;
use App\Models\Story;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

/**
 * Store a newly created resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */

class AdminController extends Controller
{
    public function welcome()
    {
        return view('index');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function allProject()
    {
        return view('admin.project_all');
    }

    public function allNews()
    {
        return view('admin.news_all');
    }

    public function allAdvertise()
    {
        $sectionStories = SectionStory::all();
        $stories = Story::all();
        return view('admin.advertise_all', compact('sectionStories', 'stories'));
    }

    public function addProject()
    {
        return view('admin.project_add');
    }


    public function saveProject(Request $request)
    {
        $project = new Project();
        $request->validate([
            'name' => 'required|string|max:255',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'paragraph' => 'required|string',
        ]);

        if ($request->hasFile('photo')) {
            $imageName = time().'.'.$request->photo->extension();
            $request->photo->move(public_path('images'), $imageName);
            $project->photo = $imageName;
        }
        $project->name = $request->name;
        $project->paragraph = $request->paragraph;
        $project->save();

        return back()->with('success', 'Data added successfully!');
    }


}
