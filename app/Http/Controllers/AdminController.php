<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $permissions = Permission::all();
        return view('admin.login');
    }

    public function add_user()
    {
        
        $permissions = Permission::all();
        return view('admin.add_user',compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     */

    // ...

    public function admin_login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::guard('admin')->attempt($credentials)) {
            Log::debug('Admin login successful', ['email' => $credentials['email']]);
            return redirect()->intended('/dashboard');
        } else {
            Log::debug('Admin login failed', ['email' => $credentials['email']]);
            return redirect()->back()->withErrors([
                'email' => 'Invalid credentials.',
            ]);
        }
    }
    
    public function admin_register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
            'role_access' => 'array'
        ]);

        $user = new Admin();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        // $user->assignRole('user');
        // $user->givePermissionTo($request->role_access);

        return redirect('/add_user')->with('success', 'User registered successfully.');
    }

    public function logout()
    {
        Auth::guard('admin')->logout();

        return redirect('/admin/login');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {
        $userData = Admin::all();
        return view('admin.user_list', compact('userData'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin, $id)
    {
        $users = Admin::find($id);
        $users->delete();
        return redirect('/user_list')->with('success', 'User deleted successfully.');
    }
}