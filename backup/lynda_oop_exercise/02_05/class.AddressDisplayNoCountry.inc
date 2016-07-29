<?php

/**
 * Strategy to display a partial address.
 */
class AddressDisplayNoCountry implements AddressDisplay {
  /**
   * Display an addess without a country.
   */
  public static function display($address) {
    // Street address.
    $output = $address->street_address_1;
    if ($address->street_address_2) {
      $output .= '<br/>' . $address->street_address_2;
    }

    // City, Subdivision Postal.
    $output .= '<br/>';
    $output .= $address->city_name . ', ' . $address->subdivision_name;
    $output .= ' ' . $address->postal_code;

    return $output;
  }

  /**
   * Is this method of display available?
   * @return boolean
   */
  public static function isAvailable($address) {
    return $address->country_name ? FALSE : TRUE;
  }
}