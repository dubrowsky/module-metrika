<?php
namespace Dubr\Metrika;

use \Floxim\Floxim\System\Fx as fx;

class Module extends \Floxim\Floxim\Component\Module\Entity {
    public function init() {
        $dir = fx::path()->abs('/module/Dubr/Metrika');
        fx::page()->addJs([
            FX_JQUERY_PATH_HTTP,
            fx::path()->abs('/module/Floxim/Ui/Js/Floxim.js'),
            $dir . '/metrika.js'
        ]);
    }
}