<header class="main-header">
    <!-- Logo -->
    <a href="{{ URL::to('admin') }}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>F</b>aden</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Faden</b></span>
    </a>
    
    
  
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Sidebar toggle button-->
<div class="dropdown">
       <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        {{ trans('message.language') }}  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
       <a class="dropdown-item" href="{{ url('lang/en') }}">En</a>
       <a class="dropdown-item" href="{{ url('lang/ar') }}">AR</a>

  </div>
</div>


<div class="dropdown">
           <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> {{ Auth::user()->name }} </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    @guest
                            
                            <a class="dropdown-item" href="{{ route('login') }}">{{ __('Login') }}</a>
                        
                        @if (Route::has('register'))
                        
                                <a class="dropdown-item" href="{{ route('register') }}">{{ __('Register') }}</a>
                        
                        @endif
                    @else
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
            
                            
                        @endguest

          

        </div>
</div>
   
      @include('admin.layouts.menu')
    </nav>

  </header>

  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{url('/')}}/design/adminlte/dist/img/avatar5.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p></p>
          <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('message.online') }}</a>
        </div>
      
      </div>

      
      <!-- search form -->
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">{{ trans('message.dashboard') }}</li>
        <li class="{{'admin/client' == request()->path() ? 'active':'' || 'admin/client/create' == request()->path() ? 'active':'' }} treeview">
          <a href="">
            <i class="fa fa-dashboard"></i> <span>{{ trans('message.clients') }}</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{'admin/client' == request()->path() ? 'active':''}}"><a href="{{url ('/admin/client') }}"><i class="fa fa-circle-o"></i> {{ trans('message.clients') }}</a></li>
            <li  ><a href="{{url ('/admin/client/create') }}"><i class="fa fa-circle-o"></i> {{ trans('message.add') }} {{ trans('message.client') }}</a></li>
          </ul>
        </li>

        <li class="{{'admin/partner' == request()->path() ? 'active':'' || 'admin/partner/create' == request()->path() ? 'active':'' }} treeview">
          <a href="">
            <i class="fa fa-dashboard"></i> <span>{{ trans('message.partners') }}</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{'admin/partner' == request()->path() ? 'active':''}}"><a href="{{url ('/admin/partner') }}"><i class="fa fa-circle-o"></i> {{ trans('message.partners') }}</a></li>
            <li  ><a href="{{url ('/admin/partner/create') }}"><i class="fa fa-circle-o"></i> {{ trans('message.add') }} {{ trans('message.partner') }}</a></li>
          </ul>
        </li>



        <li class="{{'admin/hierarchy' == request()->path() ? 'active':'' || 'admin/hierarchy/create' == request()->path() ? 'active':'' }} treeview">
          <a href="">
            <i class="fa fa-dashboard"></i> <span>{{ trans('message.hierarchies') }}</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{'/admin/hierarchy' == request()->path() ? 'active':''}}"><a href="{{url ('/admin/hierarchy') }}"><i class="fa fa-circle-o"></i> {{ trans('message.hierarchies') }}</a></li>
            <li class="{{'/admin/hierarchy/create' == request()->path() ? 'active':''}}"><a href="{{url ('/admin/hierarchy/create') }}"><i class="fa fa-circle-o"></i> {{ trans('message.add') }} {{ trans('message.hierarchy') }}</a></li>
          </ul>
        </li>
        <li class="{{'admin/work' == request()->path() ? 'active':'' || 'admin/work/create' == request()->path() ? 'active':'' }} treeview">
          <a href="">
            <i class="fa fa-dashboard"></i> <span>{{ trans('message.works') }}</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class=" treeview-menu">
            <li class="{{'/admin/work' == request()->path() ? 'active':''}}"><a href="{{url ('/admin/work') }}"><i class="fa fa-circle-o"></i> {{ trans('message.works') }}</a></li>
            <li class="{{'/admin/work/create' == request()->path() ? 'active':''}}" ><a href="{{url ('/admin/work/create') }}"><i class="fa fa-circle-o"></i> {{ trans('message.add') }} {{ trans('message.work') }}</a></li>
          </ul>
        </li>
        <li class="{{'admin/thank' == request()->path() ? 'active':'' || 'admin/thank/create' == request()->path() ? 'active':'' }} treeview">
          <a href="">
            <i class="fa fa-dashboard"></i> <span>{{ trans('message.thanks') }}</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{'/admin/thank' == request()->path() ? 'active':''}}"><a href="{{url ('/admin/thank') }}"><i class="fa fa-circle-o"></i> {{ trans('message.thanks') }}</a></li>
            <li class="{{'/admin/thank/create' == request()->path() ? 'active':''}}"><a href="{{url ('/admin/thank/create') }}"><i class="fa fa-circle-o"></i> {{ trans('message.add') }} {{ trans('message.thank') }}</a></li>
          </ul>
        </li>
        <li class="{{'admin/social' == request()->path() ? 'active':'' || 'admin/social/create' == request()->path() ? 'active':'' }} treeview">
          <a href="">
            <i class="fa fa-dashboard"></i> <span>{{ trans('message.social') }}</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{'/admin/social' == request()->path() ? 'active':''}}"><a href="{{url ('/admin/social') }}"><i class="fa fa-circle-o"></i> {{ trans('message.social') }}</a></li>
            <li class="{{'/admin/social/create' == request()->path() ? 'active':''}}"><a href="{{url ('/admin/social/create') }}"><i class="fa fa-circle-o"></i> {{ trans('message.add') }} {{ trans('message.social') }}</a></li>
          </ul>
        </li>
        <li class="{{'admin/setting' == request()->path() ? 'active':'' || 'admin/setting/create' == request()->path() ? 'active':'' }} treeview">
          <a href="">
            <i class="fa fa-dashboard"></i> <span>{{ trans('message.settings') }}</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{'/admin/setting' == request()->path() ? 'active':''}}"><a href="{{url ('/admin/setting') }}"><i class="fa fa-circle-o"></i> {{ trans('message.settings') }}</a></li>
            <li class="{{'/admin/setting/create' == request()->path() ? 'active':''}}"><a href="{{url ('/admin/setting/create') }}"><i class="fa fa-circle-o"></i> {{ trans('message.add') }} {{ trans('message.setting') }}</a></li>
          </ul>
        </li>

        <li class="{{'admin/event' == request()->path() ? 'active':'' || 'admin/event/create' == request()->path() ? 'active':'' }} treeview">
          <a href="">
            <i class="fa fa-dashboard"></i> <span>{{ trans('message.events') }}</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{'/admin/event' == request()->path() ? 'active':''}}"><a href="{{url ('/admin/event') }}"><i class="fa fa-circle-o"></i> {{ trans('message.events') }}</a></li>
            <li class="{{'/admin/event/create' == request()->path() ? 'active':''}}"><a href="{{url ('/admin/event/create') }}"><i class="fa fa-circle-o"></i> {{ trans('message.add') }} {{ trans('message.event') }}</a></li>
          </ul>
        </li>

        <li class="{{'admin/contact' == request()->path() ? 'active':'' || 'admin/contact/create' == request()->path() ? 'active':'' }} treeview">
          <a href="">
            <i class="fa fa-dashboard"></i> <span>{{ trans('message.contact') }}</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{'/admin/contact' == request()->path() ? 'active':''}}"><a href="{{url ('/admin/contact') }}"><i class="fa fa-circle-o"></i> {{ trans('message.contact') }}</a></li>
            <li class="{{'/admin/contact/create' == request()->path() ? 'active':''}}"><a href="{{url ('/admin/contact/create') }}"><i class="fa fa-circle-o"></i> {{ trans('message.add') }} {{ trans('message.contact') }}</a></li>
          </ul>
        </li>

        <li class="{{'admin/job' == request()->path() ? 'active':'' || 'admin/job/create' == request()->path() ? 'active':'' }} treeview">
          <a href="">
            <i class="fa fa-dashboard"></i> <span>{{ trans('message.jobs') }}</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{'/admin/job' == request()->path() ? 'active':''}}"><a href="{{url ('/admin/job') }}"><i class="fa fa-circle-o"></i>{{ trans('message.jobs') }}</a></li>
            <li class="{{'/admin/job/create' == request()->path() ? 'active':''}}"><a href="{{url ('/admin/job/create') }}"><i class="fa fa-circle-o"></i> {{ trans('message.add') }} {{ trans('message.job') }}</a></li>
          </ul>
        </li>


        <li class="{{'admin/service' == request()->path() ? 'active':'' || 'admin/service/create' == request()->path() ? 'active':'' }} treeview">
          <a href="">
            <i class="fa fa-dashboard"></i> <span>{{ trans('message.services') }}</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{'/admin/service' == request()->path() ? 'active':''}}"><a href="{{url ('/admin/service') }}"><i class="fa fa-circle-o"></i> {{ trans('message.services') }}</a></li>
            <li class="{{'/admin/service/create' == request()->path() ? 'active':''}}"><a href="{{url ('/admin/service/create') }}"><i class="fa fa-circle-o"></i> {{ trans('message.add') }} {{ trans('message.service') }}</a></li>
          </ul>
        </li>


      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>