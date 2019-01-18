@foreach ($customer as $customerlist)
{{$customerlist->customer_id}}
{{$customerlist->name}}
{{$customerlist->address}}
<br>
@endforeach

<a href="http://localhost/coba-laravel/public/customer/create">tambah data</a>