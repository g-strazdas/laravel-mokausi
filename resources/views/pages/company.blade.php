@extends('main')
@section('content')
    <div class="container">
        <h1 class="mt-4">{{$company->company}}</h1>
        <div class="logo">
            <img style="width: 28rem" src="{{asset('/storage/images/'.$company->logo)}}" alt="">
{{--            {{dd(asset('/storage/images/'.$company->logo))}}--}}
        </div>

        <h3>Kita informacija apie įmonę:</h3>
        <ul>
            <li>{{$company->code}}</li>
            <li>{{$company->vat}}</li>
            <li>{{$company->director}}</li>
            <li>{{$company->description}}</li>
        </ul>
        <h4>Veiksmai:</h4>
        <ul>
            <li><a href = "/imone/delete/{{$company->id}}">Šalinimas</a></li>
            <li><a href = "/imone/update/{{$company->id}}">Duomenų atnaujinimas</a></li>
        </ul>
    </div>
@endsection
