   <!-- Sidebar -->
   <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

       <!-- Sidebar - Brand -->
       <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('admin.dashboard')}}">
           <div class="sidebar-brand-icon rotate-n-15">
               <i class="fas fa-laugh-wink"></i>
           </div>
           <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
       </a>

       <!-- Divider -->
       <hr class="sidebar-divider my-0">

       <!-- Nav Item - Dashboard -->
       <li class="nav-item active">
           <a class="nav-link" href="{{route('admin.dashboard')}}">
               <i class="fas fa-fw fa-tachometer-alt"></i>
               <span>Dashboard</span></a>
       </li>

       <!-- Divider -->
       <hr class="sidebar-divider">

       <!-- Heading -->
       <div class="sidebar-heading">
           Interface
       </div>

       <!-- Nav Item - Pages Collapse Menu -->
       <li class="nav-item">
           <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
               aria-expanded="true" aria-controls="collapseTwo">
               <i class="fas fa-fw fa-cog"></i>
               <span>Components</span>
           </a>
           <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
               <div class="bg-white py-2 collapse-inner rounded">
                   <h6 class="collapse-header">Custom Components:</h6>
                   <a class="collapse-item" href="buttons.html">Buttons</a>
                   <a class="collapse-item" href="cards.html">Cards</a>
               </div>
           </div>
       </li>

    

       <li class="nav-item">
           <a class="nav-link" href="{{route('admin.categories.index')}}">
           <i class="fas fa-fw fa-th"></i>
               <span>Categories</span></a>
       </li>

       <li class="nav-item">
           <a class="nav-link" href="{{route('admin.blogs.index')}}">
           <i class="fas fa-fw fa-blog"></i>
               <span>Blogs</span></a>
       </li>

       <!-- Nav Item - Tables -->
       <li class="nav-item">
           <a class="nav-link" href="{{route('admin.cars.index')}}">
           <i class="fas fa-fw fa-car"></i>
               <span>Cars</span></a>
       </li>

       <li class="nav-item">
           <a class="nav-link" href="{{route('admin.contact.index')}}">
               <i class="fas fa-fw fa-envelope"></i>
               <span>Contact Messages</span></a>
       </li>

       <li class="nav-item">
           <a class="nav-link" href="{{route('admin.service.index')}}">
           <i class="fas fa-fw fa-tools"></i>
               <span>@lang('services')</span></a>
       </li>

       <li class="nav-item">
           <a class="nav-link" href="{{route('admin.setting.index')}}">
               <i class="fas fa-fw fa-cog"></i>
               <span>@lang('settings')</span></a>
       </li>

       <!-- Divider -->
       <hr class="sidebar-divider d-none d-md-block">

       <!-- Sidebar Toggler (Sidebar) -->
       <div class="text-center d-none d-md-inline">
           <button class="rounded-circle border-0" id="sidebarToggle"></button>
       </div>

     

   </ul>
   <!-- End of Sidebar -->