<script>
import Layout from '@layouts/error'

export default {
  page: {
    title: '404',
    meta: [{ name: 'description', content: '404' }],
  },
  components: { Layout },
  props: {
    resource: {
      type: String,
      default: '',
    },
  },
}
</script>

<template>
  <Layout>
    <div class="flex justify-center items-center h-screen">
      <div class="pattern flex items-center bg-blue-lighter w-9/10 sm:w-4/5 md:w-3/4 lg:w-2/3 xl:w-1/2 rounded-xl" style="height: 30rem">
        <div class="flex flex-col lg:flex-row items-center lg:-mx-48 mx-auto">
          <img class="z-10" src="/images/dog-bryan.svg" alt="">
          <div class="self-end flex flex-col">
            <div class="relative">
              <h1 class="absolute font-extrabold opacity-50 leading-none text-w-md sm:text-w-xl lg:text-w-lg xl:text-w-xl">404</h1>
              <p class="text-5xl p-8 sm:p-0 font-extrabold text-grey-darkest relative">
                Ooops, I got lost! Can <br class="hidden md:inline"> you take me home?
              </p>
            </div>
            <div class="md:mt-8 lg:mt-0 mx-auto lg:mx-0">
              <router-link class="relative mt-8 px-12 py-4 uppercase tracking-wide rounded-full bg-blue-light text-white text-lg inline-block" :to="{ name: 'home' }">Go Home</router-link>
            </div>
          </div>
        </div>
      </div>
    </div>
  </Layout>
</template>

<style scoped>
h1 {
  bottom: -27px;
}

.pattern {
  background-image: url('/images/swirl_pattern.png');
  background-blend-mode: color-burn;
}
</style>
