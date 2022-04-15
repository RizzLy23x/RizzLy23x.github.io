<?php
// Create database connection using config file
include_once("connect.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM datamhs ORDER BY Nim ASC");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa | A1 Teknik Informatika</title>
    <link rel="stylesheet" href="../CRUDUTS/css/styles.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body id="main">
    <header>
        <nav class="nav-link">
            <h2 id="logo">A1 TIF</h2>
            <ul class="nav-items">
                <li><a class="btn-profile" href="#">Data</a></li>
                <li><a class="btn-porto" href="#">Tugas</a></li>
                <li><a class="btn-contacts" href="#">Contacts</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="sc1">
            <div class="banner">
                <h1>Data Mahasiswa</h1>
                <p>A1 Teknik Informatika | Semester 4</p>
                <h3>Scroll Down</h3>
    </div>
        </section>

        <div class="title-section">
            <h1>CREATED BY</h1>
        </div>

        <section id="profile">
            <div class="img-profile">
                <img src="../CRUDUTS/img/Foto.png" alt="Gambar Rizal">
            </div>

            <div class="banner-profile">
                <h2 class="name">RIZAL<br>SYAEPULLOH</h2>
                <h2 class="nim">41037006200016</h2>
                <h3 class="job">A1 Teknik Informatika</h3>
            </div>
        </section>

        <section>
            <div class="rizal-works">
                <h1>Data A1 TIF</h1>
                <h2>Berikut Data Mahasiswa A1 Teknik Informatika Semester 4</h2>
                <!--Tampilin Database-->
            </div>
        </section>

        <section id='tabel'>
            <div class="text-white">
                <a class="pl-[30px] hover:text-black" href="../CRUDUTS/php/create.php"><button class="h-[45px] w-[130px] rounded-full bg-[#035cc2]">Add Product</button></a><br/><br/> 
                <table class="w-full border-separate" width='75%'>
                    <thead class="bg-[#035cc2] border-dashed border-[#00b0fc] h-[40px]">
                        <tr align="left">
                            <th>Nim</th> <th>Nama</th> <th>Jenis Kelamin</th> <th>No. Whatsapp</th> <th>Jalur Pendaftaran</th> <th>Status</th> <th>Edit</th> 
                        </tr>
                    </thead>
                    <?php  
                    while($user_data = mysqli_fetch_array($result)) {         
                        echo "<tr>";
                        echo "<td>".$user_data['Nim']."</td>";
                        echo "<td>".$user_data['Nama']."</td>";
                        echo "<td>".$user_data['Jenis_kelamin']."</td>";
                        echo "<td>".$user_data['Whatsapp']."</td>"; 
                        echo "<td>".$user_data['Jalur_pendaftaran']."</td>";
                        echo "<td>".$user_data['Status_mahasiswa']."</td>";
                        echo "<td><a href='php\update.php?Nim=$user_data[Nim]'>Update</a> | <a href='php\delete.php?Nim=$user_data[Nim]'>Delete</a></td>";       
                        echo "</tr>";
                    }
                    ?>
                </table>
            </div>
        </section>
    </main>
</body>

</html>