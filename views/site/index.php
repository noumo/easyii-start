<?php
use yii\bootstrap\BootstrapAsset;
use yii\easyii\AdminModule;

BootstrapAsset::register($this);

$this->title = 'EasyiiCMS start page';
$this->registerCss('
    body{
        font-family: \'Open Sans\', sans-serif;
    }
    h1{
        font-weight: 300;
        text-transform: uppercase;
    }
    .circle {
        display: table;
        border-radius: 50%;
        border: 2px solid #222;
        width: 180px;
        height: 180px;
        margin-left:auto;
        margin-right:auto;
        text-align: center;
    }
    .circle:hover{
        border-color: #680148;
    }
    .circle a{
        display: table-cell;
        vertical-align: middle;
        font-size: 18px;
        color: #222;
    }
    .circle a:hover, .circle a:focus{
        text-decoration: none;
        color: #680148;
    }
    .circle i{
        font-size: 46px;
        margin-bottom: 10px;
    }
');
?>
<div class="container">
    <div class="vmid">
    <div class="row text-center">
        <h1>Welcome to EasyiiCMS start page</h1>
    </div>
    <div class="row">
        <br>
        <br>
        <div class="col-md-4">
            <div class="circle pull-right">
                <?php if(!AdminModule::installed()) : ?>
                    <a href="/admin/install">
                        <i class="glyphicon glyphicon-save"></i>
                        <br>
                        Install EasyiiCMS
                    </a>
                <?php else : ?>
                    <a href="/admin">
                        <i class="glyphicon glyphicon-wrench"></i>
                        <br>
                        Control Panel
                    </a>
                <?php endif; ?>
            </div>
        </div>
        <div class="col-md-4">
            <div class="circle">
                <a href="http://easyiicms.com/docs" target="_blank">
                    <i class="glyphicon glyphicon-book"></i>
                    <br>
                    Documentation
                </a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="circle pull-left">
                <a href="http://demo.easyiicms.com" target="_blank">
                    <i class="glyphicon glyphicon-globe"></i>
                    <br>
                    Demo website
                </a>
            </div>
        </div>
    </div>
</div>