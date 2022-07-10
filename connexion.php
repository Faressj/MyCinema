<?php
        $db = new PDO('mysql:host=localhost;dbname=cinema', 'root', 'root');
        $allclients = $db->query('SELECT * FROM user ORDER BY id DESC limit 0');
        if(isset($_GET['submitclient']) && !empty($_GET['sc'])){
                $rechercheclient = htmlspecialchars($_GET['sc']);
                echo $allclients = $db->query('SELECT * FROM user WHERE firstname LIKE "%'.$rechercheclient.'%" OR lastname LIKE "%'.$rechercheclient.'%" ORDER BY id DESC');
        }
?>