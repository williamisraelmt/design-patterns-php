<?php

namespace Factories;

use Enums\ResidenceTypeEnum;
use Strategies\HouseStrategy;
use Strategies\ApartmentStrategy;
use Strategies\IResidenceStrategy;
use Strategies\TrailerStrategy;

class ResidenceTypeFactory {

    public static function get(string $type): IResidenceStrategy {

        switch ($type) {

            case ResidenceTypeEnum::HOUSE:
                
                return new HouseStrategy(); 

            case ResidenceTypeEnum::APARTMENT :

                return new ApartmentStrategy();

            case ResidenceTypeEnum::TRAILER :

                return new TrailerStrategy();
            
            default: 

                throw new \Exception("Unknown Residence Type");
            
        }

    } 

}