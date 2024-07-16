<?php

namespace App\Http\Controllers;

use Mail;
use App\Models\User;
use App\Models\Story;
use App\Mail\InquiryMail;
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
        return view('project');
    }

    public function project1()
    {
        return view('project1');
    }

    public function project2()
    {
        return view('project2');
    }

    public function project3()
    {
        return view('project3');
    }

    public function project4()
    {
        return view('project4');
    }

    public function project5()
    {
        return view('project5');
    }

    public function project6()
    {
        return view('project6');
    }

    public function project7()
    {
        return view('project7');
    }

    public function project8()
    {
        return view('project8');
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
        return view('new');
    }

    public function recruit()
    {
        return view('recruit');
    }

    public function privacy()
    {
        return view('privacy');
    }

    public function story()
    {
        $sectionStories = SectionStory::all();
        $stories = Story::all();
        $prefecture = Prefecture::all();
        return view('story', compact('sectionStories', 'stories', 'prefecture'));
    }

    public function storeInquiry(Request $request) {
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

}
