@extends('layouts.frontend')

@section('title-website')
    Single Blog
@endsection

@section('title')
    Single Blog Page
@endsection

@section('content')
<!-- container 12 -->
<div class="container_12">
    <!-- blog post container -->
    <div class="content left grid_9">
        <!-- a blog post -->
        <div class="a_blogpost">
            <div class="divider_page"><h2>Tell Me a Great Idea</h2></div>
            <!-- post meta info -->
            <div class="meta-info">
                <div class="user-info"><a href="blog_single_post.html#author" title="Posts by admin">admin</a></div>
                <div class="date-info">January 8st, 2013</div>
                <div class="tag-info">
                    <a href="blog_single_post.html#tags" title="View all posts in Slideshow">Slideshow</a>,
                    <a href="blog_single_post.html#tags" title="View all posts in NivoSlider">Nivo Slider</a>
                </div>
                <div class="comment-info"><a href="blog_single_post.html#comments" title="Comment on Contrary to popular belief">4 Comments</a></div>
            </div>
            <!-- post meta info end -->
            <!-- post slider -->
            <div class="blogSlider theme-dark">
                <div class="nivoSlider">
                    <img src="{{ asset('DreamLife/html/assets/images/mix/940/image_320.jpg')}}" alt="" />
                    <img src="{{ asset('DreamLife/html/assets/images/mix/940/image_320.jpg')}}" alt="" />
                    <img src="{{ asset('DreamLife/html/assets/images/mix/940/image_320.jpg')}}" alt="" />
                    <img src="{{ asset('DreamLife/html/assets/images/mix/940/image_320.jpg')}}" alt="" />
                </div>
            </div>
            <!-- post slider end -->
            <!-- post content -->
            <div class="post-content">
            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sed ligula nec ipsum congue laoreet sit amet vitae tortor. Vestibulum a tristique velit. Nulla tristique felis vel nunc vulputate at fermentum velit interdum. Sed bibendum, risus vitae sagittis fringilla, risus dolor rutrum mi, ac vestibulum nisi tellus non quam. Aliquam erat volutpat. Sed malesuada iaculis tortor, eget porttitor enim luctus a. Vestibulum sodales eros rhoncus turpis commodo et vestibulum nibh molestie. Nulla facilisi. Fusce consectetur placerat nibh eu viverra.</p>
            <p>Donec cursus vehicula ante quis auctor. Nunc placerat commodo magna, nec tincidunt nulla vestibulum vel. Fusce mattis nibh vel purus venenatis id iaculis mi venenatis. Cras non justo velit. Morbi a neque id ante tristique pulvinar in id turpis. Nulla rhoncus egestas nibh, at adipiscing odio accumsan ac. Morbi commodo pharetra accumsan. Donec et elit felis. Maecenas sagittis neque mollis justo sodales vitae aliquam nisi faucibus. Sed euismod imperdiet mollis. Proin vel est ut elit rhoncus sodales at sed sapien.</p>
            <p>Morbi a magna nec sapien viverra hendrerit. Maecenas elit ante, condimentum at pellentesque et, iaculis vitae lacus. Ut cursus pulvinar massa nec porttitor. Pellentesque nec ligula tellus, ut dignissim sapien. Nam molestie adipiscing ipsum, ac dictum tellus elementum at. Curabitur lobortis facilisis nisl ac facilisis. Fusce fermentum vehicula arcu vitae ornare. Maecenas eleifend suscipit turpis, vel semper lacus pretium sit amet. Suspendisse sagittis, sem auctor congue fringilla, tortor sapien blandit dui, ut volutpat leo erat non dui.</p>
            <p>Phasellus commodo est a justo congue porttitor. Nam lorem velit, viverra non faucibus nec, aliquam ac lacus. Curabitur condimentum suscipit sapien, nec semper diam convallis et. Vivamus euismod est nulla, sit amet viverra nisi. Duis ultricies mi in ipsum semper id consectetur erat eleifend. Donec at nulla arcu, a sollicitudin neque. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <!-- post content end -->
            
            <!-- share options -->
            <div class="share-post">
                <div class="float_left heading">
                    Share with
                </div>
                <div class="float_right socialicons">
                    <a href="http://twitthis.com/twit?url=http://dreamlife.designforlifeden.com/blog_single_post.html" target="_blank" class="social_colored twitter tooltip_s" title="Twitter"></a>
                    <a href="http://www.facebook.com/sharer.php?u=http://dreamlife.designforlifeden.com/blog_single_post.html" target="_blank" class="social_colored facebook tooltip_s" title="Facebook"></a>
                    <a href="http://linkedin.com/shareArticle?mini=true&amp;url=http://dreamlife.designforlifeden.com/blog_single_post.html&amp;title=DreamLife%20Responsive%20Template" target="_blank" class="social_colored linkedin tooltip_s" title="LinkedIn"></a>
                    <a href="http://www.tumblr.com/share/link?url=http://dreamlife.designforlifeden.com/blog_single_post.html&amp;name=DreamLife%20Responsive%20Template" target="_blank" class="social_colored tumblr tooltip_s" title="Tumblr"></a>
                    <a href="mailto:?subject=DreamLife%20Responsive%20Template&amp;body=http://dreamlife.designforlifeden.com/blog_single_post.html" class="social_colored mail tooltip_s" title="Mail"></a>
                </div>
            </div>
            <!-- share options end -->
            
            <div class="clearfix"></div>
            
            <!-- author details -->
            <div class="divider_page"><h3><a id="author">About the Author</a></h3></div>
            <div class="author-details">
                <div class="avatar"><img src="{{ asset('DreamLife/html/assets/images/mix/100/image.jpg')}}" alt="" /></div>
                <p>Nunc libero tellus, imperdiet eu tincidunt at, porttitor vitae urna. Duis aliquet, sem vel rutrum consectetur, justo metus ullamcorper urna, in mollis ligula tellus sed lectus. Suspendisse potenti. Nunc porta nisi ut erat aliquam rutrum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            </div>
            <!-- author details end -->
                            
            <!-- comments -->
            <div class="divider_page"><h3><a id="comments">Comments</a></h3></div>
            <ul class="commentlist">
                <li>
                    <!-- a comment -->
                    <div class="a_comment">
                        <!-- avatar -->
                        <div class="avatar"><a href="http://dreamlife.designforlifeden.com" title="Go Web Site"><img src="{{ asset('DreamLife/html/assets/images/mix/100/image.jpg')}}" alt=""></a></div>
                        <!-- avatar end -->
                        <!-- comment text -->
                        <p class="comment_text">Aliquam quis lacus non diam fringilla consectetur. Sed venenatis enim sit amet magna vehicula semper. Ut molestie neque ut nibh lacinia rhoncus. Integer sed purus ac nisi placerat tincidunt ut at quam. Quisque accumsan velit vitae est accumsan id dignissim nulla condimentum.</p>
                        <!-- comment text end -->
                        <!-- comment info -->
                        <div class="meta-info float_right">
                            <div class="user-info"><a href="blog_single_post.html#author" title="Posts by member">member</a></div>
                            <div class="date-info">January 2st, 2013 at 1:38 pm</div>
                            <div class="reply-button"><a href="#reply">Reply</a></div>
                        </div>
                        <div class="clearfix"></div>
                        <!-- comment info end -->
                    </div>
                    <!-- a comment end -->
                    <!-- two reply -->
                    <ul>
                        <li>
                            <!-- a comment -->
                            <div class="a_comment">
                                <!-- avatar -->
                                <div class="avatar"><a href="http://dreamlife.designforlifeden.com" title="Go Web Site"><img src="{{ asset('DreamLife/html/assets/images/mix/100/image.jpg')}}" alt=""></a></div>
                                <!-- avatar end -->
                                <!-- comment text -->
                                <p class="comment_text">Proin faucibus condimentum risus nec cursus. Pellentesque cursus, justo sit amet condimentum fermentum, neque est convallis arcu, id fermentum metus quam fermentum enim. </p>
                                <!-- comment text end -->
                                <!-- comment info -->
                                <div class="meta-info float_right">
                                    <div class="user-info"><a href="blog_single_post.html#author" title="Posts by admin">admin</a></div>
                                    <div class="date-info">January 4st, 2013 at 5:18 pm</div>
                                    <div class="reply-button"><a href="#reply">Reply</a></div>
                                </div>
                                <div class="clearfix"></div>
                                <!-- comment info end -->
                            </div>
                            <!-- a comment end -->
                        </li>
                        <li>
                            <!-- a comment -->
                            <div class="a_comment">
                                <!-- avatar -->
                                <div class="avatar"><a href="http://dreamlife.designforlifeden.com" title="Go Web Site"><img src="{{ asset('DreamLife/html/assets/images/mix/100/image.jpg')}}" alt=""></a></div>
                                <!-- avatar end -->
                                <!-- comment text -->
                                <p class="comment_text">Nunc libero tellus, imperdiet eu tincidunt at, porttitor vitae urna. Duis aliquet, sem vel rutrum consectetur, justo metus ullamcorper urna, in mollis ligula tellus sed lectus. Suspendisse potenti. Nunc porta nisi ut erat aliquam rutrum.</p>
                                <!-- comment text end -->
                                <!-- comment info -->
                                <div class="meta-info float_right">
                                    <div class="user-info"><a href="blog_single_post.html#author" title="Posts by admin">moderator</a></div>
                                    <div class="date-info">January 4st, 2013 at 5:38 pm</div>
                                    <div class="reply-button"><a href="#reply">Reply</a></div>
                                </div>
                                <div class="clearfix"></div>
                                <!-- comment info end -->
                            </div>
                            <!-- a comment end -->
                        </li>
                    </ul>
                    <!-- two reply end -->
                </li>
                <li>
                    <!-- a comment -->
                    <div class="a_comment">
                        <!-- avatar -->
                        <div class="avatar"><a href="http://dreamlife.designforlifeden.com" title="Go Web Site"><img src="{{ asset('DreamLife/html/assets/images/mix/100/image.jpg')}}" alt=""></a></div>
                        <!-- avatar end -->
                        <!-- comment text -->
                        <p class="comment_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sagittis, purus id vestibulum condimentum, lorem sem placerat tortor, eu vehicula nisi orci ac erat. Maecenas nisl neque, molestie a dapibus malesuada, fermentum eget nulla. Maecenas sed diam id tortor volutpat pretium vitae vel tellus.</p>
                        <!-- comment text end -->
                        <!-- comment info -->
                        <div class="meta-info float_right">
                            <div class="user-info"><a href="blog_single_post.html#author" title="Posts by admin">admin</a></div>
                            <div class="date-info">January 1st, 2013 at 1:28 pm</div>
                            <div class="reply-button"><a href="#reply">Reply</a></div>
                        </div>
                        <div class="clearfix"></div>
                        <!-- comment info end -->
                    </div>
                    <!-- a comment end -->
                </li>
            </ul>
            <!-- comments end -->
            <!-- comment form -->
            <div class="divider_page"><h3>Leave A Comment</h3></div>
            <div class="comment-form">
            <form action="blog_single_post.html" method="post" name="messageform">
                <div class="grid_3 alpha">
                    <input name="namesurname" type="text" value="Name:" class="input-text" />
                </div>
                <div class="grid_3 lambda">
                    <input name="email" type="text" value="E-Mail:" class="input-text" />
                </div>
                <div class="grid_3 omega">
                    <input name="subject" type="text" value="Web Site:" class="input-text" />
                </div>
                <div class="grid_9 alpha omega">
                    <textarea name="message" class="text-area">Comment:</textarea>
                    <div class="alert-comment"></div>
                    <span class="send-message sc_button medium">Send Comment</span>
                </div>
            </form>
            </div>
            <!-- comment form end -->  
        </div>
        <!-- a blog post end -->
    </div>
    <!-- blog post container end -->
    
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
        <div class="widget">
            <div class="divider_page"><h4>Accordion</h4></div>
            <!-- accordion -->
            <div class="accordion">
                <h5>Mauris mauris ante</h5>
                <div>
                    <p>Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut neque. Vivamus nisi</p>
                </div>
                <h5>Sed non urna</h5>
                <div>
                    <p>Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet purus.</p>
                </div>
                <h5>Nam enim risus</h5>
                <div>
                    <p>Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis. Phasellus pellentesque purus in massa.</p>
                </div>
                <h5>Cras dictum</h5>
                <div>
                    <p>Cras dictum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                </div>
            </div>
            <!-- accordion end -->
        </div>
    </div>
    <!-- sidebar right end -->
</div>
<!-- container 12 end -->
<div class="clearfix"></div>
@endsection