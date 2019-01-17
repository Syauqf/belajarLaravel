<form method="POST" action="http://localhost/coba-laravel/public/customer">
{{ csrf_field() }}
<input type="text" name="txt_name" id="txt_id"/>

<input type="submit" name="sbm_save" id="sbm_save" value="save"/>
</form>