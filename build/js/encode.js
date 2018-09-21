$(function() {
  var $frm_info = $('#frm_info'),
      $frm_encode = $('#frm_encode'),
      $stool_examination = document.getElementById("stool-examination"),
      $urine_analysis = document.getElementById("urine-analysis"),
      $hematology = document.getElementById("hematology"),
      $dengue_ns1 = $('#dengue-ns1'),
      // $hematology = $('#hematology'),
      $blood_examination = $('#blood-examination'),
      $exam_content = $('.exam-content'),
      $body = $("body"),
      $mi = $("input#t_mi"),
      $mname = $("input#t_mname"),
      $formv = null,
      $formv1 = null,
      $tr_type = document.getElementById("tr_type"),
      $btn_ecancel = document.getElementById("btn-cancel"),
      $btn_cancel = document.getElementById("btn_cancel"),
      $btn_cancel_print = document.getElementById("btn_cancel_print"),
      $mdl_check_saving = document.querySelector(".mdl-check-saving"),
      $mdl_print = $("#mdl-print"),
      $table = $("#table"),
      monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],

      t_fname = document.getElementById("t_fname"),
      t_mi = document.getElementById("t_mi"),
      t_mname = document.getElementById("t_mname"),
      t_lname = document.getElementById("t_lname"),
      t_ext = document.getElementById("t_ext"),
      se_wblood = document.getElementById("se_wblood"),
      tr_date = document.getElementById("tr_date"),
      tr_brgy = document.getElementById("tr_brgy"),
      age = document.getElementById("age"),
      t_gender = document.getElementById("t_gender"),

      /*modal preview*/
      $mdl_preview_se = document.getElementsByClassName(".modal-preview-se"),
      $mdl_preview_ua = document.getElementsByClassName(".modal-preview-ua"),

      se_color = document.getElementById("se_color"),
      se_consistency = document.getElementById("se_consistency"),
      se_occult_blood = document.getElementById("se_occult_blood"),
      se_ph = document.getElementById("se_ph"),
      se_ascaris = document.getElementById("se_ascaris"),
      se_trichuris = document.getElementById("se_trichuris"),
      se_hookworm = document.getElementById("se_hookworm"),
      se_giardia_lambia = document.getElementById("se_giardia_lambia"),
      se_trichomonas = document.getElementById("se_trichomonas"),
      se_others = document.getElementById("se_others"),
      se_amoeba_cyst = document.getElementById("se_amoeba_cyst"),
      se_amoeba_trophozoid = document.getElementById("se_amoeba_trophozoid"),
      se_pus_cells = document.getElementById("se_pus_cells"),
      se_red_blood_cells = document.getElementById("se_red_blood_cells"),
      se_fat_globules = document.getElementById("se_fat_globules"),
      se_others1 = document.getElementById("se_others1"),

      ua_color = document.getElementById("ua_color"),
      ua_transparency = document.getElementById("ua_transparency"),
      ua_ph = document.getElementById("ua_ph"),
      ua_specific_gravity = document.getElementById("ua_specific_gravity"),
      ua_protein = document.getElementById("ua_protein"),
      ua_glucose = document.getElementById("ua_glucose"),
      ua_ketone = document.getElementById("ua_ketone"),
      ua_bile = document.getElementById("ua_bile"),
      ua_urobilinogen = document.getElementById("ua_urobilinogen"),
      ua_nitrite = document.getElementById("ua_nitrite"),
      ua_cast = document.getElementById("ua_cast"),
      ua_pus_cells = document.getElementById("ua_pus_cells"),
      ua_red_blood_cells = document.getElementById("ua_red_blood_cells"),
      ua_epithelial_cells = document.getElementById("ua_epithelial_cells"),
      ua_mucus_theads = document.getElementById("ua_mucus_theads"),
      ua_amorphous_urates = document.getElementById("ua_amorphous_urates"),
      ua_amorphous_po4 = document.getElementById("ua_amorphous_po4"),
      ua_calcium_oxalates = document.getElementById("ua_calcium_oxalates"),
      ua_triple_phosphates = document.getElementById("ua_triple_phosphates"),
      ua_yeast_cells = document.getElementById("ua_yeast_cells"),
      ua_bacteria = document.getElementById("ua_bacteria"),
      ua_others = document.getElementById("ua_others"),

      he_haemoglobin = document.getElementById("he_haemoglobin"),
      he_haematocrit = document.getElementById("he_haematocrit"),
      he_rblood_cellcount = document.getElementById("he_rblood_cellcount"),
      he_wblood_cellcount = document.getElementById("he_wblood_cellcount"),
      he_segmenters = document.getElementById("he_segmenters"),
      he_lymphocytes = document.getElementById("he_lymphocytes"),
      he_monocytes = document.getElementById("he_monocytes"),
      he_eosinophils = document.getElementById("he_eosinophils"),
      he_stab_cells = document.getElementById("he_stab_cells"),
      he_platelet_count = document.getElementById("he_platelet_count")
  ;

  $("select.select2").select2({
    placeholder: "- - -",
    allowClear: true
  });

  var selector = document.getElementById("mobileno"),
  im = new Inputmask("9999-999-9999");
  im.mask(selector);

  var selector = document.getElementById("age"),
    im = new Inputmask("numeric", {
    min: 1,
    max: 120
  });
  im.mask(selector);


  //input tags - for cast
  $('._tags').tagsInput({
    placeholder: 'Add a cast',
    minChars: 2,
    maxChars: 90,
    limit: 3,
    validationPattern: new RegExp('^[0-9a-zA-Z .,-]+$'),
    unique: true,
    removeWithBackspace: true
  });

  //get all name
  var r5 = new Array,
      xhr = new XMLHttpRequest();
  xhr.open("GET", base_url + 'encode/ajax_get_name', true);
  xhr.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      var myarr = JSON.parse(this.responseText);
      for (i = 0; i < myarr.length; i++) {
        r5.push({
          fullname: myarr[i].fullname,
          lastname: myarr[i].lname,
          firstname: myarr[i].fname,
          mi: myarr[i].mi,
          mname: myarr[i].mname,
          ext: myarr[i].ext,
          tr_brgy: myarr[i].tr_brgy,
          birthdate: myarr[i].birthdate,
          gender: myarr[i].gender,
          mobileno: myarr[i].mobileno,
        });
      }
    }
  }
  xhr.send();
  var options = {
    data: r5,
  	getValue: "firstname",
    highlightPhrase: true,
    template: {
  		type: "custom",
  		method: function(value, item) {
  			// return item.firstname + " | " + item.lastname + " | " + value;
  			return item.firstname + " " + item.mi  + " " + item.lastname;
  		}
  	},
  	list: {
      match: {
			enabled: true
		},
  		onSelectItemEvent: function() {
        var t_fname = $("#t_fname"),
          lastname = t_fname.getSelectedItemData().lastname,
          mname = t_fname.getSelectedItemData().mname;
          mi = t_fname.getSelectedItemData().mi;
          ext = t_fname.getSelectedItemData().ext;
  			// var value = $("#t_fname").getSelectedItemData().lastname;
  			// var value = $("#t_fname").getSelectedItemData().lastname;
  			// $("#t_fname").val(value).trigger("change");

        t_lname.value = lastname;
        t_mname.value = mname;
        t_mi.value = mi;
        t_ext.value = ext;
  		}
  	}
  };
  $("#t_fname").easyAutocomplete(options);

  $mi.on('keyup focus change', function(e) {
    if ($(this).val() != '') {
      var oldstr = $(this).val();
      var tokens = oldstr.split('.');
      var suffix = tokens.pop() + '.';
      var prefix = tokens.join("");
      $(this).val(prefix + suffix);
    }
  });

  $mname.on('blur', function() {
    $mi.val($(this).val().charAt(0));
    $mi.focus();
  });
  //
  // var a = document.querySelector('input#ctrlno');
  // a.addEventListener('focus', addyear);
  //
  // function addyear() {
  //   if ($i_ctrlno.val().length == 0) {
  //     var d = new Date();
  //     $i_ctrlno.val(d.getFullYear() + '-');
  //   }
  // }

  //VALIDATE INFO
  $frm_info.formValidation({
      framework: "bootstrap",
      icon: null,
      fields: {
        tr_type: {
          validators: {
            regexp: {
              regexp: /^[0-9a-zA-Z .,-]+$/i
            },
            stringLength: {
              max: 50
            },
            notEmpty: {
              message: 'Type of Examination is required'
            }
          }
        },
        fname: {
          validators: {
            regexp: {
              regexp: /^[0-9a-zA-Z .,-]+$/i
            },
            stringLength: {
              max: 20
            },
            notEmpty: {
              message: 'FirstName is required'
            }
          }
        },
        mname: {
          validators: {
            regexp: {
              regexp: /^[0-9a-zA-Z .,-]+$/i
            },
            stringLength: {
              max: 15
            },
            notEmpty: {
              message: 'MiddleName is required'
            }
          }
        },
        mi: {
          validators: {
            regexp: {
              regexp: /^[0-9a-zA-Z .,-]+$/i
            },
            stringLength: {
              max: 5
            }
          }
        },
        lname: {
          validators: {
            regexp: {
              regexp: /^[0-9a-zA-Z .,-]+$/i
            },
            stringLength: {
              max: 20
            },
            notEmpty: {
              message: 'LastName is required'
            }
          }
        },
        ext: {
          validators: {
            regexp: {
              regexp: /^[0-9a-zA-Z .,-]+$/i
            },
            stringLength: {
              max: 5
            }
          }
        },
        tr_brgy: {
          validators: {
            regexp: {
              regexp: /^[0-9a-zA-Z .,-]+$/i
            },
            stringLength: {
              max: 15
            },
            notEmpty: {
              message: 'Brgy is required'
            }
          }
        },
        gender: {
          validators: {
            regexp: {
              regexp: /^[0-9a-zA-Z .,-]+$/i
            },
            stringLength: {
              max: 6
            },
            notEmpty: {
              message: 'Gender is required'
            }
          }
        },
        age: {
          validators: {
            integer: {
              message: 'The value is not number'
            },
            notEmpty: {
              message: 'Age is required'
            }
          }
        },
        tr_date: {
          validators: {
            date: {
              format: 'YYYY-MM-DD',
              message: 'The value is not a valid date'
            },
            notEmpty: {
              message: 'Date is required'
            }
          }
        }
      }
    })
    .on('success.form.fv', function(e) {

      e.preventDefault();
      $formv = $(e.target);
        var $button = $formv.data('formValidation').getSubmitButton();

        switch($tr_type.value) {
          case 'STOOL EXAMINATION':

          $frm_encode
                  .formValidation('enableFieldValidators', 'se_color', true)
                  .formValidation('enableFieldValidators', 'se_consistency', true)
                  .formValidation('enableFieldValidators', 'se_occult_blood', true)
                  .formValidation('enableFieldValidators', 'se_ph', true)
                  .formValidation('enableFieldValidators', 'se_ascaris', true)
                  .formValidation('enableFieldValidators', 'se_trichuris', true)
                  .formValidation('enableFieldValidators', 'se_hookworm', true)
                  .formValidation('enableFieldValidators', 'se_giardia_lambia', true)
                  .formValidation('enableFieldValidators', 'se_trichomonas', true)
                  .formValidation('enableFieldValidators', 'se_others', true)
                  .formValidation('enableFieldValidators', 'se_amoeba_cyst', true)
                  .formValidation('enableFieldValidators', 'se_amoeba_trophozoid', true)
                  .formValidation('enableFieldValidators', 'se_pus_cells', true)
                  .formValidation('enableFieldValidators', 'se_red_blood_cells', true)
                  .formValidation('enableFieldValidators', 'se_fat_globules', true)
                  .formValidation('enableFieldValidators', 'se_others1', true);

            $stool_examination.classList.remove("hidden");
            break;

          case 'LABORATORY RESULT - URINE ANALYSYS':

            $frm_encode
                  .formValidation('enableFieldValidators', 'ua_color', true)
                  .formValidation('enableFieldValidators', 'ua_transparency', true)
                  .formValidation('enableFieldValidators', 'ua_ph', true)
                  .formValidation('enableFieldValidators', 'ua_specific_gravity', true)
                  .formValidation('enableFieldValidators', 'ua_protein', true)
                  .formValidation('enableFieldValidators', 'ua_glucose', true)
                  .formValidation('enableFieldValidators', 'ua_ketone', true)
                  .formValidation('enableFieldValidators', 'ua_bile', true)
                  .formValidation('enableFieldValidators', 'ua_urobilinogen', true)
                  .formValidation('enableFieldValidators', 'ua_nitrite', true)
                  .formValidation('enableFieldValidators', 'ua_pus_cells', true)
                  .formValidation('enableFieldValidators', 'ua_red_blood_cells', true)
                  .formValidation('enableFieldValidators', 'ua_epithelial_cells', true)
                  .formValidation('enableFieldValidators', 'ua_mucus_theads', true)
                  .formValidation('enableFieldValidators', 'ua_amorphous_urates', true)
                  .formValidation('enableFieldValidators', 'ua_amorphous_po4', true)
                  .formValidation('enableFieldValidators', 'ua_calcium_oxalates', true)
                  .formValidation('enableFieldValidators', 'ua_triple_phosphates', true)
                  .formValidation('enableFieldValidators', 'ua_yeast_cells', true)
                  .formValidation('enableFieldValidators', 'ua_bacteria', true)
                  .formValidation('enableFieldValidators', 'ua_others', true);

            $urine_analysis.classList.remove("hidden");
            break;

          case 'LABORATORY RESULT - HEMATOLOGY':

          $frm_encode
                .formValidation('enableFieldValidators', 'he_haemoglobin', true)
                .formValidation('enableFieldValidators', 'he_haematocrit', true)
                .formValidation('enableFieldValidators', 'he_rblood_cellcount', true)
                .formValidation('enableFieldValidators', 'he_wblood_cellcount', true)
                .formValidation('enableFieldValidators', 'he_segmenters', true)
                .formValidation('enableFieldValidators', 'he_lymphocytes', true)
                .formValidation('enableFieldValidators', 'he_monocytes', true)
                .formValidation('enableFieldValidators', 'he_eosinophils', true)
                .formValidation('enableFieldValidators', 'he_stab_cells', true)
                .formValidation('enableFieldValidators', 'he_platelet_count', true);
            $hematology.classList.remove("hidden");
            break;

          case 'PRE - NATAL LABORATORY RESULT':
            $urine_analysis.classList.remove("hidden");
            $blood_examination.removeClass('hidden');
            break;

          case 'DENGUE NS1':
            $dengue_ns1.removeClass('hidden');
            break;
        }

        $frm_info.addClass('hidden');
        $frm_encode.removeClass('hidden');

      return false;
    })
    .on('err.field.fv', function(e, data) {
      data.element
        .data('fv.messages')
        .find('.help-block[data-fv-for="' + data.field + '"]').hide();
  });

  $btn_ecancel.addEventListener("click", function(){
    $frm_encode[0].reset();
    $frm_encode.formValidation('resetForm', true);
    $frm_encode.find('.exam-content').addClass('hidden');
    $frm_encode.addClass('hidden');
    $frm_info.removeClass('hidden');
    $formv.formValidation('disableSubmitButtons', false);
  });

  $btn_cancel.addEventListener("click", function(){
    refresh();
  });

  $btn_cancel_print.addEventListener("click", function(){
    refresh();
    $('.glyphicon-remove').trigger("click");
    $btn_ecancel.click();
    $btn_cancel.click();
  });

  //VALIDATE INFO
  $frm_encode.formValidation({
      framework: "bootstrap",
      icon: null,
      fields: {
        se_color: {
          enabled: false,
          validators: {
            regexp: {
              regexp: /^[0-9a-zA-Z -]+$/i
            }
          }
        },
        se_consistency: {
          enabled: false,
          validators: {
            regexp: {
              regexp: /^[0-9a-zA-Z -]+$/i
            }
          }
        },
        se_occult_blood: {
          enabled: false,
          validators: {
            regexp: {
              regexp: /^[0-9a-zA-Z -]+$/i
            }
          }
        },
        se_ph: {
          enabled: false,
          validators: {
            regexp: {
              regexp: /^[0-9a-zA-Z -.]+$/i
            }
          }
        },
        se_ascaris: {
          enabled: false,
          validators: {
            regexp: {
              regexp: /^[0-9a-zA-Z .,-]+$/i
            }
          }
        },
        se_trichuris: {
          enabled: false,
          validators: {
            regexp: {
              regexp: /^[0-9a-zA-Z .,-]+$/i
            }
          }
        },
        se_hookworm: {
          enabled: false,
          validators: {
            regexp: {
              regexp: /^[0-9a-zA-Z .,-]+$/i
            }
          }
        },
        se_giardia_lambia: {
          enabled: false,
          validators: {
            regexp: {
              regexp: /^[0-9a-zA-Z .,-]+$/i
            }
          }
        },
        se_trichomonas: {
          enabled: false,
          validators: {
            regexp: {
              regexp: /^[0-9a-zA-Z .,-]+$/i
            }
          }
        },
        se_others: {
          enabled: false,
          validators: {
            regexp: {
              regexp: /^[0-9a-zA-Z .,-]+$/i
            }
          }
        },
        se_amoeba_cyst: {
          enabled: false,
          validators: {
            regexp: {
              regexp: /^[0-9a-zA-Z .,-]+$/i
            }
          }
        },
        se_amoeba_trophozoid: {
          enabled: false,
          validators: {
            regexp: {
              regexp: /^[0-9a-zA-Z .,-]+$/i
            }
          }
        },
        se_pus_cells: {
          enabled: false,
          validators: {
            regexp: {
              regexp: /^[0-9a-zA-Z .,-]+$/i
            }
          }
        },
        se_red_blood_cells: {
          enabled: false,
          validators: {
            regexp: {
              regexp: /^[0-9a-zA-Z .,-]+$/i
            }
          }
        },
        se_fat_globules: {
          enabled: false,
          validators: {
            regexp: {
              regexp: /^[0-9a-zA-Z .,-]+$/i
            }
          }
        },
        se_others1: {
          enabled: false,
          validators: {
            regexp: {
              regexp: /^[0-9a-zA-Z .,-]+$/i
            }
          }
        },

        /*urine analysis*/
        ua_color: {
          enabled: false,
          validators: {
            regexp: {
              regexp: /^[0-9a-zA-Z .,+-]+$/i
            },
            stringLength: {
              max: 25
            },
            notEmpty: {
              message: 'Color is required'
            }
          }
        },
        ua_transparency: {
          enabled: false,
          validators: {
            regexp: {
              regexp: /^[0-9a-zA-Z -]+$/i
            },
            stringLength: {
              max: 25
            },
            // notEmpty: {
            //   message: 'Transparency is required'
            // }
          }
        },
        ua_ph: {
          enabled: false,
          validators: {
            regexp: {
              regexp: /^[0-9a-zA-Z .-]+$/i
            },
            stringLength: {
              max: 4
            }
          }
        },
        ua_specific_gravity: {
          enabled: false,
          validators: {
            regexp: {
              regexp: /^[0-9a-zA-Z .-]+$/i
            },
            stringLength: {
              max: 6
            }
          }
        },
        ua_protein: {
          enabled: false,
          validators: {
            regexp: {
              regexp: /^[0-9a-zA-Z .+-]+$/i
            },
            stringLength: {
              max: 10
            }
          }
        },
        ua_glucose: {
          enabled: false,
          validators: {
            regexp: {
              regexp: /^[0-9a-zA-Z .+-]+$/i
            },
            stringLength: {
              max: 10
            }
          }
        },
        ua_ketone: {
          enabled: false,
          validators: {
            regexp: {
              regexp: /^[0-9a-zA-Z .+-]+$/i
            },
            stringLength: {
              max: 10
            }
          }
        },
        ua_bile: {
          enabled: false,
          validators: {
            regexp: {
              regexp: /^[0-9a-zA-Z .+-]+$/i
            },
            stringLength: {
              max: 10
            }
          }
        },
        ua_urobilinogen: {
          enabled: false,
          validators: {
            regexp: {
              regexp: /^[0-9a-zA-Z .()+-]+$/i
            },
            stringLength: {
              max: 20
            }
          }
        },
        ua_nitrite: {
          enabled: false,
          validators: {
            regexp: {
              regexp: /^[0-9a-zA-Z .+-]+$/i
            },
            stringLength: {
              max: 10
            }
          }
        },
        ua_pus_cells: {
          enabled: false,
          validators: {
            regexp: {
              regexp: /^[0-9a-zA-Z .+-]+$/i
            },
            stringLength: {
              max: 20
            }
          }
        },
        ua_red_blood_cells: {
          enabled: false,
          validators: {
            regexp: {
              regexp: /^[0-9a-zA-Z .+-]+$/i
            },
            stringLength: {
              max: 20
            }
          }
        },
        ua_epithelial_cells: {
          enabled: false,
          validators: {
            regexp: {
              regexp: /^[0-9a-zA-Z .+-]+$/i
            },
            stringLength: {
              max: 15
            }
          }
        },
        ua_mucus_theads: {
          enabled: false,
          validators: {
            regexp: {
              regexp: /^[0-9a-zA-Z .+-]+$/i
            },
            stringLength: {
              max: 15
            }
          }
        },
        ua_amorphous_urates: {
          enabled: false,
          validators: {
            regexp: {
              regexp: /^[0-9a-zA-Z .+-]+$/i
            },
            stringLength: {
              max: 15
            }
          }
        },
        ua_amorphous_po4: {
          enabled: false,
          validators: {
            regexp: {
              regexp: /^[0-9a-zA-Z .+-]+$/i
            },
            stringLength: {
              max: 15
            }
          }
        },
        ua_calcium_oxalates: {
          enabled: false,
          validators: {
            regexp: {
              regexp: /^[0-9a-zA-Z .+-]+$/i
            },
            stringLength: {
              max: 15
            }
          }
        },
        ua_triple_phosphates: {
          enabled: false,
          validators: {
            regexp: {
              regexp: /^[0-9a-zA-Z .+-]+$/i
            },
            stringLength: {
              max: 15
            }
          }
        },
        ua_yeast_cells: {
          enabled: false,
          validators: {
            regexp: {
              regexp: /^[0-9a-zA-Z .+-]+$/i
            },
            stringLength: {
              max: 20
            }
          }
        },
        ua_bacteria: {
          enabled: false,
          validators: {
            regexp: {
              regexp: /^[0-9a-zA-Z .+-]+$/i
            },
            stringLength: {
              max: 15
            }
          }
        },
        ua_others: {
          enabled: false,
          validators: {
            regexp: {
              regexp: /^[0-9a-zA-Z .+-]+$/i
            },
            stringLength: {
              max: 50
            }
          }
        },

        /*hematology - complete blood count*/
        he_haemoglobin: {
          enabled: false,
          validators: {
            regexp: {
              regexp: /^[0-9a-zA-Z .+-]+$/i
            },
            stringLength: {
              max: 10
            }
          }
        },
        he_haematocrit: {
          enabled: false,
          validators: {
            regexp: {
              regexp: /^[0-9a-zA-Z .+-]+$/i
            },
            stringLength: {
              max: 10
            }
          }
        },
        he_rblood_cellcount: {
          enabled: false,
          validators: {
            regexp: {
              regexp: /^[0-9a-zA-Z .+-]+$/i
            },
            stringLength: {
              max: 10
            }
          }
        },
        he_wblood_cellcount: {
          enabled: false,
          validators: {
            regexp: {
              regexp: /^[0-9a-zA-Z .+-]+$/i
            },
            stringLength: {
              max: 10
            }
          }
        },
        he_segmenters: {
          enabled: false,
          validators: {
            regexp: {
              regexp: /^[0-9a-zA-Z .+-]+$/i
            },
            stringLength: {
              max: 10
            }
          }
        },
        he_lymphocytes: {
          enabled: false,
          validators: {
            regexp: {
              regexp: /^[0-9a-zA-Z .+-]+$/i
            },
            stringLength: {
              max: 10
            }
          }
        },
        he_monocytes: {
          enabled: false,
          validators: {
            regexp: {
              regexp: /^[0-9a-zA-Z .+-]+$/i
            },
            stringLength: {
              max: 10
            }
          }
        },
        he_eosinophils: {
          enabled: false,
          validators: {
            regexp: {
              regexp: /^[0-9a-zA-Z .+-]+$/i
            },
            stringLength: {
              max: 10
            }
          }
        },
        he_stab_cells: {
          enabled: false,
          validators: {
            regexp: {
              regexp: /^[0-9a-zA-Z .+-]+$/i
            },
            stringLength: {
              max: 10
            }
          }
        },
        he_platelet_count: {
          enabled: false,
          validators: {
            regexp: {
              regexp: /^[0-9a-zA-Z .+-]+$/i
            },
            stringLength: {
              max: 10
            }
          }
        },

      }
    })
    .on('success.form.fv', function(e) {

      e.preventDefault();
       $formv1 = $(e.target),
          $button = $formv1.data('formValidation').getSubmitButton();
        $frm_info.addClass('hidden');
        $frm_encode.removeClass('hidden');

      switch ($button.attr('id')) {
        case 'btn_frm_in':

          $mdl_check_saving.querySelector("[data-dismiss=\"modal\"]").click();
          notify('Processing', 'Please wait..', 'info', 999999);

          var wblood = (document.getElementById('se_wblood').checked == true) ? 'YES' : 'NO';

          postAjax(base_url + 'encode/ajax_save',
            $frm_encode.serialize() + '&' + $frm_info.serialize() + '&se_wblood=' + wblood ,
            function(data) {
              $('.alert-info .glyphicon-remove').trigger("click");
              if (data.status == "yes") {
                notify('Success!', data.content, 'success', 1500);
                $mdl_print.find('.modal-body p').text($tr_type.value);
                $mdl_print.modal('show');
              } else {
                notify('Failed!', data.content, '', 1500);
                refresh();
              }
            }
          );

          // $("#mdl-save-draft .btn-close").trigger("click");
          //
          // //save
          // $.ajax({
          //   dataType: 'json',
          //   type: 'post',
          //   url: base_url + "encode/ajax_save",
          //   data: $frm_encode.serialize(),
          //   beforeSend: function() {
          //     notify('Processing', 'Please wait..', 'info', 999999);
          //   },
          //   success: function(data) {
          //     $('.alert-info .glyphicon-remove').trigger("click");
          //     if (data.status == "yes") {
          //       notify('Success!', data.content, 'success', 1500);
          //       $('#mdl-print .modal-body p').text($('#t_type').val() + ' PERMIT');
          //       $('#mdl-print').modal('show');
          //     } else {
          //       notify('Failed!', data.content, '', 1500);
          //       refresh();
          //     }
          //   },
          //   error: function(jqXHR, exception, errorThrown) {
          //     $('.alert-info .glyphicon-remove').trigger("click");
          //     if (jqXHR.responseText.indexOf('1062') != -1) {
          //       notify('Duplicate entry!', 'This Ctrl No. : <b>'+ $i_ctrlno.val() +'</b><br> is already exists!, Please check. <a href="'+ base_url +'admin"> Click here</a>', 'error', 7000);
          //       $formv1.data('formValidation').disableSubmitButtons(false);
          //       $i_ctrlno.focus();
          //     } else {
          //       notify('Error!', 'Connection problems occurred... Unable to connect to the Internet! The Internet connection has been lost.', 'error', 1500);
          //       refresh();
          //     }
          //   }
          // });
          //
          break;

        case 'draftButton':

          var txt = document.getElementsByClassName('txt'),
              name = t_fname.value + ' ' + t_mi.value + ' ' + t_lname.value;

              txt[0].innerHTML = name;
              txt[1].innerHTML = tr_date.value;
              txt[2].innerHTML = tr_brgy.value;
              txt[3].innerHTML = age.value;
              txt[4].innerHTML = t_gender.value;

          switch($tr_type.value) {
            case 'STOOL EXAMINATION':
                var wblood = (se_wblood.checked == true) ? '<small>w/ blood</small>' : '';
                txt[5].innerHTML = se_color.value + ' ' + wblood;
                txt[6].innerHTML = se_consistency.value;
                txt[7].innerHTML = se_occult_blood.value;
                txt[8].innerHTML = se_ph.value;
                txt[9].innerHTML = se_ascaris.value;
                txt[10].innerHTML = se_trichuris.value;
                txt[11].innerHTML = se_hookworm.value;
                txt[12].innerHTML = se_giardia_lambia.value;
                txt[13].innerHTML = se_trichomonas.value;
                txt[14].innerHTML = se_others.value;
                txt[15].innerHTML = se_amoeba_cyst.value;
                txt[16].innerHTML = se_amoeba_trophozoid.value;
                txt[17].innerHTML = se_pus_cells.value;
                txt[18].innerHTML = se_red_blood_cells.value;
                txt[19].innerHTML = se_fat_globules.value;
                txt[20].innerHTML = se_others1.value;

                removeClass('.modal-preview-se', 'hidden');
                addClass('.modal-preview-ua', 'hidden');
              break;

            case 'LABORATORY RESULT - URINE ANALYSYS':

              var ua_txt = document.getElementsByClassName('ua_txt');
              ua_txt[0].innerHTML = ua_color.value;
              ua_txt[1].innerHTML = ua_transparency.value;
              ua_txt[2].innerHTML = ua_ph.value;
              ua_txt[3].innerHTML = ua_specific_gravity.value;
              ua_txt[4].innerHTML = ua_protein.value;
              ua_txt[5].innerHTML = ua_glucose.value;
              ua_txt[6].innerHTML = ua_ketone.value;
              ua_txt[7].innerHTML = ua_bile.value;
              ua_txt[8].innerHTML = ua_urobilinogen.value;
              ua_txt[9].innerHTML = ua_nitrite.value;
              ua_txt[10].innerHTML = ua_cast.value;
              ua_txt[11].innerHTML = ua_pus_cells.value;
              ua_txt[12].innerHTML = ua_red_blood_cells.value;
              ua_txt[13].innerHTML = ua_epithelial_cells.value;
              ua_txt[14].innerHTML = ua_mucus_theads.value;
              ua_txt[15].innerHTML = ua_amorphous_urates.value;
              ua_txt[16].innerHTML = ua_amorphous_po4.value;
              ua_txt[17].innerHTML = ua_calcium_oxalates.value;
              ua_txt[18].innerHTML = ua_triple_phosphates.value;
              ua_txt[19].innerHTML = ua_yeast_cells.value;
              ua_txt[20].innerHTML = ua_bacteria.value;
              ua_txt[21].innerHTML = ua_others.value;

              addClass('.modal-preview-se', 'hidden');
              removeClass('.modal-preview-ua', 'hidden');
              break;

            case 'LABORATORY RESULT - HEMATOLOGY':
              // $hematology.removeClass('hidden');
              break;

            case 'PRE - NATAL LABORATORY RESULT':
              // $urine_analysis.removeClass('hidden');
              // $blood_examination.removeClass('hidden');
              break;

            case 'DENGUE NS1':
              // $dengue_ns1.removeClass('hidden');
              break;
          }



          $formv1.data('formValidation').disableSubmitButtons(false);
          $('#mdl-save-draft-se').modal('show');
          break;
      }
      return false;
    })
    .on('err.field.fv', function(e, data) {
      data.element
        .data('fv.messages')
        .find('.help-block[data-fv-for="' + data.field + '"]').hide();
  });



  $body.delegate("#btn_print", "click", function() {
    var txt   = document.getElementsByClassName('p-se'),
        name  = t_fname.value + ' ' + t_mi.value + ' ' + t_lname.value,
        d     = new Date(tr_date.value),
        dd    = ('0' + (d.getDate())).slice(-2),
        yy    = d.getFullYear(),
        _date = monthNames[d.getMonth()].toUpperCase() + ' ' + dd + ', ' + yy;

        switch($tr_type.value) {
          case 'STOOL EXAMINATION':
              var wblood = (se_wblood.checked == true) ? '<small>w/ blood</small>' : '';
              txt[0].innerHTML = name;
              txt[1].innerHTML = _date;
              txt[2].innerHTML = tr_brgy.value;
              txt[3].innerHTML = age.value + ' / '+ t_gender.value;
              txt[4].innerHTML = se_color.value + ' ' + wblood;
              txt[5].innerHTML = se_occult_blood.value;
              txt[6].innerHTML = se_consistency.value;
              txt[7].innerHTML = se_ph.value;
              txt[8].innerHTML = se_ascaris.value;
              txt[9].innerHTML = se_amoeba_cyst.value;
              txt[10].innerHTML = se_trichuris.value;
              txt[11].innerHTML = se_amoeba_trophozoid.value;
              txt[12].innerHTML = se_hookworm.value;
              txt[13].innerHTML = se_pus_cells.value;
              txt[14].innerHTML = se_giardia_lambia.value;
              txt[15].innerHTML = se_red_blood_cells.value;
              txt[16].innerHTML = se_trichomonas.value;
              txt[17].innerHTML = se_fat_globules.value;
              txt[18].innerHTML = se_others.value;
              txt[19].innerHTML = se_others1.value;

              addClass('.print-ua', 'hidden');
              removeClass('.print-se', 'hidden');
            break;
          case 'LABORATORY RESULT - URINE ANALYSYS':



              var txt1   = document.getElementsByClassName('p-ua');
                  txt1[0].innerHTML = name;
                  txt1[1].innerHTML = _date;
                  txt1[2].innerHTML = tr_brgy.value;
                  txt1[3].innerHTML = age.value + ' / '+ t_gender.value;
                  txt1[4].innerHTML = ua_color.value;
                  txt1[5].innerHTML = ua_transparency.value;
                  txt1[6].innerHTML = ua_cast.value.replace(/,/gi, "<br>").toUpperCase();
                  txt1[7].innerHTML = ua_calcium_oxalates.value;
                  txt1[8].innerHTML = ua_ph.value;
                  txt1[9].innerHTML = ua_triple_phosphates.value;
                  txt1[10].innerHTML = ua_specific_gravity.value;
                  txt1[11].innerHTML = ua_protein.value;
                  txt1[12].innerHTML = ua_pus_cells.value;
                  txt1[13].innerHTML = ua_glucose.value;
                  txt1[14].innerHTML = ua_red_blood_cells.value;
                  txt1[15].innerHTML = ua_ketone.value;
                  txt1[16].innerHTML = ua_epithelial_cells.value;
                  txt1[17].innerHTML = ua_yeast_cells.value;
                  txt1[18].innerHTML = ua_bile.value;
                  txt1[19].innerHTML = ua_mucus_theads.value;
                  txt1[20].innerHTML = ua_bacteria.value;
                  txt1[21].innerHTML = ua_urobilinogen.value;
                  txt1[22].innerHTML = ua_amorphous_urates.value;
                  txt1[23].innerHTML = ua_others.value;
                  txt1[24].innerHTML = ua_nitrite.value;
                  txt1[25].innerHTML = ua_amorphous_po4.value;

              addClass('.print-se', 'hidden');
              removeClass('.print-ua', 'hidden');
            break;
          // case 'LABORATORY RESULT - HEMATOLOGY':
          //   $hematology.removeClass('hidden');
          //   break;
          // case 'PRE - NATAL LABORATORY RESULT':
          //   $urine_analysis.removeClass('hidden');
          //   $blood_examination.removeClass('hidden');
          //   break;
          // case 'DENGUE NS1':
          //   $dengue_ns1.removeClass('hidden');
          //   break;
        }

    refresh();
    $('.glyphicon-remove').trigger("click");
    $('#mdl-previewprint').modal('show');
    $('#btn_dialogprint').trigger("click");
    $btn_ecancel.click();
    $btn_cancel.click();
  });


  // $body.delegate("#btn_cancel_print, #btn_cancel", "click", function() {
  //   refresh();
  // });

  // $body.delegate("#btn_print", "click", function() {
  //   $('.glyphicon-remove').trigger("click");
  //
  //   $("._permit").text($("#t_type").val().toUpperCase() + ' PERMIT');
  //
  //   $("._ctrlno").text($("#ctrlno").val().toUpperCase());
  //   $("._name").text($("#fname").val().toUpperCase() + ' ' + $("#mi").val().toUpperCase() + ' ' + $("#lname").val().toUpperCase() + ' ' + $("#ext").val().toUpperCase());
  //   $("._placeofburial").text($("#placeburial").val().toUpperCase());
  //   $("._placeoftransfer").text($("#placetransfer").val().toUpperCase());
  //
  //   var a = $('#certifiedby').find('option:selected').text().split("-");
  //   $(".c_name").text(a[0].toUpperCase());
  //   $(".c_position").text(a[1].toUpperCase());
  //
  //   var d = new Date($("#dtdeath").val()),
  //     dd = ('0' + (d.getDate())).slice(-2),
  //
  //     yy = d.getFullYear();
  //   monthNames[d.getMonth()];
  //
  //   $("._dateofdeath").text(monthNames[d.getMonth()].toUpperCase() + ' ' + dd + ', ' + yy);
  //   $("._placedeath").text($("#placedeath").val().toUpperCase());
  //   $("._this_name").html("<u>&nbsp;&nbsp;&nbsp;" + $("#this_name").val().toUpperCase() + "&nbsp;&nbsp;&nbsp;</u>");
  //
  //   var d = new Date($("#this_date").val()),
  //     dd = dateIfElse(d.getDate()),
  //     yy = d.getFullYear();
  //
  //   $("strong._day").html("<u>&nbsp;&nbsp;&nbsp;" + dd + "&nbsp;&nbsp;&nbsp;</u>");
  //   $("strong._year").html("<u>&nbsp;&nbsp;&nbsp;" + yy + "&nbsp;&nbsp;&nbsp;</u>");
  //   $("strong._month").html("<u>&nbsp;&nbsp;&nbsp;" + monthNames[d.getMonth()].toUpperCase() + "&nbsp;&nbsp;&nbsp;</u>");
  //
  //   $('#mdl-previewprint').modal('show');
  //   $('#btn_dialogprint').trigger("click");
  //   refresh();
  // });

  function notify(title, content, type, delay) {
    new PNotify({
      title: title,
      text: content,
      styling: 'bootstrap3',
      type: type,
      delay: delay
    });
  }

  // function dateIfElse(dom) {
  //   if (dom == 31 || dom == 21 || dom == 1) return dom + "st";
  //   else if (dom == 22 || dom == 2) return dom + "nd";
  //   else if (dom == 23 || dom == 3) return dom + "rd";
  //   else return dom + "th";
  // }

  function refresh() {
    $frm_encode[0].reset();
    $frm_info[0].reset();
    $('.select2').val("").trigger("change");
    $frm_encode.formValidation('resetForm', true);
    $frm_info.formValidation('resetForm', true);
    tr_date.value = gdate;
    $stool_examination.classList.add("hidden");
    $urine_analysis.classList.add("hidden");
    removeTags();
  }

});

