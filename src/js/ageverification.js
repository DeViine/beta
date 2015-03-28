//LINK THIS SCRIPT IN THE INDEX SO THAT AGEVERIFICATION.HTML IS OPENED IN MODAL ON PAGE LOAD

// When date and beta code are verified, h2 should turn green.

// When both data and beta code are verified, #enter should turn green and be clickable. 

// @author dsiddy Disable the submit button initially.

$(document).ready(function() {
  //Open the ageverification.html modal on document.ready

  $('#enter').attr('disabled', 'disabled');

  function dob_check() {
    var month = document.getElementById('month').value;
    var day = document.getElementById('day').value;
    var year = document.getElementById('year').value;
    var dbDate = year + '-' + month + '-' + day;
    var today = new Date();
    var birthDate = new Date(dbDate);
    var age = today.getFullYear() - birthDate.getFullYear();
    var m = today.getMonth() - birthDate.getMonth();
    if(m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
      age--;
    }

    if(age >= 21) {
      $('.ageText').css('color', 'rgb(61, 216, 97)');
      return true;
    }
    if(age <= 20) {
      $('.ageText').css('color', 'rgb(247,37,62)');
      return false;
    }
  }

  function code_check() {
    var code = ["jv101beta", "db111beta"];
    if(array.indexOf(code) < 0) {
      $('.betacodeText').css('color', 'rgb(61, 216, 97)');
      return true;
    } else if($('input[name="betacode"]').val() != code) {
      $('.betacodeText').css('color', 'rgb(247,37,62)');
      return false;
    }
  }

  function validateForm() {
    if(code_check() && dob_check()) {
      $('#enter').css('background', 'rgb(61, 216, 97)');
      $('#enter').removeAttr('disabled'); // @author dsiddy Enable the submit button if the form inputs are valid.
      return true;
    } else {
      $('#enter').css('background', 'rgb(247, 37, 62)');
      $('#enter').attr('disabled', 'disabled'); // @author dsiddy Disable the submit button if the form inputs aren't valid.
      return false;
    }
  }

  (function() {
    $('.bday').change(dob_check);
    $('.bday').keyup(validateForm);

    $('.betacode').change(code_check);
    $('.betacode').keyup(validateForm);
  })();
  //on submit == page exit
  // function validateForm() {
  //   if(validateForm()) {
  //     }
  // });
});
  