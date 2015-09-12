<?php
namespace Cake\BbCode;

class Proxy extends \Cake\Proxy
{

    protected function _dependencies(\XenForo_Dependencies_Abstract $dependencies, array $data)
    {
        \XenForo_Template_Helper_Core::$helperCallbacks = array_merge(\XenForo_Template_Helper_Core::$helperCallbacks,
            array(
                'cake_bbcode_snippet' => \XenForo_Template_Helper_Core::$helperCallbacks['snippet'],
                'snippet' => array(
                    'Cake\BbCode\Template_Helper_Core',
                    'helperSnippet'
                )
            ));
    }
}