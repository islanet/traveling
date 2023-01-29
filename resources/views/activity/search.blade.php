<div class="py-2">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="input-group mb-3">
                        <label>Fecha de Actividad: </label>
                        <input id="activity_at" class="form-control" type="text" value="{{ date('d/m/Y') }}" readonly/>
                    </div>
                    <div class="input-group mb-3">
                        <select class="custom-select" id="customer_count">
                        <option selected value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        </select>
                    </div>
                    <br>
                    <a  class="btn btn-primary" id="search" href="#" role="button">Buscar</a>
                </div>
        </div>
    </div>
</div>
