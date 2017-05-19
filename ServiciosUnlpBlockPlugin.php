<?php

import('lib.pkp.classes.plugins.BlockPlugin');

class ServiciosUnlpBlockPlugin extends BlockPlugin {

    function getInstallSitePluginSettingsFile() {
        return $this->getPluginPath() . '/settings.xml';
    }

    function getContextSpecificPluginSettingsFile() {
        return $this->getPluginPath() . '/settings.xml';
    }

    function getDisplayName() {
        return __('plugins.block.unlpServices.displayName');
    }

    function getDescription() {
        return __('plugins.block.unlpServices.description');
    }

}

?>
