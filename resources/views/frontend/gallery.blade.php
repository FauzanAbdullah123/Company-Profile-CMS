@extends('layouts.frontend')

@section('title-website')
    Gallery
@endsection

@section('title')
    Gallery Page
@endsection

@section('content')
<!-- container 12 -->
<div class="container_12">
    <div class="grid_12">
        <!-- filter options -->
        <div class="filter_options portfolio_options">
            <ul>
                <li data-cat="all" class="active"><span class="heading">All</span><span class="number">16</span></li>
                <li data-cat="web"><span class="heading">Web</span><span class="number">8</span></li>
                <li data-cat="logo"><span class="heading">Logo</span><span class="number">4</span></li>
                <li data-cat="photography"><span class="heading">Photography</span><span class="number">6</span></li>
                <li data-cat="interactive"><span class="heading">Interactive</span><span class="number">4</span></li>
            </ul>
        </div>
        <!-- filter options end -->
    </div>
    <div class="clearfix"></div>
    <!-- portfolio items -->
    <div class="portfolio_items four_columns">
        
        <!-- a portfolio item -->
        <div class="a_item" data-cats="photography interactive">
            <div class="grid_3">
                <!-- item image -->
                <div class="a_work">
                    <!-- image -->	
                    <div class="normal">
                        <img src="{{ asset('DreamLife/html/assets/images/mix/940/image_fixed.jpg')}}" alt="" class="grid_image"/>
                        <div class="work_heading">Business Man</div>
                    </div>
                    <!-- image end -->
                    <!-- hover effect -->
                    <div class="hover">
                        <div class="work_links">
                            <div><a href="{{ asset('DreamLife/html/assets/images/mix/940/image.jpg')}}" data-rel="prettyPhoto" class="misc_white_icons16 icon16_15" title="Business Man"></a></div>
                            <div><a href="single_project.html" class="misc_white_icons16 icon16_67" title="Project Details"></a></div>
                        </div>
                        <div class="clearfix"></div>
                        <!-- social links -->
                        <div class="social_links">
                            <div class="share_icons">
                                <a href="http://twitthis.com/twit?url=http://dreamlife.designforlifeden.com" target="_blank" class="social_colored twitter tooltip_s" title="Share on Twitter"></a>
                                <a href="http://www.facebook.com/sharer.php?u=http://dreamlife.designforlifeden.com" target="_blank" class="social_colored facebook tooltip_s" title="Share on Facebook"></a>
                                <a href="http://linkedin.com/shareArticle?mini=true&amp;url=http://dreamlife.designforlifeden.com&amp;title=DreamLife%20Responsive%20Template" target="_blank" class="social_colored linkedin tooltip_s" title="Share on LinkedIn"></a>
                                <a href="mailto:?subject=DreamLife%20Responsive%20Template&amp;body=http://dreamlife.designforlifeden.com" class="social_colored mail tooltip_s" title="Mail"></a>
                            </div>
                        </div>
                        <!-- social links end -->
                    </div>
                    <!-- hover effect end -->
                </div>
                <!-- item image end -->
            </div>
        </div>
        <!-- a portfolio item end -->
        
        <!-- a portfolio item -->
        <div class="a_item" data-cats="web">
            <div class="grid_3">
                <!-- item image -->
                <div class="a_work">
                    <!-- image -->	
                    <div class="normal">
                        <img src="{{ asset('DreamLife/html/assets/images/mix/940/image_fixed.jpg')}}" alt="" class="grid_image"/>
                        <div class="work_heading">The Lost Future</div>
                    </div>
                    <!-- image end -->
                    <!-- hover effect -->
                    <div class="hover">
                        <div class="work_links">
                            <div><a href="http://vimeo.com/50719750" data-rel="prettyPhoto" class="misc_white_icons16 icon16_15" title="The Lost Future"></a></div>
                            <div><a href="single_project.html" class="misc_white_icons16 icon16_67" title="Project Details"></a></div>
                        </div>
                        <div class="clearfix"></div>
                        <!-- social links -->
                        <div class="social_links">			    			    
                            <div class="share_icons">
                                <a href="http://twitthis.com/twit?url=http://dreamlife.designforlifeden.com" target="_blank" class="social_colored twitter tooltip_s" title="Share on Twitter"></a>
                                <a href="http://www.facebook.com/sharer.php?u=http://dreamlife.designforlifeden.com" target="_blank" class="social_colored facebook tooltip_s" title="Share on Facebook"></a>
                                <a href="http://linkedin.com/shareArticle?mini=true&amp;url=http://dreamlife.designforlifeden.com&amp;title=DreamLife%20Responsive%20Template" target="_blank" class="social_colored linkedin tooltip_s" title="Share on LinkedIn"></a>
                                <a href="mailto:?subject=DreamLife%20Responsive%20Template&amp;body=http://dreamlife.designforlifeden.com" class="social_colored mail tooltip_s" title="Mail"></a>
                            </div>
                        </div>
                        <!-- social links end -->
                    </div>
                    <!-- hover effect end -->
                </div>
                <!-- item image end -->
                </div>
        </div>
        <!-- a portfolio item end -->
        
        <!-- a portfolio item -->
        <div class="a_item" data-cats="photography logo">
            <div class="grid_3">
                <!-- item image -->
                <div class="a_work">
                    <!-- image -->	
                    <div class="normal">
                        <img src="{{ asset('DreamLife/html/assets/images/mix/940/image_fixed.jpg')}}" alt="" class="grid_image"/>
                        <div class="work_heading">Child Alone</div>
                    </div>
                    <!-- image end -->
                    <!-- hover effect -->
                    <div class="hover">
                        <div class="work_links">
                            <div><a href="{{ asset('DreamLife/html/assets/images/mix/940/image.jpg')}}" data-rel="prettyPhoto" class="misc_white_icons16 icon16_15" title="Child Alone"></a></div>
                            <div><a href="single_project.html" class="misc_white_icons16 icon16_67" title="Project Details"></a></div>
                        </div>
                        <div class="clearfix"></div>
                        <!-- social links -->
                        <div class="social_links">			    			    
                            <div class="share_icons">
                                <a href="http://twitthis.com/twit?url=http://dreamlife.designforlifeden.com" target="_blank" class="social_colored twitter tooltip_s" title="Share on Twitter"></a>
                                <a href="http://www.facebook.com/sharer.php?u=http://dreamlife.designforlifeden.com" target="_blank" class="social_colored facebook tooltip_s" title="Share on Facebook"></a>
                                <a href="http://linkedin.com/shareArticle?mini=true&amp;url=http://dreamlife.designforlifeden.com&amp;title=DreamLife%20Responsive%20Template" target="_blank" class="social_colored linkedin tooltip_s" title="Share on LinkedIn"></a>
                                <a href="mailto:?subject=DreamLife%20Responsive%20Template&amp;body=http://dreamlife.designforlifeden.com" class="social_colored mail tooltip_s" title="Mail"></a>
                            </div>
                        </div>
                        <!-- social links end -->
                    </div>
                    <!-- hover effect end -->
                </div>
                <!-- item image end -->
                </div>
        </div>
        <!-- a portfolio item end -->
        
        <!-- a portfolio item -->
        <div class="a_item" data-cats="interactive">
            <div class="grid_3">
                <!-- item image -->
                <div class="a_work">
                    <!-- image -->	
                    <div class="normal">
                        <img src="{{ asset('DreamLife/html/assets/images/mix/940/image_fixed.jpg')}}" alt="" class="grid_image"/>
                        <div class="work_heading">Robots Logo Bumpers</div>
                    </div>
                    <!-- image end -->
                    <!-- hover effect -->
                    <div class="hover">
                        <div class="work_links">
                            <div><a href="http://vimeo.com/29791072" data-rel="prettyPhoto" class="misc_white_icons16 icon16_15" title="Robots Logo Bumpers"></a></div>
                            <div><a href="single_project.html" class="misc_white_icons16 icon16_67" title="Project Details"></a></div>
                        </div>
                        <div class="clearfix"></div>
                        <!-- social links -->
                        <div class="social_links">			    			    
                            <div class="share_icons">
                                <a href="http://twitthis.com/twit?url=http://dreamlife.designforlifeden.com" target="_blank" class="social_colored twitter tooltip_s" title="Share on Twitter"></a>
                                <a href="http://www.facebook.com/sharer.php?u=http://dreamlife.designforlifeden.com" target="_blank" class="social_colored facebook tooltip_s" title="Share on Facebook"></a>
                                <a href="http://linkedin.com/shareArticle?mini=true&amp;url=http://dreamlife.designforlifeden.com&amp;title=DreamLife%20Responsive%20Template" target="_blank" class="social_colored linkedin tooltip_s" title="Share on LinkedIn"></a>
                                <a href="mailto:?subject=DreamLife%20Responsive%20Template&amp;body=http://dreamlife.designforlifeden.com" class="social_colored mail tooltip_s" title="Mail"></a>
                            </div>
                        </div>
                        <!-- social links end -->
                    </div>
                    <!-- hover effect end -->
                </div>
                <!-- item image end -->
            </div>
        </div>
        <!-- a portfolio item end -->
        
        <!-- a portfolio item -->
        <div class="a_item" data-cats="photography">
            <div class="grid_3">
                <!-- item image -->
                <div class="a_work">
                    <!-- image -->	
                    <div class="normal">
                        <img src="{{ asset('DreamLife/html/assets/images/mix/940/image_fixed.jpg')}}" alt="" class="grid_image"/>
                        <div class="work_heading">Luxury Life</div>
                    </div>
                    <!-- image end -->
                    <!-- hover effect -->
                    <div class="hover">
                        <div class="work_links">
                            <div><a href="{{ asset('DreamLife/html/assets/images/mix/940/image.jpg')}}" data-rel="prettyPhoto" class="misc_white_icons16 icon16_15" title="Luxury Life"></a></div>
                            <div><a href="single_project.html" class="misc_white_icons16 icon16_67" title="Project Details"></a></div>
                        </div>
                        <div class="clearfix"></div>
                        <!-- social links -->
                        <div class="social_links">			    			    
                            <div class="share_icons">
                                <a href="http://twitthis.com/twit?url=http://dreamlife.designforlifeden.com" target="_blank" class="social_colored twitter tooltip_s" title="Share on Twitter"></a>
                                <a href="http://www.facebook.com/sharer.php?u=http://dreamlife.designforlifeden.com" target="_blank" class="social_colored facebook tooltip_s" title="Share on Facebook"></a>
                                <a href="http://linkedin.com/shareArticle?mini=true&amp;url=http://dreamlife.designforlifeden.com&amp;title=DreamLife%20Responsive%20Template" target="_blank" class="social_colored linkedin tooltip_s" title="Share on LinkedIn"></a>
                                <a href="mailto:?subject=DreamLife%20Responsive%20Template&amp;body=http://dreamlife.designforlifeden.com" class="social_colored mail tooltip_s" title="Mail"></a>
                            </div>
                        </div>
                        <!-- social links end -->
                    </div>
                    <!-- hover effect end -->
                </div>
                <!-- item image end -->
                </div>
        </div>
        <!-- a portfolio item end -->
        
        <!-- a portfolio item -->
        <div class="a_item" data-cats="web logo">
            <div class="grid_3">
                <!-- item image -->
                <div class="a_work">
                    <!-- image -->	
                    <div class="normal">
                        <img src="{{ asset('DreamLife/html/assets/images/mix/940/image_fixed.jpg')}}" alt="" class="grid_image"/>
                        <div class="work_heading">Good Morning</div>
                    </div>
                    <!-- image end -->
                    <!-- hover effect -->
                    <div class="hover">
                        <div class="work_links">
                            <div><a href="{{ asset('DreamLife/html/assets/images/mix/940/image.jpg')}}" data-rel="prettyPhoto" class="misc_white_icons16 icon16_15" title="Good Morning"></a></div>
                            <div><a href="single_project.html" class="misc_white_icons16 icon16_67" title="Project Details"></a></div>
                        </div>
                        <div class="clearfix"></div>
                        <!-- social links -->
                        <div class="social_links">			    			    
                            <div class="share_icons">
                                <a href="http://twitthis.com/twit?url=http://dreamlife.designforlifeden.com" target="_blank" class="social_colored twitter tooltip_s" title="Share on Twitter"></a>
                                <a href="http://www.facebook.com/sharer.php?u=http://dreamlife.designforlifeden.com" target="_blank" class="social_colored facebook tooltip_s" title="Share on Facebook"></a>
                                <a href="http://linkedin.com/shareArticle?mini=true&amp;url=http://dreamlife.designforlifeden.com&amp;title=DreamLife%20Responsive%20Template" target="_blank" class="social_colored linkedin tooltip_s" title="Share on LinkedIn"></a>
                                <a href="mailto:?subject=DreamLife%20Responsive%20Template&amp;body=http://dreamlife.designforlifeden.com" class="social_colored mail tooltip_s" title="Mail"></a>
                            </div>
                        </div>
                        <!-- social links end -->
                    </div>
                    <!-- hover effect end -->
                </div>
                <!-- item image end -->
                </div>
        </div>
        <!-- a portfolio item end -->
        
        <!-- a portfolio item -->
        <div class="a_item" data-cats="photography">
            <div class="grid_3">
                <!-- item image -->
                <div class="a_work">
                    <!-- image -->	
                    <div class="normal">
                        <img src="{{ asset('DreamLife/html/assets/images/mix/940/image_fixed.jpg')}}" alt="" class="grid_image"/>
                        <div class="work_heading">Clean Break Revealer</div>
                    </div>
                    <!-- image end -->
                    <!-- hover effect -->
                    <div class="hover">
                        <div class="work_links">
                            <div><a href="http://vimeo.com/50876055" data-rel="prettyPhoto" class="misc_white_icons16 icon16_15" title="Clean Break Revealer"></a></div>
                            <div><a href="single_project.html" class="misc_white_icons16 icon16_67" title="Project Details"></a></div>
                        </div>
                        <div class="clearfix"></div>
                        <!-- social links -->
                        <div class="social_links">			    			    
                            <div class="share_icons">
                                <a href="http://twitthis.com/twit?url=http://dreamlife.designforlifeden.com" target="_blank" class="social_colored twitter tooltip_s" title="Share on Twitter"></a>
                                <a href="http://www.facebook.com/sharer.php?u=http://dreamlife.designforlifeden.com" target="_blank" class="social_colored facebook tooltip_s" title="Share on Facebook"></a>
                                <a href="http://linkedin.com/shareArticle?mini=true&amp;url=http://dreamlife.designforlifeden.com&amp;title=DreamLife%20Responsive%20Template" target="_blank" class="social_colored linkedin tooltip_s" title="Share on LinkedIn"></a>
                                <a href="mailto:?subject=DreamLife%20Responsive%20Template&amp;body=http://dreamlife.designforlifeden.com" class="social_colored mail tooltip_s" title="Mail"></a>
                            </div>
                        </div>
                        <!-- social links end -->
                    </div>
                    <!-- hover effect end -->
                </div>
                <!-- item image end -->
                </div>
        </div>
        <!-- a portfolio item end -->
        
        <!-- a portfolio item -->
        <div class="a_item" data-cats="web">
            <div class="grid_3">
                <!-- item image -->
                <div class="a_work">
                    <!-- image -->	
                    <div class="normal">
                        <img src="{{ asset('DreamLife/html/assets/images/mix/940/image_fixed.jpg')}}" alt="" class="grid_image"/>
                        <div class="work_heading">Shopping Everywhere</div>
                    </div>
                    <!-- image end -->
                    <!-- hover effect -->
                    <div class="hover">
                        <div class="work_links">
                            <div><a href="{{ asset('DreamLife/html/assets/images/mix/940/image.jpg')}}" data-rel="prettyPhoto" class="misc_white_icons16 icon16_15" title="Shopping Everywhere"></a></div>
                            <div><a href="single_project.html" class="misc_white_icons16 icon16_67" title="Project Details"></a></div>
                        </div>
                        <div class="clearfix"></div>
                        <!-- social links -->
                        <div class="social_links">			    			    
                            <div class="share_icons">
                                <a href="http://twitthis.com/twit?url=http://dreamlife.designforlifeden.com" target="_blank" class="social_colored twitter tooltip_s" title="Share on Twitter"></a>
                                <a href="http://www.facebook.com/sharer.php?u=http://dreamlife.designforlifeden.com" target="_blank" class="social_colored facebook tooltip_s" title="Share on Facebook"></a>
                                <a href="http://linkedin.com/shareArticle?mini=true&amp;url=http://dreamlife.designforlifeden.com&amp;title=DreamLife%20Responsive%20Template" target="_blank" class="social_colored linkedin tooltip_s" title="Share on LinkedIn"></a>
                                <a href="mailto:?subject=DreamLife%20Responsive%20Template&amp;body=http://dreamlife.designforlifeden.com" class="social_colored mail tooltip_s" title="Mail"></a>
                            </div>
                        </div>
                        <!-- social links end -->
                    </div>
                    <!-- hover effect end -->
                </div>
                <!-- item image end -->
                </div>
        </div>
        <!-- a portfolio item end -->
        
        <!-- a portfolio item -->
        <div class="a_item" data-cats="photography">
            <div class="grid_3">
                <!-- item image -->
                <div class="a_work">
                    <!-- image -->	
                    <div class="normal">
                        <img src="{{ asset('DreamLife/html/assets/images/mix/940/image_fixed.jpg')}}" alt="" class="grid_image"/>
                        <div class="work_heading">Graffiti Signature</div>
                    </div>
                    <!-- image end -->
                    <!-- hover effect -->
                    <div class="hover">
                        <div class="work_links">
                            <div><a href="http://www.youtube.com/watch?v=q4ehd4-srzc" data-rel="prettyPhoto" class="misc_white_icons16 icon16_15" title="Graffiti Signature"></a></div>
                            <div><a href="single_project.html" class="misc_white_icons16 icon16_67" title="Project Details"></a></div>
                        </div>
                        <div class="clearfix"></div>
                        <!-- social links -->
                        <div class="social_links">			    			    
                            <div class="share_icons">
                                <a href="http://twitthis.com/twit?url=http://dreamlife.designforlifeden.com" target="_blank" class="social_colored twitter tooltip_s" title="Share on Twitter"></a>
                                <a href="http://www.facebook.com/sharer.php?u=http://dreamlife.designforlifeden.com" target="_blank" class="social_colored facebook tooltip_s" title="Share on Facebook"></a>
                                <a href="http://linkedin.com/shareArticle?mini=true&amp;url=http://dreamlife.designforlifeden.com&amp;title=DreamLife%20Responsive%20Template" target="_blank" class="social_colored linkedin tooltip_s" title="Share on LinkedIn"></a>
                                <a href="mailto:?subject=DreamLife%20Responsive%20Template&amp;body=http://dreamlife.designforlifeden.com" class="social_colored mail tooltip_s" title="Mail"></a>
                            </div>
                        </div>
                        <!-- social links end -->
                    </div>
                    <!-- hover effect end -->
                </div>
                <!-- item image end -->
                </div>
        </div>
        <!-- a portfolio item end -->
        
        <!-- a portfolio item -->
        <div class="a_item" data-cats="web">
            <div class="grid_3">
                <!-- item image -->
                <div class="a_work">
                    <!-- image -->	
                    <div class="normal">
                        <img src="{{ asset('DreamLife/html/assets/images/mix/940/image_fixed.jpg')}}" alt="" class="grid_image"/>
                        <div class="work_heading">Alphabetica</div>
                    </div>
                    <!-- image end -->
                    <!-- hover effect -->
                    <div class="hover">
                        <div class="work_links">
                            <div><a href="http://vimeo.com/42135179" data-rel="prettyPhoto" class="misc_white_icons16 icon16_15" title="Alphabetica"></a></div>
                            <div><a href="single_project.html" class="misc_white_icons16 icon16_67" title="Project Details"></a></div>
                        </div>
                        <div class="clearfix"></div>
                        <!-- social links -->
                        <div class="social_links">			    			    
                            <div class="share_icons">
                                <a href="http://twitthis.com/twit?url=http://dreamlife.designforlifeden.com" target="_blank" class="social_colored twitter tooltip_s" title="Share on Twitter"></a>
                                <a href="http://www.facebook.com/sharer.php?u=http://dreamlife.designforlifeden.com" target="_blank" class="social_colored facebook tooltip_s" title="Share on Facebook"></a>
                                <a href="http://linkedin.com/shareArticle?mini=true&amp;url=http://dreamlife.designforlifeden.com&amp;title=DreamLife%20Responsive%20Template" target="_blank" class="social_colored linkedin tooltip_s" title="Share on LinkedIn"></a>
                                <a href="mailto:?subject=DreamLife%20Responsive%20Template&amp;body=http://dreamlife.designforlifeden.com" class="social_colored mail tooltip_s" title="Mail"></a>
                            </div>
                        </div>
                        <!-- social links end -->
                    </div>
                    <!-- hover effect end -->
                </div>
                <!-- item image end -->
                </div>
        </div>
        <!-- a portfolio item end -->
        
        <!-- a portfolio item -->
        <div class="a_item" data-cats="photography">
            <div class="grid_3">
                <!-- item image -->
                <div class="a_work">
                    <!-- image -->	
                    <div class="normal">
                        <img src="{{ asset('DreamLife/html/assets/images/mix/940/image_fixed.jpg')}}" alt="" class="grid_image"/>
                        <div class="work_heading">Incredible Landscape</div>
                    </div>
                    <!-- image end -->
                    <!-- hover effect -->
                    <div class="hover">
                        <div class="work_links">
                            <div><a href="{{ asset('DreamLife/html/assets/images/mix/940/image.jpg')}}" data-rel="prettyPhoto" class="misc_white_icons16 icon16_15" title="Incredible Landscape"></a></div>
                            <div><a href="single_project.html" class="misc_white_icons16 icon16_67" title="Project Details"></a></div>
                        </div>
                        <div class="clearfix"></div>
                        <!-- social links -->
                        <div class="social_links">			    			    
                            <div class="share_icons">
                                <a href="http://twitthis.com/twit?url=http://dreamlife.designforlifeden.com" target="_blank" class="social_colored twitter tooltip_s" title="Share on Twitter"></a>
                                <a href="http://www.facebook.com/sharer.php?u=http://dreamlife.designforlifeden.com" target="_blank" class="social_colored facebook tooltip_s" title="Share on Facebook"></a>
                                <a href="http://linkedin.com/shareArticle?mini=true&amp;url=http://dreamlife.designforlifeden.com&amp;title=DreamLife%20Responsive%20Template" target="_blank" class="social_colored linkedin tooltip_s" title="Share on LinkedIn"></a>
                                <a href="mailto:?subject=DreamLife%20Responsive%20Template&amp;body=http://dreamlife.designforlifeden.com" class="social_colored mail tooltip_s" title="Mail"></a>
                            </div>
                        </div>
                        <!-- social links end -->
                    </div>
                    <!-- hover effect end -->
                </div>
                <!-- item image end -->
                </div>
        </div>
        <!-- a portfolio item end -->
        
        <!-- a portfolio item -->
        <div class="a_item" data-cats="interactive">
            <div class="grid_3">
                <!-- item image -->
                <div class="a_work">
                    <!-- image -->	
                    <div class="normal">
                        <img src="{{ asset('DreamLife/html/assets/images/mix/940/image_fixed.jpg')}}" alt="" class="grid_image"/>
                        <div class="work_heading">Enjoy the Town</div>
                    </div>
                    <!-- image end -->
                    <!-- hover effect -->
                    <div class="hover">
                        <div class="work_links">
                            <div><a href="{{ asset('DreamLife/html/assets/images/mix/940/image.jpg')}}" data-rel="prettyPhoto" class="misc_white_icons16 icon16_15" title="Enjoy the Town"></a></div>
                            <div><a href="single_project.html" class="misc_white_icons16 icon16_67" title="Project Details"></a></div>
                        </div>
                        <div class="clearfix"></div>
                        <!-- social links -->
                        <div class="social_links">			    			    
                            <div class="share_icons">
                                <a href="http://twitthis.com/twit?url=http://dreamlife.designforlifeden.com" target="_blank" class="social_colored twitter tooltip_s" title="Share on Twitter"></a>
                                <a href="http://www.facebook.com/sharer.php?u=http://dreamlife.designforlifeden.com" target="_blank" class="social_colored facebook tooltip_s" title="Share on Facebook"></a>
                                <a href="http://linkedin.com/shareArticle?mini=true&amp;url=http://dreamlife.designforlifeden.com&amp;title=DreamLife%20Responsive%20Template" target="_blank" class="social_colored linkedin tooltip_s" title="Share on LinkedIn"></a>
                                <a href="mailto:?subject=DreamLife%20Responsive%20Template&amp;body=http://dreamlife.designforlifeden.com" class="social_colored mail tooltip_s" title="Mail"></a>
                            </div>
                        </div>
                        <!-- social links end -->
                    </div>
                    <!-- hover effect end -->
                </div>
                <!-- item image end -->
                </div>
        </div>
        <!-- a portfolio item end -->
        
        <!-- a portfolio item -->
        <div class="a_item" data-cats="web">
            <div class="grid_3">
                <!-- item image -->
                <div class="a_work">
                    <!-- image -->	
                    <div class="normal">
                        <img src="{{ asset('DreamLife/html/assets/images/mix/940/image_fixed.jpg')}}" alt="" class="grid_image"/>
                        <div class="work_heading">Timeline After</div>
                    </div>
                    <!-- image end -->
                    <!-- hover effect -->
                    <div class="hover">
                        <div class="work_links">
                            <div><a href="{{ asset('DreamLife/html/assets/images/mix/940/image.jpg')}}" data-rel="prettyPhoto" class="misc_white_icons16 icon16_15" title="Timeline After"></a></div>
                            <div><a href="single_project.html" class="misc_white_icons16 icon16_67" title="Project Details"></a></div>
                        </div>
                        <div class="clearfix"></div>
                        <!-- social links -->
                        <div class="social_links">			    			    
                            <div class="share_icons">
                                <a href="http://twitthis.com/twit?url=http://dreamlife.designforlifeden.com" target="_blank" class="social_colored twitter tooltip_s" title="Share on Twitter"></a>
                                <a href="http://www.facebook.com/sharer.php?u=http://dreamlife.designforlifeden.com" target="_blank" class="social_colored facebook tooltip_s" title="Share on Facebook"></a>
                                <a href="http://linkedin.com/shareArticle?mini=true&amp;url=http://dreamlife.designforlifeden.com&amp;title=DreamLife%20Responsive%20Template" target="_blank" class="social_colored linkedin tooltip_s" title="Share on LinkedIn"></a>
                                <a href="mailto:?subject=DreamLife%20Responsive%20Template&amp;body=http://dreamlife.designforlifeden.com" class="social_colored mail tooltip_s" title="Mail"></a>
                            </div>
                        </div>
                        <!-- social links end -->
                    </div>
                    <!-- hover effect end -->
                </div>
                <!-- item image end -->
                </div>
        </div>
        <!-- a portfolio item end -->
        
        <!-- a portfolio item -->
        <div class="a_item" data-cats="web logo">
            <div class="grid_3">
                <!-- item image -->
                <div class="a_work">
                    <!-- image -->	
                    <div class="normal">
                        <img src="{{ asset('DreamLife/html/assets/images/mix/940/image_fixed.jpg')}}" alt="" class="grid_image"/>
                        <div class="work_heading">Tell Me a Idea</div>
                    </div>
                    <!-- image end -->
                    <!-- hover effect -->
                    <div class="hover">
                        <div class="work_links">
                            <div><a href="{{ asset('DreamLife/html/assets/images/mix/940/image.jpg')}}" data-rel="prettyPhoto" class="misc_white_icons16 icon16_15" title="Tell Me a Idea"></a></div>
                            <div><a href="single_project.html" class="misc_white_icons16 icon16_67" title="Project Details"></a></div>
                        </div>
                        <div class="clearfix"></div>
                        <!-- social links -->
                        <div class="social_links">			    			    
                            <div class="share_icons">
                                <a href="http://twitthis.com/twit?url=http://dreamlife.designforlifeden.com" target="_blank" class="social_colored twitter tooltip_s" title="Share on Twitter"></a>
                                <a href="http://www.facebook.com/sharer.php?u=http://dreamlife.designforlifeden.com" target="_blank" class="social_colored facebook tooltip_s" title="Share on Facebook"></a>
                                <a href="http://linkedin.com/shareArticle?mini=true&amp;url=http://dreamlife.designforlifeden.com&amp;title=DreamLife%20Responsive%20Template" target="_blank" class="social_colored linkedin tooltip_s" title="Share on LinkedIn"></a>
                                <a href="mailto:?subject=DreamLife%20Responsive%20Template&amp;body=http://dreamlife.designforlifeden.com" class="social_colored mail tooltip_s" title="Mail"></a>
                            </div>
                        </div>
                        <!-- social links end -->
                    </div>
                    <!-- hover effect end -->
                </div>
                <!-- item image end -->
                </div>
        </div>
        <!-- a portfolio item end -->
        
        <!-- a portfolio item -->
        <div class="a_item" data-cats="web interactive">
            <div class="grid_3">
                <!-- item image -->
                <div class="a_work">
                    <!-- image -->	
                    <div class="normal">
                        <img src="{{ asset('DreamLife/html/assets/images/mix/940/image_fixed.jpg')}}" alt="" class="grid_image"/>
                        <div class="work_heading">Digital Creativity</div>
                    </div>
                    <!-- image end -->
                    <!-- hover effect -->
                    <div class="hover">
                        <div class="work_links">
                            <div><a href="{{ asset('DreamLife/html/assets/images/mix/940/image.jpg')}}" data-rel="prettyPhoto" class="misc_white_icons16 icon16_15" title="Digital Creativity"></a></div>
                            <div><a href="single_project.html" class="misc_white_icons16 icon16_67" title="Project Details"></a></div>
                        </div>
                        <div class="clearfix"></div>
                        <!-- social links -->
                        <div class="social_links">			    			    
                            <div class="share_icons">
                                <a href="http://twitthis.com/twit?url=http://dreamlife.designforlifeden.com" target="_blank" class="social_colored twitter tooltip_s" title="Share on Twitter"></a>
                                <a href="http://www.facebook.com/sharer.php?u=http://dreamlife.designforlifeden.com" target="_blank" class="social_colored facebook tooltip_s" title="Share on Facebook"></a>
                                <a href="http://linkedin.com/shareArticle?mini=true&amp;url=http://dreamlife.designforlifeden.com&amp;title=DreamLife%20Responsive%20Template" target="_blank" class="social_colored linkedin tooltip_s" title="Share on LinkedIn"></a>
                                <a href="mailto:?subject=DreamLife%20Responsive%20Template&amp;body=http://dreamlife.designforlifeden.com" class="social_colored mail tooltip_s" title="Mail"></a>
                            </div>
                        </div>
                        <!-- social links end -->
                    </div>
                    <!-- hover effect end -->
                </div>
                <!-- item image end -->
                </div>
        </div>
        <!-- a portfolio item end -->
        
        <!-- a portfolio item -->
        <div class="a_item" data-cats="web logo">
            <div class="grid_3">
                <!-- item image -->
                <div class="a_work">
                    <!-- image -->	
                    <div class="normal">
                        <img src="{{ asset('DreamLife/html/assets/images/mix/940/image_fixed.jpg')}}" alt="" class="grid_image"/>
                        <div class="work_heading">Bursting Logo</div>
                    </div>
                    <!-- image end -->
                    <!-- hover effect -->
                    <div class="hover">
                        <div class="work_links">
                            <div><a href="http://vimeo.com/33592769" data-rel="prettyPhoto" class="misc_white_icons16 icon16_15" title="Bursting Logo"></a></div>
                            <div><a href="single_project.html" class="misc_white_icons16 icon16_67" title="Project Details"></a></div>
                        </div>
                        <div class="clearfix"></div>
                        <!-- social links -->
                        <div class="social_links">			    			    
                            <div class="share_icons">
                                <a href="http://twitthis.com/twit?url=http://dreamlife.designforlifeden.com" target="_blank" class="social_colored twitter tooltip_s" title="Share on Twitter"></a>
                                <a href="http://www.facebook.com/sharer.php?u=http://dreamlife.designforlifeden.com" target="_blank" class="social_colored facebook tooltip_s" title="Share on Facebook"></a>
                                <a href="http://linkedin.com/shareArticle?mini=true&amp;url=http://dreamlife.designforlifeden.com&amp;title=DreamLife%20Responsive%20Template" target="_blank" class="social_colored linkedin tooltip_s" title="Share on LinkedIn"></a>
                                <a href="mailto:?subject=DreamLife%20Responsive%20Template&amp;body=http://dreamlife.designforlifeden.com" class="social_colored mail tooltip_s" title="Mail"></a>
                            </div>
                        </div>
                        <!-- social links end -->
                    </div>
                    <!-- hover effect end -->
                </div>
                <!-- item image end -->
                </div>
        </div>
        <!-- a portfolio item end -->
        
    </div>
    <!-- portfolio items end -->
    <div class="grid_12">
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
</div>
<!-- container 12 end -->
@endsection