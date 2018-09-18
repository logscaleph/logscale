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
  <Layout>
    <h1 class="bg-red">
      Home Page
    </h1>
    <img
      src="@assets/images/logo.png"
      alt="Logo"
    >
  </Layout>
</template>

<style lang="postcss" scoped>
h1 {
  @apply text-purple flex;
}
</style>