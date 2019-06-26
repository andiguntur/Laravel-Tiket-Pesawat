@extends('layouts.app')

@section('content')
<style type="text/css">
    .card-header {
       background-color:  #27c8f9;
     }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
               <div class="card-header"><i class="fas fa-database"> Data Tiket </i></div>
                  <div class="card-body">
                 <a href="{{ route('tiket.create') }}" class="btn btn-danger btn-sm"><i class="fas fa-plus-square"> Tambah Tiket </i></a>
                   <hr>
                   @include('notifikasi')
                     <table class="table table-bordered" id="users-table">
                        <thead>
                            <tr>
                                <th><i class="far fa-sticky-note"> No  </i></th>
                                <th><i class="fas fa-file-signature"> Nama Tiket </i></th>
                                <th><i class="fas fa-star-of-david"> Jenis Tiket </i></th>
                                <th><i class="fas fa-cubes"> Kategori Tiket </i></th>
                                <th><i class="fab fa-cuttlefish"> Jumlah Tiket </i></th>
                                <th><i class="fas fa-puzzle-piece"> Harga Tiket </i></th>
                                <th><i class="fas fa-edit"> Edit </i></th>
                                <th><i class="fas fa-trash-alt"> Delete </i></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; ?>
                            @foreach ($tiket as $item)
                              <tr>
                                    <td>{{ $no }}</td>
                                    <td>{{ $item->name_tiket }}</td>
                                    <td>{{ $item->jenis_tiket }}</td>
                                    <td>{{ $item->kategori->nama_kategori }}</td>
                                    <td>{{$item->jumlah_tiket}}</td>
                                    <td>{{$item->harga_tiket}}</td>
                                    <td><a href="{{ route('tiket.edit',$item->id) }}"  name="submit" class="btn btn-danger">Edit</a></td>
                                    {!! Form::open(['route'=>['tiket.destroy',$item->id],'method'=>'Delete']) !!}
                                    <td><button type="submit" name="submit" class="btn btn-danger">Hapus</button></td>
                                    {!! Form::close() !!}
                               </tr>
                           <?php $no++; ?>
                            @endforeach
                        </tbody>
                    </table>
                 </div>
               </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script>
$(function() {
    $('#users-table').DataTable();
});
</script>
@endpush