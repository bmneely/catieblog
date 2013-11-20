  function toggleSignIn(){
    if ($(".sign-up").is(":visible")){
      $(".sign-up").toggle();
    } else {
      $(".sign-in").toggle();   
    }
  }

  function toggleSignUp(){
    $(".sign-up").toggle();
  }

  // $(function () {
  //   $('form').on('submit', function (e) {
  //     $.ajax({
  //       type: 'post',
  //       url: '/session/signin.php',
  //       data: $('form').serialize(),
  //       success: function () {
  //         $("#login-area").empty();

  //         user_name = '<?php session_start(); echo $_SESSION["name"]; ?>';
  //         console.log(user_name);
  //         $("#login-area").append("<li class='float-right'><a href='#' onclick='toggleSignIn()'><span class='log-in-text'>" + user_name + "</span><i class='fa fa-sign-out'></i></a></li>");
  //       }
  //     });
  //     e.preventDefault();
  //   });
  // });
