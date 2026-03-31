<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Company;
use App\Models\Employee;
use App\Models\Task;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'companies' => Company::count(),
            'employees' => Employee::count(),
            'tasks' => Task::count(),
        ]);
    }
}
