<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Query_type
 * 
 * Model class for attributing campaign data.
 */
class Query_type extends Model
{
        private String $id;
        private String $title;

        // Getters and Setters
        public function getId() {
            return $id;
        }

        public function setId(String $id) {
            $this->id = $id;
        }

        public function getTitle() {
            return $title;
        }

        public function setTitle(String $title) {
            $this->title = $title;
        }
}

?>