<?php

class QueryBuilder {

   protected $pdo;

   public function __construct($pdo) {
      $this->pdo = $pdo;
   }

   public function getAll($table){
   
      $sql = "SELECT * FROM {$table}";
      $statement = $this->pdo->prepare($sql);
      $statement->execute();
      return $statement->fetchAll(PDO::FETCH_ASSOC);
   }

   public function create ($table, $params) {
      
      $keys = implode (',', array_keys($params));
      $tags = ":". implode (',:', array_keys($params));
      $sql = "INSERT INTO {$table} ({$keys}) VALUES ({$tags})";
      $statement = $this->pdo->prepare($sql);
      $statement->execute($params);

   }

   public function getOne($table, $id = 1)
   {
      $sql = "SELECT * FROM {$table} WHERE id = :id";
      $statement = $this->pdo->prepare($sql);
      $statement->bindValue(':id', $id);
      $statement->execute();
      return $statement->fetch(PDO::FETCH_ASSOC);

   }

}

?>