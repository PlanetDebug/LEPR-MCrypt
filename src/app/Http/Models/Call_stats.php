<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Call_stats
 * 
 * Model class for attributing campaign data.
 */
class Call_stats extends Model
{
        private time $time;
        private String $url;

        // Getters and Setters
        public function getTime() {
            return $time;
        }

        public function setTime(String $time) {
            $this->time = $time;
        }

        public function getUrl() {
            return $url;
        }

        public function setUrl(String $url) {
            $this->url = $url;
        }
}

?>