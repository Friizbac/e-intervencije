<?php
include("loc.php");
?>
<section class="content">

    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="fas fa-exclamation-circle"></i></span>
                <?php
                $result = mysqli_query($con, "SELECT * FROM intervencije");
                $row_cnt = $result->num_rows;
                ?>
                <div class="info-box-content">
                    <span class="info-box-text">INTERVENCIJE</span>
                    <span class="info-box-number"><?php echo $row_cnt; ?></span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fas fa-users"></i></span>
                <?php
                $result = mysqli_query($con, "SELECT * FROM clanovi");
                $row_cnt = $result->num_rows;
                ?>
                <div class="info-box-content">
                    <span class="info-box-text">OPERATIVNI ČLANOVI</span>
                    <span class="info-box-number"><?php echo $row_cnt; ?></span>
                </div>
            </div>
        </div>
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-green"><i class="far fa-newspaper"></i></span>
                <?php
                $result = mysqli_query($con, "SELECT * FROM obavijesti");
                $row_cnt = $result->num_rows;
                ?>
                <div class="info-box-content">
                    <span class="info-box-text">OBAVIJESTI</span>
                    <span class="info-box-number"><?php echo $row_cnt; ?></span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="fas fa-toolbox"></i></span>
                <?php
                $result = mysqli_query($con, "SELECT * FROM admin");
                $row_cnt = $result->num_rows;
                ?>
                <div class="info-box-content">
                    <span class="info-box-text">ADMINISTRATORI</span>
                    <span class="info-box-number"><?php echo $row_cnt; ?></span>
                </div>
            </div>
        </div>
    </div>

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Podrška</h3>
        </div>
        <div class="box-body">
            Ako primjetite bilo kakvu pogrešku, molimo Vas da ju prijavite u najkraćem mogućem roku.<br>
            E-Mail adresa: <a href="mailto:luka.petek@ti-hosting.eu">luka.petek@ti-hosting.eu</a>
        </div>

</section>
