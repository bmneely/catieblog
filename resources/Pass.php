<?php

  class Pass {

    private $salt = '@#soRand!&)**()';

    public function is_password_correct($user, $password){
      if ($user["password"] === $password){
        return true;
      } else {
        return false;
      }
    }

    public function crypt_pass($plain_pass){
      return crypt($plain_pass, $this->salt);
    }
  }
?>