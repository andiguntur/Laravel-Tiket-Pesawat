@extends('template.app')
@section('content')
<!-- section -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-8">
                <div class="row">

                    <!-- post -->
                    <div class="col-md-12">
                        <div class="post post-row">
                            <a class="post-img" href="blog-post.html"><img src="{{asset('front/img/post-2.jpg')}}" alt=""></a>
                            <div class="post-body">
                                <div class="post-meta">
                                    <a class="post-category cat-2" href="#">JavaScript</a>
                                    <span class="post-date">March 27, 2018</span>
                                </div>
                                <h3 class="post-title"><a href="blog-post.html">Ask HN: Does Anybody Still JQuery?</a>
                                </h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut
                                    labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
                            </div>
                        </div>
                    </div>
                    <!-- /post -->
                </div>
            </div>

            <div class="col-md-4">
                <!-- post widget -->
                <div class="aside-widget">
                    <div class="section-title">
                        <h2>Most Read</h2>
                    </div>

                    <div class="post post-widget">
                        <a class="post-img" href="blog-post.html"><img src="{{asset('front/img/widget-1.jpg')}}" alt=""></a>
                        <div class="post-body">
                            <h3 class="post-title"><a href="blog-post.html">Tell-A-Tool: Guide To Web Design And
                                    Development
                                    Tools</a></h3>
                        </div>
                    </div>
                </div>
                <!-- /post widget -->

                <!-- catagories -->
                <div class="aside-widget">
                    <div class="section-title">
                        <h2>Catagories</h2>
                    </div>
                    <div class="category-widget">
                        <ul>
                            <li><a href="#" class="cat-1">Web Design<span>340</span></a></li>
                            <li><a href="#" class="cat-2">JavaScript<span>74</span></a></li>
                            <li><a href="#" class="cat-4">JQuery<span>41</span></a></li>
                            <li><a href="#" class="cat-3">CSS<span>35</span></a></li>
                        </ul>
                    </div>
                </div>
                <!-- /catagories -->
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /section -->
@endsection