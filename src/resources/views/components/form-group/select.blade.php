<div class="form-group row{{ $is_error ? ' has-danger' : '' }}">
    <label for="name" class="col-md-3 col-form-label text-right">{{ $label }}</label>
    <div class="col-md-9">
        <select id="{{ $name }}" name="{{ $name }}" class="form-control bootstrap-select" selectpicker data-style="{{ $is_error ? ' btn-outline-danger' : ($style ?? "btn-outline-secondary") }}"{{ set_attribute($attribute ?? []) }}>
            @foreach ($options as $k => $v)
                @if (is_array($v))
                    <option value="{{ $k }}" {{ $v['attribute'] }}>{{ $v['value'] }}</option>
                @else
                    <option value="{{ $k }}">{{ $v }}</option>
                @endif
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