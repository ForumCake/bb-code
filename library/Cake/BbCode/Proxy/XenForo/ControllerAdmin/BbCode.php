<?php
namespace Cake\BbCode\Proxy;

if (false) {

    class XFCP_XenForo_ControllerAdmin_BbCode extends \XenForo_ControllerAdmin_BbCode
    {
    }
}

class XenForo_ControllerAdmin_BbCode extends XFCP_XenForo_ControllerAdmin_BbCode
{

    public function actionSave()
    {
        \Cake\Helper_Controller::setController('XenForo_ControllerAdmin_BbCode', $this);

        return parent::actionSave();
    }
}