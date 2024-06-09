<div class="container">
    <div class="row">
        @foreach($products as $product)
        <div class="col-12 col-sm-6 col-md-4 col-lg-4 mb-4">
            <div class="ms-card flex-grow-1">
                <!-- IMAGES -->
                <div class="images">
                    <img class="imgnormal img-fluid imgfront" src="{{ asset('img/'.$product['frontImage']) }}" alt="Product Image">
                    <img class="imgnormal img-fluid imgback" src="{{ asset('img/'.$product['backImage']) }}" alt="Product Image">
                </div>
                <!-- IMAGES -->

                <!-- LIKE BADGE -->
                <div class="like-badge">
                    <span class="unliked"><i class="fa-regular fa-heart"></i></span>
                    <span class="liked"><i class="fa-solid fa-heart"></i></span>
                </div>
                <!-- LIKE BADGE -->

                <!-- CARD TEXT -->
                <div class="item-info text-center">
                    <a class="brand" href="">{{ $product['brand'] }}</a>
                    <h3>{{ $product['name'] }}</h3>
                    <span class="newprice">{{ $product['price'] }}€</span>
                </div>
                <!-- CARD TEXT -->
            </div>
        </div>
        @endforeach
    </div>
</div>