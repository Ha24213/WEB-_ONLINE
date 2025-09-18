<?php
include "header.php";
include "slider.php";
include "class/brand.php";
?>
<?php
$brand = new brand;
if($_SERVER['REQUEST_METHOD']=== 'POST'){
   $cartegory_id=$_POST['cartegory_id'];
   $brand_name =$_POST['brand_name'];
   $insert_brand = $brand ->insert_brand($cartegory_id,$brand_name);
}
?>
<style>
    select {
        height: 30px;
        width: 200px;
    }
</style>
<div class="admin-content-right">
            <div class="admin-content-right-cartegory-add">
                <h1>Thêm Danh Mục</h1>
                <form action ="" method="POST">
                    <section action="" method="POST">
                        <select name="cartegory_id" id="">
                            <option value="#">--Chọn Danh Mục--</option>
                            <?php
                            $show_cartegory = $brand ->show_cartegory();
                            if($show_cartegory){while($rusult = $show_cartegory ->fetch_assoc()){

                            ?>
                            <option value ="<?php echo $rusult['cartegory_id']?>"><?php echo $rusult['cartegory_name']?></option>
                            <?php
                            }}
                            ?>
                        </select>
                        <input name ="brand_name" type ="text" placeholder="Nhập tên danh mục cần thêm">
                </section>
                    <button type ="submit">Add</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>