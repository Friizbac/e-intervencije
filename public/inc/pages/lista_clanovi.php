<?php
include("loc.php");
?>
<section class="content">

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Operativni članovi</h3>
        </div>
        <div class="box-body">
            <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Ime</th>
                    <th>Prezime</th>
                    <th>Broj mob.</th>
                    <th>Akcije</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $sql = "SELECT * FROM clanovi";
                $result = mysqli_query($con, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {

                        $result2 = mysqli_query($con, $sql2);
                        $row2 = mysqli_fetch_assoc($result2);
                        ?>
                        <tr>
                            <td><?php
                                echo $row['id'];
                                ?></td>
                            <td><?php
                                echo $row['ime'];
                                ?></td>
                            <td><?php
                                echo $row['prezime'];
                                ?></td>
                            <td><?php
                                echo $row['br_mob'];
                                ?></td>
                            <td><a href="index.php?p=clanovi&akcija=obrisi&id=<?php
                                echo $row['id'];
                                ?>">Obriši</a> | <a href="index.php?p=clanovi&akcija=uredi&id=<?php
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
