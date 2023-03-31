<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\TesMail;

use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class EmailController extends Controller
{
    public function index()
    {
    return view(
            'pages.careers',
            array(
                'header' => 'careers',
            )
        );
    }
    public function send(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'users' => 'required|file|mimes:pdf',
        ]);
        if ($validator->fails()) {
          
          return view(
            'pages.careers',
            array(
                'header' => 'careers',
            )
        )->with("data","fileError");

        }
        if($request->hasFile("users")){
            $file = $request->file('users');
           
        
        // $file = $request->file('users');
        $data = [
      "subject"=>" Job Application from the website",

         "user_firstname"=> $request->user_firstname,
         "user_surname"=> $request->user_surname,
         "user_email"=> $request->user_email,
         "user_number"=> $request->user_number,
         "user_position"=> $request->user_position,


          "user_file"=>$file
          ];
        // MailNotify class that is extend from Mailable class.
        try
        {
        //   Mail::to('recruitment@premiumlandscorp.com')->send(new TesMail($data));
        Mail::to('plcsendermail@gmail.com')->send(new TesMail($data));
        Mail::to('recruitment@premiumlandscorp.com')->send(new TesMail($data));


        return view(
          'pages.careers',
          array(
              'header' => 'careers',
          )
      )->with("data","sent");
    
        }
        catch(Exception $e) 
        {
           return view(
          'pages.careers',
          array(
              'header' => 'careers',
          )
      )->with("data","error");
    
        }
    }else{
       return view(
          'pages.careers',
          array(
              'header' => 'careers',
          )
      )->with("data","error");
    
    }
    }
}