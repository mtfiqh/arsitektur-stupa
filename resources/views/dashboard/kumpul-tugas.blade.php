@extends('voyager::master')

@section('content')
<div class="row col-md-12">
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="col-md-12">
                    <div class="card-header">
                        <h3>Pengumpulan {{$tugas->title}}</h3>
                    </div>
                    <form method="POST" action="{{route('tugas.post', $tugas->id)}}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="collection_id" value="{{$collection->id}}">
                        <div class="col-md-6">
                            <div class="card-body">
                                <label for="files[]">Upload FIle</label>
                                <input type="file" name="uploads[]" multiple>

                                <label>List Files</label><br />
                                <table class="table">
                                    <thead>
                                        <th>Nama File</th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                    @foreach($collection->files as $file)
                                        <tr id="file_{{$file->id}}">
                                            <td>{{$file->name}}</td>
                                            <td>
                                                <a target="_blank" href="{{Storage::url($file->path)}}"><button type="button" class="btn btn-primary btn-sm">Download</button></a>
                                                <a href="#" onClick="hapusFile({{$file->id}})"><button type="button" class="btn btn-danger btn-sm">Hapus</button></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-6">

                            <div class="card-body">

                                {{-- <input type="hidden" name="user_id" value="{{Auth::User()->id}}"> --}}

                                <label class="label-control" for="description">Deskripsi Tugas</label>
                                <textarea class="form-control richTextBox" name="description" id="richtextdescription">
                                    {{$collection->description}}
                                </textarea>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-block btn-primary btn-sm">Kumpul Tugas</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('javascript')
<script>
function hapusFile(id){
    $.ajax({
        type: "DELETE",
        url:"{{route('tugas.deletefile')}}",
        data:{'id': id},
        success: function(response) {
            console.log(response);
            alert(response.msg);
            $('#file_'+id).remove();
            // $('#field-certificate').append('<input type="file" class="form-control" name="certificate[]">');
        },
    })
}
</script>
@endsection
