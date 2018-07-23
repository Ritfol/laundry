<!DOCTYPE html>
<html lang="en">

@include('includes.head')

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<!-- Navigation-->
@include('includes.navbar')
<div class="content-wrapper">

    @yield('content')

</div>
    @include('includes.footer')

    @include('includes.scripts')

</body>

</html>
