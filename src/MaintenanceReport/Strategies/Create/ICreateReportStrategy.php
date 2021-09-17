<?php 

namespace MaintenanceReport\Strategies\Create;

use MaintenanceReport\DTOs\ReportDTO;

interface ICreateReportStrategy {

    public function setOptions(array $options);

    public function getOptions(): array;

    public function getFields(): array;

    public function isValid(): bool;

    public function getInvalidFields(): array;

    public function handle(): ReportDTO;
}