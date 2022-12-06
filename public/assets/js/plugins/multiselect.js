function pluginMultiselect(element, plugin_multiselect_id) {
    if (element.selectedIndex != 0) {
        let plugin_multiselect_option = document.querySelector('#' + plugin_multiselect_id);
        let plugin_multiselect_option_amount = parseInt(plugin_multiselect_option.getAttribute('plugin-multiselect-options-amount')) + 1;

        let btn_group = document.createElement('div');
        btn_group.className = 'btn-group m-1';
        btn_group.setAttribute('role', 'group');
        btn_group.setAttribute('aria-label', 'Basic example');
        btn_group.setAttribute('id', plugin_multiselect_id + '-' + plugin_multiselect_option_amount);

        let input = document.createElement('input');
        input.className = 'btn btn-outline-primary btn-sm';
        input.setAttribute('type', 'button');
        input.setAttribute('value', element.value);

        let button = document.createElement('button');
        button.className = 'btn btn-outline-primary btn-sm';
        button.setAttribute('type', 'button');
        button.setAttribute('value', element.value);
        button.setAttribute('onclick', "pluginRemoveMultiselect('" + plugin_multiselect_id + "-" + plugin_multiselect_option_amount + "')");

        let i = document.createElement('i');
        i.className = 'bi bi-x';

        button.appendChild(i);
        btn_group.appendChild(input);
        btn_group.appendChild(button);
        plugin_multiselect_option.appendChild(btn_group);

        plugin_multiselect_option.setAttribute('plugin-multiselect-options-amount', plugin_multiselect_option_amount);
    }
}

function pluginRemoveMultiselect(pluginRemoveMultiselectOption) {
    document.querySelector('#' + pluginRemoveMultiselectOption).remove();
}
