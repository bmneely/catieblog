<?php

  class User {
    
    function user_name($user) {
      $user_name = "";
      if (is_null($user["first_name"]) || $user["first_name"] === ""){
        if (is_null($user["last_name"]) || $user["last_name"] === ""){
          $user_name = $user["email"];
        } else {
          $user_name = ucwords($user["last_name"]);
        }
      } else {
        $user_name = ucwords($user["first_name"] . " " . $user["last_name"]);
      }
      return $user_name;
    }
  }
?>