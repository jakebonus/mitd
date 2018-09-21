var dt_computerlist =  $('#dt_computerlist'),
    btn_savespecs =  document.getElementById('btn_savespecs'),
    ftr_office =  document.getElementById('ftr_office'),
    c_id =  document.getElementById('c_id'),
    id =  document.getElementById('id'),
    type =  document.getElementById('type'),
    brand =  document.getElementById('brand'),
    model =  document.getElementById('model'),
    serial =  document.getElementById('serial'),
    remarks =  document.getElementById('remarks'),
    dt_pcspecs =  $('#dt_pcspecs'),
    btn_ftrcomputer     = document.getElementById('btn_ftrcomputer'),
    ftr_office          = document.getElementById('ftr_office'),
    ftr_type            = document.getElementById('ftr_type'),
    ftr_propertycode    = document.getElementById('ftr_propertycode'),
    ftr_isonum          = document.getElementById('ftr_isonum'),
    ftr_os              = document.getElementById('ftr_os');
    offices_onselect = [];

  var offices = {
      url: base_url + "admin/ajax_get_office/",
      getValue: "code",
      requestDelay: 500,
      list: {
        match: {
              enabled: true
              },
        onSelectItemEvent: function() {
             var value = $("#c_office").getSelectedItemData().code;
                $("#c_office").val(value).trigger("change");
             },
        showAnimation: {
          type: "fade", //normal|slide|fade
          time: 400,
          callback: function() {}
        },
        hideAnimation: {
          type: "slide", //normal|slide|fade
          time: 400,
          callback: function() {}
        }
    }
  };


$.getJSON( base_url + "admin/ajax_get_office", function( data ) {
  offices_onselect.push( "<option value=''> - - - </option>" );
  $.each( data, function( key, val ) {
    offices_onselect.push( "<option value='" + val.code + "'>" + val.code + "</option>" );
  });
  $('#ftr_office').append(offices_onselect);
});

var $dt_computerlist = $('#dt_computerlist').dataTable({
  'ajax': {
    "type": "GET",
    "url": base_url + "admin/ajax_get_computers",
    "dataSrc": ""
  },
  fnCreatedRow: function(nRow, data, iDisplayIndex) {
     $(nRow).attr('data-c_id', data.c_id);
     $(nRow).attr('data-c_propertycode', data.c_propertycode);
   },
  'columns': [
    { "data": "c_propertycode"},
    { "data": "c_type"},
    { "data": "c_office"}
  ],

  'dom': '<"wrapper"Bfit>',
  'order': [
    [0, "desc"]
  ],
  'scrollY': '50vh',
  'scrollX': true,
  'scrollCollapse': true,
  'paging': false,
  'buttons': [
    {
    'text': '',
    'titleAttr': 'Add new computer',
    'className': 'fa fa-plus input-sm',
    action: function(e, dt, node, config) {
      addcomputer();
    }
  },
  {
    'text': '',
    'titleAttr': 'Edit',
    'className': 'fa fa-pencil input-sm',
    action: function(e, dt, node, config) {
      // $dt_computerlist.ajax.fnreload();
      // $('#dt_computerlist').DataTable().ajax.reload();
      updateEquipment();
    }
  },
  {
  'text': '',
  'titleAttr': 'Condemn',
  'className': 'fa fa-trash input-sm',
    action: function(e, dt, node, config) {
      condemncomputer();
      }
  },
    {
    'text': '',
    'extend': 'excelHtml5',
    'titleAttr': 'Export Excel',
    'className': 'fa fa-download input-sm',
    customize: function(xlsx) {
      var sheet = xlsx.xl.worksheets['sheet1.xml'];
      $('row c[r^="C"]', sheet).attr('s', '0');
    }
  },
  {
  'text': '',
  'titleAttr': 'Print',
  'className': 'fa fa-print input-sm',
    action: function(e, dt, node, config) {
        print_pcinfo();
      }
  }

],
  fnInitComplete: function(oSettings, json) {
    $('.alert-info .glyphicon-remove').trigger("click");
  }
});

