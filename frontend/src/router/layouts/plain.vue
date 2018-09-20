<template>
  <div class="plain-layout">
    <div class="flex row">
        <slot name="left"></slot>
        <slot name="right"></slot>
    </div>
  </div>   
</template>

<style lang="scss">
@import '@design';

.plain-layout {
  > .row {
    height: 100%;
  }
}

.left,
.right {
  align-items: center;
  text-align: center;
  padding: 5rem;
}
</style>
