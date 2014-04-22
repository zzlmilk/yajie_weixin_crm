<?php

class RegistrationDayModel extends Basic {

    public function __construct() {

        $this->child_name = 'registration_day';

        parent::__construct();
    }

    public function getAward($day) {

        $awardDay = new RegistrationDayModel();

        $awardDay->initialize('day = ' . $day);

        if ($awardDay->vars_number > 0) {

            return $awardDay->vars;
        }
    }

}

?>