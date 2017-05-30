<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DataTables | Gentelella</title>

    <!-- Bootstrap -->
    <link href="/admin/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/admin/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="/admin/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="/admin/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="/admin/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="/admin/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="/admin/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="/admin/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="/admin/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="/admin/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        @include('master.admin.menu')

        <!-- top navigation -->
        @include('master.admin.header')
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>商品管理<small></small></h3>
              </div>
              {{-- <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div> --}}
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <div class="row">
                      <div class="col-md-6">
                        <h2>用户列表<small></small></h2>
                      </div>
                      <div class="col-md-6" style="text-align: right" >
                        <a href="/admin/goods/add" class="btn btn-primary btn-goods-add">添加</a>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>编号</th>
                          <th>名称</th>
                          <th>类型</th>
                          <th>价格</th>
                          <th>折扣价</th>
                          <th>状态</th>
                          <th>创建日期</th>
                          <th>操作</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($goods as $key => $item)
                          <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->type->name }}</td>
                            <td>{{ $item->price }}</td>
                            <td>{{ $item->discount_price }}</td>
                            <td>
                                @if ($item->status == 1)
                                    正常
                                @elseif ($item->status == 2)
                                    已禁用
                                @endif
                            </td>
                            <td>{{ $item->created_at }}</td>
                            <td>
                                @if ($item->status == 1)
                                    <a href="#" data-id="{{ $item->id }}" data-status="2" class="goods-status">禁用</a>
                                @elseif ($item->status == 2)
                                    <a href="#" data-id="{{ $item->id }}" data-status="1" class="goods-status">启用</a>
                                @endif
                                <a href="/admin/goods/update?id={{ $item->id }}" data-id="{{ $item->id }}" class="goods-update">修改</a>
                                <a href="#" data-id="{{ $item->id }}" class="goods-delete">删除</a>
                            </td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="/admin/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="/admin/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="/admin/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="/admin/vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="/admin/vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="/admin/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="/admin/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="/admin/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="/admin/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="/admin/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="/admin/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="/admin/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="/admin/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="/admin/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="/admin/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="/admin/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="/admin/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="/admin/vendors/jszip/dist/jszip.min.js"></script>
    <script src="/admin/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="/admin/vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="/admin/js/custom.min.js"></script>
    <script>
        $('#datatable').DataTable({
            stateSave: true,
            language: {
                search: '搜索：',
                searchPlaceholder: '请输入要搜索的内容',
                paginate: {
                    first: '第一页',
                    last: '最后一页',
                    next: '下一页',
                    previous: '上一页'
                },
                zeroRecords: '没有数据',
                lengthMenu: '展示 _MENU_ 条数据',
                info: '当前展示第 _START_ 到第 _END_ 条，共计 _TOTAL_ 条'
            },
            drawCallback: function() {
              $('.goods-delete').on('click', function() {
                var id = $(this).attr('data-id')

                $.ajax({
                  url: '/admin/goods/delete',
                  type: 'post',
                  data: {
                    id: id,
                  },
                  success: function(data) {
                    alert(data.message)

                    if (data.status === 1) {
                      window.location.reload()
                    }
                  }
                })
              })

              $('.goods-status').on('click', function() {
                var id = $(this).attr('data-id')
                var status = $(this).attr('data-status')

                $.ajax({
                  url: '/admin/goods/disable',
                  type: 'post',
                  data: {
                    id: id,
                    status: status,
                  },
                  success: function(data) {
                    alert(data.message)

                    if (data.status === 1) {
                      window.location.reload()
                    }
                  }
                })
              })
            },
        })
    </script>
  </body>
</html>