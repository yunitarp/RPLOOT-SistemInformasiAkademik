<html>
<head><script>window.print()</script></head>
<body>
<table border="1" cellspacing="0">
              <thead>
                <tr>
                  <th>Matakuliah</th>
                  <th>UTS</th>
                  <th>UAS</th>
                  <th>Tubes</th>
                  <th>Kuis</th>
                  <th>Tugas</th>
                </tr>
               </thead>
               <tbody>
               @foreach($jadwal as $isi)
                <tr>
                  <td>{{$isi['matakuliah']->kode_matakuliah}}</td>
                  <td>{{$isi['matakuliah']->nama_matakuliah}}</td>
                  <td>{{$isi['kelas']->kode_kelas}}
                  <td>{{$isi['hari']}}</td>
                  <td>{{$isi['jam']}}</td>
                  <td>{{$isi['ruangan']->nama_ruangan}}</td>
                </tr>
                @endforeach
                 </tbody>
              </table>
</body>
</html>