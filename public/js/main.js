
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
    el.href = 'http://line.naver.jp/R/msg/text/?' + get_current_url();
}

function meta_share(el) {
    el.href = 'https://www.facebook.com/sharer.php?display=page&u=' + get_current_url();
}

function get_current_url() {
    return window.location.origin
}