<?php 

require __DIR__ . '/vendor/autoload.php';

use MaintenanceReport\Enums\ResidenceTypeEnum;
use MaintenanceReport\MaintenanceReportService;

$maintenance_report = new MaintenanceReportService(
    ResidenceTypeEnum::APARTMENT,
    [
        'floors_qty' => 1
    ]
);
