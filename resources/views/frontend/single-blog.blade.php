@extends('layouts.frontend')

@section('title-website')
    {{ $article->judul }}
@endsection

@section('title')
    Blog Detail
@endsection

@section('content')
<!-- container 12 -->
<div class="container_12">
    <!-- blog post container -->
    <div class="content left grid_9">
        <!-- a blog post -->
        <div class="a_blogpost">
            <div class="divider_page"><h2> {{ $article->judul }}</h2></div>
            <!-- post meta info -->
            <div class="meta-info">
                <div class="user-info"><a href="#" title="Posts by admin"> {{ $article->user->name }}</a></div>
                <div class="date-info">{{ $article->created_at->diffForHumans() }}</div>
            </div>
            <!-- post meta info end -->
            <!-- post slider -->
            <img src="{{ asset('assets/img/article/'.$article->foto)}}" alt="" width="500px" height="400px"/>
            <!-- post slider end -->
            <!-- post content -->
            <div class="post-content">
            <p>{!! $article->konten !!}</p>
            </div>
            <br><br>
            <hr>
            <h4>Comment :</h4>
            <div class="panel with-nav-tabs panel default">
                <div class="panel-heading">
                    <div id="disqus_thread"></div>
                </div>
            </div>
            <!-- post content end -->
            <!-- comment form end -->  
        </div>
        <!-- a blog post end -->
    </div>
    <!-- blog post container end -->
    
    @include('layouts.partial-frontend.sidebar')
</div>
<!-- container 12 end -->
<div class="clearfix"></div>
@endsection

@push('js')
<script>
/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://arkamaya.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
@endpush