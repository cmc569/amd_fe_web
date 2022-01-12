<!doctype html>
<html lang="zh-TW">

<head>
  @include('meta')
  
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
    <div class="main d-flex flex-column justify-content-center align-items-center">
      <div id="q1" class="q1">
        <div class="_q"><img src="img/q1.png">
          <p>在工作中我是一個...</p>
        </div>
        <div class="_a">
          <button class="btn btn-answer" id="ansQ1A">A.善於應變的人</button>
          <button class="btn btn-answer" id="ansQ1B">B.注意細節的人</button>
        </div>
      </div>
      <div id="q2" class="q2">
        <div class="_q"><img src="img/q2.png">
          <p>系統又出包，忙了一個早上終於危機解除，<br>今天下午茶想來點...</p>
        </div>
        <div class="_a">
          <button class="btn btn-answer" id="ansQ2A">A.可口的蛋糕</button>
          <button class="btn btn-answer" id="ansQ2B">B.香醇的咖啡</button>
        </div>
      </div>
      <div id="q3" class="q3">
        <div class="_q"><img src="img/q3.png">
          <p>我的努力被看到了！下午的拆彈危機，<br>老闆賜我３天假，我最想去...</p>
        </div>
        <div class="_a">
          <button class="btn btn-answer" id="ansQ3A">A.海邊</button>
          <button class="btn btn-answer" id="ansQ3B">B.山林</button>
        </div>
      </div>
    </div>
    <!-- modal -->
    <div id="modalForm" class="modal fade" data-backdrop="static">
      <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
          <div class="modal-body">
            <h4 class="text-center mt-3">填寫資料 獲得結果！</h4>
            <h6 class="text-center">12/22 前完成活動並填寫完整資料，就有機會獲得精美好禮！</h6>
            <div class="form-wrap">
              <form action="" id="Form">
                <div class="d-flex justify-content-between">
                  <div class="input-flex mb-3">
                    <label class="label-style">姓名</label>
                    <input type="text" name="name" class="input-style" required>
                  </div>
                  <div class="input-flex ml-3 mb-3">
                    <label class="label-style">職稱</label>
                    <input type="text" name="jobTitle" class="input-style" required>
                  </div>
                </div>
                <div class="d-flex justify-content-between">
                  <div class="input-flex mb-3">
                    <label class="label-style">公司名稱</label>
                    <input type="text" name="company" class="input-style" required>
                  </div>
                  <div class="input-flex ml-3 mb-3">
                    <label class="label-style">公司電話</label>
                    <input type="text" name="tel" class="input-style" required>
                  </div>
                </div>
                <div class="input-flex mb-3">
                  <label class="label-style">行動電話</label>
                  <input type="text" name="mobile" class="input-style" required>
                </div>
                <div class="input-flex mb-3">
                  <label class="label-style">Email</label>
                  <input type="email" name="email" class="input-style" required>
                </div>
                <div class="d-flex mb-3" style="position: relative;">
                  <label class="label-style mr-4">願意業務聯繫</label>
                  <div class="mr-4">
                    <input type="radio" class="d-none" id="yes" name="contact" value="Y" required>
                    <label for="yes"><span class="fake-radio"></span>是</label>
                  </div>
                  <div class="mr-4">
                    <input type="radio" class="d-none" id="no" name="contact" value="N">
                    <label for="no"><span class="fake-radio"></span>否</label>
                  </div>
                </div>
                <div class="mb-3" style="position: relative;">
                  <input type="checkbox" class="d-none" name="agree" id="agree" required>
                  <label for="agree" style="font-size: 0.8rem;"><span class="fake-radio"></span>我已閱讀<a href="rule.html"
                      target="_blank"
                      class="text-link">「精技電腦個資蒐集聲明」</a>，並同意收到精技電腦主辦及承辦的各式訊息，透過各種方式（包含但不限於電話、電子郵件、簡訊、傳真及書面等方式）與我聯繫。</label>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-secondary">送出</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Modal -->
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
  <script src="js/jquery.validate.min.js"></script>
  <script src='/js/main.js'></script>
  <script>

    $(document).ready(function () {
      // AOS啟動
      // AOS.init({
      // 	once: true,
      // });

      let resultArr = [];
      let totalArr = [];
      let typeA = 0;
      let typeB = 0;
      let typeC = 0;
      let typeD = 0;
      let index

      //第一題
      $('#ansQ1A').on('click', function () {
        let obj = { typeA: 2, typeB: 1, typeC: 4, typeD: 3 }
        resultArr.push(obj)
        $('#q1').css('display', 'none')
        $('#q2').css('display', 'block')
        steps(2, JSON.stringify(obj));
      });
      $('#ansQ1B').on('click', function () {
        let obj = { typeA: 3, typeB: 4, typeC: 1, typeD: 2 }
        resultArr.push(obj)
        $('#q1').css('display', 'none')
        $('#q2').css('display', 'block')
        steps(2, JSON.stringify(obj));
      });

      //第二題
      $('#ansQ2A').on('click', function () {
        let obj = { typeA: 1, typeB: 2, typeC: 4, typeD: 3 }
        resultArr.push(obj)
        $('#q2').css('display', 'none')
        $('#q3').css('display', 'block')
        steps(3, JSON.stringify(obj));
      });
      $('#ansQ2B').on('click', function () {
        let obj = { typeA: 4, typeB: 3, typeC: 1, typeD: 2 }
        resultArr.push(obj)
        $('#q2').css('display', 'none')
        $('#q3').css('display', 'block')
        steps(3, JSON.stringify(obj));
      });

      //第三題
      $('#ansQ3A').on('click', function () {
        let obj = { typeA: 2, typeB: 1, typeC: 3, typeD: 4 }
        resultArr.push(obj)
        $('#q3').css('display', 'none')
        $('#modalForm').modal().show()
        steps(4, JSON.stringify(obj));
        getResult()
      });
      $('#ansQ3B').on('click', function () {
        let obj = { typeA: 3, typeB: 4, typeC: 2, typeD: 1 }
        resultArr.push(obj)
        $('#q3').css('display', 'none')
        $('#modalForm').modal().show()
        steps(4, JSON.stringify(obj));
        getResult()
      });

      function getResult() {
        for (var i = 0; i < resultArr.length; i++) {
          typeA += resultArr[i].typeA
          typeB += resultArr[i].typeB
          typeC += resultArr[i].typeC
          typeD += resultArr[i].typeD
        }
        totalArr = [typeA, typeB, typeC, typeD]
        index = totalArr.indexOf(Math.max(...totalArr)) //取得最大值位於陣列中第幾個
      }

      $("#Form").validate({
        // 驗證通過後do something
        submitHandler: function (form) {
          // form.submit();
          $('#Form').prop('disabled', true);

          let data = {
            name: form.name.value,
            title: form.jobTitle.value,
            company: form.company.value,
            tel: form.tel.value,
            mobile: form.mobile.value,
            email: form.email.value,
            contact: form.contact.value,
          }
          register(data, index);
        },
        ignore: true,
        rules: {
          mobile: {
            mobile: true,
            required: true
          },
        },
        errorElement: "p",
        messages: { //自定義錯誤提示
          contact: {
            required: '尚未勾選'
          },
          agree: {
            required: '尚未勾選'
          },
        },
        // 更改錯誤資訊顯示的位置
        errorPlacement: function (error, element) {
          if (element.attr("name") == "contact" || element.attr("name") == "agree") {
            error.appendTo(element.closest('.mb-3'));
          } else {
            element.closest('.mb-3').append(error);
          }
        },
      });
      // 自定義手機格式
      $.validator.addMethod("mobile", function (phone_number, element) {
        return this.optional(element) || /^09\d{2}\-?\d{3}\-?\d{3}$/.test(phone_number);
      }, "手機號碼格式或長度錯誤");

    });

    function register(data, page) {
        let url = '/api/register';
				$.ajax({
					url: url,
					type: 'POST',
					data:  data,
					success: function(response, textStatus, jqXHR) {
            steps(5, null);
            location.replace('/result' + page);
					},
					error: function (jqXHR, textStatus, errorThrown) {
						console.log(jqXHR);
						console.log(textStatus);
						console.log(errorThrown);
            alert('系統異常、請稍後再試');
					}

				}, 'json');
    }
  </script>
</body>

</html>