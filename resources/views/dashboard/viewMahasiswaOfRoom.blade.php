@extends('voyager::master')

@section('content')
@php $who=Auth::user()->role->name; @endphp
<div class="container-fluid" style="margin-top:20px">
    <div class=" card">
        <div class="card-body">

            <table id="example" class="table dataTables_wrapper form-inline dt-bootstrap no-footer  table-borderless">
                <thead>
                    <tr>
                        <th>Nama Mahasiswa</th>
                        <th>NIM</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mhs as $mahasiswa)
                    <tr>
                        <td>{{$mahasiswa->name}}</td>
                        <td>{{$mahasiswa->identity}}</td>
                        <td>{{$mahasiswa->email}}</td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Nama Mahasiswa</th>
                        <th>NIM</th>
                        <th>Email</th>
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
