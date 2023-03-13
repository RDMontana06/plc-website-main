<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Mail;
use App\Mail\TesMail;

class MailController extends Controller
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
    if($request->hasFile("users")){
        $file = $request->file('users');
       
    
    // $file = $request->file('users');
    $data = [
      "subject"=>" Mail",
      "body"=>"Hello friends, Welcome to  Mail Delivery!",
      "user_file"=>$file
      ];
    // MailNotify class that is extend from Mailable class.
    try
    {
      Mail::to('plcemailsender@gmail.com')->send(new TesMail($data));
      // return response()->json(['Great! Successfully send in your mail']);
      return back()->with('success', 'Email sent successfully!');
    }
    catch(Exception $e)
    {
       return response()->json(['Sorry! Please try again latter']);

    }
}else{
   return response()->json(['Sorry! Please try again latter']);
}
  } 
}