<?php
require_once($INCLUDE_ROOT .'/DB_itit.php');

/**
 *
 *
*/

class Average{
    public $array_of_meteostations_ids;
    public $values;
    public $start_year;
    public $end_year;
    protected $database_connection;
    protected $query_results;
    protected $number_of_meteostations;
    public  $round_to = 1;


    function __construct( $array_of_meteostations_ids, $start_year, $end_year, $database_connection )
    {
        $this->array_of_meteostations_ids = $array_of_meteostations_ids;
        $this->database_connection = $database_connection;
        $this->start_year = $start_year;
        $this->number_of_meteostations = count($array_of_meteostations_ids);
        $this->end_year = $end_year;
    }

    public function get_values()
    {
        $selected_meteostations = implode(',',$this->array_of_meteostations_ids);

        //Check if user don't send end year then find only start Year
        //Otherwise find values between start year and end year
        if ( empty( $this->end_year ) )
        {
            $select_statement = "SELECT * FROM ClimateData_TP WHERE MeteostationID IN ($selected_meteostations) AND Year = ?";
        }elseif( ! empty( $this->end_year ) )
        {
            $select_statement = "SELECT * FROM ClimateData_TP WHERE MeteostationID IN ($selected_meteostations) AND Year BETWEEN ? AND ?";
        }

        // Prepare query
        $query = $this->database_connection->prepare( $select_statement );

        // If don't selected end year then don't bind it to the
        // select query
        if( empty($this->end_year))
        {
            $query->bindValue(1, $this->start_year);
        }elseif( ! empty( $this->end_year ) )
        {
            $query->bindValue(1, $this->start_year);
            $query->bindValue(2, $this->end_year);
        }

        $query->execute();
        $this->query_results = $query->fetchAll(PDO::FETCH_ASSOC);

    }

    public function get_average()
    {
        self::get_values();

        $array_of_found_data = $this->query_results;
        $months_sum = array();
        $months_average = array();

        //Create new array with sum of temperatures  for all regions
        foreach ($array_of_found_data as $key => $value) {
            //If period given calculate for each Year
            for ($i = 1; $i <= 12; $i++) {
                if (!empty($this->end_year)) {
                    for ($j = $this->start_year; $j <= $this->end_year; $j++) {
                        if ($value['Year'] == $j) {
                            $months_sum[$j]["T$i"] += $value["T$i"];
                            $months_sum[$j]["P$i"] += $value["P$i"];
                            $months_sum[$j]['Year'] = $j;
                        }
                    }
                } else //Otherwise calculate only for one Year
                {
                    $months_sum[$this->start_year]["T$i"] += $value["T$i"];
                    $months_sum[$this->start_year]["P$i"] += $value["P$i"];
                    $months_sum[$this->start_year]['Year'] = $this->start_year;

                }

            }
        }


        //Return an Array with medium values
        //If period given then
        if (!empty($this->end_year)) {
            for ($j = $this->start_year; $j <= $this->end_year; $j++) {
                for ($i = 1; $i <= 12; $i++) {
                    $months_average[$j]["T$i"] = round($months_sum[$j]["T$i"] / ($this->number_of_meteostations), $this->round_to);
                    $months_average[$j]["P$i"] = round($months_sum[$j]["P$i"] / ($this->number_of_meteostations), $this->round_to);
                    $months_average[$j]["Year"] = $j;
                }
            }
        } else //If we have only one Year given
        {
            for ($i = 1; $i <= 12; $i++) {
                $months_average[$this->start_year]["T$i"] = round($months_sum[$this->start_year]["T$i"] / ($this->number_of_meteostations), $this->round_to);
                $months_average[$this->start_year]["P$i"] = round($months_sum[$this->start_year]["P$i"] / ($this->number_of_meteostations), $this->round_to);
                $months_average[$this->start_year]["Year"] = $this->start_year;
            }
        }


        return $months_average;

    }
}

