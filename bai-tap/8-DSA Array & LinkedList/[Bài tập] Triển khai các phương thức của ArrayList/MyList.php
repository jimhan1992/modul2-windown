<?php

class MyList
{
    private $ilement = array();

    public function ArrayList($arr = '')
    {
        if (is_array($arr) == true) {
            $this->ilement = $arr;
        } else {
            $this->ilement = array();
        }
    }

    public function add($obj)
    {
        array_push($this->ilement, $obj);
    }

    public function addIndex($index, $obj)
    {
        array_splice($this->ilement, $index, 0, [$obj]);
    }

    public function isInteger($toCheck): bool|int
    {
        return preg_match('/^[0-9]+$/', $toCheck);
    }

    public function get($index)
    {
        if ($this->isInteger($index) && $index < $this->size()) {
            return $this->ilement[$index];
        } else {
            die('ERROR in ArrayList.get');
        }
    }

    public function remove($index)
    {
        if ($this->isInteger($index)) {
            unset($this->ilement[$index]);
            $newArrayList = array();
            for ($i = 0; $i < $this->size(); $i++) {
                if ($index != $i) {
                    $newArrayList[] = $this->get($i);
                }
            }
            $this->ilement = $newArrayList;
        } else {
            die("ERROR in ArrayList.remove <br> Integer value required");
        }
    }

    public function size()
    {
        return count($this->ilement);
    }

    public function toArray()
    {
        return $this->ilement;
    }

    public function contains($obj)
    {
        return ((array_search($obj, $this->ilement)) != false);
    }

    public function indexOf($obj)
    {
        return array_search($obj, $this->ilement);
    }
}