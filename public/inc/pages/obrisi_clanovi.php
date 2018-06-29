<?php
$id = $_GET['id'];
$sql = "DELETE FROM clanovi WHERE id ='$id'";
mysqli_query($con, $sql);
?>
<script>
    window.location = "index.php?p=clanovi";
</script>