function addcomputer(){
  $('#mdl_newpc').modal({
    backdrop: 'static',
    keyboard: false  // to prevent closing with Esc button (if you want this too)
  });


  $("#c_office").easyAutocomplete(offices);

  var btn_closenewpc  = document.getElementById('btn_closenewpc'),
      btn_savenewpc   = document.getElementById('btn_savenewpc'),
      c_office      = document.getElementById('c_office');

      $('#c_datedelivered').addClass('fdate');
      $('#c_condemdate').addClass('fdate');
      $('#c_cost').addClass('currency');

        $(".fdate").inputmask("9999-99-99", {
          "placeholder": "yyyy-mm-dd"
        });

        $('.currency').inputmask("numeric", {
          radixPoint: ".",
          groupSeparator: ",",
          digits: 4,
          autoGroup: true,
          prefix: '₱ ', //Space after $, this will not truncate the first character.
          rightAlign: false,
          oncleared: function () { self.Value(''); }
        });

}


function condemncomputer(){

  if ($('#dt_computerlist tbody tr').hasClass('selected') ) {
    $('#mdl_condempc').modal({
      backdrop: 'static',
      keyboard: false  // to prevent closing with Esc button (if you want this too)
    });

    var btn_closecondemnpc  = document.getElementById('btn_closecondemnpc'),
        btn_savecondemnpc   = document.getElementById('btn_savecondemnpc');

        $('#frm_condemnpc #c_id').val($('#dt_computerlist tbody').find('.selected').data('c_id'));

  }else{

  }

      $('#c_condemdate').addClass('fdate');
      $(".fdate").inputmask("9999-99-99", {
          "placeholder": "yyyy-mm-dd"
      });
}

function updateEquipment(){

  if ($('#dt_computerlist tbody tr').hasClass('selected') ) {

    $('#mdl_updatepc').modal({
      backdrop: 'static',
      keyboard: false  // to prevent closing with Esc button (if you want this too)
    });

    var btn_closeupdatepc  = document.getElementById('btn_closeupdatepc'),
        btn_saveupdatepc   = document.getElementById('btn_saveupdatepc');

        // $("#frm_updatenpc #c_office").append(offices_onselect);
        $("#frm_updatenpc #c_office").easyAutocomplete(offices);

        var c_id = $('#dt_computerlist tbody').find('.selected').data('c_id');
        $('#frm_updatenpc #c_id').val(c_id);

        getAjax(base_url + 'admin/ajax_get_pcinfo?id='+c_id, function(data) {
                var y = JSON.parse(data);
                // console.log(y[0].c_type);
                $('#frm_updatenpc #c_type').val(y[0].c_type);
                $('#frm_updatenpc #c_propertycode').val(y[0].c_propertycode);
                $('#frm_updatenpc #c_brand').val(y[0].c_brand);
                $('#frm_updatenpc #c_model').val(y[0].c_model);
                $('#frm_updatenpc #c_serial').val(y[0].c_serial);
                $('#frm_updatenpc #c_office').val(y[0].c_office);
                $('#frm_updatenpc #c_iso').val(y[0].c_iso);
                $('#frm_updatenpc #c_isonum').val(y[0].c_isonum);
                $('#frm_updatenpc #c_enduser').val(y[0].c_enduser);
                $('#frm_updatenpc #c_datedelivered').val(y[0].c_datedelivered);
                $('#frm_updatenpc #c_mrto').val(y[0].c_mrto);
                $('#frm_updatenpc #c_ipaddress').val(y[0].c_ipaddress);
                $('#frm_updatenpc #c_network').val(y[0].c_network);
                $('#frm_updatenpc #c_sourceoffund').val(y[0].c_sourceoffund);
                $('#frm_updatenpc #c_cost').val(y[0].c_cost);
                $('#frm_updatenpc #c_remarks').val(y[0].c_remarks);
              });

  }else{

  }

      $('#c_condemdate').addClass('fdate');
      $(".fdate").inputmask("9999-99-99", {
          "placeholder": "yyyy-mm-dd"
      });
}


