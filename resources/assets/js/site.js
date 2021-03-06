$(document).ready(function(){

    var App = {};

    var mainUsableObject = function(){
        this.ajaxGet = function(url, callback){
            $.ajax({
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                url: url,
                type:'get',
                success:callback
            })
        };

        this.ajaxPost = function (url, data, callback) {
            $.ajax({
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
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

        this.subscribeForm = $('#subscriber');

        this.sliderUpload = $('#slider_admin_update');
        this.sliderEdit = $('#slider_admin_edit');

        this.serviceUpload = $('#service_admin_update');
        this.serviceEdit = $('#service_admin_edit');

        this.socialUpload = $('#social_admin_update');
        this.socialEdit = $('#social_admin_edit');

        this.getLoginError = function(){
            var formData = new FormData(this.loginForm[0]);

            this.ajaxObject.ajaxPost('/login', formData, function(data){
                if(typeof data.error !== "undefined"){
                    $('#login .sub_errors').text('');
                    $('#login .sub_success').text('');
                    console.log(data.error)
                    for(var error in data.error){
                        $("#login label[for="+error+"]").html("<span class='sub_errors'>"+data.error[error]+"!</span>");
                    }
                    if(typeof data.error.last !== 'undefined'){
                        $("#login label[for='password']").html("<span class='sub_errors'>"+data.error.last+"!</span>");
                    }
                    $("#login input[name='password']").val('');
                }else{
                    location.href = data.success;
                }
            });
        };

        this.getSubscribersError = function(){
            var formData = new FormData(this.subscribeForm[0]);

            this.ajaxObject.ajaxPost('/subscribe', formData, function(data){
               if(typeof data.error !== 'undefined'){
                   $('#subscriber .sub_errors').text('');
                   $('#subscriber .sub_success').text('');
                   for(var error in data.error){
                       $("#subscriber label[for="+error+"]").html("<span class='sub_errors'>"+data.error[error]+"!</span>");
                   }
               } else {
                   $('#subscriber')[0].reset();
                   $('#subscriber .sub_errors').text('');
                   $("#subscriber label[class='Success']").html("<span class='sub_success'>Thank you for your intereset for us, your message has been sent!</span>")
               }
            });
        };

        this.getSliderUplodeMessage = function(){
            var formData = new FormData(this.sliderUpload[0]);

            this.ajaxObject.ajaxPost('/admin/slider/upload', formData, function(data){
                if(typeof data.error !== 'undefined') {
                    $('.error').remove();

                    for (var error in data.error) {
                        if (error === 'image') {
                            $("[name='image']").parent().parent().parent().after("<p class='error' style='color: red;'>" + data.error[error] + "</p>");
                        } else {
                            $("[name=" + error + "]").after("<p class='error' style='color: red;'>" + data.error[error] + "</p>");
                        }
                    }
                }
                else {
                    $('.error').remove();
                    alert("Item Successfully Uploaded!");
                    location.reload();
                }
            });
        };

        this.deleteSliderItem = function(id){
            var formData = id;

            this.ajaxObject.ajaxPost('/admin/slider/delete/'+id, formData, function(data){
                if(typeof data.error !== 'undefined'){
                    console.log("error ",data.error);
                } else {
                    console.log("yes ",data.success)
                }
            });
        };

        this.editSliderItem = function(){
            var formData = new FormData(this.sliderEdit[0]);
            var id = $(this.sliderEdit).data('id');
            formData.append('id', id);

            this.ajaxObject.ajaxPost('/admin/slider/edit/'+id, formData, function(data){
                if(typeof data.error !== 'undefined'){
                    $('.error').remove();
                    $('.success').remove();

                    for(var error in data.error) {
                        if(error === 'image') {
                            $("[name='image']").parent().parent().parent().after("<p class='error' style='color: red;'>" + data.error[error] + "</p>");
                        }else{
                            $("[name=" + error + "]").after("<p class='error' style='color: red;'>" + data.error[error] + "</p>");
                        }
                    }
                }else{
                    $('.error').remove();
                    $('.success').remove();
                    $('button.btn-success').after("<p class='success' style='color: green;'>"+ data.success + "</p>")
                }
            }, this);
        };

        this.uploadeServiceItem = function(){
            var formData = new FormData(this.serviceUpload[0]);

            this.ajaxObject.ajaxPost('/admin/service/upload', formData, function (data) {
                if(typeof data.error !== 'undefined') {
                    $('.error').remove();
                    $('.success').remove();

                    for (var error in data.error) {
                        if (error === 'image') {
                            $("[name='image']").parent().parent().parent().after("<p class='error' style='color: red;'>" + data.error[error] + "</p>");
                        } else {
                            $("[name=" + error + "]").after("<p class='error' style='color: red;'>" + data.error[error] + "</p>");
                        }
                    }
                }
                else {
                    $('.error').remove();
                    alert("Item Successfully Uploaded!");
                    location.reload();
                }
            })
        };

        this.editServiceItem = function(){
            var formData = new FormData(this.serviceEdit[0]);
            var id = $(this.serviceEdit).data('id');
            formData.append('id', id);

            this.ajaxObject.ajaxPost('/admin/service/edit/'+id, formData, function(data){
                if(typeof data.error !== 'undefined'){
                    $('.error').remove();
                    $('.success').remove();

                    for(var error in data.error) {
                        if(error === 'image') {
                            $("[name='image']").parent().parent().parent().after("<p class='error' style='color: red;'>" + data.error[error] + "</p>");
                        }else{
                            $("[name=" + error + "]").after("<p class='error' style='color: red;'>" + data.error[error] + "</p>");
                        }
                    }
                }else{
                    $('.error').remove();
                    $('.success').remove();
                    $('button.btn-success').after("<p class='success' style='color: green;'>"+ data.success + "</p>")
                }
            }, this);
        };

        this.deleteServiceItem = function(id){
            var formData = id;

            this.ajaxObject.ajaxPost('/admin/service/delete/'+id, formData, function(data){
                if(typeof data.error !== 'undefined'){
                    console.log("error ",data.error);
                } else {
                    console.log("yes ",data.success)
                }
            });
        };


        this.uploadeSocialItem = function(){
            var formData = new FormData(this.socialUpload[0]);

            this.ajaxObject.ajaxPost('/admin/social/upload', formData, function (data) {
                if(typeof data.error !== 'undefined') {
                    $('.error').remove();
                    $('.success').remove();

                    for (var error in data.error) {
                        if (error === 'image') {
                            $("[name='image']").parent().parent().parent().after("<p class='error' style='color: red;'>" + data.error[error] + "</p>");
                        } else {
                            $("[name=" + error + "]").after("<p class='error' style='color: red;'>" + data.error[error] + "</p>");
                        }
                    }
                }
                else {
                    $('.error').remove();
                    alert("Item Successfully Uploaded!");
                    location.reload();
                }
            })
        };

        this.editSocialItem = function(){
            var formData = new FormData(this.socialEdit[0]);
            var id = $(this.socialEdit).data('id');
            console.log(id);
            formData.append('id', id);

            this.ajaxObject.ajaxPost('/admin/social/edit/'+id, formData, function(data){
                if(typeof data.error !== 'undefined'){
                    $('.error').remove();
                    $('.success').remove();

                    for(var error in data.error) {
                        if(error === 'image') {
                            $("[name='image']").parent().parent().parent().after("<p class='error' style='color: red;'>" + data.error[error] + "</p>");
                        }else{
                            $("[name=" + error + "]").after("<p class='error' style='color: red;'>" + data.error[error] + "</p>");
                        }
                    }
                }else{
                    $('.error').remove();
                    $('.success').remove();
                    $('button.btn-success').after("<p class='success' style='color: green;'>"+ data.success + "</p>")
                }
            }, this);
        };
    };

    var AjaxObj = new ajaxObject();

    App.Login = (function(){
        $('#login').submit(function (event) {
            event.preventDefault();
            AjaxObj.getLoginError();
        });
    })();

    App.Subscriber = (function(){
        $('#subscriber').submit(function(event){
            event.preventDefault();
            AjaxObj.getSubscribersError();
        });
    })();

    App.SlideUpload = (function(){
        $('#slider_admin_update').submit(function(event){
            event.preventDefault();
            AjaxObj.getSliderUplodeMessage();
        });
    })();

    App.sliderDelete = (function(){
        $('.delete').click(function(){
            var id = $(this).data('id');
            $(this).parent().parent().remove();
            AjaxObj.deleteSliderItem(id);
        });
    })();

    App.sliderEdit = (function(){
        $('#slider_admin_edit').submit(function(event){
            event.preventDefault();
            AjaxObj.editSliderItem();
        });
    })();

    App.slider = (function() {
        $('.admin_panel_date').datepicker({
            dateFormat: 'dd.mm.',
            minDate: '0D'
        });

        $('#imgInp').change(function (event) {
            event.preventDefault();
            $('.admin_panel_image').val($(this).val());
        })
    })();


    App.serviceUpload = (function () {
        $('#service_admin_update').submit(function (event) {
            event.preventDefault();
            AjaxObj.uploadeServiceItem();
        })
    })();

    App.serviceEdit = (function () {
        $('#service_admin_edit').submit(function (event) {
            event.preventDefault();
            AjaxObj.editServiceItem();
        });
    })();

    App.serviceDelete = (function(){
        $('.delete').click(function(){
            var id = $(this).data('id');
            $(this).parent().parent().remove();
            AjaxObj.deleteServiceItem(id);
        });
    })();

    App.socialUpload = (function(){
        $('#social_admin_update').submit(function(event){
            event.preventDefault();
            AjaxObj.uploadeSocialItem();
        })
    })();

    App.socialEdit = (function(){
        $('#social_admin_edit').submit(function (event) {
            event.preventDefault();
            AjaxObj.editSocialItem();
        });
    })();
});