<div class="form-floating text-dark my-3">
    <input type="text" class="form-control mx-1" id="{{ $title }}-floating" name="{{ $title }}" value="{{ $old_title ?? '' }}"
        placeholder="{{ $title ?? '' }}" maxlength="{{ $maxlength ?? '' }}" {{ $required ? 'required' : '' }}>
    <label for="{{ $title }}-floating">{!! $label !!}</label>
</div>
