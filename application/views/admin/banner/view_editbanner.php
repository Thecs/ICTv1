<?php
    foreach ($results as $row)
    {
        $id = $row['id'];      
        $topic = $row['topic'];
        $headline = $row['headline'];
        $post_date = $row['post_date'];
    ?>  
<?php echo form_open_multipart(base_url().'backend/banner/save_edit_banner'); ?>
<div class="container" >
    <br>
    <div class="row">
        <div class="col-xs-12 col-md-12">
            <ol class="breadcrumb">
                <li><a href="<?=base_url()?>admin/index/main_manage_chk_site">หน้าหลัก</a></li>
                <li><a href="<?=base_url()?>backend/banner/">จัดการ Slide Banner</a></li>
                <li class="active">แก้ไข Slide Banner</li>
            </ol>
            <hr>
            <div class="row admin-head">
                <div class="col-md-8 row"><h4 class="row ">แก้ไข Slide Banner </h4></div>
            </div>
            <hr>
            <div class="form-group">
            <label class="control-label" for="inputSuccess1">หัวข้อป้ายประชาสัมพันธ์ : </label>
            <input type="text" class="form-control" id="focusedInput"  placeholder="กรอกหัวข้อป้ายประชาสัมพันธ์" name="txt_title" value="<?=$topic?>">
            </div>
            <div class="form-group">
                <label class="control-label" for="inputSuccess1">คำบรรยายใต้ภาพ : </label>
                <input type="text" class="form-control" id="focusedInput" placeholder="กรอกคำบรรยายใต้ภาพ" name="txt_description"  value="<?=$headline?>">
            </div>
            <img <?php if($post_date!=""){ ?>src="<?=base_url()?>images/banner/<?=$post_date?>.jpg" <?php }else{?> src="<?=base_url()?>images/banner/699x350.jpg" <?php }?>  class="img-thumbnail">
            <div class="form-group">
                <label  class="control-label">File input</label>
                <input type="file" id="exampleInputFile" name="file_pic">
                <br>
                <div class="alert alert-danger" role="alert">รูปเป็นไฟล์ .jpg .jpeg ขนาด 699 x 350 Pixels เท่านั้น (หากรูปใหญ่จะย่อให้อัตโนมัติ)</div>
                <button type="submit" class="btn btn-success">ตกลง
                </button>&nbsp&nbsp<button type="reset" class="btn btn-danger">Clear</button>
            </div>
        </div>
    </div>
</div>

<?php 
echo form_close(); 
}
?>