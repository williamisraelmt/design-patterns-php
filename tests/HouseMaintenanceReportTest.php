<?php declare(strict_types=1);

use MaintenanceReport\MaintenanceReport;
use PHPUnit\Framework\TestCase;

final class EmailTest extends TestCase
{
    // public function testSupportsValidType(): void
    // {
    //     $this->assertInstanceOf();
    // }

    public function testDoesntSupportInvalidType(): void
    {
        $this->expectExceptionMessage("Unknown Residence Type");

        $maintenace_report = new MaintenanceReport();
        
        $maintenace_report->create("invalid", []);
    }

}