btn_saveupdatepc.onclick = function(){
  var $is_processing  = $('body').find('.alert-info').length;
    if($is_processing == 0){
      notify('Processing', 'Please wait..', 'info', 9999999);
    var arr = $("#frm_updatenpc").serialize();
        postAjax(base_url + 'admin/save_computer/', arr,
           function(data) {
              $('.alert-info .glyphicon-remove').trigger("click");
              $('.alert-warning .glyphicon-remove').trigger("click");
             if (data.status == "yes") {
               notify('Success!', data.content, 'success', 3000);
               close_updatepc();
              $('#dt_computerlist').DataTable().ajax.reload();
             } else {
               notify('Failed!', data.content, 'danger', 3000);
             }
           }
         );
    }
}

btn_savenewpc.onclick = function(){
  var $is_processing  = $('body').find('.alert-info').length;
  // var mdl_masterid   = document.getElementById('mdl_masterid');
  // if(mdl_masterid.value.length > 0){
    if($is_processing == 0){
      notify('Processing', 'Please wait..', 'info', 9999999);
    var arr = $("#frm_newpc").serialize();
        postAjax(base_url + 'admin/save_computer/', arr,
           function(data) {
              $('.alert-info .glyphicon-remove').trigger("click");
              $('.alert-warning .glyphicon-remove').trigger("click");
             if (data.status == "yes") {
               notify('Success!', data.content, 'success', 3000);
               close_newpc();
              $('#dt_computerlist').DataTable().ajax.reload();
             } else {
               notify('Failed!', data.content, 'danger', 3000);
             }
           }
         );
    }
}

btn_savespecs.onclick = function(){
  var $is_processing  = $('body').find('.alert-info').length;
  // var mdl_masterid   = document.getElementById('mdl_masterid');
  // if(mdl_masterid.value.length > 0){
    if($is_processing == 0){
      notify('Processing', 'Please wait..', 'info', 9999999);
    var arr = $("#frm_pcspecs").serialize();
        postAjax(base_url + 'admin/save_pc_specs/', arr,
           function(data) {
              $('.alert-info .glyphicon-remove').trigger("click");
              $('.alert-warning .glyphicon-remove').trigger("click");
             if (data.status == "yes") {
               notify('Success!', data.content, 'success', 3000);
               var id = c_id.value;
               url = base_url + 'admin/ajax_get_pcspecs?id='+id;
                   dt_pcspecs.dataTable().fnClearTable();
                   dt_pcspecs.dataTable().fnDestroy();
                   get_pcspecs(url);
             } else {
               notify('Failed!', data.content, 'danger', 3000);
             }
           }
         );
    }
  // }else{
  //   notify('Failed!', 'Please select Senior Citizen President!', 'danger', 3000);
  //   return false;
  // }
}

btn_savecondemnpc.onclick = function(){
  var $is_processing  = $('body').find('.alert-info').length;
    if($is_processing == 0){
      notify('Processing', 'Please wait..', 'info', 9999999);
    var arr = $("#frm_condemnpc").serialize();
        postAjax(base_url + 'admin/ajax_update_computer/', arr,
           function(data) {
              $('.alert-info .glyphicon-remove').trigger("click");
              $('.alert-warning .glyphicon-remove').trigger("click");
             if (data.status == "yes") {
               notify('Success!', data.content, 'success', 3000);
               close_codemnpc();
               $('#dt_computerlist').DataTable().ajax.reload();
             } else {
               notify('Failed!', data.content, 'danger', 3000);
             }
           }
         );
    }
  // }else{
  //   notify('Failed!', 'Please select Senior Citizen President!', 'danger', 3000);
  //   return false;
  // }
}


function close_updatepc(){
  $('#mdl_updatepc').modal('toggle');
  $("#frm_updatenpc")[0].reset();
}

function close_newpc(){
  $('#mdl_newpc').modal('toggle');
  $("#c_office").empty();
}

function close_codemnpc(){
  $('#mdl_condempc').modal('toggle');
  $("#frm_condemnpc")[0].reset();
}

function close_pcinfo(){
  $('#mdl_pcinfo').modal('toggle');
  // $("#frm_condemnpc")[0].reset();
}

