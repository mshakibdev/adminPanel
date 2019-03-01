<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SmsController extends Controller
{
    
    public function index()
    {
        
    
        $numbers = DB::table('users')->pluck('phone');
    
        
           return view('utilities.water',$numbers);
        
    }
    public function OnetoMany()
    {
        $numbers = DB::table('users')->pluck('phone');
    
        onnorokom_sms(['message' => 'some text msg', 'mobile_number' => ['01521106352','01715376826']]);
        
        return 'message sent';
    
    }
    
    public function OnetoOne()
    {
        
        onnorokom_sms(['message' => 'some text msg', 'mobile_number' => '01918....']);
    
    }
}
