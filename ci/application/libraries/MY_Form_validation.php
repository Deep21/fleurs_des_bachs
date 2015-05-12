<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class MY_Form_validation extends CI_Form_validation
{
    public $pwd;

    public function __construct($config = array())
    {
        parent::__construct($config);

    }

    /**
     * Check for birthDate validity
     *
     *
     * @param string $date birthdate to validate
     * @return boolean Validity is ok or not
     */
    public static function isBirthDate($date)
    {

        if (empty($date) || $date == '0000-00-00') 
            return true;
        
        if (empty($date) || $date == '0000-00-00')
            return true;

        if (preg_match('/^([0-9]{4})-((?:0?[1-9])|(?:1[0-2]))-((?:0?[1-9])|(?:[1-2][0-9])|(?:3[01]))([0-9]{2}:[0-9]{2}:[0-9]{2})?$/', $date, $birth_date)) {
            if ($birth_date[1] > date('Y') && $birth_date[2] > date('m') && $birth_date[3] > date('d'))
                return false;
            return true;
        }
        return false;
    }


    /**
     * Check for date format
     *
     * @param string $date Date to validate
     * @return boolean Validity is ok or not
     */
    public static function isDateFormat($date)
    {
        return (bool)preg_match('/^([0-9]{4})-((0?[0-9])|(1[0-2]))-((0?[0-9])|([1-2][0-9])|(3[01]))( [0-9]{2}:[0-9]{2}:[0-9]{2})?$/', $date);
    }

    /**
     * Check for date validity
     *
     * @param string $date Date to validate
     * @return boolean Validity is ok or not
     */
    public static function isDate($date)
    {
        if (!preg_match('/^([0-9]{4})-((?:0?[0-9])|(?:1[0-2]))-((?:0?[0-9])|(?:[1-2][0-9])|(?:3[01]))( [0-9]{2}:[0-9]{2}:[0-9]{2})?$/', $date, $matches))
            return false;
        return checkdate((int)$matches[2], (int)$matches[3], (int)$matches[1]);
    }


    /**
     * @param $mail
     * @return bool
     */
    public function is_customer_exist($mail)
    {
        $ci =& get_instance();
        $ci->load->model('Customer_Model');
        $d = $ci->Customer_Model->is_customer_exist($mail);
        if ($d != NULL) {
            return false;
        } else {
            return true;
        }

    }

    public function is_product_exist($id_product)
    {

        $ci =& get_instance();
        $ci->load->model('Product_Model');
        $d = $ci->Product_Model->is_product_exist($id_product);
        if ($d != NULL) {
            return false;
        } else {
            return true;
        }

    }

    public function is_alias_exist()
    {

    }

    public function crypt_md5($pwd)
    {
        $ci =& get_instance();
        return md5($ci->config->item('encryption_key') . $pwd);
    }

    public function isIp2Long($ip)
    {
        return preg_match('#^-?[0-9]+$#', (string)$ip);
    }

    /**
     * Check the e-mail validity
     *
     * @param string $email e-mail address to validate
     * @return boolean Validity is ok or not
     */
    public function isEmail($email)
    {
        return !empty($email) && preg_match(self::cleanNonUnicodeSupport('/^[a-z\p{L}0-9!#$%&\'*+\/=?^`{}|~_-]+[.a-z\p{L}0-9!#$%&\'*+\/=?^`{}|~_-]*@[a-z\p{L}0-9]+[._a-z\p{L}0-9-]*\.[a-z0-9]+$/ui'), $email);
    }

    public static function cleanNonUnicodeSupport($pattern)
    {
        if (!defined('PREG_BAD_UTF8_OFFSET'))
            return $pattern;
        return preg_replace('/\\\[px]\{[a-z]\}{1,2}|(\/[a-z]*)u([a-z]*)$/i', "$1$2", $pattern);
    }

    /**
     * Check for name validity
     *
     * @param string $name Name to validate
     * @return boolean Validity is ok or not
     */
    public function isName($name)
    {
        return preg_match(self::cleanNonUnicodeSupport('/^[^0-9!<>,;?=+()@#"°{}_$%:]*$/u'), stripslashes($name));
    }

    /**
     * Check for a postal address validity
     *
     * @param string $address Address to validate
     * @return boolean Validity is ok or not
     */
    public function isAddress($address)
    {
        return empty($address) || preg_match('/^[^!<>?=+@{}_$%]*$/u', $address);
    }

    /**
     *
     * Check for city name validity
     *
     * @param string $city City name to validate
     * @return boolean Validity is ok or not
     */
    public function isCityName($city)
    {
        return preg_match('/^[^!<>;?=+@#"°{}_$%]*$/u', $city);
    }

    /**
     * Check for phone number validity
     *
     * @param string $number Phone number to validate
     * @return boolean Validity is ok or not
     */
    public function isPhoneNumber($number)
    {
        return preg_match('/^[+0-9. ()-]*$/', $number);
    }


    /**
     * Check for postal code validity
     *
     * @param string $postcode Postal code to validate
     * @return boolean Validity is ok or not
     */
    public function isPostCode($postcode)
    {
        return empty($postcode) || preg_match('/^[a-zA-Z 0-9-]+$/', $postcode);
    }


    /**
     * Validate SIRET Code
     * @static
     * @param $siret SIRET Code
     * @return boolean Return true if is valid
     */
    public function isSiret($siret)
    {
        if (Tools::strlen($siret) != 14)
            return false;
        $sum = 0;
        for ($i = 0; $i != 14; $i++) {
            $tmp = ((($i + 1) % 2) + 1) * intval($siret[$i]);
            if ($tmp >= 10)
                $tmp -= 9;
            $sum += $tmp;
        }
        return ($sum % 10 === 0);
    }


    /**
     * Validate APE Code
     * @static
     * @param $ape APE Code
     * @return boolean Return true if is valid
     */
    public function isApe($ape)
    {
        return (bool)preg_match('/^[0-9]{3,4}[a-zA-Z]{1}$/s', $ape);
    }


    /**
     * Price display method validity
     *
     * @param string $data Data to validate
     * @return boolean Validity is ok or not
     */
    public function isString($data)
    {
        return is_string($data);
    }


    /**
     * Check url validity (disallowed empty string)
     *
     * @param string $url Url to validate
     * @return boolean Validity is ok or not
     */
    public function isUrl($url)
    {
        return preg_match('/^[~:#,%&_=\(\)\.\? \+\-@\/a-zA-Z0-9]+$/', $url);
    }


}

