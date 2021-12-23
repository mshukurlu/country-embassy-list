@extends('layout.app')
@section('body')
    <div class="container">

        @foreach($countries->chunk(3) as $chunks)

        <div class="row">
            @foreach($chunks as $country)
            <div class="col-sm-4 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{$country->name}}</h5>
                        <p class="card-text">{{$country->alpha_2_code}}</p>
                        <a href="#" class="btn btn-primary">Go to Embassy page</a>
                    </div>
                </div>
            </div>

            @endforeach
        </div>
        @endforeach
    </div>
@endsection
