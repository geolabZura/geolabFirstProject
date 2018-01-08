<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $slider;
    protected $service;

    public function __construct()
    {
        $this->slider = new Slider();
        $this->service = new Service();
    }

    public function index(){
        $data['sliders'] = $this->slider->all();
        $data['services'] = $this->service->all();
        return view('main.welcome', $data);
    }
}
