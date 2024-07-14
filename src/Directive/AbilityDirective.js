import {usePage} from '@inertiajs/vue3'

export const ability_if = {
    beforeMount: (el, binding, vnode) => {
        if (!checkAbility(binding.value)) {
            el.classList.add('hidden');
            setTimeout(function (){
                el.remove();
            },1);
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
    if (!usePage().props.auth?.abilities)
        return false;
    if (Array.isArray(abilities)) {
        let result = true;
        for (const abilityKey in abilities) {
            let item = abilities[abilityKey];
            if (Array.isArray(item)) {
                let temp_result = false;
                for (const itemKey in item) {
                    temp_result = temp_result || usePage().props.auth.abilities.includes(item[itemKey]);
                }
                result = result && temp_result;
            } else {
                result = result && usePage().props.auth.abilities.includes(item);
            }
        }
        return result;
    } else {
        return usePage().props.auth.abilities.includes(abilities);
    }
}

