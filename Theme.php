<?php

/**
 * Description of theme
 *
 * @author renziito
 */
class Theme extends CThemeManager {

    const DEFAULT_THEMEPATH = 'yii-theme-espire';

    public function init() {
        $this->setBaseUrl($this->getUrlCore() . '/' . self::DEFAULT_THEMEPATH);
        $this->setBasePath($this->getPathCore() . DIRECTORY_SEPARATOR . self::DEFAULT_THEMEPATH);
    }

    private function getPathCore() {
        return realpath(dirname(__DIR__) . '/../');
    }

    private function getUrlCore() {
        return Yii::app()->getBaseUrl(true);
    }

}
