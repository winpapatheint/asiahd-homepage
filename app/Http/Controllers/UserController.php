<?php

namespace App\Http\Controllers;

use Mail;
use App\Models\News;
use App\Models\User;
use App\Models\Story;
use App\Models\Project;
use App\Mail\ContactMail;
use App\Mail\InquiryMail;
use App\Models\PageSection;
use App\Models\Prefecture;
use App\Models\SectionStory;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Route;

class UserController extends Controller
{
    public function about()
    {
        return view('about');
    }

    public function project()
    {
        $projects = Project::latest()->get();
        return view('project', compact('projects'));
    }

    public function showProject($id)
    {
        $project = Project::find($id);
        return view('project_detail', compact('project'));
    }


    public function service()
    {
        return view('service');
    }

    public function service1()
    {
        return view('service1');
    }

    public function service2()
    {
        return view('service2');
    }

    public function service3()
    {
        return view('service3');
    }

    public function service4()
    {
        return view('service4');
    }

    public function service4_1()
    {
        return view('service4_1');
    }

    public function service4_2()
    {
        return view('service4_2');
    }


    public function contact()
    {
        return view('contact');
    }

    public function new()
    {
        $limit = 5;
        $news = News::with('listContents')->latest()->paginate($limit);
        $ttl = $news->total();
        $ttlpage = ceil($ttl / $limit);

        return view('new', compact('news', 'ttl', 'ttlpage',));
    }

    public function recruit()
    {
        return view('recruit');
    }

    public function privacy()
    {
        return view('privacy');
    }

    public function story($id)
    {
        $pageSection = PageSection::find($id);
        $sectionStories = SectionStory::where('page_section_id', $id)->get();
        $stories = Story::all();
        $prefecture = Prefecture::all();
        return view('story', compact('pageSection', 'sectionStories', 'stories', 'prefecture'));
    }

    public function storeInquiry(Request $request)
    {
        $inquiry = $request->only([
            'name',
            'email',
            'phone',
            'age',
            'postal-code',
            'prefecture',
            'address',
            'building',
            'inquiry',
        ]);
        Mail::to(config('mail.from.address'))->send(new InquiryMail($inquiry));
        return redirect()->back()->with('success', 'Your inquiry has been sent successfully!');
    }

    public function sendContact(Request $request)
    {
        $inquiry = $request->only([
            'subject',
            'name',
            'email',
            'phone',
            'message',
        ]);
        Mail::to(config('mail.from.address'))->send(new ContactMail($inquiry));
        return redirect()->back()->with('success', 'Your contact has been sent successfully!');
    }
}
