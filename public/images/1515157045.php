<?php

namespace App\Http\Controllers;

use App\Events\Upload;
use App\Models\Service;
use Illuminate\Http\Request;
use Validator;

class ServiceController extends Controller
{
    protected $service;

    public function __construct()
    {
        $this->service = new Service();
    }

    public function index(){
        $data['services'] = $this->service->all();
        return view('admin.pages.service', $data);
    }

    public function upload(Request $request){

        $validator = Validator::make($request->all(), [
            'image'=>'required|image|mimes:svg',
            'title'=>'required|min:3|max:30',
        ]);

        if($validator->fails()){
            return response()->json(['error'=>$validator->errors()]);
        }else{
            $image_path = event(new Upload($request->file('image')));

            $this->service->create([
                'image'=>$image_path[0],
                'title'=>$request->title
            ]);

            return response()->json(['success'=>'Items Uploaded SuccessFully!']);
        }
    }

    public function editService(Request $request){
        $data['service'] = $this->service->find($request->id);
        return view('admin.pages.service_edit', $data);
    }

    public function edit(Request $request){
        $validator = Validator::make($request->except('id'), [
            'image'=>'image|mimes:svg',
            'title'=>'required|min:3|max:30',
        ]);

        $service_item = $this->service->find($request->id);

        if($validator->fails()){
            return response()->json(['error'=>$validator->errors()]);

        } elseif(is_null($service_item)){

            return response()->json(['error'=>'Like This Item Do Not Exist In Slider DataBase!']);
        } else {
            if(empty($request->file('image'))){
                $service_item->update([
                    'title'=>$request->title,
                    'date'=>$request->date
                ]);
            } else {
                $image_path = event(new Upload($request->file('image')));

                $service_item->update([
                    'title' => $request->title,
                    'image' => $image_path[0],
                    'date' => $request->date
                ]);
            }
            return response()->json(['success'=>'Items Uploaded SuccessFully!']);
        }
    }

    public function delete(Request $request){
        $this->service->find($request->id)->delete();
        return response()->json(['success'=>'Items Deleted SuccessFully!']);
    }
}