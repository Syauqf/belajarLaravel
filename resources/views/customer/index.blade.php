@extends('layout.sb-admin')
@section('content')
<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tables</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            DataTables Advanced Tables
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>ID customer</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th colspan="2">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
@foreach ($customer as $customerlist)
                                    <tr class="gradeA">
                                        <td>{{$customerlist->customer_id}}</td>
                                        <td>{{$customerlist->name}}</td>
                                        <td>{{$customerlist->address}}</td>
                                        <td class="center"><form><a href="http://localhost/coba-laravel/public/customer/{{$customerlist->customer_id}}/edit" ><input type="button" class="btn btn-outline btn-warning" value="Edit"></a></form></td>
                                        <td class="center"><form method="POST" action="{{ route('customer.destroy', $customerlist->customer_id) }}">{{ csrf_field() }}{{ method_field('DELETE') }}<input type="submit" name="delete" id="delete" value="Hapus" type="button" class="btn btn-outline btn-danger"/></Form></td>
                                    </tr>   
@endforeach 
                                </tbody>
                            </table>
                            <button type="button" class="btn btn-outline btn-primary"><a href="http://localhost/coba-laravel/public/customer/create">tambah data</a></button>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
                                        </div>
            @endsection