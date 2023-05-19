<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use LaravelFileViewer;

class fileReader extends Controller
{  
    public function readbook(Request $request, $name){
        //return($name);
        
            $file_name = $name;
            $url = env('APP_URL');
            $imgurl = "$url/uploads/$file_name";
            //dd($file_path);
           // $imgurl = "htttps://mydomain.com/images/img.png";
           $file = public_path("uploads/$file_name");
   
           if (file_exists($file)) {
           // dd('hey');
             $hey = $this->file_preview($file_name);
   
             return $hey;
            
           }
         

        //$this->filePreview($name);
    }
    public function file_preview($filename){

       $filepath = public_path("/uploads/$filename");

        $filePath = Storage::url("$filename");

       
  
        //dd(config('filesystems.default'));
  
        $file_url = asset("uploads/$filename");
  
       // dd($filePath);
        $file_data = [
            [
                'label' => __('Test'),
                'value' => 'Value',
            ],
        ];
  
        return LaravelFileViewer::show($filename, $filepath, $file_url, $file_data);
      }
}
