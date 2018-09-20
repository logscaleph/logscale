<template>
  <div class="w-20 border-l border-grey-lighter absolute pin-t pin-r h-screen">
    <div class="flex flex-col text-center justify-between h-screen">
      <div class="flex flex-col">
        <a class="hover:text-blue-light" href="#">
          <i class="icon-save"></i>
        </a>
        <a class="hover:text-blue-light" href="#">
          <i class="icon-info"></i>
        </a>
        <a class="hover:text-blue-light" href="#">
          <i class="icon-calculator"></i>
        </a>
      </div>
      <div class="flex flex-col">
        <a class="hover:text-blue-light" href="#">
          <i class="icon-erase"></i>
        </a>
        <a class="hover:text-blue-light" href="#">
          <i class="icon-print"></i>
        </a>
        <a class="text-red-light hover:text-blue-light border-t border-grey-lighter" href="#">
          <i class="icon-power"></i>
        </a>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  
}
</script>

<style lang="postcss" scoped>
i {
  @apply text-2xl;
}

a {
  @apply flex items-center justify-center h-20;
}
</style>
