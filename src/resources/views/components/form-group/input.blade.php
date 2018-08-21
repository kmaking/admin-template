<div class="form-group row{{ $is_error ? ' has-danger' : '' }}">
    <label for="name" class="col-md-3 col-form-label text-right">{{ $label }}</label>
    <div class="col-md-9">
        <input id="{{ $name }}" type="{{ $type ?? "text" }}" class="form-control{{ $is_error ? ' form-control-danger' : '' }}" name="{{ $name }}" value="{{ $value ?? "" }}">

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