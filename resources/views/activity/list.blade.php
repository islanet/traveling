<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de Actividades') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Popularidad</th>
                            <th scope="col">Actividad</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Acciones</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($activities as $activity)
                                <tr>
                                    <th scope="row">{{ $activity->popularity }}</th>
                                    <td>{{ $activity->title }}</td>
                                    <td>{{ $activity->price }}</td>
                                    <td>
                                        <a  class="btn btn-primary" href="{{ route('activity.list') }}" role="button">Reservar</a>
                                        <a  class="btn btn-primary" href="{{ route('activity.list') }}" role="button">Ver</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
