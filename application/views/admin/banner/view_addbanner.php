<div class="container" >
  <?=form_open('banner/save_add_banner');?>
    <br>
    <div class="row">
        <div class="col-xs-12 col-md-12">
          <ol class="breadcrumb">
              <li><a href="<?=base_url()?>admin/index/main_manage_chk_site">หน้าหลัก</a></li>
              <li><a href="<?=base_url()?>backend/banner">จัดการ Slide Banner</a></li>
              <li class="active">เพิ่ม Slide Banner</li>
          </ol>
          <hr>
          <div class="row admin-head">
            <h3 class="col-md-8 row ">เพิ่ม Slide Banner</h3>
          </div>
          <hr>
          
          
          <div class="form-group">
            <label class="control-label" for="inputSuccess1">หัวข้อป้ายประชาสัมพันธ์ : </label>
            <input type="text" class="form-control" id="focusedInput"  placeholder="กรอกหัวข้อป้ายประชาสัมพันธ์" name="txt_title">
          </div>
          <div class="form-group">
            <label class="control-label" for="inputSuccess1">คำบรรยายใต้ภาพ : </label>
            <input type="text" class="form-control" id="focusedInput" placeholder="กรอกคำบรรยายใต้ภาพ" name="txt_description">
          </div>
          <img src="<?=base_url()?>images/699x350.gif"  class="img-thumbnail" width="699px" height="350px" >
          <div class="form-group">
            <label  class="control-label">File input</label>
            <input type="file" id="exampleInputFile">
            <br>
            <div class="alert alert-danger" role="alert">รูปเป็นไฟล์ .jpg .jpeg ขนาด 699 x 350 Pixels เท่านั้น (หากรูปใหญ่จะย่อให้อัตโนมัติ)</div>
            <button type="submit" class="btn btn-success">ตกลง
            </button>&nbsp&nbsp<button type="reset" class="btn btn-danger">Clear</button>
          </div>
        </div>
    </div>
    <?=form_close();?>
</div>