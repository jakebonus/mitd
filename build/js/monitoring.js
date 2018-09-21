
var dt_personnellist =  $('#dt_personnellist').DataTable({
  'ajax': {
    // "url": base_url + "admin/ajax_get_personnel",
    "url": base_url + "personnellist.txt",
    'dataSrc': ""
  },
  'columns': [
    {"data": "p_nickname"},
    {"data": "p_status"},
  ],
    "searching": false,
  "deferRender": true,
  "scrollY": 600,
  "scrollX": true,
  "scroller": true,
  "scrollCollapse": true,
  "paging": false,
  "autoWidth": false,
  "bInfo" : false,
  "ordering": false,
});
var dt_systems =  $('#dt_systems').DataTable({
  // 'ajax': {
    // "url": base_url + "admin/ajax_get_personnelmonitoring",
    // 'dataSrc': ""
  // },
  'columns': [
    {"data": ""},
    // {"data": function(data, type, row, meta) {
    //    if(data.s_ongoing=='YES'){
    //        return "ONGOING"
    //      }else{
    //        return "DONE"
    //      };
    //    }
    //  },
    {"data": ""}
  ],
  "deferRender": true,
  "scrollY": "600vh",
  "scrollX": true,
  "scroller": true,
  "scrollCollapse": true,
  "paging": false,
  "autoWidth": false,
  "bInfo" : false,
  "searching": false,
  "ordering": false,


});


var dt_personnelmonitoring =  $('#dt_personnelmonitoring').DataTable({
       'ajax': {
         "url": base_url + "services.txt",
         'dataSrc': ""
       },
       'columns': [
         {"data": "s_type"},
         {"data": "s_office"},
         {"data": "s_date"},
         {"data": function(data, type, row, meta) {
            if(data.s_ongoing=='YES'){
                return "ONGOING"
              }else{
                return "DONE"
              };
            }
          },
         {"data": "p_nickname"}
       ],
       "deferRender": true,
       "scrollY": "600vh",
       "scrollX": true,
       "scroller": true,
       "scrollCollapse": true,
       "paging": false,
       "autoWidth": false,
       "bInfo" : false,
       "searching": false,
        "ordering": false,
     });

var dt_projectmonitoring =  $('#dt_projectmonitoring').DataTable({
    'ajax': {
      // "url": base_url + "admin/ajax_get_projects",
      "url": base_url + "sdsprojects.txt",
      'dataSrc': ""
    },
    'columns': [
      {"data": "p_name"},
      {"data": "name"},
      {"data": "status"}
    ],
    "deferRender": true,
    "scrollY": 400,
    "scrollX": true,
    "scroller": true,
    "scrollCollapse": true,
    "paging": false,
    "autoWidth": false,
    "bInfo" : false,
    "searching": false,
     "ordering": false,
  });
