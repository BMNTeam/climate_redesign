<?php
class GetFromDatabase{
    public $selectStartYear = '';
    public $selectEndYear = '';
    public $meteostationId = '';
    private $selectString = '';
    public  $databaseUser = '';
    public  $databasePWD = '';
    public  $databaseName = '';
    public  $databaseServer = '';

    public function connect(){
        $db = new PDO(
            "mysql:host=". $this -> $databaseServer
            .";dbname=".$this -> $databaseName
            .";charset=utf8mb4', '"
            .$this -> $databaseUser."', '"
            .$this -> $databasePWD."'");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    }

    public function getDataFromDatabase(){
        if( $this-> selectEndYear == '' && ! $isEditable)
        {
            $selectString = "SELECT * FROM ClimateData_TP WHERE MeteostationID=? AND Year = ?";
        }
        elseif($this-> selectEndYear != '' && ! $isEditable)
        {
            $selectString = "SELECT * FROM ClimateData_TP WHERE MeteostationID=? AND Year BETWEEN ? AND ?";
        }
        elseif( ! empty( $year_to_edit ) && $isEditable )
        {
            $selectString = "SELECT * FROM ClimateData_TP WHERE MeteostationID=? AND Year = ?";
        }

        //Prepare query
        $dataToAnalyse = $db-> prepare( $selectString );

        //Secure send variables
        $dataToAnalyse->bindValue(1, $selectRegion, PDO::PARAM_INT);
        if ( $isEditable )
        {
            $dataToAnalyse->bindValue(2, $year_to_edit, PDO::PARAM_INT);
        }else
        {
            $dataToAnalyse->bindValue(2, $selectStartYear, PDO::PARAM_INT);
        }
        $dataToAnalyse->bindValue(3, $this-> selectEndYear, PDO::PARAM_INT);

        //Execute query
        $dataToAnalyse->execute();

        //Get results al associative array
        $resultDataToAnalyse = $dataToAnalyse->fetchAll(PDO::FETCH_ASSOC);
    }


}




