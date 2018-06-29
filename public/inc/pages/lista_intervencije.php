<?php
include("loc.php");
?>
<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Intervencije</h3>
        </div>
        <div class="box-body">
            <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Opis</th>
                    <th>Vrsta</th>
                    <th>Datum</th>
                    <th>Adresa</th>
                    <th>Akcije</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $sql = "SELECT * FROM intervencije";
                $result = mysqli_query($con, $sql);

                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id_intervencije = $row['id'];
                        $sql = "SELECT * FROM adrese_intervencija WHERE id_intervencije ='$id_intervencije'";
                        $result = mysqli_query($con, $sql);
                        $row2 = mysqli_fetch_assoc($result);
                        ?>
                        <tr>
                            <td><?php
                                echo $row['id'];
                                ?></td>
                            <td><?php
                                echo $row['opis'];
                                ?></td>
                            <td><?php
                                echo $row['vrsta'];
                                ?></td>
                            <td><?php
                                echo $row['datum'];
                                ?></td>
                            <td><?php
                                echo $row2['ulica'];
                                ?> <?php
                                echo $row2['k_broj'];
                                ?>, <?php
                                echo $row2['grad'];
                                ?></td>
                            <td><a href="index.php?p=intervencije&akcija=obrisi&id=<?php
                                echo $row['id'];
                                ?>">Obriši</a> | <a href="index.php?p=intervencije&akcija=uredi&id=<?php
                                echo $row['id'];
                                ?>">Uredi</a></td>
                        </tr>
                        <?php
                    }
                } else {
                    echo "Nema rezultata";
                }
                ?>


                </tfoot>
            </table>
        </div>


</section>