function get_pcspecs(url){
  dt_pcspecs.dataTable({
    'ajax': {
      "type": "GET",
      "url": url,
      "dataSrc": ""
    },
    fnCreatedRow: function(nRow, data, iDisplayIndex) {
       $(nRow).attr('data-id', data.id);
     },
    'columns': [
      { "data": "type"},
      { "data": "brand"},
      { "data": "model"},
      { "data": "serial"},
      { "data": "remarks"},
    ],
    'dom': '<"wrapper"Bfit>',
    'order': [
      [0, "desc"]
    ],
    'scrollY': '25vh',
    'scrollX': true,
    'scrollCollapse': true,
    'paging': false,
    'buttons': [
      {
      'text': '',
      'extend': 'excelHtml5',
      'titleAttr': 'Export Excel',
      'className': 'fa fa-download',
      customize: function(xlsx) {
        var sheet = xlsx.xl.worksheets['sheet1.xml'];
        $('row c[r^="C"]', sheet).attr('s', '0');
      }
    },
    {
      'text': '',
      'extend': 'print',
      'titleAttr': 'Print',
      'className': 'fa fa-print',
      'exportOptions': {
        'columns': ':visible'
      },
    },
    {
      'text': '',
      'titleAttr': 'Refresh',
      'className': 'fa fa-refresh',
      action: function(e, dt, node, config) {
        $('#dt_pcspecs').DataTable().ajax.reload();
          id.value = '';
          type.value    =  '';
         brand.value   =  '';
         model.value   =  '';
         serial.value  =  '';
         remarks.value =   '';
      }
    }
  ],
    fnInitComplete: function(oSettings, json) {
      $('.alert-info .glyphicon-remove').trigger("click");
    }
  });
  // var dt_pcspecs_body = $('#dt_pcspecs tbody');
}

