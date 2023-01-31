<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Http\Requests\StoreHomeRequest;
use App\Http\Requests\UpdateHomeRequest;
use App\Notifications\contactEmail;
use App\Notifications\estimateProject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Notification;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.index');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function services()
    {
        return view('frontend.sercvices');
    }

    public function estimate_index()
    {
        return view('estimate.index');
    }

    public function estimate_projet_save(Request $request)
    {   

        $info = [
            'date' => $request->date,
            'scope' => $request->scope,
            'type' => $request->type,

            'description' => $request->description,
            'email' => $request->email,
            'name' => $request->name,
            'phone' => $request->phone,
        ];

        $url = 'https://testing.tealbuild.com/estimate-projet-save';

        $response = Http::post($url, $info);

       return back()->withSuccess("success");
      
    }



    public function contactRequest(Request $request)
    {
        $request->validate([
            'g-recaptcha-response' => 'required'
        ]);
        
        $info = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'website' => $request->website,
            'message' => $request->message,
        ];


        $url = 'https://testing.tealbuild.com/contact-save';
        $response = Http::post($url, $info);

       return back()->withSuccess("success");
    }


    public function contact_save(Request $request)
    {
        $info = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'website' => $request->website,
            'message' => $request->message,
        ];


        Notification::route('mail', 'vinod.kamliyasoft@gmail.com')
        ->notify(new contactEmail($info));

        return back()->withSuccess("success");

    }


}