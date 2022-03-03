<template>
	<div class="icon-wrapper" >
		<svg class="" :width="width" :height="height">
			<use v-bind="{'xlink:href':'/all-svg.svg#'+name}" />
		</svg>
	</div>
</template>

<script>
export default {

  // name: 'BaseIcon',

  props: {
  	name: String,
    width: {
      type: [String, Number], // String, Number, Boolean, Function, Object, Array
      default: 24
    },
    height: {
      type: [String, Number], // String, Number, Boolean, Function, Object, Array
      default: 24
    },
  },

  data () {
    return {

    }
  }
}
</script>

<style lang="css" scoped>
</style>