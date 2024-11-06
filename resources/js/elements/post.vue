<template>
    <div class="flex items-start mt-4 border bg-white rounded-lg p-4 shadow space-x-4">
      <!-- <div class="flex-shrink-0">
        <img class="inline-block h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />
      </div> -->
        <span class="relative inline-block">
            <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
            <span class="absolute bottom-0 right-0 block h-2.5 w-2.5 rounded-full bg-green-400 ring-2 ring-white"></span>
        </span>
      <div class="min-w-0 flex-1">
        
        <div class="flex items-start pb-4 justify-between">
            <div>
                <span class="flex items-end gap-x-2">
                    <h2 class="font-bold">Elon Mask</h2>
                    <h5 class="text-sm pb-[2px]">@elonmask</h5>
                </span>
                <span class="text-xs text-black/50">Few minutes ago</span>
            </div>
            <div>
                <Menu as="div" class="relative ml-auto">
                    <MenuButton class="-m-2.5 block p-2.5">
                        <span class="sr-only">Open options</span>
                        <EllipsisHorizontalIcon class="h-5 w-5 text-black" aria-hidden="true" />
                    </MenuButton>
                    <transition enter-active-class="transition ease-out duration-100" enter-from-class="transform opacity-0 scale-95" enter-to-class="transform opacity-100 scale-100" leave-active-class="transition ease-in duration-75" leave-from-class="transform opacity-100 scale-100" leave-to-class="transform opacity-0 scale-95">
                        <MenuItems class="absolute right-0 z-10 mt-0.5 w-32 origin-top-right rounded-md bg-white py-2 shadow-lg ring-1 ring-gray-900/5 focus:outline-none">
                        <MenuItem v-slot="{ active }">
                            <a href="#" :class="[active ? 'bg-gray-50 outline-none' : '', 'block px-3 py-1 text-sm/6 text-gray-900']"
                            >View<span class="sr-only"></span></a
                            >
                        </MenuItem>
                        <MenuItem v-slot="{ active }">
                            <a href="#" :class="[active ? 'bg-gray-50 outline-none' : '', 'block px-3 py-1 text-sm/6 text-gray-900']"
                            >Edit<span class="sr-only"></span></a
                            >
                        </MenuItem>
                        </MenuItems>
                    </transition>
                </Menu>
            </div>
        </div>

        <div>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
            Temporibus sit molestiae voluptatibus?</p>

            <img
            class="w-full mt-4 max-h-[300px] object-cover rounded-xl overflow-hidden"
            src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
        </div>

        <div class="grid col-span-3 mt-4 gap-x-4">
            <div>
                <heart/>
            </div>
        </div>
      </div>
    </div>
  </template>
  
  <script setup>
  import { ref } from 'vue'

  import { Menu, MenuButton, MenuItem, MenuItems } from '@headlessui/vue'

  import {
    FaceFrownIcon,
    FaceSmileIcon,
    FireIcon,
    HandThumbUpIcon,
    HeartIcon,
    PaperClipIcon,
    XMarkIcon,
  } from '@heroicons/vue/20/solid'
  import { Listbox, ListboxButton, ListboxLabel, ListboxOption, ListboxOptions } from '@headlessui/vue'
  
  const moods = [
    { name: 'Excited', value: 'excited', icon: FireIcon, iconColor: 'text-white', bgColor: 'bg-red-500' },
    { name: 'Loved', value: 'loved', icon: HeartIcon, iconColor: 'text-white', bgColor: 'bg-pink-400' },
    { name: 'Happy', value: 'happy', icon: FaceSmileIcon, iconColor: 'text-white', bgColor: 'bg-green-400' },
    { name: 'Sad', value: 'sad', icon: FaceFrownIcon, iconColor: 'text-white', bgColor: 'bg-yellow-400' },
    { name: 'Thumbsy', value: 'thumbsy', icon: HandThumbUpIcon, iconColor: 'text-white', bgColor: 'bg-blue-500' },
    { name: 'I feel nothing', value: null, icon: XMarkIcon, iconColor: 'text-gray-400', bgColor: 'bg-transparent' },
  ]
  
  const selected = ref(moods[5])
  </script>