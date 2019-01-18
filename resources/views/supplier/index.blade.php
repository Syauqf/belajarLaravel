@foreach ($supplier as $supplierlist)
{{$supplierlist->supplier_id}}
{{$supplierlist->supplier_name}}
{{$supplierlist->supplier_address}}
<br>
@endforeach

<a href="http://localhost/coba-laravel/public/supplier/create">tambah data</a>