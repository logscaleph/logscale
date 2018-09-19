<template>
  <Layout>
    <h1 class="font-black flex items-center"><i class="icon-home text-2xl mr-2"></i> Dashboard</h1>
  </Layout>
</template>

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

<style>
</style>