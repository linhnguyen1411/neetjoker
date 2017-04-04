@extends('front.layout.index')
@section('content')
    <div id="primary" class="sidebar-no">
        <div class="inner group">
            <!-- START CONTENT -->
            <div id="content-page" class="content group">
                <script>
                    jQuery(document).ready(function($){
                        $('.sidebar').remove();

                        if( !$('#primary').hasClass('sidebar-no') ) {
                            $('#primary').removeClass().addClass('sidebar-no');
                        }

                    });
                </script>
                <div id="portfolio" class="portfolio-big-image">

                    <div class="portfolios hentry work group">
                        <div class="work-thumbnail">
                            <div class="nozoom">
                                <img src="public/front/images/projects/0061-770x368.jpg" alt="0061" title="0061" />
                                <div class="overlay">
                                    <a class="overlay_img" href="public/front/images/projects/0061.jpg" rel="lightbox" title="Love"></a>
                                    <a class="overlay_project" href="project.html"></a>
                                    <span class="overlay_title">Love</span>
                                </div>
                            </div>
                        </div>
                        <div class="work-description">
                            <h3>Love</h3>
                            <p>Nullam volutpat, mauris scelerisque iaculis semper, justo odio rutrum urna, at cursus urna nisl et ipsum. Donec dapibus lacus nec sapien faucibus eget suscipit lorem mattis.</p>
                            <p>Donec non mauris ac nulla consectetur pretium sit amet rhoncus neque. Maecenas aliquet, diam sed [...]
                            <div class="clear"></div>
                            <div class="work-skillsdate">
                                <p class="skills"><span class="label">Photographer:</span> Linh Nguyen</p>
                                <p class="workdate"><span class="label">Model:</span>Jennifer</p>
                                <p class="workdate"><span class="label">Year:</span> 2012</p>
                            </div>
                            <a class="read-more" href="project.html">View Project</a>
                        </div>
                        <div class="clear"></div>
                    </div>

                    <div class="portfolios hentry work group">
                        <div class="work-thumbnail">
                            <div class="nozoom">
                                <img src="public/front/images/projects/0081-770x368.jpg" alt="0081" title="0081" />
                                <div class="overlay">
                                    <a class="overlay_img" href="public/front/images/projects/0081.jpg" rel="lightbox" title="Steep This!"></a>
                                    <a class="overlay_project" href="project.html"></a>
                                    <span class="overlay_title">Steep This!</span>
                                </div>
                            </div>
                        </div>
                        <div class="work-description">
                            <h3>Steep This!</h3>
                            <p>Nullam volutpat, mauris scelerisque iaculis semper, justo odio rutrum urna, at cursus urna nisl et ipsum. Donec dapibus lacus nec sapien faucibus eget suscipit lorem mattis.</p>
                            <p>Donec non mauris ac nulla consectetur pretium sit amet rhoncus neque. Maecenas aliquet, diam sed [...]
                            <div class="clear"></div>
                            <div class="work-skillsdate">
                                <p class="skills"><span class="label">Photographer:</span> Linh Nguyen</p>
                                <p class="workdate"><span class="label">Model:</span> Jennifer!</p>
                                <p class="workdate"><span class="label">Year:</span> 2012</p>
                            </div>
                            <a class="read-more" href="project.html">View Project</a>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="portfolios hentry work group">
                        <div class="work-thumbnail">
                            <div class="nozoom">
                                <img src="public/front/images/projects/0081-770x368.jpg" alt="0081" title="0081" />
                                <div class="overlay">
                                    <a class="overlay_img" href="public/front/images/projects/0081.jpg" rel="lightbox" title="Steep This!"></a>
                                    <a class="overlay_project" href="project.html"></a>
                                    <span class="overlay_title">Steep This!</span>
                                </div>
                            </div>
                        </div>
                        <div class="work-description">
                            <h3>Steep This!</h3>
                            <p>Nullam volutpat, mauris scelerisque iaculis semper, justo odio rutrum urna, at cursus urna nisl et ipsum. Donec dapibus lacus nec sapien faucibus eget suscipit lorem mattis.</p>
                            <p>Donec non mauris ac nulla consectetur pretium sit amet rhoncus neque. Maecenas aliquet, diam sed [...]
                            <div class="clear"></div>
                            <div class="work-skillsdate">
                                <p class="skills"><span class="label">Photographer:</span> Linh Nguyen</p>
                                <p class="workdate"><span class="label">Model:</span> Jennifer!</p>
                                <p class="workdate"><span class="label">Year:</span> 2012</p>
                            </div>
                            <a class="read-more" href="project.html">View Project</a>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="portfolios hentry work group">
                        <div class="work-thumbnail">
                            <div class="nozoom">
                                <img src="public/front/images/projects/0081-770x368.jpg" alt="0081" title="0081" />
                                <div class="overlay">
                                    <a class="overlay_img" href="public/front/images/projects/0081.jpg" rel="lightbox" title="Steep This!"></a>
                                    <a class="overlay_project" href="project.html"></a>
                                    <span class="overlay_title">Steep This!</span>
                                </div>
                            </div>
                        </div>
                        <div class="work-description">
                            <h3>Steep This!</h3>
                            <p>Nullam volutpat, mauris scelerisque iaculis semper, justo odio rutrum urna, at cursus urna nisl et ipsum. Donec dapibus lacus nec sapien faucibus eget suscipit lorem mattis.</p>
                            <p>Donec non mauris ac nulla consectetur pretium sit amet rhoncus neque. Maecenas aliquet, diam sed [...]
                            <div class="clear"></div>
                            <div class="work-skillsdate">
                                <p class="skills"><span class="label">Photographer:</span> Linh Nguyen</p>
                                <p class="workdate"><span class="label">Model:</span> Jennifer!</p>
                                <p class="workdate"><span class="label">Year:</span> 2012</p>
                            </div>
                            <a class="read-more" href="project.html">View Project</a>
                        </div>
                        <div class="clear"></div>
                    </div>

                </div>
                <div class="clear"></div>
            </div>
            <!-- END CONTENT -->
        </div>
    </div>
    <!-- END PRIMARY -->
@endsection