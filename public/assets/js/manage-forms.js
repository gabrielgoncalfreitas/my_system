let section_is_empty_message = '<h5 class="text-center">Section is empty</h5>';

function addNewFieldsToSection(element) {

    let form_id = window.location.pathname.replace('/admin/forms/manage-forms/edit/', '');
    let get_field_url = element.getAttribute('get-field-url');
    let section_fields_next_id = parseInt($('#section').attr('section-fields-next-id'));
    let field_data = {
        'field_category': Array.from(element.value.split('|'))[0],
        'type_of_field': Array.from(element.value.split('|'))[1],
        'field_name': Array.from(element.value.split('|'))[2],
    };

    $.ajax({
        url: get_field_url,
        method: 'POST',
        headers: {
            'X-CSRF-Token': $('input[name=_token]').val()
        },
        data: {
            form_id: form_id,
            field_data: field_data,
            section_fields_next_id: section_fields_next_id

        },
        success: function (data) {
            if ($('#section').attr('section-fields-amount') == '0') {
                $('#section-body').html('');
            }

            $('#section-body').append(data);
            $('#field-id-on-section-' + section_fields_next_id).hide().fadeIn(100);

            section_fields_next_id = parseInt($('#section').attr('section-fields-next-id')) + 1;
            $('#section').attr('section-fields-next-id', section_fields_next_id);

            let section_fields_amount = parseInt($('#section').attr('section-fields-amount')) + 1;
            $('#section').attr('section-fields-amount', section_fields_amount);
        }
    });
}

function removeFieldOnSection(element_id) {
    let section_fields_amount = parseInt($('#section').attr('section-fields-amount')) - 1;
    $('#section').attr('section-fields-amount', section_fields_amount);

    if ($('#section').attr('section-fields-amount') == '0') {
        $('#section-body').html('');
        $('#section-body').append(section_is_empty_message).hide().fadeIn(100);
    }

    $('#' + element_id).remove();
}
