<?php
//helps to naviagate directory
function url_for($script_path) {
    // add the leading '/' if not present
    if($script_path[0] != '/') {
      $script_path = "/" . $script_path;
    }
    return WWW_ROOT . $script_path;
  }
  //url encoding
  //works simply sending u in the url
  function u($string ="") {
    return urlencode($string);
  }

  //raw url
  function raw_u($string = "") {
    return rawurlencode($string);
  }
 //prevent html char in input or url or prevent dynamic value executed improperly
  function h($string=""){
    return htmlspecialchars($string);
  }

  function error_404() {
   header($_SERVER["SERVER_PROTOCOL"]."404 Not Found");
   exit();

  }

  function error_500() {
    header($_SERVER["SERVER_PROTOCOL"]."500 Internal Server Error ");
    exit();

  }

  function redirect_to($location) {
    header("Location:". $location);
    exit();
  }
//check if the form has been submitted with POST request
  function is_post_request() {
    return $_SERVER['REQUEST_METHOD'] == 'POST';
  }
  
  function is_get_request() {
    return $_SERVER['REQUEST_METHOD'] == 'GET';
  }
  
  function display_errors($errors=array()) {
    $output = '';
    if(!empty($errors)) {
      $output .= "<div class=\"errors\">";
      $output .= "Please fix the following errors:";
      $output .= "<ul>";
      foreach($errors as $error) {
        $output .= "<li>" . h($error) . "</li>";
      }
      $output .= "</ul>";
      $output .= "</div>";
    }
    return $output;
  }

  function get_and_clear_session_message() {
    if(isset($_SESSION['message']) && $_SESSION['message'] != '') {
      $msg = $_SESSION['message'];
      unset($_SESSION['message']); //clears sessions value 
      return $msg;
    }
  }

  function display_session_message() {
    $msg = get_and_clear_session_message();
    if(!is_blank($msg)) {
      return '<b><div id="message">' . h($msg) . '</b></div>';
    }
  }
?>
