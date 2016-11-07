@extends('layouts.app')


@include('includes.message-block')


@section('content')
<style type="text/css">

#content{
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

</style>


<div class="jumbotron" style=" border-radius:10px; padding-left:17px; padding-right:17px;">
<section class="row-post container-fluid master">
    <div class="col-md-6 col-md-offset-3">
         <header id="fa"><h3> What do i have to say</h3></header>
         <form action="{{ route('post.create') }}" method="post">
            <div class="form-group">
                <textarea class="form-control"  name="body" id="new-post" placeholder="Say Something"></textarea>
            </div>
            <button type"submit" class="btn btn-primary" value="post">Commit</button>
            <input type="hidden" value="{{Session::token() }}" name="_token">
         </form>
     </div> 
   </section>
 <section class="row posts" id="fa">
    <div class="col-md-6 col-md-offset-3">
        <header><h3>What other people say.....</h3></header>
        @foreach($posts as $post)
            <article class="post" data-postid="{{ $post->id }}">
                    <p>{{ $post->body }}</p>
                    <div ="info">
                    posted by {{ $post->user->name}} on {{ $post->created_at }}
                    </div> 
                    <div class="interaction>">
                        <a href="#" onClick="Penda(event)" class="like">Like | </a>
                        <a href="#"  onClick="Penda(event)" class="like">Dislike | </a>
                        @if(Auth::user()== $post->user)
                        <a href="#" name="edit" class="edit" onClick=" divFunction(event)">Edit | </a>
                        <a href="{{ route('post.delete', ['post_id' => $post->id]) }} ">Delete | </a>
                     @endif
                    </div>
            </article>
        @endforeach
    
     </div>
    </section>
    </div>
 <!-sidebar-->


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

<modal to edit the content of the post a user has created can be placed anywhere-->
<div class="modal fade" tabindex="-1" role="dialog" id="edit-modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Edit Posts</h4>
      </div>
      <div class="modal-body">
        <form>
           <div class="form-group" v-on="submit: onSubmitForm($event)">
             <label for="post-body">Edit the Post </label>
             <textarea class="form-control" name="post-body" id="post-body" rows="5">   </textarea>
           </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="modal-save" onClick="Savings()">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
 </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script type="text/javascript">
var token = '{{Session::token() }}';
var urlEdit = '{{ route('edit')}}';
var urlLike = '{{ route('like')}}';

</script>


@endsection

<link href="css/main.css" rel="stylesheet"><!--javascript plugin code for online customer assistance -->
<script type="text/javascript" async="async" defer="defer" data-cfasync="false" src="https://mylivechat.com/chatinline.aspx?hccid=16207774"></script>
<!-- link to where my javascript files are located-->
<script src="{{ URL::to('appjas/app.js') }}"></script>
 