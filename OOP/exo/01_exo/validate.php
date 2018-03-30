<!--
is_string() - determine if variable is a string.
is_float() -determine if var is a float
is_int() - determine if var is intiger
is_bool() - determine if var is a bolean
is_object() - determine if var an $object
is_array() - determine if var is an array
-->

<?php
class Validator {

  function checkString($string) {
    return is_string($string);
  }

  function checkInt($int) {
    return is_int($int);
  }

}

?>
