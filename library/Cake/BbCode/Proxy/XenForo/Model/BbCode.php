<?php
namespace Cake\BbCode\Proxy;

if (false) {

    class XFCP_XenForo_Model_BbCode extends \XenForo_Model_BbCode
    {
    }
}

class XenForo_Model_BbCode extends XFCP_XenForo_Model_BbCode
{

    protected function _getBbCodeDataFromXml($xmlBbCode)
    {
        $bbCodeData = parent::_getBbCodeDataFromXml($xmlBbCode);

        if (isset($xmlBbCode['allow_replacement_mode_edit_cake'])) {
            $bbCodeData['allow_replacement_mode_edit_cake'] = (integer) $xmlBbCode['allow_replacement_mode_edit_cake'];
        } else {
            $bbCodeData['allow_replacement_mode_edit_cake'] = 1;
        }

        return $bbCodeData;
    }

    protected function _getBbCodeXmlNode(\DOMDocument $document, array $bbCode)
    {
        $bbCodeNode = parent::_getBbCodeXmlNode($document, $bbCode);

        if (!$bbCode['allow_replacement_mode_edit_cake']) {
            $bbCodeNode->setAttribute('allow_replacement_mode_edit_cake', $bbCode['allow_replacement_mode_edit_cake']);
        }

        return $bbCodeNode;
    }
}