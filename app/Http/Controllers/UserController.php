<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class UserController extends Controller
{
    // Регистрация
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function signup(Request $request)
    {
        // валидация
        $request->validate([
            'surname' => 'required|string|max:100',
            'name' => 'required|string|max:100',
            'patronymic' => 'required|string|max:100',
            'login' => 'required|string|max:100',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'birthday' => 'required|string|max:50',
            'phone' => 'required|string|max:12|min:12',
        ],
        [
            'surname.required' => 'Поле "Фамилия" обязательно для заполнения.',
            'name.required' => 'Поле "Имя" обязательно для заполнения.',
            'patronymic.required' => 'Поле "Отчество" обязательно для заполнения.',
            'login.required' => 'Поле "Логин" обязательно для заполнения.',
            'email.required' => 'Поле "Email" обязательно для заполнения.',
            'email.email' => 'Пожалуйста, введите корректный адрес электронной почты.',
            'email.unique' => 'Пользователь с таким адресом электронной почты уже зарегистрирован.',
            'password.required' => 'Поле "Пароль" обязательно для заполнения.',
            'password.string' => 'Поле "Пароль" должно быть строкой.',
            'password.min' => 'Пароль должен содержать минимум 6 символов.',
            'password.confirmed' => 'Подтверждение пароля не совпадает.',
            'birthday.required' => 'Поле "Дата рождения" обязательно для заполнения.',
            'phone.required' => 'Поле "Телефон" обязательно для заполнения.',
            'phone.string' => 'Поле "Телефон" должно быть строкой.',
            'phone.max' => 'Телефонный номер должен содержать максимум 12 символов.',
            'phone.min' => 'Телефонный номер должен содержать минимум 12 символов.',
        ]);

        // регистрация
        $user = $request->all();
        User::create([
            'surname' => $user["surname"],
            'name' => $user["name"],
            'patronymic' => $user["patronymic"],
            'login' => $user["login"],
            'email' => $user["email"],
            'password' => Hash::make($user["password"]),
            'birthday' => $user["birthday"],
            'phone' => $user["phone"],
            "role_id" => "2",
        ]);

        // авторизация и переадресация
        Auth::attempt([
            'login' => $user['login'],
            'password' => $user['password'],
        ]);
        return redirect('/account')->with("success",  "");
    }

    // Аутентификация
    public function showLoginForm()
    {
        return view('auth.login');
    }
    public function signin(Request $request)
    {
        // валидация
        $request->validate([
            'login' => 'required',
            'password' => 'required',
        ], [
            'login.reqired' => 'Поле логин обязательно для заполнения',
            'password.reqired' => 'Поле пароль обязательно для заполнения'
        ]);

        // Попытка аутентификации
        $credentials = $request->only("login", "password");
        //   dd($request);
        if (Auth::attempt($credentials)) {

            $user = Auth::user();
            // Проверка роли пользователя
        if ($user->role_id == '1') {
            // Действия для пользователя с ролью 'admin'
            return redirect()->route('admin');
        } elseif ($user->role_id == '2') {
            // Действия для пользователя с ролью 'user'
            return redirect()->route('account');
        }
    } else {
            return back()->withErrors(['login' => 'Неверные данные']);
        }
    }
    // Выход 
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    // Аккаунт
    public function account()
    {
      
        return view('account');
    }

    public function accountUser()
    {
         // Получить текущего авторизованного пользователя
        $user = Auth::user();

        return view('accountUser', ["user" =>$user]);
    }

    public function accountUserUpdate(Request $request)
    {
        $user  = User::find($request->input('id'));
         // Проверка, является ли текущий пользователь владельцем профиля

        $this->authorize('update',$user);
        // валидация
        $request->validate([
            'surname' => 'required|string|max:100',
            'name' => 'required|string|max:100',
            'patronymic' => 'required|string|max:100',
            'login' => 'required|string|max:100',
            'email' => 'required|email',
            'birthday' => 'required|string|max:50',
            'phone' => 'required|string|max:12|min:12',
        ]);

        // $user = $request->all();
        $user->update([
            'surname' => $request->input('surname'),
            'name' => $request->input('name'),
            'patronymic' => $request->input('patronymic'),
            'login' => $request->input('login'),
            'email' => $request->input('email'),
            'birthday' => $request->input('birthday'),
            'phone' => $request->input('phone'),
        ]);

        response()->json(['success' => 'Профиль успешно обновлен!', 'user' => $user]);
        
    }

}
