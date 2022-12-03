<div class="col-md-6 my-4" id="{{ $field['type_of_field'] }}-{{ $id }}">
    <input type="text" name="json[fields][{{ $id }}][type]" value="{{ $field['type_of_field'] }}" hidden>
    <div class="d-flex align-items-center justify-content-between">
        <h6 class="fw-light m-0">
            Field: {{ $field['field_name'] }}
        </h6>

        <button type="button" class="btn btn-sm btn-outline-danger"
            onclick="removeFieldOnSection('{{ $field['type_of_field'] }}-{{ $id }}')">
            <i class="bi bi-x"></i>
        </button>
    </div>

    <div class="form-floating text-dark mt-2 w-100">
        <input type="text" class="form-control" id="{{ $field['type_of_field'] }}-{{ $id }}-title"
            name="json[fields][{{ $id }}][title]" value="{{ $title ?? '' }}" placeholder="Title"
            maxlength="">
        <label for="{{ $field['type_of_field'] }}-{{ $id }}">Title</label>
    </div>

    <div class="form-floating text-dark mt-2 w-100">
        <input type="text" class="form-control" id="{{ $field['type_of_field'] }}-{{ $id }}-placeholder"
            name="json[fields][{{ $id }}][placeholder]" value="{{ $placeholder ?? '' }}"
            placeholder="Placeholder" maxlength="">
        <label for="{{ $field['type_of_field'] }}-{{ $id }}">Placeholder</label>
    </div>

    <div class="row mt-2">
        <div class="col-auto">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch"
                    id="{{ $field['type_of_field'] }}-{{ $id }}-required"
                    name="json[fields][{{ $id }}][required]"
                    @if (isset($required) && $required == 'on') {{ 'checked' }} @endif>
                <label class="form-check-label"
                    for="{{ $field['type_of_field'] }}-{{ $id }}-required">Required</label>
            </div>
        </div>

        <div class="col-auto">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch"
                    id="{{ $field['type_of_field'] }}-{{ $id }}-fullcolumn"
                    name="json[fields][{{ $id }}][fullcolumn]"
                    @if (isset($fullcolumn) && $fullcolumn == 'on') {{ 'checked' }} @endif>
                <label class="form-check-label"
                    for="{{ $field['type_of_field'] }}-{{ $id }}-fullcolumn">Full
                    column</label>
            </div>
        </div>
    </div>
</div>
