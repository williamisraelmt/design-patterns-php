<?php

namespace MaintenanceReport\Factories;

use MaintenanceReport\Enums\ResidenceTypeEnum;
use MaintenanceReport\Strategies\Create\HouseStrategy;
use MaintenanceReport\Strategies\Create\ApartmentStrategy;
use MaintenanceReport\Strategies\Create\ICreateReportStrategy;
use MaintenanceReport\Strategies\Create\TrailerStrategy;

class ResidenceTypeFactory {

    public static function create(string $type): ICreateReportStrategy {

        switch ($type) {

            case ResidenceTypeEnum::HOUSE:
                
                return new HouseStrategy(); 

            case ResidenceTypeEnum::APARTMENT :

                return new ApartmentStrategy();

            case ResidenceTypeEnum::TRAILER :

                return new TrailerStrategy();
            
            default: 

                throw new \InvalidArgumentException("Unknown Residence Type");
            
        }

    } 

}