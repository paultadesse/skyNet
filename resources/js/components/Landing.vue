<template>
	<div>
		  <!-- {{-- admin view --}} -->
            <div v-if="user.length !== 0" class="flex bg-gray-800 font-poppins">
                  <div>
                    <side-bar></side-bar>
                  </div>
                  <div class="w-full">
                    <admin-nav-bar></admin-nav-bar>
                    <router-view></router-view>
                  </div>      
            </div>

        <!-- {{-- user view --}} -->
        <div v-else class="flex flex-col h-screen justify-between bg-gray-900">
            <div>
                <nav-bar></nav-bar>
            </div>
            <div>
                <!-- {{-- banner that's located on the left of the screen -middle- --}} -->
                <register-banner></register-banner>
                <!-- {{-- router view  --}} -->
                <router-view class="mb-auto bg-gray-900 h-full"></router-view>
            </div>
            <div class=" bg-gray-900 ">
                <footer-bar></footer-bar>
            </div>
        </div>
	</div>
</template>

<script>

import { mapState } from "vuex";

export default {

  name: 'Landing',

  data () {
    return {

    }
  },

  computed:{
  	...mapState('User',['user'])
  },
}
</script>

<style lang="css" scoped>
</style>