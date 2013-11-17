<?php

  class Pass {

    private $salt = '@#soRand!&)**()';

    public function is_password_correct($user, $password){
      if ($user["password"] === $password){
        echo "yar";
        return TRUE;
      } else {
        return FALSE;
      }
    }

    public function crypt_pass($plain_pass){
      return crypt($plain_pass, $this->salt);
    }

  }

  $pass = new Pass();

  $test = [];

  $test["password"] = "chinese1";

  echo $pass->is_password_correct($test, "chinese1") . "\n";

?>