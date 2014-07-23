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

        echo $this->Html->css('style');
        echo $this->Html->css('modal');
        echo $this->Html->script(array('jquery-1.9.1.min'));
        echo $this->Html->script(array('jquery.simplemodal-1.4.4'));
        echo $this->Html->script(array('layout'));
        echo $this->Html->script(array('reg_form'));

        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        ?>
    </head>
    <body>
        <div id="container">
            <div id="header">
                <h1 style="float:left;"><?php echo $this->Html->link($cakeDescription, '/'); ?></h1>
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

    </body>
</html>

