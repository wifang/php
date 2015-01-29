<?php
/*
 * physical address
 */
class Address {
    //street address
    public $street_address_1;
    public $street_address_2;

    // Name of the City
    public $city_name;

    //Name of the Sub_division
    public $subdivision_name;

    //postal code
    public $postal_code;

    //Name of the Country
    public $country_name;

    //Primary key of address
    protected $_address_id;

    // When the record was creaed and last updated
    protected $_time_created;
    protected $_time_updated;


    /*
     * Display an address in HTML
     *
     */
    public function display(){
        $output = '';

        //Street address.
        $output .= '<br>';
        $output .= $this->city_name.', '.$this->subdivision_name;
        $output .= ' '.$this->postal_code;

        //country
        $output .= '<br>';
        $output .= $this->country_name;

        return $output;
    }
}