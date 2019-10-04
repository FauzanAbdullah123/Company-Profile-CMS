<!-- ini footer -->
<div id="footer">
    <div class="back_top"></div>
    

<!-- Start of Tawk.to Script -->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5d8dca956c1dde20ed03bea9/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

    <!-- footer container -->
    <div class="container_12 footer_content">
        <div class="grid_3">
            @php
                $about = \App\About::where('title', '=', 'about')->take(5)->get();
            @endphp
            @foreach($about as $data)
            <h3><span class="first-word">{{ $data->title}}</span></h3>
            <p style="color: white;">{{ $data->desc }}</p>
            @endforeach
        </div>
        <div class="grid_3">
            <h3><span class="first-word">Recent Posts</span></h3>
            @php
                $recent = \App\Article::latest()->take(3)->get();
            @endphp
            @foreach($recent as $data)
            <div class="recent_posts">
                <div class="a_post">
                    <a href="/blog/{{ $data->slug }}" title="{{ $data->judul }}" class="post_img">
                        <img src="{{ asset('assets/img/article/'.$data->foto) }}" alt="Recent Post" height="50px" />
                    </a>
                    <h6 class="post_heading"><a href="/blog/{{ $data->slug }}" style="color: gray;">{{ $data->judul }}</a></h6>
                    <div class="post_meta"><span class="time">{{ $data->created_at->diffForHumans() }}</span></div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="grid_3">
         @php
            $about = \App\About::where('title', '=', 'contact')->take(1)->get();
        @endphp
        @foreach($about as $data)
            <h3><span class="first-word">{{ $data->title }}</span></h3>
            <p style="color: white;">{!! nl2br(e($data->desc)) !!}</p>
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