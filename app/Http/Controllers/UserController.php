<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\About;
use App\Models\Project;
use App\Models\Skill;
use App\Models\Education;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\UserController;

class UserController extends Controller
{
    public function dashboardPage()
    {

            $about = About::first();
            $users = User::all();
            $projects = Project::all();
            $skills = Skill::all()->groupBy('category');
            $education = Education::all();

            return view('welcome', compact('users','about', 'projects', 'skills' ,'education'));



        // Gate::authorize('isAdmin');
        //     return view('welcome'); 
        // if(Gate::allows('isAdmin')){
        //     $about = About::first();
        //     $users = User::all();
        //     $projects = Project::all();
        //     $skills = Skill::all()->groupBy('category');
        //     $education = Education::all();

        //     return view('welcome', compact('users','about', 'projects', 'skills' ,'education'));
        // }
        // else{
        //     return view('register'); 
        // }
    }

    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email'=>'required|email', 
            'password'=>'required'
        ]);
          
        if(Auth::attempt($credentials)){
            return redirect()->route('dashboard');
        }
        else{
            return redirect()->route('login')->with('error', 'Username or password is incorrect.');
        }
    }

    public function showRegisterForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'age' => 'required|integer',
            'role' => 'required|in:user,admin',
            'password' => 'required|confirmed',
        ]);

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'age' => $data['age'],
            'role' => $data['role'],
            'password' => $data['password'],
        ]);

        if ($user) {
            return redirect()->route('login')->with('success', 'Registration successful. Please log in.');
        } else {
            return back()->with('error', 'Registration failed. Please try again.');
        }
    }

}
