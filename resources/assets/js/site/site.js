$(document).ready(function(){

    var mainUsableObject = function(){
        this.ajaxGet = function(url, callback){
            $.ajax({
                url: url,
                type:'get',
                success:callback
            })
        };

        this.ajaxPost = function (url, data, callback) {
            $.ajax({
                url:url,
                type:'post',
                data:data,
                processData: false,
                contentType: false,
                success:callback
            })
        }
    };

    var ajaxObject = function () {
        this.ajaxObject = new mainUsableObject();
        this.loginForm = $('#login');

        this.getLoginError = function(){
            var formData = new FormData(this.loginForm[0]);
            this.ajaxObject.ajaxPost('/login', formData, function(data){
                if(typeof data.error !== "undefined"){
                    console.log("error "+data.error);
                }else{
                    console.log("yes "+data.success);
                }
            });
        }
    };

    var AjaxObj = new ajaxObject();
    $('#login').submit(function (event) {
        event.preventDefault();
        AjaxObj.getLoginError();
    })
});