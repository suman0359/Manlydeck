<?php $this->load->view("top_bottom/header"); ?>
    <div id="login">
        <div class="inner">
            <?PHP //$this->load->view("top_bottom/menus");  ?>
            <div id="content">
                <?php 
                    if($flag == 0)
                    {
                ?>
                    <table width="950px;" align="center"> 
                        <tr>
                            <h4 style="text-align:center">Email Verification failed.</h4>
                        </tr>
                        <tr>
                            <td width="321px;"></td>
                            <td>
                                <h2> Please Enter the email address to send the verification link again.  </h2>
                                <form action="<?php echo base_url()?>index.php/login/sendemailagain" method="post">
                                    <input id="email" name="email" type="text" placeholder="Enter the Email Address here." />
                                    <input id="submit" type="submit" value="Send email again" />
                                </form>

                            </td>
                            <td width="321px;">
                            </td>
                        </tr>
                        <tr>

                        </tr>
                    </table>
                <?php
                    }
                    else if($flag == 1)
                    {
                ?>
                        <table width="950px;" align="center"> 
                            <tr>
                            <h4 style="text-align:center">Email address verified successfully. Click on the login button to login.</h4>
                                <form action="<?php echo base_url()?>index.php/login" method="post">
                                    <input id="submit" type="submit" value="Login." />
                                </form>
                            </tr>
                            <tr>

                            </tr>
                        </table>
                    <?php }
                    else if($flag == 2)
                    {
                    ?>
                        <table width="950px;" align="center"> 
                            <tr>
                            <h4 style="text-align:center"><?php echo $msg; ?></h4>
                                <form action="<?php echo base_url()?>index.php/login" method="post">
                                    <input id="submit" type="submit" value="Login." />
                                </form>
                            </tr>
                            <tr>

                            </tr>
                        </table>
                    <?php }
                    else if($flag == 3)
                    {
                    ?>
                        <table width="950px;" align="center"> 
                            <tr>
                            <h4 style="text-align:center"><?php echo $msg; ?></h4>
                                <form action="<?php echo base_url()?>index.php/login" method="post">
                                    <input id="submit" type="submit" value="Login." />
                                </form>
                            </tr>
                            <tr>

                            </tr>
                        </table>
                    <?php }?>
            </div>
        </div>
    </div>

<?php $this->load->view("top_bottom/footer"); ?>