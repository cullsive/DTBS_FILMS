<?php


try {

    $pdo = new PDO(
        "pgsql:host=localhost;port=5432;dbname=FILM_TDBS",
        "postgres",
        "KaDy76600"
    );

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->query("SELECT id, type_de_film, titre, acteur_pr, histoire, date_de_sortie FROM FILM_CULL");

    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($data);

} catch (PDOException $e) {
    echo json_encode(["error" => $e->getMessage()]);
}



?>




