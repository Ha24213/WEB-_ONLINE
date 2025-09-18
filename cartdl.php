<?php
include "class/carte.php";
?>
<?php
$cartegory = new cartegory;
if (!isset($_GET["cartegory_id"]) || $_GET['cartegory_id']==NULL) {
    echo "<script>window.location = 'cartlist.php'</script";
} 
else {
    $cartegory_id =$GET['cartegory_id'];
}
$delete_cartegory = $cartegory ->delete_cartegory($cartegory_id);

?>