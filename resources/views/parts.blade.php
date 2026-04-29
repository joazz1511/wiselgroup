@extends('layouts.app')

@section('content')

<section id="parts" class="sectiondeere bg-grey1">
    <div class="container">

        <!-- header -->
        <div class="openingpage">
            <h1 class="text-uppercase txt-green3">Spare Parts</h1>
            <p>
                PT Wahana Inti Selaras (Wisel) provides best spare parts solution for our customers.
            </p>
        </div>

        <div class="page-header">
            <h2 class="txt-grey2">Find Your Parts Promotion Here!</h2>
        </div>

        <!-- list -->
        <div class="row">

            @forelse($parts as $rows)
            <div class="col-sm-4 col-md-4 list-item">

                <div class="thumbproduct">			
                    <div class="row">

                        <!-- image -->
                        <div class="col-xs-4 col-md-5">
                            <div class="img theme">
                                <a data-toggle="modal" data-target="#detail_parts_{{ $rows->parts_id }}">
                                    <img 
                                        src="{{ asset('storage/parts/'.$rows->parts_pict) }}"
                                        class="img-responsive"
                                        style="height:100px; object-fit:cover;"
                                        onerror="this.src='https://via.placeholder.com/150'"
                                    />
                                </a>
                            </div>
                        </div>

                        <!-- data -->
                        <div class="col-xs-8 col-md-7">
                            <div class="block right newslist-body">

                                <h5 class="text-uppercase">{{ $rows->parts_name }}</h5>

                                <h6 class="txt-grey2">
                                    <strong>{{ $rows->parts_number }}</strong>
                                </h6>

                                <a class="btn btn-deere_green btn-xs"
                                   data-toggle="modal"
                                   data-target="#detail_parts_{{ $rows->parts_id }}">
                                    See Detail
                                </a>

                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <!-- detail -->
            <div class="modal fade" id="detail_parts_{{ $rows->parts_id }}" tabindex="-1">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">

                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">{{ $rows->parts_name }}</h4>
                        </div>

                        <div class="modal-body text-center">

                            <img 
                                src="{{ asset('storage/parts/'.$rows->parts_pict) }}"
                                class="img-responsive"
                                style="margin:auto; max-height:300px;"
                            >

                            <br>

                            <h5><strong>Part Number:</strong> {{ $rows->parts_number }}</h5>

                            <p style="margin-top:10px;">
                                {{ $rows->parts_desc }}
                            </p>

                            @if($rows->url)
                                <a href="{{ $rows->url }}" target="_blank" class="btn btn-primary">
                                    More Info
                                </a>
                            @endif

                        </div>

                        <div class="modal-footer">
                            <button class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>

                    </div>
                </div>
            </div>

            @empty
            <div class="col-12 text-center">
                <p>No parts found</p>
            </div>
            @endforelse

        </div>

    </div>
</section>

@endsection