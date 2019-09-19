@extends('layouts.frontend')

@section('title-website')
    About Us
@endsection

@section('title')
    About Us Page
@endsection

@section('content')
<!-- container 12 -->
<div class="container_12">
    <!-- mission and vision -->
    <div class="grid_6">
        <!-- page slider -->
        <div class="sliderinPage theme-dark">
            <div class="nivoSlider">
                <img src="{{ asset('DreamLife/html/assets/images/mix/940/image_fixed.jpg')}}" alt="" />
                <img src="{{ asset('DreamLife/html/assets/images/mix/940/image_fixed.jpg')}}" alt=""/>
                <img src="{{ asset('DreamLife/html/assets/images/mix/940/image_fixed.jpg')}}" alt="" />
            </div>
        </div>
        <!-- page slider end -->
    </div>
    <div class="grid_6">
        <div class="divider_page"><h2>Our Mission &amp; Vision</h2></div>
        <p>Curabitur urna ligula, lobortis nec malesuada vitae, pulvinar et metus. Curabitur eu consequat magna. Nulla facilisi. Suspendisse potenti. Suspendisse congue placerat vestibulum. Nulla id ligula et nibh cursus pretium. Integer eleifend laoreet tincidunt. Vestibulum facilisis consectetur odio vitae faucibus.</p>
        <p>Sed id sem vel enim placerat fringilla quis eget velit. Aenean viverra, nisi vitae pharetra fringilla, nisl leo congue mi, et malesuada eros orci at tortor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed vestibulum porttitor gravida. Nulla eu velit sed ipsum luctus bibendum. Donec tincidunt faucibus ultricies. Sed volutpat ultrices lobortis. Aliquam fringilla mauris nec neque pretium laoreet.</p>
    </div>
    <!-- mission and vision end -->
</div>
<!-- container 12 end -->
<!-- container 12 -->
<div class="container_12">
    <!-- tabs -->
    <div class="grid_6">
        <div class="divider_page"><h2>Why Us?</h2></div>
        <!-- accordion -->
        <div class="accordion">
            <h5>Curabitur nec metus purus</h5>
            <div>
                <p>Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.</p>
            </div>
            <h5>Aenean metus libero</h5>
            <div>
                <p>Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In suscipit faucibus urna.</p>
            </div>
            <h5>Vestibulum egestas metus</h5>
            <div>
                <p>Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis. Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.</p>
            </div>
        </div>
        <!-- accordion end -->
    </div>
    <!-- tabs end -->
    <!-- progress bar -->
    <div class="grid_6">
        <div class="divider_page"><h2>Some Statistics</h2></div>
        <div class="progress_bars">
            <b>Customer satisfaction</b>
            <div class="progress_bar" data-percentage="99" data-title="99%"><span></span></div>
            <b>Lorem ipsum dolor sit amet</b>
            <div class="progress_bar" data-percentage="65" data-title="65%"><span></span></div>
            <b>Curabitur nec metus purus</b>
            <div class="progress_bar" data-percentage="85" data-title="85%"><span></span></div>
        </div>
    </div>
    <!-- progress bar end -->
