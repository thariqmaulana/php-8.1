<?php

/**apa beda dengan void?
 * void tidak mengembalikan apapun
 * never tidak mengembalikan apapun dan harus mengehntikan program
 * entah erroratau exit, die, ....
 * kalau tidak dihentikan justru malah error
 */

function stop(): never
{
  echo 'stop';
  exit();
}

stop();

echo 'tidak akan dijalankan';