<div id="footer">
    <div class="back_top"></div>
    <!-- footer container -->
        <div class="container_12 footer_content">
        <div class="grid_3">
            <h3><span class="first-word">About</span></h3>
            <p>We are IT Solutions company from Bandung, Indonesia. We design, create, and develop a variety of software and in all matters relating to the application of Information and Communication Technology.</p>
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
            <h3><span class="first-word">Contact</span></h3>
            <p><b>Address:</b><br>Jl. Guntursari Wetan No. 17 Buah Batu, Bandung Jawa Barat, Indonesia 40286<br><b>Telephone :</b><br>(022)87325528<br><b>Telephone 2:</b><br>(0267)8406552<br><b>Email :<br>info[at]arkamaya.co.id<br></b></p>
        </div>
    </div>
    <!-- footer container end -->
    <div class="clearfix"></div>
    <!-- footer bottom -->
    <div class="footer_bottom">
        <div class="container_12">
            <div class="grid_6">
                <div class="footer_text">Copyright  2013 &copy;, Created by <a href="http://designforlifeden.com" target="_blank">DesignForLife</a></div>
            </div>
            <div class="grid_6">
                <div class="float_right socialicons">
                    <a href="http://facebook.com/" target="_blank" class="social_colored facebook" title="Facebook"></a>
                    <a href="http://dribbble.com/" target="_blank" class="social_colored dribbble" title="Dribbble"></a>
                    <a href="http://twitter.com/" target="_blank" class="social_colored twitter" title="Twitter"></a>
                    <a href="http://myspace.com/" target="_blank" class="social_colored myspace" title="MySpace"></a>
                    <a href="http://flickr.com/" target="_blank" class="social_colored flickr" title="Flickr"></a>
                    <a href="http://forrst.com/" target="_blank" class="social_colored forrst" title="Forrst"></a>
                    <a href="http://linkedin.com/" target="_blank" class="social_colored linkedin" title="Linkedin"></a>
                    <a href="http://skype.com/" target="_blank" class="social_colored skype" title="Skype"></a>
                    <a href="http://vimeo.com/" target="_blank" class="social_colored vimeo" title="Vimeo"></a>
                    <a href="http://tumblr.com/" target="_blank" class="social_colored tumblr" title="Tumblr"></a>
                    <a href="mailto:yourmail@mail.com" class="social_colored mail" title="Mail"></a>
                </div>
            </div>
        </div>
    </div>
<!-- footer bottom end -->
</div>