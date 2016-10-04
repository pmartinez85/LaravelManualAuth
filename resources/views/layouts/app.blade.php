<!doctype html>
<html lang="en">
@section('htmlheader')
    @include('layouts.partial.htmlheader.blade.php')
@endsection
<body>
@yield('main-content')
@section('footer')
        @include('layouts.partial.footer.blade.php')
@endsection

@yield('main-content')

@section('footer)
        @include('layouts.partials.footer')
@endsection
</body>
</html>