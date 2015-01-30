<?php
$this->title = 'EasyiiCMS start page';
?>
<div class="container vertical-align-parent">
    <div class="col-md-10 col-md-offset-1 vertical-align-child text-center">
        <h1>Welcome to <a href="http://easyiicms.com" target="_blank">EasyiiCMS</a> start page</h1>
        <?php if(!Yii::$app->getModule('admin')->installed) : ?>
        <a class="circle" href="/admin/install">
                <i class="glyphicon glyphicon-save"></i>
                <br>
                Install EasyiiCMS
        </a>
        <?php else : ?>
            <a class="circle" href="/admin">
                <i class="glyphicon glyphicon-wrench"></i>
                <br>
                Control Panel
            </a>
        <?php endif; ?>
        <a class="circle" href="http://easyiicms.com/docs" target="_blank">
            <i class="glyphicon glyphicon-book"></i>
            <br>
            Documentation
        </a>
        <a class="circle" href="http://demo.easyiicms.com" target="_blank">
            <i class="glyphicon glyphicon-globe"></i>
            <br>
            Demo website
        </a>
    </div>
</div>
