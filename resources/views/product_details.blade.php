@extends('Frontend.master')

@section('frontend-content')            
    <section class="container py-5" style="margin-top: 40px">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="" style="">
                    @foreach ($products as $product)
                        <div class="">
                            <img class="img-fluid" src="{{ asset('uploads/product_images/' . $product->image) }} ">
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-6 ml-5 mt-2">
                <div class="">
                    @foreach ($products as $product)
                        <div class="">
                            <h3>
                                <a href="{{ route('products_details', $product->id) }}" class=" my-5 rounded text-dark">{{ $product->title }}</a>
                            </h3>
                            <div>
                                <p>
                                    {{ $product->description }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection