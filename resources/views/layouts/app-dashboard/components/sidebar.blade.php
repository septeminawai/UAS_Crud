
 @if(Auth::user()->hasRole('admin'))
 <div class="h-100" data-simplebar>
     <!--- Sidemenu -->
     <div id="sidebar-menu">

         <ul id="side-menu">

             <li class="menu-title">Menu</li>

             <li>
                 <a href="{{route('dashboard')}}">
                     <i data-feather="home"></i>
                     <span> Dashboard </span>
                 </a>
             </li>

             <li>
                 <a href="{{route('employee.index')}}">
                     <i data-feather="users"></i>
                     @php
                     $countusers = DB::table('employee')->count();
                     @endphp
                     <span class="badge badge-success badge-pill float-right">{{ $countusers }}</span>
                     <span> Employee </span>
                 </a>
             </li>

             <li>
                <a href="#">
                    <i data-feather="book"></i>
                    @php
                    $countguestbook = DB::table('guest_book')->count();
                    @endphp
                    <span class="badge badge-success badge-pill float-right">{{ $countguestbook }}</span>
                    <span> Guest Book </span>
                </a>
            </li>

            <li>
                <a href="{{route('feedback.index')}}">
                    <i data-feather="book"></i>
                    @php
                    $countguestbook = DB::table('feedback_users')->count();
                    @endphp
                    <span class="badge badge-success badge-pill float-right">{{ $countguestbook }}</span>
                    <span> Feedback Users </span>
                </a>
            </li>

            <li>
                <a href="#">
                    <i data-feather="users"></i>
                    @php
                    $countguestbook = DB::table('users')->count();
                    @endphp
                    <span class="badge badge-success badge-pill float-right">{{ $countguestbook }}</span>
                    <span> Members </span>
                </a>
            </li>

         </ul>
     </div>
     <!-- End Sidebar -->

     <div class="clearfix"></div>

 </div>
}
@elseif (Auth::user()->hasRole('user')){
    <div class="h-100" data-simplebar>
        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul id="side-menu">

                <li class="menu-title">Menu</li>

                <li>
                    <a href="{{route('dashboard')}}">
                        <i data-feather="home"></i>
                        <span> Dashboard </span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i data-feather="fi-info"></i>
                        <span class="badge badge-success badge-pill float-right"></span>
                        <span> Questionnaire </span>
                    </a>
                </li>


            </ul>
        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
}
@endif
<!-- Sidebar -left -->





