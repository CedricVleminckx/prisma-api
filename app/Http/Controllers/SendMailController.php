<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\TextInvitation;
use App\Mail\PictureInvitation;
use App\Mail\YoutubeInvitation;

use Mail;

class SendMailController extends Controller
{
    public function TextInvitation(){
        Mail::to("vleminckx.cedric@hotmail.com")->send(new TextInvitation());

        return response()->success([], 204, 'Invitation email sent');
    }

    public function PictureInvitation(){
        Mail::to("vleminckx.cedric@hotmail.com")->send(new PictureInvitation());

        return response()->success([], 204, 'Invitation email sent');
    }

    public function YoutubeInvitation(){
        Mail::to("vleminckx.cedric@hotmail.com")->send(new YoutubeInvitation());

        return response()->success([], 204, 'Invitation email sent');
    }
}
