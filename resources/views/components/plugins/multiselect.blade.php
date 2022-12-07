<div class="bg-light rounded-top p-3">
    <div class="row align-items-center">
        <div class="col-auto" id="{{ $plugin_multiselect_id }}" plugin-multiselect-options-amount="0">
        </div>
    </div>
</div>

<div class="form-floating text-dark">
    <select type="text" class="form-select plugin-multiselect"
        onchange="pluginMultiselect(this, '{{ $plugin_multiselect_id }}')" id="floating{{ $plugin_multiselect_id }}"
        placeholder="{{ $placeholder }}" name="{{ $name }}">
        <option selected>-Select a option-</option>
        @foreach ($options as $option)
            <option value="{{ $option->description }}">{{ $option->description }}</option>
        @endforeach
    </select>
    <label for="floating{{ $plugin_multiselect_id }}">{{ $placeholder }}</label>
</div>
