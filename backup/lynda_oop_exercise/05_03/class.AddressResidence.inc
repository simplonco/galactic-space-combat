<?php

/**
 * Residential Address. 
 */
class AddressResidence extends Address {
  /**
   * Initialization. 
   */
  protected function _init() {
    $this->_setAddressTypeId(Address::ADDRESS_TYPE_RESIDENCE);
  }
}