@extends('layouts.admin.master')
@section('body')
    <div class="container p-3">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>OFF</th>
                    <th>Category</th>
                    <th>Delete</th>
                    <th>Edite</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($prods as $prod)
                    <tr>
                        <td>
                            <h6>{{ $prod->name }}</h6>
                        </td>
                        <td>
                            <h6>{{ $prod->price }}</h6>
                        </td>
                        <td>
                            <h6>{{ $prod->off }}</h6>
                        </td>
                        <td>
                            <h6>{{ $prod->cat_name }}</h6>
                        </td>
                        <td>
                            <h6><a name="" id="" class="btn btn-danger"
                                    href="/admin/product/delete/{{ $prod->id }}" role="button">Delete</a></h6>
                        </td>
                        <td>
                            <h6><a name="" id="" class="btn btn-info" href="/admin/product/edite"
                                    role="button">Edite</a></h6>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
        <div class="p-4"  style="width: 500px;margin:auto">
            @csrf
            <form action="/admin/product/create" method="post">
                <div class="form-group">
                    <label for=""><h5>Insert Product</h5></label>
                    <input type="text" name="" id="" class="form-control" placeholder=""
                        aria-describedby="helpId">
                </div>
                <button type="button" name="" id="" class="btn btn-primary btn-block"><h4>Insert</h4></button>
            </form>
        </div>
    </div>
@endsection
