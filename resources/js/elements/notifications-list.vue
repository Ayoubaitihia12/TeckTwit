<template>
    <Popover class="relative">
      
      <PopoverButton class="inline-flex items-center gap-x-1 text-sm/6 font-semibold text-gray-900">

        <div class="bg-red-500 flex items-center justify-center absolute -top-1 -right-0.5 w-4 h-4 rounded-full">
          <span class="text-xs">4</span>
        </div>
        <!-- <span>Solutions</span>
        <ChevronDownIcon class="h-5 w-5" aria-hidden="true" /> -->
        <span class="sr-only">View notifications</span>
        <BellIcon class="h-6 w-6" aria-hidden="true" />
      </PopoverButton>
  
      <transition enter-active-class="transition ease-out duration-200" enter-from-class="opacity-0 translate-y-1" enter-to-class="opacity-100 translate-y-0" leave-active-class="transition ease-in duration-150" leave-from-class="opacity-100 translate-y-0" leave-to-class="opacity-0 translate-y-1">
        <PopoverPanel class="absolute right-0 z-10 mt-5 flex w-screen max-w-max px-4">
          <div class="w-screen max-w-md flex-auto overflow-hidden rounded-3xl bg-white text-sm/6 shadow-lg ring-1 ring-gray-900/5">
            <div class="p-4">
              <div v-for="item in solutions" :key="item.name" class="group relative flex gap-x-6 rounded-lg p-4 hover:bg-gray-50">
                <div class="mt-1 flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                  <component :is="item.icon" class="h-6 w-6 text-gray-600 group-hover:text-indigo-600" aria-hidden="true" />
                </div>
                <div>
                  <a :href="item.href" class="font-semibold text-gray-900">
                    {{ item.name }}
                    <span class="absolute inset-0" />
                  </a>
                  <p class="mt-1 text-gray-600">{{ item.description }}</p>
                </div>
              </div>
            </div>
            <div class="grid grid-cols-2 divide-x divide-gray-900/5 bg-gray-50">
              <a v-for="item in callsToAction" :key="item.name" :href="item.href" class="flex items-center justify-center gap-x-2.5 p-3 font-semibold text-gray-900 hover:bg-gray-100">
                <component :is="item.icon" class="h-5 w-5 flex-none text-gray-400" aria-hidden="true" />
                {{ item.name }}
              </a>
            </div>
          </div>
        </PopoverPanel>
      </transition>
    </Popover>
  </template>
  
  <script setup>

  import { Popover, PopoverButton, PopoverPanel } from '@headlessui/vue'
  import { ChevronDownIcon, PhoneIcon, PlayCircleIcon } from '@heroicons/vue/20/solid'
  import {
    ArrowPathIcon,
    ChartPieIcon,
    CursorArrowRaysIcon,
    FingerPrintIcon,
    SquaresPlusIcon,
    BellIcon
  } from '@heroicons/vue/24/outline'
  
  const solutions = [
    { name: 'Analytics', description: 'Get a better understanding of your traffic', href: '#', icon: ChartPieIcon },
    { name: 'Engagement', description: 'Speak directly to your customers', href: '#', icon: CursorArrowRaysIcon },
    { name: 'Security', description: "Your customers' data will be safe and secure", href: '#', icon: FingerPrintIcon },
    { name: 'Integrations', description: 'Connect with third-party tools', href: '#', icon: SquaresPlusIcon },
    { name: 'Automations', description: 'Build strategic funnels that will convert', href: '#', icon: ArrowPathIcon },
  ]
  const callsToAction = [
    { name: 'Watch demo', href: '#', icon: PlayCircleIcon },
    { name: 'Contact sales', href: '#', icon: PhoneIcon },
  ]
  </script>