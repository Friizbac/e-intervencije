<?php
include("loc.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $ime = $_POST['ime'];
    $prezime = $_POST['prezime'];
    $email = $_POST['email'];
    $lozinka = $_POST['lozinka'];
    $lozinka = md5($lozinka);
    $sql = "INSERT INTO admin (ime, prezime, email, lozinka)
VALUES ('$ime', '$prezime', '$email', '$lozinka')";
}
if (mysqli_query($con, $sql)) {
    echo "Uspješno dodan administrator.";
} else {
    echo $sql . "<br>" . mysqli_error($con);
}
?>
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <p class="lead"><b>Popunite za dodavanje Administratora</b></p>
            <ul class="list-unstyled">
            </ul>
        </div>
    </div>
    <br>
    <form method="POST">
        <div class="form-group">
            <label for="usr">Ime:</label>
            <input type="text" class="form-control" id="ime" name="ime">
        </div>
        <div class="form-group">
            <label for="usr">Prezime:</label>
            <input type="text" class="form-control" id="prezime" name="prezime">
        </div>
        <div class="form-group">
            <label for="usr">E-Mail adresa:</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="form-group">
            <label for="usr">Lozinka:</label>
            <input type="password" class="form-control" id="lozinka" name="lozinka">
        </div>


        <button type="submit" class="btn btn-primary">Dodaj</button>
    </form>
</div>
