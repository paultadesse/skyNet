<template>
    <div :class="lightMode ? 'bg-black' : 'dark'">
        <div
            class=" 
                relative
                flex flex-col
                justify-center
                items-center
                pb-20
                dark:bg-gray-900
            "
        >
            <div
                class="absolute rounded-full opacity-5 h-96 w-96 bg-GreenLizard"
            ></div>
            <div
                class="absolute rounded-full opacity-5 h-80 w-80 bg-GreenLizard"
            ></div>
            <div
                class="absolute rounded-full opacity-5 h-64 w-64 bg-GreenLizard"
            ></div>
            <div
                class="absolute rounded-full opacity-5 h-48 w-48 bg-GreenLizard"
            ></div>

            <div class="text-center">
                <h1
                    class="
                        text-3xl
                        xl:text-7xl
                        pt-20
                        md:pt-36 
                        font-medium font-ubuntu
                        text-transparent bg-clip-text bg-gradient-to-r from-GreenLizard to-GreenSheen
                        
                    "
                >
                    Dependable, Fast Internet Connection.
                </h1>
            </div>
            <div
                class="
                    max-w-sm
                    md:max-w-xl
                    text-sm
                    md:text-base
                    text-center
                    pt-7
                    text-white
                    dark:text-blue-200
                    font-ubuntu
                "
            >
                <p class="text-sm md:text-lg uppercase tracking-wider">
                    With a local maintenance and support staff that you can rely
                    on !
                </p>
            </div>
            <div class="pt-7">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-10 w-10 text-LightGreen"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M13 10V3L4 14h7v7l9-11h-7z"
                    />
                </svg>
            </div>
            <div class="pt-7  text-LightGreen dark:text-blue-400">
                <p
                    class="
                        text-xl
                        md:text-2xl
                        
                        font-bold
                        text-center
                        tracking-wider font-ubuntu
                    "
                >
                    High Speed Internet For Addis Ababa
                </p>
            </div>
            <div class="max-w-xl px-6 xl:px-0 font-light text-center pt-7 font-ubuntu text-justify text-GreenLizard tracking-wide">
                Skynet provides reliable, scaleable, convenient Internet. A
                great choice for enterprise and the public sector, businesses of
                all sizes, or just skyping with your grandkids or streaming
                videos and gaming, Skynet delivers.
            </div>
        </div>

        <!-- services -->
        <div class="font-ubuntu ">
            <div
                class="
                    flex flex-col
                    md:flex-row
                    space-y-7
                    md:space-y-0
                    justify-center
                    items-center
                    md:justify-evenly
                    flex-wrap
                "
            >
                <!-- Residential -->
                <div
                    class="

                        relative
                        flex flex-col
                        justify-center
                        items-center
                        text-center
                        max-w-sm
                        border-blue-900 
                        p-12 border-GreenLizard border 
                        shadow-xl
                        rounded-sm
                    "
                    @mouseover="showResidential = true"
                    @mouseout="showResidential = false"
                >
                    <!-- requirment card -->
                    <div
                        v-show="showResidential"
                        class="
                        bg-gradient-to-r to-myblue  from-myyellow
                            cursor-pointer
                            transition
                            transform
                            hover:-translate-y-10
                            ease-in-out
                            delay-200
                            motion-reduce:transition-none
                            motion-reduce:transform-none
                            w-full
                            absolute
                            flex flex-col
                            justify-center
                            items-center
                            text-center
                            bg-gradient-to-r from-LightGreen to-GreenLizard
                            text-white
                            border-blue-900
                            p-12
                            shadow-xl
                            rounded-md
                        "
                    >
                        <p>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-12 w-12  text-PurpleNavy"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"
                                />
                            </svg>
                        </p>

                        <p
                            class="
                                font-normal
                                pt-2
                                pb-2
                                text-DarkLiver
                            "
                        >
                            Requirements For
                            <span class="font-bold uppercase text-DarkLiver text-lg"
                                >Residential</span
                            >
                        </p>
                        <!-- <div
              class="w-5 border-b-2 border-blue-900 dark:border-blue-200"
            ></div> -->
                        <div class="space-y-2 text-sm text-DarkLiver">
                            <div class="flex items-center space-x-2">
                                <div>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="
                                            flex-none
                                            ml-4
                                            h-7
                                            w-7 
                                            text-PurpleNavy
                                        "
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"
                                        />
                                    </svg>
                                </div>
                                <div class="text-justify">
                                    Valid ID/License or Passport
                                </div>
                            </div>
                            <div class="flex items-center space-x-2">
                                <div>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="
                                            flex-none
                                            ml-4
                                            h-7
                                            w-7
                                            dark:text-blue-100
                                            text-PurpleNavy
                                        "
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"
                                        />
                                    </svg>
                                </div>
                                <div class="text-justify">
                                    Submit Request with specific bandwidth speed
                                </div>
                            </div>
                            <div class="flex items-center space-x-2">
                                <div>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="
                                            flex-none
                                            ml-4
                                            h-7
                                            w-7
                                            
                                            text-PurpleNavy
                                        "
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"
                                        />
                                    </svg>
                                </div>
                                <div class="text-justify">
                                    Signing contract agreement
                                </div>
                            </div>
                            <div class="flex items-center space-x-2">
                                <div>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="
                                            flex-none
                                            ml-4
                                            h-7
                                            w-7
                                            
                                            text-PurpleNavy
                                        "
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"
                                        />
                                    </svg>
                                </div>
                                <div class="text-justify">
                                    An Advance deposit guarantee of 1,000 ETB is
                                    required to have the service, that will be
                                    returned back during service termination by
                                    the customer
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- requirment ends here -->
                    <p>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-12 w-12  text-LightGreen"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
                            />
                        </svg>
                    </p>

                    <p
                        class="
                            font-bold
                            text-xl
                            pt-3
                            pb-3
                            text-LightGreen 
                        "
                    >
                        Residential
                    </p>
                    <div
                        class="
                            w-1/2
                            border-b-2 border-GreenLizard
                            
                        "
                    ></div>

                    <p
                        class="
                            text-sm text-GreenLizard
                            pt-3
                            tracking-wide
                            leading-relaxed
                            text-justify font-light
                        "
                    >
                        We provide a dependable, fast Internet connection with a
                        local maintenance and support staff that you can rely
                        on. For Residential Customer.
                    </p>
                </div>

                <!-- commercial -->
                <div
                    class="
                        relative
                        flex flex-col
                        justify-center
                        items-center
                        text-center
                        max-w-sm
                        p-12 border-GreenLizard border 
                        shadow-xl
                        rounded-sm
                    "
                    @mouseover="showCommercial = true"
                    @mouseout="showCommercial = false"
                >
                    <!-- requirment card -->
                    <div
                        v-show="showCommercial"
                        class="
                            cursor-pointer
                            transition
                            transform
                            hover:-translate-y-10
                            ease-in-out
                            delay-200
                            motion-reduce:transition-none
                            motion-reduce:transform-none
                            w-full
                            absolute
                            flex flex-col
                            justify-center
                            items-center
                            text-center
                            bg-gradient-to-r from-LightGreen to-GreenLizard
                            text-white
                            border-blue-900
                            p-12
                            shadow-xl 
                            rounded-md
                        "
                    >
                        <p>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-12 w-12 text-PurpleNavy"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"
                                />
                            </svg>
                        </p>

                        <p
                            class="
                                font-normal
                                pt-2
                                pb-2
                                text-DarkLiver
                            "
                        >
                            Requirements For
                            <span class="font-bold uppercase text-DarkLiver text-lg"
                                >Commercial</span
                            >
                        </p>
                        <!-- <div
              class="w-5 border-b-2 border-blue-900 dark:border-blue-200"
            ></div> -->
                        <div class="space-y-2 text-sm text-DarkLiver">
                            <div class="flex items-center space-x-2">
                                <div>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="
                                            flex-none
                                            ml-4
                                            h-7
                                            w-7
                                            
                                            text-PurpleNavy
                                        "
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"
                                        />
                                    </svg>
                                </div>
                                <div class="text-justify">
                                    Valid Business License is required
                                </div>
                            </div>
                            <div class="flex items-center space-x-2">
                                <div>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="
                                            flex-none
                                            ml-4
                                            h-7
                                            w-7
                                            
                                            text-PurpleNavy
                                        "
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"
                                        />
                                    </svg>
                                </div>
                                <div class="text-justify">
                                    Submit Request with specific bandwidth speed
                                </div>
                            </div>
                            <div class="flex items-center space-x-2">
                                <div>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="
                                            flex-none
                                            ml-4
                                            h-7
                                            w-7
                                            
                                            text-PurpleNavy
                                        "
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"
                                        />
                                    </svg>
                                </div>
                                <div class="text-justify">
                                    Signing contract agreement
                                </div>
                            </div>
                            <div class="flex items-center space-x-2">
                                <div>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="
                                            flex-none
                                            ml-4
                                            h-7
                                            w-7
                                            
                                            text-PurpleNavy
                                        "
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"
                                        />
                                    </svg>
                                </div>
                                <div class="text-justify">
                                    An Advance deposit guarantee of 1,000 ETB is
                                    required to have the service, that will be
                                    returned back during service termination by
                                    the customer
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- requirment ends here -->

                    <p>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-12 w-12 text-LightGreen"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"
                            />
                        </svg>
                    </p>

                    <p
                        class="
                            font-bold
                            text-xl
                            pt-3
                            pb-3
                            text-LightGreen
                        "
                    >
                        Commercial
                    </p>
                    <div
                        class="
                            w-1/2
                            border-b-2 border-GreenLizard
                        "
                    ></div>

                    <p
                        class="
                            text-sm text-GreenLizard
                            pt-3
                            tracking-wide
                            leading-relaxed
                            text-justify font-light
                        "
                    >
                        We provide a site survey and guaranteed solutions with
                        same-day service turnaround and fast, local tech
                        support.
                    </p>
                </div>
                <div
                    class="
                        relative
                        flex flex-col
                        justify-center
                        items-center
                        text-center
                        max-w-sm
                        border-GreenLizard border 
                        p-12
                        shadow-xl
                        rounded-sm
                    "
                    @mouseover="showEnterprise = true"
                    @mouseout="showEnterprise = false"
                >
                    <!-- requirment card -->
                    <div
                        v-show="showEnterprise"
                        class="
                            cursor-pointer
                            transition
                            transform
                            hover:-translate-y-10
                            ease-in-out
                            delay-200
                            motion-reduce:transition-none
                            motion-reduce:transform-none
                            w-full
                            absolute
                            flex flex-col
                            justify-center
                            items-center
                            text-center
                            bg-gradient-to-r from-LightGreen to-GreenLizard
                            text-white
                            p-12
                            shadow-xl
                            rounded-md
                        "
                    >
                        <p>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-12 w-12 text-PurpleNavy"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"
                                />
                            </svg>
                        </p>

                        <p
                            class="
                                font-normal
                                pt-2
                                pb-2
                                text-DarkLiver
                            "
                        >
                            Requirements For
                            <span class="font-bold uppercase text-DarkLiver text-lg"
                                >Enterpries</span
                            >
                        </p>
                        <!-- <div
              class="w-5 border-b-2 border-blue-900 dark:border-blue-200"
            ></div> -->
                        <div class="space-y-2 text-sm text-DarkLiver">
                            <div class="flex items-center space-x-2">
                                <div>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="
                                            flex-none
                                            ml-4
                                            h-7
                                            w-7
                                            text-PurpleNavy
                                        "
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"
                                        />
                                    </svg>
                                </div>
                                <div class="text-justify">
                                    Valid Business License is required
                                </div>
                            </div>
                            <div class="flex items-center space-x-2">
                                <div>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="
                                            flex-none
                                            ml-4
                                            h-7
                                            w-7
                                            text-PurpleNavy
                                        "
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"
                                        />
                                    </svg>
                                </div>
                                <div class="text-justify">
                                    Submit Request with specific bandwidth speed
                                </div>
                            </div>
                            <div class="flex items-center space-x-2">
                                <div>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="
                                            flex-none
                                            ml-4
                                            h-7
                                            w-7
                                            text-PurpleNavy
                                        "
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"
                                        />
                                    </svg>
                                </div>
                                <div class="text-justify">
                                    Signing contract agreement
                                </div>
                            </div>
                            <div class="flex items-center space-x-2">
                                <div>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="
                                            flex-none
                                            ml-4
                                            h-7
                                            w-7
                                            text-PurpleNavy
                                        "
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"
                                        />
                                    </svg>
                                </div>
                                <div class="text-justify">
                                    An Advance deposit guarantee of 1,000 ETB is
                                    required to have the service, that will be
                                    returned back during service termination by
                                    the customer
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- requirment ends here -->

                    <p>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-12 w-12 text-LightGreen"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"
                            />
                        </svg>
                    </p>

                    <p
                        class="
                            font-bold
                            text-xl
                            pt-3
                            pb-3
                            text-LightGreen
                        "
                    >
                        Enterprise
                    </p>
                    <div
                        class="
                            w-1/2
                            border-b-2 border-GreenLizard
                        "
                    ></div>

                    <p
                        class="
                            text-sm text-GreenLizard
                            pt-3
                            tracking-wide
                            leading-relaxed
                            text-justify font-light
                        "
                    >
                        We provide redundancy solutions and advanced, microwave
                        fixed wireless techology for the fastest, lowest latency
                        signal available.
                    </p>
                </div>
            </div>
        </div>

        <!-- our clients -->

        <div class="py-20 md:py-32 font-ubuntu mx-auto w-5/6">
            <div
                class="
                    flex flex-col
                    md:flex-row
                    items-center
                    justify-between
                    bg-gradient-to-t from-GreenLizard to-LightGreen
                    p-10
                "
            >
                <div class="flex flex-col items-start max-w-xl space-y-7">
                    <p class="font-bold text-4xl text-gray-900">
                        Trusted by Ethiopia's best Real&nbsp;Estates
                    </p>

                    <p class="text-gray-600">
                        Lorem ipsum dolor sit amet consectetur, adipisicing
                        elit. At, nemo impedit consequuntur, saepe excepturi
                        quas blanditiis repudiandae tempore accusamus error
                        doloremque dicta, ut dolorem provident sapiente non
                        ipsam iure? Labore.
                    </p>

                    <button
                        class="
                            block
                            px-4
                            py-2
                            text-GreenLizard
                            rounded
                            bg-gray-900
                            tracking-wide
                        "
                    >
                        Contact Us
                    </button>
                </div>
                <div class="flex font-poppins justify-start pt-7 md:pt-0">
                    <div
                        class="
                            grid grid-cols-2
                            md:grid-cols-3
                            gap-1
                            md:text-center
                            uppercase
                            text-GreenLizard text-justify
                            md:font-semibold 
                        "
                    >
                        <div
                            class="
                                p-7
                                col-span-2
                                md:col-span-1
                                bg-gray-800
                                cursor-pointer
                                transition
                                transform
                                hover:scale-75
                                ease-in-out
                                delay-200
                                motion-reduce:transition-none
                                motion-reduce:transform-none
                            "
                        >
                            <div>
                                <p class="tracking-wider bg-clip-text bg-gradient-to-r from-LightGreen to-GreenLizard">Sunrise Apartments</p>
                            </div>
                        </div>
                        <div
                            class="
                                p-7
                                bg-gray-800
                                cursor-pointer
                                transition
                                transform
                                hover:scale-75
                                ease-in-out
                                delay-200
                                motion-reduce:transition-none
                                motion-reduce:transform-none
                            "
                        >
                            <div><p class="tracking-wider bg-clip-text bg-gradient-to-r from-LightGreen to-GreenLizard">Legacy</p></div>
                        </div>
                        <div
                            class="
                                p-7
                                bg-gray-800
                                cursor-pointer
                                transition
                                transform
                                hover:scale-75
                                ease-in-out
                                delay-200
                                motion-reduce:transition-none
                                motion-reduce:transform-none
                            "
                        >
                            <div><p class="tracking-wider bg-clip-text bg-gradient-to-r from-LightGreen to-GreenLizard">Noah</p></div>
                        </div>
                        <div
                            class="
                                p-7
                                col-span-2
                                md:col-span-1
                                bg-gray-800
                                cursor-pointer
                                transition
                                transform
                                hover:scale-75
                                ease-in-out
                                delay-200
                                motion-reduce:transition-none
                                motion-reduce:transform-none
                            "
                        >
                            <div>
                                <p class="tracking-wider bg-clip-text bg-gradient-to-r from-LightGreen to-GreenLizard">one Apartments</p>
                            </div>
                        </div>
                        <div
                            class="
                                p-7
                                bg-gray-800
                                cursor-pointer
                                transition
                                transform
                                hover:scale-75
                                ease-in-out
                                delay-200
                                motion-reduce:transition-none
                                motion-reduce:transform-none
                            "
                        >
                            <div><p class="tracking-wider bg-clip-text bg-gradient-to-r from-LightGreen to-GreenLizard">Zegba</p></div>
                        </div>
                        <div
                            class="
                                p-7
                                bg-gray-800
                                cursor-pointer
                                transition
                                transform
                                hover:scale-75
                                ease-in-out
                                delay-200
                                motion-reduce:transition-none
                                motion-reduce:transform-none
                            "
                        >
                            <div><p class="tracking-wider bg-clip-text bg-gradient-to-r from-LightGreen to-GreenLizard">Riverside</p></div>
                        </div>
                        <div
                            class="
                                p-7
                                bg-gray-800
                                cursor-pointer
                                transition
                                transform
                                hover:scale-75
                                ease-in-out
                                delay-200
                                motion-reduce:transition-none
                                motion-reduce:transform-none
                            "
                        >
                            <div><p class="tracking-wider bg-clip-text bg-gradient-to-r from-LightGreen to-GreenLizard">nova</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- clients ection ends here -->

        <!-- planning -->
        <div class="flex flex-col justify-center items-center ">
            <div
                class="w-10 border-b-2 border-GreenLizard"
            ></div>
            <div class="pt-10 font-ubuntu text-GreenLizard">
                <!-- <button class="bg-blue-900 px-12 py-2 rounded-lg ring-2 ring-offset-1 uppercase">
          services
        </button> -->
        <h2 class="text-xl text-4xl px-4 xl:px-0 text-center pt-4 font-medium font-ubuntu text-transparent xl:text-7xl bg-clip-text bg-gradient-to-r from-GreenLizard to-GreenSheen     
                    ">We've got the right plan for you ! 
                </h2>
            </div>
            <div
                class="
                    w-32
                    border-b-2 border-GreenLizard
                    pt-10
                "
            ></div>
        </div>
        <Plans />
    </div>
</template>

<script>
import Navbar from "../components/Navbar.vue";
import Plans from "./Plans.vue";
export default {
    components: {
        Navbar,
        Plans,
    },
    data() {
        return {
            showResidential: false,
            showCommercial: false,
            showEnterprise: false,
            lightMode: true,
        };
    },
};
</script>

<style></style>
