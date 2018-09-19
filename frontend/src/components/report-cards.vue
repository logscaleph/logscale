<template>
  <div class="flex flex-wrap sm:flex-no-wrap">
    <div id="card-green" class="flex flex-col font-light leading-normal justify-between text-white rounded-lg p-8 h-48 w-full sm:w-1/3 mr-1 lg:mr-4 mb-4 sm:mb-0">
      <div>
        <i class="text-sm icon-file"></i>
        <p class="text-sm">Total Entries</p>
        <h2 class="font-normal text-2xl sm:text-lg lg:text-2xl">1,334</h2>
      </div>
      <p class="sm:text-xs text-sm md:text-sm">Last updated at 04/03/2018</p>
    </div>

    <div id="card-purple" class="flex flex-col font-light leading-normal justify-between text-white rounded-lg p-8 h-48 w-full sm:w-1/3 mx-1 lg:mx-4 mb-4 sm:mb-0">
      <div>
        <i class="text-sm icon-file"></i>
        <p class="text-sm">Total Profit</p>
        <h2 class="font-normal text-2xl sm:text-lg lg:text-2xl">$ 34,000.00</h2>
      </div>
      <p class="sm:text-xs text-sm md:text-sm">Increased by 10%</p>
    </div>

    <div id="card-red" class="flex flex-col font-light leading-normal justify-between text-white rounded-lg p-8 h-48 w-full sm:w-1/3 ml-1 lg:ml-4 mb-4 sm:mb-0">
      <div>
        <i class="text-sm icon-file"></i>
        <p class="text-sm">Total Suppliers</p>
        <h2 class="font-normal text-2xl sm:text-lg lg:text-2xl">45</h2>
      </div>
      <p class="sm:text-xs text-sm md:text-sm">Increased by 4%</p>
    </div>
  </div>
</template>

<script>
export default {
  
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
