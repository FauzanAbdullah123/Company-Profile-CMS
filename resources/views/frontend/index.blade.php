@extends('layouts.frontend')

@section('title-website')
    Home
@endsection

@section('title')
    Home Page
@endsection

@section('content')
<!-- container 12 -->
<div class="container_12">
    <!-- features boxes -->
    <div class="grid_12">
        <div class="divider_page"><h2>Features</h2></div>
        <div class="grid_3 alpha">
            <!-- a feature box -->
            <div class="feature_box">
                <div class="feature_icon"><a href="sliders.html" class="edevices_icons32 icon32_25"></a></div>
                <div class="feature_content">
                    <div class="feature_heading">
                        <div class="medium">RESPONSIVE</div>
                        <div class="large">TEMPLATE</div>
                    </div>
                    <p class="feature_desc">Fusce consequat ipsum id nulla fringilla euismod. Morbi purus ut nibh eget faucibus.</p>
                </div>
                <div class="feature_link"><a href="sliders.html" class="arrows_icons16 icon16_5 tooltip_s" title="Read More"></a></div>
            </div>
            <!-- a feature box end -->
        </div>
        <div class="grid_3 lambda">
            <!-- a feature box -->
            <div class="feature_box">
                <div class="feature_icon"><a href="portfolio_one_column.html" class="misc_icons32 icon32_92"></a></div>
                <div class="feature_content">
                    <div class="feature_heading">
                        <div class="medium">CREATIVE</div>
                        <div class="large">DESIGN</div>
                    </div>
                    <p class="feature_desc">Phasellus a ipsum odio nec. Etiam eget elit. Curabitur elementum co facilisis pulvinar.</p>
                </div>
                <div class="feature_link"><a href="portfolio_one_column.html" class="arrows_icons16 icon16_5 tooltip_s" title="Read More"></a></div>
            </div>
            <!-- a feature box end -->
        </div>
        <div class="grid_3 lambda">
            <!-- a feature box -->
            <div class="feature_box">
                <div class="feature_icon"><a href="contact.html" class="media_icons32 icon32_18"></a></div>
                <div class="feature_content">
                    <div class="feature_heading">
                        <div class="medium">EXCELLENT</div>
                        <div class="large">SUPPORT</div>
                    </div>
                    <p class="feature_desc">Duis nec elit nunc. Phasellus, est non hendrerit aliquet, dolor ante sagittis magna.</p>
                </div>
                <div class="feature_link"><a href="contact.html" class="arrows_icons16 icon16_5 tooltip_s" title="Read More"></a></div>
            </div>
            <!-- a feature box end -->
        </div>
        <div class="grid_3 omega">
            <!-- a feature box -->
            <div class="feature_box">
                <div class="feature_icon"><a href="elements.html" class="misc_icons32 icon32_26"></a></div>
                <div class="feature_content">
                    <div class="feature_heading">
                        <div class="medium">AND MUCH</div>
                        <div class="large">MOREEE</div>
                    </div>
                    <p class="feature_desc">Etiam id sapien ultricies euis iaculis. Quisque lorem, viv non sodales a, pellentesque in.</p>
                </div>
                <div class="feature_link"><a href="elements.html" class="arrows_icons16 icon16_5 tooltip_s" title="Read More"></a></div>
            </div>
            <!-- a feature box end -->
        </div>
    </div>
    <!-- features boxes end -->
    <!-- recent works -->
    <div class="grid_12">
        <div class="divider_page">
            <h2>Recent Works</h2>
            <div class="heading_button">
                <div class="prev_button" id="recentworks_prev">Prev</div>
                <div class="next_button" id="recentworks_next">Next</div>
            </div>
        </div>
    </div>
    <div id="recentWorks">
        <!-- a work -->
        <div class="a_work">	
            <div class="normal">
                <img src="{{ asset('DreamLife/html/assets/images/mix/940/image_fixed.jpg')}}" alt="Business Man" class="grid_image"/>
                <div class="work_heading">Business Man</div>
            </div>
            <div class="hover">
                <h4>Business Man</h4>
                <div class="work_links">
                    <div><a href="{{ asset('DreamLife/html/assets/images/mix/940/image.jpg')}}" data-rel="prettyPhoto" class="misc_white_icons16 icon16_15" title="Big Size"></a></div>
                    <div><a href="single_project.html" class="misc_white_icons16 icon16_67" title="Project Details"></a></div>
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
        <!-- a work end -->
        <!-- a work -->
        <div class="a_work">	
            <div class="normal">
                <img src="{{ asset('DreamLife/html/assets/images/mix/940/image_fixed.jpg')}}" alt="Luxury Life" class="grid_image"/>
                <div class="work_heading">Luxury Life</div>
            </div>
            <div class="hover">
                <h4>Luxury Life</h4>
                <div class="work_links">
                    <div><a href="{{ asset('DreamLife/html/assets/images/mix/940/image.jpg')}}" data-rel="prettyPhoto" class="misc_white_icons16 icon16_15" title="Big Size"></a></div>
                    <div><a href="single_project.html" class="misc_white_icons16 icon16_67" title="Project Details"></a></div>
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
        <!-- a work end -->
        <!-- a work -->
        <div class="a_work">	
            <div class="normal">
                <img src="{{ asset('DreamLife/html/assets/images/mix/940/image_fixed.jpg')}}" alt="Good Morning" class="grid_image"/>
                <div class="work_heading">Good Morning</div>
            </div>
            <div class="hover">
                <h4>Good Morning</h4>
                <div class="work_links">
                    <div><a href="{{ asset('DreamLife/html/assets/images/mix/940/image.jpg')}}" data-rel="prettyPhoto" class="misc_white_icons16 icon16_15" title="Big Size"></a></div>
                    <div><a href="single_project.html" class="misc_white_icons16 icon16_67" title="Project Details"></a></div>
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
        <!-- a work end -->
        <!-- a work -->
        <div class="a_work">	
            <div class="normal">
                <img src="{{ asset('DreamLife/html/assets/images/mix/940/image_fixed.jpg')}}" alt="Shopping" class="grid_image"/>
                <div class="work_heading">Shopping</div>
            </div>
            <div class="hover">
                <h4>Shopping</h4>
                <div class="work_links">
                    <div><a href="{{ asset('DreamLife/html/assets/images/mix/940/image.jpg')}}" data-rel="prettyPhoto" class="misc_white_icons16 icon16_15" title="Big Size"></a></div>
                    <div><a href="single_project.html" class="misc_white_icons16 icon16_67" title="Project Details"></a></div>
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
        <!-- a work end -->
        <!-- a work -->
        <div class="a_work">	
            <div class="normal">
                <img src="{{ asset('DreamLife/html/assets/images/mix/940/image_fixed.jpg')}}" alt="Luxury Life" class="grid_image"/>
                <div class="work_heading">Urban Style</div>
            </div>
            <div class="hover">
                <h4>Urban Style</h4>
                <div class="work_links">
                    <div><a href="{{ asset('DreamLife/html/assets/images/mix/940/image.jpg')}}" data-rel="prettyPhoto" class="misc_white_icons16 icon16_15" title="Big Size"></a></div>
                    <div><a href="single_project.html" class="misc_white_icons16 icon16_67" title="Project Details"></a></div>
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
        <!-- a work end -->
        <!-- a work -->
        <div class="a_work">	
            <div class="normal">
                <img src="{{ asset('DreamLife/html/assets/images/mix/940/image_fixed.jpg')}}" alt="Good Morning" class="grid_image"/>
                <div class="work_heading">Vogue</div>
            </div>
            <div class="hover">
                <h4>Vogue</h4>
                <div class="work_links">
                    <div><a href="{{ asset('DreamLife/html/assets/images/mix/940/image.jpg')}}" data-rel="prettyPhoto" class="misc_white_icons16 icon16_15" title="Big Size"></a></div>
                    <div><a href="single_project.html" class="misc_white_icons16 icon16_67" title="Project Details"></a></div>
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
        <!-- a work end -->
    </div>
    <!-- recent works end -->
    <div class="clearfix"></div>
    <!-- popular blog post and testiomonials -->
    <div class="grid_12">
        <!-- popular blog post -->
        <div class="grid_8 alpha">
            <div class="divider_page"><h2>Popular Blog Post</h2></div>
            <!-- a post image -->
            <div class="grid_4 alpha a_blogpost popular">
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
                            <a href="http://twitthis.com/twit?url=http://dreamlife.designforlifeden.com/blog_single_post.html" target="_blank" class="social_colored twitter tooltip_s" title="Twitter"></a>
                            <a href="http://www.facebook.com/sharer.php?u=http://dreamlife.designforlifeden.com/blog_single_post.html" target="_blank" class="social_colored facebook tooltip_s" title="Facebook"></a>
                            <a href="http://linkedin.com/shareArticle?mini=true&amp;url=http://dreamlife.designforlifeden.com/blog_single_post.html&amp;title=DreamLife%20Responsive%20Template" target="_blank" class="social_colored linkedin tooltip_s" title="LinkedIn"></a>
                            <a href="mailto:?subject=DreamLife%20Responsive%20Template&amp;body=http://dreamlife.designforlifeden.com/blog_single_post.html" class="social_colored mail tooltip_s" title="Mail"></a>
                        </div>
                    </div>
                    <!-- social links end -->
                </div>
            </div>
            </div>
            <!-- a post image end -->
            <!-- post details -->
            <div class="grid_4 omega">
                <!-- post heading -->
                <h3 class="pp_heading"><a href="blog_single_post.html">Tour the world</a></h3>
                <!-- post heading end -->
                <!-- post meta info -->
                <div class="meta-info">
                        <div class="date-info">January 2st, 2013</div>
                        <div class="comment-info"><a href="blog_single_post.html#comments" title="Comment on Praesent Et Urna Turpis Sadips">2 Comments</a></div>
                </div>
                <!-- post meta info end -->
                <!-- post content -->
                <p>Quisque ligulas ipsum, euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique.</p>
                <p><a href="blog_single_post.html" class="sc_button medium">Read More</a></p>
                <!-- post content end -->
            </div>
            <!-- post details end -->
        </div>
        <!-- popular blog post end -->
        <!-- testimonials -->
        <div class="grid_4 omega">
            <div class="divider_page">
                <h2>What Client's Say</h2>
                <div class="heading_button">
                    <div class="prev_button" id="testimonials_prev">Prev</div>
                    <div class="next_button" id="testimonials_next">Next</div>
                </div>
            </div>
            <div class="testimonials">
                <!-- a testimonial -->
                <div class="testimonial">
                    <div class="desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</div>
                    <div class="who">
                        <img src="{{ asset('DreamLife/html/assets/images/mix/envato/envato_logo.png')}}" alt=""/> <span class="name">John Doe</span><span class="job"> , Web Developer</span>
                    </div>
                </div>
                <!-- a testimonial end -->
                <!-- a testimonial -->
                <div class="testimonial">
                    <div class="desc">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here.</div>
                    <div class="who">
                        <img src="{{ asset('DreamLife/html/assets/images/mix/envato/tutplus_logo.png')}}" alt=""/> <span class="name">Doctor Who</span><span class="job"> , Artist</span>
                    </div>
                </div>
                <!-- a testimonial end -->
                <!-- a testimonial -->
                <div class="testimonial">
                    <div class="desc">Aliquam blandit augue ut augue hendrerit pharetra. Sed ante ligula, pretium ornare facilisis ut, laoreet ut diam. Etiam sit amet nibh magna. Nam suscipit quam sit amet lorem viverra blandit. Mauris rhoncus pulvinar laoreet. Proin ullamcorper pretium </div>
                    <div class="who">
                        <img src="{{ asset('DreamLife/html/assets/images/mix/envato/photodune_logo.png')}}" alt=""/> <span class="name">Ted Mosby</span><span class="job"> , Architect</span>
                    </div>
                </div>
                <!-- a testimonial end -->
            </div>
        </div>
        <!-- testimonials end -->
    </div>
    <!-- popular blog post and testiomonials end -->
    <!-- our clients -->
    <div class="grid_12">
        <div class="divider_page">
            <h2>Our Clients</h2>
            <div class="heading_button">
                <div class="prev_button" id="ourclients_prev">Prev</div>
                <div class="next_button" id="ourclients_next">Next</div>
            </div>
        </div>
        <div class="our_clients">
            <a href="http://themeforest.net/?ref=DesignForLife" target="_blank" class="a_client themeforest"></a>
            <a href="http://activeden.net/?ref=DesignForLife" target="_blank" class="a_client activeden"></a>
            <a href="http://audiojungle.net/?ref=DesignForLife" target="_blank" class="a_client audiojungle"></a>
            <a href="http://codecanyon.net/?ref=DesignForLife" target="_blank" class="a_client codecanyon"></a>
            <a href="http://3docean.net/?ref=DesignForLife" target="_blank" class="a_client ocean3d"></a>
            <a href="http://photodune.net/?ref=DesignForLife" target="_blank" class="a_client photodune"></a>
            <a href="http://themeforest.net/?ref=DesignForLife" target="_blank" class="a_client tutorials"></a>
            <a href="http://videohive.net/?ref=DesignForLife" target="_blank" class="a_client videohive"></a>
            <a href="http://activeden.net/?ref=DesignForLife" target="_blank" class="a_client activeden"></a>
            <a href="http://themeforest.net/?ref=DesignForLife" target="_blank" class="a_client themeforest"></a>
        </div>
    </div>
    <!-- our clients end -->
</div>
<!-- container 12 end -->
@endsection