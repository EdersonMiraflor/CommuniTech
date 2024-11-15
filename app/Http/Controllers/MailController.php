<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    //Mail
    public function send_basic_email(){
        $data = array('name' => 'Admin User');

        Mail::send(['text' => 'mail'], $data, function($message){
            $message->to('Admin@gmail.com', 'Admin User')->subject('Tutorial on Email');
            $message->from('User@gmail.com', 'Website User');
        });

        echo "Email has benn sent!";
    }
    //Attachment
    public function send_attach_email(){
        $data = array('name' => 'Admin User');

        Mail::send('mail', $data, function($message) {
            $message->to('Admin@gmail.com', 'Admin User')->subject('Tutorial on Email Attachment');
            $message->attach(public_path('img/princess.jpg'));
            $message->attach(public_path('img/Unsealed_Certificate.pdf'));
            
            $message->from('User@gmail.com', 'Website User');
        });

        echo "Attachment has benn sent!";
    }

     //Basic HTML Mail
     public function send_html_email(){
        $data = array('name' => 'Admin User');

        Mail::send('mail', $data, function($message){
            $message->to('Admin@gmail.com', 'Admin User')->subject('Tutorial on Email');
            $message->from('User@gmail.com', 'Website User');
        });

        echo "HTML has benn sent!";
    }
}
