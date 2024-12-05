<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Contacts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end m-2 p-2">
             
            </div>
            <div class="overflow-x-auto relative shadow-md sm:rounded-lg" bis_skin_checked="1">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="py-3 px-6 ">
                                Contact Name
                            </th>
                            <th scope="col" class="py-3 px-6 ">
                                Contact Email
                            </th>
                            <th scope="col" class="py-3 px-6 w-2/5">
                                Message
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @forelse ($Contacts as $contact)
                            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                <th scope="row"
                                    class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white ">
                                    {{ $contact->name }}
                                </th>
                                <th scope="row"
                                    class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white ">
                                    {{ $contact->email }}
                                </th>
                                <td class="py-4 px-6 dark:text-white w-2/5">
                                    {{ $contact->message }}
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td>
                                    <h2>No Contacts</h2>
                                </td>
                            </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
