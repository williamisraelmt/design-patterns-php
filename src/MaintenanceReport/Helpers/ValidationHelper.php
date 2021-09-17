<?php 

namespace MaintenanceReport\Helpers;

use Rakit\Validation\Validator;

trait ValidationHelper {

    private $validator;

    function __construct() {
        
        $this->validator = new Validator();

    }

     public function mapFieldsValidationRules(array $fields){
        $result = []; 
        foreach($fields as $field) {
            $result[$field['key']] = $field['validation'];
        }
        return $result;
     }

    public function getInvalidData(array $fields, array $options) {
        
        $validation = $this->validator->make(
            $options, 
            $fields
        );

        $validation->validate();

        return $validation->getInvalidData();
    }

    public function isDataValid(array $fields, array $rules) {
        return !empty( $this->getInvalidData( $fields, $rules ) );
    }

}