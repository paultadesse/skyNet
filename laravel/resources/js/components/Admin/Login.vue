<template>
	<div class="xl:border border-GreenLizard border-opacity-50 rounded max-w-lg p-10 mx-auto space-y-7 ">
		<div class="flex flex-col items-center justify-center uppercase ">
			<h1 class="text-GreenLizard py-4 text-4xl font-bold">Login</h1>
			<span class="text-GreenLizard text-xs">admin</span>
		</div>
		<form @submit.prevent="adminLogin" class="max-w-sm mx-auto space-y-7">
			<div class="space-y-2">
				<BaseInput lable="email" v-model="login.email" type="text" v-on="$listeners" @blur="$v.login.email.$touch()" />
				<template v-if="$v.login.email.$error">
					<div class="flex items-center space-x-1">
					  	<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
						</svg>								
						<div>
							<p class="text-red-500 text-sm" v-if="!$v.login.email.required">email is required</p>
							<p class="text-red-500 text-sm" v-if="!$v.login.email.email">must be an email</p>
						</div>
			  		</div>			
				</template>
			</div>

			<div class="space-y-2">
				<BaseInput lable="Password" v-model="login.password" type="password" v-on="$listeners" @blur="$v.login.password.$touch()" />
				<template v-if="$v.login.password.$error">
					<div class="flex items-center space-x-1">
					  	<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
								  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
						</svg>								
						<div>
							<p class="text-red-500 text-sm" v-if="!$v.login.password.required">password is required</p>
						</div>
			  		</div>			
				</template>
			</div>

			<div class="border border-GreenLizard">
					<button type="submit" :disabled="$v.$anyError" class="block bg-gradient-to-r from-GreenLizard to-LightGreen w-full px-2 py-4 uppercase text-sm tracking-widest transform transition duration-300 hover:-translate-y-1 hover:bg-GreenLizard hover:text-DarkLiver hover:-translate-x-1">Login</button>
			</div>	
		</form>
	</div>
</template>

<script>
/*jshint esversion: 6 */
	
import BaseInput from '../BaseInput';
import { required, email } from 'vuelidate/lib/validators';
import User from '../../services/User/UserService.js';

export default {

  name: 'Login',

  components:{
  	BaseInput
  },

  data () {
    return {
    	login: this.createFreshRLoginObject(),
    }
  },

  validations: {
  	login: {
  		email: {required, email},
  		password: { required }
  	}
  },

  methods: {
  	
  	createFreshRLoginObject() {
      return {
				email: "",
        password: "",	
      };
    },

    adminLogin(){
    	this.$v.$touch();
    	if (!this.$v.$invalid) {
    		this.$store.dispatch('User/login', this.login).then(() => {
    				this.$v.$reset();
    				this.login = this.createFreshRLoginObject();
    				this.$router.push({ name: "admin-dashboard" });
    		}).catch((error) => {
	    			this.$swal.fire({
					  position: 'center',
					  icon: 'error',
					  title: "<p style='color:red' >" + error.response.data.message +"</p>",
					  showConfirmButton: true,
					  confirmButtonColor: 'red',
					  background: '#111',
					})
    		})
  		}
    }
  }
}
</script>

<style lang="css" scoped>
</style>