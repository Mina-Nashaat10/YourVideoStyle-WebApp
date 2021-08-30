
<form action="{{route("$RouteName.destroy",['id'=>$user])}}" method="post">
    {{csrf_field()}}
    {{method_field("DELETE")}}
    
    
    
    <button class="btn btn-primary btn-fab btn-icon btn-round">
       <i  class="now-ui-icons ui-1_simple-remove"></i>
   </button>
    
</form>



    



