<?php 

require __DIR__ . '/vendor/autoload.php';

use Enums\ResidenceTypeEnum;
use MaintenanceReport\MaintenanceReport;

$maintenance_report = new MaintenanceReport();

$maintenance_report->create(ResidenceTypeEnum::HOUSE, [
    'floor_qty' => 2
]);