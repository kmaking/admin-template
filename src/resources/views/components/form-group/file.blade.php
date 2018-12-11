<div class="form-group row{{ $is_error ? ' has-danger' : '' }}">
    <label for="name" class="col-md-3 col-form-label text-right">{{ $label }}</label>
    <div class="col-md-9">
        <div class="custom-file">
            <input id="{{ $name }}" type="file" class="custom-file-input{{ $is_error ? ' form-control-danger' : '' }}" name="{{ $name }}" value="{{ $value ?? "" }}"{{ set_attribute($attribute ?? []) }}>
            <label class="custom-file-label">Choose file</label>

            @if ($is_error)
                <small class="form-control-feedback">
                    {{ $error }} 
                </small>
            @endif

            @isset($feedback)
                <small class="form-text text-muted">{{ $feedback }}</small>
            @endisset
        </div>
    </div>
</div>