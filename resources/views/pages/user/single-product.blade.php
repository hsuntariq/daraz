<x-layout>
    
    <x-nav/>
    <div class="container card border-0 p-5 my-5 rounded-0">
        <div class="row ">
            <div class="col-lg-3">
                <img width="100%" height="300px" src="{{asset('/storage/' . $product->image)}}" alt="">
            </div>
            <div class="col-lg-6 ">
                <h4>{{$product->desc}}</h4>
                <div class="d-flex">
                    <p style="font-size:0.8rem" class="text-secondary">
                        Brand: <span class="text-info">
                            No Brand
                        </span>
                    </p>
                </div>
                <hr>
                <div style="color:orange" class="price">
                    Rs. {{$product->price}}
                </div>
                <p class="text-text-secondary d-flex">
                    <strike>Rs. {{$product->old_price}}</strike>
                    -90%
                </p>
                <hr>
                <div class="d-flex gap-5 align-items-center">
                    <p class="text-seconadary">
                        Quantity
                    </p>
                    <div class="d-flex ">
                        <button class="btn rounded-0 border">
                            -
                        </button>
                        <input type="number" class="rounded-0 border text-center" style="width:20%" value="0">
                        <button class="btn rounded-0 border">
                            +
                        </button>
                        
                    </div>
                </div>
                <button class="btn btn-dark w-100 my-3">
                    Buy
                </button>
            </div>
            <div class="col-lg-3">
                <p class="p-0 m-0" style="font-size: 0.8rem">
                    Delivery
                </p>
                <div class="d-flex gap-3">
                    <div class="d-flex gap-1">
                        <div class="bi bi-geo-alt"></div>
                    <p class="p-0 m-0">Sindh, Karachi - Gulshan-e-Iqbal, Block 15</p>
                    </div>
                    <div class="text-info">
                        Change
                    </div>
                </div>
                <hr>
                 <p class="p-0 m-0" style="font-size: 0.8rem">
                    Service
                </p>
                 <div class="d-flex gap-1">
                        <div class="bi bi-geo-alt"></div>
                        <div class="">
                            <p class="p-0 m-0">14 days free & easy return</p>
                            <p style="font-size: 0.8rem" class="text-secondary">
                                Change of mind is not applicable
                            </p>
                        </div>
                </div>
                 <div class="d-flex gap-1">
                        <div class="bi bi-geo-alt"></div>
                        <div class="">
                            <p class="p-0 m-0">Warranty not available</p>
                            
                        </div>
                </div>

            </div>
        </div>
    </div>
</x-layout>