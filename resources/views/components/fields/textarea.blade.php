<div class="form-floating text-dark my-3">
    <textarea type="text" class="form-control mx-1" id="{{ $title }}-floating" name="{{ $name }}"
        placeholder="{{ $title ?? '' }}" maxlength="{{ $maxlength ?? '' }}" {{ $required ? 'required' : '' }} style="height: 130px;">{!! $text ?? '' !!}</textarea>
    <label for="{{ $title }}-floating">{!! $label !!}</label>
</div>
