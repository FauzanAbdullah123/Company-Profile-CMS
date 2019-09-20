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
    @php
        $about = \App\About::paginate(4);
    @endphp
    @foreach($about as $data)
    <div class="grid_6">
        <div class="divider_page"><h2>{{$data->title}}</h2></div>
       <p style="font-size:15px">{{$data->desc}}</p>
    </div>
    @endforeach
    <!-- mission and vision end -->
</div>
<!-- container 12 end -->
<!-- container 12 -->
<div class="container_12">
    <!-- tabs -->
    <div class="grid_6">
        <div class="divider_page"><h2>Position Available</h2></div>
        <!-- accordion -->
        @php
            $about = \App\About::latest()->paginate(2);
        @endphp
         @foreach($about as $data)
        <div class="accordion">
            <h5>{{$data->title}}</h5>
            <div>
                <p>{{$data->desc}}</p>
            </div>
        </div>
        @endforeach
        <!-- accordion end -->
    </div>
    <!-- tabs end -->
    <!-- progress bar -->
    <div class="grid_6">
        <div class="divider_page"><h2>We offer the following technology platforms :</h2></div>
        <div class="progress_bars">
            <b>ASP.NET</b>
            <div class="progress_bar" data-percentage="95" data-title="95%"><span></span></div>
            <b>PHP</b>
            <div class="progress_bar" data-percentage="95" data-title="95%"><span></span></div>
            <b>MOBILE APPS (ANDROID)</b>
            <div class="progress_bar" data-percentage="90" data-title="90%"><span></span></div>
            <b>DATABASE, INTERFACING, OTHERS</b>
            <div class="progress_bar" data-percentage="95" data-title="95%"><span></span></div>
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
                <img src="team-99.jpg" alt="member1">
            </div>
            <!-- member pic end -->
            <!-- member content -->
            <div class="member_content">
                <!-- member info -->
                <div class="member_info">
                    <div class="member_name">Irfan Satriadarma</div>
                    <div class="member_job">Chief Executive Officer</div>
                </div>
                <!-- member info end -->
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
                <img src="team-98.jpg" alt="member2">
            </div>
            <!-- member pic end -->
            <!-- member content -->
            <div class="member_content">
                <!-- member info -->
                <div class="member_info">
                    <div class="member_name">Achmad Nur Pratomo</div>
                    <div class="member_job">Chief Technology Officer</div>
                </div>
                <!-- member info end -->
                <div class="clearfix"></div>
            </div>
            <!-- member content end -->
        </div>
        <!-- a member end -->
        <!-- a member -->
        <div class="a_member">
            <!-- member pic -->
            <div class="member_pic">
                <img src="team-97.jpg" alt="member3">
            </div>
            <!-- member pic end -->
            <!-- member content -->
            <div class="member_content">
                <!-- member info -->
                <div class="member_info">
                    <div class="member_name">Farid Satia Supriana</div>
                    <div class="member_job">Chief Operating Officer</div>
                </div>
                <!-- member info end -->
                <div class="clearfix"></div>
            </div>
            <!-- member content end -->
        </div>
        <!-- a member end -->
        <!-- a member -->
        <div class="a_member">
            <!-- member pic -->
            <div class="member_pic">
                <img src="team-96.jpg" alt="member4">
            </div>
            <!-- member pic end -->
            <!-- member content -->
            <div class="member_content">
                <!-- member info -->
                <div class="member_info">
                    <div class="member_name">Ipan Herdiansyah</div>
                    <div class="member_job">Chief Marketing Officer</div>
                </div>
                <!-- member info end -->
                <div class="clearfix"></div>
            </div>
            <!-- member content end -->
        </div>
        <!-- a member end -->
        <!-- a member -->
        <div class="a_member">
            <!-- member pic -->
            <div class="member_pic">
                <img src="team-95.jpg" alt="member5">
            </div>
            <!-- member pic end -->
            <!-- member content -->
            <div class="member_content">
                <!-- member info -->
                <div class="member_info">
                    <div class="member_name">Widya Revina</div>
                    <div class="member_job">HRGA Manager</div>
                </div>
                <!-- member info end -->
                <div class="clearfix"></div>
            </div>
            <!-- member content end -->
        </div>
        <!-- a member end -->
        <!-- a member -->
        <div class="a_member">
            <!-- member pic -->
            <div class="member_pic">
                <img src="team-94.jpg" alt="member6">
            </div>
            <!-- member pic end -->
            <!-- member content -->
            <div class="member_content">
                <!-- member info -->
                <div class="member_info">
                    <div class="member_name">Yudha Ari Istiantoro</div>
                    <div class="member_job">Project Manager</div>
                </div>
                <!-- member info end -->
                <div class="clearfix"></div>
            </div>
            <!-- member content end -->
        </div>
        <!-- a member end -->
          <!-- a member -->
          <div class="a_member">
            <!-- member pic -->
            <div class="member_pic">
                <img src="team-93.jpg" alt="member6">
            </div>
            <!-- member pic end -->
            <!-- member content -->
            <div class="member_content">
                <!-- member info -->
                <div class="member_info">
                    <div class="member_name">Rakhman Mansyur</div>
                    <div class="member_job">Project Manager</div>
                </div>
                <!-- member info end -->
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