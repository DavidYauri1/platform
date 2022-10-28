<div>
    {{-- The Master doesn't talk, he acts. --}}
    @foreach ($section->lessons as $item )
        
        <article class="card mt-4">
            <div class="card-body">
                @if ($lesson->id  == $item->id)
                   <div>
                        <div class="flex items-center">
                            <label class="w-32">Nombre:</label>
                            <input class="form-input w-full" wire:model="lesson.name">
                        </div>

                        @error('lesson.name')
                            <span class="text-xs text-red-500">{{ $message }}</span>

                        @enderror

                        <div class="flex items-center mt-4">
                            <label for="" class="w-32">Plataforma</label>
                            <select wire:model="lesson.platform_id" name="" id="">
                                @foreach ($platforms as $platform )
                                    <option value="{{ $platform->id }}">{{ $platform->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="flex items-center mt-4  ">
                            <label class="w-32">ULR:</label>
                            <input wire:model="lesson.url" class="form-input w-full">
                        </div>

                        @error('lesson.url')
                        <span class="text-xs text-red-500">{{ $message }}</span>

                        @enderror

                        <div class="mt-4 flex justify-end">
                            <button class="btn btn-danger" wire:click="cancel   ">Cancelar</button>
                            <button class="btn btn-primary ml-2" wire:click="update">Actualizar</button>
                        </div>
                   </div>
                @else
                <header>
                    <h1><i class="far fa-play-circle text-blue-500 mr-1"></i>Lección:{{ $item->name }}</h1>
                </header>
                <div>
                    <hr class="my-2">
                    <p class="text-sm">Plataforma:{{ $item->platform->name }}</p>
                    <p class="text-sm"><a class="text-blue-600" href="{{ $item->url }}" target="_blank">{{ $item->url }}</a></p>
                
                    <div class="mt-2">
                        <button class="btn btn-primary text-sm" wire:click="edit({{ $item }})">Editar</button>
                        <button class="btn btn-danger text-sm">Elminar</button>
                    </div>

                </div>
                @endif


            </div>


        </article>

    @endforeach
    
    
    <div class="mt-4" x-data="{open:false}">
        <a x-show="!open" x-on:click="open = true"  class="flex items-center cursor-pointer">
            <i class="far fa-plus-square text-2xl text-red-500 mr-2"></i>
            Agregar nueva lección
        </a>    

        <article class="card"x-show="open"> 
            <div class="card-body ">
                <h1 class="text-xl font-blod mb-4">Agreagr nueva Seccion</h1>
            <div class="mb-4">
                <input wire:model="name" class="form-input w-full" placeholder="Escriba el nombre de la seccion">
                @error('name')
                    <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror

            </div>
            <div class="flex justify-end">
                <button class="btn btn-danger" x-on:click="open = false">Cancelar</button>
                <button class="btn btn-primary ml-2" wire:click="store">Agregar</button>
            </div>
            
            </div>  

        </article>
    </div>


</div>
