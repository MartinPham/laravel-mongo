<?php
/**
 * Created by: zzz
 * Date: 1/13/16
 * Time: 12:02 PM
 */

namespace Martinpham\Mongodb;


class Database
{
    public $manager;
    public $config;
    public $collections;

    public function __construct($manager, $config)
    {
        $this->manager = $manager;
        $this->config = $config;

        $this->collections = [];
    }

    public function selectCollection($collection)
    {
        if(!isset($this->collections[$collection]))
        {
            $this->collections[$collection] = new \MongoDB\Collection($this->manager, $this->config['database'] . "." . $collection);
        }
        return $this->collections[$collection];
    }
}