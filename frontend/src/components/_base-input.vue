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
  },

  methods: {
    setActive() {
      let group = this.$refs['input-group']
      let span  = group.querySelector('span');
      span.classList.add('active')
    },

    setBlur() {
      let group = this.$refs['input-group']
      let span  = group.querySelector('span');

      if ( !this.value.length ) {
        span.classList.remove('active')        
      }
    }
  }
}
</script>

<template>
  <div class="group" ref="input-group">
    <input
      @focus="setActive"
      @blur="setBlur"
      :type="type"
      :value="value"
      v-on="listeners"
    >    
    <span class="label">{{ this.name }}</span>
  </div>
</template>

<style lang="scss">
.group {
  position: relative;
  margin-bottom: 20px;

  .label {
    position: absolute;
    bottom: 15px;
    font-size: 20px;
    left: 0;
    transition: all .1s ease;
    text-transform: capitalize;
  }

  .active {
    bottom: 39px;
    font-size: 11px;
  }

  input {
    position: relative;
    width: 100%;
    font-size: 20px;
    height: 45px;
    line-height: 45px;
    background: none;
    border-bottom: 2px solid #ffffff;
    outline: none;
    z-index: 1;
    color: #ffffff;
  }
}
</style>
