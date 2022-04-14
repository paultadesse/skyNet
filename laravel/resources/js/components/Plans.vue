<template lang="">
    <div class="pt-7">
        <div class="flex flex-col xl:flex-row justify-center p-4 font-poppins">
            <div class="shadow-md flex flex-col xl:flex-row">

                <!-- service types start here -->
                <div class="" v-for="(serviceType, index) in serviceTypes">


                    <!-- this style binding is used to controll the scroll bar -->
                    <div
                        :style="serviceType.speeds.length > 6 ? 'height: 50rem;' : ''"
                        :class ="index != serviceTypes.length - 1 ? 'border-r border-GreenLizard border-opacity-50' : ''"   
                        class=" 
                            flex flex-col
                            divide-y divide-black
                            overflow-y-auto 
                        "
                    >
                        <div
                            class="
                                flex sticky top-0 
                                bg-gray-800
                                items-center
                                justify-between
                                divide-x divide-black
                                text-GreenLizard
                                uppercase
                                
                            "
                        >
                            <div class="p-10 w-1/2 text-center text-transparent  bg-clip-text bg-gradient-to-r from-GreenLizard to-GreenSheen">
                                Bandwidth Speed
                            </div>

                            <div class="p-10 w-1/2 text-center text-transparent  bg-clip-text bg-gradient-to-r from-GreenLizard to-GreenSheen">
                                <span class="font-bold text-lg">{{ serviceType.name }}</span>
                                service charge
                            </div>
                        </div>
                        <div
                            class="
                                flex bg-gradient-to-r from-LightGreen  to-GreenLizard 
                                divide-x divide-black
                                justify-between
                                text-center
                                font-light
                            "

                            v-for="(speed, index) in getServiceTypeWithHighestSpeedCount" :key="index"
                        >
                            <div class="p-10 w-1/2">
                                {{ serviceType.speeds[index] != undefined ? serviceType.speeds[index].speed : '-'  }}
                            </div>

                            <div
                                class="
                                    flex 
                                    pt-10
                                    pb-10
                                    justify-around
                                    items-center
                                    w-1/2
                                    text-lg
                                "
                            >
                                <div class="leading-none" v-if="serviceType.speeds[index] != undefined">
                                    {{ serviceType.speeds[index].birr  }}
                                    <span class="text-xs font-bold align-middle"> ETB </span>
                                </div>
                                <div v-else> - </div>
                            </div>
                        </div>                                          
                    </div>
                </div>
            

            </div>
        </div>
    </div>
</template>
<script>
import { mapState } from 'vuex';

export default {

    name: 'Plans',

    data() {
        return {}
    }, 

    created() {
        this.$store.dispatch('ServiceType/fetchServiceTypes');
    },

    computed: {
        ...mapState('ServiceType', ['serviceTypes']),

        getServiceTypeWithHighestSpeedCount() {
            let speed_counts = [];

            for(var i = 0; i < this.serviceTypes.length; i++){
                speed_counts.push(this.serviceTypes[i].speeds_count);
            }

            return Math.max.apply(null, speed_counts);
        }
    },

};
</script>


