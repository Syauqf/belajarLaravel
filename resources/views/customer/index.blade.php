@foreach ($customer as $customerlist)
{{$customerlist->customer_id}}
{{$customerlist->name}}
{{$customerlist->address}}
<a href="http://localhost/coba-laravel/public/customer/{{$customerlist->customer_id}}">show</a>
<a href="http://localhost/coba-laravel/public/customer/edit{{$customerlist->customer_id}}">edit</a>
<br>
@endforeach

<a href="http://localhost/coba-laravel/public/customer/create">tambah data</a>