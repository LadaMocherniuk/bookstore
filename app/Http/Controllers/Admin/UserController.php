<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.users.index');
    }
    public function create()
    {
        return " create user list";
    }
    public function store(Request $request)
    {

    }
    public function show(User $user)
    {
        return "show user";
    }
    public function edit(User $user)
    {
        return "edit user";
    }
    public function update(Request $request, User $user)
    {

    }
    public function destroy(User $user)
    {

    }
    
}