<div class="row">
    <div class=".col-xs-8 .col-md-8">
        <div class="container" style="width:30%">
            <?php echo validation_errors(); ?>
  
            <?php echo form_open('admin/index/chk_authen'); 
            ?>
            <h3 class="form-signin-heading">กรอกข้อมูลเพื่อเข้าสู่ระบบ : </h3>

            <input class="form-control" placeholder="Username" required="" autofocus="" type="user" name="username" >
            <br>
            <input class="form-control" placeholder="Password" required="" type="password" name="password">
            
            
            <?php 
            
            $vals = array(
                'img_path' => './captcha/',
                'img_url' => base_url().'captcha/'
                );

            $cap = create_captcha($vals);

            $data = array(
                'captcha_time' => $cap['time'],
                'ip_address' => $this->input->ip_address(),
                'word' => $cap['word']
                );

            $query = $this->db->insert_string('captcha', $data);
            $this->db->query($query);
            ?>
            
            <?php
            echo "<br>".'กรอกข้อความที่เห็นในภาพ : ';
            ?> 
            <div class="col-md-15 " >
                    <?php 
                        echo $cap['image']." : ";
                        echo '<input type="text" name="captcha" id="captcha" value="" />';
                    ?> 
            </div>
            
            <br>
            
            <div style="width:30%;margin: 0px auto;">
                <table>
                    <tr>
                        <td width="30%" align="center">
                            <input value=" เข้าสู่ระบบ " type="submit" class="btn btn-lg btn-success btn-block" style="text-align:center;width:100%" >
                        </td>
                    </tr>
                </table>  
            </div>
            <br>
            <?php echo form_close(); ?>
    </div>
    </div>
</div>