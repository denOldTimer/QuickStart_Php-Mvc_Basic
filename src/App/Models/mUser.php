<?php
namespace App\Models;

use App\Core\Model;

/**
 *  About
 */
class mUser extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    /*
     * getRowCountUser : function to check if the user with password even exists
     * sc_users.username is not null, unique
     * sc_users.passwd is not null,
     * @params : $email    :    string
     * @params : $passwd    :    string  - encryption
     */
    public static function getRowCountUser($email, $passwd)
    {
        $dB = self::getdb();
        return $dB->rowcount("SELECT * FROM sc_user WHERE email='$email' AND psw='$passwd' ");
    }

    /*
     *    getRowCountUserName : function to check if the username already exists
     * sc_users.username is not null, unique
     * @params : $username    :    string
     */
    public static function getRowCountEmail($email)
    {
        $dB = self::getdb();
        return $dB->rowcount("SELECT * FROM sc_user WHERE email='$email' ");
    }
    /*
     *    getUser : function to get user
     * sc_users.email is not null, unique
     * @params : $email    :    string
     */
    public static function getUser($email)
    {
        $dB = self::getdb();
        return $dB->select("SELECT * FROM sc_user WHERE email='$email' ");
    }

} //END CLASS
