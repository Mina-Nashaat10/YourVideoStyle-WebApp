<?php

namespace App\Http\Controllers\BackEnd;

use Illuminate\Http\Request;

use App\Models\Category;

use App\Models\Video;


use App\Http\Requests\BackEnd\Videos\Store;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;

class Videos extends BackEndController
{
      public function __construct(Video $model) {
        parent::__construct($model);
    }


   public function store(Store $request)
    {
        $filename= $this->uploade_image($request);


         if($request->hasFile("src"))
                {
                    $filename2= $this->uploade_video($request);
                    $requestarray=["User_id"=>session('userid'),"image"=>$filename,"src"=>$filename2]+$request->all();
                }
                else{
                    $requestarray=["User_id"=>session('userid'),"image"=>$filename]+$request->all();
                }
        $row=Video::create($requestarray);
        return redirect()->route("videos.index");
    }

    public function update(Store $request,$id)
    {
        $row=Video::FindOrFail($id);
        $requestarray=$request->all();
                if($request->hasFile("image") && $request->hasFile("src") )
                {
                    $filename= $this->uploade_image($request);
                    $filename2= $this->uploade_video($request);
                    $requestarray=["image"=>$filename,"src"=>$filename2]+$request->all();
                }
                else if($request->hasFile("image"))
                {
                    $filename= $this->uploade_image($request);
                    $requestarray=["image"=>$filename]+$request->all();
                }

                else if($request->hasFile("src")){

                    $filename2= $this->uploade_video($request);

                    $requestarray=["src"=>$filename]+$request->all();
                }



                $row->update($requestarray);


                return redirect()->route("videos.edit",["id"=>$row->id]);
    }

     protected  function uploade_image($request)
    {
        $file=$request->file("image");

        $filename= time().str_random(10).".".$file->getClientOriginalExtension();

        $file->move(public_path('uploads'),$filename);

        return $filename;
    }


     protected  function uploade_video($request)
    {
        $file=$request->file("src");

        $filename= time().str_random(10).".".$file->getClientOriginalExtension();

        $file->move(public_path('video'),$filename);

        return $filename;
    }


}
