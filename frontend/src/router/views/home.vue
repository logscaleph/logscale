<script>
import appConfig from '@src/app.config'
import Layout from '@layouts/main'

export default {
  page: {
    title: 'Home',
    meta: [{ name: 'description', content: appConfig.description }],
  },
  components: { Layout },
}
</script>

<template>
  <div class="flex h-screen">
    <!-- Sidebar -->
    <div class="w-1/4 px-12">
      <div class="text-2xl font-bold text-center my-8 text-teal">
        logScale
      </div>
      <div class="flex py-4">
        <div class="rounded-full h-12 bg-grey w-12 pr-8"></div>
        <div class="flex-1 pl-4 flex flex-col justify-center text-grey-darker">
          <p class="font-bold">Trajano, Cesar</p>
          <p>Owner</p>
        </div>
      </div>
      <ul class="list-reset">
        <li class="py-4 flex justify-between">Dashboard<i>Icon</i></li>
        <li class="py-4 flex justify-between">Entries<i>Icon</i></li>
        <li class="py-4 flex justify-between">Summary<i>Icon</i></li>
        <li class="py-4 flex justify-between mb-4">Reports<i>Icon</i></li>

        <li class="mb-2">
          <a class="no-underline text-white rounded py-4 text-center bg-blue block" href="#">Log Entry</a>
        </li>
        <li>
          <a class="no-underline text-white rounded py-4 text-center bg-red block" href="#">Logout</a>
        </li>
      </ul>
    </div>
    <!-- Content -->
    <div class="flex-1 bg-grey-lighter">
      <!-- Navbar -->
      <nav class="flex p-8 bg-white items-center justify-between">
        <input class="text-xl" type="text" placeholder="Search Entry">
        <div>
          <a class="no-underline text-grey-dark" href="#"><i class="mx-2">Icon</i></a>
          <a class="no-underline text-grey-dark" href="#"><i class="mx-2">Icon</i></a>
        </div>
      </nav>
      <div>
        
      </div>
    </div>
  </div>
 <!--  <Layout>
    <h1>
      Home Page
    </h1>
    <img
      src="@assets/images/logo.png"
      alt="Logo"
    >
  </Layout> -->
</template>