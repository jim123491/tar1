<?php
for ($i = 1; $i <= $argv[3]; $i++)
    echo (!($i % $argv[1] ) && !($i % $argv[2])) ? "fb " : ((!($i % $argv[1])) ? "f " : ((!($i % $argv[2])) ? "b ": "$i "));