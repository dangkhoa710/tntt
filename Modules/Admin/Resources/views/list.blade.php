@extends('admin::index')
@section('content')
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h3>
                <i class="{{$data['icon']}}"></i>
                {{ $data['title']}}
                <small>{{ $data['sub_title']}}</small>
            <button class="btn btn-primary" style="float: right">Thêm mới</button>
            </h3>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    @foreach($data['listTh'] as $key => $th)
                                    <th style="cursor: pointer">{!! $th !!}</th>
                                    @endforeach

                                </tr>
                                </thead>
                                <tbody>
                                @if($data['dataTr'] !=null)
                                    @foreach ($data['dataTr'] as $keyRow => $tr)
                                        <tr>
                                            @foreach ($tr as $key => $trtd)
                                                <td>{!! $trtd !!}</td>
                                            @endforeach
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </section><!-- /.content -->
    </div>
@endsection
