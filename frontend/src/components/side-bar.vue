<template>
<div class="w-1/4 md:px-6 lg:px-8 xl:px-12 hidden md:block">
  <div class="text-2xl font-bold text-center my-8 text-teal">
    <img class="h-8" src="/logo.svg" alt="">
  </div>
  <div class="flex md:flex-col lg:flex-row py-4">
    <Avatar class="mx-auto" username="Trajano, Cesar" background-color="#dae1e7"/>
    <div class="flex-1 lg:pl-4 flex flex-col justify-center">
      <p class="font-bold">
        Trajano, Cesar
      </p>
      <p>Owner</p>
    </div>
  </div>
  <ul class="list-reset">
    <li v-for="item in menu" class="py-4">
      <router-link class="flex justify-between hover:text-blue-light" :to="item.route">
        {{ item.title }}<i :class="item.icon"></i>
      </router-link>
    </li>

    <li class="mt-4 mb-2">
      <a
        class="text-white rounded py-4 text-center bg-blue-gradient block"
        href="#"
      >
        Log Entry
      </a>
    </li>
    <li>
      <a
        class="text-white rounded py-4 text-center bg-red-gradient block"
        href="#"
      >
        Logout
      </a>
    </li>
  </ul>
</div>
</template>

<script>
import Avatar from 'vue-avatar'

export default {
  components: {
    Avatar
  },

  data () {
    return {
      menu: [
        { title: 'Dashboard', icon: 'icon-home', route: { name: 'home' } },
        { title: 'Entries', icon: 'icon-file', route: { name: 'entries' } },
        { title: 'Summary', icon: 'icon-note', route: { name: 'summary' } },
        { title: 'Reports', icon: 'icon-chart', route: { name: 'reports' } },
      ]
    }
  }
}
</script>

<style>
  .bg-blue-gradient {
    /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#2aa4e5+0,74cfff+100 */
    background: #2aa4e5; /* Old browsers */
    background: -moz-linear-gradient(left, #2aa4e5 0%, #74cfff 100%); /* FF3.6-15 */
    background: -webkit-linear-gradient(left, #2aa4e5 0%,#74cfff 100%); /* Chrome10-25,Safari5.1-6 */
    background: linear-gradient(to right, #2aa4e5 0%,#74cfff 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#2aa4e5', endColorstr='#74cfff',GradientType=1 ); /* IE6-9 */
  }

  .bg-red-gradient {
    /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#f75a5a+0,ff7c88+100 */
    background: #f75a5a; /* Old browsers */
    background: -moz-linear-gradient(45deg, #f75a5a 0%, #ff7c88 100%); /* FF3.6-15 */
    background: -webkit-linear-gradient(45deg, #f75a5a 0%,#ff7c88 100%); /* Chrome10-25,Safari5.1-6 */
    background: linear-gradient(45deg, #f75a5a 0%,#ff7c88 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f75a5a', endColorstr='#ff7c88',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
  }
</style>

