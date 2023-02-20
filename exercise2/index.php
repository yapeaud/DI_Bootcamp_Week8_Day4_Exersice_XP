<?php

$pdo = require("connect.php");

// Créez une requête SQL
$sql = "CREATE TABLE COMPANY (
    ID      INT     PRIMARY KEY     NOT NULL,
    NAME    TEXT    NOT NULL,
    AGE     INT     NOT NULL,
    ADDRESS CHAR(50),
    SALARY  REAL
)";

// Exécuter une requête pour créer la table
$statement = $pdo->prepare($sql);

if ($statement->execute()) {
  echo "Table created successfully";
} else {
  echo "Error creating table: " ;
}

// Fermez la connexion à la base de données.
$pdo = null;
?>