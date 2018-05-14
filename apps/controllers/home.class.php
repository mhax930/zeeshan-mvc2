<?php

use Models\User;

class Home extends Superb{

    function __construct(){
      parent::__construct("general");
    } 
	
    function showHome() {
          //$GET_LIST_FROM_METHOD = SOME_MODEL::SOME_METHOD();
          //$results['GET_LIST_FROM_METHOD'] = $GET_LIST_FROM_METHOD;
          $user = User::create(['username'=>'Zeeshan']);

          $this->set2(array('new_user'=>$user));
          $this->Viewer("index");
    }
}
?>