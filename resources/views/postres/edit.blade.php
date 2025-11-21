@extends('layouts.app')

@section('title', 'Editar Postre ')

@section('content')
<section class="form-section" aria-labelledby="edit-title">
    <header>
        <h2 id="edit-title">Editar: {{ $postre->nombre }}</h2>
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

    <form action="{{ route('postres.update', $postre) }}" method="POST" class="postre-form" novalidate>
        @csrf
        @method('PUT')

        @include('postres._form', [
            'postre' => $postre,
            'buttonText' => 'Actualizar Postre '
        ])
    </form>
</section>
@endsection
