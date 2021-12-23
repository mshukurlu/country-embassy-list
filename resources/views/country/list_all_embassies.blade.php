@extends('layout.app')
@section('body')
    <div class="container-fluid">
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Website</th>
                <th scope="col">City</th>
                <th scope="col">Address</th>
                <th scope="col">Office hours</th>
                <th scope="col">Note</th>
                <th scope="col">Type</th>
                <th scope="col">Emails</th>
                <th scope="col">Phones</th>
            </tr>
            </thead>
            <tbody>
           @foreach($embassyList as $embassy)
            <tr>
                <td>{{$embassy->website ?? ''}}</td>
                <td>{{$embassy->city ?? ''}}</td>
                <td>{{$embassy->address ?? ''}}</td>
                <td>{{removeHtml($embassy->office_hours) ?? ''}}</td>
                <td>{{$embassy->note ?? ''}}</td>
                <td>{{$embassy->type->name}}</td>
                <td>{{getValuesOfColumnObjects($embassy->emails,'address')}}</td>
                <td>{{getValuesOfColumnObjects($embassy->phones,'number')}}</td>

            </tr>
           @endforeach
            </tbody>
        </table>

    </div>
@endsection
