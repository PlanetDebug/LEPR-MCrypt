<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Person
 * 
 * Model class for attributing person data.
 */
class Person extends Model
{
    private int $id;
    private String $first_name;
    private String $last_name;
    private String $phone_num;
    private String $email;

    // Getters and Setters
    public function getId() {
        return $id;
    }

    public function setId(int $id) {
        $this->id = $id;
    }

    public function getFirstName() {
        return $first_name;
    }

    public function setFirstName(String $name) {
        $first_name = $name;
    }

    public function getLastName() {
        return $last_name;
    }

    public function setLastName(String $name) {
        $last_name =  $name;
    }

    public function getPhoneNum() {
        return $phone_num;
    }

    public function setPhoneNum(String $num) {
        $phone_num = $num;
    }

    public function getEmail() {
        return $email;
    }

    public function toString() {
        return "name: " . $first_name . $last_name . "<br />" . 
                "phone: " . $phone_num . "<br />" .
                "email: " . $email 
        ; 
    }
}

?>