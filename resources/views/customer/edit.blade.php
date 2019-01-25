@foreach($customer as $customer)
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
                                <form action="{{ route('customer.update', $customer->customer_id) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="form-group">
                <label for="txt_name">Name</label>
                <input type="text" name="txt_name" id="txt_id" value="{{$customer->name}}" class="form-control" placeholder="Enter text"/><br/>
                </div>
                <div class="form-group">
                <label for="txt_addres">Address</label>
                <input type="text" name="txt_addres" id="txt_id" value="{{$customer->address}}" class="form-control" placeholder="Enter text"/><br/>
                </div>
                <input type="submit" name="sbm_save" id="sbm_save" value="save"/>
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
@endforeach
@endsection