<?php

namespace App\Http\Controllers;

use App\Client;
use App\Contact;
use App\Department;
use App\Event;
use App\Experience;
use App\Hierarchy;
use App\Job;
use App\Location;
use App\Message;
use App\Officer;
use App\Partner;
use App\Service;
use App\Skill;
use App\Social;
use App\Thank;
use App\Title;
use App\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Newsletter;
use Session;

session_start();

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     // $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $socials = Social::all();
        $setting = Setting::first();
        return view('index', compact('socials','setting'));
    }

    public function home()
    {
        return view('home');
    }

    //---------------homepage functions ------------------------------------------------------------------
    public function main()
    {
        $partners = Partner::all()->where('online','=','1');
        $clients = Client::with('jobs')->get()->where('online','=','1');
        $jobs = Job::all()->where('online','=','1');
        $officers = Officer::all();
        $experiences = Experience::with('job_experience')->get()->where('online','=','1');
        $locations = Location::with('job_location')->get()->where('online','=','1');
        $titles = Title::all()->where('online','=','1');
        return view('front.main', compact('clients', 'partners', 'locations', 'experiences', 'titles', 'jobs', 'officers'));
    }

    public function companies()
    {
        $client = Job::with('client')->get();
    }

    public function Newsletter(Request $request)
    {
        if (!Newsletter::isSubscribed($request->email)) {
            Newsletter::subscribePending($request->email);
            return redirect()->back()->with('success', 'Thanks For Subscribe');
        }
        return redirect()->back()->with('failure', 'Sorry! You have already subscribed ');
    }

    // public function jobTotle(){
    //     $title = Title::all();
    //     return $title;
    // }

    public function hierarchy()
    {

        $hierarchy = Hierarchy::all();
        $department = Department::with('hierarchyDetail')->get()->where('online','=','1');
        //    return $hierarchy;
        return view('front.hierarchy', compact('hierarchy', 'department'));
    }
    //---------------contact functions ----------------------------------------------------------------
    public function store_message(Request $request)
    {
        $message_data = [
            'name' => $request->input('name'),
            'subject' => $request->input('subject'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
        ];
        Message::create($message_data);
        Session::put('message', 'message Sent Successfully !!');
        return Redirect()->back();
    }
    public function contact()
    {
        $contact = Contact::first();
        return view('front.contact', compact('contact'));
    }
    //----------------services functions----------------------------------------------------------------
    public function services()
    {
        $services = Service::all()->where('online','=','1');
        return view('front.services', compact('services'));
    }

    //----------------clients functions----------------------------------------------------------------
    public function clients()
    {
        $clients = Client::all()->where('online','=','1');
        return view('front.clients', compact('clients'));
    }
    //----------------partners functions----------------------------------------------------------------
    public function partners()
    {
        $partners = Partner::all()->where('online','=','1');
        return view('front.partners', compact('partners'));
    }

    //----------------officers functions----------------------------------------------------------------

    public function officers()
    {
        $officers = Officer::all()->where('online','=','1');
        $skills=Skill::all()->where('online','=','1');
        return view('front.officer', compact('officers','skills'));
    }
    //----------------thanks functions----------------------------------------------------------------
    public function thanks()
    {
        $thanks = Thank::all()->where('online','=','1');
        return view('front.thanks', compact('thanks'));
    }
    //----------------works functions----------------------------------------------------------------
    public function works()
    {
        $works = Work::all()->where('online','=','1');
        return view('front.works', compact('works'));
    }
    //----------------jobs functions------------------------
    public static function jobs(Request $request)
    {
        $results = job::with('title')->with('location')->with('experience')->whereHas('experience', function ($query) use ($request) {
            $query->where('experience', $request->experience);
        })
        ->orWhereHas('title', function ($query) use ($request) {
                $query->WhereHas('translation', function ($query1) use ($request) {
                    $query1->where('title', $request->title);
            });
        })->orWhereHas('location', function ($query) use ($request) {
            $query->WhereHas('translation', function ($query2) use ($request) {
                $query2->where('location', $request->location);
            });
        })->get();

        return view('front.jobs',compact('results')); 
    }
    public static function job()
    {
        $jobs = Job::all();
       $titles=title::where('online','=','1')->get();
       $experiences=Experience::where('online','=','1')->get();
       $locations=Location::where('online','=','1')->get();
// return$results;
return view('front.job', compact('titles','experiences','locations','jobs'));
    }

    
    //----------------event functions----------------------------------------------------------------
    public function events()
    {
        $events = Event::all()->where('online','=','1');
        return view('front.events', compact('events'));
    }

    public function event_gallery($id)
    {
        

        $event = Event::with('eventDetails')->findOrFail($id);
        
        return view('front.event-gallery', compact('event'));
    }

    public function service_gallery($id)
    {

        $service = Service::with('serviceDetails')->findOrFail($id);
        
        return view('front.service-gallery', compact('service'));
    }

//----------------------officer functions -----------------------------------------------------------
    public function store_officer(Request $request)
    {

        $officer = new Officer;
        $officer->address = $request->input('address');
        $officer->phone = $request->input('phone');
        $officer->email = $request->input('email');
        $officer->objective = $request->input('objective');
        $officer->university = $request->input('university');
        $officer->city = $request->input('city');
        $officer->Gpa = $request->input('Gpa');
        $officer->communication = $request->input('communication');
        $officer->leader = $request->input('leader');
        $officer->cv = $request->file('cv');
        $officer->job_title = $request->input('job_title');
        $officer->position = $request->input('position');
        $officer->company_name = $request->input('company_name');

        if ($request->has('cv')) {
            $request->cv->store('officer');
            $request->cv = $request->cv->hashName();
        }
        
        return $request->all();
        $officer->save();
        $skill = Skill::find($request->skill);
        $officer->skills()->attach($skill);

    }

}
