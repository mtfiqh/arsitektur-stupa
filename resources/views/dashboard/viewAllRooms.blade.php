@extends('voyager::master')

@section('content')
<div class="container-fluid" style="margin-top:20px">
    <div class=" card">
        <div class="card-body">

            <table id="example" class="table dataTables_wrapper form-inline dt-bootstrap no-footer  table-borderless">
                <thead>
                    <tr>
                        <th>Nama Tampilan</th>
                        <th>Nama</th>
                        <th>Smester</th>
                        <th>Tahun</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($rooms as $room)
                    <tr>
                        <td><a href="{{route('admin.tasks.tasks',$room->id)}}">{{$room->display_name}}</a></td>
                        <td>{{$room->nama}}</td>
                        <td>{{$room->smester}}</td>
                        <td>{{$room->tahun}}</td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Nama Tampilan</th>
                        <th>Nama</th>
                        <th>Smester</th>
                        <th>Tahun</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

</div>
@stop

@section('javascript')
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
@stop
