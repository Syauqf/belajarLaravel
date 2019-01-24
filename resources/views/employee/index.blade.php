@foreach ($employee as $employeelist)
{{$employeelist->employee_id}}
{{$employeelist->employee_name}}
{{$employeelist->employee_address}}
{{$employeelist->employee_phone_number}}
<form action=""><a href="http://localhost/coba-laravel/public/employee/{{$employeelist->employee_id}}">Show</a></form>
<form action=""><a href="http://localhost/coba-laravel/public/employee/{{$employeelist->employee_id}}/edit">Edit</a></form>
<form method="POST" action="{{ route('employee.destroy', $employeelist->employee_id) }}">
{{ csrf_field() }}
{{ method_field('DELETE') }}
<input type="submit" name="delete" id="delete" value="hapus"/>
</Form>
<br>
@endforeach

<a href="http://localhost/coba-laravel/public/employee/create">tambah data</a>