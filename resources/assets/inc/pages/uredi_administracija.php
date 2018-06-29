<?php
include("loc.php");
$id = $_GET['id'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $ime = $_POST['ime'];
    $prezime = $_POST['prezime'];
    $email = $_POST['email'];
    $lozinka = $_POST['lozinka'];
    $lozinka = md5($lozinka);

    $sql = "UPDATE admin SET ime = '$ime', prezime = '$prezime', email = '$email' WHERE id = '$id'";
    if (!empty($lozinka)) {
        $sql2 = "UPDATE admin SET lozinka = '$lozinka' WHERE id = '$id'";
    }
}
if (mysqli_query($con, $sql)) {
    echo "Uspješno uređen administrator!";

} else {
    echo $sql . "<br>" . mysqli_error($con);

}
if (!empty($lozinka)) {
    if (mysqli_query($con, $sql2)) {
        echo "<br><b>Uspješno uređena lozinka administratora!</b>";

    } else {
        echo $sql . "<br>" . mysqli_error($con);

    }
}
?>
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <p class="lead"><b>Popunite za uređivanje administratora</b></p>
            <ul class="list-unstyled">
            </ul>
        </div>
    </div>
    <br>
    <?php
    $sql = mysqli_query($con, "SELECT * FROM admin WHERE id = '$id'");
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
            <label for="usr">E-Mail adresa:</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php
            echo $row['email'];
            ?>">
        </div>
        <div class="form-group">
            <label for="usr">Lozinka: (Ako ostavite prazno lozinka neće biti promjenjena)</label>
            <input type="password" class="form-control" id="lozinka" name="lozinka">
        </div>


        <button type="submit" class="btn btn-primary">Uredi</button>
    </form>
</div>
