<form method="POST" action="http://localhost/coba-laravel/public/employee">
{{ csrf_field() }}

<p>id      <input type="text" name="txt_id"/></p>
<p>name    <input type="text" name="txt_name"/></p>
<p>address <input type="text" name="txt_address"/></p>
<p>phone number <input type="text" name="txt_phone_number"/></p>

<input type="submit" name="sbm_save" id="sbm_save" value="save"/>
</form>