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

  $(document).ready(function(){
      $(".delete_comment").click(function(){
          var id = $(this).attr("value");
          var jqTarget = "#comment-" + id;

          $.ajax({
              type: "POST",
              url: "../../resources/delete_comment.php",
              data: {id: id},
              success: function(data){
                $(jqTarget).remove();
              }
          });
      });
  });


  $(document).ready(function(){
    $("#comment-form").submit(function(e){
      var postData = $(this).serializeArray();
      console.log(postData);
      var formURL = $(this).attr("action");
          $.ajax({
              type: "POST",
              url: "/partials/new-comment.php",
              data: postData,
              success:function(data, textStatus, jqXHR){
                $(".comments").append("<div class='comment-content' id='comment-" + postData[1].value + "'>"
                  + postData[0].value
                  + "<div class='float-right'><a href='javascript:void(0)' class='delete_comment' value='" + postData[0].value + "'><i class='fa fa-trash-o'></i></a></div>"
                  + "<div class='comment-user'>"
                  + postData[2].value
                  + "</div></div>");
                alert("ALERT ALERT IT IS THE DOCTOR!!!!");
              }
          });
          e.preventDefault(); //STOP default action
          // $("#comment-form").submit(); //Submit  the FORM
      });
  });

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
