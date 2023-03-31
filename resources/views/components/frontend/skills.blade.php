@props(['skills'])
<section id="skills"class="bg-indigo-50 dark:bg-slate-700 pt-6 pb-16">
<h1 class="flex justify-center text-black dark:text-white text-3xl lg:text-4xl font-medium lg:font-extrabold mb-3 pb-4">My Skills</h1>
    <div class="container mx-auto">

        <div class="flex justify-center">
            @foreach ($skills as $skill)
                <div class="flex items-center justify-center">
                    <img src="{{ asset('/storage/' . $skill->image) }}" class="w-1/3 mx-4" alt="{{ $skill->name }}" />
                </div>
            @endforeach
        </div>
    </div>
</section>
