<?php

namespace App\Http\Controllers\kids_pikori;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactForm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class contactController extends Controller
{
    public  function show(){
      return  view('kids-pikori.form');
    }

    public function contact(Request $request){
         //バリデーション
        $request->validate([
            'name' => 'required',
            'email' => 'email',
            'contacts' => 'required'
        ]);
        $data=[
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'contacts' => $request->input('contacts')];

        Mail::to(env('MAIL_ADMIN'))->send(new ContactForm($data));
        Mail::to($data['email'])->send(new ContactForm($data));

        return back()->with(['message' => 'アイデア・ご意見ありがとうございます']);
    }
}
