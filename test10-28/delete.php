<?php
    include "db.php";
    $del = "delete from board where idx='{$_GET['idx']}'";
    $stmh = $pdo->prepare($del);
    $stmh->execute();
    //$result = $stmh->fetch();
    echo "<script>location.href='sub1.php'</script>"
?>