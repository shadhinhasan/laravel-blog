    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="main-banner header-text">
      <div class="container-fluid">
        <div class="owl-banner owl-carousel">
          @foreach($posts as $post)
            <div class="item">
              <img src="assets/images/banner-item-01.jpg" alt="">
              <div class="item-content">
                <div class="main-content">
                  <div class="meta-category">
                    <span>{{ $post->category->name }}</span>
                  </div>
                  <a href="/"><h4>{{ $post->title }}</h4></a>
                  <ul class="post-info">
                    <li><a href="/">Admin</a></li>
                    <li><a href="/">{{date('M d, Y', strtotime($post->created_at))}}</a></li>
                    <li><a href="/">12 Comments</a></li>
                  </ul>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->
