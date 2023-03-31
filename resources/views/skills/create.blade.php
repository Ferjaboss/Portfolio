<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            Store new Skill
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-md mx-auto sm:px-6 lg:px-8 ">
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form method="POST" action="{{ route('skills.store') }}" class="p-4" enctype="multipart/form-data">
                @csrf

                <!-- Name -->
                <div>
                    <x-input-label for="name" :value="__('Name')" />

                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                        :value="old('name')" autofocus />
                </div>

                <!-- Image -->
                <div class="mt-4">
                    <x-input-label for="image" :value="__('Image')" />

                    <x-text-input id="image" class="block mt-1 w-full" type="file" name="image" />
                </div>

                <div class="flex items-center justify-end mt-4">

                    <x-primary-button class="ml-3">
                        Store
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
