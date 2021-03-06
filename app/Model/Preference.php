<?php

namespace App\Model;

class Preference extends Model
{

    /**
     * Table Name
     * @var string
     */
    protected $table = 'preferences';

    // protected $guarded = ['user_id'];

    public function __construct($smoker_accepted = null, $pet_accepted = null, $radio_accepted = null, $chat_accepted = null) {
    	$this->smoker_accepted = $smoker_accepted;
    	$this->pet_accepted = $pet_accepted;
    	$this->radio_accepted = $radio_accepted;
    	$this->chat_accepted = $chat_accepted;
    }
}
