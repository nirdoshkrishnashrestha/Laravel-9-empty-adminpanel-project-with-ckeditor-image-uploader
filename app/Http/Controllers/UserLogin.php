<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminUser;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserLogin extends Controller
{
   function login(Request $req)
   { 
      $req->validate([
         'user' => 'required',
         'pass' => 'required'
      ]);
      
      $login = new AdminUser; 
      $check_user = DB::table('admin_users')->where('user', $req->user)->first();
     
      if($check_user)
      {
       
         if(Hash::check($req->pass,$check_user->pass))
         {
            $req->session()->put('username',$req->user);
            return redirect('admin/dashboard');
         }
         else{
            return back()->with('fail','Wrong Password');
         }
        
      }
      else
      {
         return back()->with('fail','No Account Found');
      }

   }

   function dashboard()
   {
      return view('admin.dashboard');
   }

   function logout()
   {
      if(session()->has('username'))      
      session()->pull('username');
      return redirect('login');
   }

   function make_user()
   { //// create admin users
      $login = new AdminUser;
      $login->user = "admin";
      $login->pass =  Hash::make("admin");     
      $login->name = "my name";
      $query = $login->save();
      return "Created";
   }
}