$(function() {
  const value=$("#password_reg").val();

  $.validator.addMethod("checkupper", function(value) {
    return /[A-Z]/.test(value);
  });

  $.validator.addMethod("checklower", function(value) {
    return /[a-z]/.test(value);
  });

  $.validator.addMethod("checkdigit", function(value) {
    return /[0-9]/.test(value);
  });

  $.validator.addMethod("checkspecial", function(value) {
    return /^(?=.*[@#$%&])/.test(value);
  });

  $("form[name='registration']").validate({
    rules: {
      username: {
        required: true,
        maxlength: 50,
        minlength: 6
      },
      password: {
        required: true,
        checkupper: true,
        checklower: true,
        checkdigit: true,
        checkspecial: true,
        minlength: 8,
        maxlength: 50
      },
      password_confirm: {
        equalTo: "#password",
        required: true,
        minlength: 8,
        maxlength: 50
      },
      firstname: {
        required: true,
        maxlength: 50
      },
      lastname: {
        required: true,
        maxlength: 50
      },
      address1: {
        required: true,
        maxlength: 100
      },
      address2: {
        required: false,
        maxlength: 100
      },
      city: {
        required: true,
        maxlength: 50
      },
      state: {
        required: true,
        maxlength: 52
      },
      zipcode: {
        required: true,
        minlength: 5,
        maxlength: 10
      },
      phonenumber: {
        required: true,
        maxlength: 12
      },
      dob: {
        required: true,
        minlength: 5
      },
      email: {
        required: true,
        email: true
      }
    },
    messages: {
      firstname: "Enter your firstname",
      lastname: "Enter your lastname",
      password: {
        required: "Enter a valid password",
        checkupper: "One uppercase",
        checklower: "One lowercase",
        checkdigit: "One digity",
        checkspecial: "One special",
        minlength: "Your password must be at least 8 characters long"
      },
      password_confirm: {
        equalTo: "Password must match.",
      },
      email: "Please enter a valid email address"
    },

    submitHandler: function(form) {
      form.submit();
    }
  });
});

function phoneFormatter() {
  $('#phonenumber').on('input', function() {
    let number = $(this).val().replace(/[^\d]/g, '')

    if (number.length >= 10) {
      number = number.slice(0, 10);
      number = number.replace(/(\d{3})(\d{3})(\d{4})/, "$1-$2-$3");
    }
    $(this).val(number)
  });
};

$(phoneFormatter);

function zipFormatter() {
  $('#zipcode').on('input', function() {
    let number = $(this).val().replace(/[^\d]/g, '')

    if (number.length >= 9) {
      number = number.slice(0, 9);
      number = number.replace(/(\d{5})(\d{4})/, "$1-$2");
    }
    $(this).val(number)
  });
};

$(zipFormatter);

$(document).ready(function () {
    const docHeight = $('#content').height();
    const wantedHeight = docHeight - 376;
    $('#content').css({ "min-height": wantedHeight });
});
