
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
