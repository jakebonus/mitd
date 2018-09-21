var $s_id = '';
var $personnel = '';
var $p_id = '';
var $office = '';
var $concern = '';

$('#dt_personnel').DataTable({
  "ajax": {
    "url": base_url + "admin/ajax_get_personnel/",
    "dataSrc": ""
  },
  "columns": [{
    "data": "p_nickname"
  }],
  fnCreatedRow: function(nRow, data, iDisplayIndex) {
     $(nRow).attr('data-p_id', data.p_id);
     $(nRow).attr('data-personnel', data.personnel);
     $(nRow).attr('data-p_id', data.p_id);
   },
  deferRender: true,
  scrollY: 650,
  paging: false,
  scrollCollapse: true,
  scroller: true,
  scrollX: true,
  fixedColumns: {
    leftColumns: 1,
    rightColumns: 1
  },
  autoWidth: false,
});

$('#dt_personnel tbody').on( 'click', 'tr', function () {
    if ($(this).hasClass('selected') ) {
        $(this).removeClass('selected');
        $personnel = '';
        $p_id = '';
    }else {
        $('#dt_personnel').DataTable().$('tr.selected').removeClass('selected');
        $(this).toggleClass('selected');
        $personnel = $(this).data('personnel');
        $p_id = $(this).data('p_id');
    }
});

$('#dt_office').DataTable({
  "ajax": {
    "url": base_url + "admin/ajax_get_office/",
    "dataSrc": ""
  },
  "columns": [
    { "data": function(data, type, row, meta) {
      if(data.o_telnum == null || data.o_telnum == ""){
          return data.code;
      }else{
          return data.code+ '<small> (' +data.o_telnum+ ') </small>';
      }
      }
    }
  ],
  fnCreatedRow: function(nRow, data, iDisplayIndex) {
     $(nRow).attr('data-office', data.code);
   },
  deferRender: true,
  scrollY: 650,
  paging: false,
  scrollCollapse: true,
  scroller: true,
  scrollX: true,
  fixedColumns: {
    leftColumns: 1,
    rightColumns: 1
  },
  autoWidth: false,
  select: true
});

$('#dt_office tbody').on( 'click', 'tr', function () {
    if ($(this).hasClass('selected') ) {
        $(this).removeClass('selected');
        $office = '';
    }else {
        $('#dt_office').DataTable().$('tr.selected').removeClass('selected');
        $(this).toggleClass('selected');
        $office = $(this).data('office');
    }
});

$('#dt_concern').DataTable({
  deferRender: true,
  scrollY: 650,
  paging: false,
  scrollCollapse: true,
  scroller: true,
  scrollX: true,
  autoWidth: false,
  select: true
});

$('#dt_concern tbody').on( 'click', 'tr', function () {
    if ($(this).hasClass('selected') ) {
        $(this).removeClass('selected');
        $concern = '';
    }else {
        $('#dt_concern').DataTable().$('tr.selected').removeClass('selected');
        $(this).toggleClass('selected');
        $concern = $(this).data('concern');
    }
});

var dt_monitoringpe1rsonnel =   $('#dt_monitoringpe1rsonnel').DataTable({
       'ajax': {
         "url": base_url + "services.txt",
         'dataSrc': ""
       },
       'columns': [
         {"data": "s_personnel"},
         {"data": "s_office"},
         {"data": "s_concern"}
       ],
       'info': false,
       'scrollY': 600,
       'scrollX': true,
       'scrollCollapse': true,
       'paging': false,
       autoWidth: false,
      'initComplete': function(settings){
            var api = new $.fn.dataTable.Api( settings );
            setInterval( function () {
                api.ajax.reload();
            }, 1000);
        },
     });



//------------- JavaScript -------------------------------------//

var _btn_save = document.getElementById('btn_save_service');
_btn_save.onclick = function() {
var service = {
  p_id		    : $p_id,
  personnel		: $personnel,
  office      : $office,
  concern     : $concern,
}
    notify('Processing', 'Please wait..', 'info', 999999);
    postAjax(base_url + 'admin/save_service',service,
      function(data) {
        $('.alert-info .glyphicon-remove').trigger("click");
        $('.alert-warning .glyphicon-remove').trigger("click");
        $('.alert-success .glyphicon-remove').trigger("click");
        if (data.status == "yes") {
          $('#dt_concern tbody').removeClass('selected');
          notify('Success!', data.content, 'success', 1500);
          $('#dt_office').DataTable().$('tr.selected').removeClass('selected');
          $('#dt_personnel').DataTable().$('tr.selected').removeClass('selected');
          $('#dt_concern').DataTable().$('tr.selected').removeClass('selected');
          _frm_service.reset();
          $personnel = '';
          $office = '';
          $concern = '';
        } else {
          notify('Failed!', data.content, 'warning', 9999);
            _frm_service.reset();
        }
      }
    );
	return false;
};
