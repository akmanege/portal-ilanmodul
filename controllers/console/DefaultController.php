<?php
namespace kouosl\ilanmodul\controllers\console;


/**
 * Default controller for the `ilanmodul` module
 */
class DefaultController extends \kouosl\base\controllers\console\BaseController
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('_index');
    }
}
