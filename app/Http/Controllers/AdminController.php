<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\News;
use App\Models\User;
use App\Models\Admin;
use App\Models\PageSection;
use App\Models\Story;
use App\Models\Project;
use App\Models\ListContent;
use App\Models\SectionStory;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
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
        $projects = Project::latest()->get();
        $new = News::latest()->first();
        return view('index', compact('projects','new'));
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
        $limit = 10;
        $projects = Project::latest()->paginate($limit);
        $ttl = $projects->total();
        $ttlpage = ceil($ttl / $limit);
        return view('admin.project_all', compact('projects', 'ttl', 'ttlpage',));
    }


    public function allAdvertise()
    {
        $limit = 10;
        $stories = Story::paginate($limit);
        $ttl = $stories->total();
        $ttlpage = ceil($ttl / $limit);
        return view('admin.advertise_all', compact('stories', 'ttl', 'ttlpage'));
    }


    public function addPageAdvertise() {
        return view('admin.advertise_page_add');
    }


    public function storePageAdvertise(Request $request) {
        PageSection::create([
            'name' => $request->name,
            'title' => $request->title
        ]);
        $pageSections = PageSection::all();
        return view('admin.advertise_section_add', compact('pageSections'));
    }


    public function editPageAdvertise($id) {
        $pageSection = PageSection::find($id);
        return view('admin.advertise_page_edit', compact('pageSection'));
    }


    public function updatePageAdvertise(Request $request) {
        $updateData = [
            'name' => $request->name,
            'title' => $request->title
        ];

        PageSection::where('id', $request->id)->update($updateData);
        return redirect('/admin/advertise')->with('success', 'ページが正常に更新されました!');
    }


    public function deletePageAdvertise(Request $request) {
        $pageSection = PageSection::findOrFail($request->id);

        $sectionStories = $pageSection->sectionStory()->get();
        foreach ($sectionStories as $sectionStory) {
            $sectionStory->story()->delete();
        }

        $pageSection->sectionStory()->delete();

        $pageSection->delete();
        return redirect()->back()->with('success', 'ページを正常に削除しました!');
    }


    public function addSectionAdvertise() {
        $pageSections = PageSection::all();
        return view('admin.advertise_section_add', compact('pageSections'));
    }


    public function storeSectionAdvertise(Request $request) {
        SectionStory::create([
            'page_section_id' => $request->page,
            'type' => $request->type,
            'section' => $request->section
        ]);
        $sectionStories = SectionStory::all();
        return view('admin.advertise_story_add', compact('sectionStories'));
    }


    public function editSectionAdvertise($id) {
        $pageSections = PageSection::all();
        $sectionStory = SectionStory::find($id);
        return view('admin.advertise_section_edit', compact('pageSections', 'sectionStory'));
    }


    public function updateSectionAdvertise(Request $request) {
        $updateData = [
            'page_section_id' => $request->page,
            'type' => $request->type,
            'section' => $request->section,
        ];

        SectionStory::where('id', $request->id)->update($updateData);
        return redirect('/admin/advertise')->with('success', 'セクションが正常に更新されました!');
    }


    public function deleteSectionAdvertise(Request $request) {
        SectionStory::where('id', $request->id)->delete();
        Story::where('section_story_id', $request->id)->delete();
        return redirect()->back()->with('success', 'セクションを正常に削除しました!');
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


    public function editProject($id)
    {
        $projects = Project::findOrFail($id);
        return view('admin.project_edit', compact('projects'));
    }


    public function saveProject(Request $request)
    {
        $project = new Project();
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'content' => 'required|string',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $project->image = $imageName;
        }
        $project->title = $request->title;
        $project->content = $request->content;
        $project->save();

        return redirect('/admin/project')->with('success', 'Data added successfully!');
    }


    public function updateProject(Request $request)
    {
        $project = Project::find($request->id);
        $old_img = $request->old_img;

        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'content' => 'required|string',
        ]);

        if ($request->hasFile('image')) {
            if (File::exists(public_path('images/') . $old_img)) {
                File::delete(public_path('images/') . $old_img);
            }
            $imageName = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('images'), $imageName);
            $project->image = $imageName;
        } else {
            $project->image = $old_img;
        }

        $project->title = $request->title;
        $project->content = $request->content;
        $project->updated_at = Carbon::now();
        $project->save();

        return redirect('/admin/project')->with('success', 'Data updated successfully!');
    }


    public function deleteProject($id)
    {
        $data = Project::findOrFail($id);
        $imagePath = public_path('images' . $data->image);
        $data->delete();
        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }

        return back()->with('success', 'Data deleted successfully');
    }


    public function allNews()
    {
        $limit = 10;
        $news = News::latest()->paginate($limit);
        $ttl = $news->total();
        $ttlpage = ceil($ttl / $limit);
        return view('admin.news_all', compact('news', 'ttl', 'ttlpage',));
    }


    public function addNews()
    {
        return view('admin.news_add');
    }


    public function editNews($id)
    {
        $news = News::find($id);
        return view('admin.news_edit', compact('news'));
    }



    public function saveNews(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'content' => 'required|string',
        ]);

        $news = new News();
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $news->image = $imageName;
        }

        $news->title = $request->title;
        $news->content = $request->content;
        $news->created_at = Carbon::now();
        $news->save();

        return redirect('/admin/news')->with('success', 'Data added successfully!');
    }


    public function updateNews(Request $request)
    {
        $news = News::find($request->id);
        $old_img = $request->old_img;

        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'content' => 'required|string',
        ]);

        if ($request->hasFile('image')) {
            if (File::exists(public_path('images/') . $old_img)) {
                File::delete(public_path('images/') . $old_img);
            }
            $imageName = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('images'), $imageName);
            $news->image = $imageName;
        } else {
            $news->image = $old_img;
        }

        $news->title = $request->title;
        $news->content = $request->content;
        $news->created_at = $request->date;
        $news->save();

        return redirect('/admin/news')->with('success', 'Data updated successfully!');
    }



    public function deleteNews($id)
    {
        $data = News::findOrFail($id);
        $imagePath = public_path('images' . $data->image);
        $data->delete();
        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }

        return back()->with('success', 'Data deleted successfully');
    }
}
