<?php
namespace kouosl\arcanteus\controllers\backend;


/**
 * Default controller for the `arcanteus` module
 */
class DefaultController extends \kouosl\base\controllers\backend\BaseController
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
