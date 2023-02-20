<?php

// Créez une connexion de base de données au serveur PostgreSQL 
$pdo = require("connect.php");

$datas = [
    ["ID" => 1, "NAME" => "Paul", "AGE" => 32, "ADDRESS" => "California", "SALARY" => 20000.00 ],
    ["ID" => 2, "NAME" => "Allen", "AGE" => 25, "ADDRESS" => "Texas", "SALARY" => 15000.00 ],
    ["ID" => 3, "NAME" => "Teddy", "AGE" => 23, "ADDRESS" => "Norway", "SALARY" => 20000.00 ],
    ["ID" => 4, "NAME" => "Mark", "AGE" => 25, "ADDRESS" => "Rich-Mond", "SALARY" =>  65000.00  ],

];

// Créez une requête SQL pour l'insertion.
$sql = 'INSERT INTO COMPANY (ID,NAME,AGE,ADDRESS,SALARY)
    VALUES(:id,:name,:age,:address,:salary)';

$statement = $pdo->prepare($sql);


// Exécuter la requête à insérer dans la table
foreach($datas as $data) {
     $statement->execute([
            ":id" => $data["ID"],
            ":name" => $data["NAME"],
            ":age" => $data["AGE"],
            ":address" => $data["ADDRESS"],
            ":salary" => $data["SALARY"]
    ]);
}


// Fermez la connexion à la base de données
$pdo = null;
?>