<?php
PackagesAssets::registerCore();
AppAssets::registerScript();
Yii::app()->clientScript->registerModuleScript("app");
?>
<!DOCTYPE html>
<html lang="<?= Yii::app()->language ?>">
    <head>
        <meta charset="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no">
        <title><?= CHtml::encode($this->pageTitle) ?></title>
        <script type="text/javascript">
            var Request = {
                Host: '<?= Yii::app()->request->hostInfo ?>',
                BaseUrl: '<?= Yii::app()->baseUrl ?>',
                themeUrl: '<?= Yii::app()->theme->baseUrl ?>',
                _GET: <?= json_encode($_GET) ?>
            };
        </script>
    </head>
    <body>
        <div class="app ">
            <div class="authentication">
                <div class="sign-in-2">
                     <?= $content ?>
                </div>
            </div>
        </div>
    </body>
</html>