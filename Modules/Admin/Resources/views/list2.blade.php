@extends('admin::index')
@section('content')
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h3>
                <i class="{{$data['icon']}}"></i>
                {{ $data['title']}}
                <small>{{ $data['sub_title']}}
                </small>

            <button class="btn btn-primary" style="float: right">Thêm mới</button>
            </h3>
            <div style="width: 20%">
            <select class="form-control" onchange="changeArea()">
                @foreach($data['dataArea'] as $k => $r)
                <option value="{{$r->id}}" {{($r->id == $data['changeArea']) ? 'selected' : ''}}>{{$r->name_area}}</option>
                @endforeach

            </select>
            </div>
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
                                    @php
                                    if($data['changeArea']!=null){
                                    $s = $data['changeArea']-1 ?? '';$f = $data['changeArea']-1 ?? '';}
                                    else
                                    {$s=0;$f=6;}
                                    @endphp
                                    @for($s;$s<=$f;$s++)
                                        @if(isset($data['dataTr'][$s]))
                                            @foreach ($data['dataTr'][$s] as $keyRow => $tr)
                                            <tr>
                                                @foreach ($tr as $key => $trtd)
                                                    <td style="background-color: #{{$data['color_area'][$s]}}">{!! $trtd !!}</td>
                                                @endforeach
                                            </tr>
                                            @endforeach
                                        @endif
                                    @endfor
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
@push('scripts')
    <script type="text/javascript">
       function changeArea() {
           var a = $("select").val();
           window.location.href = "time?changeArea="+a;

       }
    </script>
@endpush
