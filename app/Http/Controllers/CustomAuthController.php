<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class CustomAuthController extends Controller
{
    public function index()
    {
        return view('Auth.login');
    }  
      
    public function customLogin(Request $request)
    {
        // dd($request);
        $request->validate([
            'npm' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('npm', 'password');
        if (Auth::attempt($credentials)) {
            if(Auth::user()->level == "admin"){
                return redirect()->intended('/admin')->withSuccess('Signed in');
            }elseif(Auth::user()->level == "dosen"){
                return redirect()->intended('/dosen')->withSuccess('Signed in');
            }else{
                return redirect()->intended('/dashboard')->withSuccess('Signed in');
            }
        }
  
        return redirect("/")->withSuccess('Login details are not valid');
    }

    public function registration()
    {
        return view('auth.registration');
    }
      
    public function customRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect("dashboard")->withSuccess('You have signed-in');
    }

    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }    
    
    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard');
        }
  
        return redirect("login")->withSuccess('You are not allowed to access');
    }
    
    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('/');
    }
}