<template>
  <Layout>
    <h1 class="font-black flex items-center mb-8"><i class="icon-home text-2xl mr-2"></i> Dashboard</h1>

    <div class="flex">
      <div id="card-green" class="flex flex-col font-light leading-normal justify-between text-white rounded-lg p-8 h-48 w-1/3 mr-4">
        <div>
          <i class="text-sm icon-file"></i>
          <p class="text-sm">Total Entries</p>
          <h2 class="font-normal">1,334</h2>
        </div>
        <p class="text-sm">Last updated at 04/03/2018</p>
      </div>

      <div id="card-purple" class="flex flex-col font-light leading-normal justify-between text-white rounded-lg p-8 h-48 w-1/3 mx-4">
        <div>
          <i class="text-sm icon-file"></i>
          <p class="text-sm">Total Profit</p>
          <h2 class="font-normal">$ 34,000.00</h2>
        </div>
        <p class="text-sm">Increased by 10%</p>
      </div>

      <div id="card-red" class="flex flex-col font-light leading-normal justify-between text-white rounded-lg p-8 h-48 w-1/3 ml-4">
        <div>
          <i class="text-sm icon-file"></i>
          <p class="text-sm">Total Suppliers</p>
          <h2 class="font-normal">45</h2>
        </div>
        <p class="text-sm">Increased by 4%</p>
      </div>
    </div>

    <div class="bg-white mt-10 p-8 rounded-lg">
      <h2 class="font-extrabold mb-8">Recent Entries</h2>

      <table class="flex flex-col mb-12">
        <thead>
          <th class="flex justify-around text-left border-b">
            <td class="flex-1 py-4">ID</td>
            <td class="flex-1 py-4">Supplier</td>
            <td class="flex-1 py-4">Created</td>
            <td class="flex-1 py-4">Delivered</td>
            <td class="flex-1 py-4">Status</td>
          </th>
        </thead>
        <tbody>
          <tr class="flex justify-around border-b">
            <td class="flex-1 py-4">15324</td>
            <td class="flex-1 py-4">Ngo, Jacinto</td>
            <td class="flex-1 py-4">08/10/2018</td>
            <td class="flex-1 py-4">Somewhere</td>
            <td class="flex-1 py-4"><span class="uppercase bg-green text-white rounded py-1 px-4 text-xs font-light">Delivered</span></td>
          </tr>
          <tr class="flex justify-around border-b">
            <td class="flex-1 py-4">15324</td>
            <td class="flex-1 py-4">Ngo, Jacinto</td>
            <td class="flex-1 py-4">08/10/2018</td>
            <td class="flex-1 py-4">Somewhere</td>
            <td class="flex-1 py-4"><span class="uppercase bg-purple-light text-white rounded py-1 px-4 text-xs font-light">Pending</span></td>
          </tr>
          <tr class="flex justify-around border-b">
            <td class="flex-1 py-4">15324</td>
            <td class="flex-1 py-4">Ngo, Jacinto</td>
            <td class="flex-1 py-4">08/10/2018</td>
            <td class="flex-1 py-4">Somewhere</td>
            <td class="flex-1 py-4"><span class="uppercase bg-red-light text-white rounded py-1 px-4 text-xs font-light">Cancelled</span></td>
          </tr>
        </tbody>
      </table>
    </div>
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
#card-purple {
  background-image: url('/swirl_pattern.png'), linear-gradient(-225deg, #9361B4 0%, #CD81FF 100%);
  background-blend-mode: color-burn;
}

#card-green {
  background-image: url('/swirl_pattern.png'), linear-gradient(-225deg, #7EBE69 0%, #9EED83 100%);
  background-blend-mode: color-burn;
}

#card-red {
  background-image: url('/swirl_pattern.png'), linear-gradient(-225deg, #F75A5A 0%, #FF7C88 100%);
  background-blend-mode: color-burn;
}
</style>