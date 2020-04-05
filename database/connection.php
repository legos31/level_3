<?php

class Connection {
   public static function make ($connection) {
      return new PDO ("{$connection['mysqlhost']}; dbname={$connection['dbname']}; {$connection['charset']};", "{$connection['user_name']}", "{$connection['pass']}" );
   }
}