<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function dash(){
        $data=Task::all();

        $OngoingCount = Task::where('status', 'Ongoing')->count();
        $DelayedCount = Task::where('status', 'Delayed')->count();
        $FinishedCount = Task::where('status', 'Finished')->count();
        return view('home',['board'=>$data], compact('OngoingCount', 'DelayedCount', 'FinishedCount'));

    }
}
