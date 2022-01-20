<!doctype html>
<html lang="zh-TW">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AMD｜精技電腦</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, viewport-fit=auto">
  <meta name="format-detection" content="telephone=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" /> -->
  <link rel="stylesheet" href="/css/project.min.css">
</head>

<body class="">
  <input type="hidden" id="key" value="{{ $key }}"">
  
  <div class="bg-img layout-column">
    <div class="nav-top">
      <a href="/"><img src="/img/logo.png" alt="logo"></a>
    </div>
    <div class="main d-flex justify-content-center align-items-center">
      <div class="container-fluid w-960">
        <h3 class="text-center text-white my-5"><span>分析結果：</span>創意專家</h3>
        <div class="row align-items-center justify-content-center">
          <div class="col-8 col-sm-4">
            <div class="img-box px-3 mb-4">
              <img src="/img/card4.png" alt="">
            </div>
          </div>
          <div class="col-11 col-sm-7">
            <p class="level">分析數據力<span>★★★☆☆</span></p>
            <p class="level">規劃排序力<span>★★★★☆</span></p>
            <p class="level">直覺感性力<span>★★★☆☆</span></p>
            <p class="level">創新整合力<span>★★★★★</span></p>
            <br>
            <p class="text-white">你是直觀、創新導向的人，樂於學習新事物。做事富有彈性，極富應變力又具備條理，可塑性高，偏向視覺型的人。</p>
          </div>
        </div>
        <h4 class="text-center text-white mt-5">最適合你的辦公夥伴</h4>
        <h5 class="text-center text-white mb-4">ASUS RS720A-E11-RS12E</h5>
        <div class="product-list">
          <div class="img-box product-img-box">
            <img src="/img/prod/asus_RS720A.jpg" alt="">
          </div>
          <h6 class="mt-3">2 x Socket SP3 AMD EPYC™ 7003 Series</h6>
          <ul>
            <li>採用AMD EPYC™ 7003系列處理器</li>
            <li>支援 32 個 DIMM 最高可達 4096GB 記憶體容量</li>
            <li>支援4個雙插槽 GPU</li>
            <li>支援信任平台模組 2.0 (TPM 2.0)，可透過加密金鑰確保硬體安全</li>
          </ul>
          <div class="text-center my-5">
            <a href="Javascript:void(0)" class="btn btn-primary" onclick="know_more()">了解更多伺服器</a>
          </div>
          <div class="text-center my-5">
            <a href="Javascript:void(0)" class="btn btn-primary" onclick="play_again()">再玩一次</a>
          </div>
        </div>
        <h5 class="text-white mb-3 text-center text-lg-left ">ASUS其他型號伺服器</h5>
        <div class="row justify-content-center">
          <div class="col-11 col-lg-6">
            <div class="product-list color-base">
              <div class="img-box product-img-box">
                <img src="/img/prod/asus_RS500A.jpg" alt="">
              </div>
              <h6 class="mt-3 text-center font-weight-bold">ASUS RS500A-E10-RS4</h6>
              <p class="text-md">1 x Socket SP3</p>
              <p class="text-md mb-2">AMD EPYC™ 7002 Series</p>
              <p></p>
              <ul>
                <li>輕巧型 1U 伺服器</li>
                <li>採用 AMD EPYC™ 7002 系列處理器強化 I/O、記憶體和安全性</li>
                <li>支援 16 個 DIMM 最高可達 2TB 記憶體容量</li>
                <li>彈性儲存設計支援最多 4 個 3.5 吋或 2.5 吋熱抽換 SATA 和 SAS 磁碟機，與 1 個 M.2 22110 SSDs</li>
                <li>備援 650W 80 Plus (白金級) 電源供應器提供高能源效率</li>
                <li>配有 2 個 PCI 4.0 通道支援 16GT/s 專為新世代連線能力設計</li>
                <li>內建雙 LAN 提升資料傳輸速度和效率</li>
                <li>完整的 IT 基礎架構管理搭配 ASMB9 頻外遠端管理</li>
                <li>搭載 ASUS 獨家的 Thermal Radar 2.0 技術，自動調整不同區域的風扇曲線</li>
              </ul>
              <div class="text-right mt-3">
                <a href="https://www.asus.com/tw/Commercial-Servers-Workstations/RS500A-E10-RS4/"
                  target="_blank" class="btn-more">了解更多</a>
              </div>
            </div>
          </div>
          <div class="col-11 col-lg-6">
            <div class="product-list color-base">
              <div class="img-box product-img-box">
                <img src="/img/prod/asus_4000A.jpg" alt="">
              </div>
              <h6 class="mt-3 text-center font-weight-bold">ASUS ESC4000A-E10</h6>
              <p class="text-md">1 x Socket SP3 (LGA 4094)</p>
              <p class="text-md mb-2">AMD EPYC™ 7002 Series</p>
              <p></p>
              <ul>
                <li>2U單插槽 GPU 伺服器</li>
                <li>搭載 AMD EPYC™ 7002 處理器含 64 核心、128 執行緒，每插槽最高支援 280 W TDP</li>
                <li>最高提供 11 個 PCIe® 4.0 插槽以提供更高的頻寬及更快的資料傳輸速率</li>
                <li>GPU 最佳化設計可使用四個雙插槽或八個單插槽 GPU，包括 NVIDIA® A100、Tesla® T4 或 Quadro®</li>
                <li>支援 NVIDIA® NVLink 橋接器，可擴充效能以滿足視覺運算工作負載需求</li>
                <li>正面面板可選擇 PCIe Gen 4.0、OCP 3.0、NVMe 及 M.2，提供彈性、效能及擴充性以因應變動的商業需求</li>
                <li>以 2200W 或 1600W Platinum 備援電源供應器提供高能源效率</li>
                <li>ASUS 散熱控制技術可為大規模環境提供更高效率的電力使用</li>
                <li>ASUS 效能調校技術可提升工作負載傳輸速度以達到最佳伺服器效能</li>
                <li>透過 ASMB9 (頻外) 和 ASUS Control Center (頻內) 提供完整的 IT 基礎架構遠端管理</li>
              </ul>
              <div class="text-right mt-3">
                <a href="https://www.asus.com/tw/Commercial-Servers-Workstations/ESC4000A-E10/overview/"
                  target="_blank" class="btn-more">了解更多</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="toolbar">
			<div class="toolbar__logo">
				<img class="d-none" src="/img/logo2.png" alt="logo">
			</div>
			<div class="toolbar__icons">
				<a href="javascript:void(0)" data-toggle="modal" data-target="#shareList"><img src="/img/icon-share.svg"></a>
				<a class="d-none" href="javascript:void(0)" data-toggle="modal" data-target="#winnerList"><img src="/img/icon-gift.svg"></a>
				<a href="/rule" target="_blank"><img src="/img/icon-i.svg"></a>
			</div>
      <!-- 中獎名單modal -->
      <div id="winnerList" class="modal fade" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-body">
              <button type="button" data-dismiss="modal" aria-label="Close" class="colse-modal btn">ⓧ</button>
              <h5 class="text-center mt-2">得獎名單</h5>
              <hr>
              <p>頭獎：某某某</p>
              <p>頭獎：某某某</p>
              <p>頭獎：某某某</p>
              <p>頭獎：某某某</p>
            </div>
          </div>
        </div>
      </div>
      <!-- End  -->
			<div id="shareList" class="modal fade" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-body">
              <button type="button" data-dismiss="modal" aria-label="Close" class="colse-modal btn">ⓧ</button>
							<h6 class="text-center">分享至</h6>
							<div class="d-flex justify-content-around">
								<div class="text-center mb-4 mt-2">
									<p class="mb-3">Facebook</p>
									<a href="Javascript:void(0)" style="width: 100px;" onclick="meta_share(this)">
										<img src="/img/icon-fb.png">
									</a>
								</div>
								<div class="text-center mb-4 mt-2">
									<p class="mb-3">LINE</p>
									<a href="Javascript:void(0)" style="width: 100px;" onclick="line_share(this)">
										<img src="/img/icon-line.png">
									</a>
								</div>
							</div>
            </div>
          </div>
        </div>
      </div>
		</div>
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
  <!-- <script src="https://unpkg.com/aos@next/dist/aos.js"></script> -->
  <script src='/js/main.js?v=5'></script>
  <script>

    $(document).ready(function () {
      steps(6, '創意專家');
    });
  </script>
</body>

</html>