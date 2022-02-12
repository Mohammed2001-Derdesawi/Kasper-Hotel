@extends('layouts.maincustomersitelayoutes')



@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />
{{--  //////////////////////////  --}}
<!-- Start describtion  Blog section -->
<section class="desc_blog">
 <div class="container-fluid">
         <div class="row">
              <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="item_right"><!--start item_right-->
                          <div class="img_blog">
                               <img src="{{asset($post->image)}}" alt="imag blog">
                          </div>
                          <h3>{{ $post->title }}</h3>
                          <span> {{ $post->created_at->format('Y-m-d') }}</span>
                          <p> {{ $post->text }}</p>

                      </div><!--./ item_right-->
                     </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <!-- start item_left-->
                  <div class="search_blog item_left">
                      <form action="#">
                          <input type="search" placeholder="Search here" class="input-group">
                         <button> <a href="#" class="link_nav"><i class="fa fa-search"></i></a></button>
                       </form>
                  </div><!-- ./ item_left -->
                  <div class="recent_post"><!--start  recent_post-->
                      <h2>Recent Posts</h2>
                      @foreach ($lastpost as $lastposts)
                            <h3><a href="{{ url('/readmore/'.$lastposts->id) }}">{{ $lastposts->title }}</a></h3>
                            <span>{{ $lastposts->created_at->format('Y-m-d')  }}</span>
                      @endforeach
                  </div><!-- ./  recent_post-->
                  <div class="Categories"><!-- start Recent Posts-->
                      <h2>Recent Posts</h2>
          @foreach ($lastpostname as $lastposts)
                     <h3><a href="{{ url('/readmore/'.$lastposts->id) }}">{{ $lastposts->title }}</a> </h3>
          @endforeach
                    </div>
                  <!--./ Categories-->
                  <div class="tags"><!-- start tags-->
                      <h2>Tags</h2>
                      <div class="row">
                            <div class="col-lg-4 col-xs-4">
                              <a href="#">Installation</a>
                              <a href="#">Plumber</a>
                              <a href="#">Renovation</a>
                            </div>

                      </div><!--./ row-->
             </div><!--./ tags-->
         </div>
         </div><!-- ./ row-->
 </div><!-- ./ container-->
</section>
<!-- end describtion Blog section -->

<!-- start message section -->
<section class="message_sec">
    <div class="container">
             <div class="titil_message">
                  <h2>Comments on this post <strong>{{ $post->commnets()->count() }}</strong> .</h2>
                  <span class="line"></span>
             </div>
             <div class="items_message">
                @if ( $post->commnets()->count()  == 0)
                <h3 class="nocomment"> There Are No Comments For This Article</h3>
                @else
                @foreach ($post->commnets()->latest()->paginate(3) as $item)
                <div class="item"><!--start item-->
                  <div class="div_img_mesg">

                      <img src="{{asset($item->user->image)}}" alt="image person">
                  </div>
                  <div class="desc_person_message">
                               <h3>{{ $item->user->name }}</h3>
                               <span>{{ $item->created_at->format('Y-m-d')  }} </span>
                               <p>{{ $item->text }}</p>
                  </div>
              </div><!--./ item-->
                @endforeach
                @endif

             </div><!--./ items_message-->
    </div><!--./ container-->
</section>
<!-- end message section -->

<!-- start contact section -->
<section class="contact">
  <div class="container">
      <div class="titil_contact">
          <h2>Leave A Comment .</h2>
          <span class="line"></span>
     </div>
     <div class="data_user"><!-- start data_user-->

        {{--  @if (Auth::check())  --}}
                <div class="add-comment mb-3">
                    @csrf
                        <textarea required class="form-control comment"
                         placeholder="Please write in English only" ></textarea>
                        <button data-post="{{ $post->id }}" class="btn btn-dark btn-sm mt-2 save-comment">Submit</button>
                </div>
        <hr/>
        {{-- List Start --}}
        {{--  <div class="comments">
            @if($post->commnets()->count()  == 0)
                @foreach($post->comments() as $comment)
                    <blockquote class="blockquote">
                      <small class="mb-0">{{ $comment->text }}</small>
                    </blockquote>
                    <hr/>
                @endforeach
            @else
            <p class="no-comments">No Comments Yet</p>
            @endif
        </div>  --}}

            {{--  <form action="" method="GET">  --}}
                {{--  @csrf
                <input type="email" required placeholder="* Your Email"  name="email">
                <input type="text" required placeholder="* Your Name" name="name">
                <input type="password" required placeholder="* Your Password" name="password">
                <textarea name="text" class="textareacomment"  rows="10" placeholder="Please write in   English only"></textarea>
                <button class="btn"  name="post" data-post="{{ $post->id }}">Submit comment</button>  --}}
            {{--  </form>  --}}


     </div><!-- ./ data_user-->
  </div><!-- ./ container-->
</section>
<!-- end contact section -->


<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script type="text/javascript">
// Save Comment
$(".save-comment").on('click',function(){
    var _comment=$(".comment").val();
    var _post=$(this).data('post');
    var vm=$(this);
    // Run Ajax
    $.ajax({
        url:"{{ url('save-comment') }}",
        type:"post",
        dataType:'json',
        data:{
            comment:_comment,
            post:_post,
            _token:"{{ csrf_token() }}"
        },
        beforeSend:function(){
            vm.text('Saving...').addClass('disabled');
        },
        success:function(res){
            var _html='<blockquote class="blockquote animate__animated animate__bounce">\
            <small class="mb-0">'+_comment+'</small>\
            </blockquote><hr/>';
            if(res.bool==true){
                $(".comments").prepend(_html);
                $(".comment").val('');
                $(".comment-count").text($('blockquote').length);
                $(".no-comments").hide();
            }
            vm.text('Save').removeClass('disabled');
        }
    });
});
</script>
@endsection
