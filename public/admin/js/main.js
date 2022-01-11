// 後台__sidebar的開關
$('#jsSidebarBtn').on('click',function(){
    let side = $('.sidebar');
    let main = $('.main');
    if($(side).attr('class').indexOf('hide')> -1){
        $(side).removeClass('hide');
        $(main).removeClass('hide');
        setTimeout(function(){
			$(main).trigger('widthChange');
		},510);
    }else{
        $(side).addClass('hide');
        $(main).addClass('hide');
        setTimeout(function(){
			$(main).trigger('widthChange');
		},510);
    }
});

// 前台__網頁__漢堡按鈕
$('#btnMenu').click(function () {
  $(this).children('div').toggleClass('active');
  $(this).nextAll().slideToggle(500);
  $(".navbg").toggleClass('open');
  $(".nav__list").toggleClass('open');
  $('body').toggleClass('nav-open');
});
