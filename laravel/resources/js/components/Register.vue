<template>
	<div class="flex justify-center pt-10 font-ubuntu">
		<div class="flex flex-col-reverse xl:flex-row xl:divide-x xl:divide-opacity-30 xl:divide-GreenLizard xl:space-x-10 justify-evenly items-center border border-opacity-50 border-GreenLizard  p-10  rounded-lg  ">
			<div class="pt-10 xl:pt-0 text-GreenLizard space-y-7">
				<h1 class="text-3xl uppercase font-bold tracking-widest text-center  max-w-md text-transparent bg-clip-text bg-gradient-to-r from-GreenLizard to-GreenSheen ">Register and get the most out of Us !</h1>
				<div class="flex items-center space-x-5 justify-center">
					<hr class="opacity-20 w-4/12">
					<svg xmlns="http://www.w3.org/2000/svg" class="h-9 w-9 opacity-80" fill="none" viewBox="0 0 24 24" stroke="currentColor">
					  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
					</svg>
				<hr class="opacity-20 w-4/12">
				</div>
				<div><p class="text-xs opacity-60 uppercase tracking-widest">Why you choose us ?</p></div>
				<div class="ml-5 flex items-center space-x-2">
					<svg
		              xmlns="http://www.w3.org/2000/svg"
		              class="h-6 w-6 dark:text-blue-100 text-GreenSheen"
		              fill="none"
		              viewBox="0 0 24 24"
		              stroke="currentColor"
		            >
		              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
		            </svg>
					<p class="text-transparent tracking-widest text-sm uppercase bg-clip-text bg-gradient-to-r from-GreenLizard to-GreenSheen">24/7 Customer Support</p></div>
				<div class="ml-5 flex items-center space-x-2">
					<svg
		              xmlns="http://www.w3.org/2000/svg"
		              class="h-6 w-6 dark:text-blue-100 text-GreenSheen"
		              fill="none"
		              viewBox="0 0 24 24"
		              stroke="currentColor"
		            >
		              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7" />
		            </svg>
				 	<p class="text-transparent tracking-widest text-sm uppercase bg-clip-text bg-gradient-to-r from-GreenLizard to-GreenSheen">Packages for Every Budget</p></div>
				<div class="ml-5 flex items-center space-x-2">
					<svg
		              xmlns="http://www.w3.org/2000/svg"
		              class="h-6 w-6 dark:text-blue-100 text-GreenSheen"
		              fill="none"
		              viewBox="0 0 24 24"
		              stroke="currentColor"
		            >
		            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
		            </svg>
					<p class="text-transparent tracking-widest text-sm uppercase bg-clip-text bg-gradient-to-r from-GreenLizard to-GreenSheen">Free Setup Fee</p></div>
				<div class="ml-5 flex items-center space-x-2">
					<svg
		              xmlns="http://www.w3.org/2000/svg"
		              class="flex-none h-6 w-6 dark:text-blue-100 text-GreenSheen"
		              fill="none"
		              viewBox="0 0 24 24"
		              stroke="currentColor"
		            >
		              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z" />
		              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z" />
		            </svg>
					<p class="text-transparent tracking-widest text-sm uppercase bg-clip-text bg-gradient-to-r from-GreenLizard to-GreenSheen">Unlimited Internet</p></div>
			</div>
			<form @submit.prevent="createRegistiration" class="mb-0 space-y-7 xl:px-20" >
					<div class="flex items-center">
						<div>
							<BaseInput 
							lable="Name" 
							v-model="register.name" 
							type="text" 
							v-on="$listeners"
							@blur="$v.register.name.$touch()"/>

							<template v-if="$v.register.name.$error">
								<div class="flex items-center space-x-1">
								  		<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
											  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
											</svg>								
											<div>
												<p class="text-red-500 text-sm" v-if="!$v.register.name.required">name is required</p>
											</div>
						  			</div>
								
							</template>
						</div>
						<div>
							<div v-if="!$v.register.name.$invalid" class="text-white mt-4 ml-1">
							<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-GreenLizard" viewBox="0 0 20 20" fill="currentColor">
							  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
							</svg>
						</div>
						</div>
					</div>

					<div class="flex items-center">
						<div>
							<BaseInput 
							lable="Phone" 
							v-model="register.phone_number" 
							type="text" 
							v-on="$listeners"
							@blur="$v.register.phone_number.$touch()"/>
							<template v-if="$v.register.phone_number.$error">
								<div class="flex items-center space-x-1">
								  		<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
											  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
											</svg>
											
											<div>
												<p class="text-red-500 text-sm" v-if="!$v.register.phone_number.required">phone number is required</p>
											<p class="text-red-500 text-sm" v-if="!$v.register.phone_number.numeric">Alphabets are not allowed.</p>
											<p class="text-red-500 text-sm" v-if="!$v.register.phone_number.minLength">phone number must be 10 digits</p>
											<p class="text-red-500 text-sm" v-if="!$v.register.phone_number.maxLength">phone number must be 10 digits</p>
											</div>
						  			</div>
							</template>
						</div>
						<div v-if="!$v.register.phone_number.$invalid" class="text-white mt-4 ml-1">
							<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-GreenLizard" viewBox="0 0 20 20" fill="currentColor">
							  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
							</svg>
						</div>
					</div>

					<div class="flex items-center">  
						<div>
							<BaseInput 
							lable="Email address" 
							v-model="register.email" 
							type="email" 
							v-on="$listeners"
							@blur="$v.register.email.$touch()"/>
							<template v-if="$v.register.email.$error">
								<div class="flex items-center space-x-1">
								  		<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
											  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
											</svg>								
											<div>
												<p class="text-red-500 text-sm" v-if="!$v.register.email.required">email is required</p>
												<p class="text-red-500 text-sm" v-if="!$v.register.email.email">must be an email</p>
											</div>
						  			</div>
							</template>
						</div>
						<div>
							<div v-if="!$v.register.email.$invalid" class="text-white mt-4 ml-1">
								<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-GreenLizard" viewBox="0 0 20 20" fill="currentColor">
							  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
							</svg>
							</div>
						</div>
					</div>

					<div class="flex items-center">
					  <div class="flex-1">
					  	<label class="block opacity-80 tracking-widest uppercase text-xs font-medium text-GreenLizard">service type</label>
						  <multiselect v-model="register.service_type" 
								@blur="$v.register.service_type.$touch()"
								style="max-height: 7rem;"  
								class="w-full overflow-y-auto border cursor-pointer pl-2 py-2 text-white bg-gray-800 rounded border-opacity-50 border-GreenLizard focus:text-LightGreen focus:bg-gray-800 focus:border-LightGreen focus:outline-none"  track-by="name" label="name" placeholder=" select one" 
								:options="serviceTypes"
								@input="setSpeed"  
								:searchable="false" 
								:allow-empty="false">
						    <template  slot="singleLabel" slot-scope="{ option }"><span class="text-sm space-y-3 ml-2 uppercase" >{{ option.name }}</span></template>
						  </multiselect>
						  <template v-if="$v.register.service_type.$error">
						  	<div class="flex items-center space-x-1">
						  		<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
									  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
									</svg>
										<p class="text-red-500 text-sm" v-if="!$v.register.service_type.required">service type is required</p>
						  	</div>
							</template>
					  </div>
					  <div>
					  	<div v-if="!$v.register.service_type.$invalid" class="text-white mt-4 ml-1">
								<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-GreenLizard" viewBox="0 0 20 20" fill="currentColor">
							  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
							</svg>
							</div>
					  </div>
				  </div>


					<div class="flex items-center" v-if="!$v.register.service_type.$error && (register.service_type != '')">
						  <div class="flex-1">
						  		<label class="block opacity-80 tracking-widest uppercase text-xs font-medium text-GreenLizard">Speed</label>
								  <multiselect v-model="register.desired_speed" 
										@blur="$v.register.desired_speed.$touch()"
										style="max-height: 7rem;"  
										class="w-full overflow-y-auto border cursor-pointer pl-2 py-2 text-white bg-gray-800 rounded border-opacity-50 border-GreenLizard focus:text-LightGreen focus:bg-gray-800 focus:border-LightGreen focus:outline-none"  track-by="speed" label="speed" placeholder=" select one" 
										:options="speed"
										:searchable="false" 
										:allow-empty="false">
								    <template  slot="singleLabel" slot-scope="{ option }"><span class="text-sm space-y-3 ml-2 " >{{ option.speed }}</span></template>
								  </multiselect>
								  <template v-if="$v.register.desired_speed.$error">
								  	<div class="flex items-center space-x-1">
								  		<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
											  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
											</svg>
											<p class="text-red-500 text-sm" v-if="!$v.register.desired_speed.required">speed is required</p>
						  			</div>
												
									</template>
						  </div>
						  <div>
						  	<div v-if="!$v.register.desired_speed.$invalid" class="text-white mt-4 ml-1">
								<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-GreenLizard" viewBox="0 0 20 20" fill="currentColor">
							  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
							</svg>
							</div>
						  </div>
				  </div>

					<div class="flex items-center">
						  <div class="flex-1">
						  	<label class="block opacity-80 tracking-widest uppercase text-xs font-medium text-GreenLizard">site location</label>
							  <multiselect v-model="register.site_location" 
									@blur="$v.register.site_location.$touch()"
									style="max-height: 7rem;" 
									@input='setOtherEmptyOnLocationChanged' 
									class="w-full overflow-y-auto border cursor-pointer pl-2 py-2 text-white bg-gray-800 rounded border-opacity-50 border-GreenLizard focus:text-LightGreen focus:bg-gray-800 focus:border-LightGreen focus:outline-none"  track-by="name" label="name" placeholder="select one" 
									:options="siteLocations" 
									:searchable="false" 
									:allow-empty="false">
							    <template  slot="singleLabel" slot-scope="{ option }"><span class="text-sm space-y-3 ml-2 uppercase" >{{ option.name }}</span></template>
							  </multiselect>
							  <template v-if="$v.register.site_location.$error">
							  			<div class="flex items-center space-x-1">
								  		<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
											  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
											</svg>											
											<p class="text-red-500 text-sm" v-if="!$v.register.site_location.required">location is required</p>
						  			</div>
								</template>
						  </div>
						  <div>
						  	<div v-if="!$v.register.site_location.$invalid" class="text-white mt-4 ml-1">
								<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-GreenLizard" viewBox="0 0 20 20" fill="currentColor">
							  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
							</svg>
							</div>
						  </div>
				  </div>

					<div class="flex items-center" v-show="register.site_location.name === 'other'">
						<div class="flex-1">
							<BaseInput 
							lable="Other" 
							v-model="register.site_location_not_listed" 
							type="text"
							v-on="$listeners"
									@blur="$v.register.site_location_not_listed.$touch()"/>
							<template v-if="$v.register.site_location_not_listed.$error">
								<div class="flex items-center space-x-1">
								  		<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
											  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
											</svg>
											
										<p class="text-red-500 text-sm" v-if="!$v.register.site_location_not_listed.required">other is required</p>
						  			</div>
							</template>
						</div>
						<div>
							<div v-if="!$v.register.site_location_not_listed.$invalid" class="text-white mt-4 ml-1">
								<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-GreenLizard" viewBox="0 0 20 20" fill="currentColor">
							  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
							</svg>
							</div>
						</div>
					</div>

				<div class="border border-GreenLizard">
					<button type="submit" :disabled="$v.$anyError" class="block bg-GreenLizard w-full px-2 py-4 uppercase text-sm tracking-widest transform transition duration-300 hover:-translate-y-1 hover:bg-GreenLizard hover:text-DarkLiver hover:-translate-x-1">Register</button>
				</div>
			</form>
		</div>
	</div>
