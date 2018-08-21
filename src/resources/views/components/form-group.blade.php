<div class="form-group row{{ isset($is_error) ? ' has-danger' : '' }}">
    <label for="name" class="col-md-3 col-form-label text-right">{{ $label }}</label>
    <div class="col-md-9">
        {{ $slot }}
    </div>
</div>