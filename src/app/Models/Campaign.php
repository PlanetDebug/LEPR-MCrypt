<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Campaign
 * 
 * Model class for attributing campaign data.
 */
class Campaign extends Model
{
        private String $id;
        private String $name;
        private String $desc;

        // Getters and Setters
        public function getId() {
            return $id;
        }

        public function setId(String $id) {
            $this->id = $id;
        }

        public function getName() {
            return $name;
        }

        public function setName(String $name) {
            $this->name = $name;
        }

        public function getDesc() {
            return $desc;
        }

        public function setDesc(String $desc) {
            $this->desc = $desc;
        }
}

?>