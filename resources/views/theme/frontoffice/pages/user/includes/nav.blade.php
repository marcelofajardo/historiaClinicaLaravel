{{-- menu lateral --}}

<div class="col s12 m4"><div class="collection">
        <a href="{{route('frontoffice.user.profile')}}" class="collection-item">Perfil</a>
        @if(auth()->user()->has_role(config('app.patient_role')))
        <a href="#!" class="collection-item active">Agendar cita</a>
        <a href="#!" class="collection-item">Mis citas</a>
        <a href="#!" class="collection-item">Recetas</a>
        @endif
        <a href="#!" class="collection-item">Facturacion</a>
        <a href="#!" class="collection-item">Editar perfil</a>

    </div>

</div>