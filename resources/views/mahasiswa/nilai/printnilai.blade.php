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
                  <th>Index</th>
                </tr>
               </thead>
               <tbody>
               @foreach($nilai as $isi)
                <tr>
                  <td>{{$isi['matakuliah']->nama_matakuliah}}</td>
                  <td>{{$isi['uts']}}</td>
                  <td>{{$isi['uas']}}</td>
                  <td>{{$isi['tubes']}}</td>
                  <td>{{$isi['kuis']}}</td>
                  <td>{{$isi['tugas']}}</td>
                  <?php
                    $total = ($isi['uas']*30/100 + $isi['uts']*35/100 + $isi['tubes']*20/100 + $isi['kuis']*10/100 + $isi['tugas']*5/100);
                    if($total > 80) $index = "A";
                    else if($total > 70) $index = "B";
                    else if($total > 60) $index = "C";
                    else if($total > 40) $index = "D";
                    else $index = "E";
                  ?>
                  <td>{{$index}}</td>
                </tr>
                @endforeach
                </tbody>
              </table>
</body>
</html>