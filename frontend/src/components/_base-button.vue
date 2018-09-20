<template>
  <button
    :class="$style.button"
    v-on="$listeners"
  >
    <slot />
  </button>
</template>

<style lang="scss" module>
@import '@design';

.button {
  @extend %typography-small;

  padding: $size-button-padding;
  color: $color-button-text;
  cursor: pointer;
  background: $color-button-bg;
  border: none;
  @apply relative mt-8 px-12 py-4 uppercase tracking-wide rounded-full bg-white text-blue-light text-lg inline-block;
  
  &:disabled {
    cursor: not-allowed;
    background: $color-button-disabled-bg;
  }
}
</style>
