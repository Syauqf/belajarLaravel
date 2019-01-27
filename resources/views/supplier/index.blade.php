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
@foreach ($supplier as $supplierlist)
                                    <tr class="gradeA">
                                        <td>{{$supplierlist->supplier_id}}</td>
                                        <td>{{$supplierlist->supplier_name}}</td>
                                        <td>{{$supplierlist->supplier_address}}</td>
                                        <td class="center"><form><a href="http://localhost/coba-laravel/public/supplier/{{$supplierlist->supplier_id}}/edit" ><input type="button" class="btn btn-outline btn-warning" value="Edit"></a></form></td>
                                        <td class="center"><form method="POST" action="{{ route('supplier.destroy', $supplierlist->supplier_id) }}">{{ csrf_field() }}{{ method_field('DELETE') }}<input type="submit" name="delete" id="delete" value="Hapus" type="button" class="btn btn-outline btn-danger"/></Form></td>
                                    </tr>   
@endforeach 
                                </tbody>
                            </table>
                            <button type="button" class="btn btn-outline btn-primary" style="text-decoration:none"><a href="http://localhost/coba-laravel/public/supplier/create">tambah data</a></button>
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