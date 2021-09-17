<?php 

namespace MaintenanceReport\Strategies\Create;

use MaintenanceReport\DTOs\ReportDTO;
use MaintenanceReport\Helpers\ValidationHelper;

class ApartmentStrategy implements ICreateReportStrategy {

    use ValidationHelper;

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

    public function handle(): ReportDTO {
        
        /**
         * Here you make you could have another class instaced using DI 
         * which might contain the API for the Apartment Company, and also to translate from their structure to the structure you use in your API
         * I.e: On their response their pk field is "TicketId" but in your app the field name is "custom_report_id"
         * and then return the data. 
         **/

        if (!$this->isValid()){
        
            throw new \Exception("Invalid fields.");
        
        }
        

        $dto = new ReportDTO();

        $dto->customReportId = rand(0, 100);

        return $dto;
          

    }

}