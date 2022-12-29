   <aside class="sidebar-wrapper" data-simplebar="true">
          <div class="sidebar-header">
            <div>
              <img src="{{asset('frontend/img/logo.png')}}" class="logo-icon" alt="logo icon">
            </div>
            <div>
              <h6 class="logo-text">Admin Panel</h6>
            </div>
            <div class="toggle-icon ms-auto"> <i class="bi bi-list"></i>
            </div>
          </div>
          <!--navigation-->
        <ul class="metismenu" id="menu">
            <li>
              <a href="{{route('dashboard')}}">
                <div class="parent-icon"><i class="bi bi-house-fill"></i>
                </div>
                <div class="menu-title">Dashboard</div>
              </a>              
            </li>
            <li>
              <a href="#">
                <div class="parent-icon"><i class="bi bi-file-person-fill"></i>
                </div>
                <div class="menu-title">Profle</div>
              </a>
              
            </li>
            <li>
              <a href="{{route('blog_category_list')}}">
                <div class="parent-icon"><i class="bi bi-file-person-fill"></i>
                </div>
                <div class="menu-title">Blog Category</div>
              </a>
              
            </li>
            
             <li>
              <a href="{{route('blog_list')}}">
                <div class="parent-icon"><i class="bi bi-file-person-fill"></i>
                </div>
                <div class="menu-title">Blog</div>
              </a>
              
            </li>

             <li>
              <a href="{{route('slider_list')}}">
                <div class="parent-icon"><i class="bi bi-file-person-fill"></i>
                </div>
                <div class="menu-title">Slider</div>
              </a>
              
            </li>

             <li>
              <a href="{{route('service_list')}}">
                <div class="parent-icon"><i class="bi bi-file-person-fill"></i>
                </div>
                <div class="menu-title">Service</div>
              </a>
              
            </li>

             <li>
              <a href="{{route('room_list')}}">
                <div class="parent-icon"><i class="bi bi-file-person-fill"></i>
                </div>
                <div class="menu-title">Room List</div>
              </a>
              
            </li>
             <li>
              <a href="{{route('lead_room_query_list')}}">
                <div class="parent-icon"><i class="bi bi-file-person-fill"></i>
                </div>
                <div class="menu-title">Room Query Leads</div>
              </a>
              
            </li>
            <li>
              <a href="{{route('testimonial_list')}}">
                <div class="parent-icon"><i class="bi bi-file-person-fill"></i>
                </div>
                <div class="menu-title">Testimonial</div>
              </a>
              
            </li>
            
			 
		
			 
			
			
			<li>
			
              <a href="{{ route('logout') }}">
                <div class="parent-icon"><i class="bi bi-lock-fill"></i>
                </div>
                <div class="menu-title">Logout</div>
              </a>
            </li>

            <!-- <li class="menu-label">UI Elements</li> -->
           
          </ul>
          <!--end navigation-->
       </aside>