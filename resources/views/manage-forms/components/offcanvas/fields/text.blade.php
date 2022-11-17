<div class="card my-2" id="text-field">
    <div class="card-body bg-dark border-white">
        <div class="d-flex align-items-center justify-content-between">
            <h6 class="fw-light m-0">
                Field: Text
            </h6>

            <button type="button" class="btn btn-sm btn-outline-danger"
                onclick="document.querySelector('#text-field').remove()">
                <i class="bi bi-x"></i>
            </button>
        </div>

        <div class="form-floating text-dark mt-2 w-100">
            <input type="text" class="form-control" id="text-floating" name="" value=""
                placeholder="text" maxlength="">
            <label for="text-floating">Text</label>
        </div>
    </div>
</div>