function notify(title, content, type, delay) {
  new PNotify({
    title: title,
    text: content,
    styling: 'bootstrap3',
    type: type,
    delay: delay
  });
}

function removeTags() {
  elements = document.getElementById("ua_cast_tagsinput").querySelectorAll(".tag");
  for (var i=0; i<elements.length; i++) {
    elements[i].remove();
  }
}

function removeClass(selector, myClass) {
  elements = document.querySelectorAll(selector);
  for (var i=0; i<elements.length; i++) {
    elements[i].classList.remove(myClass);
  }
}

function addClass(selector, myClass) {
  elements = document.querySelectorAll(selector);
  for (var i=0; i<elements.length; i++) {
    elements[i].classList.add(myClass);
  }
}

function printContent(el) {
  var data = document.getElementById(el).innerHTML,
      popupWindow = window.open('');
  popupWindow.document.write('<HTML>\n<HEAD>\n');
  popupWindow.document.write('<TITLE></TITLE>\n');
  popupWindow.document.write('<URL></URL>\n');
  popupWindow.document.write("<link href='http://localhost/elabsys/build/css/print.min.css?v=1.0.0' media='print' rel='stylesheet' type='text/css' />\n");
  popupWindow.document.write('<script>\n');
  popupWindow.document.write('function print_win(){\n');
  popupWindow.document.write('\nwindow.print();\n');
  popupWindow.document.write('\nwindow.close();\n');
  popupWindow.document.write('}\n');
  popupWindow.document.write('<\/script>\n');
  popupWindow.document.write('</HEAD>\n');
  popupWindow.document.write('<BODY onload="print_win()">\n');
  popupWindow.document.write(data);
  popupWindow.document.write('</BODY>\n');
  popupWindow.document.write('</HTML>\n');
  popupWindow.document.close();
}
