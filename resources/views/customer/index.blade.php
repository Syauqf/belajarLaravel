@foreach ($customer as $customerlist)
{{$customerlist->customer_id}}
{{$customerlist->name}}
{{$customerlist->address}}
<form action=""><a href="http://localhost/coba-laravel/public/customer/{{$customerlist->customer_id}}">Show</a></form>
<form action=""><a href="http://localhost/coba-laravel/public/customer/{{$customerlist->customer_id}}/edit">Edit</a></form>
<form method="POST" action="{{ route('customer.destroy', $customerlist->customer_id) }}">
{{ csrf_field() }}
{{ method_field('DELETE') }}
<input type="submit" name="delete" id="delete" value="hapus"/>
</Form>
<br>
@endforeach

<a href="http://localhost/coba-laravel/public/customer/create">tambah data</a>