<?php
include("loc.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $naslov = $_POST['naslov'];
    $opis = $_POST['opis'];
    $sql = "INSERT INTO obavijesti (naslov, opis)
VALUES ('$naslov', '$opis')";
}
if (mysqli_query($con, $sql)) {
    echo "Uspješno dodana obavijest.";
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
    <form method="POST">
        <div class="form-group">
            <label for="usr">Naslov:</label>
            <input type="text" class="form-control" id="naslov" name="naslov">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Opis</label>
            <textarea class="form-control" id="opis" name="opis" rows="3"></textarea>
        </div>


        <button type="submit" class="btn btn-primary">Dodaj</button>
    </form>
</div>
