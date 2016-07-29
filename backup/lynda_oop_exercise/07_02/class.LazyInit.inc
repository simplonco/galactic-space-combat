<?php

class LazyInit {
  protected $_property;
  function getProperty() {
    if (is_null($this->_property)) {
      $this->_property = 'init';
    }
    return $this->_property;
  }
}