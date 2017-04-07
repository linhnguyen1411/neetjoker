@extends('front.layout.index')
@section('content')
    <div id="primary" class="sidebar-right">
        <div class="inner group">
            <!-- START CONTENT -->
            <div id="content-page" class="content group">
                <div class="hentry group">
                    <div>
                        <h2>Video</h2>
                        <iframe width="640" height="360" src="https://www.youtube.com/embed/LBHrrvF_Ky8" frameborder="0"
                                allowfullscreen></iframe>
                    </div>
                    <div >
                        <h2>Video</h2>
                        <iframe width="640" height="360" src="https://www.youtube.com/embed/XsZyHWslsJc" frameborder="0"
                                allowfullscreen></iframe>
                    </div>

                    <div class="clear space"></div>
                </div>
            </div>
            <div class="sidebar group">
                <div class="widget-first widget recent-posts">
                    <h3>Xem nhiều nhất</h3>
                    <div class="recent-post group">
                        <iframe width="50" height="50" src="https://www.youtube.com/embed/LBHrrvF_Ky8" frameborder="0"
                                allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
