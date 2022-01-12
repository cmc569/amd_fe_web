
function steps(step, ans) {
    let url = '/api/step';
    $.ajax({
        url: url,
        type: 'POST',
        data:  {'step': step, 'answer': ans},
        success: function(response, textStatus, jqXHR) {
            
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(jqXHR);
            console.log(textStatus);
            console.log(errorThrown);
        }

    }, 'json');
}

function know_more() {
    steps(7, null);
    location.replace('/products');
}

function line_share(el) {
    // el.href = 'http://line.naver.jp/R/msg/text/?你是哪一種類型的職場高手，是效率、規劃、溝通還是創意專家？參與測驗了解更多>>' + get_current_url();
    el.href = 'http://line.naver.jp/R/msg/text/?%E4%BD%A0%E6%98%AF%E5%93%AA%E4%B8%80%E7%A8%AE%E9%A1%9E%E5%9E%8B%E7%9A%84%E8%81%B7%E5%A0%B4%E9%AB%98%E6%89%8B%EF%BC%8C%E6%98%AF%E6%95%88%E7%8E%87%E3%80%81%E8%A6%8F%E5%8A%83%E3%80%81%E6%BA%9D%E9%80%9A%E9%82%84%E6%98%AF%E5%89%B5%E6%84%8F%E5%B0%88%E5%AE%B6%EF%BC%9F%E5%8F%83%E8%88%87%E6%B8%AC%E9%A9%97%E4%BA%86%E8%A7%A3%E6%9B%B4%E5%A4%9A%3E%3E&' + get_current_url();
}

function meta_share(el) {
    el.href = 'https://www.facebook.com/sharer.php?display=page&u=' + get_current_url();
}

function get_current_url() {
    return window.location.origin
}
