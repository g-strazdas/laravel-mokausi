@extends('main')
@section('content')
<section class="pt-4">
    <div class="container px-lg-5">
        @foreach($companies as $company)
        <!-- Page Features-->
        <div class="row gx-lg-5">
            <div class="col-lg-6 col-xxl-4 mb-5">
                <div class="card bg-light border-0 h-100">
                    <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                        <h2 class="fs-4 fw-bold">{{$company->company}}</h2>
                        <p class="mb-0">{{$company->description}}</p>
                        <a href="/imone/{{$company->id}}">Daugiau informacijos...</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endsection
