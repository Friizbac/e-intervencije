<?php
$id = $_GET['id'];
$sql = "DELETE FROM obavijesti WHERE id ='$id'";
mysqli_query($con, $sql);
?>
<script>
    window.location = "index.php?p=obavijesti";
</script>
