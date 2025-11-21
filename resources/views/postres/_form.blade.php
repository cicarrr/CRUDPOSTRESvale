<section class="form-container">

    <div class="field-group">
        <label for="nombre" class="label">Nombre del Postre </label>
        <input 
            id="nombre" 
            name="nombre" 
            type="text" 
            class="input"
            placeholder="Ejemplo: Cupcake de Fresa"
            value="{{ old('nombre', $postre?->nombre) }}"
            required
        >
    </div>

    <div class="field-group">
        <label for="descripcion" class="label">Descripción </label>
        <textarea 
            id="descripcion" 
            name="descripcion" 
            class="textarea"
            rows="3"

            placeholder="Describe el postre de forma linda "
        >{{ old('descripcion', $postre?->descripcion) }}</textarea>
    </div>

    <div class="field-row">

        <div class="field-group small">
            <label for="precio" class="label">Precio (USD) </label>
            <input 
                id="precio" 
                name="precio" 
                type="number" 
                step="0.01" 
                class="input"
                value="{{ old('precio', $postre?->precio) }}"
                required
            >
        </div>

        <div class="field-group small">
            <label for="fecha_creacion" class="label">Fecha de creación </label>
            <input 
                id="fecha_creacion" 
                name="fecha_creacion" 
                type="date" 
                class="input"
                value="{{ old('fecha_creacion', $postre?->fecha_creacion?->format('Y-m-d')) }}"
            >
        </div>

    </div>

    <div class="form-actions">
        <button type="submit" class="btn primary">{{ $buttonText }}</button>
        <a href="{{ route('postres.index') }}" class="btn secondary">Cancelar</a>
    </div>

</section>
