
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

$('#s_office').easyAutocomplete(offices);


$.getJSON(base_url + "admin/ajax_get_personnel", function(data) {
  $("#s_personnel").empty();
  $("#s_personnel").append("<option value=''>- Choose -</option>");
	 $.each(data, function(index, item) {
     $("#s_personnel").append("<option value='"+item.p_id+"'>"+item.personnel+"</option>");
	 });
});

$.getJSON(base_url + "admin/ajax_get_personnel", function(data) {
  $("#s_pulloutby").empty();
  $("#s_pulloutby").append("<option value=''>- Choose -</option>");
	 $.each(data, function(index, item) {
     $("#s_pulloutby").append("<option value='"+item.p_id+"'>"+item.personnel+"</option>");
	 });
});

// $.getJSON(base_url + "admin/ajax_get_office", function(data) {
//   $("#s_office").empty();
//   $("#s_office").append("<option value=''>- Choose -</option>");
// 	 $.each(data, function(index, item) {
//      $("#s_office").append("<option value='"+item.code+"'>"+item.code+"</option>");
// 	 });
// });
// var dt_service = document.getElementById('dt_service');
var dt_service =  $('#dt_service').DataTable({
       'ajax': {
//         "url": base_url + "admin/ajax_get_services",
         "url": base_url + "services.txt",
         'dataSrc': ""
       },
       'columns': [
         {"data": "s_personnel"},
         {"data": "s_office"},
         {"data": "s_type"}
       ],
       "deferRender": true,
       "scrollY": 600,
       "scrollX": true,
       "scroller": true,
       "scrollCollapse": true,
       "paging": false,
       "autoWidth": false,
       "bInfo" : false,

       fnCreatedRow: function(nRow, data, iDisplayIndex) {
          $(nRow).attr('data-sp_id', data.sp_id);
          $(nRow).attr('data-s_id', data.s_id);
          $(nRow).attr('data-s_date', data.s_date);
          $(nRow).attr('data-s_office', data.s_office);
          $(nRow).attr('data-s_personnel', data.s_personnel);
          $(nRow).attr('data-p_id', data.p_id);
          $(nRow).attr('data-s_concern', data.s_concern);
          $(nRow).attr('data-s_ongoing', data.s_ongoing);

          $(nRow).attr('data-s_type', data.s_type);
          $(nRow).attr('data-s_thru', data.s_thru);
          $(nRow).attr('data-s_timestart', data.s_timestart);
          $(nRow).attr('data-s_timeend', data.s_timeend);
          $(nRow).attr('data-s_remarks', data.s_remarks);
          $(nRow).attr('data-c_propertycode', data.c_propertycode);
        }
     });

     $('#dt_service tbody').on( 'click', 'tr', function () {
         if ($(this).hasClass('selected') ) {
             $(this).removeClass('selected');
             // $s_id = '';
              _frm_service.reset();
             UnSelectAll();
             $('#frm_service #s_id').val('');
         }else {
             dt_service.$('tr.selected').removeClass('selected');
             $(this).toggleClass('selected');
             
             $('#frm_service #s_pulloutby').val($(this).data('sp_id'));
             $('#frm_service #s_id').val($(this).data('s_id'));
             $('#frm_service #s_date').val($(this).data('s_date'));
             $('#frm_service #s_office').val($(this).data('s_office'));
             $('#frm_service #s_personnel').val($(this).data('p_id'));
             $('#frm_service #s_concern').val($(this).data('s_concern'));
             $('#frm_service #s_ongoing').val($(this).data('s_ongoing'));

             retrieveServiceType($(this).data('s_type'));
//                 var str = $(this).data('s_type');
//            var temp = new Array();
//             temp = str.split(",");
//            for (i=0; i!=temp.length;i++) {
//                var checkbox = $("input[id='s_type[]'][value='"+temp[i]+"']");
//                    checkbox.attr("checked","checked");
//            }
             
             $('#frm_service #s_thru').val($(this).data('s_thru'));
             $('#frm_service #s_timestart').val($(this).data('s_timestart'));
             $('#frm_service #s_timeend').val($(this).data('s_timeend'));
             $('#frm_service #s_remarks').val($(this).data('s_remarks'));
             $('#frm_service #c_propertycode').val($(this).data('c_propertycode'));
         }
     });


var      _frm_service = document.getElementById('frm_service');
var     _btn_reset    = document.getElementById('btn_reset');
_btn_reset.onclick = function(e) {
    _frm_service.reset();
};

var _btn_del    = document.getElementById('btn_del');
var _s_id    = document.getElementById('s_id');

_btn_del.onclick = function(e) {
    $('.alert-warning .glyphicon-remove').trigger("click");
    notify('Processing', 'Please wait..', 'info', 999999);
  if(_s_id.value == '' || _s_id.value == null){
    $('.alert-info .glyphicon-remove').trigger("click");
    notify('Information!','No selected record!', 'warning', 150);
  }else{

  }
};


var btn_save_new_service = document.getElementById('btn_save_new_service');
btn_save_new_service.onclick = function(){

  var s_personnel = document.getElementById('s_personnel');
  var a = s_personnel.options[s_personnel.selectedIndex].text;

  var s_pulloutby = document.getElementById('s_pulloutby');
  var b = s_pulloutby.options[s_pulloutby.selectedIndex].text;
  
  notify('Processing', 'Please wait..', 'info', 999999);
  
  postAjax(base_url + 'admin/update_service',$('#frm_service').serialize()+'&pname='+a+'&pbyname='+b,
    function(data) {
      $('.alert-info .glyphicon-remove').trigger("click");
      $('.alert-warning .glyphicon-remove').trigger("click");
      $('.alert-success .glyphicon-remove').trigger("click");
      if (data.status == "yes") {
        notify('Success!', data.content, 'success', 1500);
          _frm_service.reset();
          UnSelectAll();
          dt_service.ajax.reload();
      } else {
        notify('Failed!', data.content, '', 9999);
          _frm_service.reset();
      }
    }
  );
  	return false;
}

var propertycode = {
              url: base_url + "resources/countries.json",
                getValue: "name",
               list: {
                 match: {
                   enabled: true
                 }
               },

               theme: "square"
              }

function selectAll() {
        var items = document.getElementsByName('s_type[]');
        for (var i = 0; i < items.length; i++) {
            if (items[i].type == 'checkbox')
                items[i].checked = true;
        }
    }
    
function UnSelectAll() {
    var items = document.getElementsByName('s_type[]');
        for (var i = 0; i < items.length; i++) {
            items[i].removeAttribute("checked");
        }

}

function retrieveServiceType(data){
            var str = data;
            var temp = new Array();
             temp = str.split(",");
            for (i=0; i!=temp.length;i++) {
                var checkbox = $("input[id='s_type[]'][value='"+temp[i]+"']");
                    checkbox.attr("checked","checked");
            }
}

