@extends('voyager::master')

@section('content')
<div class="container-fluid" style="margin-top:20px">
    <div class=" card">
        <div class="card-body">

            <table id="example" class="table dataTables_wrapper form-inline dt-bootstrap no-footer  table-borderless">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Deadline</th>
                        <th>dibuat pada</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tasks as $task)
                    <tr>
                        <td><a href="#">{{$task->title}}</a></td>
                        <td>{{$task->deadline}}</td>
                        <td>{{$task->created_at}}</td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Nama</th>
                        <th>Deadline</th>
                        <th>dibuat pada</th>
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
