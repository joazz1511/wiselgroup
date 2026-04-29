@extends('layouts.app')

@section('content')

<section id="products" class="sectiondeere">
    <div class="container">

        {{-- HEADER --}}
        <div class="openingpage">
            <h1 class="text-uppercase txt-green3">PRODUCT LINE - UP</h1>
            <p>Cek spesifikasi dan fitur sesuai dengan kebutuhan Anda.</p>
        </div> 

        <div class="page-header wow fadeInDown" data-wow-duration="500ms" data-wow-delay="300ms">
            <h2 class="txt-grey2">Which Product Is Right For You?</h2>
        </div>

        {{-- PRODUCT FILTER + LIST --}}
        <div class="row">

            {{-- SIDEBAR FILTER (AMAN) --}}
            <div class="col-sm-3">
                <h3>Product Category</h3>

                <div style="margin-bottom:15px;">
                    @foreach($product_category as $row)
                    <div class="list-group-item checkbox">
                        <label>
                            <input type="checkbox" class="common_selector brand" value="{{ $row->name }}">
                            {{ $row->name }}
                        </label>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- PRODUCT LIST (AMAN) --}}
            <div class="col-sm-9">

                <div class="list box text-shadow">
                    <div class="row filter_data">

                        @foreach($products as $item)
                        <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp">

                            <div class="product-card" style="margin-bottom:20px;">
                                <div class="img-display">
                                    <img 
                                        src="{{ asset('storage/product/'.$item->product_pict) }}" 
                                        class="img-responsive"
                                        style="width:100%; height:200px; object-fit:cover;"
                                    >
                                </div>

                                <h5 class="txt-grey3" style="margin-top:10px;">
                                    {{ $item->product_name }}
                                </h5>
                            </div>

                        </div>
                        @endforeach

                    </div>
                </div>

                <br>

                <div id="pagination_link" class="text-center">
                    {{-- {{ $products->links() }} --}}
                </div>

            </div>

        </div>

        <hr class="divider_boder">

        {{-- IMPLEMENT / COMPLIMENTARY PRODUCT (AMAN) --}}
        <div class="page-header wow fadeInDown" data-wow-duration="500ms">
            <h2 class="txt-grey2">Find Your Complimentary Product</h2>
        </div>

        <div id="deereimplementlist" class="box indolist wow fadeInUp">
            <div class="row">
                <div class="col-xs-12">
                    <div class="row">

                        <div class="list box text-shadow">

                            @foreach ($implement as $rows)
                            <div class="col-sm-6 list-item">
                                <div class="thumbproduct">			
                                    <div class="row">

                                        <div class="col-xs-6">
                                            <div class="img theme">
                                                <a data-toggle="modal" data-target="#detail_product" href="{{ url('modal/implement/'.$rows->implement_id) }}">
                                                    <img src="{{ asset('storage/implement/'.$rows->implement_pict) }}"/>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-xs-6">
                                            <div class="block right newslist-body">
                                                <h5 class="text-uppercase">{{ $rows->implement_name }}</h5>
                                                <a class="btn btn-deere_green btn-xs"
                                                   data-toggle="modal"
                                                   data-target="#detail_product"
                                                   href="{{ url('modal/implement/'.$rows->implement_id) }}">
                                                    See Detail
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>

                        <div class="box indolist-no-results">
                            <p>No results found</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection