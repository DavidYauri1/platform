<x-app-layout>
    <section class="bg-cover" style="background-image: url({{ asset('img/home/student-849821_1920.jpg')}})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full-width md:w-3/4 lg:w-1/2">
                <h1 class="text-white font-bold text-4xl">
                    Lorem ipsum dolor sit amet consecunde nos rerum vel dolore at.
                </h1>
                <p class="text-white text-lg mb-4">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum, incidunt neque ab at dicta unde, nihil dolorem itaque provident 
                    atque ullam accusamus tenetur porro suscipit? Necessitatibus aliquid consequuntur ea fuga.
                </p>

                <!-- This is an example component -->
                @livewire('search')

            </div>
        </div>        
    </section>

    @livewire('course-index')

</x-app-layout>