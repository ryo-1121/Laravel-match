<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Intervention\Image\Facades\Image;
use App\Services\CheckExtensionServices;
use App\Services\FileUploadServices;
use App\Services\FileSaveServices;
use App\Http\Requests\ProfileRequest;

class UserController extends Controller
{
    public function show($id)
    {
        $user = User::findorFail($id);

        return view('users.show', compact('user'));
    }

    public function edit($id)
    {
        $user = User::findorFail($id);

        return view('users.edit', compact('user'));
    }

    public function update($id, ProfileRequest $request)
    {

        $user = User::findorFail($id);

        for ($i = 1; $i <= 3; $i++) {
            $img_name = 'img_name'.$i;
            // dd($request['img_name'.$i],$request);
            if (!is_null($request[$img_name])) {
                FileSaveServices::fileSave($request[$img_name], $user, $i);
            }
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->sex = $request->sex;
        $user->self_introduction = $request->self_introduction;

        $user->save();

        return redirect('home');
    }
    public function profile($id)
    {
        $user = User::findorFail($id);

        return view('users.profile', compact('user'));
    }
}
