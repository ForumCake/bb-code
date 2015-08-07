<?php
namespace Cake\BbCode;

class Install_FileHealthCheck extends \Cake\Install_FileHealthCheckBase
{
    
    public function getFileHashes()
    {
        return array(
        	'library/Cake/BbCode/addon-Cake_BbCode.xml' => 'd41b080c74219217145bf4b75734c788',
        	'library/Cake/BbCode/BbCode.php' => 'abff4027bb85d3bba0c6b7f082eca4df',
        	'library/Cake/BbCode/Install/Controller.php' => '9cc17c42e7e6ee05587100060c907470',
        	'library/Cake/BbCode/Install/Data.php' => '0716d959efba6a6538b30af72efec392',
        	'library/Cake/BbCode/Proxy/XenForo/ControllerAdmin/BbCode.php' => '8eea0face221192f8f09b9b218801c00',
        	'library/Cake/BbCode/Proxy/XenForo/DataWriter/BbCode.php' => '5c5976919665aac0b026c1ab1206d25d',
        	'library/Cake/BbCode/Proxy/XenForo/Model/BbCode.php' => 'c5ba41b1bb1c881139de79245b06e59d',
        	'library/Cake/BbCode/Proxy.php' => '05b784e46e338b7a20485a383119b57f',
        	'js/cake/bbcode/index.html' => 'd41d8cd98f00b204e9800998ecf8427e',
        	'styles/default/cake/bbcode/index.html' => 'd41d8cd98f00b204e9800998ecf8427e',
        );
    }
}