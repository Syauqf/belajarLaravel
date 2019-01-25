@extends('layout.sb-admin')
@section('content')
<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Forms</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Basic Form Elements
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                <form method="POST" action="http://localhost/coba-laravel/public/customer">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                    <input type="text" name="txt_id" class="form-control" placeholder="ID"/><br/>
                                    </div>
                                    <div class="form-group">
                                    <input type="text" name="txt_name" class="form-control" placeholder="Name"/><br/>
                                    </div>
                                    <div class="form-group">
                                    <input type="text" name="txt_address" class="form-control" placeholder="Address"/><br/>
                                    </div>
                                    <input type="submit" class="btn btn-outline btn-success" name="sbm_save" id="sbm_save" value="save"/>
                                    </form>                                   
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
@endsection