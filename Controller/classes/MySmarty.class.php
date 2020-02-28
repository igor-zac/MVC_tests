<?php
require_once("Lib/Smarty3/libs/Smarty.class.php");

class MySmarty extends Smarty {

    public function __construct()
    {
        parent::__construct();
        $this->setTemplateDir('View/');
        $this->setCompileDir('templates_c/');
        $this->setConfigDir('configs/');
        $this->setCacheDir('cache/');

        $this->caching = Smarty::CACHING_LIFETIME_CURRENT;
    }
}