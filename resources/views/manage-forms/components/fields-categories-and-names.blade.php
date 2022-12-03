@foreach (json_decode($fields_categories_names, true) as $categories)
    @foreach (json_decode($categories, true) as $categories_key => $category)
        <optgroup label="{{ $categories_key }}">
            @foreach ($category as $field_key => $field)
                <option value="{{ $categories_key }}|{{ $field_key }}|{{ $field }}">{{ $field }}
                </option>
            @endforeach
        </optgroup>
    @endforeach
@endforeach
