<template>
    <panel-item :field="field">
        <div slot="value" class="flex flex-row overflow-x-auto py-2">
            <img
                    v-for="img in field.value"
                    :src="img"
                    alt="image"
                    style="height: 8rem; width: auto;"
                    class="rounded shadow-md mr-2"
            >
        </div>
    </panel-item>
</template>

<script>
    export default {
        props: ['resource', 'resourceName', 'resourceId', 'field'],
    }
</script>
