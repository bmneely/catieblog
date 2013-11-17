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
?>