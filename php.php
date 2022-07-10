<?php
include("connexion.php");
// SELECT *
// FROM table1
// INNER JOIN table2 ON table1.id = table2.fk_id
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css"> 
        <title>My Cinema</title>
    </head>
    <header>
        <h2>MY CINEMA</h2>
    </header>
    <body>
        <form name="form" action="" method="GET">
            <div class="buttons">
                <select name="genre" class=btn-1 value="">
                    <option value = "">Genres</option>
                    <option value = "Action">Action</option>
                    <option value = "Adventure">Adventure</option>
                    <option value = "Animation">Animation</option>
                    <option value = "Biography">Biography</option>
                    <option value = "Comedy">Comedy</option>
                    <option value = "Crime">Crime</option>
                    <option value = "Drama">Drama</option>
                    <option value = "Family">Family</option>
                    <option value = "Fantasy">Fantasy</option>
                    <option value = "Horror">Horror</option>
                    <option value = "Mystery">Mystery</option>
                    <option value = "Romance">Romance</option>
                    <option value = "Sci-Fi">Sci-Fi</option>
                    <option value = "Thriller">Thriller</option>
                </select>
                <select name= "distributor" class=btn-2 value="">
                        <option value = "">Distributeurs</option>
                        <option value = "1">Walt Disney Pictures</option>
                        <option value = "2">Walt Disney Animation Studios</option>
                        <option value = "3">Columbia Pictures</option>
                        <option value = "4">Marvel Studios</option>
                        <option value = "5">New Line Cinema</option>
                        <option value = "6">Warner Bros</option>
                        <option value = "7">B24</option>
                        <option value = "8">Lucasfilm</option>
                        <option value = "9">Twentieth Century Fox Film Corporation</option>
                        <option value = "10">Metro-Goldwyn-Mayer (MGM)</option>
                        <option value = "11">Paramount Pictures</option>
                        <option value = "12">Universal Pictures</option>
                        <option value = "13">SC-2 Pictures</option>
                        <option value = "14">Columbia Pictures Corporation</option>
                        <option value = "15">DreamWorks</option>
                        <option value = "16">Eon Productions</option>
                        <option value = "17">Halcyon Company</option>
                        <option value = "18">Marvel Enterprises</option>
                        <option value = "19">Pixar Animation Studios</option>
                        <option value = "20">FortyFour Studios</option>
                        <option value = "21">Heyday Films</option>
                        <option value = "22">Roth Films</option>
                        <option value = "23">Warner Bros. Pictures</option>
                        <option value = "24">Atlas Entertainment</option>
                        <option value = "25">DreamWorks Animation</option>
                </select>
            </div>
            <input id="searchbar" type="search" name="sf" placeholder="Chercher un Film...">
            <input type='submit' class='submitfilm' name='submitfilm'>
            <input id="searchbar" type="search" name="sc" placeholder="Chercher un Client">
            <input type='submit' class='submitclient' name='submitclient'>
        </form>
        <section class='affichage'>

            <?php
            
            if($allclients->rowCount() > 0){
                while($client = $allclients->fetch()){
                    ?>
                    <hr>
                    <p><?= $client['firstname'], " ", $client['lastname']; ?></p>
                    <button> Page Client</button>
                    <?php
                }
            }
                ?>

        </section>
    <p>
    <script src="script.js"></script>
</body>
</html>