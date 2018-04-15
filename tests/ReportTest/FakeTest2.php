<?php

namespace SilverStripe\Reports\Tests\ReportTest;

use SilverStripe\Dev\TestOnly;
use SilverStripe\ORM\ArrayListInterface;
use SilverStripe\Reports\Report;

class FakeTest2 extends Report implements TestOnly
{
    public function title()
    {
        return 'Report title 2';
    }

    public function columns()
    {
        return array(
            "Title" => array(
                "title" => "Page Title 2"
            )
        );
    }

    public function sourceRecords($params, $sort, $limit)
    {
        return new ArrayListInterface();
    }

    public function sort()
    {
        return 98;
    }
}
