<?php
include("loc.php");
$id = $_GET['id'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $ime = $_POST['ime'];
    $prezime = $_POST['prezime'];
    $br_mob = $_POST['br_mob'];
    $sql = "UPDATE clanovi SET ime = '$ime', prezime = '$prezime', br_mob = '$br_mob' WHERE id = '$id'";
}
if (mysqli_query($con, $sql)) {
    echo "Uspješno uređen operativni član.";

} else {
    echo $sql . "<br>" . mysqli_error($con);

}
?>
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <p class="lead"><b>Popunite za uređivanje operativnog člana.</b></p>
            <ul class="list-unstyled">
            </ul>
        </div>
    </div>
    <br>
    <?php
    $sql = mysqli_query($con, "SELECT * FROM clanovi WHERE id = '$id'");
    $row = $sql->fetch_assoc();
    ?>
    <form method="POST">
        <div class="form-group">
            <label for="usr">Ime:</label>
            <input type="text" class="form-control" id="ime" name="ime" value="<?php
            echo $row['ime'];
            ?>">
        </div>
        <div class="form-group">
            <label for="usr">Prezime:</label>
            <input type="text" class="form-control" id="prezime" name="prezime" value="<?php
            echo $row['prezime'];
            ?>">
        </div>
        <div class="form-group">
            <label for="usr">Broj mobitela (+385):</label>
            <input type="text" class="form-control" id="br_mob" name="br_mob" value="<?php
            echo $row['br_mob'];
            ?>">
        </div>


        <button type="submit" class="btn btn-primary">Uredi</button>
    </form>
</div>
