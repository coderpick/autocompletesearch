@extends('frontend.layouts.master')

@section('content')
@include('frontend.layouts.header')
    <div class="row">
        <div class="col-lg-3">
            <h2 class="my-4">Category</h2>
            <div class="list-group">
                @forelse($categories as $category)
                <a href="#" class="list-group-item">{{ $category->name }}</a>
                @empty
                @endforelse
            </div>
        </div>
        <!-- /.col-lg-3 -->
        <div class="col-lg-9">

            <div class="row mt-5">
                @forelse($products as $product)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="{{ route('product.details',$product->slug) }}"><img class="card-img-top" src="{{ $product->image }}" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="{{ route('product.details',$product->slug) }}">{{ $product->name }}</a>
                            </h4>
                            <h5>Tk.{{ $product->price }}</h5>
                            {{--<p class="card-text">--}}
                               {{--{!! str_limit($product->description , 50)!!}--}}
                            {{--</p>--}}
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                        </div>
                    </div>
                </div>
                @empty
                    <div class="col-lg-4 col-md-6 mb-4">
                        <p>No Product available</p>
                    </div>
                @endforelse


            </div>
            <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->
@endsection