$('#p_mname').on('focusout', function(){
  var x = $('#p_mname').val();
  $('#p_mi').val(x.charAt(0));


});

var dt_personnellist =  $('#dt_personnellist').DataTable({
       'ajax': {
         "url": base_url + "admin/ajax_get_personnel",
         'dataSrc': ""
       },
       'columns': [
         {"data": "personnel"},
         {"data": "p_status"},
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
          $(nRow).attr('data-p_id', data.p_id);
          $(nRow).attr('data-p_fname', data.p_fname);
          $(nRow).attr('data-p_mname', data.p_mname);
          $(nRow).attr('data-p_mi', data.p_mi);
          $(nRow).attr('data-p_lname', data.p_lname);
          $(nRow).attr('data-p_next', data.p_next);
          $(nRow).attr('data-p_position', data.p_position);
          $(nRow).attr('data-p_section', data.p_section);
          $(nRow).attr('data-p_nickname', data.p_nickname);
          $(nRow).attr('data-p_mobilenum', data.p_mobilenum);
          $(nRow).attr('data-p_status', data.p_status);
          $(nRow).attr('data-p_active', data.p_active);
        }
     });

     $('#dt_personnellist tbody').on( 'click', 'tr', function () {
         if ($(this).hasClass('selected') ) {
             $(this).removeClass('selected');
             frm_personnel.reset();
         }else {
             dt_personnellist.$('tr.selected').removeClass('selected');
             $(this).toggleClass('selected');
             $('#frm_personnel #p_id').val($(this).data('p_id'));
             $('#frm_personnel #p_fname').val($(this).data('p_fname'));
             $('#frm_personnel #p_mname').val($(this).data('p_mname'));
             $('#frm_personnel #p_mi').val($(this).data('p_mi'));
             $('#frm_personnel #p_lname').val($(this).data('p_lname'));
             $('#frm_personnel #p_next').val($(this).data('p_next'));
             $('#frm_personnel #p_position').val($(this).data('p_position'));
             $('#frm_personnel #p_section').val($(this).data('p_section'));
             $('#frm_personnel #p_nickname').val($(this).data('p_nickname'));
             $('#frm_personnel #p_mobilenum').val($(this).data('p_mobilenum'));
             $('#frm_personnel #p_status').val($(this).data('p_status'));
             $('#frm_personnel #p_active').val($(this).data('p_active'));
         }
     });


var  frm_personnel = document.getElementById('frm_personnel');
var _btn_reset    = document.getElementById('btn_reset');
_btn_reset.onclick = function(e) {
    frm_personnel.reset();
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


var btn_save = document.getElementById('btn_save');
btn_save.onclick = function(){

  // var s_personnel = document.getElementById('s_personnel');
  // var a = s_personnel.options[s_personnel.selectedIndex].text;
  //
  // var s_pulloutby = document.getElementById('s_pulloutby');
  // var b = s_pulloutby.options[s_pulloutby.selectedIndex].text;

  notify('Processing', 'Please wait..', 'info', 999999);
  postAjax(base_url + 'admin/save_personnel',$('#frm_personnel').serialize(),
    function(data) {
      $('.alert-info .glyphicon-remove').trigger("click");
      $('.alert-warning .glyphicon-remove').trigger("click");
      $('.alert-success .glyphicon-remove').trigger("click");
      if (data.status == "yes") {
        notify('Success!', data.content, 'success', 1500);
        dt_personnellist.ajax.reload();
          frm_personnel.reset();
      } else {
        notify('Failed!', data.content, '', 9999);
          frm_personnel.reset();
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
