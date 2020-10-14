@extends('layout.master')

@section('content')

@include('layout.banner')

  <section id="page-content" class="page-wrapper">

                        

            <!-- FEATURED PRODUCT SECTION START -->
            <div class="featured-product-section mb-50">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title text-left mb-40">
                                <h2 class="uppercase">Featured brand</h2>
                                <h6>There are many variations of passages of brands available,</h6>
                            </div>
                        </div>
                    </div>
                   
                    <div class="featured-product">
                        <div class="row active-featured-product slick-arrow-2">
                            <!-- product-item start -->
                            <div class="col-xs-12">
                                <div class="product-item">
                                    <div class="product-img">
                                        <a href="{{ url('shop') }}">
                                            <img src="img/product/CMC.jpg" alt=""/>
                                        </a>
                                    </div>
                                       @if (!empty($barang_list))
                                      @foreach($barang_list as $barang)
                                    <div class="product-info">
                                        <h6 class="product-title">

                                        </h6>
                                      @endforeach
                                        
                                    </div>
                                </div>
                            </div>
                            @else
                             <p>Tidak ada Data barang</p>
                             @endif
                             <!-- product-item end -->
                            <!-- product-item start -->

                            <!-- product-item end -->
                        </div>
                    </div>          
                </div>            
            </div>
            <!-- FEATURED PRODUCT SECTION END -->
              
        </section>

@stop