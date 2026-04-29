<!--    Our Media   -->
<section id="ourmedia" class="sectiondeere bg-grey1">
    <div class="bs-docs-featurette mediahomepage">
        <div class="container">
            <div class="openingpage">
                <h1 class="text-uppercase txt-green3">Our Media</h1>
                <p>Berita terbaru seputar PT Wahana Inti Selaras.</p>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <div class="news-header bg-green2">
                        <h5 class="txt-white text-center">Latest News</h5>
                    </div>

                    <div class="newshomepage bg-white">
                        <div class="row">

                            <!-- primary news -->
                            @foreach($news_primary as $rows)
                            <div class="col-md-7 col-sm-6 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                                <div class="news_headline">
                                    <a class="imgheadline" data-toggle="modal" data-target="#detail_media" href="{{ url('modal/news/'.$rows->id) }}">
                                        <img src="{{ asset('storage/news/'.$rows->image) }}">
                                    </a>

                                    <h2 class="title">
                                        <a data-toggle="modal" data-target="#detail_media" href="{{ url('modal/news/'.$rows->id) }}">
                                            {{ $rows->title }}
                                        </a>
                                    </h2>

                                    <div class="small">
                                        <p class="date inline">{{ date('d M Y', strtotime($rows->news_date)) }}</p>
                                        <p class="author inline">{{ $rows->news_by }}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                            <hr class="featurette-divider_mobile visible-xs">

                            <!-- news list -->
                            <div class="col-md-5 col-sm-6 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                                <div class="newsscroll">

                                    @foreach($news_list as $rows)
                                    <div class="news_list">
                                        <a class="imgthumb" data-toggle="modal" data-target="#detail_media" href="{{ url('modal/news/'.$rows->id) }}">
                                            <img src="{{ asset('storage/news/'.$rows->image) }}">
                                        </a>

                                        <h3 class="title">
                                            <a data-toggle="modal" data-target="#detail_media" href="{{ url('modal/news/'.$rows->id) }}">
                                                {{ $rows->title }}
                                            </a>
                                        </h3>

                                        <div class="small">
                                            <p class="date inline">{{ date('d M Y', strtotime($rows->news_date)) }}</p>
                                            <p class="author inline">{{ $rows->news_by }}</p>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <hr class="featurette-divider_mobile visible-xs visible-sm">

                <!-- sosmed -->
                <div class="col-md-4">
                    <div class="socialhomepage">

                        <ul class="nav nav-tabs nav-justified" role="tablist">
                            <li role="presentation" class="hidden">
                                <a href="#instag" role="tab" data-toggle="tab"><h5>Instagram</h5></a>
                            </li>
                            <li role="presentation" class="active">
                                <a href="#faceb" role="tab" data-toggle="tab"><h5>Facebook</h5></a>
                            </li>
                            <li role="presentation">
                                <a href="#twitt" role="tab" data-toggle="tab"><h5>Twitter</h5></a>
                            </li>
                        </ul>

                        <div class="tab-content">

                            <!-- instagram -->
                            <div role="tabpanel" class="tab-pane fade hidden" id="instag">
                                <div class="socialcontent">
                                    <div id="instagram-feed1" class="instagram_feed"></div>
                                </div>
                                <div class="gotosocial text-right">
                                    <a target="_blank" href="https://www.instagram.com/wahanaintiselaras/" class="btn btn-sm btn-deere_green">
                                        Find out more
                                    </a>
                                </div>
                            </div>

                            <!-- facebook -->
                            <div role="tabpanel" class="tab-pane fade in active" id="faceb">
                                <div class="socialcontent bg-white">
                                    <div id="fb-root"></div>
                                    <div class="fb-page"
                                         data-href="https://www.facebook.com/wahanaintiselaras/"
                                         data-tabs="timeline"
                                         data-small-header="false"
                                         data-adapt-container-width="true"
                                         data-hide-cover="false"
                                         data-show-facepile="true">
                                        <blockquote cite="https://www.facebook.com/wahanaintiselaras/" class="fb-xfbml-parse-ignore">
                                            <a href="https://www.facebook.com/wahanaintiselaras/">Wahana Inti Selaras</a>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="gotosocial text-right">
                                    <a target="_blank" href="https://www.facebook.com/wahanaintiselaras/" class="btn btn-sm btn-deere_green">
                                        Find out more
                                    </a>
                                </div>
                            </div>

                            <!-- TWT -->
                            <div role="tabpanel" class="tab-pane fade" id="twitt">
                                <div class="socialcontent overflowy text-center">
                                    <a class="twitter-timeline" href="https://twitter.com/johndeere">
                                        John Deere International on Twitter
                                    </a>
                                </div>
                                <div class="gotosocial text-right">
                                    <a target="_blank" href="https://twitter.com/johndeere" class="btn btn-sm btn-deere_green">
                                        Find out more
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!--   End Our Media   -->