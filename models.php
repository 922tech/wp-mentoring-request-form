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
    public $email;

    function __construct($first_name, $last_name, $phone, $field, $description, $email) {
      $this->first_name = $first_name;
      $this->last_name = $last_name;
      $this->phone = $phone;
      $this->field = $field;
      $this->description = $description;
      $this->email = $email;
    }

    public function is_clean(){
      $regexFirstName = '/^[A-Za-z\s]{1,50}$/';
      $regexLastName = '/^[A-Za-z\s]{1,50}$/';
      $regexPhone = '/^[0-9]{10}$/';
      $regexField = '/^[A-Za-z\s]{1,50}$/';
      $regexDescription = '/^.{1,500}$/';
      $regexEmail = '/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/';

      if (
        preg_match($regexFirstName, $data['first_name']) &&
        preg_match($regexLastName, $data['last_name']) &&
        preg_match($regexPhone, $data['phone']) &&
        preg_match($regexField, $data['field']) &&
        preg_match($regexDescription, $data['description']) &&
        preg_match($regexEmail, $data['email'])
        )
         {
          return true;
      }

    }

    public function saveToDatabase() {
      global $wpdb;
  
      $table_name = $wpdb->prefix . 'mentee_request';
  
      $data = array(
        'first_name' => $this->first_name,
        'last_name' => $this->last_name,
        'phone' => $this->phone,
        'field' => $this->field,
        'description' => $this->description,
        'email' => $this->email
      );

      $format = array('%s', '%s', '%s', '%s', '%s', '%s');

      if ($this->is_clean()){
      return $wpdb->insert($table_name, $data, $format);
     }
  }
}
  


class Tag {
  public $tagname;
  public $attrs;
  public $attrs_string;

  function __construct($tagname, $attrs) {
      $this->tagname = $tagname;
      $this->attrs = $attrs;
  }

  private function collect_attrs() {
      $attrs_string = "";
      foreach ($this->attrs as $key => $val) {
          $attrs_string .= "{$key}={$val} ";
      }
      $this->attrs_string = $attrs_string;
      return $attrs_string;
  }

  public function render($includes = null) {
      return "<{$this->tagname} {$this->attrs_string}>{$includes}</{$this->tagname}>";
  }
}

$tag = new Tag('div', array('class' => 'CLASS', 'name' => 'NAME'));
echo $tag->render();


class Form {

  public function li($include){
    return '<li>$include</li>';
  }
  
  public function input_text($name='form_attr',$label='form-label',$class='form-input', $description='',$direction='row', $size='sm', $grid_num=2, $language='en_US'){
    // new Tag('label', array('class' => $class, 'name' => $name))
 
    return "
    <div class='form-group $direction'>
    <label for='{$name}' class='col-{$size}-2 col-form-label'>{$label}</label>
    <div class='col-{$size}-{$grid_num}'>
      <input type='text' class='form-control-plaintext' id='{$name}' name='{$name}'>
      <small class='form-text text-muted'>{$description}</small>
    </div>
    </div>
    ";
  }

  public function email($name='form_attr',$label='form-label',$class='form-input'){
    return 
    "<label for='$name' class='$class'>$label</label>
    <input type='text' name=$name id=$name /> ";
  }
}
