<?php

namespace App\Http\Controllers;

use Mail;
use App\Mail\Subscribe;
use App\Models\Subscriber;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class SubscriberController extends Controller
{
    public function index()
    {
        $data = [
            'subject' => 'Email verification',
            'body'=> 'Hi , please verify your email. Thank you'
        ];
        try {
            Mail::to('dmia0806@gmail.com')->send(new Subscribe($data));
            return response()->json(['Great check your mailbox']);
            
        } catch (Exception $th) {
            //throw $th;
        }
    }
}
