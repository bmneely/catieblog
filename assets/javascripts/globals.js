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
    var formURL = $(this).attr("action");
    $.ajax({
      type: "POST",
      url: "/partials/new-comment.php",
      data: postData,
      success:function(data, textStatus, jqXHR){
        $(".comments").append("<div class='comment-content' id='comment-" + encodeURI(postData[1].value) + "'>" + encodeURI(postData[0].value) + "<div class='float-right'><a href='javascript:void(0)' class='delete_comment' value='" + encodeURI(postData[0].value) + "'><i class='fa fa-trash-o'></i></a></div>" + "<div class='comment-user'>" + encodeURI(postData[2].value) + "</div></div>");
      }
    });
  e.preventDefault();
});