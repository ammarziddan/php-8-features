<?php

function sayHello(string $first, string $middle, string $last = ""): void {
  echo "Hello $first $middle $last" . PHP_EOL;
}

// named argument
sayHello(first: "Ammar", middle: "Ziddan", last: "Nurrahman");
