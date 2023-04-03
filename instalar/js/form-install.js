/*=========================================================================================
    File Name: form-wizard.js
    Description: wizard steps page specific js
    ----------------------------------------------------------------------------------------
    Item Name: Vuexy  - Vuejs, HTML & Laravel Admin Dashboard Template
    Author: PIXINVENT
    Author URL: http://www.themeforest.net/user/pixinvent
==========================================================================================*/

$(function() {
    'use strict';

    var bsStepper = document.querySelectorAll('.bs-stepper'),
        select = $('.select2'),
        horizontalWizard = document.querySelector('.horizontal-wizard-example'),
        verticalWizard = document.querySelector('.vertical-wizard-example'),
        modernWizard = document.querySelector('.modern-wizard-example'),
        modernVerticalWizard = document.querySelector('.modern-vertical-wizard-example');

    // Adds crossed class
    if (typeof bsStepper !== undefined && bsStepper !== null) {
        for (var el = 0; el < bsStepper.length; ++el) {
            bsStepper[el].addEventListener('show.bs-stepper', function(event) {
                var index = event.detail.indexStep;
                var numberOfSteps = $(event.target).find('.step').length - 1;
                var line = $(event.target).find('.step');

                // The first for loop is for increasing the steps,
                // the second is for turning them off when going back
                // and the third with the if statement because the last line
                // can't seem to turn off when I press the first item. ¯\_(ツ)_/¯

                for (var i = 0; i < index; i++) {
                    line[i].classList.add('crossed');

                    for (var j = index; j < numberOfSteps; j++) {
                        line[j].classList.remove('crossed');
                    }
                }
                if (event.detail.to == 0) {
                    for (var k = index; k < numberOfSteps; k++) {
                        line[k].classList.remove('crossed');
                    }
                    line[0].classList.remove('crossed');
                }
            });
        }
    }

    // select2
    select.each(function() {
        var $this = $(this);
        $this.wrap('<div class="position-relative"></div>');
        $this.select2({
            placeholder: 'Select value',
            dropdownParent: $this.parent()
        });
    });

    // Horizontal Wizard
    // --------------------------------------------------------------------
    if (typeof horizontalWizard !== undefined && horizontalWizard !== null) {
        var numberedStepper = new Stepper(horizontalWizard),
        $form = $(horizontalWizard).find('form');
        $form.each(function() {
            var $this = $(this);
            $this.validate({
                rules: {
                    nome: {
                        required: true,
                        minlength: 6
                    },
                    ibge: {
                        required: true,
                        number: true,
                        minlength: 7,
                        maxlength: 7
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    idc: {
                        required: true,
                        minlength: 18,
                        maxlength: 21
                    },
                    senha: {
                        required: true,
                        minlength: 6,
                        maxlength: 12
                    },
                    senha2: {
                        required: true,
                        minlength: 6,
                        maxlength: 12,
                        equalTo: '#senha'
                    }
                },
                messages: {
                    nome: {
                        required: "Este campo é necessário",
                        minlength: "Nome muito curto"
                    },
                    email: {
                        required: "Este campo é necessário",
                        email: "Precisa ser um e-mail válido"
                    },
                    ibge: {
                        required: "Este campo é necessário",
                        number: "Precisa ser número",
                        minlength: "No mínimo 7 dígitos",
                        maxlength: "No máximo 7 dígitos"
                    },
                    idc: {
                        required: "Este campo é necessário",
                        minlength: "No mínimo 18 dígitos",
                        maxlength: "No máximo 21 dígitos"
                    },
                    senha: {
                        required: "Este campo é necessário",
                        minlength: "",
                        maxlength: ""
                    },
                    senha2: {
                        required: "Este campo é necessário",
                        minlength: "",
                        maxlength: "",
                        equalTo: "As senhas precisam ser iguais" 
                    }
                }
            });
        });

        $(horizontalWizard)
            .find('.btn-next')
            .each(function() {
                $(this).on('click', function(e) {
                    var isValid = $(this).parent().siblings('form').valid();
                    if (isValid) {
                        var isValid2 = true;

                        if ($(this).prop("id") == "next2") {
                            isValid2 = false;
                            if (validaCpfCnpj($("#cpf").val())) {
                                isValid2 = true;
                                $.get('lic.php?ac=c&idc=' + $("#idc").val() + '&nome=' + $("#nome").val() + '&cpf=' + $("#cpf").val(), function(data) {
                                    $.get('../licenca.php', function(rdata) {
                                        $("#licenca").text(rdata);
                                    });
                                });
                            } else {
                                Swal.fire(
                                    'Validação!',
                                    'CPF Invalido!',
                                    'error'
                                );
                            }
                        }

                        if ($(this).prop("id") == "next3") {
                            isValid2 = false;
                            if ($('#aceite').is(":checked")) {
                                $.get('lic.php?ac=u', function(ldata) {
                                    //
                                });
                                isValid2 = true;
                            } else {
                                Swal.fire(
                                    'Contrato',
                                    'É necessário aceitar o contrato para continuar',
                                    'error'
                                );
                            }
                        }
                        if ($(this).prop("id") == "next4") {

                            isValid2 = false;

                            $.get('conecta.php?ac=i&adb=' + $("#adb").find(":selected").val() + '&host=' + $("#dbhost").val() + '&porta=' + $("#dbporta").val() + '&banco=' + $("#dbbanco").val() + '&usuario=' + $("#dbusuario").val() + '&senha=' + $("#dbsenha").val(), function(data) {
                                if (!data.includes(":")) {
                                    var mensagemDB = '<ul>';
                                    if (data.includes("|")) {
                                        const arMens = data.split("|");
                                        arMens.forEach(arMensFunc)

                                        function arMensFunc(item, index, arr) {
                                            mensagemDB = mensagemDB + '<li>' + arr[index] + '</li>';
                                        }
                                    }
                                    var menIco = "<span class=\"badge rounded-pill bg-success\"><i class=\"fa fa-check-circle\" aria-hidden=\"true\"></i> OK</span>";
                                    if (mensagemDB.includes("Erro")) {
                                        var menIco = "<span class=\"badge rounded-pill bg-danger\"><i class=\"fa fa-times-circle\" aria-hidden=\"true\"></i> Não</span>";
                                    }
                                    mensagemDB = mensagemDB + '</ul>' + menIco;
                                    $("#dbInstMen").html(mensagemDB);

                                    if ($("#sinternet").val() == 1) {
                                        $.get('vinstalacao.php?ibge=' + $("#ibge").val() + '&idc=' + $("#idc").val() + '&idh=' + $("#idh").val(), function(data) {

                                            var mensagemDados = '<ul>';
                                            if ($("#cidade").val().length > 0) {
                                                mensagemDados = mensagemDados + '<li>Local da instalação: (' + $("#ibge").val() + ') ' + $("#cidade").val() + ' - ' + $("#estado").val() + '</li>';
                                            } else {
                                                mensagemDados = mensagemDados + '<li>Local da instalação: ' + $("#ibge").val() + '</li>';
                                            }
                                            mensagemDados = mensagemDados + '<li>IDH: <span class=\"badge badge-light-primary\">' + $("#idh").val() + '</span></li>';
                                            if (data.includes(":")) {
                                                const arDadosI = data.split(":");
                                                if (arDadosI[0] > 1) {
                                                    if (arDadosI[0] == 4) {
                                                        mensagemDados = mensagemDados + '<li>Instalação encontrada para o IDH indicado</li>';
                                                        $.get('vkey.php?arquivo=' + arDadosI[3] + '&ibge=' + $("#ibge").val(), function(dataf) {
                                                            var mensagemDadosK;
                                                            if (dataf == 1) {
                                                                mensagemDadosK = 'Instalação com sucesso do arquivo KEY <span class=\"text-success\"><i class=\"fa fa-check-circle\" aria-hidden=\"true\"></i></span><br>';
                                                            } else {
                                                                mensagemDadosK = 'Não foi possível baixar a KEY, realize manualmente mais tarde <span class=\"text-warning\"><i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i></span><br>';
                                                            }
                                                            $("#dadosInstMen2").html(mensagemDadosK);
                                                        });
                                                    } else if (arDadosI[0] == 8){
                                                        mensagemDados = mensagemDados + '<li>Pedido de teste encontrado</li>';
                                                        $.get('vkey.php?arquivo=' + arDadosI[3] + '&ibge=' + $("#ibge").val(), function(dataf) {
                                                            var mensagemDadosK;
                                                            if (dataf == 1) {
                                                                mensagemDadosK = 'Instalação com sucesso do arquivo KEY de teste <span class=\"text-success\"><i class=\"fa fa-check-circle\" aria-hidden=\"true\"></i></span><br>';
                                                            } else {
                                                                mensagemDadosK = 'Não foi possível baixar a KEY de teste, realize manualmente mais tarde <span class=\"text-warning\"><i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i></span><br>';
                                                            }
                                                            $("#dadosInstMen2").html(mensagemDadosK);
                                                        });
                                                    } else {
                                                        if (arDadosI[0] == 2) {
                                                            mensagemDados = mensagemDados + '<li>Existem instalações mas nenhuma para o local informado</li>';
                                                        }
                                                        if (arDadosI[0] == 3) {
                                                            mensagemDados = mensagemDados + '<li>Nenhuma instalação para o IDH informado, será necessário registrar manualmente mais tarde</li>';
                                                        }
                                                        if (arDadosI[0] == 5) {
                                                            mensagemDados = mensagemDados + '<li>Existe instalação para o IDH informado mas necessita de aprovacao. Entre em contato com o administrador</li>';
                                                        }
                                                        if (arDadosI[0] == 6) {
                                                            mensagemDados = mensagemDados + '<li>Já foi feito uma instalação de teste anteriormente</li>';
                                                        }
                                                        if (arDadosI[0] == 7) {
                                                            mensagemDados = mensagemDados + '<li>Não foi realizado um pedido de instalação no site</li>';
                                                        }
                                                    }
                                                } else {
                                                    mensagemDados = mensagemDados + '<li>Nenhuma instalação encontrada para o local indicado, registre manualmente mais tarde (1)</li>';
                                                }
                                            } else {
                                                mensagemDados = mensagemDados + '<li>Nenhuma instalação encontrada para o local indicado, registre manualmente mais tarde (2)</li>';
                                            }

                                            mensagemDados = mensagemDados + '</ul>';
                                            $("#dadosInstMen1").html(mensagemDados);
                                            numberedStepper.next();
                                        });
                                    } else {

                                        var mensagemRegistro = '<ul>';
                                        if ($("#cidade").val().length > 0) {
                                            mensagemRegistro = mensagemRegistro + '<li>Local da instalação: (' + $("#ibge").val() + ') ' + $("#cidade").val() + ' - ' + $("#estado").val() + '</li>';
                                        } else {
                                            mensagemRegistro = mensagemRegistro + '<li>Local da instalação: ' + $("#ibge").val() + '</li>';
                                        }
                                        mensagemRegistro = mensagemRegistro + '<li>IDH: <span class=\"badge badge-light-primary\">' + $("#idh").val() + '</span></li>';
                                        mensagemRegistro = mensagemRegistro + "<li>Não foi possivel registrar automaticamente online sua instalação, pois não há acesso à internet, registre manualmente mais tarde</li>";
                                        mensagemRegistro = mensagemRegistro + '</ul>';
                                        $("#dadosInstMen1").html(mensagemRegistro);
                                        numberedStepper.next();
                                    }

                                } else {
                                    Swal.fire(
                                        'Conexão!',
                                        'Não foi possível conectar com o servidor MySQL (' + data + ')',
                                        'error'
                                    );
                                }
                            })

                        }
                        if (isValid2) {
                            numberedStepper.next();
                        }
                    } else {
                        e.preventDefault();
                    }
                });
            });

        $(horizontalWizard)
            .find('.btn-prev')
            .on('click', function() {
                numberedStepper.previous();
            });

        $(horizontalWizard)
            .find('.btn-submit')
            .on('click', function() {
                var isValid = $(this).parent().siblings('form').valid();
                if (isValid) {

                    $.ajax({
                        /*
                            php8
                            exsg
                            expg
                            exmy
                            mysql
                            sinternet

                            estado
                            cidade
                            idh
                            idc
                            nome
                            email
                            ibge
                            cpf

                            aceite

                            dbhost
                            dbporta
                            dbbanco
                            dbusuario
                            dbsenha
                            adb

                            senha
                            senha2
                        */
                        url  : 'gv_final.php',
                        type : 'POST',
                        data : $('#form1, #form2, #form3, #form4, #form5, #form6').serialize(),
                        success : function(response) {
                            //
                        }
                    });

                    // redirecionamento ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                    let timerInterval
                    Swal.fire({
                        title: 'Finalizando a instalação!',
                        html: 'Estamos redirecionando você aguarde <b></b> milisegundos.',
                        timer: 2000,
                        timerProgressBar: true,
                        didOpen: () => {
                            Swal.showLoading()
                            const b = Swal.getHtmlContainer().querySelector('b')
                            timerInterval = setInterval(() => {
                                b.textContent = Swal.getTimerLeft();
                                document.location.href = '../';
                            }, 1400)
                            //window.location.replace("http://stackoverflow.com");
                            //window.location.href = "http://stackoverflow.com";
                            //$(location).prop('href', 'http://stackoverflow.com')
                            //document.location.href = '../';
                        },
                        willClose: () => {
                            clearInterval(timerInterval)
                        }
                    }).then((result) => {
                        /* Read more about handling dismissals below */
                        if (result.dismiss === Swal.DismissReason.timer) {
                            console.log('I was closed by the timer')
                        }
                    })
                    // ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                }
            });
    }

    // Vertical Wizard
    // --------------------------------------------------------------------
    if (typeof verticalWizard !== undefined && verticalWizard !== null) {
        var verticalStepper = new Stepper(verticalWizard, {
            linear: false
        });
        $(verticalWizard)
            .find('.btn-next')
            .on('click', function() {
                verticalStepper.next();
            });
        $(verticalWizard)
            .find('.btn-prev')
            .on('click', function() {
                verticalStepper.previous();
            });

        $(verticalWizard)
            .find('.btn-submit')
            .on('click', function() {
                alert('Submitted..!!');
            });
    }

    // Modern Wizard
    // --------------------------------------------------------------------
    if (typeof modernWizard !== undefined && modernWizard !== null) {
        var modernStepper = new Stepper(modernWizard, {
            linear: false
        });
        $(modernWizard)
            .find('.btn-next')
            .on('click', function() {
                modernStepper.next();
            });
        $(modernWizard)
            .find('.btn-prev')
            .on('click', function() {
                modernStepper.previous();
            });

        $(modernWizard)
            .find('.btn-submit')
            .on('click', function() {
                alert('Submitted..!!');
            });
    }

    // Modern Vertical Wizard
    // --------------------------------------------------------------------
    if (typeof modernVerticalWizard !== undefined && modernVerticalWizard !== null) {
        var modernVerticalStepper = new Stepper(modernVerticalWizard, {
            linear: false
        });
        $(modernVerticalWizard)
            .find('.btn-next')
            .on('click', function() {
                modernVerticalStepper.next();
            });
        $(modernVerticalWizard)
            .find('.btn-prev')
            .on('click', function() {
                modernVerticalStepper.previous();
            });

        $(modernVerticalWizard)
            .find('.btn-submit')
            .on('click', function() {
                alert('Submitted..!!');
            });
    }
});