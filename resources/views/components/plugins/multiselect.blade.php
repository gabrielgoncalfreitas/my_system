<div class="col-md-6 mt-5">
    <div class="bg-light rounded-top p-3">
        <div class="row align-items-center">
            <div class="col-auto" id="{{ $plugin_multiselect_id }}" plugin-multiselect-options-amount="0">
            </div>
        </div>
    </div>

    <select class="form-select plugin-multiselect" onchange="pluginMultiselect(this, '{{ $plugin_multiselect_id }}')">
        <option selected>Open this select menu</option>
        <option value="One">One</option>
        <option value="Two">Two</option>
        <option value="Three">Three</option>
    </select>
</div>
