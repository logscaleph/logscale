<template>
  <div class="bg-white mt-10 p-8 rounded-lg">
    <h2 class="font-extrabold mb-8">Recent Entries</h2>

    <table class="flex flex-col mb-12 overflow-x-auto">
      <thead>
        <th class="flex justify-around text-left border-b border-grey-lighter">
          <td class="flex-1 py-4">ID</td>
          <td class="flex-1 py-4">Supplier</td>
          <td class="flex-1 py-4">Created</td>
          <td class="flex-1 py-4">Delivered</td>
          <td class="flex-1 py-4">Status</td>
        </th>
      </thead>
      <tbody>
        <tr class="flex justify-around border-b border-grey-lighter">
          <td class="flex-1 py-4">15324</td>
          <td class="flex-1 py-4">Ngo, Jacinto</td>
          <td class="flex-1 py-4">08/10/2018</td>
          <td class="flex-1 py-4">Somewhere</td>
          <td class="flex-1 py-4"><span class="uppercase bg-green text-white rounded py-1 px-4 text-xs font-light">Delivered</span></td>
        </tr>
        <tr class="flex justify-around border-b border-grey-lighter">
          <td class="flex-1 py-4">15324</td>
          <td class="flex-1 py-4">Ngo, Jacinto</td>
          <td class="flex-1 py-4">08/10/2018</td>
          <td class="flex-1 py-4">Somewhere</td>
          <td class="flex-1 py-4"><span class="uppercase bg-purple-light text-white rounded py-1 px-4 text-xs font-light">Pending</span></td>
        </tr>
        <tr class="flex justify-around border-b border-grey-lighter">
          <td class="flex-1 py-4">15324</td>
          <td class="flex-1 py-4">Ngo, Jacinto</td>
          <td class="flex-1 py-4">08/10/2018</td>
          <td class="flex-1 py-4">Somewhere</td>
          <td class="flex-1 py-4"><span class="uppercase bg-red-light text-white rounded py-1 px-4 text-xs font-light">Cancelled</span></td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
export default {

}
</script>

