<!--   Careers   -->
<section id="careers" class="sectiondeere">
    <div class="container">

        <div class="openingpage">
            <h1 class="text-uppercase txt-green3">Careers</h1>
            <p>The most important work you can ever do is the work you can do right now.</p>
            <p>
                Looking for a career that matters? Looking for an opportunity that leads you in new and exciting directions?
                What about rewards that show you are welcomed and appreciated? Sounds like you're looking for a career with Wisel.
            </p>
        </div>

        <div class="page-header">
            <h2>Join Our Teams</h2>
            <p>Whether you're an intern or a part-time student, Wisel has an opportunity for you.</p>
        </div>

        <!--  Career -->
        <div class="row row-centered">

            @foreach($vacancy as $rows)
            <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 col-centered">
                <div class="keypeople_thumb">

                    <div class="keypeople-txt">
                        <h5 class="h6 txt-green2">{{ $rows->division }}</h5>
                        <h5 class="txt-grey3">{{ $rows->position }}</h5>
                    </div>

                    <div class="btn-group">
                        <a class="btn btn-xs btn-deere_green"
                           data-toggle="modal"
                           data-target="#detail_careers"
                           href="{{ url('modal/vacancy/'.$rows->id) }}">
                            detail
                        </a>
                    </div>

                </div>
            </div>
            @endforeach

        </div>

        <hr class="divider_boder">

        <p class="careerlink">
            If you are interested in joining us, please send your resume at 
            <a class="btn btn-link txt-green2"
               target="_blank"
               href="mailto:recruitment.johndeere@wiselgroup.indomobil.co.id">
                HRD PT Wahana Inti Selaras
            </a>.
        </p>

    </div>
</section>
<!--   End Careers   -->