<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use App\Models\Project;
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
