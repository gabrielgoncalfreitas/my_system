<div class="col-md-6 mb-1" id="{{ $field_id_on_section }}">
    <div class="d-flex align-items-center justify-content-between">
        <h6 class="fw-light m-0">
            Field: Textarea
        </h6>

        <button type="button" class="btn btn-sm btn-outline-danger"
            onclick="removeFieldOnSection('{{ $field_id_on_section }}')">
            <i class="bi bi-x"></i>
        </button>
    </div>

    <div class="form-floating text-dark mt-2 w-100">
        <textarea type="text" class="form-control" id="textarea-floating-{{ $field_id_on_section }}" name="" value="" placeholder="text"
            maxlength=""></textarea>
        <label for="textarea-floating-{{ $field_id_on_section }}">Textarea</label>
    </div>
</div>
