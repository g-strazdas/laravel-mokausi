<!DOCTYPE html>
<html lang="en">
@include('_partials/head')

<body>

@include('_partials/nav')
@include('_partials/header')
<!-- Page Content-->
@yield('content')

@include('_partials/footer')
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="{{asset('js/scripts.js')}}"></script>
</body>
</html>
