@extends('layouts.app')

@section('title', $postre->nombre . ' · Postre')

@section('content')

<article class="postre-detail">

    <header>
        <h2>{{ $postre->nombre }}</h2>
    </header>

    <section class="detail-grid">
        <div class="detail-body">
            <p class="desc">{{ $postre->descripcion }}</p>

            <p><strong>Precio:</strong> ${{ number_format($postre->precio, 2) }}</p>

            <p>
                <strong>Fecha de creación:</strong>
                <time>
                    {{ $postre->fecha_creacion?->format('d-m-Y') ?? '—' }}
                </time>
            </p>

            <div class="detail-actions">
                <a href="{{ route('postres.edit', $postre) }}" class="btn edit">Editar ✏️</a>

                <form action="{{ route('postres.destroy', $postre) }}" method="POST" class="inline-form">
                    @csrf
                    @method('DELETE')
                    <button class="btn delete">Eliminar </button>
                </form>

                <a href="{{ route('postres.index') }}" class="btn secondary">Volver</a>
            </div>
        </div>
    </section>

</article>

@endsection
