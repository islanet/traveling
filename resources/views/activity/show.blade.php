<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Datos de la Actividad') }}
        </h2>
    </x-slot>
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th scope="row">Nombre</th>
                                <td>{{ $activity->title }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Descripción</th>
                                <td>{{ $activity->description }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Fecha Inicio</th>
                                <td>{{ \Carbon\Carbon::parse($activity->start_at)->format('d-m-Y') }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Fecha Fin</th>
                                <td>{{ \Carbon\Carbon::parse($activity->end_at)->format('d-m-Y') }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Precio por persona</th>
                                <td>{{ $activity->price }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Actividades Relacionadas</th>
                                <td>
                                    @foreach ($activity->activities as $item)
                                        <li>
                                            {{ $item->title }}
                                        </li>
                                    @endforeach
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
