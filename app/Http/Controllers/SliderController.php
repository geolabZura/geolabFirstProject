<?php

namespace App\Http\Controllers;

use App\Events\Upload;
use App\Models\Slider;
use Illuminate\Http\Request;
use Validator;

class SliderController extends Controller
{
    protected $slider;

    public function __construct()
    {
        $this->slider = new Slider();
    }

    public function index(){
        $data['sliders'] = $this->slider->all();
        return view('admin.pages.slider', $data);
    }

    public function editSlider(Request $request){
        $data['slider'] = $this->slider->find($request->id);
        return view('admin.pages.slider_edit', $data);
    }

    public function edit(Request $request){
        $validator = Validator::make($request->except('id'), [
            'image'=>'image|mimes:jpeg,png,jpg',
            'title'=>'required|min:3|max:30',
            'date'=>'required'
        ]);

        $slider_item = $this->slider->find($request->id);

        if($validator->fails()){
            return response()->json(['error'=>$validator->errors()]);
        }
        if(is_null($slider_item)){
            return response()->json(['error'=>'Like This Item Do Not Exist In Slider DataBase!']);
        } else {
            if(empty($request->file('image'))){
                $slider_item->update([
                    'title'=>$request->title,
                    'date'=>$request->date
                ]);
            } else {
                $image_path = event(new Upload($request->file('image')));

                $slider_item->update([
                    'title' => $request->title,
                    'image' => $image_path[0],
                    'date' => $request->date
                ]);
            }
            return response()->json(['success'=>'Items Uploaded SuccessFully!']);
        }
    }

    public function upload(Request $request){
        $validator = Validator::make($request->all(), [
            'image'=>'required|image|mimes:jpeg,png,jpg',
            'title'=>'required|min:3|max:30',
            'date'=>'required'
        ]);


        if($validator->fails()){
            return response()->json(['error'=>$validator->errors()]);
        }else{
            $image_path = event(new Upload($request->file('image')));

            $this->slider->create([
                'title'=>$request->title,
                'image'=>(string)$image_path[0],
                'date'=>$request->date
            ]);

            return response()->json(['success'=>'Items Uploaded SuccessFully!']);
        }
    }

    public function delete(Request $request){

        $this->slider->find($request->id)->delete();
        return response()->json(['success'=>'Items Deleted SuccessFully!']);
    }
}
