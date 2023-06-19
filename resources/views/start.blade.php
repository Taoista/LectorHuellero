@extends('layouts.template')

@section('title', 'TodoAutoSPA')

@section('content-css')


<meta name="csrf-token" content="{{ csrf_token() }}">

@endsection


@section('content-general')

<div class="content-body">

    <div class="col-12 mb-30">
        <div class="box">
            <div class="box-head">
                <h3 class="title">Formulario de Enrolamiento</h3>
            </div>

            @livewire("clients.entollement")


        </div>
    </div>

</div>

@endsection


@section('content-script')
<script>
    const _Url_puro = _Url.replace(/^https?:\/\//, '');
    // const socket = new WebSocket(`ws://${_Url_puro}`);
    const socket = new WebSocket(`ws://127.0.1:8000`);
    console.log(socket)


        // Evento que se ejecuta cuando la conexión se establece correctamente
    socket.addEventListener('open', function(event) {
    console.log('Conexión establecida.');

    // Enviar un mensaje al servidor
    socket.send('Hola, servidor!');
    });

    // Evento que se ejecuta cuando se recibe un mensaje del servidor
    socket.addEventListener('message', function(event) {
    const mensaje = event.data;
    console.log('Mensaje recibido del servidor:', mensaje);
    });

    // Evento que se ejecuta cuando se produce un error en la conexión
    socket.addEventListener('error', function(error) {
    console.error('Error en la conexión:', error);
    });

    // Evento que se ejecuta cuando la conexión se cierra
    socket.addEventListener('close', function(event) {
    console.log('Conexión cerrada.');
    });

    console.log("temrino de la configuraicon");

</script>


@endsection
