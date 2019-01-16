@foreach ($karyawan as $karyawanlist)
{{$karyawanlist->id_karyawan}}
{{$karyawanlist->nama_karyawan}}
{{$karyawanlist->alamat_karyawan}}
{{$karyawanlist->telpon_karyawan}}
<br>
@endforeach