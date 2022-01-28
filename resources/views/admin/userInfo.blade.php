<!doctype html>
<html lang="zh-TW">

<head>
    <title>AMD管理後台</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- data table css -->
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/v/bs4/dt-1.10.20/b-1.6.1/b-html5-1.6.1/r-2.2.3/datatables.min.css" />
    <!-- fontawesome css -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css"
        integrity="sha384-REHJTs1r2ErKBuJB0fCK99gCYsVjwxHrSU0N7I1zl9vZbggVJXRMsv/sLlOAGb4M" crossorigin="anonymous">
    <!-- CDN Gijgo Datepicker css -->
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="/admin/css/project-back.css">
</head>

<body>
    <div id="wrapper">
        @include('admin.layout._sidebar')
        
        <!-- 右邊內容 -->
        <main class="main">
            <div class="main__content">
                <h2 class="page-ttl">使用者資訊</h2>
                <form action="" method="">
                    <div class="dategroup">
                        <div class="dategroup__input">
                            <input type="text" class="input-style" name="startday" id="startDay" required="required"
                                autocomplete="off" placeholder="起始日">
                        </div>
                        <p class="mx-2"> ~ </p>
                        <div class="dategroup__input">
                            <input type="text" class="input-style" name="endday" id="endDay" required="required"
                                autocomplete="off" placeholder="結束日">
                        </div>
                        <button type="button" class="btn btn-primary ml-3" id="query">查詢</button>
                    </div>
                </form>
                <div class="content-wrap">
                    <!-- Datatable start -->
                    <table id="DT" class="table nowrap no-footer table-style" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>IP</th>
                                <th>姓名</th>
                                <th>公司</th>
                                <th>職稱</th>
                                <th>公司電話/分機</th>
                                <th>行動電話</th>
                                <th>Email</th>
                                <th>近期是否有採購需求</th>
                                <th>願意業務聯繫</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                    <!-- End Datatable -->
                </div>
            </div>
        </main>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <!-- data table js -->
    <script type="text/javascript"
        src="https://cdn.datatables.net/v/bs4/dt-1.10.20/b-1.6.1/b-html5-1.6.1/r-2.2.3/datatables.min.js"></script>
    <!-- CDN Gijgo Datepicker js -->
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <script src="/admin/js/main.js"></script>
</body>
<script>
    $(document).ready(function () {
        // ----------------------------------------------
        // 搜尋日期
        $('#startDay').datepicker({
            format: 'yyyy-mm-dd',
            uiLibrary: 'bootstrap4',
        });

        $('#endDay').datepicker({
            format: 'yyyy-mm-dd',
            uiLibrary: 'bootstrap4',
        });
        // ----------------------------------------------
        // DataTable
        var tables = $("#DT").DataTable({
            // dom:'lfrtip', //原始預設
            dom: '<"d-flex justify-content-between mb-1"l<"d-flex"f<"upload-wrap">B>>rtip',
            //屬性區塊
            scrollX: true,
            order: [0, 'asc'],

            buttons: {
                buttons: [{
                    extend: 'csv',
                    bom: true,
                    text: '下載名單',
                    title: '清單',
                    className: 'btn btn-primary btn-sm'
                },],
                dom: {
                    button: {
                        className: 'btn'
                    }
                }
            },

            ajax: {
                type: 'POST',
                url: "{{ route('getUser') }}",
                data: {
                    _token:"{{csrf_token()}}",
                    start: function() { return $('#startDay').val() },
                    end: function() { return $('#endDay').val() },
                },
            },
            columns: [
                { data: 'ip'},
                { data: 'name'},
                { data: 'company'},
                { data: 'title'},
                { data: 'tel'},
                { data: 'mobile'},
                { data: 'email'},
                { data: 'purchase'},
                {
                    data: 'contact',
                    render: function(data, type, row, meta) {
                        if (data == 'Y') return '是';
                        else return '否';
                    }
                },
            ],

            language: {
                "decimal": "",
                "lengthMenu": "每頁 _MENU_ 筆",
                "emptyTable": "目前沒有資料",
                "info": " _START_ ~ _END_ 筆，共 _TOTAL_ 筆",
                "infoEmpty": " 0 ~ 0 筆，共 0 筆",
                "infoFiltered": "(從 _MAX_ 筆中篩選)",
                "search": "",
                "searchPlaceholder": "搜尋關鍵字...",
                "zeroRecords": "沒有符合的項目",
                "paginate": {
                    "first": "第一頁",
                    "last": "最後一頁",
                    "next": "&raquo;",
                    "previous": "&laquo;"
                },
            },

        });

        // table width resize
        $('.main').bind('widthChange', function () {
            $($.fn.dataTable.tables(true)).DataTable()
                .columns.adjust();
        });

        $('#query').on('click', function() {
            tables.ajax.reload();
        })

    });

</script>

</html>