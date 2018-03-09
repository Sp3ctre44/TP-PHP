<?php

$config = [
    'host' => 'localhost',
    'port' => 3306,
    'database' => 'php_is_best',
    'username' => 'root',
    'passwd' => ''
];
extract($config);
try {
    $pdo = new PDO(
        "mysql:host=$host;port=$port;dbname=$database",
        $username,
        $passwd);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    var_dump($pdo);


    $pdo->exec("INSERT INTO users (username,email,note) VALUES (henry, henry@gmail.com, 15");
    var_dump(sprintf("Last insert: %s", $pdo->lastInsertId()));
    $stmt = $pdo->query("SELECT * FROM users");
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        var_dump($row['username']);
    }
    $stmt->closeCursor();

} catch (PDOException $e) {
    var_dump("erreur config !");
} finally {
    $pdo = null;
}

$sql = "UPDATE php_is_best SET "