<!--   slider   -->
<section id="home-slider" class="bs-docs-sliderhome bg-grey1">
    <div class="container">
        <div class="col-xs-12">
            <div class="row">
                <div id="wrapper">
                    <div class="callbacks_container">
                        <ul class="rslides" id="rshomeslider">

                            <!-- slider image -->
                            @foreach($slider as $rows)
                                <li>
                                    <img src="{{ asset('storage/' . $rows->image) }}" alt="">
                                    
                                    <div class="caption">                                        
                                        <div class="slideright sliderhome_logo hidden">
                                            <img src="{{ asset('storage/img/logoicon/logodeere-100.png') }}">
                                        </div>
                                    </div>
                                </li>
                            @endforeach
    
                            <!-- slider vid -->
                            @foreach($video as $rows)
                                <li class="embed-responsive embed-responsive-16by9 video">
                                    <iframe 
                                        style="height:570px; width:1140px"
                                        id="videoSlider"
                                        class="embed-responsive-item"
                                        src="{{ $rows->video_url }}"
                                        title="YouTube video player"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen>
                                    </iframe>
                                </li>	
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--   End slider   -->