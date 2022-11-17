const types_of_fields = document.querySelector('#types-of-fields');
const offcanvas_body_section = document.querySelector('#offcanvas-body-section');

types_of_fields.addEventListener('change', function () {
    const type_of_field = types_of_fields.value;

    fetch(`/admin/forms/manage-forms/sections/text`, {
        method: 'GET',
        headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json',
            'url': `/admin/forms/manage-forms/sections/text`,
            "X-CSRF-Token": document.querySelector('input[name=_token]').value
        },
    })
        .then(response => response.json())
        .then(premise => {
            const new_field = document.createElement('div');
            new_field.innerHTML = premise;
            offcanvas_body_section.appendChild(new_field);
        });
});
