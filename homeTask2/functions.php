<?php

function myMin($name1,$name2) {
  if (is_array($name1) && is_array($name2)) {
    if (count($name1) < count($name2)) {
      return $name1;
    } else {
      return $name2;
    }
  } elseif ((is_numeric($name1) && is_numeric($name2)) ||
    (is_string($name1) && !is_numeric($name1) && 
      is_string($name2) && !is_numeric($name2))) {
    if ($name1 < $name2) {
      return $name1;
    } else {
      return $name2;
    }
  } else {
    throw new Exception('illegal arguments');
  }
}


function myMax($name1,$name2) {
  if (is_array($name1) && is_array($name2)) {
    if (count($name1) > count($name2)) {
      return $name1;
    } else {
      return $name2;
    }
  } elseif ((is_numeric($name1) && is_numeric($name2)) ||
    (is_string($name1) && !is_numeric($name1) && 
      is_string($name2) && !is_numeric($name2))) {
    if ($name1 > $name2) {
      return $name1;
    } else {
      return $name2;
    }
  } else {
    throw new Exception('illegal arguments');
  }
}


function myPush($arr,$a) {
  if (is_array($arr) || empty($arr)) {
    $arr[] = $a;
    return $arr;  
  } else {
    throw new Exception("illegal arguments");    
  }
}


function myUnshift($arr,$a) {
  if (is_array($arr) || empty($arr)) {
    $result[] = $a;
    foreach ($arr as $arr_key => $arr_value) {
      if (is_numeric($arr_key)) {
        $result[] = $arr_value;
      } else {
        $result[$arr_key] = $arr_value;
      }
    }
    return $result;
  } else {
    throw new Exception("illegal arguments");
  }
}


function myShift(&$arr) {
  if (isset($arr) && is_array($arr) && !empty($arr)) {
    $result;
    foreach ($arr as $key => $value) {
      if (!isset($result)) {
        $result = $value;
      } elseif (is_numeric($key)) {
        $array[] = $value;
      } else {
        $array[$key] = $value; 
      }
    }
    $arr = $array;
    return $result;
  } else {
    throw new Exception("illegal arguments");
  }
}

?>
