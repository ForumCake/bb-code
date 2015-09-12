<?php
namespace Cake\BbCode\Proxy;

if (false) {

    class XFCP_XenForo_DataWriter_BbCode extends \XenForo_DataWriter_BbCode
    {
    }
}

class XenForo_DataWriter_BbCode extends XFCP_XenForo_DataWriter_BbCode
{

    protected function _getFields()
    {
        $fields = parent::_getFields();

        $fields['xf_bb_code']['allow_replacement_mode_edit_cake'] = array(
            'type' => self::TYPE_BOOLEAN,
            'default' => 1
        );
        $fields['xf_bb_code']['snippet_strip_cake'] = array(
            'type' => self::TYPE_BOOLEAN,
            'default' => 0
        );

        return $fields;
    }

    protected function _preSave()
    {
        parent::_preSave();

        $cakeInput = \Cake\Helper_DataWriter::getInput('XenForo_ControllerAdmin_BbCode');
        if ($cakeInput) {
            \Cake\Helper_DataWriter::setIfShown($this, $cakeInput, 'allow_replacement_mode_edit_cake');
            \Cake\Helper_DataWriter::setIfShown($this, $cakeInput, 'snippet_strip_cake');
        }
    }
}