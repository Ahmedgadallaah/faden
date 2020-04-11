
    <?php 
    $setting=\App\Setting::first();
    ?>
    
    
<nav class="navbar navbar-expand-lg navbar-light fixed-top">
<a class="navbar-brand" href="{{url('/index')}}"> <img src="{{asset('./../storage/app/setting/'.$setting->logo)}}" width="110"> </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav m-auto">
        <li class="nav-item ">
        <a class="nav-link" href="{{url('index')}}">{{trans('message.Home')}}</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('services')}}">{{trans('message.services')}}</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('clients')}}">{{trans('message.clients')}}</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('partners')}}">{{trans('message.Partners')}}</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('job')}}">{{trans('message.Search For Job')}}</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('officer')}}">{{trans('message.Search For Officer')}}</a>
        </li>
          <li class="nav-item">
          <a class="nav-link" href="{{url('hierarchy')}}">{{trans('message.Hierarchy')}}</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('works')}}">{{trans('message.Our Works')}}</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('thanks')}}">{{trans('message.Thanks')}}</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('events')}}">{{trans('message.Events')}}</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('contact')}}">{{trans('message.Contact')}}</a>
        </li>
      </ul>
      
      <form class="form-inline my-2 my-lg-0">
  
        @if ( Config::get('app.locale') == 'en')

        

        <a class="btn btn-success" style="margin-right:5px;margin-left:5px;" href="{{ url('lang/ar') }}">AR</a>
@elseif ( Config::get('app.locale') == 'ar' )

<a class="btn btn-success"  style="margin-right:5px;margin-left:5px;" href="{{ url('lang/en') }}">الإنجليزية </a>

@endif

        <!--      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">-->
  
  
  <button class="btn btn-success my-2 my-sm-0" type="submit">{{trans('message.GET FADEN PROFIL')}}</button>
      </form>
    </div>
  </nav> 