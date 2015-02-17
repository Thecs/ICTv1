<!-- Part 1: Wrap all page content here -->







<?php $this->load->view('template1/head');?> 
<body class="container bs-docs-container">
<div style=" border-collapse:collapse; border:0px solid #999;margin:0 auto;-webkit-border-radius: 20px;-moz-border-radius: 20px;border-radius: 5px; -moz-box-shadow: 5px 5px 5px #ccc;-webkit-box-shadow: 5px 5px 5px #ccc;box-shadow: 0px 0px 5px 5px #ccc; /* margin-top:20px ; */ background-color:#FFF;" class="max-width">
 
               
    <!--///////////////////////////////////////////////////////////////////////////////////////////////////
    //
    //		Styles
    //
    ///////////////////////////////////////////////////////////////////////////////////////////////////--> 
    <link rel='stylesheet' id='camera-css'  href='<?=base_url()?>asset/camera/css/camera.css' type='text/css' media='all'> 
    <style>
		body {
			margin: 0;
			padding: 0;

		}
		.fluid_container {
			margin: 0 auto;
			max-width: 850px;
			height:300px;
			width: 85%;
		}
	</style>

    <!--///////////////////////////////////////////////////////////////////////////////////////////////////
    //
    //		Scripts
    //
    ///////////////////////////////////////////////////////////////////////////////////////////////////--> 
    

    <!-- <div class=" col-xs-12 col-sm-12 col-md-12  row"> -->
        <div class="navbar navbar-default navbar-static-top" role="navigation" >
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                </div>
                
                <div style="height: 1px;" class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav ">
                        <li class="menu <?php if($this->uri->segment(1) == "") { echo "active ";  } ?>" ><a href="<?=base_url()?>" <?php if($this->uri->segment(1) == "ict_course") { ?> onmouseover="this.style.Color='#fff';" onclick ="this.style.Color='#fff';" onmouseout="this.style.Color='#fff';"  <? }?>>หน้าหลัก</a></li>
                        <li class="dropdown <?php if($this->uri->segment(1) == "information") { ?> active  <?php } ?>">
                            <a href="#" class="dropdown-toggle js-activated" data-toggle="dropdown" >ข้อมูลคณะ <b class="caret"></b></a>
                            <div class="dropdown-menu multi-column" style="width: 555px">
                              <div class="container-fluid">
                                <div class="row-fluid">
                                  <div class="span6">
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-header">ข้อมูลทั่วไป</li>
                                        <li class="divider"></li>
                                        <li ><a href="<?=base_url()?>information/history" tabindex="-1" style="font-size:12px">ประวัติคณะ</a></li>
                                        <li><a href="<?=base_url()?>information/label" tabindex="-1">สัญลักษณ์ของคณะ  ICT</a></li>
                                        <li><a href="<?=base_url()?>information/aspiration" tabindex="-1">ปณิธาน / วัตถุประสงค์</a></li>
                                        <li><a href="<?=base_url()?>information/mission" tabindex="-1">พันธกิจหลัก</a></li>
                                        <li><a href="<?=base_url()?>information/policy" tabindex="-1">นโยบายและการพัฒนา</a></li>
                                    </ul>
                                  </div>
                                  <div class="span6">
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-header">ข้อมูลการบริหาร</a></li>
                                        <li class="divider"></li>
                                        <li><a href="<?=base_url()?>information/administrator" tabindex="-1">ผู้บริหารประจำคณะ</a></li>
                                        <li><a href="<?=base_url()?>information/enterprise_struc" tabindex="-1">โครงสร้างองค์กร</a></li>
                                        <li><a href="<?=base_url()?>information/administer_struc" tabindex="-1">โครงสร้างการบริหาร</a></li>
                                        <li><a href="<?=base_url()?>information/board" tabindex="-1">กรรมการคณะ</a></li>
                                        <li><a href="<?=base_url()?>information/curriculum" tabindex="-1">โครงสร้างหลักสูตร</a></li>
                                    </ul>
                                  </div>
                                  <div class="span6">
                                            <ul class="dropdown-menu" >
                                                <li class="dropdown-header">ระบบสารสนเทศภายใน</a></li>
                                                <li class="divider"></li>
                                                <li><a href="http://www.bsc.ict.up.ac.th/" target="_blank">BSC System</a></li>
                                                <li><a href="https://mail.up.ac.th/owa/auth/logon.aspx?replaceCurrent=1&url=https%3a%2f%2fmail.up.ac.th%2fowa%2f" target="_blank">UP-Mail</a></li>
                                                <li><a href="https://mail.up.ac.th/" target="_blank">AMS e-Office</a></li>
                                            </ul>
                                        </div>

                                </div>
                              </div>
                            </div>
                        </li>
                        <li class="menu <?php if($this->uri->segment(1) == "ict_course") { ?> active   <?php } ?>" ><a href="<?=base_url()?>ict_course" class="dropdown-toggle "  <?php if($this->uri->segment(1) == "ict_course") { ?> onmouseover="this.style.Color='#fff';" onclick ="this.style.Color='#fff';" onmouseout="this.style.Color='#fff';"  <? }?> >หลักสูตรที่เปิดสอน</a></li>
                        <li class="dropdown <?php if($this->uri->segment(1) == "personal") { ?> active   <?php } ?>">
                          <a href="#" class="dropdown-toggle js-activated" data-toggle="dropdown" >บุคลากรคณะ <b class="caret"></b></a>
                          <div class="dropdown-menu multi-column" style="width: 720px">
                                <div class="container-fluid" >
                                    <div class="row-fluid" style="width:900px">
                                        <div class="span6">
                                            <ul class="dropdown-menu" >
                                                <li class="dropdown-header">หน่วยงานภายใน</li>
                                                <li class="divider"></li>
                                                <li><a href="<?=base_url()?>personal/secretary">สำนักงานเลขานุการคณะ</a></li>
                                            </ul>
                                        </div>
                                        <div class="span6">
                                            <ul class="dropdown-menu" >
                                                <li class="dropdown-header">สาขาวิชา</li>
                                                <li class="divider"></li>
                                                <li><a href="<?=base_url()?>personal/compeng">วิศวกรรมคอมพิวเตอร์</a></li>
                                                <li><a href="<?=base_url()?>personal/compsci">วิทยาการคอมพิวเตอร์</a></li>
                                                <li><a href="<?=base_url()?>personal/infortech">เทคโนโลยีสารสนเทศ</a></li>
                                                <li><a href="<?=base_url()?>personal/gisystem">ภูมิสารสนเทศศาสตร์</a></li>
                                                <li><a href="<?=base_url()?>personal/biscom">คอมพิวเตอร์ธุรกิจ</a></li>
                                            </ul>
                                        </div>
                                        <div class="span6">
                                            <ul class="dropdown-menu" >
                                                <li class="divider_major" ></li>
                                                <li class="divider"></li>
                                                <li><a href="<?=base_url()?>personal/iceng">วิศวกรรมสารสนเทศและการสื่อสาร</a></li>
                                                <li><a href="<?=base_url()?>personal/seng">วิศวกรรมซอฟต์แวร์</a></li>
                                                <li><a href="<?=base_url()?>personal/cgmedia">เทคโนโลยีคอมพิวเตอร์กราฟิกและมัลติมีเดีย</a></li>
                                                <li><a href="<?=base_url()?>personal/mct">เทคโนโลยีคอมพิวเตอร์เคลื่อนที่</a></li>
                                            </ul>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </li>
                        <li class=" <?php if($this->uri->segment(1) == "contact") { echo "active" ; } ?> " ><a href="<?=base_url()?>contact" class="font"  <?php if($this->uri->segment(1) == "contact") { ?> onmouseover="this.style.Color='#fff';" onclick ="this.style.Color='#fff';" onmouseout="this.style.Color='#fff';"  <? }?> >ติดต่อเรา</a></li>
                        
                    </ul>
                    
                    <div class="bs-example ">
                        <ul class="nav navbar-nav navbar-right ">
                            <li class="dropdown pull-right "><a href="http://www.ict.up.ac.th/2012" style=" background-color: #F1C40F;color: #555555"><span class="glyphicon glyphicon-phone"></span> เว็บไซต์เดิม</a></li>
                            <li class="dropdown pull-right ">
                                <a href="#" class="dropdown-toggle js-activated" data-toggle="dropdown">ICT วิจัย <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">ปฏิทินการพิจารณาข้อเสนอโครงการวิจัยสำหรับบุคลากร</a></li>
                                    <li><a href="#">ดาวน์โหลดเอกสาร</a></li>
                                    <li><a href="#">เกร็ดความรู้งานวิจัย</a></li>
                                    <li><a href="#">Journal ICT</a></li>
                                </ul>
                            </li>
                            <li class="dropdown pull-right ">
                                <a href="#" class="dropdown-toggle js-activated" data-toggle="dropdown">ICT วิชาการ <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">ICT 2 KM (จัดการองค์ความรู้)</a></li>
                                    <li><a href="#">คู่มือประกันคุณภาพทางการศึกษา ICT ภายใน และ ภายนอก</a></li>
                                    <li><a href="#">รายงานการประเมินตนเอง</a></li>
                                    <li><a href="#">เผยแพร่บทความวิชาการ</a></li>
                                </ul>
                            </li>
                            <li class="<?php if($this->uri->segment(1) == "download") { echo "active" ; } ?> " <?php if($this->uri->segment(1) == "download") ?>  style="width:140px">
                                <a href="<?=base_url()?>download" >ดาวน์โหลดเอกสาร </a>
                            </li>
                        </ul>
                    </div>
                </div><!--/.nav-collapse -->
            </div><!--/.container-fluid -->
        </div>
    <hr >
    <!-- </div> -->

    <div <?php if($this->uri->segment(1) != ""){?> style=" margin-bottom: auto;"<?php } ?> >
        
        <?php 
        if($this->uri->segment(3) != "main_manage_chk_site" && $this->session->userdata('logged_in') == true){?>
                <div class="navbar-right">
                        &nbsp&nbsp<a href="<?=base_url()?>admin/index/main_manage_chk_site" style="color: #5CB85C"><span class="glyphicon glyphicon-flash"></span>ระบบจัดการ</a>&nbsp&nbsp&nbsp&nbsp
                </div>
        <?php } 
        if($this->session->userdata('logged_in') == true && $this->session->userdata('username') != ''){?>
            <div class="bs-example navbar-right">
                    &nbsp&nbsp<a href="<?=base_url()?>admin/index/logout" style="color: #FF0000"><span class="glyphicon glyphicon-phone"></span>ออกจากระบบ</a>
            </div>
            <div class="navbar-right">
                    &nbsp&nbsp<a href="#" style="color: #5CB85C"><span class="glyphicon glyphicon-user"></span> คุณ <?=$this->session->userdata('username');?> กำลังอยู่ในระบบ&nbsp | </a>
            </div>

        <?php } ?>
                
        <?=$content;?>  
    </div>
</div>
    <!-- Dropdown Hover JS -->
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>asset/template1/js/bootstrap-hover-dropdown.js"></script>
    <script>
    // very simple to use!
    $(document).ready(function() {
      $('.js-activated').dropdownHover().dropdown();
    });
    </script>
    
    <?php $this->load->view('template1/foot');?>

