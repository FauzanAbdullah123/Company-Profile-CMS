@extends('layouts.frontend')

@section('title-website')
    Blog
@endsection

@section('title')
    Blog Page
@endsection

@section('content')
<!-- container 12 -->
<div class="container_12">
    <!-- a sidebar width blog post -->
    <div class="content left grid_9">
        
        <!-- a blog post -->
        <div class="a_blogpost">
            <!-- post image -->
            <div class="grid_4 alpha">
                <div class="image">
                    <div class="normal">
                        <img src="{{ asset('DreamLife/html/assets/images/mix/940/image.jpg')}}" alt="" class="grid_image"/>
                    </div>
                    <div class="hover">
                        <div class="post_links">
                            <div><a href="{{ asset('DreamLife/html/assets/images/mix/940/image.jpg')}}" data-rel="prettyPhoto" class="misc_white_icons16 icon16_15" title="Big Size"></a></div>
                            <div><a href="blog_single_post.html" class="misc_white_icons16 icon16_67" title="Read More"></a></div>
                        </div>
                        <div class="clearfix"></div>
                        <!-- social links -->
                        <div class="social_links">
                            <div class="share_text">Share on</div>
                            <div class="share_icons">
                                <a href="http://twitthis.com/twit?url=http://dreamlife.designforlifeden.com" target="_blank" class="social_colored twitter tooltip_s" title="Twitter"></a>
                                <a href="http://www.facebook.com/sharer.php?u=http://dreamlife.designforlifeden.com" target="_blank" class="social_colored facebook tooltip_s" title="Facebook"></a>
                                <a href="http://linkedin.com/shareArticle?mini=true&amp;url=http://dreamlife.designforlifeden.com&amp;title=DreamLife%20Responsive%20Template" target="_blank" class="social_colored linkedin tooltip_s" title="LinkedIn"></a>
                                <a href="mailto:?subject=DreamLife%20Responsive%20Template&amp;body=http://dreamlife.designforlifeden.com" class="social_colored mail tooltip_s" title="Mail"></a>
                            </div>
                        </div>
                        <!-- social links end -->
                    </div>
                </div>
            </div>
            <!-- post image end -->
            <div class="grid_5 omega">
            <h3 class="mb_heading"><a href="blog_single_post.html">Business Man in New York</a></h3>
            <!-- post meta info -->
            <div class="meta-info">
                <div class="date-info">Jan 22st, 2013</div>
                <div class="tag-info">
                    <a href="blog_single_post.html#tags" title="View all posts in Photography">Photography</a>, 
                    <a href="blog_single_post.html#tags" title="View all posts in Business">Business</a>
                </div>
                <div class="comment-info"><a href="blog_single_post.html#comments" title="Comment on Business Man in New York">21 Comments</a></div>
            </div>
            <!-- post meta info end -->
            <!-- post content -->
            <div class="post-content">
            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even...</p>
            <a href="blog_single_post.html" class="sc_button medium">Read More</a>
            </div>
            <!-- post content end -->
            </div>
        </div>
        <!-- a blog post end -->
        
        <!-- a blog post -->
        <div class="a_blogpost">
            <!-- post video -->
            <div class="grid_4 alpha">
                <div class="fitVideo video">
                    <iframe src="http://player.vimeo.com/video/42135179?title=0&amp;byline=0&amp;portrait=0" width="500" height="281"></iframe>
                </div>
            </div>
            <!-- post video end -->
            <!-- post content -->
            <div class="grid_5 omega">
                <h3 class="mb_heading"><a href="blog_single_post.html">Alphabetica</a></h3>
                <!-- post meta info -->
                <div class="meta-info">
                        <div class="date-info">Jan 11st, 2013</div>
                        <div class="tag-info">
                            <a href="blog_single_post.html#tags" title="View all posts in Web Design">Web Design</a>,
                            <a href="blog_single_post.html#tags" title="View all posts in Wordpress">Interactive</a>
                        </div>
                        <div class="comment-info"><a href="blog_single_post.html#comments" title="Comment on Alphabetica">30 Comments</a></div>
                </div>
                <!-- post meta info end -->
                <div class="post-content">
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some...</p>
                <a href="blog_single_post.html" class="sc_button medium">Read More</a>
                </div>
            </div>
            <!-- post content end -->
        </div>
        <!-- a blog post end -->
        
        <!-- a blog post -->
        <div class="a_blogpost">
            <!-- post slider -->
            <div class="grid_4 alpha">
                <div class="blogSlider theme-dark">
                    <div class="nivoSlider">
                        <img src="{{ asset('DreamLife/html/assets/images/mix/940/image_fixed.jpg')}}" alt="" />
                        <img src="{{ asset('DreamLife/html/assets/images/mix/940/image_fixed.jpg')}}" alt="" />
                        <img src="{{ asset('DreamLife/html/assets/images/mix/940/image_fixed.jpg')}}" alt="" />
                        <img src="{{ asset('DreamLife/html/assets/images/mix/940/image_fixed.jpg')}}" alt="" />
                    </div>
                </div>
            </div>
            <!-- post slider end -->
            <!-- post content -->
            <div class="grid_5 omega">
                <h3 class="mb_heading"><a href="blog_single_post.html">Tell Me a Great Idea</a></h3>
                <!-- post meta info -->
                <div class="meta-info">
                    <div class="date-info">Jan 8st, 2013</div>
                    <div class="tag-info">
                        <a href="blog_single_post.html#tags" title="View all posts in Slideshow">Slideshow</a>,
                        <a href="blog_single_post.html#tags" title="View all posts in NivoSlider">Nivo Slider</a>
                    </div>
                    <div class="comment-info"><a href="blog_single_post.html#comments" title="Comment on Contrary to popular belief">55 Comments</a></div>
                </div>
                <!-- post meta info end -->
                <div class="post-content">
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock...</p>
                <a href="blog_single_post.html" class="sc_button medium">Read More</a>
                </div>
            </div>
            <!-- post content end -->
        </div>
        <!-- a blog post end -->
        
        <!-- a blog post -->
        <div class="a_blogpost">
            <!-- post blockquote -->
            <div class="grid_4 alpha">
                <div class="blockquote">
                    <p>Aliquam erat volutpat. Nunc condimentum metus a erat consequat a adipiscing mi auctor. Aliquam ut vulputate eros. Suspendisse ultrices urna a elit interdum ornare. Nunc gravida lobortis felis a feugiat. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                </div>
            </div>
            <!-- post blockquote end -->
            <!-- post content -->
            <div class="grid_5 omega">
                <h3 class="mb_heading"><a href="blog_single_post.html">Famous Quotes</a></h3>
                <!-- post meta info -->
                <div class="meta-info">
                    <div class="date-info">Jan 5st, 2013</div>
                    <div class="tag-info">
                        <a href="blog_single_post.html#tags" title="View all posts in Quotes">Quotes</a>,
                        <a href="blog_single_post.html#tags" title="View all posts in Famous">Famous</a>
                    </div>
                    <div class="comment-info"><a href="blog_single_post.html#comments" title="Comment on Vivamus a semper magna">83 Comments</a></div>
                </div>
                <!-- post meta info end -->
                <div class="post-content">
                <p>Vivamus a semper magna. Integer accumsan mi sagittis nibh facilisis dictum. Aenean imperdiet vestibulum sapien non porta. Fusce fringilla magna ac erat convallis ut adipiscing nisi porttitor. Duis lorem purus, consectetur ut laoreet at, lobortis et libero.</p>
                <a href="blog_single_post.html" class="sc_button medium">Read More</a>
                </div>
            </div>
            <!-- post content end -->
        </div>
        <!-- a blog post end -->
        
        <!-- a blog post -->
        <div class="a_blogpost">
            <!-- post image -->
            <div class="grid_4 alpha">
                <div class="image">
                    <div class="normal">
                        <img src="{{ asset('DreamLife/html/assets/images/mix/940/image.jpg')}}" alt="" class="grid_image"/>
                    </div>
                    <div class="hover">
                        <div class="post_links">
                            <div><a href="{{ asset('DreamLife/html/assets/images/mix/940/image.jpg')}}" data-rel="prettyPhoto" class="misc_white_icons16 icon16_15" title="Big Size"></a></div>
                            <div><a href="blog_single_post.html" class="misc_white_icons16 icon16_67" title="Read More"></a></div>
                        </div>
                        <div class="clearfix"></div>
                        <!-- social links -->
                        <div class="social_links">
                            <div class="share_text">Share on</div>
                            <div class="share_icons">
                                <a href="http://twitthis.com/twit?url=http://dreamlife.designforlifeden.com" target="_blank" class="social_colored twitter tooltip_s" title="Twitter"></a>
                                <a href="http://www.facebook.com/sharer.php?u=http://dreamlife.designforlifeden.com" target="_blank" class="social_colored facebook tooltip_s" title="Facebook"></a>
                                <a href="http://linkedin.com/shareArticle?mini=true&amp;url=http://dreamlife.designforlifeden.com&amp;title=DreamLife%20Responsive%20Template" target="_blank" class="social_colored linkedin tooltip_s" title="LinkedIn"></a>
                                <a href="mailto:?subject=DreamLife%20Responsive%20Template&amp;body=http://dreamlife.designforlifeden.com" class="social_colored mail tooltip_s" title="Mail"></a>
                            </div>
                        </div>
                        <!-- social links end -->
                    </div>
                </div>
            </div>
            <!-- post image end -->
            <div class="grid_5 omega">
            <h3 class="mb_heading"><a href="blog_single_post.html">Enjoy the Lanscape</a></h3>
            <!-- post meta info -->
            <div class="meta-info">
                <div class="date-info">Jan 22st, 2013</div>
                <div class="tag-info">
                    <a href="blog_single_post.html#tags" title="View all posts in Photography">Photography</a>, 
                    <a href="blog_single_post.html#tags" title="View all posts in Business">Business</a>
                </div>
                <div class="comment-info"><a href="blog_single_post.html#comments" title="Comment on Business Man in New York">210 Comments</a></div>
            </div>
            <!-- post meta info end -->
            <!-- post content -->
            <div class="post-content">
            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even...</p>
            <a href="blog_single_post.html" class="sc_button medium">Read More</a>
            </div>
            <!-- post content end -->
            </div>
        </div>
        <!-- a blog post end -->
        
        <!-- page navigation -->
        <ul class="page_navigation">
            <li><a href="#page1" class="prev_page passive"></a></li>
            <li><a href="#page1" class="active">1</a></li>
            <li><a href="#page2">2</a></li>
            <li><a href="#page3">3</a></li>
            <li><a href="#page4">4</a></li>
            <li><a href="#page5">5</a></li>
            <li><a href="#" class="more_page">...</a></li>
            <li><a href="#page99">99</a></li>
            <li><a href="#page2" class="next_page"></a></li>
        </ul>
        <!-- page navigation end -->
    </div>
    <!-- a sidebar width blog post end -->
    
    <!-- sidebar right -->
    <div class="sidebar right grid_3">
        <div class="widget">
            <div class="divider_page"><h4>Categories</h4></div>
            <ul class="sidebar_cat">
                <li><a href="#">Design</a></li>
                <li><a href="#">Photography</a></li>
                <li><a href="#">Videos</a></li>
                <li><a href="#">WordPress</a></li>
                <li><a href="#">Logos</a></li>
                <li><a href="#">Interface</a></li>
                <li><a href="#">News</a></li>
            </ul>
        </div>
        <div class="widget">
            <div class="divider_page"><h4>Latest Tweets</h4></div>
            <div class="sidebar_tweets"></div>
        </div>
        <div class="widget">
            <div class="divider_page"><h4>Photo Stream</h4></div>
            <div class="sidebar_flickr"><ul id="sidebarflickr"></ul></div>
        </div>
        <div class="widget">
            <div class="divider_page"><h4>Text Widget</h4></div>
            <p>Aliquam enim sapien, venenatis eget rhoncus commodo, pulvinar ac elit. Vivamus tellus purus, feugiat sed mattis et, bibendum non diam. Nulla ut tellus justo.</p>
        </div>
        <div class="widget">
            <div class="divider_page"><h4>Testimonial</h4></div>
            <!-- a testimonial -->
            <div class="testimonial">
                <div class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                <div class="who">
                    <img src="{{ asset('DreamLife/html/assets/images/mix/envato/envato_logo.png')}}" alt=""/> <span class="name">John Doe</span><span class="job"> , Web Developer</span>
                </div>
            </div>
            <!-- a testimonial end -->
        </div>
    </div>
    <!-- sidebar right end -->
    
</div>
<!-- container 12 end -->
<div class="clearfix"></div>
@endsection