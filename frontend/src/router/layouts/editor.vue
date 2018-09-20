<template>
  <div class="relative">
    <!-- NavBar -->
    <div class="w-full absolute pin-t flex flex-col sm:flex-row sm:items-center justify-center sm:justify-start h-20 border-b border-grey-lighter">
      <h1 class="text-3xl sm:text-4xl text-grey-darkest pl-2 sm:pl-8">Trajano, Cesar Jose</h1>
      <span class="text-lg ml-2 sm:ml-4 font-bold text-grey">(25 August 2018)</span>
    </div>

    <!-- SideBar -->
    <SideBar/>

    <!-- Content -->
    <div class="mr-20 pt-20">
      <slot/>
    </div>
  </div>
</template>

<script>
import SideBar from '@components/editor-sidebar'

export default {
  components: {
    SideBar,
  }
}
</script>