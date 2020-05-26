<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\classes;
use App\Potentials;
class AdminController extends Controller
{
	
	public function Test($id)
	{
		$user = User::find($id);
		return view('admin.user.edituser',["user" => $user]);
	}
	
	public function admin()
	{
		$user = User::all();
		return view('admin.layouts.master',["user" => $user]);
	}

   public function listuser()
   {
   	$users = User::all();
   	return view('admin.user.listuser',['users' => $users]);
   }
   
   public function EditUser($id)
   {
   	$user = User::find($id);
   	return view('admin.user.edituser',['user' => $user]);
   }

   public function PostEditUser(Request $request, $id)
   {
		$user = User::find($id);
		$user -> Name = $request -> Name;
		$user -> Gender = $request -> Gender;
		$user -> Phone = $request -> Phone;
		$user -> Email = $request -> Email;
		$user -> save();

		return redirect(Route("admin")) -> with('success','Ban da sua thanh cong 1 user');
   }
	public function dangkytuvan()
   {
   	$potentials = potentials::all();
   	return view('admin.reg.dangkytuvan',['potentials' => $potentials]);
   }
   
   
   public function delete(Request $request, $id)
   {
		$potentials = potentials::find($id);
		$potentials -> Delete();
		
		return redirect(Route("admin")) -> with('success','Ban da xóa thanh cong 1 user');
   }
   
   public function listcourse()
   {
    	$Check = 0;
        $classes = classes::all();
         return view('admin.course.listcourse',[ "classes" => $classes, "Check" => $Check]);
    }
   	

   public function editCourse($id)
   {
   	$class = classes::find($id);
   	return view('admin.course.edit',['class' => $class]);
   }
   

   public function PostEditCourse(Request $request, $id)
   {
   	$classes = classes::find($id);
   	$classes -> Name = $request -> Name;
	$classes -> StartDate = $request -> StartDate;
	$classes -> EndDate = $request -> EndDate;
	$classes -> keodai = $request -> keodai;
   	$classes -> save();
   }
	
    public function addcourse()
    {
        return view('admin.course.addcourse');
    }
	
	public function PostAddCourse(Request $request)
   {
	$classes = new classes;
   	$classes -> Name = $request -> Name;
	$classes -> description = $request -> description;
	$classes -> StartDate = $request -> StartDate;
	$classes -> EndDate = $request -> EndDate;
	$classes -> keodai = $request -> keodai;
  $classes -> Slot = $request -> Slot;
  $classes -> Datetostudy = $request -> Datetostudy;
  $classes -> Timetostudy = $request -> Timetostudy;
  $classes -> Courses_id = '1';
  $classes -> Day_id = '1';
  $classes -> Time_id = '1';
  $classes -> Area_id ='1';
  $classes -> Teacher_id = '1';
  $classes -> popular = '1';
  $classes -> save();
	
	return redirect(Route("admin")) -> with('success','Ban da thêm thanh cong 1 khoa hoc');
   }


}