<template>
	<div>
		<label v-if="lable" class="block opacity-80 tracking-widest uppercase text-xs font-medium text-GreenLizard">{{ lable }}</label>
		<div class="mt-1">
			<select @input="updateValue" v-on="listeners" :value="value" v-bind="$attrs" class="w-full text-white bg-gray-800 rounded border-GreenLizard focus:text-LightGreen focus:bg-gray-800 border-opacity-50 focus:border-LightGreen focus:outline-none">
        <option 
          v-for="option in options"
          :value="option"
          :selected="option === value"
          :key="option"> {{ option }}</option>
      </select>
		</div>
	</div>
</template>

<script>
export default {

  name: 'BaseSelect',
  inheritAttrs: false,
  props: {
    options: {
      type: Array,
      required: true
    },
    lable: {
      type: String, // String, Number, Boolean, Function, Object, Array
      default: ''
    },
    value: [String, Number]
  },

  data () {
    return {

    }
  },

  computed: {
    listeners() {
      return {
        ...this.$listeners,
        input: this.updateValue
      }
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