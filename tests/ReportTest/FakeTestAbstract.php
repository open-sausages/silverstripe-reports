<?php

namespace SilverStripe\Reports\Tests\ReportTest;

use SilverStripe\Dev\TestOnly;
use SilverStripe\ORM\ArrayListInterface;
use SilverStripe\Reports\Report;

abstract class FakeTestAbstract extends Report implements TestOnly
{

    public function title()
    {
        return 'Report title Abstract';
    }

    public function columns()
    {
        return array(
            "Title" => array(
                "title" => "Page Title Abstract"
            )
        );
    }

    public function sourceRecords($params, $sort, $limit)
    {
        return new ArrayListInterface();
    }

    public function sort()
    {
        return 5;
    }
}
