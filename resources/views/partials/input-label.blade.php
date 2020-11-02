<label for="{{ $id }}">
    {{ $name }}
    @if ($errors->has($id))
        <span class="text-danger">
            {{ $errors->first($id) }}
        </span>
    @endif
</label>