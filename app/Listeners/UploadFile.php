<?php

namespace App\Listeners;

use App\Events\Upload;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class UploadFile
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  Upload  $event
     * @return string
     */
    public function handle(Upload $event)
    {
        //get image object
        $image = $event->image;

        //rename image's name
        $image_name = time().'.'.$image->getClientOriginalExtension();
        //give destination to image
        $destination_path = public_path('/images');
        //insert image into laravel app
        $image->move($destination_path, $image_name);


        //get full path of now uploaded image
        $full_path = '/images/'.$image_name;
        //get svg image content as svg code
        $svg_code = \File::get(public_path($full_path));
        //find svg prefix
        $find_string   = '<svg';
        //get position in string of svg prefix
        $position = strpos($svg_code, $find_string);
        //add special class for image in cvg code
        $str = substr_replace($svg_code, 'class="serviceIcon" ', $position+5, 0);
        //rebase svg file code another code // added new class for style
        \File::put(public_path('/images/'.$image_name), $str);

        //return full path of image for database
        return $full_path;
    }


}
