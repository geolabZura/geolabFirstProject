<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;
use Validator;

class SubscriberController extends Controller
{
    protected $subscribers;

    public function __construct()
    {
        $this->subscribers = new Subscriber();
    }

    public function index(){
        $data['subscribers'] = $this->subscribers->all();
        return view('admin.pages.subscribers', $data);
    }

    public function getSubscribers(Request $request){
        $message = [
            'name.required'=>'please write your name',
            'email.required'=>'please write your email',
            'subject.required'=>'please write subject',
            'textarea.required'=>'please write text',
            'gender.required'=>'please choose your gender'
        ];

        $validator = Validator::make($request->all(), [
            'name'=>'required',
            'email'=>'required',
            'subject'=>'required',
            'textarea'=>'required',
            'gender'=>'required|in:1,2'
        ], $message);

        if($validator->fails()){
            return response()->json(['error'=>$validator->errors()]);
        }else{

            $lastAddedSubscriber = $this->subscribers->create([
                'name'=>$request->name,
                'email'=>$request->email,
                'subject'=>$request->subject,
                'text'=>$request->textarea,
                'gender_id'=>$request->gender
            ]);

            $lastAddedSubscriber->newsletters()->attach($request->newsletter);

            return response()->json(['success'=>'Thank you for your intereset for us, your message has been sent!']);
        }
    }
}
