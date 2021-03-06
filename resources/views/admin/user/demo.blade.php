@extends('admin.layouts.app')
@section('title', '用户配置')


@section('mycss')
<link href="{{URL::asset('style/admin/css/plugins/dataTables/datatables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('style/admin/css/plugins/bootstrap-table/bootstrap-table.css')}}" rel="stylesheet">
<!-- <link href="{{URL::asset('style/admin/css/plugins/dataTables/jquery.dataTables.css')}}" rel="stylesheet"> -->
@endsection

@section('content')
<!-- 主要内容（开始） -->
    <!-- 顶部路径提示（开始） -->
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>首页</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{URL('admin')}}">首页</a>
                </li>
                <li>
                    <strong>用户配置</strong>
                </li>
                <li class="active">
                   <a href="{{URL('admin/sysconfig/api')}}">用户列表</a>
                </li>
            </ol>
        </div>
    </div>
    <!-- 顶部路径提示（结束） -->

    <!-- 主体内容（开始） -->
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>用户列表</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#">Config option 1</a>
                                </li>
                                <li><a href="#">Config option 2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">

                        <div class="table-responsive">
                            <table class="table table-striped  dataTables-example" style="align:center;" >
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>管理员名称</th>
                                        <th>头像</th>
                                        <th>管理员角色</th>
                                        <th>登录次数</th>
                                        <th>上次登录IP</th>
                                        <th>上次登录时间</th>
                                        <th>真实姓名</th>
                                        <th>状态</th>
                                        <th>操作</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="">
                                        <td>01</td>
                                        <td>Admin</td>
                                        <td><img src="{{URL('style/admin/img/a1.jpg')}}" style="width:35px; height: 35px;" alt=""></td>
                                        <td>超级管理员</td>
                                        <td>8</td>
                                        <td>127.0.0.1</td>
                                        <td>2017-5-7 18:20:47</td>
                                        <td>嘿嘿嘿</td>
                                        <td>开启</td>
                                        <td>编辑</td>
                                    </tr>
                                    <tr class="">
                                        <td>01</td>
                                        <td>Admin</td>
                                        <td><img src="{{URL('style/admin/img/a1.jpg')}}" style="width:35px; height: 35px;" alt=""></td>
                                        <td>超级管理员</td>
                                        <td>8</td>
                                        <td>127.0.0.1</td>
                                        <td>2017-5-7 18:20:47</td>
                                        <td>嘿嘿嘿</td>
                                        <td>开启</td>
                                        <td>编辑</td>
                                    </tr>
                                    <tr class="">
                                        <td>01</td>
                                        <td>Admin</td>
                                        <td><img src="{{URL('style/admin/img/a1.jpg')}}" style="width:35px; height: 35px;" alt=""></td>
                                        <td>超级管理员</td>
                                        <td>8</td>
                                        <td>127.0.0.1</td>
                                        <td>2017-5-7 18:20:47</td>
                                        <td>嘿嘿嘿</td>
                                        <td>开启</td>
                                        <td>编辑</td>
                                    </tr>
                                </tbody>
                            
                            </table>
                        </div>

                    </div>
                </div>
                </div>
            </div>
        </div>
    <!-- 主体内容（结束） -->
    

<!-- 主要内容（结束） -->

@endsection


@section('myjs')
<script src="{{URL::asset('style/admin/js/plugins/dataTables/datatables.min.js')}}"></script>
<script src="{{URL::asset('style/admin/js/plugins/bootstrap-table/bootstrap-table.js')}}"></script>
<!-- <script src="{{URL::asset('style/admin/js/plugins/dataTables/jquery.dataTables.js')}}"></script> -->
<script>
       $(document).ready(function(){
            $('.dataTables-example').DataTable({

                pageLength: 50,
                responsive: true,
                // bInfo: true,
                // info:true,
                bAutoWidth: true,
                dom: '<"html5buttons"B>lfrtip',
                // sDom: '<"top"fli>rt<"bottom"p><"clear">',
                // bJQueryUI:true,
                bStateSave:true,
                sScrollX: "100%",
                sScrollXInner: "100%",
                bScrollCollapse: true,
                sPaginationType:'full_numbers',
                columnDefs: [
                    { className: "my_class", "targets": [ 0 ] }
                  ],

                language: {
                    emptyTable: '没有数据',  
                    loadingRecords: '加载中...',  
                    processing: '查询中...',  
                    search: '检索:',  
                    lengthMenu: '每页 _MENU_ 条记录',  
                    zeroRecords: '没有数据',  
                    paginate:{  
                        first:    '首页',  
                        last:       '尾页',  
                        next:       '下一页',  
                        previous:   '上一页'  
                    },
                    info: '第 _PAGE_ 页 / 总 _PAGES_ 页',  
                    infoEmpty: '没有数据',  
                    infoFiltered: '(过滤总件数 _MAX_ 条)'    
                },

                buttons: [
                    {extend: 'copy'},
                    {extend: 'csv'},
                    {extend: 'excel', title: 'ExampleFile'},
                    {extend: 'pdf', title: 'ExampleFile'},

                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }
                ]

            });

        });



    </script>

    
@endsection