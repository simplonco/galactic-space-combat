<?php

/**
 * Park Address. 
 */
class AddressPark extends Address {
  /**
   * Initialization. 
   */
  protected function _init() {
    $this->_setAddressTypeId(Address::ADDRESS_TYPE_PARK);
  }
}