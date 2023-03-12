@include('dash.head')

    <body>
        <div id="main-wrapper">
            @include('dash.nav-header')
            @include('dash.header')
            @include('dash.sidebar')
            @include('dash.body-content')
            @include('dash.footer')
        </div>
        @include('dash.scripts')
    </body>
</html>