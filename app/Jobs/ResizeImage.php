<?php

namespace App\Jobs;

use App\Blog;
use Image;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ResizeImage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

 
    protected $fileUpload;

    public function __construct(Blog $fileUpload)
    {

        $this->fileUpload = $fileUpload;
    }

    public function handle()
    {

        $image = $this->fileUpload;
        $full_image_path = public_path($image->foto);
        $resized_image_path = public_path( $image->foto);

        $img = Image::make($full_image_path)->resize(1024, 680, function($constraint)
        {
            $constraint->aspectRatio();
        });
        
        $img->insert($img, 'center');

        if(file_exists(public_path($image->foto))){
            unlink(public_path($image->foto));
        }

        $img->save($resized_image_path);
    }
}
