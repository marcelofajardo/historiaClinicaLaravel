@extends('theme.frontoffice.layout.main')
@section('title')
Perfil de usuario
@endsection

@section('head')

@endsection

@section('nav')

@endsection

@section('content')
    <div class="container">
        <div class="row">
            @include('theme.frontoffice.pages.user.includes.nav')
            {{-- seccion principal--}}
            <div class="col s12 m8">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title">@yield('title')</span>
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters

                    </div>

                </div>

            </div>

        </div>

    </div>

@endsection

@section('foot')


@endsection