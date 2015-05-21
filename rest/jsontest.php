<?php

  include('includes/json.php');

  $json = new json();

  $object = new stdClass();
  $object->FirstName = 'John';
  $object->LastName = 'Doe';
  $array = array(1,'2', 'Pieter', true);
  $jsonOnly = '{"Hello" : "darling"}';

  $json->add('status', '200');
  $json->add("worked");
  $json->add("things", false);
  $json->add('friend', $object);
  $json->add("arrays", $array);
  $json->add("json", $jsonOnly, false);

  // This will output the legacy JSON
  $json->send();

  // This will output the array, omitting names
  //$json->send_array();
  
?>