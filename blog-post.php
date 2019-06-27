@extends('template.app')
@section('content')

<!-- section -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- Post content -->
            <div class="col-md-8">
                <div class="section-row sticky-container">
                    <div class="main-post">
                        <h3>Lorem Ipsum: when, and when not to it</h3>
                        <figure class="figure-img">
                            <img class="img-responsive" src="{{asset('front/img/post-4.jpg')}}" alt="">
                            <figcaption>So Lorem Ipsum is bad (not necessarily)</figcaption>
                        </figure>
                        <p>Do you like Cheese Whiz? Spray tan? Fake eyelashes? Thats what is Lorem Ipsum to many—it
                            rubs them the wrong way, all the way. Its unreal, uncanny, makes you wonder if something is
                            wrong, it seems to seek your attention for all the wrong reasons. Usually, we prefer the
                            real thing, wine without sulfur based preservatives, real butter, not margarine, and so wed
                            like our layouts and designs to be filled with real words, with thoughts that count,
                            information that has value. </p>
                        <p>The toppings you may chose for that TV dinner pizza slice when you forgot to shop for foods,
                            the paint you may slap on your face to impress the new boss is your business. But what about
                            your daily bread? Design comps, layouts, wireframes—will your clients accept that you go
                            about things the facile way? Authorities in our business will tell in no uncertain terms
                            that Lorem Ipsum is that huge, huge no no to forswear forever. Not so fast, Id say, there
                            are some redeeming factors in favor of greeking text, as its is merely the symptom of a
                            worse problem to take into consideration.</p>

                        <p>You begin with a text, you sculpt information, you chisel away whats not needed, you come to
                            the point, make things clear, add value, youre a content person, you like words. Design is
                            no afterthought, far from it, but it comes in a deserved second. Anyway, you still Lorem
                            Ipsum and rightly so, it will always have a place in the web workers toolbox, things
                            happen, not always the way you like it, not always in the preferred order. Even if your less
                            into design and more into content strategy you may find some redeeming value with, wait
                            it, dummy copy, no less.</p>
                        <p>There s lot of hate out there a text that amounts to little more than garbled words in an
                            old language. The villagers are out there with a vengeance to get that Frankenstein,
                            wielding torches and pitchforks, wanting to tar and feather it at the least, running it out
                            of town in shame.</p>
                        <p>One of the villagers, Kristina Halvorson from Adaptive Path, holds steadfastly to the notion
                            that design can’t be tested without real content:</p>
                        <blockquote class="blockquote">
                            I’ve heard the argument that “lorem ipsum” is effective in wireframing or design because it
                            helps people focus on the actual layout, or color scheme, or whatever. What kills me here is
                            that we’re talking about creating a user experience that will (whether we like it or not) be
                            DRIVEN by words. The entire structure of the page or app flow is FOR THE WORDS.
                        </blockquote>
                        <p>If thats what you think how bout the other way around? How can you evaluate content without
                            design? No typography, no colors, no layout, no styles, all those things that convey the
                            important signals that go beyond the mere textual, hierarchies of information, weight,
                            emphasis, oblique stresses, priorities, all those subtle cues that also have visual and
                            emotional appeal to the reader. Rigid proponents of content strategy may shun the of
                            dummy copy but then designers might want to ask them to provide style sheets with the copy
                            decks they supply that are in tune with the design direction they require.</p>
                        <h3>Summing up, if the copy is diverting attention from the design it’s because it’s not up to
                            task.</h3>
                        <p>Typographers of yore didnt come up with the concept of dummy copy because people thought
                            that content is inconsequential window dressing, only there to be used by designers who
                            can’t be bothered to read. Lorem Ipsum is needed because words matter, a lot. Just fill up a
                            page with draft copy about the client’s business and they will actually read it and comment
                            on it. They will be drawn to it, fiercely. Do it the wrong way and draft copy can derail
                            your design review.</p>
                    </div>
                    <div class="post-shares sticky-shares">
                        <a href="#" class="share-facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="share-twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="share-google-plus"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="share-pinterest"><i class="fa fa-pinterest"></i></a>
                        <a href="#" class="share-linkedin"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-envelope"></i></a>
                    </div>
                </div>


                <!-- author -->
                <div class="section-row">
                    <div class="post-author">
                        <div class="media">
                            <div class="media-left">
                                <img class="media-object" src="{{asset('front/img/author.png')}}" alt="">
                            </div>
                            <div class="media-body">
                                <div class="media-heading">
                                    <h3>John Doe</h3>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <ul class="author-social">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /author -->
            </div>
            <!-- /Post content -->

            <!-- aside -->
            <div class="col-md-4">
                <!-- post widget -->
                <div class="aside-widget">
                    <div class="section-title">
                        <h2>Featured Posts</h2>
                    </div>
                    <div class="post post-thumb">
                        <a class="post-img" href="blog-post.html"><img src="{{asset('front/img/post-2.jpg')}}" alt=""></a>
                        <div class="post-body">
                            <div class="post-meta">
                                <a class="post-category cat-3" href="#">Jquery</a>
                                <span class="post-date">March 27, 2018</span>
                            </div>
                            <h3 class="post-title"><a href="blog-post.html">Ask HN: Does Anybody Still JQuery?</a>
                            </h3>
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
            <!-- /aside -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /section -->

@endsection