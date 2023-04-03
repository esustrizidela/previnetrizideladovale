/**
 * DataTables Advanced
 */

'use strict';

var rangePickr = $('#dpp');
if (rangePickr.length) {
  rangePickr.flatpickr({
    mode: 'range',
    dateFormat: 'd/m/Y',
    onClose: function (selectedDates, dateStr, instance) {
      var startDate = new Date();
      var endDate = new Date();
      if (selectedDates[0] != undefined) {
        startDate = ('0'+(selectedDates[0].getDate())).slice(-2)+'/'+(('0'+(selectedDates[0].getMonth()+1)).slice(-2))+'/'+selectedDates[0].getFullYear();
        $('#dppinicial').val(startDate);
      }
      if (selectedDates[1] != undefined) {
        endDate = ('0'+(selectedDates[1].getDate())).slice(-2)+'/'+(('0'+(selectedDates[1].getMonth()+1)).slice(-2))+'/'+selectedDates[1].getFullYear();
        $('#dppfinal').val(endDate);
      }
      $(rangePickr).trigger('change').trigger('keyup');
    }
  });
}

var normalizeDate = function (dateString) {
  var normalized = null;
  if (dateString.length == 10){
    if (dateString.includes("/")) {
      const dtArr = dateString.split("/");
      normalized = parseInt(dtArr[2]+dtArr[1]+dtArr[0]);
    }
  }
  return normalized;
};

$.fn.dataTable.ext.search.push(
  function(settings, data, dataIndex) {
      var min = normalizeDate($('#dppinicial').val() + '');
      var max = normalizeDate($('#dppfinal').val() + '');
      var date = parseInt(data[27]);
      if (
          ( min === null && max === null) ||
          ( min === null && date <= max ) ||
          ( min <= date  && max === null) ||
          ( min <= date  && date <= max )
      ) {
          return true;
      }
      return false;
  }
);

