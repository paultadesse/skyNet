<template>
	<div>
		<label v-if="lable" class="block opacity-80 tracking-widest uppercase text-xs font-medium text-GreenLizard">{{ lable }}</label>
		<div class="mt-1">
			<input @input="updateValue" v-on="listeners" :value="value" v-bind="$attrs"  class="w-full text-white bg-gray-800 rounded border-opacity-50 border-GreenLizard focus:text-LightGreen focus:bg-gray-800 focus:border-LightGreen focus:outline-none">
		</div>
	</div>
</template>

<script>
export default {

  name: 'BaseInput',
  inheritAttrs: false,
  props: {
    lable: {
      type: String, // String, Number, Boolean, Function, Object, Array
      default: ''
    },
    value: [String, Number]
  },

  computed: {
    listeners() {
      return {
      	...this.$listeners,
      	input: this.updateValue
      }
    }
  },

  data () {
    return {

    }
  },

  methods: {
  	updateValue(event){
  		this.$emit('input', event.target.value);
  	}
  }
}
</script>

<style lang="css" scoped>
</style>