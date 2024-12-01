<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use Illuminate\Http\Request;

class EmployerController extends Controller
{
    public function index()
    {
        $employer = Employer::query()->with(['jobs'])->get();
        return view('components.employers.index', ['employers' => $employer]);
    }
}
