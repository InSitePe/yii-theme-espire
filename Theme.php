<?php

/**
 * Description of theme
 *
 * @author renziito
 */
class Theme extends CThemeManager {

    public function init() {
        $route = Yii::getPathOfAlias('webroot') . '/vendor/insite/yii-theme-espire';
        $this->setBasePath($route);
        parent::init();
    }

}
