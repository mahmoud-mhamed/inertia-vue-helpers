import {Inertia} from "@inertiajs/inertia";

export const ability_if = {
    beforeMount: (el, binding, vnode) => {
        if (!checkAbility(binding.value)) {
            el.classList.add('hidden');
            (vnode.children)?.map((item) => item.el.remove());
        }
    },
};
export const ability_else = {
    beforeMount: (el, binding, vnode) => {
        if (checkAbility(binding.value)) {
            el.classList.add('hidden');
            (vnode.children)?.map((item) => item.el.remove());
        }
    },
};

function checkAbility(abilities) {
    if (Array.isArray(abilities)) {
        let result = true;
        for (const abilityKey in abilities) {
            let item = abilities[abilityKey];
            if (Array.isArray(item)) {
                let temp_result = false;
                for (const itemKey in item) {
                    temp_result = temp_result || Inertia.page.props.permissions.includes(item[itemKey]);
                }
                result = result && temp_result;
            } else {
                result = result && Inertia.page.props.permissions.includes(item);
            }
        }
        return result;
    } else {
        return Inertia.page.props.permissions.includes(abilities);
    }
}

