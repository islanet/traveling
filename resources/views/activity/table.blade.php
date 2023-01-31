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
                            <th scope="row">{{ $activity['popularity'] }}</th>
                            <td>{{ $activity['title'] }}</td>
                            <td>{{ $activity['price'] }}</td>
                            <td>
                                <a  class="btn btn-primary" onClick="makeReservation($(this));" href="#" data-id="{{ $activity['id'] }}" data-price ="{{ $activity['price'] }}" role="button">Comprar</a>
                                <a  class="btn btn-primary" href="{{ route('activity.show', ['id' => $activity['id']]) }}" role="button">Ver</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

