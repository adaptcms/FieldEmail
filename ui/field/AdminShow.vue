<template>
  <div>
    <a v-if="value" :href="`mailto:${value}`" target="_blank" rel="noopener" class="text-sm leading-5 text-blue-500">
      {{ value }}
    </a>
  </div>
</template>

<script>
export default {
  props: [
    'value',
    'field',
    'model',
    'package',
    'action'
  ]
}
</script>
