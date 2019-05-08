@extends('theme.frontoffice.layout.main')

@section('title','Mis facturas')


@section('head')

@endsection

@section('nav')

@endsection

@section('content')
    <div class="container">
        <div class="row">
            @include('theme.frontoffice.pages.user.includes.nav')
            <div class="col s12 m8">
                <div class="card">
                    <div class="card-content">
                        @yield('title')
                        <table>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Concepto</th>
                                    <th>Monto</th>
                                    <th>Estado</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Consulta Dr Jorge</td>
                                    <td>$400</td>
                                    <td>Pagado</td>
                                    <td>
                                        <a href="#modal" data-prescription="1" class="waves-effect waves-light btn modal-trigger">Ver</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>

                </div>

            </div>

        </div>
        <div class="modal" id="modal">
            <div class="modal-content">
                <h4>Titulo</h4>
                <p>Hola mundo</p>

            </div>
            <div class="modal-footer">
                <a href="#!" class="modal-close waves-effect btn-flat">Cerrar</a>
                <a href="#!" class="waves-effect btn-flat">Imprimir</a>

            </div>

        </div>
    </div>


@endsection

@section('foot')
    <script type="text/javascript">
        $('.modal').modal();

    </script>


@endsection