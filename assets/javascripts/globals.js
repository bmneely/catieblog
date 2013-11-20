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