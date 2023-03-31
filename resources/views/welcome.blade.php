<x-frontend-layout>
<x-frontend.hero/>
<x-frontend.about/>
<x-frontend.skills :skills="$skills" />
<x-frontend.portfolio :skills="$skills" :projects="$projects" />
<x-frontend.services />
<x-frontend.contact />

</x-frontend-layout>
