<x-filament-panels::page>
    <form wire:submit.prevent="updateContacts"
        class="bg-gradient-to-r from-purple-800 to-blue-600 p-8 rounded-lg shadow-lg max-w-md mx-auto">
        <h1 class="text-3xl text-white mb-6 text-center">Update Contacts</h1>

        <div class="mb-4">
            <label for="email" class="block text-gray-300">Email</label>
            <input type="email" wire:model.defer="email" id="email"
                class="border border-gray-600 rounded p-2 bg-white text-gray-800 placeholder-gray-500"
                placeholder="Enter your email" required />
        </div>

        <div class="mb-4">
            <label for="phone" class="block text-gray-300">Primary Phone</label>
            <input type="text" wire:model.defer="phone" id="phone"
                class="border border-gray-600 rounded p-2 bg-white text-gray-800 placeholder-gray-500"
                placeholder="Enter your phone number" required />
        </div>

        <div class="mb-4">
            <label for="address" class="block text-gray-300">Address</label>
            <input type="text" wire:model.defer="address" id="address"
                class="border border-gray-600 rounded p-2 bg-white text-gray-800 placeholder-gray-500"
                placeholder="Enter your address" required />
        </div>

        <div x-data="{ contacts: @entangle('contacts') }" class="mt-6">
            <h3 class="text-lg text-white">Secondary Contacts</h3>
            <template x-for="(contact, index) in contacts" :key="index">
                <div class="flex items-center mb-2">
                    <input type="text" x-model="contacts[index]" placeholder="Contact"
                        class="border border-gray-600 rounded p-2 bg-white text-gray-800 placeholder-gray-500" />
                    <button @click="contacts.splice(index, 1)"
                        class="ml-2 text-red-600 hover:text-red-400 transition">Remove</button>
                </div>
            </template>

            <button @click="contacts.push('')" type="button"
                class="mt-2 bg-red-600 text-white rounded p-2 hover:bg-red-500 transition">Add Contact</button>

            <div class="mt-4">
                <template x-for="contact in contacts" :key="contact">
                    <span class="inline-block bg-blue-600 rounded-full px-3 py-1 text-sm text-white mr-2"
                        x-text="contact"></span>
                </template>
            </div>
        </div>

        <button type="submit" class="mt-4 bg-yellow-500 text-white rounded p-2 hover:bg-yellow-400 transition">Save
            Contacts</button>
    </form>
</x-filament-panels::page>
