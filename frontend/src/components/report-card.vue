<template>
  <div :class="color" class="flex flex-col font-light leading-normal justify-between text-white rounded-lg p-8 h-48 w-full sm:w-1/3 mr-1 lg:mr-4 mb-4 sm:mb-0">
    <div>
      <i class="text-sm icon-file"></i>
      <p class="text-sm">
        <slot name="title"></slot>
      </p>
      <h2 class="font-normal text-2xl sm:text-lg lg:text-2xl">
        <slot name="figure"></slot>
      </h2>
    </div>
    <p class="sm:text-xs text-sm md:text-sm">
      <slot name="description"></slot>
    </p>
  </div>
</template>

<script>
export default {
  props: ['color']
}
</script>

<style scoped>
.purple {
  background-image: url('/images/swirl_pattern.png'), linear-gradient(-225deg, #9361B4 0%, #CD81FF 100%);
  background-blend-mode: color-burn;
}

.green {
  background-image: url('/images/swirl_pattern.png'), linear-gradient(-225deg, #7EBE69 0%, #9EED83 100%);
  background-blend-mode: color-burn;
}

.red {
  background-image: url('/images/swirl_pattern.png'), linear-gradient(-225deg, #F75A5A 0%, #FF7C88 100%);
  background-blend-mode: color-burn;
}
</style>
