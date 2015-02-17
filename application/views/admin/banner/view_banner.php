<script type="text/javascript"> 
function deleteConfirm(message)
{
    var answer = confirm("ยืนยันการลบข้อมูล ?")
    if (answer){
        document.messages.submit();
        return false; 
    }
    
    return false;  
} 
</script>
<div class="container" >
    <br>
    <div class="row">
        <div class="col-xs-12 col-md-12">
            <ol class="breadcrumb">
                <li><a href="<?=base_url()?>admin/index/main_manage_chk_site">หน้าหลัก</a></li>
                <li class="active">จัดการ Slide Banner</li>
            </ol>
            <hr>
            <div class="row admin-head">
              <div class="col-md-8 row"><h4 class="row ">จัดการ Slide Banner </h4></div>
              <div class="col-md-4 "><h4 class="row "><a href="<?=base_url()?>backend/banner/add_banner" class="btn btn-success" role="button"><span class="glyphicon glyphicon-plus"></span> เพิ่ม Slide Banner</a></h4></div>
            </div>
            <hr>
            <table class="table table-hover table-bordered">
                <thead >
                    <tr align="center">
                        <th>ลำดับที่</th>
                        <th>หัวข้อป้ายประชาสัมพันธ์</th>
                        <th>วันที่ลงประกาศ</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
            <?php
                if(count($results) == 0){
                    echo "<tr>
                                <td colspan='4' align='center'>ไม่มีข้อมูล</td>
                            </tr>";
                }else{
                    $i=$this->uri->segment(4)+1;
                    foreach ($results as $row)
                    {
                       ?>
                            <tr>
                                <td><?=$i?></td>
                                <td><?=$row['topic']?></td>
                                <td><?=$row['dateday']." น."?></td>
                                <td align="center">
                                    <a href="<?=base_url()?>backend/banner/edit_banner/<?=$row['id']?>" class="glyphicon glyphicon-edit" >Edit</a>
                                </td>
                                <td  align="center">
                                    <a href="<?=base_url()?>backend/banner/del_banner/<?=$row['id']?>" class="glyphicon glyphicon-trash" onclick="return deleteConfirm('<?=base_url().'banner/del_banner/'.$row['id']?>');">Delete</a>
                                </td>
                            </tr>
                        
                        <?php
                        $i++;
                    } 
                }
            ?>
            </tbody></table>
            <?php echo $this->pagination->create_links();?>
        </div>
    </div>
</div>