$(function() {
  var $frmreport = $('#frm_report'),
    $dt_report = $('#dt_report');

  function get_json(url, textid_option, textid) {
    var html = '',
      xhr = new XMLHttpRequest();
    xhr.open("GET", url, true);
    xhr.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        var myarr = JSON.parse(this.responseText);
        $(textid_option).detach();

        for (i = 0; i < myarr.length; i++) {
          html += "<option value='" + myarr[i].yr + "'>" + myarr[i].yr + "</option>";
        }
        $(textid).html(html);
        $(textid).prop("disabled", false);

        var url = base_url + "report/ajax_get_report",
          data = {
            current_yr: $('#tr_year').val()
          };
        otable(url, data);
      }
    }
    xhr.send();
  }
  get_json(base_url + "report/ajax_get_report_year", "#tr_year option", "#tr_year");

  function otable(url, data) {
    notify('Processing', 'Please wait..', 'info', 999999);
    $dt_report.dataTable().fnClearTable();
    $dt_report.dataTable().fnDestroy();
    $dt_report.removeClass('hidden');
    var otable = $dt_report.DataTable({
      'ajax': {
        "type": "GET",
        "url": url,
        "data": data,
        "dataSrc": ""
      },
      'columns': [{
          "data": "month"
        },
        {
          "data": "TRANSFER"
        },
        {
          "data": "BURIAL"
        },
        {
          "data": "CREMATION"
        },
        {
          "data": "EXHUMATION"
        },
        {
          "data": "TOTAL"
        }
      ],
      'dom': '<"wrapper"Bfit>',
      'bFilter': false,
      // "ordering": false,
      'info': false,
      'scrollY': 400,
      // 'order': [[0, "desc"]],
      'scrollX': true,
      'paging': false,
      'scrollCollapse': true,
      'buttons': [{
        'text': '',
        'extend': 'excelHtml5',
        'titleAttr': 'Export Excel',
        'className': 'fa fa-download',
        customize: function(xlsx) {
          var sheet = xlsx.xl.worksheets['sheet1.xml'];
          $('row c[r^="C"]', sheet).attr('s', '2');
        }
      }, {
        'text': '',
        'extend': 'print',
        'titleAttr': 'Print',
        'className': 'fa fa-print',
        'exportOptions': {
          'columns': ':visible'
          // columns: [1, 2, 3, 4, 5, 6, 10, 11, 12, 13, 14]
        },
      }, {
        'text': '',
        'titleAttr': 'Refresh',
        'className': 'fa fa-refresh',
        action: function(e, dt, node, config) {
          load_data();
          otable.ajax.reload();
        }
      }],
      // 'buttons': [
      //   'copy', 'csv', 'excel', 'pdf', 'print'
      // ],
      // 'columnDefs': [
      //   // { "visible": false, "targets": [1,2,3,4,5] }
      //   {
      //     "visible": false,
      //     "targets": [1, 2, 3, 4, 5]
      //   }
      // ],
      // 'order': [
      //   [get_format(f), 'asc']
      // ],
      // 'displayLength': 125,
      // 'drawCallback': function(settings) {
      //   var api = this.api();
      //   var rows = api.rows({
      //     page: 'current'
      //   }).nodes();
      //   var last = null;
      //
      //   api.column(get_format(f), {
      //     page: 'current'
      //   }).data().each(function(group, i) {
      //     if (last !== group) {
      //       $(rows).eq(i).before(
      //         '<tr class="group"><td colspan="7">' + group + '</td></tr>'
      //       );
      //
      //       last = group;
      //     }
      //   });
      // },
      fnInitComplete: function(oSettings, json) {
        $('.alert-info .glyphicon-remove').trigger("click");
      }
    });
  }

  $("body").delegate("#btn_cancel", "click", function() {
    $frmreport.data('formValidation').resetForm();
    $frmreport[0].reset();
    $("#print-report, ._print").addClass("hidden");
  });

  $("body").delegate("#btn_search", "click", function() {
    var url = base_url + "report/ajax_get_report",
      data = {
        current_yr: $('#tr_year').val()
      };
    otable(url, data);
  });

  function notify(title, content, type) {
    $('.form-group').removeClass('has-success');
    new PNotify({
      title: title,
      text: content,
      styling: 'bootstrap3',
      type: type,
      delay: 1500
    });
  }

  //FORM OBJECT
  // $.fn.serializeObject = function() {
  //   var o = {};
  //   var a = this.serializeArray();
  //   $.each(a, function() {
  //     if (o[this.name]) {
  //       if (!o[this.name].push) {
  //         o[this.name] = [o[this.name]];
  //       }
  //       o[this.name].push(this.value || '');
  //     } else {
  //       o[this.name] = this.value || '';
  //     }
  //   });
  //   return o;
  // };

});
