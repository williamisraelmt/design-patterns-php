<?php 

namespace MaintenanceReport\Strategies\Create;

use MaintenanceReport\Enums\FieldTypesEnum;
use MaintenanceReport\Helpers\ValidationHelper;
use MaintenanceReport\DTOs\ReportDTO;

class HouseStrategy implements ICreateReportStrategy {

    use ValidationHelper;

    /**
     * These fields 
     */

    private $fields = [
        [
            'key' => 'house_no',
            'label' => 'House number',
            'type' => FieldTypesEnum::STRING
        ],
        [
            'key' => 'floors_qty',
            'label' => 'Amount of floors',
            'type' => FieldTypesEnum::INTEGER
        ],
        [
            'key' => 'basement',
            'label' => 'Does it has a basement',
            'type' => FieldTypesEnum::BOOLEAN
        ],
    ];

    private $options;

    public function setOptions(array $options) {
        
        $this->options = $options;

    }

    public function getOptions(): array {
    
        return $this->options;
    
    }
   
    public function getFields(): array {

        return $this->fields;

    }

     public function isValid(): bool {

        return $this->isDataValid( $this->options, $this->mapFieldsValidationRules($this->fields) );

    }

    public function getInvalidFields(): array {

        return $this->getInvalidData( $this->options, $this->mapFieldsValidationRules($this->fields) );

    }

    public function handle(): array {
        
        /**
         * Here you make you could have another class instaced using DI 
         * which might contain the API for the HouseCompany, and also to translate from their structure to the structure you use in your API
         * I.e: On their response their pk field is "TicketId" but in your app the field name is "custom_report_id"
         * and then return the data. 
         **/

        if ($this->isValid()){
            
            // Make the call 

            return [
                'data' => null,
                'errors' => $this->getInvalidFields()  
            ];

         }

        $dto = new ReportDTO();

        $dto->customReportId = rand(0, 100);

        return [
            'data' => $dto,
            'errors' => [],
        ];
            

    }

}