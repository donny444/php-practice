<?php
    class Me {
        public $name;
        public $country;
        public $career;

        function __construct($name, $country, $age)
        {
            $this->name = $name;
            $this->country = $country;
            $this->career = $career;
        }
    }

    $creater = new Me("Donny", "Thailand", "Programmer");
?>