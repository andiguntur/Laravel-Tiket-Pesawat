@extends('layouts.app')

@section('content')
<div class="container">
        <style type="text/css">
            .card-header {
               background-color:  #27c8f9;
             }
        </style>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                  <div class="card-header">Tambah Tiket</div>
                      <div class="card-body">
                              @include('validasi')
                          {!! Form::open(['route'=>'tiket.store','method'=>'POST']) !!}

                          <div class="form-group row">
                            <label class="col-md-2 col-form-label text-md-right"><i class="fas fa-space-shuttle"> Nama Tiket </i></label>

                                 <div class="col-md-6">
                                 {!! Form::text('name_tiket',null,['class'=>'form-control']) !!}
                                 </div>
                           </div>

                          <div class="form-group row">
                        <label class="col-md-2 col-form-label text-md-right"><i class="fab fa-500px"> Jenis Tiket </i></label>
                            <div class="col-md-6">
                                 {!! Form::text('jenis_tiket',null,['class'=>'form-control']) !!}
                                 </div>
                           </div>

                          <div class="form-group row">
                        <label class="col-md-2 col-form-label text-md-right"><i class="fas fa-address-book"> Nama kategori </i></label>
                            <div class="col-md-6">
                                 {!! Form::select('id_kategori',\App\Kategori::pluck('nama_kategori','id'),NULL,['class'=>'form-control']) !!}
                                </div>
                           </div>

                          <div class="form-group row">

                                <label class="col-md-2 col-form-label text-md-right"><i class="far fa-flag"> Jumlah </i></label>
                                 <div class="col-md-6">
                                        {!! Form::number('jumlah_tiket',null,['class'=>'form-control']) !!}
                                 </div>
                           </div>

                          <div class="form-group row">
                                <label class="col-md-2 col-form-label text-md-right"><i class="fas fa-money-bill-alt"> Harga </i></label>
                                 <div class="col-md-6">
                                        {!! Form::text('harga_tiket',null,['class'=>'form-control uang']) !!}
                                 </div>
                           </div>

                               <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-2">
                                        <button type="submit" class="btn btn-danger">Tambah data</button>
                                       <a href="{{ route('tiket.index') }}" class="btn btn-info">Kembali</a>
                                    </div>
                          </div>
                      </div>
                  </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
     $(document).ready(function(){
        $('.uang').mask('000.000.000', {reverse:true});
     });
</script>
@endsection