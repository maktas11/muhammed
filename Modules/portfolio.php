<?php
function getportfolio()
{
    global $pdo;
    $query = $pdo->prepare(query: "SELECT * FROM portofolio");
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_CLASS,'Portfolio');
    return $result;
}