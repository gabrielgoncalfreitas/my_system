let section_is_empty_message = '<h5>Section is empty</h5>';

function addNewFieldsToSection(element) {

    let get_field_url = element.getAttribute('get-field-url');
    let section_fields_amount = parseInt($('#section').attr('section-fields-amount'));

    $.ajax({
        url: get_field_url,
        method: 'POST',
        headers: {
            'X-CSRF-Token': $('input[name=_token]').val()
        },
        data: {
            type_of_field: element.value,
            section_fields_amount: section_fields_amount

        },
        success: function (data) {
            if ($('#section').attr('section-fields-amount') == '0') {
                $('#section-body').html('');
            }

            $('#section-body').append(data);
            $('#field-id-on-section-' + section_fields_amount).hide().fadeIn(100);

            let sections_fields_amount = parseInt($('#section').attr('section-fields-amount')) + 1;
            $('#section').attr('section-fields-amount', sections_fields_amount);
        }
    });
}

function removeFieldOnSection(element_id) {
    let sections_fields_amount = parseInt($('#section').attr('section-fields-amount')) - 1;
    $('#section').attr('section-fields-amount', sections_fields_amount);

    if ($('#section').attr('section-fields-amount') == '0') {
        $('#section-body').append(section_is_empty_message).hide().fadeIn(100);
    }

    $('#' + element_id).remove();
}
