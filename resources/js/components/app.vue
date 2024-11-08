<template>
    <div class="flex min-h-full flex-col">
      <header class="shrink-0 border-b border-gray-200 bg-white">
        <div class="mx-auto flex h-16 max-w-7xl items-center justify-between px-4 sm:px-6 lg:px-8">
          <img class="h-8 w-auto" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company" />
          <div class="flex items-center gap-x-8">
            <notifications_list class="mt-2" />
            <a href="#" class="-m-1.5 p-1.5">
              <span class="sr-only">Your profile</span>
              <img class="h-8 w-8 rounded-full bg-gray-800" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />
            </a>
            <!-- <profile_dropdown/> -->
          </div>
          
        </div>
      </header>
  
      <div class="mx-auto bg-gray-50 flex border-r border-white w-full max-w-7xl items-start gap-x-8 px-6 py-6 sm:px-6 lg:px-8">
        <aside class="sticky top-8 hidden w-44 shrink-0 lg:block">
          <!-- Left column area -->

            <nav class="flex border flex-1 rounded-lg bg-white shadow flex-col">
                <ul role="list" class="flex flex-1 flex-col gap-y-7">  
                    <li>
                    <ul role="list" class="-mx-2 mt-2 px-2 space-y-1">
                        <li v-for="team in teams" :key="team.name">
                        <router-link :to="team.href" :class="[team.current ? 'text-blue-500' : 'text-gray-700 hover:text-blue-500', 'group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold']">
                            <span :class="[team.current ? 'border-indigo-600 text-blue-500' : 'text-gray-400 group-hover:border-indigo-600 group-hover:text-blue-500', 'flex h-6 w-6 shrink-0 items-center justify-center rounded-lg border bg-white text-[0.625rem] font-medium']">{{ team.initial }}</span>
                            <span class="truncate">{{ team.name }}</span>
                        </router-link>
                        </li>
                    </ul>
                    </li>
                </ul>
            </nav>
        </aside>
  
        <main class="flex-1">
            <router-view/>
        </main>
  
        <aside class="sticky top-8 hidden w-80 shrink-0 xl:block">
          <!-- Right column area -->
            <profileCard/>
        </aside>
      </div>
    </div>
  </template>
  
<script setup>

  import { BellIcon } from '@heroicons/vue/24/outline'

    import profileCard from '../elements/profileCard.vue'
    import notifications_list from '../elements/notifications-list.vue'
    import profile_dropdown from '../elements/profile-dropdown.vue'

    const teams = [
        { id: 1, name: 'Home', href: '#', initial: 'H', current: false },
        { id: 2, name: 'Messages', href: '#', initial: 'T', current: false },
        { id: 3, name: 'Profile', href: '/profile', initial: 'W', current: false },
        { id: 3, name: 'Saved', href: '#', initial: 'W', current: false },
    ]
</script>