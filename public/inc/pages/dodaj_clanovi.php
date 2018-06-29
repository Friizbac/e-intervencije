<?php
include("loc.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $ime = $_POST['ime'];
    $prezime = $_POST['prezime'];
    $br_mob = $_POST['br_mob'];
    $sql = "INSERT INTO clanovi (ime, prezime, br_mob)
VALUES ('$ime', '$prezime', '$br_mob')";
}
if (mysqli_query($con, $sql)) {
    echo "Uspješno dodan operativni član.";
} else {
    echo $sql . "<br>" . mysqli_error($con);

}
?>
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <p class="lead"><b>Popunite za dodavanje operativnog člana.</b></p>
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
            <label for="usr">Broj mobitela (+385):</label>
            <input type="text" class="form-control" id="br_mob" name="br_mob">
        </div>


        <button type="submit" class="btn btn-primary">Dodaj</button>
    </form>
</div>
