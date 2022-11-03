<x-app-layout>
    <section class="bg-cover" style="background-image: url({{ asset('img/home/dos.png')}})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full-width md:w-3/4 lg:w-1/2">
                {{-- <h1 class="text-white font-bold text-4xl">
                    Lorem ipsum dolor sit amet consecunde nos rerum vel dolore at.
                </h1> --}}
                {{-- <p class="text-white text-lg mb-4">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum, incidunt neque ab at dicta unde, nihil dolorem itaque provident 
                    atque ullam accusamus tenetur porro suscipit? Necessitatibus aliquid consequuntur ea fuga.
                </p> --}}

                <!-- This is an example component -->
                 --}}

            </div>
        </div>        
    </section>


    <section class="mt-24">
        <h1 class="text-gray-600 text-center text-3xl mb-6">Contenido</h1>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{ asset('img/home/NH.jpeg')}}" alt="">
                </figure>
                <header class="mt-2"">
                    <h1 class="text-center text-xl text-gray-700" >Cursos Y Productos</h1>
                </header>
                <p class="text-sm text-gray-500" >
                    Lorem ipsum dolor sit amet consectetur  aperiam culpa, 
                    tenetur neque harum porrecusandae.
                </p>
            </article>

            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{ asset('img/home/NPH.png')}}" alt="">
                </figure>
                <header class="mt-2"">
                    <h1 class="text-center text-xl text-gray-700" >Cursos Y Productos</h1>
                </header>
                <p class="text-sm text-gray-500" >
                    Lorem ipsum dolor sit amet consectetur  aperiam culpa, 
                    tenetur neque harum porrecusandae.
                </p>
            </article>

            <article>
                <figure>
                    <img  class="rounded-xl h-36 w-full object-cover"  src="{{ asset('img/home/RPPWH.png')}}" alt="">
                </figure>
                <header class="mt-2"">
                    <h1 class="text-center text-xl text-gray-700" >Cursos Y Productos</h1>
                </header>
                <p class="text-sm text-gray-500" >
                    Lorem ipsum dolor sit amet consectetur  aperiam culpa, 
                    tenetur neque harum porrecusandae.
                </p>
            </article>

            <article>
                <figure>
                    <img  class="rounded-xl h-36 w-full object-cover" src="{{ asset('img/home/NH.jpeg')}}" alt="">
                </figure>
                <header class="mt-2"">
                    <h1 class="text-center text-xl text-gray-700" >Cursos Y Productos</h1>
                </header>
                <p class="text-sm text-gray-500" >
                    Lorem ipsum dolor sit amet consectetur  aperiam culpa, 
                    tenetur neque harum porrecusandae.
                </p>
            </article>
        </div>
    </section>

    <section class="mt-24 bg-gray-700 py-12">
        <h1 class="text-center text-white text-3xl">
            Lorem ipsum dolor sit amet consectetur
        </h1>
        <p class="text-center text-white">Dirigete al catalogo de cursos y filtralos por categoria </p>
        <div class="flex justify-center mt-4">
            <a  href="{{ route('courses.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Catalogo de cursos
            </a>
        </div>

    </section>

    <section class="my-24">
            <h1 class="text-center text-3xl text-gray-600">Ultimos Cursos</h1>
            <p class="text-center text-gray-500 text-sm mb-6">
                Lorem ipsum dolor sit amet consectetur
            </p>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
                @foreach ($courses as $course)
                <x-course-card :course="$course"/>
                @endforeach
            </div>

    </section>

</x-app-layout>

