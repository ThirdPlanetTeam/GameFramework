<?php

namespace Game\Facades;

use Illuminate\Support\Facades\Facade;

class GameFacade extends Facade {

	protected static function getFacadeAccessor() { return 'game'; }

}