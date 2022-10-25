<x-app-layout>
    <div class="container py-8 grid grid-cols-5">
        <aside>
            <h1>Edicion del curso</h1>
            <ul class="text-sm text-gray-600">
                <li class="leading-7 mb-1 border-l-4 border-indigo-400 pl-2">
                    <a href="" class="font-bold text-lg mb-4">informacion del curso</a>
                </li>
                <li class="leading-7 mb-1 border-l-4 border-transparent pl-2">
                    <a href="">Lecciones</a>
                </li>
                <li class="leading-7 mb-1 border-l-4  border-transparent pl-2">
                    <a href="">Metas del curso</a>
                </li>
                <li class="leading-7 mb-1 border-l-4  border-transparent pl-2">
                    <a href="">Estudiantes</a>
                </li>
            </ul>
        </aside>
        
        <div class="col-span-4 card"> 
            <div class="card-body text-gray-600 ">
                <h1 class="text-2xl font-bold">Informacion del curso</h1>
                <hr class="mt-2 nb-6">
                {!! Form::model($course, ['route' => ['instructor.courses.update',$course], 'method' => 'put','files' => true]) !!}
                @include('instructor.courses.partials.form')
             
                <div class="flex justify-end">
                    {!! Form::submit('Actualizar informacion', ['class' => 'btn btn-primary']) !!}
                </div>


                {!! Form::close() !!}
            </div>
        </div>

    </div>

        <x-slot name="js">
            <script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>
            <script src="js/instructor/courses/"></script>            
            <script>
                          document.getElementById("title").addEventListener('keyup', slugChange);

function slugChange(){
    
    title = document.getElementById("title").value;
    document.getElementById("slug").value = slug(title);

}

function slug (str) {
    var $slug = '';
    var trimmed = str.trim(str);
    $slug = trimmed.replace(/[^a-z0-9-]/gi, '-').
    replace(/-+/g, '-').
    replace(/^-|-$/g, '');
    return $slug.toLowerCase();
}



             ClassicEditor
                .create( document.querySelector( '#description' ), {
                    toolbar: [ 'heading', '|', 'bold', 'italic', 'link', 'blockQuote' ],
                    heading: {
                        options: [
                            { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                            { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                            { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' }
                        ]
                    }
                } )
                .catch( error => {
                    console.log( error );
                } );

                //Cambiar imagen
            document.getElementById("file").addEventListener('change', cambiarImagen);

            function cambiarImagen(event){
                var file = event.target.files[0];

                var reader = new FileReader();
                reader.onload = (event) => {
                    document.getElementById("picture").setAttribute('src', event.target.result); 
                };

                reader.readAsDataURL(file);
            }

          </script>
                    
         </x-slot>



</x-app-layout>