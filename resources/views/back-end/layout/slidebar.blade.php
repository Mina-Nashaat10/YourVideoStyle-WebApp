
@php

function is_active($routename)
{
  return request()->segment(2)!=null && request()->segment(2)==$routename ? "active":"";
}

@endphp

<div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
      
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
           Le rêve
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li class="{{is_active('home')}} ">
            <a href="#">
              <i class="now-ui-icons design_app"></i>
              <p>Dashboard</p>
            </a>
          </li>
          
          
          <li class="{{is_active('users')}}">
            <a href="#">
              <i class="now-ui-icons text_caps-small"></i>
              <p>All Admins</p>
            </a>
          </li>
          
          
          <li class="{{is_active('users')}}">
            <a href="#">
              <i class="now-ui-icons text_caps-small"></i>
              <p>Users</p>
            </a>
          </li>
          
           
          <li class="{{is_active('categories')}}">
            <a href="#">
              <i class="now-ui-icons text_caps-small"></i>
              <p>Categories</p>
            </a>
          </li>
          
             
         
         
          
          
           
          
          
           <li class="{{is_active('videos')}}">
            <a href="#">
              <i class="now-ui-icons text_caps-small"></i>
              <p>Videos</p>
            </a>
          </li>
          
          
        </ul>
      </div>
    </div>