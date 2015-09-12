<?php
namespace Cake\BbCode;

class Template_Helper_Core
{

    public static function helperSnippet()
    {
        $args = func_get_args();

        $customBbCodes = Helper_BbCode::getCustomBbCodes();

        if (!empty($customBbCodes)) {
            $stripCodes = array();
            foreach ($customBbCodes as $bbCodeId => $bbCode) {
                if ($bbCode['snippet_strip_cake']) {
                    $stripCodes[$bbCodeId] = $bbCode;
                }
            }

            if ($stripCodes) {
                $args[0] = Helper_String::bbCodeStrip($args[0], $stripCodes);
            }
        }

        return \XenForo_Template_Helper_Core::callHelper('cake_bbcode_snippet', $args);
    }
}