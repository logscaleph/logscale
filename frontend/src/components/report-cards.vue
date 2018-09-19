<template>
  <div class="flex flex-wrap sm:flex-no-wrap">
    <Card color="green" class="mr-1 lg:mr-4">
      <template slot="title">Total Entries</template>
      <template slot="figure">1,334</template>
      <template slot="description">Last updated at 04/03/2018</template>
    </Card>

    <Card color="purple" class="mr-1 lg:mr-4">
      <template slot="title">Total Profit</template>
      <template slot="figure">$ 34,000.00</template>
      <template slot="description">Increased by 10%</template>
    </Card>

    <Card color="red" class="mr-1 lg:mr-4">
      <template slot="title">Total Suppliers</template>
      <template slot="figure">45</template>
      <template slot="description">Increased by 4%</template>
    </Card>
  </div>
</template>

<script>
import Card from '@components/report-card'

export default {
  components: {
    Card,
  }
}
</script>
