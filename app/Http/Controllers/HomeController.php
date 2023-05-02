<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Doctor;

use App\Models\Appointment;





class HomeController extends Controller
{
    public function redirect(){


        if(Auth::id()){


            if(Auth::user()->usertype=='0'){

                 $doctor=doctor::all();

                return view('user.home',compact('doctor'));
            }


            else
            {
                $total_doctor=doctor::all()->count();

                $total_appointment=appointment::all()->count();
                return view('admin.home',compact('total_doctor','total_appointment'));
            }

        }

        else {


            return redirect()->back();
        }



    }

    public function index(){


        if(Auth::id())

        {

            return redirect('home');
        }



        else
        {

             $doctor=doctor::all();

         return view('user.home',compact('doctor'));
        }

        


    }



    public function appointment(Request $request){

            $data=new appointment;

            $data->name=$request->name;

            $data->email=$request->email;

            $data->date=$request->date;

            $data->doctor=$request->doctor;

            $data->phone=$request->number;


            $data->message=$request->message;


            $data->status='In Progress';

            if(Auth::id()){

            $data->user_id=Auth::user()->id;

        }

        $data->save();

        return redirect()->back()->with('message','Appointment Request Successfull! We will Contact with You Soon');


    }


    public function myappointment(){

        if(Auth::id()){

            if(Auth::user()->usertype==0)
            {
                $userid=Auth::user()->id;

                $appoint=appointment::where('user_id',$userid)->get();
    
    
            return view('user.my_appointment',compact('appoint'));

            }

        

         else {


            return redirect()->back();
        }

    }

    else{
                    
        return redirect('login');
    }


        }


        public function cancel_appointment($id){

            $data=appointment::find($id);

            $data->delete();

            return redirect()->back();


        }


        public function about(){

            $doctor=doctor::all();

            return view('user.about',compact('doctor'));
        }

        public function our_doctor(){

            $doctor=doctor::all();

            return view('user.our_doctor',compact('doctor'));
        }


        public function contact(){

            return view('user.contact');
        }


        public function blog(){

            return view ('user.blog');

        }

        public function blog_details(){

            return view ('user.blog_details');
            
        }

}
