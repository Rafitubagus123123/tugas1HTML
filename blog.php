<?php
include 'config.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tugas Pemograman Web</title>

   
    <link rel="stylesheet" href="style.css" />

</head>

<body>
    <nav id="navbar" class="nav">
        <ul>
            <li>
                <a href="#welcome-section">Home</a>
            </li>
            <li>
                <a href="#gallery">Gallery</a>
            </li>
            <li>
                <a href="#blog">Blog</a>
            </li>
            <li>
                <a href="#contact">Contact</a>
            </li>
        </ul>
    </nav>






    <section id="blog" class="project-section">
        <h2 class="projects-section-header">Blog</h2>

        <div class="projects-grid">
             <?php
    $query = "SELECT * FROM blog";
    $result = mysqli_query($conn, $query);

    $no = 1;

    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            if ($no >=0) {
            ?>
            

            <a href="https://cfxbu9.csb.app/" target="_blank" class="project project-tile">
                <img class="project-image"
                    src="assets/images/<?= $row["image"] ?>" alt="Foto artikel 1" />
                <p class="project-title">

                    <?= $row["judul"] ?>

                </p>
            </a>
             <?php } 
            $no++;
        }
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    } ?>

           
           


        </div>
       


    </section>

 









    <footer>
        <p id="foot">
            &copy; Rafi Tubagus
            <a id="fot" href="#" target="_blank">220211060202
            </a>
        </p>
    </footer>

    <script src="script.js"></script>
    <script>
        var text = " Rafi Tubagus 220211060202";
        var speed = 100; // milliseconds per character

        function typeWriter() {
            if (text.length > 0) {
                document.getElementById("typewriter").innerHTML += text.charAt(0);
                text = text.substring(1);
                setTimeout(typeWriter, speed);
            }
        }

        typeWriter();
    </script>



</body>

</html>