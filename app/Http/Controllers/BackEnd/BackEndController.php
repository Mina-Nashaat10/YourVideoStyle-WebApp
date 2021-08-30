<?php

namespace App\Http\Controllers\BackEnd;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use Illuminate\Database\Eloquent\Model;


class BackEndController extends Controller
{
     Protected $model;
    
    public function __construct(Model $model) {
        $this->model=$model;
    }
    
    public function index(){
        
        $users= $this->model;
        
        $users=$users->paginate(30);
        
        $TableName= $this->controller_prular_name();
        
        $RouteName= $this->view_file_name();
        
        
        
        return view("back-end.$RouteName.index", compact('users','TableName','RouteName'));
    }
    
    
    
    public function create(){
         
        $RouteName= $this->view_file_name();
         
        $TableName= $this->controller_prular_name();
        
        
        
        return view("back-end.$RouteName.create", compact("TableName","RouteName"));
            
    }
    
    public function edit($id)
    {
        
        $row= $this->model;
        
        $row=$row->FindOrFail($id);
        
        $RouteName= $this->view_file_name();
       
        $TableName= $this->controller_prular_name();
        
        
         
        return view("back-end.".$RouteName.".edit", compact("row","TableName","RouteName"));
    }
    
    public function destroy($id)
    {
        $this->model->FindOrFail($id)->delete();
        $RouteName= $this->view_file_name();
        return redirect()->route("$RouteName.index");
    }
    
  


   
    public function view_file_name()
    {
        return strtolower($this->controller_prular_name());
    }
    public function controller_prular_name()
    {
       return str_plural(class_basename($this->model));
    
    }
    
    
    
}
