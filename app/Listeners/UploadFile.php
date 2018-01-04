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
        $image = $event->image;

        $image_name = time().'.'.$image->getClientOriginalExtension();
        $destination_path = public_path('/images');
        $image->move($destination_path, $image_name);

        $full_path = '/images/'.$image_name;

        return $full_path;
    }


}
