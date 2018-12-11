<div class="form-group row{{ $is_error ? ' has-danger' : '' }}">
    <label for="name" class="col-md-3 col-form-label text-right">{{ $label }}</label>
    <div class="col-md-9">

        @foreach($choice as $check_value => $check_label)
      
            <div class="custom-control custom-radio mb-5">
                <input type="radio" class="custom-control-input" id="{{ $check_value }}" value="{{ $check_value }}" name="{{ $name }}" {{ ($check_value == $value ?? "")? 'checked': '' }}{{ set_attribute($attribute ?? []) }}>
                <label class="custom-control-label" for="{{ $check_value }}">{{ $check_label }}</label>
            </div>      

        @endforeach

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