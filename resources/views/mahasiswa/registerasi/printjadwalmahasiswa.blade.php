<html>
<head><script>window.print()</script></head>
<body>
<table border="1" cellspacing="0">
              <thead>
                <tr>
                  <th>KODE MATAKULIAH</th>
                  <th>NAMA MATAKULIAH</th>
                  <th>RUANGAN</th>
                  <th>NAMA RUANGAN</th>
                  <th>KODE DOSEN</th>
                  <th>KELAS</th>
                  <th>HARI</th>
                  <th>JAM</th>
                </tr>
                </thead>
                <tbody>
                @foreach($jadwal as $isi)
                <tr>
                  <td>{{$isi['matakuliah']->kode_matakuliah}}</td>
                  <td>{{$isi['matakuliah']->nama_matakuliah}}</td>
                  <td>{{$isi['ruangan']->kode_ruangan}}</td>
                  <td>{{$isi['ruangan']->nama_ruangan}}</td>
                  <td>{{$isi['dosen']->kode_dosen}}</td>
                  <td>{{$isi['kelas']->kode_kelas}}
                  <td>{{$isi['hari']}}</td>
                  <td>{{$isi['jam']}}</td>
                </tr>
                @endforeach
              </table>
</body>
</html>