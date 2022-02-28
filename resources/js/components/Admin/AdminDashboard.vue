<template>
  <div class="px-10 ">
    <!-- <HelloWorld msg="Welcome to Your Vue.js App"/> -->
    <div class="py-7 font-bold text-xl text-GreenLizard">Dashboard</div>
    <div class="flex space-x-4">
      <!-- card components -->
      <Cards/>
      <!-- recent activity component -->
      <RecentActivity/>
    </div>
    <!-- revenue -->
    <Revenue/>
  </div>
</template>

<script>
// @ is an alias to /src
import Cards from './dashboard-components/Cards.vue'
import RecentActivity from './dashboard-components/RecentActivity.vue'
import Revenue from './dashboard-components/Revenue.vue'

export default {
  name: 'AdminDashboard',
  components: {
    Cards,
    RecentActivity,
    Revenue,
  }
}
</script>
