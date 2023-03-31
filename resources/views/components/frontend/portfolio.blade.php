@props(['skills', 'projects'])
<section id="project" class="section bg-blue-50 dark:bg-slate-800 pt-24">
    <div class="container mx-auto">
        <div class="flex flex-col items-center text-center">
            <h2 class="flex justify-center text-black dark:text-white text-3xl lg:text-4xl font-medium lg:font-extrabold mb-3 pb-4">My Latest Work</h2>
            <p class="subtitle">
               Those are some of my projects .
            </p>
        </div>
    </div>
    <x-frontend.projects :skills="$skills" :projects="$projects" />
</section>
