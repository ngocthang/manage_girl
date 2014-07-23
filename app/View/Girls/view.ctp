<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

        <link href="wtfdiary.css" rel="stylesheet" type="text/css">

        <title>
            Facebook like Profile Page design using HTML and CSS
        </title>
    </head>

    <body>
        <div id="container">

            <div id='cover_container' style="background-image:url('../../files/girl/cover_image/<?php echo h($girl['Girl']['cover_image_dir']); ?>/<?php echo h($girl['Girl']['cover_image']); ?>');">
                <div id='info_box'>
                    <div id="profile_img"><img src='../../files/girl/avatar/<?php echo h($girl['Girl']['avatar_dir']); ?>/<?php echo h($girl['Girl']['avatar']); ?>' class='avatar_img'/></div>

                    <div id="info-box">
                        <div id="info-name"><b><?php echo $girl['Girl']['name'] ?></b><img src="http://upload.wikimedia.org/wikipedia/commons/2/21/Flag_of_Vietnam.svg"width="20"height="20"></div>

                        <div id="info-content">

                            <div style="float:right">
                                <?php echo $this->Form->create('Post', array('type' => 'file')); ?>
                                    <label class="filebutton">
                                        <div><a id="icon_change_cover"href="#"style=""><img src="../../img/cameraa.png"title='Change Cover Picture'></a></div> 
                                        <span>
                                            <?php echo $this->Form->file('url', array('id' => 'change_cover', 'style' => 'display:none;')); ?></br>
                                        </span>
                                    </label>
                                <?php echo $this->Form->end(); ?>
                            </div>

                            <div id="info-photos">
                                <div>Photos</div>
                                <div><b>17</b></div>
                            </div>

                            <div id="info-friends">
                                <div>Friends</div>
                                <div><b>270</b></div>
                            </div>

                        </div>

                        <table id="information_one">
                            <tbody>
                                <tr>
                                    <th>Tall: <?php echo h($girl['Girl']['tall']); ?></th>
                                    <th>Weight: <?php echo h($girl['Girl']['weight']); ?> kg</th>
                                    <th>B: <?php echo h($girl['Girl']['bust']); ?> cm</th>
                                    <th>W: <?php echo h($girl['Girl']['waist']); ?> cm</th>
                                    <th>H: <?php echo h($girl['Girl']['hip']); ?> cm</th>
                                </tr>
                            </tbody>
                        </table>

                        <?php 
                        $bd = $girl['Girl']['birthday'];
                        $by = split("-", $bd);
                        $birth_year = $by[0];
                        ?>
                        <table id="information_two">
                            <tbody>
                                <tr>
                                    <th>Skin: <?php echo h($girl['Girl']['skin']); ?></th>
                                    <th>Eye-color: <?php echo h($girl['Girl']['eye_color']); ?></th>
                                    <th>Address: <?php echo h($girl['Girl']['address']); ?></th>
                                    <th>Age: <?php echo date('Y') - $birth_year; ?></th>
                                    <th>Birth Place: <?php echo h($girl['Girl']['birth_place']); ?></th>
                                </tr>
                            </tbody>
                        </table>

                    </div>

                    <div style='clear:both'></div>
                </div>
            </div>

            <?php echo $this->Form->create('Post', array('type' => 'file')); ?>
            <div id="container-content"class=""style="padding:0">
                <?php echo  $this->Form->input('title', array('label' => '','style' => 'width:98.9%;margin:0;padding:5px;border-top:none;border-left:none;border-right:none;height:1.5em; font-size:medium;', 'placeholder' => 'Post Title'));  ?>
                <?php echo  $this->Form->input('body', array('label' => '','style' => 'width:98.9%;margin:0;padding:5px;font-size:small;border:none;', 'placeholder' => 'Content of post', 'class' => 'normal comment', 'id' => 'post_content'));  ?>
            </div>
            <div id="tool_info"class="tool-info">
                <label class="filebutton">
                    <a id="icon_upload"href="#"style="padding:10px 0 0 5px;"><img src="../../img/image_icon.png"width="25"height="25"></a> 
                    <span>
                        <?php echo $this->Form->file('url', array('id' => 'input_img_post')); ?></br>
                    </span>
                </label>
            </div>
            <?php echo $this->Form->end(__('Register')); ?>
        </div>
    </body>
</html>
