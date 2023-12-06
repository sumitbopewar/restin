<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\User;
use App\Models\Contact;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index(){
        
          $allOrders = Order::all();
         
          $allUsers = User::all();
          
          $allContacts = Contact::all();
         
          $today = Carbon::now()->toDateString();
          $todayOrders = Order::whereDate('created_at', $today)->get();
         
         return view('admin.dashboard',compact('allOrders','todayOrders','allUsers','allContacts'));
    }
}
