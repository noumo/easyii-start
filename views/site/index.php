<?php
use yii\bootstrap\BootstrapAsset;
use yii\easyii\AdminModule;

BootstrapAsset::register($this);

$this->title = 'EasyiiCMS start page';
$this->registerCss('
    html, body{
        height: 100%;
    }
    body{
        font-family: \'Open Sans\', sans-serif;
    }
    .vertical-align-parent {
        -webkit-transform-style: preserve-3d;
        -moz-transform-style: preserve-3d;
        transform-style: preserve-3d;
        height: 100%;
    }
    .vertical-align-child {
        position: relative;
        top: 50%;
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
    }
    h1{
        font-size: 40px;
        font-weight: 300;
        text-transform: uppercase;
        margin-bottom: 50px;
    }
    h1 a{
        display: inline-block;
        color: #7DB4B5;
        border-bottom: 1px solid #7DB4B5;
    }
    h1 a:hover, h1 a:focus{
        color: #7DB4B5;
        border-color: #fff;
        text-decoration: none;
    }
    .circle {
        display: inline-block;
        border-radius: 50%;
        border: 2px solid #222;
        width: 180px;
        height: 180px;
        margin-left:auto;
        margin-right:auto;
        text-align: center;
        padding-top: 45px;
        margin: 0 40px;
        font-size: 18px;
        color: #222;
    }
    .circle:hover, .circle:focus{
        text-decoration: none;
        color: #7DB4B5;
        border-color: #7DB4B5;
    }
    .circle i{
        font-size: 46px;
        margin-bottom: 10px;
    }
');
?>
<div class="container vertical-align-parent">
    <div class="col-md-10 col-md-offset-1 vertical-align-child text-center">
        <h1>Welcome to <a href="http://easyiicms.com" target="_blank">EasyiiCMS</a> start page</h1>
        <?php if(!AdminModule::installed()) : ?>
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
