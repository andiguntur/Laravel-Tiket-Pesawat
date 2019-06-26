@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
        <div class="card-header">TRANSAKSI TIKET</div>
                    <div class="card-body">
                    <h3>Form Transaksi</h3>
                    <table class="table table-bordered">
                          <tr><td>
                                <div class="col-md-12">
                                    <input list="tiket" name="nama_tiket" placeholder="masukan nama tiket" class="form-control">
                                </div>
                           </td></tr>
                        <tr><td>
                                <div class="col-md-12">
                                <input type="text" name="qty" placeholder="QTY" class="form-control">
                                </div>
                         </td></tr>
                          <tr><td>
                                <button type="submit" name="submit" class="btn btn-success">Simpan</button>
                                 <a href="#" class="btn btn-danger">Selesai</a>
                            </td></tr>
                    </table>
                    <table class="table table-bordered">
                        <tr class="success"><th colspan="6">Detail Transaksi</th></tr>
                        <tr>
                         <th>No</th><th>Nama Tiket</th><th>Qty</th><th>Harga Tiket</th> <th>Subtotal</th><th>Cancel</th></tr>
                        <?php $no=1; $total=0; ?>
                         @foreach ($transaksi as $item)
                        <tr>
                                <td>1</td>
                                <td>{{ $item->tiket->name_tiket }}</td>
                                <td>{{ $item->qty }}</td>
                                <td>{{ $item->tiket->harga_tiket }}</td>
                                <td>{{ $item->tiket->harga_tiket*$item->qty }}</td>
                                <td><button type="submit" class="btn btn-danger">Cancel</button></td></tr>
                               <?php $no++ ?>
                                <?php $total=$total+($item->tiket->harga_tiket*$item->qty) ?>
                       @endforeach
                                <tr><td colspan="5"><p align="right">Total</p></td><td>{{$total}}</td></tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection