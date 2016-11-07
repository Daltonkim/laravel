@extends('layouts.app')


@section('content')
<style type="text/css">
  #hover {
  opacity: 0;
}

#hover:hover {
  opacity: 1;
}
s
}
.jumbos{

 height:1000px;

}
.class{

height:500; 
width:800; 
float:center;
}
#Content{
    height:auto; 
    clear: both; 
    overflow:auto;

}    
}
#ContentLeft{
   
    float:right;
    
}
#ContentRight{
  
    float:left;
    padding-left: 11px;
    padding-right: 11px;
}
/*--responsive design--*/
@media(max-width:1366px)

</style>
<div id="Content" style=" height:auto;  clear: both; overflow:auto; background-color:maroon;" >
  <div id="ContentRight" style=" padding-top:15px; padding-right:20px;">
 <section>  
   <div class="mbr-box mbr-section mbr-section--relative mbr-section--fixed-size mbr-section--full-height mbr-section--bg-adapted mbr-parallax-backgroundr">
   
    <div class="jumbotron" style="width:1000px; height:700px; border-radius:10px;">
     <div class="row">
       <div class="col-md-8 col-md-offset-2">
         <div class="panel panel-default">
           <div class="col-md-10 col-md-offset-1">
            <img src="/uploads/avatars/{{$user->avatar}}" style= "padding-top:15px; width:150px; float:left; height:150px; border-radius:50%; margin-right:25px;"> 
            <h2>{{$user-> name }}'s Profile from {{$user->city}}</h2>
           
            <form enctype="multipart/form-data" action="/profile" method="POST" id="hover">
                        
                        <label>update profile image</label>
                        <input type="file" name="avatar">
                        <input type="hidden" name ="_token" value="{{ csrf_token() }}">
                        <input type="submit" class="pull-right btn-sm btn-default" value="Send Picture">
            </form><br/>

            <h1 style="font:sans serif, Helvitica; color:#d1d5d5;"> Taking  {{$user->course}} </h1>
            <script type="text/javascript" async="async" defer="defer" data-cfasync="false" src="https://mylivechat.com/chatinline.aspx?hccid=16207774"></script>

            </div>
          </div>
</div>
</div>    
</div>
</div>
</section>
</div>
<div id="ContentLeft" style=" width:450px; float:left; padding-left: 0px; padding-top: 15px;">
    <div class="jumbotron" style="border-radius:10px; height:700px;">
      <div class="chatbox">
  
    
    
    </div>
    </div>

  </div>
  </div>


<footer class="footer-distributed">
<div class="footer-left">
        <h3>Laikpia<span>logo</span></h3>
                <p class="footer-links">
          <a href="#">Home</a>  ·
          <a href="#">something</a>
          <a href="#">something</a>
          <a href="#">About</a>
          <a href="#">Faq</a>
                    <a href="#">Contact</a>a>
    </p>
              
<p class="footer-company-name">Company Name &copy; 2015</p>
      </div>
      <div class="footer-center">
        <div>
          <i class="fa fa-map-marker"></i>
          <p><span></span> Kenya, Nyahururu</p>
        </div>
        <div>
          <i class="fa fa-phone"></i>
          <p>+254727222889</p>
        </div>
        <div>
          <i class="fa fa-envelope"></i>
          <p><a href="mailto:support@company.com">support@company.com</a></p>
        </div>

      </div>
      <div class="footer-right">
        <p class="footer-company-about">
          <span>About the Alumni</span>
          About Alumni
        </p>
        <div class="footer-icons">
          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-linkedin"></i></a>
          <a href="#"><i class="fa fa-github"></i></a>
        </div>
      </div>
    </footer>

    
 <script src="{{ URL::to('appjas/jquery-3.0.0.min') }}"></script>
 <script src="{{ URL::to('appjas/signinout.js') }}"></script>
 <link rel="stylesheet" type="text/css" href="css/global.css"/>
<link href="css/main.css" rel="stylesheet">
@endsection
 