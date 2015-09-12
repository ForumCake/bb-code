<?php
namespace Cake\BbCode;

class Helper_BbCode
{

    public static function getCustomBbCodes()
    {
        if (\XenForo_Application::isRegistered('bbCode')) {
            $bbCode = \XenForo_Application::get('bbCode');
        } else {
            $bbCode = \XenForo_Model::create('XenForo_Model_BbCode')->getBbCodeCache();
            \XenForo_Application::set('bbCode', $bbCode);
        }

        if (!empty($bbCode['bbCodes'])) {
            return $bbCode['bbCodes'];
        }

        return array();
    }
}