<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de Reservas') }}
        </h2>
    </x-slot>
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col"># Reserva</th>
                            <th scope="col">Fecha Actividad</th>
                            <th scope="col">Actividad</th>
                            <th scope="col">Cantidad de Personas</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Fecha Reserva</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($reservations as $reservation)
                                <tr>
                                    <th scope="row">{{ $reservation->id }}</th>
                                    <td>{{ \Carbon\Carbon::parse($reservation->activity_at)->format('d-m-Y') }}</td>
                                    <td>{{ $reservation->activity->title }}</td>
                                    <td>{{$reservation->customer_count }}</td>
                                    <td>{{$reservation->price }}</td>
                                    <td>{{ \Carbon\Carbon::parse($reservation->reservation_at)->format('d-m-Y') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $reservations->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
