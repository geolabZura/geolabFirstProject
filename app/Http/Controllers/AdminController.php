<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Subscriber;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $data['services_count'] = Service::all()->count();
        $data['subscribers_count'] = Subscriber::all()->count();

        return view('admin.pages.statistic', $data);
    }
}