</template>

<script>
import Multiselect from 'vue-multiselect'

import RegistrationService from '../services/RegistrationService.js';
import { required, requiredIf, maxLength, minLength, numeric, email } from 'vuelidate/lib/validators';
import BaseInput from './BaseInput';
import BaseSelect from './BaseSelect';

export default {

  name: 'Register',

  components:{
  	BaseInput,
  	BaseSelect,
  	Multiselect
  },

  data () {
    return {
    	serviceTypes: [],
    	speed: [],
    	siteLocations: [],
    	other:{"id":"-1", "name": "other"},
    	register: this.createFreshRegisterObject(),
    }
  },

  created() {

  	RegistrationService.getServiceTypes()
  		.then(response => { 
  			this.serviceTypes = response.data.data
  		})
  		.catch(error => { 
  			console.log('Ther was an error: ' + error.response[0]);
  		 });

  		RegistrationService.getSiteLocations()
  		.then(response => { 
  			this.siteLocations = response.data.data;
  			this.siteLocations.push(this.other)
  		})
  		.catch(error => { 
  			console.log('Ther was an error: ' + error.response[0]);
  		 })
  },

  validations: {
  	register: {
  		name: { required },
			phone_number: { required, numeric, maxLength: maxLength(10), minLength: minLength(10) },
			email: { required, email },
			service_type: { required },
			desired_speed: { required },
			site_location: { required: requiredIf(
				function(register){ return this.register.site_location_not_listed === '' }) },
			site_location_not_listed: { required: requiredIf(
				function(register) { return this.register.site_location.name === 'other' }) },
			comment: { required }
  	}
  },

  methods: {
  	setSpeed(){
  		this.register.desired_speed = '';
  		this.speed = this.register.service_type.speeds;
  	},
  	setOtherEmptyOnLocationChanged(){
  		this.register.site_location_not_listed = '';
  	},
  	createRegistiration() {
  		this.$v.$touch();

  		if(!this.$v.$invalid) {
  			this.register.desired_speed = this.register.desired_speed ? this.register.desired_speed.speed : '';
	  		this.register.service_type = this.register.service_type ? this.register.service_type.name : '';
	  		this.register.site_location = this.register.site_location.name === 'other' ? '' : this.register.site_location.name;
  			RegistrationService.postRegistration(this.register)
	  		.then((response) => { 
	  			// console.log(response);
	  			this.$swal.fire({
				  position: 'center',
				  icon: 'success',
				  title: "<p style='color:#B5F44A' >" +'Your Registration has been successful we will contact you soon !' +"</p>",
				  showConfirmButton: false,
				  background: '#111',
				  timer: 3500
				})
	  			this.register = this.createFreshRegisterObject();
	  			this.$v.$reset()
	  		})
	  		.catch((error) => {
	  			this.register = this.createFreshRegisterObject();
	  			// console.log(error.response.data);
	  			this.$swal.fire({
				  position: 'center',
				  icon: 'error',
				  title: "<p style='color:red' >" +'Some error occured please try again.' +"</p>",
				  showConfirmButton: true,
				  confirmButtonColor: 'red',
				  background: '#111',
				})
	  		 })
  		}
  		
  	},
    createFreshRegisterObject() {
      return {
        name: "",
		phone_number: "",
		email: "",
		service_type: "",
		desired_speed: "",
		site_location: "",
		site_location_not_listed: "",
		comment: "test"
      };
    },
  }

}
</script>

<style lang="css" scoped>
</style>