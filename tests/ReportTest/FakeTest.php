<?php

namespace SilverStripe\Reports\Tests\ReportTest;

use SilverStripe\Dev\TestOnly;
use SilverStripe\ORM\ArrayListInterface;
use SilverStripe\Reports\Report;

class FakeTest extends Report implements TestOnly
{
    public function title()
    {
        return 'Report title';
    }

    public function columns()
    {
        return array(
            "Title" => array(
                "title" => "Page Title",
                "link" => true,
            )
        );
    }

    public function sourceRecords($params, $sort, $limit)
    {
        return new ArrayListInterface();
    }

    public function sort()
    {
        return 100;
    }
}
