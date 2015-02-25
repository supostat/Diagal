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


Diagal.Router = Backbone.Router.extend({
    routes: {
        '': 'index',
        'login': 'login'
    },

    index: function() {
        $('#content').html('');
    },
    login: function() {
        $.ajax({
            method: 'get',
            url: 'login',
            success: function(result) {
                $('#content').html(result);
            }
        });
    }
});

new Diagal.Router();
Backbone.history.start();

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
    console.log(data);
    $.ajax({
        method: 'POST',
        url: '/auth/login',
        data: data,
        success: function(result){
            console.log(result);

            $('#content').html(result);
        }
    });
});

$(document).ajaxStart(function(){
    NProgress.start();
});
$(document).ajaxStop(function(){
    NProgress.done();
});