<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="title">
            <h3 style="color:blue;text-align:center;"><b>&nbsp;&nbsp;&nbsp;&nbsp;Ficha Academica</b></h3>
            </div>
                    <div class="card-body">
                        <div class="panel-body"> 
                            <h3><b>Informacion del Alumno</b></h3>
                            <br>
                            <label class="formulario__label">id Alumno:<span class="badge badge-info">{{$Ficha->id}}</span></label><br>
                            <label class="formulario__label">Nif del Alumno:<span class="badge badge-info">{{$Ficha->nif}}</span></label><br>
                            <label class="formulario__label">Nombre Alumno:<span class="badge badge-info">{{$Ficha->nombre}}</span></label><br>
                            <label class="formulario__label">Primer Apellido:<span class="badge badge-info">{{$Ficha->apellido1}}</span></label><br>
                            <label class="formulario__label">Segundo Apellido:<span class="badge badge-info">{{$Ficha->apellido2}}</span></label><br>
                            <br>
                            <label class="formulario__label">Curso Asignados al Almuno:</label><br>
                                @forelse($Ficha->cursos as $curso)
                                    <button type="button" class="btn btn-info">{{ $curso->nombre }}</button>
                                @empty
                                    <button type="button" class="btn btn-warning">No Tiene Cursos Asignados</button>
                                @endforelse
                        </div>
                    </div>

                    <div class="formulario__grupo formulario__btn-guardar text-center">
                            <a href="{{ route('dashboard') }}" class="btn formulario__btn2">Volver Atras</a>
                    </div>
                    <br>
            </div>
        </div>
    </div>
</x-app-layout>
