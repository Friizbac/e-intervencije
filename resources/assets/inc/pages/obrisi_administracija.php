<?php
$id = $_GET['id'];
$sql = "DELETE FROM admin WHERE id ='$id'";
mysqli_query($con, $sql);
?>
<script>
    window.location = "index.php?p=administracija";
</script>
