document.addEventListener("DOMContentLoaded", function(event) {
  var ftr_office = [];
  $.getJSON( base_url + "admin/ajax_get_office", function( data ) {
    $.each( data, function( key, val ) {
      ftr_office.push( "<option value='" + val.code + "'>" + val.code + "</option>" );
    });
    $("#ftr_office").append(ftr_office);
  });

  var ftr_processor = [];
  $.getJSON( base_url + "admin/ajax_get_processor", function( data ) {
    $.each( data, function( key, val ) {
      ftr_processor.push( "<option value='" + val.proscessor + "'>" + val.proscessor + "</option>" );
    });
    $("#ftr_processor").append(ftr_processor);
  });

  var ftr_os = [];
  $.getJSON( base_url + "admin/ajax_get_os", function( data ) {
    $.each( data, function( key, val ) {
      ftr_os.push( "<option value='" + val.os + "'>" + val.os + "</option>" );
    });
    $("#ftr_os").append(ftr_os);
  });

// -----------------------------------------------------

// $('#btn_pcdetails').on('click', function(){
  // $('#mdl_pcdetails').modal('show');
// });



});

var dt_complist = $('#dt_complist').DataTable({
  ajax: {
    url: base_url + 'admin/get_complist/',
    dataSrc: 'result'
  },
  createdRow: function( row, data, dataIndex ) {
    $(row).find('td').attr('data-id', data.c_id);
  },
  columns: [
    {data: "c_office" },
    {data: "c_propertycode"},
    {data: "c_isonum"},
    {data: "c_prosmodel"},
    {data: "c_enduser"},
    {data: "c_mrto"},
    {data: function(data, type, row, meta) {
        return '<a id="btn_pcdetails" data-toggle="modal" data-target="#modal_pcdetails" data-id="'+data.c_id+'"><i class="fa fa-info"></i> View Details </a>'
    }
    }
  ],
  dom: 'Bfrtip',
    buttons: [
        'excel', 'pdf', 'print'
    ],
  deferRender: true,
  scrollY: 400,
  paging: false,
  scrollCollapse: true,
  scroller: true,
  scrollX: true,
  autoWidth: false,
});

var btn_ftrcomputer = document.getElementById('btn_ftrcomputer'),
ftr_office          = document.getElementById('ftr_office'),
ftr_propertycode    = document.getElementById('ftr_propertycode'),
ftr_isonum          = document.getElementById('ftr_isonum'),
ftr_processor       = document.getElementById('ftr_processor'),
ftr_condemn         = document.getElementById('ftr_condemn'),
ftr_os              = document.getElementById('ftr_os');

btn_ftrcomputer.onclick = function(){
  var ftr = {
    ftr_office		    : ftr_office.value,
    ftr_propertycode	: ftr_propertycode.value,
    ftr_isonum        : ftr_isonum.value,
    ftr_processor     : ftr_processor.value,
    ftr_condemn       : ftr_condemn.value,
    ftr_os            : ftr_os.value,
  }

  dt_complist.destroy();
  dt_complist = $('#dt_complist').DataTable({
    ajax: {
      url: base_url + 'admin/get_complist/',
      dataSrc: 'result',
      type: 'POST',
      data: ftr
    },

    createdRow: function( row, data, dataIndex ) {
      $(row).find('td').attr('data-id', data.c_id);
    },

    columns: [
      {data: "c_office" },
      {data: "c_propertycode"},
      {data: "c_isonum"},
      {data: "c_prosmodel"},
      {data: "c_enduser"},
      {data: "c_mrto"},
      {data: function(data, type, row, meta) {
          return '<a id="btn_pcdetails" data-toggle="modal" data-target="#modal_pcdetails"  data-id="'+data.c_id+'"><i class="fa fa-info"></i> View Details </a>';
      }}
    ],
    dom: 'Bfrtip',
      buttons: [
          'excel', 'pdf', 'print'
      ],
    deferRender: true,
    scrollY: 400,
    paging: false,
    scrollCollapse: true,
    scroller: true,
    scrollX: true,
    autoWidth: false,
  });
}


// $('#modal_pcdetails').on('shown.bs.modal', function (e) {
//   // var id = $(this).data("id");
//   var id = $(e.relatedTarget).data('id');
//
//   var propertycode = document.getElementById('propertycode');
//   var c_isonum = document.getElementById('c_isonum');
//   var c_office = document.getElementById('c_office');
//   var c_enduser = document.getElementById('c_enduser');
//   var pros = document.getElementById('pros');
//
//   $.getJSON( base_url + "admin/get_pcdetails/"+id, function( data ) {
//     $.each( data, function( key, val ) {
//         propertycode.innerHTML = val.c_propertycode;
//         pros.value = val.c_prosmade+' '+val.c_prosmodel;
//         c_isonum.value = val.c_isonum;
//         c_office.value = val.c_office;
//         c_enduser.value = val.c_enduser;
//     });
//   });
//
//
// })
// $(function() {
  // var btn_pcdetails = document.getElementById('btn_pcdetails');

// });
