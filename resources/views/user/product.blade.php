@extends('layouts.user.master')
@section('body')
    <div class="container p-2">
        <img src="{{ asset('img.jpg') }}" style="max-height: 626px" class="rounded float-start" alt="...">
        <div class="row">
            <div class="bg-light rounded-4" style="margin-left: 5px">
                <h4>Price : {{ $prod->price }}</h4>
                <h4>OFF : {{ $prod->off }}</h4>
            </div>
            <div class="bg-light rounded-2" style="margin-left: 5px ; margin-top:5px;height: 100px;">
                <h4>description : {{ $prod->description }}</h4>
            </div>
        </div>
        <div style="margin-left: 5px;text-align:center;margin-top:20px">
            <h3>Similar products</h3>
            <div class="row">
                @foreach ($prods as $prod)
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <img class="card-img-top" src="{{ asset('img.jpg') }}" alt="Card image">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $prod->name }}</h5>
                                <h5>Price</h5>
                                <h6><a name="" id="" class="btn btn-primary" href="/home/product/{{$prod->id}}"
                                        role="button">See
                                        Prod</a></h6>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
