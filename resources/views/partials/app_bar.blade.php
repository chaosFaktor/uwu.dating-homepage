@section('app_bar')
    @push('styles')
        <link href="{{ asset('css/app_bar.css') }}" rel="stylesheet">
        <link href="{{ asset('css/title.css') }}" rel="stylesheet">
    @endpush


    <div class="app_bar">
        <div class="app_title_container">
            <h1>UwU dating</h1>
        </div>
        <ul class='app_bar_links'>
            <li><a href="/">home</a></li>
            <li><a href="/about">about</a></li>
            <li><a href="/contribute">contribute</a></li>
        </ul>
    </div>
@endsection('app_bar')