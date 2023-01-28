<header class="main-header">
    <!-- Logo -->
    <a href="{{ url('/admin/home') }}" class="logo" style="font-size: 22px; color: rgb(255, 255, 255)">
        {{-- {{ Auth::user()->name }} --}}
        
        <img src="https://icons.iconarchive.com/icons/gakuseisean/aire/32/Documents-icon.png">
        File System
        <!-- mini logo for sidebar mini 50x50 pixels -->
        {{-- <span class="logo-mini">
            <span class="title" style="float: right">User Login :{{ Auth::user()->name }}</span>
           @lang('quickadmin.quickadmin_title')</span>
           {{-- <img src="https://icons.iconarchive.com/icons/janosch500/tropical-waters-folders/32/Documents-icon.png"> --}}
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">
           @lang('quickadmin.quickadmin_title')</span> --}}
           {{-- Hello: {{ Auth::user()->name }} --}}
           
            
    </a>
        
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            
            {{-- <span class="title" style="float: right">User Login :{{ Auth::user()->name }}</span>
            <i class="fa fa-user"></i> --}}
        </a>
    </nav>
    
</header>



