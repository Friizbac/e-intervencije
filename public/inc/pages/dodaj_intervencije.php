<?php
include("loc.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $naslov = $_POST['adresa'];
    $vrsta = $_POST['vrsta'];
    $opis = $_POST['opis'];
    $datum = date("d.m.Y. H:i:s");
    $k_broj = $_POST['street_number'];
    $ulica = $_POST['route'];
    $grad = $_POST['locality'];
    $regija = $_POST['administrative_area_level_1'];
    $p_broj = $_POST['postal_code'];
    $drzava = $_POST['country'];
    $sql = "INSERT INTO intervencije (vrsta, opis, datum)
VALUES ('$vrsta', '$opis', '$datum')";
    $sql2 = "INSERT INTO adrese_intervencija (id_intervencije, ulica, k_broj, grad, regija, p_broj, drzava)
VALUES (LAST_INSERT_ID(), '$ulica', '$k_broj', '$grad', '$regija', '$p_broj', '$drzava')";
}
if (mysqli_query($con, $sql)) {
    echo "Uspješno prijavljena intervencija.";
} else {
    echo $sql . "<br>" . mysqli_error($con);

}
if (mysqli_query($con, $sql2)) {
    echo "Uspješno prijavljena adresa intervencije.";
} else {
    echo $sql . "<br>" . mysqli_error($con);

}
?>
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <p class="lead"><b>Popunite za prijavljivanje intervencije</b></p>
            <ul class="list-unstyled">
            </ul>
        </div>
    </div>
    <br>
    <form method="POST">
        <div class="form-group">
            <small id="emailHelp" class="form-text text-muted">(<b>Adresa</b>) Započnite pisanje, automatska ispuna.
            </small>
            <div id="locationField">
                <input id="autocomplete" name="adresa" placeholder="Unesite adresu" onFocus="geolocate()" type="text"
                       class="form-control"></input>

            </div>

        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Vrsta intervencije</label>
            <select class="form-control" id="vrsta" name="vrsta">
                <option value="Požarna intervencija">Požarna intervencija</option>
                <option value="Tehnička intervencija">Tehnička intervencija</option>
                <option value="Usluga">Usluga</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Opis</label>
            <textarea class="form-control" id="opis" name="opis" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Prijavi</button>
        <div style="display:none">
            <table id="address">
                <tbody>
                <tr>
                    <td class="label">Street address</td>
                    <td class="slimField"><input class="field" id="street_number" name="street_number"></td>
                    <td class="wideField" colspan="2"><input class="field" id="route" name="route"></td>
                </tr>
                <tr>
                    <td class="label">City</td>
                    <!-- Note: Selection of address components in this example is typical.
                         You may need to adjust it for the locations relevant to your app. See
                         https://developers.google.com/maps/documentation/javascript/examples/places-autocomplete-addressform
                    -->
                    <td class="wideField" colspan="3"><input class="field" id="locality" name="locality"></td>
                </tr>
                <tr>
                    <td class="label">States</td>
                    <td class="slimField"><input class="field" id="administrative_area_level_1"
                                                 name="administrative_area_level_1"></td>
                    <td class="label">Zip code</td>
                    <td class="wideField"><input class="field" id="postal_code" name="postal_code"></td>
                </tr>
                <tr>
                    <td class="label">Country</td>
                    <td class="wideField" colspan="3"><input class="field" id="country" name="country"></td>
                </tr>
                </tbody>
            </table>
        </div>
    </form>
</div>
