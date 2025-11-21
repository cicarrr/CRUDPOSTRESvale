@extends('layouts.app')

@section('title', 'Listado de Postres ')

@section('content')

<article class="intro">
    <header>
        <h2>Bienvenida al Dashboard de Postres</h2>
        <p>Gestiona tus postres favoritos </p>
    </header>
</article>

<section class="section-postres">
    <header>
        <h3>Lista de Postres</h3>
    </header>

    <div class="postres-grid">

        @forelse ($postres as $postre)
            <article class="card-postre">

                <div class="card-body">
                    <h4>{{ $postre->nombre }}</h4>

                    <p class="desc">{{ Str::limit($postre->descripcion, 80) }}</p>

                    <p class="price">
                        Precio: ${{ number_format($postre->precio, 2) }}
                    </p>

                    <p class="date">
                        Creado:
                        <time>
                            {{ $postre->fecha_creacion?->format('d-m-Y') ?? '—' }}
                        </time>
                    </p>

                    <div class="card-actions">
                        <a href="{{ route('postres.show', $postre) }}" class="btn view">Ver </a>
                        <a href="{{ route('postres.edit', $postre) }}" class="btn edit">Editar </a>

                        <form action="{{ route('postres.destroy', $postre) }}" method="POST" class="inline-form">
                            @csrf
                            @method('DELETE')
                            <button class="btn delete">Eliminar </button>
                        </form>
                    </div>
                </div>

            </article>

        @empty
            <p>No hay postres aún. ¡Crea uno! </p>
        @endforelse

    </div>

</section>

@endsection
