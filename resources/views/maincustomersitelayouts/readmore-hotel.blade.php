@extends('layouts.maincustomersitelayoutes')


@section('content')
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
                          <span> {{ $post->created_at }}</span>
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
                            <span>{{ $lastposts->created_at }}</span>
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
                  <h2>Comments on this post {{ $post->commnets()->count() }} .</h2>
                  <span class="line"></span>
             </div>
             <div class="items_message">
                      @foreach ($comment as $comments)
                      <div class="item"><!--start item-->
                        <div class="div_img_mesg">

                            <img src="{{asset($comments->user->image)}}" alt="image person">
                        </div>
                        <div class="desc_person_message">
                                     <h3>{{ $comments->user->name }}</h3>
                                     <span>{{ $comments->created_at }} </span>
                                     <p>{{ $comments->text }}</p>
                        </div>
                    </div><!--./ item-->
                      @endforeach
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
                <form action="#">
                    <input type="email" required placeholder="* Your Email" class="email">
                    <input type="text" required placeholder="* Your name"><br>
                    <textarea name="message"  rows="10" placeholder="Please write in English only"></textarea>
                    <button class="btn">Submit comment</button>
                </form>
     </div><!-- ./ data_user-->
  </div><!-- ./ container-->
</section>
<!-- end contact section -->

@endsection
