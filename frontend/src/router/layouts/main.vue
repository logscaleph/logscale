<template>
  <div class="flex h-full">
    <SideBar/>

    <div class="flex-1 bg-grey-lighter h-full">
      <NavBar/>
      <!-- Content -->
      <div class="mx-auto w-9/10 my-12">
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
