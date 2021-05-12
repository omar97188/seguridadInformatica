<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <h1  style="color:black;text-align:center;">Lista de Alumnos</h1>
                <!-- &nbsp;&nbsp;&nbsp;&nbsp;<a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Nuevo Alumno</a> -->
                <br><br>
                <div  class="card">
                    <div class="card-body">
                        <table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>NIF</th>
                                    <th>NOMBRE</th>
                                    <th>APELLIDO 1</th>
                                    <th>APELLIDO     2</th>
                                    <th>Ficha Academica</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($Alumno as $al)
                                    <tr>
                                        <td>{{$al->id}}</td>
                                        <td>{{$al->nif}}</td>
                                        <td>{{$al->nombre}}</td>
                                        <td>{{$al->apellido1}}</td>
                                        <td>{{$al->apellido2}}</td>
                                        <td>
                                            <a href="{{route ('ficha',$al->id)}}" class="button">Ficha Academica</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
