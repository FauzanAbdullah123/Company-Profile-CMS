<!-- ini footer -->
<div id="footer">
    <div class="back_top"></div>
    <!-- footer container -->
        <div class="container_12 footer_content">
        <div class="grid_3">
            @php
                $about = \App\About::where('title', '=', 'about')->paginate(1);
            @endphp
            @foreach($about as $data)
            <h3><span class="first-word">{{ $data->title}}</span></h3>
            <p>{{ $data->desc }}</p>
            @endforeach
        </div>
        <div class="grid_3">
            <h3><span class="first-word">Recent Posts</span></h3>
            @php
                $recent = \App\Article::latest()->paginate(3);
            @endphp
            @foreach($recent as $data)
            <div class="recent_posts">
                <div class="a_post">
                    <a href="/blog/{{ $data->slug }}" title="{{ $data->judul }}" class="post_img">
                        <img src="{{ asset('assets/img/article/'.$data->foto) }}" alt="Recent Post" height="50px" />
                    </a>
                    <h6 class="post_heading"><a href="/blog/{{ $data->slug }}">{{ $data->judul }}</a></h6>
                    <div class="post_meta"><span class="time">{{ $data->created_at->diffForHumans() }}</span></div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="grid_3">
         @php
            $about = \App\About::where('title', '=', 'contact')->paginate(1);
        @endphp
        @foreach($about as $data)
            <h3><span class="first-word">{{ $data->title }}</span></h3>
            <p>{{ $data->desc }}</p>
        @endforeach
        </div>
        <div class="grid_3">
            <h3><span class="first-word">Gallery</span> Stream</h3>
            @php
                $gallery = \App\Gallery::latest()->take(9)->get();
            @endphp
              @foreach($gallery as $data)
            <a href="{{ asset('assets/img/gallery/'.$data->image)}}" data-rel="prettyPhoto" >
            <img src="{{ asset('assets/img/gallery/'.$data->image)}}" height="70px" width="70px" alt="">
            </a>
              @endforeach
        </div>
    </div>
    <!-- footer container end -->
    <div class="clearfix"></div>
    <!-- footer bottom -->
    <div class="footer_bottom">
        <div class="container_12">
            <div class="grid_6">
                <div class="footer_text">Copyright  2019 &copy;, Created by <a href="http://arkamaya.co.id" target="_blank">Arkamaya</a></div>
            </div>
        </div>
    </div>
<!-- footer bottom end -->
</div>