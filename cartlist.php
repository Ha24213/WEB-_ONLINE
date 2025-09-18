<?php
include "header.php";
include "slider.php";
include "class/carte.php";
?>
<?php
$cartegory = new cartegory;
$show_cartegory = $cartegory->show_cartegory();
?>

<div class="admin-content-right">
           <div class="admin-content-right-cartegory-list">
                <h1>Danh sách danh mục</h1>
                <table>
                    <tr>
                        <th>STT</th>
                        <th>ID</th>
                        <th>DANH MỤC</th>
                        <th>TÙY BIẾN</th>
                    </tr>
                    <?php
                    if($show_cartegory){$i=0;
                        while($result = $show_cartegory->fetch_assoc()){$i++;
                    
                    ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $result['cartegory_id'] ?></td>
                        <td><?php echo $result['cartegory_name'] ?></td>
                        <td><a href ="cartadd.php?cartegory_id=<?php echo $result['cartegory_id'] ?>">Sửa</a>|<a href ="cartdl.php?cartegory_id=<?php echo $result['cartegory_id'] ?>">Xóa</a></td>
                    </tr>
                    <?php 
                        }
                    }
                    ?>
                   