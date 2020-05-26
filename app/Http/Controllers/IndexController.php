<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\classes;
use Carbon\Carbon;
use App\Day;
use App\Potentials;
use Illuminate\Support\Facades\Auth;
class IndexController extends Controller
{
    public function Index()
    {
        $user = User::all();
        $classes = classes::where("startdate",">",Carbon::now()) -> orderBy("startdate","DESC") -> take(4) -> get();
        $Check = 0;
    	return view('index', ["user" => $user, "classes" => $classes, "Check" => $Check]);


    }

    public function About()
    {
    	$user = User::all();
        return view('about.about',["user"=>$user]);
    }

    public function Certificate()
    {
    	return view('certificate.certificate');
    }

    public function Document()
    {
    	return view('document.document');
    }

    public function Course()
    {
    	$Check = 0;
        $classes = classes::where("startdate",">",Carbon::now()) -> orderBy("startdate","DESC") -> take(8) -> get();
         return view('course.course',[ "classes" => $classes, "Check" => $Check]);
    }

    public function Recruitment()
    {
    	return view('recruitment.recruitment');
    }

    public function Contact()
    {
    	return view('contact.contact');
    }

    public function Signup()
    {
        return view('reg.signup');
    }

     public function login()
    {
        return view('reg.login');
    }
    
    public function PostLogin(Request $request)
    {
        if(Auth::attempt(['account' => $request -> account, 'password' => $request -> password]))
        {
            return redirect(Route('index'));
        }
        else
        {
            return redirect(Route('login')) -> with('loi','Đăng nhập thất bại, vui lòng kiểm tra lại');
        
        }
    }
     public function advisory()
    {
        return view('reg.advisory');
    }

    public function PostAdvisory(Request $request)
    {
        

        $potentials = new Potentials;
        $potentials -> name = $request -> name;
        $potentials -> email = $request -> email;
        $potentials -> phone = $request -> phone;
        $potentials -> content = $request -> content;
        $potentials -> courses_id = random_int(1, 10);  
        $potentials -> save();
        return redirect(Route('index')) -> with('success','Bạn đã đăng ký thành công');
    }

    public function PostSignin(Request $request)
    {

        $user = new User;
        $user -> account = $request -> username;
        $user -> password = bcrypt($request -> password);
        $user -> name = $request -> name;
        $user -> gender = $request -> gender;
        $user -> email = $request -> email;
        $user -> phone = $request -> phone;
        $user -> be_admin = '0';
        $user -> avatar = 'https://lorempixel.com/400/600/people/?22566';
        $user -> classes_id = '16';
        $user -> save();
        return redirect(Route('index')) -> with('success','Bạn đã đăng ký thành công');
    }

    public function tutor()
    {
        return view('tutor.tutor');
    }

    public function registration()
    {
        //return view('reg.registration');
        return view('reg.registration');
    }

    public function Postregistration(Request $request)
    {
        

        $potentials = new Potentials;
        $potentials -> name = $request -> name;
        $potentials -> phone = $request -> phone;
        $potentials -> content = $request -> content;
        $potentials -> courses_id = random_int(1, 10);  
        $potentials -> save();
        return redirect(Route('index')) -> with('success','Bạn đã đăng ký thành công');
    }
}