</div>
<!-- container 12 end -->
<!-- container 12 -->
<div class="container_12">
    <!-- our team members -->
    <!-- team navi -->
    <div class="grid_12">
        <div class="divider_page">
            <h2>Our Team</h2>
            <div class="heading_button">
                <div class="prev_button" id="teammembers_prev">Prev</div>
                <div class="next_button" id="teammembers_next">Next</div>
            </div>
        </div>
    </div>
    <!-- team navi end -->
    <!-- our team members -->
    <div class="team_members">
        <!-- a member -->
        <div class="a_member">
            <!-- member pic -->
            <div class="member_pic">
                <img src="{{ asset('DreamLife/html/assets/images/mix/100/image.jpg')}}" alt="member1">
            </div>
            <!-- member pic end -->
            <!-- member content -->
            <div class="member_content">
                <!-- member info -->
                <div class="member_info">
                    <div class="member_name">Julianne Diers</div>
                    <div class="member_job">CEO / Founder</div>
                </div>
                <!-- member info end -->
                <!-- member bio -->
                <p class="member_bio">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't.</p>
                <!-- member bio end -->
                <!-- member social networks -->
                <div class="member_social">
                    <div class="social_title">Follow with</div>
                    <div class="social_icons">
                        <a href="http://facebook.com/" target="_blank" class="social_colored tooltip_s  facebook" title="Facebook"></a>
                        <a href="http://twitter.com/" target="_blank" class="social_colored tooltip_s  twitter" title="Twitter"></a>
                        <a href="http://linkedin.com/" target="_blank" class="social_colored tooltip_s  linkedin" title="Linkedin"></a>
                        <a href="mailto:yourmail@mail.com" class="social_colored tooltip_s  mail" title="Mail"></a>
                    </div>
                </div>
                <!-- member social networks end -->
                <div class="clearfix"></div>
            </div>
            <!-- member content end -->
        </div>
        <!-- a member end -->
        <!-- a member -->
        <div class="a_member">
            <!-- member pic -->
            <div class="member_pic">
                <img src="{{ asset('DreamLife/html/assets/images/mix/100/image.jpg')}}" alt="member2">
            </div>
            <!-- member pic end -->
            <!-- member content -->
            <div class="member_content">
                <!-- member info -->
                <div class="member_info">
                    <div class="member_name">Lance Sorre</div>
                    <div class="member_job">Director / Founder</div>
                </div>
                <!-- member info end -->
                <!-- member bio -->
                <p class="member_bio">Aenean metus libero, viverra in porttitor sed, porta vel mi. Duis at nunc vel mauris dictum semper. Ut accumsan sagittis neque vel eleifend. In luctus vestibulum urna. Proin vitae.</p>
                <!-- member bio end -->
                <!-- member social networks -->
                <div class="member_social">
                    <div class="social_title">Follow with</div>
                    <div class="social_icons">
                        <a href="http://dribbble.com/" target="_blank" class="social_colored tooltip_s  dribbble" title="Dribbble"></a>
                        <a href="http://twitter.com/" target="_blank" class="social_colored tooltip_s  twitter" title="Twitter"></a>
                        <a href="http://flickr.com/" target="_blank" class="social_colored tooltip_s  flickr" title="Flickr"></a>
                        <a href="mailto:yourmail@mail.com" class="social_colored tooltip_s  mail" title="Mail"></a>
                    </div>
                </div>
                <!-- member social networks end -->
                <div class="clearfix"></div>
            </div>
            <!-- member content end -->
        </div>
        <!-- a member end -->
        <!-- a member -->
        <div class="a_member">
            <!-- member pic -->
            <div class="member_pic">
                <img src="{{ asset('DreamLife/html/assets/images/mix/100/image.jpg')}}" alt="member3">
            </div>
            <!-- member pic end -->
            <!-- member content -->
            <div class="member_content">
                <!-- member info -->
                <div class="member_info">
                    <div class="member_name">Liza Banfield</div>
                    <div class="member_job">Business Development</div>
                </div>
                <!-- member info end -->
                <!-- member bio -->
                <p class="member_bio">Vestibulum egestas metus id leo aliquet eleifend. Donec vel lectus metus. Curabitur dictum risus at erat convallis vitae laoreet mauris tempor. In dolor magna, consectetur ac blandit.</p>
                <!-- member bio end -->
                <!-- member social networks -->
                <div class="member_social">
                    <div class="social_title">Follow with</div>
                    <div class="social_icons">
                        <a href="http://facebook.com/" target="_blank" class="social_colored tooltip_s  facebook" title="Facebook"></a>
                        <a href="http://vimeo.com/" target="_blank" class="social_colored tooltip_s  vimeo" title="Vimeo"></a>
                        <a href="http://tumblr.com/" target="_blank" class="social_colored tooltip_s  tumblr" title="Tumblr"></a>
                        <a href="mailto:yourmail@mail.com" class="social_colored tooltip_s  mail" title="Mail"></a>
                    </div>
                </div>
                <!-- member social networks end -->
                <div class="clearfix"></div>
            </div>
            <!-- member content end -->
        </div>
        <!-- a member end -->
        <!-- a member -->
        <div class="a_member">
            <!-- member pic -->
            <div class="member_pic">
                <img src="{{ asset('DreamLife/html/assets/images/mix/100/image.jpg')}}" alt="member4">
            </div>
            <!-- member pic end -->
            <!-- member content -->
            <div class="member_content">
                <!-- member info -->
                <div class="member_info">
                    <div class="member_name">Mathew Welden</div>
                    <div class="member_job">Editorial Manager</div>
                </div>
                <!-- member info end -->
                <!-- member bio -->
                <p class="member_bio">Aliquam sagittis turpis enim, et lobortis libero. Duis fringilla purus ut purus ornare venenatis. Suspendisse aliquam ligula ut velit bibendum at vestibulum odio eleifend. Vivamus...</p>
                <!-- member bio end -->
                <!-- member social networks -->
                <div class="member_social">
                    <div class="social_title">Follow with</div>
                    <div class="social_icons">
                        <a href="http://facebook.com/" target="_blank" class="social_colored tooltip_s  facebook" title="Facebook"></a>
                        <a href="http://dribbble.com/" target="_blank" class="social_colored tooltip_s  dribbble" title="Dribbble"></a>
                        <a href="http://twitter.com/" target="_blank" class="social_colored tooltip_s  twitter" title="Twitter"></a>
                        <a href="mailto:yourmail@mail.com" class="social_colored tooltip_s  mail" title="Mail"></a>
                    </div>
                </div>
                <!-- member social networks end -->
                <div class="clearfix"></div>
            </div>
            <!-- member content end -->
        </div>
        <!-- a member end -->
        <!-- a member -->
        <div class="a_member">
            <!-- member pic -->
            <div class="member_pic">
                <img src="{{ asset('DreamLife/html/assets/images/mix/100/image.jpg')}}" alt="member5">
            </div>
            <!-- member pic end -->
            <!-- member content -->
            <div class="member_content">
                <!-- member info -->
                <div class="member_info">
                    <div class="member_name">Fernando Barco</div>
                    <div class="member_job">Production Assistant</div>
                </div>
                <!-- member info end -->
                <!-- member bio -->
                <p class="member_bio">Fusce sagittis justo eu felis ornare lacinia. In hac habitasse platea dictumst. Aliquam dapibus dictum laoreet. Sed vehicula magna neque, non sollicitudin mauris. Cras, consectetur.</p>
                <!-- member bio end -->
                <!-- member social networks -->
                <div class="member_social">
                    <div class="social_title">Follow with</div>
                    <div class="social_icons">
                        <a href="http://facebook.com/" target="_blank" class="social_colored tooltip_s  facebook" title="Facebook"></a>
                        <a href="http://dribbble.com/" target="_blank" class="social_colored tooltip_s  dribbble" title="Dribbble"></a>
                        <a href="http://vimeo.com/" target="_blank" class="social_colored tooltip_s  vimeo" title="Vimeo"></a>
                        <a href="mailto:yourmail@mail.com" class="social_colored tooltip_s  mail" title="Mail"></a>
                    </div>
                </div>
                <!-- member social networks end -->
                <div class="clearfix"></div>
            </div>
            <!-- member content end -->
        </div>
        <!-- a member end -->
        <!-- a member -->
        <div class="a_member">
            <!-- member pic -->
            <div class="member_pic">
                <img src="{{ asset('DreamLife/html/assets/images/mix/100/image.jpg')}}" alt="member6">
            </div>
            <!-- member pic end -->
            <!-- member content -->
            <div class="member_content">
                <!-- member info -->
                <div class="member_info">
                    <div class="member_name">Erik Woldt</div>
                    <div class="member_job">Community Officer</div>
                </div>
                <!-- member info end -->
                <!-- member bio -->
                <p class="member_bio">Duis tincidunt faucibus mollis. Cras eget pulvinar augue. Sed convallis, felis id posuere imperdiet, magna est aliquet arcu, vitae placerat enim enim vel sem. Nunc dunt lorem ipsum faucibus.</p>
                <!-- member bio end -->
                <!-- member social networks -->
                <div class="member_social">
                    <div class="social_title">Follow with</div>
                    <div class="social_icons">
                        <a href="http://twitter.com/" target="_blank" class="social_colored tooltip_s  twitter" title="Twitter"></a>
                        <a href="http://myspace.com/" target="_blank" class="social_colored tooltip_s  myspace" title="MySpace"></a>
                        <a href="http://flickr.com/" target="_blank" class="social_colored tooltip_s  flickr" title="Flickr"></a>
                        <a href="mailto:yourmail@mail.com" class="social_colored tooltip_s  mail" title="Mail"></a>
                    </div>
                </div>
                <!-- member social networks end -->
                <div class="clearfix"></div>
            </div>
            <!-- member content end -->
        </div>
        <!-- a member end -->
    </div>
    <!-- our team members end -->
</div>
<!-- container 12 end -->
<!-- container 12 -->
<div class="container_12">
</div>
<!-- container 12 end -->
@endsection