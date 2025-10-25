<?php

namespace App\Http\Controllers\Web;

use App\Service;
use App\PaperType;
use App\AcademicLevel;
Use App\Deadline;
use App\Http\Controllers\Controller;
use App\WebSetting;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function create(){
        $services = Service::orderBy('name', 'ASC')->get();
        return $services;
    }
    public function book_writing()
    {
    $paper_types = PaperType::all();
    $academic_levels = AcademicLevel::orderBy('id','asc')->get();
    $deadlines = Deadline::orderBy('id','asc')->get();
    $services = Service::all();
    $web_setting = WebSetting::first();
    return view('pages.services.book-writing', compact('services','deadlines','academic_levels','paper_types','web_setting'));
    }

    public function ghost_writing()
    {
        $paper_types = PaperType::all();
        $academic_levels = AcademicLevel::orderBy('id','asc')->get();
        $deadlines = Deadline::orderBy('id','asc')->get();
        $services = Service::all();
        $web_setting = WebSetting::first();
        return view('pages.services.ghost-writing', compact('services','deadlines','academic_levels','paper_types','web_setting'));
    }

    public function thesis_writing()
    {
        $paper_types = PaperType::all();
        $academic_levels = AcademicLevel::orderBy('id','asc')->get();
        $deadlines = Deadline::orderBy('id','asc')->get();
        $services = Service::all();
        $web_setting = WebSetting::first();
        return view('pages.services.thesis-writing', compact('services','deadlines','academic_levels','paper_types','web_setting'));
    }

    public function academic_writing()
    {
        $paper_types = PaperType::all();
        $academic_levels = AcademicLevel::orderBy('id','asc')->get();
        $deadlines = Deadline::orderBy('id','asc')->get();
        $services = Service::all();
        $web_setting = WebSetting::first();
        return view('pages.services.academic-writing', compact('services','deadlines','academic_levels','paper_types','web_setting'));
    }

    public function proposal_writing()
    {
        $paper_types = PaperType::all();
        $academic_levels = AcademicLevel::orderBy('id','asc')->get();
        $deadlines = Deadline::orderBy('id','asc')->get();
        $services = Service::all();
        $web_setting = WebSetting::first();
        return view('pages.services.proposal-writing', compact('services','deadlines','academic_levels','paper_types','web_setting'));
    }

    public function dissertation_writing()
    {
        $paper_types = PaperType::all();
        $academic_levels = AcademicLevel::orderBy('id','asc')->get();
        $deadlines = Deadline::orderBy('id','asc')->get();
        $services = Service::all();
        $web_setting = WebSetting::first();
        return view('pages.services.dissertation-writing', compact('services','deadlines','academic_levels','paper_types','web_setting'));
    }

    public function essay_writing()
    {
        $paper_types = PaperType::all();
        $academic_levels = AcademicLevel::orderBy('id','asc')->get();
        $deadlines = Deadline::orderBy('id','asc')->get();
        $services = Service::all();
        $web_setting = WebSetting::first();
        return view('pages.services.essay-writing', compact('services','deadlines','academic_levels','paper_types','web_setting'));
    }
    
     public function cipd_assignment()
    {
        $paper_types = PaperType::all();
        $academic_levels = AcademicLevel::orderBy('id','asc')->get();
        $deadlines = Deadline::orderBy('id','asc')->get();
        $services = Service::all();
        $web_setting = WebSetting::first();
        return view('pages.services.cipd-assignment', compact('services','deadlines','academic_levels','paper_types','web_setting'));
    }

    public function college_assignment()
    {
        $paper_types = PaperType::all();
        $academic_levels = AcademicLevel::orderBy('id','asc')->get();
        $deadlines = Deadline::orderBy('id','asc')->get();
        $services = Service::all();
        $web_setting = WebSetting::first();
        return view('pages.services.college-assignment', compact('services','deadlines','academic_levels','paper_types','web_setting'));
    }
    
    public function cv_writing()
    {
        $paper_types = PaperType::all();
        $academic_levels = AcademicLevel::orderBy('id','asc')->get();
        $deadlines = Deadline::orderBy('id','asc')->get();
        $services = Service::all();
        $web_setting = WebSetting::first();
        return view('pages.services.cv-writing', compact('services','deadlines','academic_levels','paper_types','web_setting'));
    }

    public function university_assignment()
    {
        $paper_types = PaperType::all();
        $academic_levels = AcademicLevel::orderBy('id','asc')->get();
        $deadlines = Deadline::orderBy('id','asc')->get();
        $services = Service::all();
        $web_setting = WebSetting::first();
        return view('pages.services.university-assignment', compact('services','deadlines','academic_levels','paper_types','web_setting'));
    }

    public function personal_statement()
    {
        $paper_types = PaperType::all();
        $academic_levels = AcademicLevel::orderBy('id','asc')->get();
        $deadlines = Deadline::orderBy('id','asc')->get();
        $services = Service::all();
        $web_setting = WebSetting::first();
        return view('pages.services.personal-statement', compact('services','deadlines','academic_levels','paper_types','web_setting'));
    }

    
}










