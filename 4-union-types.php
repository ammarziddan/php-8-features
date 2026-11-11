<?php

class Example {
  public string|int|bool|array $data;
}

$example = new Example();
/* $example->data = "string"; */
/* $example->data = 1; */
/* $example->data = false; */
$example->data = [1, "two", false];

/* var_dump($example); */

function sampleFunction(string|array $data): string|array
{
  if(is_array($data)) {
    return ["Array"];
  } else {
    return "String";
  } 
}

var_dump(sampleFunction("Eko"));
var_dump(sampleFunction([]));
