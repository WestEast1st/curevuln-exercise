<?php
    session_start();
    header("X-XSS-Protection: 0;");
    require 'common.php';

    if ($_SESSION['id'] == '') {
        header("Location: / ");
        exit();
    }

    $dbh = connectDB();
    $query  = " SELECT * FROM users WHERE id = :id; " ;
    try {

        $stmt   = $dbh->prepare($query);
        $stmt->bindParam(':id', $_GET['id'], PDO::PARAM_STR);
        $stmt->execute();
        $usersData = $stmt->fetchAll();

    } catch (PDOException $e) {
        return (bool)false ;
    }

    require 'template_info.php';
?>
