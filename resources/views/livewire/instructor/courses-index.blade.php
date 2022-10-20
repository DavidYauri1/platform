<div class="container">
    <!-- component -->
    <x-table-responsive>
                <div class="px-6 py-8 flex">
                    <input wire:keydown="limpiar_page" wire:model="search" class="form-input flex-1 shadow-sm" placeholder="Ingrese el nombre de un curso">
                    <a class="btn btn-danger ml-2" href="{{ route('instructor.courses.create') }}">Crear Nuevo Curso</a>

                </div>
                @if ($courses->count())
                <table class="min-w-max w-full table-auto">
                    <thead>
                        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                            <th class="py-3 px-6 text-left">Nombre</th>
                            <th class="py-3 px-6 text-left">Matriculados</th>
                            <th class="py-3 px-6 text-center">Calificacion</th>
                            <th class="py-3 px-6 text-center">Status</th>
                            <th class="py-3 px-6 text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 text-sm font-light">
                        @foreach ($courses as $course ) 
                            
                        <tr class="border-b border-gray-200 bg-gray-50 hover:bg-gray-100">
                            <td class="py-3 px-6 text-left">
                                <div class="flex items-center">
                                    <div class="mr-2">
                                        @isset($course->image)
                                            <img class="w-6 h-6 rounded-full object-cover object-center" src="{{ Storage::url($course->image->url) }}"/>
                                            @else
                                            <img class="w-6 h-6 rounded-full object-cover object-center" src="https://images.pexels.com/photos/5905709/pexels-photo-5905709.jpeg?cs=srgb&dl=pexels-katerina-holmes-5905709.jpg&fm=jpg"/>
                                        @endisset
                                       
                                    </div>
                                    <span>{{ $course->title }}</span>
                                    
                                    <div class="">
                                        {{ $course->category->name }}
                                    </div>
                                </div>
                            </td>

                            <td class="py-3 px-6 text-left">
                                <div class="flex items-center">
                                    <div class="mr-2">
                                        <img class="w-6 h-6" src="https://img.icons8.com/color/48/000000/php.png"/>
                                    </div>
                                    <span class="font-medium">{{ $course->students->count() }}</span>
                                    <span class="font-medium">Alumnos matricualdos</span>
                                </div>
                            </td>
                                
                            <td class="py-3 px-6 text-center">
                                <div class="flex items-center justify-center">
                                    <img class="w-6 h-6 rounded-full border-gray-200 border transform hover:scale-125" src="https://randomuser.me/api/portraits/men/1.jpg"/>
                                    <img class="w-6 h-6 rounded-full border-gray-200 border -m-1 transform hover:scale-125" src="https://randomuser.me/api/portraits/women/2.jpg"/>
                                    <img class="w-6 h-6 rounded-full border-gray-200 border -m-1 transform hover:scale-125" src="https://randomuser.me/api/portraits/men/3.jpg"/>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-center">
                                @switch($course->status)
                                    @case(1)
                                    <span class="bg-red-200 text-red-600 py-1 px-3 rounded-full text-xs"> Borrador </span>
                                        @break
                                    @case(2)
                                    <span class="bg-yellow-200 text-yellow-600 py-1 px-3 rounded-full text-xs"> Revision </span>
                                        @break
                                    @case(3)
                                    <span class="bg-green-200 text-green-600 py-1 px-3 rounded-full text-xs"> Publicado </span>
                                        @break
                                
                                    @default
                                        
                                @endswitch
                               
                            </td>
                            <td class="py-3 px-6 text-center">
                                <div class="flex item-center justify-center">
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                    </div>
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <a href="{{route('instructor.courses.edit',$course) }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path  stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                    </svg></a>
                                        
                                    </div>
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>

                <div class="px-6 py-4">
                        {{ $courses->links() }}
                </div>

                @else

                    <div class="px-6 py-4">
                        No hay ningun registro coincidente
                    </div>


                @endif
              
     </x-table-responsive>
           
</div>
