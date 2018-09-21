$.getJSON(base_url + "admin/ajax_get_personnel", function(data) {
  $("#p_id").empty();
  $("#p_id").append("<option value=''>- Choose -</option>");
	 $.each(data, function(index, item) {
     $("#p_id").append("<option value='"+item.p_id+"'>"+item.personnel+"</option>");
	 });
});

$.getJSON(base_url + "admin/ajax_get_office", function(data) {
  $("#office").empty();
  $("#office").append("<option value=''>- Choose -</option>");
	 $.each(data, function(index, item) {
     $("#office").append("<option value='"+item.code+"'>"+item.code+"</option>");
	 });
});

var btn_save_newproject = document.getElementById('btn_save_newproject'),
    btn_reset           = document.getElementById('btn_reset'),
    // frm_projects           = document.getElementById('frm_projects'),
    btn_del             = document.getElementById('btn_del');



var dt_projects =  $('#dt_projects').DataTable({
       'ajax': {
         "url": base_url + "admin/ajax_get_projects",
         'dataSrc': ""
       },
       'columns': [
         {"data": "p_name"},
         {"data": "name"},
         {"data": "status"}
       ],
       "deferRender": true,
       "scrollY": 600,
       "scrollX": true,
       "scroller": true,
       "scrollCollapse": true,
       "paging": false,
       "autoWidth": false,
       "bInfo" : false,
       // 'initComplete': function(settings){
       //       var api = new $.fn.dataTable.Api( settings );
       //       setInterval( function () {
       //           api.ajax.reload();
       //       }, 3000);
       //   },
       fnCreatedRow: function(nRow, data, iDisplayIndex) {
          $(nRow).attr('data-id', data.id);
          $(nRow).attr('data-p_id', data.p_id);
          $(nRow).attr('data-name', data.name);
          $(nRow).attr('data-status', data.status);
          $(nRow).attr('data-office', data.office);
          $(nRow).attr('data-devstart', data.devstart);
          $(nRow).attr('data-deadline', data.deadline);
          $(nRow).attr('data-remarks', data.remarks);
        }
     });



     $( document ).ready(function() {
       btn_save_newproject.onclick = function(){
         var p_name = p_id.options[p_id.selectedIndex].text;
         notify('Processing', 'Please wait..', 'info', 999999);
         var arr = $('#frm_projects').serialize()+'&p_name='+p_name;
         postAjax(base_url + 'admin/save_project',arr,
           function(data) {
             $('.alert-info .glyphicon-remove').trigger("click");
             $('.alert-warning .glyphicon-remove').trigger("click");
             $('.alert-success .glyphicon-remove').trigger("click");
             if (data.status == "yes") {
               notify('Success!', data.content, 'success', 1500);
                 $('#frm_projects')[0].reset();
                 dt_projects.ajax.reload();
             } else {
               notify('Failed!', data.content, '', 9999);
             }
           }
         );
         	return false;
       }

       $('#dt_projects tbody').on( 'click', 'tr', function () {
           if ($(this).hasClass('selected') ) {
               $(this).removeClass('selected');
               $('#frm_projects #id').val('');
           }else {
                $('#dt_projects tr.selected').removeClass('selected');
               $(this).toggleClass('selected');
               $('#frm_projects #id').val($(this).data('id'));
               $('#frm_projects #p_id').val($(this).data('p_id'));
               $('#frm_projects #name').val($(this).data('name'));
               $('#frm_projects #status').val($(this).data('status'));
               $('#frm_projects #office').val($(this).data('office'));
               $('#frm_projects #devstart').val($(this).data('devstart'));
               $('#frm_projects #deadline').val($(this).data('deadline'));
               $('#frm_projects #remarks').val($(this).data('remarks'));
           }
       });
     });

btn_reset.onclick = function(){
form_reset();
}

function form_reset(){
  $('#frm_projects')[0].reset();
}
