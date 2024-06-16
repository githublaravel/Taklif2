@extends('layouts.user.master')
@section('body')
    <div class="container p-2">
        <div class="row">
            @foreach ($prods as $prod)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header"><img class="card-img-top" src="" alt="Card image"> </div>
                        <div class="card-body"><h4>{{$prod->name}}</h4></div>
                        <div class="card-footer"><h5>Price:{{$prod->price}}</h5><h5>OFF:{{$prod->off}}</h5><a name="" id="" class="btn btn-primary rounded-0" href="/home/product/{{$prod->id}}/" role="button">See Product</a></div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
