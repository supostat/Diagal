/**
 * Created by coder on 19.02.15.
 */

Diagal = (function(){

    App = {
        Models: {},
        Views: {},
        Collections: {},
        Router: {}
    }

    return App;
})();

$.fn.serializeObject = function()
{
    var o = {};
    var a = this.serializeArray();
    $.each(a, function() {
        if (o[this.name] !== undefined) {
            if (!o[this.name].push) {
                o[this.name] = [o[this.name]];
            }
            o[this.name].push(this.value || '');
        } else {
            o[this.name] = this.value || '';
        }
    });
    return o;
};

$(document.body).on('click', '#loginSubmit', function() {
    var data = $('#loginForm').serializeObject();
    $.ajax({
        method: 'POST',
        url: '/auth/login',
        data: data,
        beforeSend : function(xhr) {
            return xhr.setRequestHeader('X-PJAX','true'); // IMPORTANT
        },
        success: function(result){
            window.history.pushState(null, 'Админка', '/admin');
            $('#topmenu').html(result[0].topmenu);
            $('#content').html(result[0].content);
        }
    });
});

$(document.body).on('click', '#logout', function() {
    $.ajax({
        method: 'GET',
        url: '/auth/logout',
        beforeSend : function(xhr) {
            return xhr.setRequestHeader('X-PJAX','true'); // IMPORTANT
        },
        success: function(result){
            window.history.pushState(null, 'Админка', '/');
            $('#topmenu').html(result);
            $('#content').html('');
        }
    });
});

$(document).ajaxStart(function(){
    NProgress.start();
});
$(document).ajaxStop(function(){
    NProgress.done();
});

$(document).pjax('a', '#content');

$('#menu').metisMenu();
