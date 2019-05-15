@extends('voyager::master')

@section('content')
<div class="container-fluid" style="margin-top:20px">
    <h2>Tugas dari {{$collection->user->name}}</h2>
    <div class=" card">
        <div class="card-body">
            <h3>List Files</h3>
            <table id="example" class="table dataTables_wrapper form-inline dt-bootstrap no-footer  table-borderless">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Download</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($collection->files as $file)
                    <tr>
                        <td>{{$file->name}}</td>
                        <td><a href="{{Storage::url($file->path)}}"><button class="btn btn-primary" type="button">Download</button></a></td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Nama</th>
                        <th>Download</th>
                    </tr>
                </tfoot>
            </table>
        </div>

        <div class="card-body">
            <h3>Deskripsi Tambahan</h3>
            <div class="container">
                @if($collection->description==null)
                    Tidak ada deskripsi Tambahan
                @else
                    {!!$collection->description!!}
                @endif
            </div>
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
