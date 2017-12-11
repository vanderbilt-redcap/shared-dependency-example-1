<?php
namespace Vanderbilt\SharedDependencyExample1;
require_once 'vendor/autoload.php';

use Vanderbilt\SharedLibraryExample\SharedLibraryExample;

class SharedDependencyExample1 extends \ExternalModules\AbstractExternalModule{
	public function redcap_control_center(){
		SharedLibraryExample::echoCachedRandomNumber();
	}
}