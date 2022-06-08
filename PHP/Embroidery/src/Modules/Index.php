<?php

namespace Modules;

class Index {
	public function perform()
	{
		require_once ROOT_PATH . '/views/index.phtml';
	}
}

