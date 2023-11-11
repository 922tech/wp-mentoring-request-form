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
