<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Ensure to import the Customer model
use Illuminate\Support\Facades\Hash; // Import the Hash facade
use Illuminate\Support\Facades\Auth; // Import the Auth facade

class AuthController extends Controller
{
   public function login(Request $request)
    {
        // Validate the form data
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8'],
        ]);
    
        $credentials = $request->only('email', 'password');
    
        // Attempt to log the user in
        if (Auth::attempt($credentials, $request->filled('remember'))) {
            // Regenerate session to prevent session fixation
            $request->session()->regenerate();
        
            // Check the user's role
            $user = Auth::user();
            if ($user->role === 'admin') {
                return redirect()->route('admin.dashboard')->with('success', 'Welcome, Admin!');
            }else if($user->role === 'vendor') {
                return redirect()->route('vendor.dashboard')->with('success', 'Welcome, Vendor!');
            }else{
                return redirect()->route('dashboard')->with('success', 'Welcome back!');
            }
        }
    
        return back()->withErrors(['email' => 'Invalid credentials'])->withInput();
    }



    public function register(Request $request)
    {
         // Validate the form data
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:customers'],
            // 'phoneno' => ['required', 'string', 'regex:/^\d{10}$/'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ], [
            'email.unique' => 'The email has already been taken.',
            // 'phoneno.regex' => 'The phone number must be exactly 10 digits.',
        ]);

        try {
            // Create a new customer
            $customer = User::create([
                'name' => $request->name,
                'email' => $request->email,
                // 'phoneno' => $request->phoneno,
                'password' => Hash::make($request->password),
                'role'=>'user'
            ]);

            session()->flash('success', 'Registration successful! You can now log in.');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Registration failed, please try again.'])->withInput();
        }
        return redirect()->route('login');
    }
}
