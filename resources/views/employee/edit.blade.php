@foreach($employee as $employee)
<form action="{{ route('employee.update', $employee->employee_id) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
<label for="txt_name">Name</label>
<input type="text" name="txt_name" id="txt_id" value="{{$employee->name}}"/><br/>
<label for="txt_addres">Address</label>
<input type="text" name="txt_addres" id="txt_id" value="{{$employee->addres}}"/><br/>
<label for="txt_phone_number">Phone number</label>
<input type="text" name="txt_phone_number" id="txt_id" value="{{$employee->phone_number}}"/><br/>
<input type="submit" name="sbm_save" id="sbm_save" value="save"/>
</form>
@endforeach