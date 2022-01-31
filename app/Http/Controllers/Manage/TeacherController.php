<?php

namespace App\Http\Controllers\Manage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class TeacherController extends Controller
{
    public function index()
    {
        $users = User::role('walikelas')->get();

        return view('manage.user.teacher.index', compact('users'));
    }
}
