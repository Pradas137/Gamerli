<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\sendGrid;

class PostController extends Controller
{
    public function sendEmail() {

        $to_email = "cjuradog98@gmail.com";

        Mail::to($to_email)->send(new sendGrid);

        if(Mail::failures() != 0) {
            return "<p> Success! Your E-mail has been sent.</p>";
        }

        else {
            return "<p> Failed! Your E-mail has not sent.</p>";
        }
    }
}