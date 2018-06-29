<?php
include("loc.php");
$id = $_GET['id'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $naslov = $_POST['naslov'];
    $opis = $_POST['opis'];
    $sql = "UPDATE obavijesti SET naslov = '$naslov', opis = '$opis' WHERE id = '$id'";
}
if (mysqli_query($con, $sql)) {
    echo "Uspješno uređena obavijest";

} else {
    echo $sql . "<br>" . mysqli_error($con);

}
?>
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <p class="lead"><b>Popunite za dodavanje obavijesti.</b></p>
            <ul class="list-unstyled">
            </ul>
        </div>
    </div>
    <br>
    <?php
    $sql = mysqli_query($con, "SELECT * FROM obavijesti WHERE id = '$id'");
    $row = $sql->fetch_assoc();
    ?>
    <form method="POST">
        <div class="form-group">
            <label for="usr">Naslov:</label>
            <input type="text" class="form-control" id="naslov" name="naslov" value="<?php
            echo $row['naslov'];
            ?>">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Opis</label>
            <textarea class="form-control" id="opis" name="opis" rows="3"><?php
                echo $row['opis'];
                ?></textarea>
        </div>


        <button type="submit" class="btn btn-primary">Uredi</button>
    </form>
</div>
