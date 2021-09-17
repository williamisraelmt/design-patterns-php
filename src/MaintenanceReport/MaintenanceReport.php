<?php

namespace MaintenanceReport;

use Factories\ResidenceTypeFactory;

/** 
 *  Created by Williams Martínez.
 *  Imagine you have a Maintenance App, and your app acts like a broker between a customer that needs maintenance and maintenance companies (House, Department and Trailer), 
 *  , depending on the type you will submit a request to each maintenance company API.
 *  These maintenance companies api's require different fields and might have different validations, also, they might have different API responses 
 *  so you will need to parse all that information to display an standard confirmation to the user .
 *  (You might have to use more strategies on bigger scenarios, as you might have different companies which can handle the same type of problemas, but this will give you a 
 *   simple concept of how to use Factory and Strategy Pattern ).
 * 
 *  Please feel more than welcomed to suggest any update to this code, code can always be improved.  
 */

class MaintenanceReport {

    public function create(string $type, array $options) {

        /** @var IResidenceStrategy  */
        $strategy = new ResidenceTypeFactory($type, $options);

        $strategy->setOptions( $options );
        
        return $strategy->sendReport();

    }   

}