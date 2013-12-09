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

function deleteComment(id){
  var jqTarget = "#comment-" + id;
  $.ajax({
    type: "POST",
    url: "../../resources/delete_comment.php",
    data: {id: id},
    success: function(data){
      $(jqTarget).remove();
    }
  });
};

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

  $("#comment-form").submit(function(e){
    var postData = $(this).serializeArray();
    var formURL = $(this).attr("action");
    $.ajax({
      type: "POST",
      url: "/partials/new-comment.php",
      data: postData,
      success:function(data, textStatus, jqXHR){
        $("#comment-text-area").val('');
        $(".comments").append("<div class='comment-content' id='comment-"
          + data
          + "'>"
          + escapeHtml(postData[0].value)
          + "<div class='float-right'><a href='javascript:deleteComment(" +  data + ")' class='delete_comment' value='"
          + data
          + "'><i class='fa fa-trash-o'></i></a></div>"
          + "<div class='comment-user'>"
          + escapeHtml(postData[2].value)
          + "</div></div>"
        );
      }
    });
    e.preventDefault();
  });
});

function escapeHtml(text) {
  return text
      .replace(/&/g, "&amp;")
      .replace(/</g, "&lt;")
      .replace(/>/g, "&gt;")
      .replace(/"/g, "&quot;")
      .replace(/'/g, "&#039;");
}