function print_pcinfo(){
  if ($('#dt_computerlist tbody tr').hasClass('selected') ) {

    $('#mdl_pcinfo').modal({
      backdrop: 'static',
      keyboard: false  // to prevent closing with Esc button (if you want this too)
    });

    var unit_id = $('#dt_computerlist tbody').find('.selected').data('c_id'),
        propcode = $('#dt_computerlist tbody').find('.selected').data('c_propertycode'),

        btn_closepcinfo = document.getElementById('btn_closepcinfo'),
        btn_printpcinfo = document.getElementById('btn_printpcinfo'),

        propertycode = document.getElementById('propertycode'),
        office = document.getElementById('office'),
        enduser = document.getElementById('enduser'),
        processor = document.getElementById('processor'),
        harddisk = document.getElementById('harddisk'),
        ram = document.getElementById('ram'),
        mboard = document.getElementById('mboard'),
        opticaldrive = document.getElementById('opticaldrive'),
        graphicscard = document.getElementById('graphicscard'),
        lan = document.getElementById('lan'),
        other = document.getElementById('other'),
        monitor = document.getElementById('monitor'),
        mouse = document.getElementById('mouse'),
        keyboard = document.getElementById('keyboard'),
        printer = document.getElementById('printer'),
        specs = document.getElementById('specs'),
        unithistor = document.getElementById('unithistor'),
        avr = document.getElementById('avr');

        getAjax(base_url + 'admin/ajax_get_pcinfo?id='+unit_id, function(data) {
                var y = JSON.parse(data);
                var propcode = y[0].c_propertycode;
                propertycode.innerHTML  = '<strong>'+y[0].c_propertycode+'</strong>';
                office.innerHTML        = 'OFFICE:<strong>'+y[0].c_office+'</strong>';
                enduser.innerHTML       = 'END USER:<strong>'+y[0].c_enduser+'</strong>';

              });
    getAjax(base_url + 'admin/ajax_get_pcspecs_forindexcard?id='+unit_id, function(data) {
            var x = JSON.parse(data);

            console.log(x[0].type);
            for (i = 0; i < x.length; i++) {
                    if(x[i].type == 'PROCESSOR'){
                      processor.innerHTML = '<i style="width: 130px !important; display: inline-block !important;">'+x[i].type+':</i> <strong>'+x[i].specs+'</strong>';
                    }
                    if(x[i].type == 'HDD' || x.type == 'SSD'){
                      harddisk.innerHTML =  '<i style="width: 130px !important; display: inline-block !important;">'+x[i].type+':</i> <strong>'+x[i].specs+'</strong>';
                    }
                    if(x[i].type == 'RAM'){
                      ram.innerHTML =  '<i style="width: 130px !important; display: inline-block !important;">'+x[i].type+':</i> <strong>'+x[i].specs+'</strong>';
                    }
                    if(x[i].type == 'MOTHERBOARD'){
                      mboard.innerHTML = '<i style="width: 130px !important; display: inline-block !important;">'+x[i].type+':</i> <strong>'+x[i].specs+'</strong>';
                    }
                    if(x[i].type == 'OPTICAL DRIVE'){
                      opticaldrive.innerHTML = '<i style="width: 130px !important; display: inline-block !important;">'+x[i].type+':</i> <strong>'+x[i].specs+'</strong>';
                    }
                    if(x[i].type == 'GRAPHICS CARD'){
                      graphicscard.innerHTML = '<i style="width: 130px !important; display: inline-block !important;">'+x[i].type+':</i> <strong>'+x[i].specs+'</strong>';
                    }
                    if(x[i].type == 'LAN CARD'){
                      lan.innerHTML = '<i style="width: 130px !important; display: inline-block !important;">'+x[i].type+':</i> <strong>'+x[i].specs+'</strong>';
                    }
                    if(x[i].type == 'OTHERS'){
                      other.innerHTML = '<i style="width: 130px !important; display: inline-block !important;">'+x[i].type+':</i> <strong>'+x[i].specs+'</strong>';
                    }
                    if(x[i].type == 'MONITOR'){
                      monitor.innerHTML = '<i style="width: 130px !important; display: inline-block !important;">'+x[i].type+':</i> <strong>'+x[i].specs+'</strong>';
                    }
                    if(x[i].type == 'MOUSE'){
                      mouse.innerHTML = '<i style="width: 130px !important; display: inline-block !important;">'+x[i].type+':</i> <strong>'+x[i].specs+'</strong>';
                    }
                    if(x[i].type == 'KEYBOARD'){
                      keyboard.innerHTML = '<i style="width: 130px !important; display: inline-block !important;">'+x[i].type+':</i> <strong>'+x[i].specs+'</strong>';
                    }
                    if(x[i].type == 'PRINTER'){
                      printer.innerHTML = '<i style="width: 130px !important; display: inline-block !important;">'+x[i].type+':</i> <strong>'+x[i].specs+'</strong>';
                    }
                    if(x[i].type == 'UPS/AVR'){
                      avr.innerHTML = '<i style="width: 130px !important; display: inline-block !important;">'+x[i].type+':</i> <strong>'+x[i].specs+'</strong>';
                    }
                }
    });

      getAjax(base_url + 'admin/ajax_get_unithistory?propcode='+propcode, function(data) {
              var z = JSON.parse(data);
                unithistor.innerHTML  = '';
                var a = ''
              for (i = 0; i < z.length; i++) {
                a  += '<tr>';
                a  += '<td class="workbreak">'+z[i].s_date+'</td>';
                a  += '<td class="workbreak">'+z[i].s_remarks+'</td>';
                a  += '<td class="workbreak">'+z[i].s_personnel+'</td>';
                a  += '<td class="workbreak">'+z[i].c_office+' - '+z[i].c_enduser+'</td>';
                a  += '</tr>';
              }
                unithistor.innerHTML = a;

      });
  }else{

  }
}

function printDiv(printthis) {
 var printContents = document.getElementById('printthis').innerHTML;
 var originalContents = document.body.innerHTML;

 document.body.innerHTML = printContents;

 window.print();

 document.body.innerHTML = originalContents;
}

