<?php
/**
 * The base class for Ace.
 *
 * @package ace
 */
class Ace {
    /**
     * @var modX A reference to the modX object.
     */
    public $modx = null;
    /**
     * @var array An array of configuration options
     */
    public $config = array();
    /**
     * @var bool A flag to prevent double script registering
     */
    public $assetsLoaded = false;

    function __construct(modX &$modx,array $config = array()) {
        $this->modx =& $modx;

        $corePath = $this->modx->getOption('ace.core_path',$config,$this->modx->getOption('core_path').'components/ace/');
        $managerAssetsUrl = $this->modx->getOption('ace.manager_assets_url',$config,$this->modx->getOption('manager_url').'assets/components/ace/');

        $this->config = array_merge(array(
            'corePath' => $corePath,
            'managerAssetsUrl' => $managerAssetsUrl,
        ),$config);

        $this->modx->addPackage('ace', $this->config['corePath'].'model/');
        $this->modx->lexicon->load('ace:default');
    }

    public function initialize() {
        if (!$this->assetsLoaded) {
            $this->modx->controller->addLexiconTopic('ace:default');
            $this->modx->controller->addJavascript($this->config['managerAssetsUrl'].'ace/ace.js');
            $this->modx->controller->addJavascript($this->config['managerAssetsUrl'].'modx.texteditor.js');
        }
        $this->assetsLoaded = true;
    }
}