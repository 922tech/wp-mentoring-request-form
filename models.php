<?php
/**
 * The logic for the database
 */
namespace Models;

function test(){
  echo 'THIS IS WORKING';
}


class MenteeRequest {
    public $first_name;
    public $last_name;
    public $phone;
    public $field;
    public $description;
  
    public function saveToDatabase() {
      global $wpdb;
  
      $table_name = $wpdb->prefix . 'mentee_request';
  
      $data = array(
        'first_name' => $this->first_name,
        'last_name' => $this->last_name,
        'phone' => $this->phone,
        'field' => $this->field,
        'description' => $this->description
      );

      $format = array('%s', '%s', '%s', '%s', '%s');
  
      $wpdb->insert($table_name, $data, $format);
    }
  }
  

