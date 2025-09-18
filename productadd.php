<?php
include "header.php";
include "slider.php";
include "class/product.php";
?>
<?php
$product = new product;
if($_SERVER['REQUEST_METHOD']=== 'POST'){
    $insert_product =$product ->insert_product($_POST,$_FILES);
 }

?>

<div class="admin-content-right">
             <div class="admin-content-right-product-add">
                <h1>Thêm Tên Xe</h1>
                <form action ="" method="POST" enctype = "multipart/form-data">
                    <label for="">Nhập Tên Xe<span style="color: red"></span></label>
                    <input name="product_name" required type ="text">
                     <label for="">Chọn Danh Mục<span style="color: red"></span></label>
                    <select name ="cartegory_id" id="cartegory_id">
                        <option value ="#">---Chọn---</option>
                        <?php 
                        $show_cartegory = $product -> show_cartegory();
                        if($show_cartegory){while($result = $show_cartegory ->fetch_assoc()){
                        ?>
                        <option value="<?php echo $result['cartegory_id'] ?>"><?php echo $result['cartegory_name'] ?></option>
                        <?php
                        }}
                        ?>
                    </select>
                    <label for="">Chọn Loại Xe<span style="color: red"></span></label>
                     <select name ="brand_id" id="brand_id">
                     <label for="">Chọn Loại Xe<span style="color: red"></span></label>
                        <option value="#">--Chọn---</option>
                       
                    </select>
                    <label for="">Mã Số Xe<span style="color: red"></span></label>
                    <input name="product_MSX" required type="text">
                    <label for="">Phiên Bản<span style="color: red"></span></label>
                    <input name="product_Model" required typetype="text">
                    <label for="">Giá Niêm Yết<span style="color: red"></span></label>
                    <input name="product_Price" required typetype="text">
                    <label for="">Mô tả<span style="color: red"></span></label>
                    <textarea required name="product_desc" id="editor1" cols="30" rows="10"></textarea>
                    <label for="">Ảnh Xe<span style="color: red"></span></label>
                    <input name="product_img" required type ="file">
                    <label for="">Ảnh Chi Tiết<span style="color: red"></span></label>
                    <input name="product_img_desc[]" required multiple type="file">
                    <button type ="submit">Add</button>
                </form>
            </div>
        </div>
            <script>
            CKEDITOR.replace( 'editor1', {
    filebrowserBrowseUrl: 'ckfinder/ckfinder.html',
    filebrowserUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files'
            )};
        <scrpit>
          $(document).ready(function(){
             $("#cartegory_id").change(function(){
                  var x = $(this).val()
                  $.get("ajax.php",{cartegory_id},function(data) {
                    $("brand_id").html(data);
             })
          })
        })
            </script>