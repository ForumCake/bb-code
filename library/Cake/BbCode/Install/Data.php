<?php
namespace Cake\BbCode;

class Install_Data extends \Cake\Install_DataAbstract
{

    public function getTableChanges()
    {
        return array(
            'xf_bb_code' => array(
                'allow_replacement_mode_edit_cake' => 'tinyint(3) UNSIGNED NOT NULL DEFAULT 1',
                'snippet_strip_cake' => 'tinyint(3) UNSIGNED NOT NULL DEFAULT 0'
            )
        );
    }
}