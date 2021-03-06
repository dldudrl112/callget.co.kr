jQuery(document).ready(function($) {
  "use strict";

  //Contact
  $('form.contactForm,form.contactForm_').submit(function() {
    var f = $(this).find('.form-group'),
      ferror = false,
      emailExp = /^[^\s()<>@,;:\/]+@\w[\w\.-]+\.[a-z]{2,}$/i;

    f.children('input').each(function() { // run all inputs

      var i = $(this); // current input
      var rule = i.attr('data-rule');

      if (rule !== undefined) {
        var ierror = false; // error flag for current input
        var pos = rule.indexOf(':', 0);
        if (pos >= 0) {
          var exp = rule.substr(pos + 1, rule.length);
          rule = rule.substr(0, pos);
        } else {
          rule = rule.substr(pos + 1, rule.length);
        }

        switch (rule) {
          case 'required':
            if (i.val() === '') {
              ferror = ierror = true;
            }
            break;

          case 'minlen':
            if (i.val().length < parseInt(exp)) {
              ferror = ierror = true;
            }
            break;

          case 'email':
            if (!emailExp.test(i.val())) {
              ferror = ierror = true;
            }
            break;

          case 'checked':
            if (! i.is(':checked')) {
              ferror = ierror = true;
            }
            break;

          case 'regexp':
            exp = new RegExp(exp);
            if (!exp.test(i.val())) {
              ferror = ierror = true;
            }
            break;
        }
        i.next('.validation').html((ierror ? (i.attr('data-msg') !== undefined ? i.attr('data-msg') : 'wrong Input') : '')).show('blind');
      }
    });
    f.children('textarea').each(function() { // run all inputs

      var i = $(this); // current input
      var rule = i.attr('data-rule');

      if (rule !== undefined) {
        var ierror = false; // error flag for current input
        var pos = rule.indexOf(':', 0);
        if (pos >= 0) {
          var exp = rule.substr(pos + 1, rule.length);
          rule = rule.substr(0, pos);
        } else {
          rule = rule.substr(pos + 1, rule.length);
        }

        switch (rule) {
          case 'required':
            if (i.val() === '') {
              ferror = ierror = true;
            }
            break;

          case 'minlen':
            if (i.val().length < parseInt(exp)) {
              ferror = ierror = true;
            }
            break;
        }
        i.next('.validation').html((ierror ? (i.attr('data-msg') != undefined ? i.attr('data-msg') : 'wrong Input') : '')).show('blind');
      }
    });
    if (ferror) return false;
    var action = $(this).attr('action');
    if( ! action ) {
      action = '/main/sendmail';
      if($(this).attr('class') == "contactForm"){
        var title = "????????????";
        var content = "?????? : "+$('#formname').val()+"\n????????? : "+$('#formphone').val()+"\n????????? : "+$('#formemail').val()+"\n?????? : "+$('#formaddress').val()+"\n???????????? : "+$('#formtext').val();
        var email = $('#formemail').val();
        var res = 0;
      }
      else {
        var title = "????????????";
        var content = "?????? : "+$('#name_').val()+"\n????????? : "+$('#phone_').val()+"\n????????? : "+$('#company_').val()+"\n??????/?????? : "+$('#manager_').val()+"\n????????? : "+$('#email_').val()+"\n???????????? : "+$('#text_').val();
        var email = $('#email_').val();
        var res = 1;
      }
    }
    var result = json(action,{'title':title,'text':content,'email':email});
    if(result.result == true) {
        if(res) {
          $("#sendmessage_").addClass("show");
        }
        else {
           $("#sendmessage").addClass("show");
        }
        $("#errormessage").removeClass("show");
        $('.contactForm').find("input, textarea").val("");
    } else {
        $("#sendmessage").removeClass("show");
        $("#sendmessage_").removeClass("show");
        $("#errormessage").addClass("show");
        $('#errormessage').html(msg);
    }

    return false;
  });

});
