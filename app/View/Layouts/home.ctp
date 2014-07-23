<?php
$cakeDescription = __d('cake_dev', 'Manage Girl: the largest girls websites');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');
		echo $this->Html->css('modal');
        echo $this->Html->script(array('jquery-1.9.1.min'));
        echo $this->Html->script(array('jquery.simplemodal-1.4.4'));
        echo $this->Html->script(array('layout'));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
        <div id="header">
            <h1 style="float:left;"><?php echo $this->Html->link($cakeDescription, 'http://cakephp.org'); ?></h1>
            <?php if (!isset($current_user)) { 
            echo '<h1 style="float:right;"><a id="register_link" href="#">Login/Register</a></h1>';
            } 
            else {
            echo '<h1 style="float:right;">'. $this->Html->link('Logout', array('controller' => 'girls', 'action' => 'logout')) .'</h1>';
            echo '<h1 style="float:right;">'. $this->Html->link('Profile', array('controller' => 'girls', 'action' => 'view', $current_user['id'])) .'</h1>';
            }
            ?>
        </div>
        <div id="content">

            <?php echo $this->Session->flash(); ?>

            <?php echo $this->fetch('content'); ?>
        </div>
        <div id="footer">
            <?php echo $this->Html->link(
            $this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
            'http://www.cakephp.org/',
            array('target' => '_blank', 'escape' => false)
            );
            ?>
        </div>
    </div>


    <div id ="authen_box" style="display:none">
        <table style="border:1px solid white; width:800px;">
            <tr>
                <th style=" width:50%; text-align:center;color: white ;background-color: #5FAAF5">Im Girl</th>
                <th style=" width:50%; text-align:center; color: white; background-color: #5FF5AA">Im Client</th>
            </tr>
            <tr>
                <th style=" width:50%;background: white; text-align:center;">
                    <img src="img/image_girl.png" width=300 height= 220> 
                    <center><h1 style="margin-top:1.7em;line-height:35px;background: #F660AB; width:80%; border-radius: 3px;"><a href="/php/manage_girl/girls/login"style="color: #fff;">Login</a></h1></center>
                    <h1><?php echo $this->Html->link('Not a member? Register now!', array('controller'=>'girls','action' => 'add')); ?></h1> 
                </th>

                <th style=" width:50%;background: white; text-align: center;">
                    <img src="img/boy_image.png" width=200 height= 200> 
                    <center><h1 style="margin-top:3em;line-height:35px;background: #F660AB; width:80%; border-radius: 3px;"><a href="#"style="color: #fff;">Login</a></h1></center>
                    <h1><a href="#"style="color:green;">Not a member? Register now!</a></h1>

                </th>
            </tr>
        </table>
    </div>

</body>
</html>

