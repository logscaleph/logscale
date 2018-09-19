<template>
  <div class="flex h-screen">
    <SideBar/>

    <div class="flex-1 bg-grey-lighter">
      <NavBar/>
      <!-- Content -->
      <div class="container mx-auto w-5/6 mt-12">
        <slot/>
      </div>
    </div>
  </div>
</template>

<script>
import NavBar from '@components/nav-bar'
import SideBar from '@components/side-bar'

export default {
  components: {
    NavBar,
    SideBar,
  },
}
</script>
