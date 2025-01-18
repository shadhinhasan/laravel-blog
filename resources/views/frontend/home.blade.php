@extends('master')
@section('content')
    <section class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="main-content">
              <div class="row">
                <div class="col-lg-8">
                  <span>Stand Blog HTML5 Template</span>
                  <h4>Creative HTML Template For Bloggers!</h4>
                </div>
                <div class="col-lg-4">
                  <div class="main-button">
                    <a rel="nofollow" href="https://templatemo.com/tm-551-stand-blog" target="_parent">Download Now!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="blog-posts">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="all-blog-posts">
              <div class="row">
                @foreach($posts as $post)
                  <div class="col-lg-12">
                    <div class="blog-post">
                      <div class="blog-thumb">
                        <img src="{{asset('assets/images/'.$post->image)}}" alt="">
                      </div>
                      <div class="down-content">
                        <span>{{$post->category->name}}</span>
                        <a href="/post-details"><h4>{{$post->title}}</h4></a>
                        <ul class="post-info">
                          <li><a href="#">{{$post->author}}</a></li>
                          <li><a href="#">{{date('M d, Y', strtotime($post->created_at))}}</a></li>
                          <li><a href="#">12 Comments</a></li>
                        </ul>
                        <p>{{$post->description}}</p>
                        <div class="post-options">
                          <div class="row">
                            <div class="col-6">
                              <ul class="post-tags">
                                <li><i class="fa fa-tags"></i></li>
                                <li><a href="#">Beauty</a>,</li>
                                <li><a href="#">Nature</a></li>
                              </ul>
                            </div>
                            <div class="col-6">
                              <ul class="post-share">
                                <li><i class="fa fa-share-alt"></i></li>
                                <li><a href="#">Facebook</a>,</li>
                                <li><a href="#"> Twitter</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                @endforeach
                <div class="col-lg-12">
                  <div class="main-button">
                    <a href="/blog-entries">View All Posts</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @include('frontend.partials.sidebar')
        </div>
      </div>
    </section>
@endsection()
