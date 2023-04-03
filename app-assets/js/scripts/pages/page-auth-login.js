/*=========================================================================================
  File Name: form-validation.js
  Description: jquery bootstrap validation js
  ----------------------------------------------------------------------------------------
  Item Name: Vuexy  - Vuejs, HTML & Laravel Admin Dashboard Template
  Author: PIXINVENT
  Author URL: http://www.themeforest.net/user/pixinvent
==========================================================================================*/

$(function () {
  'use strict';

  //var pageLoginForm = $('.auth-login-form');
  var pageLoginForm = $('#frmlogin');

  if (pageLoginForm.length) {


    pageLoginForm.validate({
        submitHandler: function (form) {
            $.post('core/check.php', pageLoginForm.serialize(), function (data, textStatus) {
                if (data == 'Ok'){ // data.substring(0,2)
                    top.location.href = 'princ.php';
                } else {
                    swal.fire('erro!',data,'error');
                }
            });
        },
        rules: {
            'login-nome': {
                required: true,
                minlength: 5,
                maxlength: 11
            },
            'login-senha': {
                required: true
            }
        },
        messages: {
            'login-nome': {
                required: "Login é necessário",
                minlength: "No mínimo 5 caracteres",
                maxlength: "No máximo 11 caracteres"
            },
            'login-senha': {
                required: "Senha é necessário"
            }
        }
        
        /*
        ,
        errorElement: 'span',
        errorPlacement: function (error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        }
        */

    });


  }


});
