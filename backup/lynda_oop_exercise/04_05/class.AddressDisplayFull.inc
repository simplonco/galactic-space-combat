<?php

/**
 * Strategy to display a full address.
 */
class AddressDisplayFull implements AddressDisplay {
  /**
   * Display an addess with a country.
   */
  public static function display($address) {
    $output = AddressDisplayNoCountry::display($address);
    $output .= '<br/>';
    $output .= $address->country_name;
    return $output;
  }

  /**
   * Is this method of display available?
   * @return boolean
   */
  public static function isAvailable($address) {
    return $address->country_name ? TRUE : FALSE;
  }
}