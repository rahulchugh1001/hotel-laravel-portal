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
              <a href="{{route('users.profile')}}">
                <div class="parent-icon"><i class="bi bi-file-person-fill"></i>
                </div>
                <div class="menu-title">Profle</div>
              </a>
              <ul>
                <li> <a href="app-emailbox.html"><i class="bi bi-circle"></i>Agency Profle</a>
                </li>
              </ul>
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