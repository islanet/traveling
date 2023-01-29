<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de Actividades') }}
        </h2>
    </x-slot>
    @include('activity.search')
    <div class="py-2" id="data">
        @include('activity.table')
    </div>
</x-app-layout>
<script type="text/javascript">

    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var today = new Date(new Date().getFullYear(), new Date().getMonth(), new Date().getDate());

        $('#activity_at').datepicker({
            uiLibrary: 'bootstrap4',
            format: 'dd/mm/yyyy',
            minDate: today,
        });
        $('#search').click(function(){
            debugger;

            var url = "{{ route('activity.list') }}";
            var customer_count = $('#customer_count').val();
            var activity_at = $('#activity_at').val();
            var parts = activity_at.split('/');
            activity_at = parts[2] +'-'+ parts[1] +'-'+ parts[0];

            $.ajax({
            type: "get",
            url: url,
            data: "activity_at="+ activity_at + "&customer_count=" + customer_count,
            success: function(data)
            {
                debugger;
                $('#data').html(data);
            },
            error:function(error){
                debugger;
                console.log(error);
            }
        });
    });


    } );
</script>
