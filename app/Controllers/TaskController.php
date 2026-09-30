<?php

namespace App\Controllers;

use App\Models\TaskModel;
use App\Models\UserModel;

class TaskController extends BaseController
{
    public function index()
    {
        $taskModel = new TaskModel();
        $data['tasks'] = $taskModel->where('task_date', date('Y-m-d'))->findAll();
        return view('welcome_message', $data);
    }

    public function tasks()
    {
        $taskModel = new TaskModel();
        $data['tasks'] = $taskModel->findAll();
        return view('tasks_list', $data);
    }

    public function profile()
    {
        $userModel = new UserModel();
        $data['user'] = $userModel->first();
        return view('profile', $data);
    }

    public function about()
    {
        return view('about');
    }
}