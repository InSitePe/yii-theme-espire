<?php
PackagesAssets::registerCore();
AppAssets::registerScript();
Yii::app()->clientScript->registerModuleScript("app");
?>
<!DOCTYPE html>
<html lang="<?= Yii::app()->language ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no">
        <title><?= CHtml::encode($this->pageTitle) ?></title>
        <script type="text/javascript">
            var Request = {
                Host: '<?= Yii::app()->request->hostInfo ?>',
                BaseUrl: '<?= Yii::app()->baseUrl ?>',
                themeUrl: '<?= Yii::app()->theme->baseUrl ?>',
                _GET: <?= json_encode($_GET) ?>,
                UrlHash: {
                    m: '<?= strtolower($this->module->id) ?>',
                    c: '<?= strtolower($this->id) ?>',
                    a: '<?= strtolower($this->action->id) ?>'
                }
            };
        </script>
    </head>
    <body>
        <div class="app">
            <div class="layout">
                <!-- Side Nav START -->
                <?= $this->renderPartial("//layouts/main/_sidenav") ?>
                <!-- Side Nav END -->
                <!-- Page Container START -->
                <div class="page-container">
                    <!-- Header START -->
                    <?= $this->renderPartial("//layouts/main/_navbar") ?>
                    <!-- Header END -->

                    <!-- Content Wrapper START -->
                    <div class="main-content">
                        <div class="container-fluid">
                            <?= $content ?>
                        </div>
                    </div>
                    <!-- Content Wrapper END -->

                    <!-- Footer START -->
                    <?= $this->renderPartial("//layouts/main/_footer") ?>
                    <!-- Footer END -->
                </div>
                <!-- Page Container END -->
            </div>
        </div>
    </body>
</html>