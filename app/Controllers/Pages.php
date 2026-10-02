<?php

namespace App\Controllers;

use App\Models\TaskModel;
use App\Models\UserModel;

class Pages extends BaseController
{
    public function index(): string
    {
        $today = date('Y-m-d');
        $taskModel = new TaskModel();
        $tasks = $taskModel->where('task_date', $today)->orderBy('id', 'ASC')->findAll();

        return view('pages/welcome', ['tasks' => $tasks, 'today' => $today]);
    }

    public function profile(): string
    {
        $userModel = new UserModel();

        return view('pages/profile', ['user' => $userModel->first()]);
    }

    public function about(): string
    {
        return view('pages/about');
    }
}