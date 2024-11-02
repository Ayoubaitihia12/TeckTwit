<template>
    <div class="flex min-h-full flex-col">
      <header class="shrink-0 border-b border-gray-200 bg-white">
        <div class="mx-auto flex h-16 max-w-7xl items-center justify-between px-4 sm:px-6 lg:px-8">
          <img class="h-8 w-auto" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company" />
          <div class="flex items-center gap-x-8">
            <button type="button" class="-m-2.5 p-2.5 text-gray-400 hover:text-gray-300">
              <span class="sr-only">View notifications</span>
              <!-- <BellIcon class="h-6 w-6" aria-hidden="true" /> -->
            </button>
            <a href="#" class="-m-1.5 p-1.5">
              <span class="sr-only">Your profile</span>
              <img class="h-8 w-8 rounded-full bg-gray-800" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />
            </a>
          </div>
        </div>
      </header>
  
      <div class="mx-auto flex border -400 w-full max-w-7xl items-start gap-x-8 px-2 py-6 sm:px-6 lg:px-4">
        <aside class="sticky border border-red-400 top-8 hidden w-44 shrink-0 lg:block">
          <!-- Left column area -->

            <nav class="flex flex-1 flex-col border">
                <ul role="list" class="flex flex-1 flex-col gap-y-7">
                    <li>
                    <ul role="list" class="-mx-2 space-y-1">
                        <li v-for="item in navigation" :key="item.name">
                        <a :href="item.href" :class="[item.current ? 'bg-gray-50 text-indigo-600' : 'text-gray-700 hover:bg-gray-50 hover:text-indigo-600', 'group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold']">
                            <component :is="item.icon" :class="[item.current ? 'text-indigo-600' : 'text-gray-400 group-hover:text-indigo-600', 'h-6 w-6 shrink-0']" aria-hidden="true" />
                            {{ item.name }}
                        </a>
                        </li>
                    </ul>
                    </li>
                    <li>
                    <ul role="list" class="-mx-2 mt-2 space-y-1">
                        <li v-for="team in teams" :key="team.name">
                        <a :href="team.href" :class="[team.current ? 'bg-gray-50 text-indigo-600' : 'text-gray-700 hover:bg-gray-50 hover:text-indigo-600', 'group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold']">
                            <span :class="[team.current ? 'border-indigo-600 text-indigo-600' : 'border-gray-200 text-gray-400 group-hover:border-indigo-600 group-hover:text-indigo-600', 'flex h-6 w-6 shrink-0 items-center justify-center rounded-lg border bg-white text-[0.625rem] font-medium']">{{ team.initial }}</span>
                            <span class="truncate">{{ team.name }}</span>
                        </a>
                        </li>
                    </ul>
                    </li>
                </ul>
            </nav>
        </aside>
  
        <main class="flex-1">
            <router-view/>
        </main>
  
        <aside class="sticky top-8 hidden w-96 shrink-0 xl:block">
          <!-- Right column area -->
            <profileCard/>
        </aside>
      </div>
    </div>
  </template>
  
<script setup>
//   import { BellIcon } from '@heroicons/vue/24/outline'

    import profileCard from '../elements/profileCard.vue'

    const teams = [
        { id: 1, name: 'Heroicons', href: '#', initial: 'H', current: false },
        { id: 2, name: 'Tailwind Labs', href: '#', initial: 'T', current: false },
        { id: 3, name: 'Workcation', href: '#', initial: 'W', current: false },
    ]
</script>