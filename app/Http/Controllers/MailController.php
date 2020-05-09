<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function getContact(){
        return view('pages.contact');
    }

    public function postContact(Request $r)
    {
        // data
        $data=[
            'name'=> $r->name,
            'email' => $r->email,
            'subject' => $r->subject,
            'content' => $r->content,
        ];

        // test view
        //return view('mails.contact',$data);
        // dood de rest die();



        // mail verzenden
        //frederick.roegiers@arteveldehs.be
      Mail::send('mails.contact', $data, function ($message) use($r) {

           $message->sender('emmemart1@student.arteveldehs.be');
           $message->to($r->email, $r->name);
           $message->from('emmemart1@student.arteveldehs.be', 'Emmeline Martens');
           $message->replyTo('emmemart1@student.arteveldehs.be', 'Emmeline Martens');
           //$message->cc('frederick.roegiers@arteveldehs.be'); // naam docent komt er automatisch in
           $message->subject($r->subject);

           // $message->priority(3);
           // $message->attach('pathToFile');
       });
        return redirect()->route('home');


    }
}
