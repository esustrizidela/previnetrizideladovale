/**
 * DataTables Advanced
 */

'use strict';

var rangePickr = $('#dtnasc');
if (rangePickr.length) {
  rangePickr.flatpickr({
    mode: 'range',
    dateFormat: 'd/m/Y',
    onClose: function (selectedDates, dateStr, instance) {
      var startDate = new Date();
      var endDate = new Date();
      if (selectedDates[0] != undefined) {
        startDate = ('0'+(selectedDates[0].getDate())).slice(-2)+'/'+(('0'+(selectedDates[0].getMonth()+1)).slice(-2))+'/'+selectedDates[0].getFullYear();
        $('#dninicial').val(startDate);
      }
      if (selectedDates[1] != undefined) {
        endDate = ('0'+(selectedDates[1].getDate())).slice(-2)+'/'+(('0'+(selectedDates[1].getMonth()+1)).slice(-2))+'/'+selectedDates[1].getFullYear();
        $('#dnfinal').val(endDate);
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
      var min = normalizeDate($('#dninicial').val() + '');
      var max = normalizeDate($('#dnfinal').val() + '');
      var date = parseInt(data[22]);
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
      ajax: 'mod/prevbra/indic_7.php?qg=' + $('#qg').find(":selected").val(),
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
            var resultado =  '<button type="button" class="btn btn-danger" onclick="opModal(\'#myModal\',\'mod/prevbra/consproc.php?lig=' + row[20] + '&cid=' + row[21] + '&ind=7\');"><i class="fas fa-tint" title="'+row[21]+'"></i></button>';
            if (data == 1){
              resultado =  '<button type="button" class="btn btn-success" onclick="opModal(\'#myModal\',\'mod/prevbra/consproc.php?lig=' + row[20] + '&cid=' + row[21] + '&ind=7\');"><i class="fas fa-tint" title="'+row[21]+'"></i></button>';
            } else {
              if (data == 2){
                resultado =  '<button type="button" class="btn btn-warning" onclick="opModal(\'#myModal\',\'mod/prevbra/consproc.php?lig=' + row[20] + '&cid=' + row[21] + '&ind=7\');"><i class="fas fa-tint" title="'+row[21]+'"></i></button>';
              }
            }
            return resultado;
          },
          targets: 0
        },
        {
          render: function (data, type, row) {
            var cc = row[15];
            if (cc.length < 11){
              cc = row[16];
            }
            return '<a href="#" onclick="$(\'.content-body\').load(\'mod/cidadao/cidadao.php?drt=1&cc='+cc+'\');"><i class="fas fa-portrait"></i></a>&nbsp;&nbsp;' + data;
          },
          targets: 1
        },
        {
          render: function (data, type, row) {
            return data +'<br>'+ row[10];
          },
          targets: 2
        },
        {
          render: function (data, type, row) {
            return row[4] +'&nbsp;'+ data;
          },
          targets: 3
        },
        {
          visible: false,
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
          visible: false,
          orderable: false,
          targets: 8
        },
        {
          visible: false,
          orderable: false,
          targets: 9
        },
        {
          visible: false,
          orderable: false,
          targets: 10
        },
        {
          visible: false,
          orderable: false,
          targets: 12
        },
        {
          render: function (data, type, row) {
            var obs = row[23] + '';
            if (obs.length > 0){
              obs = '<a href=\"#\" onclick="opModal(\'#myModal\',\'mod/prevbra/obs.php?lig=' + row[20] + '&cid=' + row[21] + '&ind=7\');"><i class=\"fas fa-info-circle\"></i></a>';
            }
            return data+'&nbsp;'+row[14]+'&nbsp;'+row[18]+'&nbsp;'+row[24]+'&nbsp;'+obs+'&nbsp;'+row[29];
          },
          targets: 13
        },
        {
          visible: false,
          targets: 14
        },
        {
          render: function (data, type, row) {
            var resultado = data + '';
            return resultado;
          },
          visible: false,
          targets: 15
        },
        {
          render: function (data, type, row) {
            var resultado = data + '';
            return resultado;
          },
          visible: false,
          targets: 16
        },
        {
          visible: false,
          targets: 17
        },
        {
          visible: false,
          targets: 18
        },
        {
          visible: false,
          targets: 19
        },
        {
          visible: false,
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
          visible: false,
          targets: 24
        },
        {
          visible: false,
          targets: 25
        },
        {
          visible: false,
          targets: 26
        },
        {
          render: function (data, type, row) {
            return data+'&nbsp;'+row[28];
          },
          targets: 27
        },
        {
          visible: false,
          targets: 28
        },
        {
          visible: false,
          targets: 29
        }
      ],
      createdRow: function(row, data, dataIndex) {
        if (data[12] == "1") {
          $(row).addClass('ind-vermelho');
        }
      }
    });

    $('#nome').on('keyup', function () {
      dt_adv_filter.columns(1).search(this.value).draw();
    });
    $('#cpf').on('keyup', function () {
      dt_adv_filter.columns(15).search(this.value).draw();
    });
    $('#cns').on('keyup', function () {
      dt_adv_filter.columns(16).search(this.value).draw();
    });
    $('#unidade').on('change', function () {
      dt_adv_filter.columns(3).search($(this).find(":selected").val()).draw();
    });
    $('#equipe').on('change', function () {
      dt_adv_filter.columns(5).search($(this).find(":selected").val()).draw();
    });
    $('#dtnasc').on('keyup', function () {
      dt_adv_filter.draw();
    });
    $('#marc').on('change', function () {
      dt_adv_filter.columns(25).search($(this).find(":selected").val()).draw();
    });
    $('#ind').on('change', function () {
      dt_adv_filter.columns(26).search($(this).find(":selected").val()).draw();
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


