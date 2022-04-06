    <section class="product-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-heading">
                        <h1>OUR PRODUCT</h1>
                        <p>We are focusing on some user needed software solution – those are making easier life of our
                            valued customer as well as user. Not only though we do customize solution what you in need.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($products as $product)
                <a href="{{ route('products_details', $product->id) }}">
                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                        <div class="product-box">
                            <img class="img-fluid" src="{{ asset('uploads/product_images/' . $product->image) }}">
                            <a href="{{ route('products_details', $product->id) }}" class="product-btn pt-3 rounded">{{ $product->title }}</a>
                        </div>
                    </div>
                </a>
                 @endforeach
            </div>
        </div>
    </section>