<?php namespace Martinpham\Eloquent;

use Martinpham\Mongodb\Eloquent\HybridRelations;

abstract class Model extends \Illuminate\Database\Eloquent\Model {

    use HybridRelations;

}
