<?php 

require __DIR__ . '/vendor/autoload.php';

use MaintenanceReport\Enums\ResidenceTypeEnum;
use MaintenanceReport\MaintenanceReport;

$maintenance_report = new MaintenanceReport(
    ResidenceTypeEnum::APARTMENT,
    [
        'floors_qty' => 1
    ]
);
