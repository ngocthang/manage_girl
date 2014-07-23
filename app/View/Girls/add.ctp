<body>
    <div class="container">
        <?php echo $this->Form->create('Girl', array('type' => 'file')); ?>
        <section class="register">
        <h1>Register Girl</h1>
            <div class="reg_section personal_info">
                <h3>Your Personal Information</h3>
                <?php echo $this->Form->input('username');
                echo $this->Form->input('password');
                echo $this->Form->input('password_confirmation', array('type'=>'password'));
                echo $this->Form->input('name');
                echo $this->Form->input('tall');
                echo $this->Form->input('weight');
                echo $this->Form->input('bust');
                echo $this->Form->input('waist');
                echo $this->Form->input('hip');
                echo $this->Form->input('skin');
                echo $this->Form->input('eye_color');
                echo $this->Form->input('address');
                echo $this->Form->input('birth_place');
                echo $this->Form->input('birthday', array( 'label' => 'Date of birth', 
                'dateFormat' => 'DMY', 
                'minYear' => date('Y') - 80,
                'maxYear' => date('Y') - 12 ));
                ?>
                </br><b>Avatar:</b>
                <?php
                echo $this->Form->file('avatar', array('id' => 'input_img')); ?></br>
                <img src="" width=150 height=150 style="display:none"id="img_avatar">
                </br>
                </br>
                <?php
                echo $this->Form->input('avatar_dir', array('type' => 'hidden')); 
                ?>

                </br><b>Cover photo:</b>
                <?php
                echo $this->Form->file('cover_image', array('id' => 'input_cover')); ?></br>
                <img src="" width=300 height=140 style="display:none"id="img_cover">
                </br>
                </br>
                <?php
                echo $this->Form->input('cover_image_dir', array('type' => 'hidden')); 
                echo $this->Form->input('birth_place');
                ?>
            </div>
            <p class="terms">
            <label>
                <input type="checkbox" name="remember_me" id="remember_me">
                I accept  <a href="http://framgia.com">ManGirl.com</a>Terms & Condition
            </label>
            </p>
            <p class="submit">
            <?php echo $this->Form->end(__('Register')); ?>
            </p>
            </section>
        </div>
    </body>