$(function () {
  var isRtl = $('html').attr('data-textdirection') === 'rtl';
  var dt_adv_filter_table = $('.dt-advanced-search');
  if (dt_adv_filter_table.length) {
    var dt_adv_filter = dt_adv_filter_table.DataTable({
      ajax: 'mod/prevbra/indic_123.php?qg=' + $('#qg').find(":selected").val(),
      dom: '<"d-flex justify-content-between align-items-center mx-0 row"<"col-sm-12 col-md-4"l><"col-sm-12 col-md-4"B><"col-sm-12 col-md-4"f>>t<"d-flex justify-content-between mx-0 row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
      buttons: [
        'copyHtml5',
        'excelHtml5',
        {
          extend: 'csvHtml5',
          text: 'CSV',
          fieldBoundary: '',
          fieldSeparator: ';'
        },
        'print',
        {
          extend: 'pdfHtml5',
          text: 'PDF',
          pageSize: 'A1',
          orientation: 'landscape',
          customize: function ( doc ) {
            var cols = [];
            cols[0] = {text: 'Indicadores', alignment: 'left', margin:[20] };
            cols[1] = {text: 'v6', alignment: 'right', margin:[0,0,20] };
            var objFooter = {};
            objFooter['columns'] = cols;
            doc['footer']=objFooter;
            doc['header']={text: 'SC+SUS', alignment: 'left', margin:[20,10] };
            doc.pageMargins = [50,50,50,50];
          }
        }
      ],
      responsive: {
        details: {
          display: $.fn.dataTable.Responsive.display.modal({
            header: function (row) {
              var data = row.data();
              return 'Details of ' + data['nome'];
            }
          }),
          type: 'column',
          renderer: $.fn.dataTable.Responsive.renderer.tableAll({
            tableClass: 'table'
          })
        }
      },
      
      /*
      responsive: true,
      processing: true,
      serverSide: true,
      */

	    lengthChange: true, 
      orderCellsTop: true,
	    autoWidth: false,
      language: {
        lengthMenu: "Mostrando _MENU_ registros por página",
        zeroRecords: "Nenhum encontrado - Desculpe",
        info: "Mostrando página _PAGE_ de _PAGES_",
        infoEmpty: "Nenhum registro encontrado",
        infoFiltered: "(filtrando por _MAX_ de um total de registros)",
        search: "Busca",
        decimal: ",",
        thousands: ".",
        paginate: {
          previous: '&nbsp;',
          next: '&nbsp;'
        }
      },
      columnDefs: [
        {
          render: function (data, type, row) {
            var resultado =  '<button type="button" class="btn btn-danger" onclick="opModal(\'#myModal\',\'mod/prevbra/consultas.php?lig=' + row[31] + '&cid=' + row[32] + '&ind=1\');"><i class="fas fa-stethoscope" title="ID CID FAT: '+row[32]+' ID CID: '+row[41]+' ID CID FAT 2: '+row[42]+'"></i></button>';
            if (data == 1){
              resultado =  '<button type="button" class="btn btn-success" onclick="opModal(\'#myModal\',\'mod/prevbra/consultas.php?lig=' + row[31] + '&cid=' + row[32] + '&ind=1\');"><i class="fas fa-stethoscope" title="ID CID FAT: '+row[32]+' ID CID: '+row[41]+' ID CID FAT 2: '+row[42]+'"></i></button>';
            } else {
              if (data == 2){
                resultado =  '<button type="button" class="btn btn-warning" onclick="opModal(\'#myModal\',\'mod/prevbra/consultas.php?lig=' + row[31] + '&cid=' + row[32] + '&ind=1\');"><i class="fas fa-stethoscope" title="ID CID FAT: '+row[32]+' ID CID: '+row[41]+' ID CID FAT 2: '+row[42]+'"></i></button>';
              }
            }
            return resultado;
          },
          targets: 0
        },
        {
          render: function (data, type, row) {
            var resultado =  '<button type="button" class="btn btn-danger" onclick="opModal(\'#myModal\',\'mod/prevbra/procedimentos.php?lig=' + row[31] + '&cid=' + row[32] + '&ind=2\');"><i class="fas fa-microscope"></i></button>';
            if (data == 1){
              resultado =  '<button type="button" class="btn btn-success" onclick="opModal(\'#myModal\',\'mod/prevbra/procedimentos.php?lig=' + row[31] + '&cid=' + row[32] + '&ind=2\');"><i class="fas fa-microscope"></i></button>';
            } else {
              if (data == 2){
                resultado =  '<button type="button" class="btn btn-warning" onclick="opModal(\'#myModal\',\'mod/prevbra/procedimentos.php?lig=' + row[31] + '&cid=' + row[32] + '&ind=2\');"><i class="fas fa-microscope"></i></button>';
              }
            }
            return resultado;
          },
          targets: 1
        },
        {
          render: function (data, type, row) {
            var resultado =  '<button type="button" class="btn btn-danger" onclick="opModal(\'#myModal\',\'mod/prevbra/consultaso.php?lig=' + row[31] + '&cid=' + row[32] + '&ind=3\');"><i class="fas fa-tooth"></i></button>';
            if (data == 1){
              resultado =  '<button type="button" class="btn btn-success" onclick="opModal(\'#myModal\',\'mod/prevbra/consultaso.php?lig=' + row[31] + '&cid=' + row[32] + '&ind=3\');"><i class="fas fa-tooth"></i></button>';
            } else {
              if (data == 2){
                resultado =  '<button type="button" class="btn btn-warning" onclick="opModal(\'#myModal\',\'mod/prevbra/consultaso.php?lig=' + row[31] + '&cid=' + row[32] + '&ind=3\');"><i class="fas fa-tooth"></i></button>';
              }
            }
            return resultado;
          },
          targets: 2
        },
        {
          render: function (data, type, row) {
            var cc = row[24];
            if (cc.length < 11){
              cc = row[25];
            }
            return '<a href="#" onclick="$(\'.content-body\').load(\'mod/cidadao/cidadao.php?drt=1&cc='+cc+'\');"><i class="fas fa-portrait"></i></a>&nbsp;&nbsp;' + data;
          },
          targets: 3
        },
        {
          render: function (data, type, row) {
            return data +'<br>'+ row[16];
          },
          targets: 4
        },
        {
          render: function (data, type, row) {
            return row[6] +'&nbsp;'+ data;
          },
          targets: 5
        },
        {
          visible: false,
          targets: 6
        },
        {
          render: function (data, type, row) {
            return row[8] +'&nbsp;'+ data;
          },
          targets: 7
        },
        {
          visible: false,
          targets: 8
        },
        {
          render: function (data, type, row) {
            var resultado = '<i class="fas fa-circle text-info" title="Hoje"></i>';
            var today = new Date();
            var n1 = parseInt(today.getFullYear()+(('0'+(today.getMonth()+1)).slice(-2))+('0'+(today.getDate())).slice(-2)); // hoje
            //var n1 = parseInt(data); // data final
            var n2 = parseInt(row[27]); // dpp
            var subt = n1 - n2;
            if (subt > 0){
              resultado = '<i class="fas fa-circle text-warning" title="Passou"></i>';
            }
            if (subt < 0){
              resultado = '';
            }
            return resultado +'&nbsp;'+ data +'&nbsp;'+ row[23];
          },
          targets: 9
        },
        {
          render: function (data, type, row) {
            return data +'&nbsp;'+ row[11];
          },
          targets: 10
        },
        {
          visible: false,
          targets: 11
        },
        {
          render: function (data, type, row) {
            return data +'&nbsp;'+ row[13];
          },
          targets: 12
        },
        {
          visible: false,
          targets: 13
        },
        {
          visible: false,
          orderable: false,
          targets: 14
        },
        {
          visible: false,
          orderable: false,
          targets: 15
        },
        {
          visible: false,
          orderable: false,
          targets: 16
        },
        {
          visible: false,
          orderable: false,
          targets: 17
        },
        {
          visible: false,
          orderable: false,
          targets: 18
        },
        {
          visible: false,
          orderable: false,
          targets: 19
        },
        {
          render: function (data, type, row) {
            var obs = row[33] + '';
            if (obs.length > 0){
              obs = '<a href=\"#\" onclick="opModal(\'#myModal\',\'mod/prevbra/obs.php?lig=' + row[31] + '&cid=' + row[32] + '&ind=123\');"><i class=\"fas fa-info-circle\"></i></a>';
            }
            return data+'&nbsp;'+row[21]+'&nbsp;'+row[22]+'&nbsp;'+row[29]+'&nbsp;'+row[28]+'&nbsp;'+row[39]+'&nbsp;'+obs+'&nbsp;'+row[40];
          },
          targets: 20
        },
        {
          visible: false,
          targets: 21
        },
        {
          visible: false,
          targets: 22
        },
        {
          visible: false,
          targets: 23
        },
        {
          render: function (data, type, row) {
            var resultado = data + '';
            return resultado;
          },
          visible: false,
          targets: 24
        },
        {
          render: function (data, type, row) {
            var resultado = data + '';
            return resultado;
          },
          visible: false,
          targets: 25
        },
        {
          visible: false,
          targets: 26
        },
        {
          visible: false,
          targets: 27
        },
        {
          visible: false,
          targets: 28
        },
        {
          visible: false,
          targets: 29
        },
        {
          visible: false,
          targets: 30
        },
        {
          visible: false,
          targets: 31
        },
        {
          visible: false,
          targets: 32
        },
        {
          visible: false,
          targets: 33
        },
        {
          visible: false,
          targets: 34
        },
        {
          visible: false,
          targets: 35
        },
        {
          visible: false,
          targets: 36
        },
        {
          visible: false,
          targets: 37
        },
        {
          visible: false,
          targets: 38
        },
        {
          visible: false,
          targets: 39
        },
        {
          visible: false,
          targets: 40
        },
        {
          visible: false,
          targets: 41
        },
        {
          visible: false,
          targets: 42
        }
      ],
      createdRow: function(row, data, dataIndex) {
        if (data[19] == "1") {
          $(row).addClass('ind-vermelho');
        }
        if (data[30] == "MASCULINO") {
          $(row).addClass('ind-amarelo');
        }
      }
    });

    $('#nome').on('keyup', function () {
      dt_adv_filter.columns(3).search(this.value).draw();
    });
    $('#cpf').on('keyup', function () {
      dt_adv_filter.columns(24).search(this.value).draw();
    });
    $('#cns').on('keyup', function () {
      dt_adv_filter.columns(25).search(this.value).draw();
    });
    $('#unidade').on('change', function () {
      dt_adv_filter.columns(5).search($(this).find(":selected").val()).draw();
    });
    $('#equipe').on('change', function () {
      dt_adv_filter.columns(7).search($(this).find(":selected").val()).draw();
    });
    $('#dpp').on('keyup', function () {
      dt_adv_filter.draw();
    });
    $('#marc').on('change', function () {
      dt_adv_filter.columns(34).search($(this).find(":selected").val()).draw();
    });
    $('#ind1').on('change', function () {
      dt_adv_filter.columns(35).search($(this).find(":selected").val()).draw();
    });
    $('#ind2').on('change', function () {
      dt_adv_filter.columns(36).search($(this).find(":selected").val()).draw();
    });
    $('#ind3').on('change', function () {
      dt_adv_filter.columns(37).search($(this).find(":selected").val()).draw();
    });
  }

/*
  // on key up from input field
  $('input.dt-input').on('keyup', function () {
    filterColumn($(this).attr('data-column'), $(this).val());
  });
*/

  // Filter form control to default size for all tables
  $('.dataTables_filter .form-control').removeClass('form-control-sm');
  $('.dataTables_length .form-select').removeClass('form-select-sm').removeClass('form-control-sm');










});


