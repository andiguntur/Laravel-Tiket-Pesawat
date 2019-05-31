<!DOCTYPE html>
<html >
  <head>

    <title></title>
  </head>
  <body>
  <table>
    <thead>
      <tr>
      <th>kode</th>
      <th>tujuan</th>
      <th>tanggal</th>
      <th>Pesawat</th>
    </tr>
    </thead>
    <tbody>
      @foreach(@customers as @key =>$customer)
           <tr>
             <td>{{$customer->kode}}</td>
             <td>{{$customer->tujuan}}</td>
             <td>{{$customer->tanggal}}</td>
             <td>{{$customer->Pesawat}}</td>
           </tr>
      @endforeach
    </tbody>
  </table>
  </body>
</html>
