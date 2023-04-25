<?php

namespace Vormkracht10\Analytics\Traits\Google;

trait RowConfigTrait
{
    public $keepEmptyRows = null;

    public $limit = null;

    public $offset = null;

    public function keepEmptyRows($keepEmptyRows = false)
    {
        $this->keepEmptyRows = $keepEmptyRows;

        return $this;
    }

    public function limit($limit)
    {
        $this->limit = $limit;

        return $this;
    }

    public function offset($offset)
    {
        $this->offset = $offset;

        return $this;
    }
}
