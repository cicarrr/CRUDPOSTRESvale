@extends('layouts.app')

@section('title', 'Crear Postre ')

@section('content')
<section class="form-section" aria-labelledby="create-title">
    <header>
        <h2 id="create-title"> Agregar Nuevo Postre</h2>
        <p>Llena los campos para crear un postre delicioso </p>
    </header>

    @if ($errors->any())
        <div class="flash error" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li> {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('postres.store') }}" method="POST" class="postre-form" novalidate>
        @csrf
        @include('postres._form', [
            'postre' => null,
            'buttonText' => 'Crear Postre '
        ])
    </form>
</section>
@endsection
