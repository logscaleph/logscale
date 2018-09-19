<template>
  <nav class="flex p-8 bg-white items-center justify-between">
    <div>
      <i class="text-grey icon-search mr-2"></i>
      <input
        class="text-xl text-grey-dark outline-none w-64"
        type="text"
        placeholder="Search Entry"
      >
    </div>
    <div>
      <a class="mx-2 hover:text-blue-light" href="#">
        <i class="icon-grid">
        </i>
      </a>
      <a class="mx-2 hover:text-blue-light" href="#">
        <i class="icon-list">
        </i>
      </a>
    </div>
  </nav>
</template>

<script>
import { authComputed } from '@state/helpers'

export default {
  data() {
    return {
    }
  },

  computed: {
    ...authComputed,
  },
}
</script>
