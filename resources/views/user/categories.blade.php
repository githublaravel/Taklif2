    @extends('layouts.user.master')
    @section('body')
        <div class="container p-2">
            <div class="row">
                @foreach ($cats as $cat)
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header"><img class="card-img-top" src="" alt="Card image"> </div>
                            <div class="card-body"><h4>{{$cat->name}}</h4></div>
                            <div class="card-footer"><h6>Number of products :</h6><a name="" id="" class="btn btn-primary rounded-4" href="/home/products/{{$cat->id}}" role="button">See Products</a></div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endsection
