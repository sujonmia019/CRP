<?php

namespace App\Http\Controllers\Backend\Worker;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    public function dashboard() {
        return view('backend.worker.pages.dashboard');
    }
}
