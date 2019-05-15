@extends('voyager::master')

@section('content')
<div class="container-fluid" style="margin-top:20px">
    <div class=" card">
        <div class="card-body">

            <table id="example" class="table dataTables_wrapper form-inline dt-bootstrap no-footer  table-borderless">
                <thead>
                    <tr>
                        <th>Nama Mahasiswa/i</th>
                        <th>NIM</th>
                        <th>Dikumpulkan pada</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($collections as $collection)
                    <tr>
                        <td><a href="{{route('admin.tasks.collection',['id'=> Request::segment(3), 'id2'=>$task->id, 'id3'=>$collection->id])}}">{{$collection->user->name}}</a></td>
                        <td>{{$collection->user->identity}}</td>
                        <td>{{$collection->updated_at}}</td>
                        <td>{{$collection->updated_at->diffForHumans($task->deadline)}}</td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Nama Mahasiswa/i</th>
                        <th>NIM</th>
                        <th>Dikumpulkan pada</th>
                        <th>Status</th>
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
