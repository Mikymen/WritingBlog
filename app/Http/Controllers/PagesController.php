<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Artisan;
use Illuminate\Support\Facades\Schema;
use Cloudinary\Configuration\Configuration;
use Cloudinary\Cloudinary;

class PagesController extends Controller
{
    public function index(){
        $title="Welcome friends to Laravel APP";
        //return view('pages.index')->with('title',$title);
        //Artisan::call('db:wipe');
        $this->RecreateBd();
        return redirect('/home');
    }
    public function recreate(){
        return $this->RecreateBd();
    }
    public function about(){
        $title="About Us";
        return view('pages.about')->with('title',$title);
    }
    public function services(){
        //must replace with API data
        $data = array(
            'title' => 'Services',
            'services' => [
                ['name'=>'Graphic design', 'score'=> 5],
                ['name'=>'Web design', 'score'=> 5],
                ['name'=>'Programming', 'score'=> 5],
                ['name'=>'Mobile development', 'score'=> 3],
                ['name'=>'Web development', 'score'=> 5],
                ['name'=>'Desktop development', 'score'=> 3],
                ['name'=>'API programming', 'score'=> 5],
                ['name'=>'Cross platform development', 'score'=> 3],
                ['name'=>'Consultancy', 'score'=> 4]
                ]
        );
        return view('pages.services')->with($data);
    }
    public function RecreateBd(){
        try {
            $schema =Schema::hasTable('posts');
            return  "Exists";
        } catch (\Throwable $th) {

            Artisan::call('migrate', [
                '--force' => true,
                '--seed' => 1]);
            
                return  "Created";
        }
    }

    public function TestImage(){
        return view('pages.testcloud');
    }
    public function TestCloud(Request $request){
        $cloud_name=env('CL_CLOUD_NAME');
        $api_key=env('CL_API_KEY');
        $api_secret=env('CL_API_SECRET');

        //Handle File Upload
        if ($request->hasFile('cover_image')) {
            //Get filename with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //upload image
            //$path =$request->file('cover_image')->storeAs('public/cover_images',$fileNameToStore);
            $cloudinary = new Cloudinary('cloudinary://'.$api_key.':'.$api_secret.'@'.$cloud_name.'?url[secure]=true&url[cname]=my_site.com');
            $imgb64 ="data:@file/".$extension.";base64,".base64_encode(file_get_contents($request->file('cover_image')));
            //return $image_file;
            $image_name= $filename;
            //$image_name="kitti";
            try {
                $response = $cloudinary->uploadApi()->upload($imgb64,  ["public_id" => $image_name, "folder" => "imgpub"]);
                return redirect('/testimage')->with('success',"Saved at:  ". $response['secure_url']);
            } catch (\Throwable $th) {
                $error = ["MESSAGE"=> $th->getMessage(),"FILE" => $th->getFile(),"LINE" => $th->getLine()];
                return redirect('/testimage')->with('error', print_r($error,true));
            }            
        }
    }
}
