<template>
  <Layout>
    <h1 class="font-black flex items-center mb-8"><i class="icon-home text-2xl mr-2"></i> Dashboard</h1>

    <ReportCards/>
    <RecentEntries/>
  </Layout>
</template>

<script>
import appConfig from '@src/app.config'
import Layout from '@layouts/main'
import ReportCards from '@components/report-cards'
import RecentEntries from '@components/recent-entries'

export default {
  page: {
    title: 'Home',
    meta: [{ name: 'description', content: appConfig.description }],
  },

  components: {
    Layout,
    ReportCards,
    RecentEntries,
  },
}
</script>