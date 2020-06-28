<?php

namespace App\Http\Controllers;

use App\Subscriber;
use Illuminate\Http\Request;
use Newsletter;

class SubscriberController extends Controller
{

    public function  show(Subscriber $subscriber) {

        return view('subscriber.show',['subscriber'=>$subscriber]);

    }



    public function store(){

        request()->validate([

            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required'


        ]);


        $subscriber = new Subscriber();

        $subscriber->first_name=request('first_name');
        $subscriber->last_name=request('last_name');
        $subscriber->email=request('email');

        Newsletter::subscribe(request('email'),[

            'FNAME'=>request('first_name'),
            'LNAME' =>request('last_name')

        ]);

        $subscriber->save();

        return redirect('/');



    }


}
