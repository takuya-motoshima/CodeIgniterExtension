<?php
defined('BASEPATH') OR exit('No direct script access allowed');

abstract class AppController extends \X\Controller\Controller {

  protected function beforeView() {
    if (isset($_SESSION['user'])) {
      parent::set('user', $_SESSION['user']);
    }
  }
}