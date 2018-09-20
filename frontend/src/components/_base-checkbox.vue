<script>
export default {
  props: {
    type: {
      type: String,
      default: 'text',
    },
    value: {
      type: [String, Number],
      default: '',
    },
    name: {
      type: String,
      default: 'text',
    },
  },

  computed: {
    listeners() {
      return {
        ...this.$listeners,
        input: event => this.$emit('input', event.target.value),
      }
    }
  }
}
</script>

<template>
  <div class="group">
    <input type="checkbox" />    
  </div>
</template>

<style lang="scss">
// @import '@design';

.group {
  input[type='checkbox'] {
    text-align: left;
    height: 25px !important;
  }  
}

</style>
