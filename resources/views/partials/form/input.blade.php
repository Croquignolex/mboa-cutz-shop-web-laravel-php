<div class="form-group">
    @include('partials.input-label', compact('id', 'name'))

    <input id="{{ $id }}"
           name="{{ $id }}"
           type="{{ $type }}"
           value="{{ $value }}"
           class="form-control border {{ $errors->has($id) ? 'border-danger' : 'border-secondary' }}"
    />
</div>