<div class="form-group row">
    <div class="col-md-9 offset-md-3">
        <button type="submit" class="btn btn-outline-primary">
            <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
            {{ $submit ?? "Submit" }}
        </button>
        <button type="reset" class="btn btn-outline-secondary">
            <i class="fa fa-eraser" aria-hidden="true"></i>
            {{ $reset ?? "Reset" }}
        </button>
    </div>
</div>