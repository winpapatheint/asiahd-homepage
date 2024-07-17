<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use App\Models\Story;
use App\Models\Project;
use App\Models\SectionStory;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

    public function changePassword() {
        return view('admin.change_password');
    }

    public function updatePassword(Request $request) {
        $user = User::find(Auth::user()->id);

        if (!Hash::check($request->oldPassword, $user->password)) {
            return redirect()->back()->withErrors(['oldPassword' => '古いパスワードが正しくありません。'])->withInput();
        }
        $user->password = Hash::make($request->newPassword);
        $user->save();

        return redirect()->back()->with('success', 'パスワードが正常に更新されました');
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
        $stories = Story::all();
        return view('admin.advertise_all', compact('stories'));
    }

    public function addSectionAdvertise() {
        return view('admin.advertise_section_add');
    }

    public function storeSectionAdvertise(Request $request) {
        SectionStory::create([
            'type' => $request->type,
            'section' => $request->section
        ]);
        return view('admin.advertise_story_add');
    }

    public function addStoryAdvertise() {
        $sectionStories = SectionStory::all();
        return view('admin.advertise_story_add', compact('sectionStories'));
    }

    public function storeStoryAdvertise(Request $request) {
        if (!empty($request->image)) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
        } else {
            $imageName = null;
        }

        Story::create([
            'section_story_id' => $request->section,
            'title' => $request->title,
            'body' => $request->body,
            'image' => $imageName
        ]);
        return redirect('/admin/advertise')->with('success', 'ストーリーが正常に追加されました!');
    }

    public function editStoryAdvertise($id) {
        $sectionStories = SectionStory::all();
        $story = Story::find($id);
        return view('admin.advertise_story_edit', compact('sectionStories', 'story'));
    }

    public function updateStoryAdvertise(Request $request) {
        $updateData = [
            'section_story_id' => $request->section,
            'title' => $request->title,
            'body' => $request->body,
        ];

        if (!empty($request->image)) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $updateData['image'] = $imageName;
        }
    
        Story::where('id', $request->id)->update($updateData);
        return redirect('/admin/advertise')->with('success', 'ストーリーが正常に更新されました!');
    }

    public function deleteStoryAdvertise(Request $request) {
        Story::where('id', $request->id)->delete();
        return redirect()->back()->with('success', 'ストーリーを正常に削除しました!');
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
