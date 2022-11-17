<?php

namespace App\Http\Controllers;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){

        $user = new User();
         $user->name='marietah';
         $user->email='marieta@gmail.com';
         $user->bycryt('password');
         $user->save();


        // $user=user::all();
        // return $user;

        // user::where('id',1)->delete();

        // DB::table('users')->insert([
        //     'name'=>'marieta',
        //     'email' => 'marieta@gmail.com',
        //     'password' => "marieta"
        //     ]);
            
        // DB::insert('insert into users (name,email,password) values (?, ?,?)', [ 'Nenyasha','Nenyasha@gmail.com','nenyasha']);

        // $users = DB::table('select * from users');
        //  return $users;
    }
}
