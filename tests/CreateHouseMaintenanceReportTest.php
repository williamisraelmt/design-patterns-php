<?php declare(strict_types=1);

use MaintenanceReport\MaintenanceReportService;
use PHPUnit\Framework\TestCase;

final class CreateHouseMaintenaceReportTest extends TestCase
{
    // public function testSupportsValidType(): void
    // {
    //     $this->assertInstanceOf();
    // }

    public function testDoesntSupportInvalidType(): void
    {
        $this->expectExceptionMessage("Unknown Residence Type");

        $maintenace_report = new MaintenanceReportService();
        
        $maintenace_report->create("invalid", []);
    }

}