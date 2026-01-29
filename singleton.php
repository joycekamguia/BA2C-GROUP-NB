
<?php
class DatabaseConnector {
   private static $instance;
   private function __construct() {
       echo "DatabaseConnector instance created.\n";
   }
   public static function getInstance() {
       if (!isset(self::$instance)) {
           self::$instance = new DatabaseConnector();
       } else {
           echo "Instance already exists.\n";
       }
       return self::$instance;
   }
}
$db1 = DatabaseConnector::getInstance();
$db2 = DatabaseConnector::getInstance();
?>