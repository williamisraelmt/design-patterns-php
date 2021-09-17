<?php 

namespace Strategies;

use APIClients\IAPIClient;

interface IResidenceStrategy {

    public function setOptions(array $options);

    public function getOptions(): array;

    public function getFields(): array;

    public function isValid(): bool;

    public function getInvalidFields(): array;

    public function sendReport(): array;
}