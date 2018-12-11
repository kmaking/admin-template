<div class="form-group row{{ $is_error ? ' has-danger' : '' }}">
    <label for="name" class="col-md-3 col-form-label text-right">{{ $label }}</label>
    <div class="col-md-9">
        {{-- <input  class="form-control{{ $is_error ? ' form-control-danger' : '' }}" name="{{ $name }}" value="{{ $value ?? "" }}"> --}}
        <select id="{{ $name }}" name="{{ $name }}" class="form-control" select2 style="width:100%;"{{ set_attribute($attribute ?? []) }}>
            @foreach ($options as $key => $value)
                <option value="{{ $key }}">{{ $value }}</option>
            @endforeach
        </select>

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