<div>
    <section class="main-sec-wel m-5">
        <div class="all-kinds  list" id="all">

            <div class="row first-line m-5">
                @if(isset($products))
                @foreach ($products as $product)
                 <div class="col-3 mb-2">
                    <div class="card">
                        <img class="card-img-top" src="{{$product->image_url}}" alt="Card image cap">
                        <div class="card-body">

                            <h5 class="card-text " style="text-overflow: ellipsis;overflow: hidden; white-space: nowrap; font-size: 19px">{{$product->title}}</h5>

                          <div class="fav">
                             <Button class="btn shadow-none p-0"><i class="fas fa-heart"></i></Button>
                             <Button class="btn shadow-none p-0" wire:click="$emit('addToCart',{{$product->id}})"><i class="fas fa-shopping-cart"></i></Button>
                             <Button class="btn shadow-none p-0"><i class="fas fa-share-alt"></i></Button>


                          </div>
                        </div>
                      </div>
                    </div>
                    @endforeach
                    @endif
                </div>





        </div>
        </section>
</div>
