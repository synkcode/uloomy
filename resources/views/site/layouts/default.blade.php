<!DOCTYPE html>
<html>
@include('site.includes.head')

<body>
    @include('site.includes.header')

    @yield('content')

    @include('site.includes.footer')

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ asset('js/site/bootstrap.js') }}"></script>

</body>

</html>
