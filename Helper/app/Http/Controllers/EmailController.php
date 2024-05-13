<?php

namespace App\Http\Controllers;

use App\Mail\MyEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use App\Models\User;

class EmailController extends Controller
{
    public function sendEmail($email)
    {
        // $emailInfo = User::find(auth()->id());
        // $toEmail = $emailInfo->to_email;
        // $message = $emailInfo->message;
        // $subject = $emailInfo->subject;


        $toEmail = $email;	// Receiver Email Address
        $message = 'This is a test email';	// Email Body
        $Subject = 'Test Email';	// Email Subject
        
        $response = Mail::to($toEmail)->send(new MyEmail($message, $Subject));
        dd($response);
}
}