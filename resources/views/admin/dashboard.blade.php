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
  <link rel="stylesheet" href="/admin/css/project-back.css">
</head>

<body>
  <div id="wrapper">
    @include('admin.layout._sidebar')
    
    <!-- 右邊內容 -->
    <main class="main">
      <div class="main__content">
        <h2 class="page-ttl">活動網頁數據</h2>
        <div class="content-wrap mb-4">
          <h5 class="mb-3">● 活動數據總覽</h5>
          <div class="total-wrap">
            <div class="total">
              <p>總流量</p>
              <p class="total__people">{{ $data['total'] ?? '0' }}</p>
            </div>
            <div class="total">
              <p>總遊戲人數</p>
              <p class="total__people">{{ $data['game'] ?? '0' }}</p>
            </div>
            <div class="total">
              <p>再玩一次人數</p>
              <p class="total__people">{{ $data['again'] ?? '0' }}</p>
            </div>
            <div class="total">
              <p>總名單人數</p>
              <p class="total__people">{{ $data['contact_all'] ?? '0' }}</p>
            </div>
            <div class="total">
              <p>總不重複名單人數</p>
              <p class="total__people">{{ $data['contact'] ?? '0' }}</p>
            </div>
          </div>
        </div>
        {{--
        <div class="content-wrap">
          <h5 class="mb-3">● 活動點擊分析</h5>
          <!-- Datatable start -->
          <table id="DT" class="table nowrap no-footer table-style" style="width: 100%;">
            <thead>
              <tr>
                <th>活動階段</th>
                <th>完成人數</th>
                <th>完成率</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1.完成開始</td>
                <td>{{ $data['data']['1']['total'] ?? '0' }}</td>
                <td>{{ $data['data']['1']['percent'] ?? '0%' }}</td>
              </tr>
              <tr>
                <td>2.完成第一題</td>
                <td>{{ $data['data']['2']['total'] ?? '0' }}</td>
                <td>{{ $data['data']['2']['percent'] ?? '0%' }}</td>
              </tr>
              <tr>
                <td>3.完成第二題</td>
                <td>{{ $data['data']['3']['total'] ?? '0' }}</td>
                <td>{{ $data['data']['3']['percent'] ?? '0%' }}</td>
              </tr>
              <tr>
                <td>4.完成第三題</td>
                <td>{{ $data['data']['4']['total'] ?? '0' }}</td>
                <td>{{ $data['data']['4']['percent'] ?? '0%' }}</td>
              </tr>
              <tr>
                <td>5.留下資訊</td>
                <td>{{ $data['data']['5']['total'] ?? '0' }}</td>
                <td>{{ $data['data']['5']['percent'] ?? '0%' }}</td>
              </tr>
              <tr>
                <td>6.獲得結果</td>
                <td>{{ $data['data']['6']['total'] ?? '0' }}</td>
                <td>{{ $data['data']['6']['percent'] ?? '0%' }}</td>
              </tr>
              <tr>
                <td>7.完成獲得結果-了解更多</td>
                <td>{{ $data['data']['7']['total'] ?? '0' }}</td>
                <td>{{ $data['data']['7']['percent'] ?? '0%' }}</td>
              </tr>
              <tr>
                <td>8.完成獲得結果-了解更多-回首頁</td>
                <td>{{ $data['data']['8']['total'] ?? '0' }}</td>
                <td>{{ $data['data']['8']['percent'] ?? '0%' }}</td>
              </tr>
            </tbody>
          </table>
          <!-- End Datatable -->
        </div>
        --}}
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
  <script src="/admin/js/main.js"></script>
</body>
<script>
  $(document).ready(function () {

    // ----------------------------------------------
    // DataTable
    var tables = $("#DT").DataTable({
      dom: 't',
      //屬性區塊
      scrollX: true,
      order: [0, 'asc'],
      //欄位元素定義區塊(columnDefs)
      columnDefs: [{
        orderable: false,
        targets: ['nosort'],
      }],

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

  });

</script>

</html>