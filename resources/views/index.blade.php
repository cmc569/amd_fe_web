<!doctype html>
<html lang="zh-TW">

<head>
    <meta property="og:type" content="website" />
    <meta property="og:title" content="你是哪一種類型的職場高手－AMD｜unitech">
    <meta property="og:description" content="你是哪一種類型的職場高手，是效率、規劃、溝通還是創意專家？參與測驗了解更多>>" />
    <meta property="og:image" content="/img/fbshare_banner.jpg" />
    <meta property="og:image:width" content="1280" />
    <meta property="og:image:height" content="720" />

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
	<link rel="stylesheet" href="css/project.min.css">
</head>

<body class="">
	<div class="bg-img layout-column">
		<div class="nav-top">
			<img src="img/logo.png" alt="logo">
		</div>
		<div class="main d-flex justify-content-center align-items-center">
			<div class="main-vision">
				<div class="vision"><img src="img/main-vision.png" alt=""></div>
				<a href="Javascript:void(0)" class="vision-btn" id="testStart">開始測驗 ►►</a>
			</div>
		</div>
		<div class="toolbar">
			<div class="toolbar__logo">
				<img class="d-none" src="img/logo2.png" alt="logo">
			</div>
			<div class="toolbar__icons">
				<a href="javascript:void(0)" data-toggle="modal" data-target="#shareList"><img src="img/icon-share.svg"></a>
				<a class="d-none" href="javascript:void(0)" data-toggle="modal" data-target="#winnerList"><img src="img/icon-gift.svg"></a>
				<a href="/rule" target="_blank"><img src="img/icon-i.svg"></a>
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
										<img src="img/icon-fb.png">
									</a>
								</div>
								<div class="text-center mb-4 mt-2">
									<p class="mb-3">LINE</p>
									<a href="Javascript:void(0)" style="width: 100px;" onclick="line_share(this)">
										<img src="img/icon-line.png">
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
	<script src='/js/main.js?v=3'></script>
	<script>

		$(document).ready(function () {
			// AOS啟動
			// AOS.init({
			// 	once: true,
			// });
			$('#testStart').on('click', function() {
				$('#testStart').prop('disabled', true);
				
				let url = '/api/step';
				$.ajax({
					url: url,
					type: 'POST',
					data:  {'step': 1},
					success: function(response, textStatus, jqXHR) {
						location.replace('/qiz');
					},
					error: function (jqXHR, textStatus, errorThrown) {
						$('#testStart').prop('disabled', false);
						console.log(jqXHR);
						console.log(textStatus);
						console.log(errorThrown);
					}

				}, 'json');
			})
		});
	</script>
</body>

</html>