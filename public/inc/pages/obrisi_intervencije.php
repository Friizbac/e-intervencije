<?php
$id = $_GET['id'];
$sql = "DELETE FROM intervencije WHERE id ='$id'";
$sql2 = "DELETE FROM adrese_intervencija WHERE id_intervencije ='$id'";
mysqli_query($con, $sql);
mysqli_query($con, $sql2);
?>
<script>
    window.location = "index.php?p=intervencije";
</script>
