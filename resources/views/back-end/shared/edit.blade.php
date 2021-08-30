
    
<div class="content">
<div class="row">
    
    
     <div class="col-md-4 ">
<div class="">
              
    <div class="card-body">
          
                
      {{isset($md4)? $md4:""}}  
        
                 
    </div>
</div>
    </div>
    
    
    <div class="col-md-8">
<div class="card">
              <div class="card-header card-header-primary">
                <h5 class="title">Edit {{$TableName}}</h5>
              </div>
    <div class="card-body">
          
        
        {{$slot}}  
        
                 
    </div>
      
</div>
    </div>
    
</div>
</div>


    

