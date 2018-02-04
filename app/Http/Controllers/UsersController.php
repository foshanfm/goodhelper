<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserRequest;

class UsersController extends Controller
{
    //
    public function show(User $user)
    {
        $this->authorize('update', $user);
        return view('users.show', compact('user'));
    }

    public function record(User $user)
    {
        $this->authorize('update', $user);
        return view('users.record',compact('user'));
    }

    public function update(UserRequest $request, User $user)
    {
       $this->authorize('update', $user);
       $user->update($request->all());
       return redirect()->route('users.show', $user->id)->with('success', '个人资料更新成功！');
    }
}