<?php

namespace App\Http\Controllers;

use App\Http\Requests\AccountRequest;
use Illuminate\Http\Request;
use App\User;

class AccountController extends Controller
{
    //
    public function index(){
        $account = User::all();
        return view('admin.account.index', compact('account'));
    }
    public function edit($id){
        $account = User::findOrFail($id);
        return view('admin.account.edit', compact('account'));
    }
    public function update($id, AccountRequest $request){
        $user = User::findOrFail($id);
        $user->fill($request->except('password'));
        $user->save();
        return redirect()->route('account.index');
    }
    public function destroy($id){
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('account.index');
    }
}
