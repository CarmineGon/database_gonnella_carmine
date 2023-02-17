<x-layout>

    <x-navbar/>

    <x-header
    title="HomePage"
    />
    @if (session('message'))
        <div class="alert alert-success">
            <p class="m-0">{{session('message')}}</p>
        </div>
    @endif

<div class="container my-5">
    <div class="row justfy-content-center">
        @foreach ($products as $product)
        <div class="col-12 col-md-8 col-lg-6">
            <div class="card" style="width: 18rem;">
                <img src="https://picsum.photos/200" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$product -> name}}</h5>
                  <h5 class="card-title">{{$product -> brand}}</h5>
                  <p class="card-text">{{$product -> description}}</p>
                  <p class="card-text">{{$product -> price}}</p>
                </div>
              </div>
        </div>
        @endforeach
    </div>
</div>

</x-layout>    
