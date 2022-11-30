<div class="col-md-6 my-4" id="{{ $type }}-{{ $id }}">
    <input type="text" name="json[fields][{{ $id }}][type]" value="{{ $type }}" hidden>
    <div class="d-flex align-items-center justify-content-between">
        <h6 class="fw-light m-0">
            Field: {{ $type }}
        </h6>

        <button type="button" class="btn btn-sm btn-outline-danger"
            onclick="removeFieldOnSection('{{ $type }}-{{ $id }}')">
            <i class="bi bi-x"></i>
        </button>
    </div>

    <div class="form-floating text-dark mt-2 w-100">
        <input type="text" class="form-control" id="{{ $type }}-{{ $id }}-title"
            name="json[fields][{{ $id }}][title]" value="{{ $title ?? '' }}" placeholder="Title"
            maxlength="">
        <label for="{{ $type }}-{{ $id }}">Title</label>
    </div>

    <div class="form-floating text-dark mt-2 w-100">
        <input type="text" class="form-control" id="{{ $type }}-{{ $id }}-placeholder"
            name="json[fields][{{ $id }}][placeholder]" value="{{ $placeholder ?? '' }}"
            placeholder="Placeholder" maxlength="">
        <label for="{{ $type }}-{{ $id }}">Placeholder</label>
    </div>

    <div class="row mt-2">
        <div class="col-auto">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch"
                    id="{{ $type }}-{{ $id }}-required"
                    name="json[fields][{{ $id }}][required]"
                    @if (isset($required) && $required == 'on') {{ 'checked' }} @endif>
                <label class="form-check-label"
                    for="{{ $type }}-{{ $id }}-required">Required</label>
            </div>
        </div>

        <div class="col-auto">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch"
                    id="{{ $type }}-{{ $id }}-fullcolumn"
                    name="json[fields][{{ $id }}][fullcolumn]"
                    @if (isset($fullcolumn) && $fullcolumn == 'on') {{ 'checked' }} @endif>
                <label class="form-check-label" for="{{ $type }}-{{ $id }}-fullcolumn">Full
                    column</label>
            </div>
        </div>
    </div>
</div>
