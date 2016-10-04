<!doctype html>
<html lang="en">
@section('htmlheader')
    @include('layouts.partials.htmlheader')
@endsection
<body>
@yield('main-content')
@section('sidebar')
        @include('layouts.partials.sidebar')
@endsection
@yield('main-content')
</body>
@section('footer')
    @include('layouts.partials.footer')
@endsection
</html>