$(document).ready(function(){
  // load f
  var url = base_url + "admin/ajax_get_pcspecs?id=0";
  get_pcspecs(url);

  $('#dt_computerlist tbody').on( 'click', 'tr', function () {
    $('#frm_pcspecs')[0].reset();
      if ($(this).hasClass('selected') ) {
          $(this).removeClass('selected');
          c_id.value = '';
          dt_pcspecs.dataTable().fnClearTable();
      }else {
          $('#dt_computerlist').DataTable().$('tr.selected').removeClass('selected');
          $(this).toggleClass('selected');
  var id = $(this).data('c_id'),
      url = base_url + 'admin/ajax_get_pcspecs?id='+id;
          c_id.value = id;
          dt_pcspecs.dataTable().fnClearTable();
          dt_pcspecs.dataTable().fnDestroy();
          get_pcspecs(url);
      }
  });

$('#dt_pcspecs tbody').on( 'click', 'tr', function () {
      if ($(this).hasClass('selected')) {
          $(this).removeClass('selected');
          id.value = '';
          type.value    =  '';
         brand.value   =  '';
         model.value   =  '';
         serial.value  =  '';
         remarks.value =   '';
      }else {
          dt_pcspecs.$('tr.selected').removeClass('selected');
          $(this).toggleClass('selected');
          var a = $(this).data('id');
          id.value = a;
          getAjax(base_url + 'admin/get_pcdetails?id='+a, function(data) {
                  var x = JSON.parse(data);
                      type.value    =  x.type;
                     brand.value   =  x.brand;
                     model.value   =  x.model;
                     serial.value  =  x.serial;
                     remarks.value =  x.remarks;
          });
      }
  });
  btn_closeupdatepc.onclick = function() {
    close_updatepc();
  }
  btn_closenewpc.onclick = function(){
    close_newpc();
  }

  btn_closecondemnpc.onclick = function(){
    close_codemnpc();
  }

  btn_closepcinfo.onclick = function(){
    close_pcinfo();
  }


  btn_ftrcomputer.onclick = function(){
    var ftr = {
      ftr_office		    : ftr_office.value,
      ftr_type		      : ftr_type.value,
      ftr_propertycode	: ftr_propertycode.value,
      ftr_isonum        : ftr_isonum.value,
      // ftr_processor     : ftr_processor.value,
      ftr_condemn       : ftr_condemn.value,
      // ftr_os            : ftr_os.value,
    }

    $('#dt_computerlist').dataTable().fnClearTable();
    $('#dt_computerlist').dataTable().fnDestroy();
    dt_computerlist = $('#dt_computerlist').DataTable({
      'ajax': {
        "url": base_url + 'admin/get_complist/',
        "dataSrc": 'result',
        "type": 'POST',
        "data": ftr
      },
      fnCreatedRow: function(nRow, data, iDisplayIndex) {
         $(nRow).attr('data-c_id', data.c_id);
         $(nRow).attr('data-c_propertycode', data.c_propertycode);
       },
      'columns': [
        { "data": "c_propertycode"},
        { "data": "c_type"},
        { "data": "c_office"}
      ],

      'dom': '<"wrapper"Bfit>',
      'order': [
        [0, "desc"]
      ],
      'scrollY': '50vh',
      'scrollX': true,
      'scrollCollapse': true,
      'paging': false,
      'buttons': [
        {
        'text': '',
        'titleAttr': 'Add new computer',
        'className': 'fa fa-plus input-sm',
        action: function(e, dt, node, config) {
          addcomputer();
        }
      },
      {
        'text': '',
        'titleAttr': 'Edit',
        'className': 'fa fa-pencil input-sm',
        action: function(e, dt, node, config) {
          updateEquipment();
        }
      },
      {
      'text': '',
      'titleAttr': 'Condemn',
      'className': 'fa fa-trash input-sm',
        action: function(e, dt, node, config) {
          condemncomputer();
          }
      },
        {
        'text': '',
        'extend': 'excelHtml5',
        'titleAttr': 'Export Excel',
        'className': 'fa fa-download input-sm',
        customize: function(xlsx) {
          var sheet = xlsx.xl.worksheets['sheet1.xml'];
          $('row c[r^="C"]', sheet).attr('s', '0');
        }
      },
      {
      'text': '',
      'titleAttr': 'Print',
      'className': 'fa fa-print input-sm',
        action: function(e, dt, node, config) {
            print_pcinfo();
          }
      },
      // {
      //   'text': '',
      //   'titleAttr': 'Refresh',
      //   'className': 'fa fa-refresh input-sm',
      //   action: function(e, dt, node, config) {
      //     // $dt_computerlist.ajax.fnreload();
      //     $('#dt_computerlist').DataTable().ajax.reload();
      //   }
      // }
      ],
      fnInitComplete: function(oSettings, json) {
        $('.alert-info .glyphicon-remove').trigger("click");
      }
    });
  }
});
