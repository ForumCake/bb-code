<?php
namespace Cake\BbCode;

class Install_FileHealthCheck extends \Cake\Install_FileHealthCheckBase
{
    
    public function getFileHashes()
    {
        return array(
        	'library/Cake/BbCode/addon-Cake_BbCode.xml' => 'c1739767ef5a33429d55f461fcd06f0c',
        	'library/Cake/BbCode/BbCode.php' => 'abff4027bb85d3bba0c6b7f082eca4df',
        	'library/Cake/BbCode/Helper/BbCode.php' => '814578247504e0028edb52f3c0196dec',
        	'library/Cake/BbCode/Helper/String.php' => '989f1d0149c686367dde48da054e8f2a',
        	'library/Cake/BbCode/Install/Controller.php' => '9cc17c42e7e6ee05587100060c907470',
        	'library/Cake/BbCode/Install/Data.php' => '8a26852c6b11b28bad604d193a9f7e28',
        	'library/Cake/BbCode/Proxy/XenForo/ControllerAdmin/BbCode.php' => '8eea0face221192f8f09b9b218801c00',
        	'library/Cake/BbCode/Proxy/XenForo/DataWriter/BbCode.php' => 'c5716b77b176329e8bde274d337d14a6',
        	'library/Cake/BbCode/Proxy/XenForo/Model/BbCode.php' => 'ffc2cd2b2e0a2aa76105a25b95b81d26',
        	'library/Cake/BbCode/Proxy.php' => 'baaecdd46d6a1502b53e6ad5e4f467be',
        	'library/Cake/BbCode/Template/Helper/Core.php' => '01d7ca73e4ced5dfcf74af1f266d37b7',
        	'js/cake/bbcode/index.html' => 'd41d8cd98f00b204e9800998ecf8427e',
        	'styles/default/cake/bbcode/index.html' => 'd41d8cd98f00b204e9800998ecf8427e',
        );
    }
}