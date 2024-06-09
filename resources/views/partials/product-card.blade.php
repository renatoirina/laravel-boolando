<div class="container">
    <div class="row">
        @foreach($products as $product)
        <div class="col-12 col-md-6 col-lg-4 mb-4">
            <div class="ms-card flex-grow-1">
                <!--IMAGES -->
                <div class="images">
                    <img class="imgnormal img-fluid" src="{{ asset('img/'.$product['frontImage']) }}" alt="Product Image">
                </div>
                <!-- IMAGES -->

                {{-- ITEM INFO --}}
                <div class="item-info text-center">
                    <a class="brand" href="">{{ $product['brand'] }}</a>
                    <h3>{{ $product['name'] }}</h3>
                    <span class="newprice">{{ $product['price'] }}€</span>
                </div>
                {{-- ITEM INFO --}}
            </div>
        </div>
        @endforeach
    </div>
</div>