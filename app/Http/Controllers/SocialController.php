<?php

namespace App\Http\Controllers;

use App\Events\Upload;
use App\Models\Social;
use Illuminate\Http\Request;
use Validator;

class SocialController extends Controller
{

    protected $social;

    public function __construct(){
        $this->social = new Social();
    }

    public function index(){

        $data['socials'] = $this->social->all();

        return view('admin.pages.social', $data);
    }

    public function update(Request $request){

        $validator = Validator::make($request->all(), [
            'image'=>'required|image|mimes:jpeg,png,jpg',
            'link'=>'required|min:6',
        ]);

        if($validator->fails()){
            if(!empty($request->link)) {
                $headers = @get_headers($request->link);
                if ($headers == false) {
                    return response()->json(['error' => $validator->errors()->add('link', 'This Link Do Not Exist!')]);
                }
            }
            return response()->json(['error' => $validator->errors()]);

        } elseif(!empty($request->link)){
            $headers = @get_headers($request->link);
            if($headers == false) {
                return response()->json(['error'=>$validator->errors()->add('link' ,'This Link Do Not Exist!')]);
            }
        }

        $image_path = event(new Upload($request->file('image')));
        $this->social->create([
            'image'=>$image_path[0],
            'link'=>$request->link
        ]);

        return response()->json(['success'=>'Items Uploaded SuccessFully!']);

    }

    public function editSocial(Request $request){
        $data['social'] = $this->social->find($request->id);
        return view('admin.pages.social_edit', $data);
    }

    public function edit(Request $request){
        $validator = Validator::make($request->except('id'), [
            'image'=>'image|mimes:jpeg,png,jpg',
            'link'=>'required|min:6',
        ]);

        $social_item = $this->social->find($request->id);

        if($validator->fails()){
            if(!empty($request->link)) {
                $headers = @get_headers($request->link);
                if ($headers == false) {
                    return response()->json(['error' => $validator->errors()->add('link', 'This Link Do Not Exist!')]);
                }
            }
            return response()->json(['error'=>$validator->errors()]);

        } elseif(!empty($request->link)){
            $headers = @get_headers($request->link);
            if($headers == false) {
                return response()->json(['error'=>$validator->errors()->add('link' ,'This Link Do Not Exist!')]);
            }

        } elseif(empty($social_item)){

            return response()->json(['error'=>'Like This Item Do Not Exist In Slider DataBase!']);
        }
        if(empty($request->file('image'))){

            $social_item->update([
                'link'=>$request->link,
            ]);
            return response()->json(['success'=>'Items Uploaded SuccessFully!']);

        } else {
            $image_path = event(new Upload($request->file('image')));

            $social_item->update([
                'link' => $request->link,
                'image' => $image_path[0],
            ]);
        }
        return response()->json(['success'=>'Items Uploaded SuccessFully!']);
    }
}
