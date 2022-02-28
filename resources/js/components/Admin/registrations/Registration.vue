<template>
	<div class="font-ubuntu">
		<div class="p-10 space-y-10">
			<div><h1 class="text-GreenLizard text-3xl uppercase tracking-widest">registrations</h1></div>
			<RegistrationList :registrations="registrations" />
		</div>
	</div>
</template>

<script>
import RegistrationList from './RegistrationList';
import RegistrationService from '../../../services/RegistrationService.js';

export default {

  name: 'Registration',

  components: {
  	RegistrationList
  },

  data () {
    return {
    	registrations: []
    }
  },

  created() {
  	RegistrationService.getRegistrations()
  		.then(response => { 
  			this.registrations = response.data.data
  		})
  		.catch(error => { 
  			console.log('Ther was an error: ' + error.response[0]);
  		 });
  }
}
</script>

<style lang="css" scoped>
</style>