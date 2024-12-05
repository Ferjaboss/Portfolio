<section id="contact" class="section bg-blue-50 dark:bg-slate-800">
    <div class="container mx-auto">
        <div class="flex flex-col items-center text-center">
            <h2 class="section-title">Contact Me</h2>
            <p class="subtitle">
                For inquiries or collaborations, feel free to contact me at any time. I am always available to discuss potential projects and can be reached through email or phone. Let's work together to bring your ideas to life!
            </p>
        </div>
        <div class="flex flex-col md:flex-row md:gap-x-8">
            <div class="flex flex-1 flex-col items-start space-y-8 mb-12 lg:mb-0 lg:pt-2">
                <div class="flex flex-col lg:flex-row gap-x-4">
                    <div class="text-accent rounded-sm w-14 h-14 flex items-start justify-center mt-2 mb-4 lg:mb-0 text-2xl">
                        <!-- Icon for contact details -->
                    </div>
                    <div>
                        <h4 class="font-body text-xl mb-1">Have a question?</h4>
                        <p class="text-paragraph mb-1">I am here to help you.</p>
                        <p class="text-accent font-normal">Email me at Bechir.ferjani@outlook.fr</p>
                    </div>
                </div>
                <div class="flex flex-col lg:flex-row gap-x-4">
                    <div class="text-accent rounded-sm w-14 h-14 flex items-start justify-center mt-2 mb-4 lg:mb-0 text-2xl">
                        <!-- Icon for location details -->
                    </div>
                    <div>
                        <h4 class="font-body text-xl mb-1">My current location</h4>
                        <p class="text-paragraph mb-1">Tunis, Tunisia.</p>
                        <p class="text-accent font-normal">Serving clients worldwide.</p>
                    </div>
                </div>
            </div>

            <form action="{{ route('contact.store') }}" method="POST" class="space-y-8 w-full max-w-md">
                @csrf
                <!-- Success message after form submission -->
                @if(session('success'))
                    <div class="p-4 text-sm text-light-tail-100 bg-light-tail-500 dark:bg-dark-navy-100 rounded-lg dark:text-dark-navy-500"
                         role="alert">
                        <div class="max-w-7xl mx-auto">{{ session('success') }}</div>
                    </div>
                @endif

                <div class="flex gap-8">
                    <div>
                        <input class="input" type="text" name="name" placeholder="Your Name" />
                        @error('name')
                            <span class="text-sm text-red-400">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <input class="input" type="email" name="email" placeholder="Your Email" />
                        @error('email')
                            <span class="text-sm text-red-400">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <textarea name="message" class="textarea" placeholder="Your message" spellcheck="false"></textarea>
                @error('message')
                    <span class="text-sm text-red-400">{{ $message }}</span>
                @enderror

                <button type="submit" class="btn btn-lg bg-accent hover:bg-light-secondary dark:bg-dark-secondary text-black dark:text-white hover:text-light-tail-500 dark:hover:text-dark-navy-100">
                    Send Message
                </button>
            </form>
        </div>
    </div>
</section>