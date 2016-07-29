<?php

/**
 * Shared interface for interactions. 
 */
interface Model {
  /**
   * Load a model.
   * @param int $address_id 
   */
  static function load($address_id);
  
  /**
   * Save a model. 
   */
  function save();
}