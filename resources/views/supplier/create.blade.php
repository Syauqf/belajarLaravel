<form method="POST" action="http://localhost/coba-laravel/public/supplier">
{{ csrf_field() }}

<p>id      <input type="text" name="txt_id"/></p>
<p>name    <input type="text" name="txt_name"/></p>
<p>address <input type="text" name="txt_address"/></p>

<input type="submit" name="sbm_save" id="sbm_save" value="save"/>
</form>