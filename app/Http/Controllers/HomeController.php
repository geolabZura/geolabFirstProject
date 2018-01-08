<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Slider;
use App\Models\Social;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $slider;
    protected $service;
    protected $social;

    public function __construct()
    {
        $this->slider = new Slider();
        $this->service = new Service();
        $this->social = new Social();
    }

    public function index(){
        $data['sliders'] = $this->slider->all();
        $data['services'] = $this->service->all();
        $data['socials'] = $this->social->all();
        return view('main.welcome', $data);
    }
}
