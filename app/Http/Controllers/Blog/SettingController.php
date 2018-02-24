<?php

namespace App\Http\Controllers\Blog;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SettingController extends Controller
{
    public function index(){
        return view('blog.personal_room.settings.index');
    }

    public function editPassword(Request $request){
        if (!(Hash::check($request->get('password_old'), Auth::user()->password))) {
            return redirect()->back()->with("error","Ваш текущий пароль не совпадает с указанным вами паролем. Пожалуйста, попробуйте еще раз.");
        }

        if(strcmp($request->get('password_old'), $request->get('password_new')) == 0){
            return redirect()->back()->with("error","Новый пароль не может быть таким же, как ваш текущий пароль. Выберите другой пароль.");
        }

        $validatedData = $request->validate([
            'password_old' => 'required',
            'password_new' => 'required|string|min:6|confirmed',
        ]);



        $user = Auth::user();
        $user->password = $request->get('password_new');
        $user->save();

        return redirect()->back()->with("success","Пароль успешно изменен !");
    }

    public function editEmail(Request $request){
        $request->validate([
            'email' => 'required|email|max:255|unique:users'
        ]);

        $user = Auth::user();
        $user->email = $request->get('email');
        $user->save();
        return redirect()->back()->with("success","Email успешно изменен !");

    }
}
