
    <!-- 左邊選單 -->
    <aside class="sidebar">
      <div class="sidebar__toggle">
        <div class="sidebar__toggle--btn" id="jsSidebarBtn"></div>
      </div>
      <div class="sidebar__scroll">
        <div class="sidebar__project">
          <div class="img-box">
            <img src="/admin/img/logo.png" alt="">
          </div>
        </div>
        <div class="sidebar__identify">
          <button type="button" class="btn btn-info" onclick="logout()">登出</button><br>
        </div>
        <div class="sidebar__nav">
          <a href="{{ route('dashboard') }}" class="nav-list active"><i class="far fa-fw fa-chart-bar"></i>活動網頁數據</a>
          <a href="{{ route('userInfo') }}" class="nav-list"><i class="fas fa-fw fa-list"></i>使用者資訊</a>
        </div>
      </div>
    </aside>

    <script>
    function logout() {
      location.replace("{{ route('logout') }}");
    }
    </script>