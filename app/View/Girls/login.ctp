<body>
    <div class="container">
        <?php echo $this->Session->flash('auth'); ?>
        <?php echo $this->Form->create('Girl'); ?>
        <section class="register">
        <h1>Login Girl</h1>
        <div class="reg_section personal_info">
            <h3>Please input your username and password</h3>
            <?php echo $this->Form->input('username');
            echo $this->Form->input('password');
            ?>
        </div></br>
                    <h1><?php echo $this->Html->link('Not a member? Register now!', array('controller'=>'girls','action' => 'add')); ?></h1> 
        <p class="submit">
        <?php echo $this->Form->end(__('Login')); ?>
        </p>
        </section>
    </div>
</body>

