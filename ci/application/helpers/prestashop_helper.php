<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

define("PS_PRICE_ROUND_MODE", 2);

function encrypt_with_prestashop_key($pwd)
{
    $ci = &get_instance();
    return md5($ci->config->item('encryption_key') . $pwd);
}

function passwdGen($length = 8, $flag = 'ALPHANUMERIC')
{
    switch ($flag) {
        case 'NUMERIC':
            $str = '0123456789';
            break;

        case 'NO_NUMERIC':
            $str = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
            break;

        default:
            $str = 'abcdefghijkmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
            break;
    }

    for ($i = 0, $passwd = ''; $i < $length; $i++) $passwd .= substr_prestashop($str, mt_rand(0, strlen_prestashop($str) - 1), 1);
    return $passwd;
}

function is_array_empty($arr)
{
    if (is_array($arr)) {
        foreach ($arr as $key => $value) {
            if (!empty($value) || $value != NULL || $value != "") {
                return true;
                break;
            }
        }
        return false;
    }
}

function substr_prestashop($str, $start, $length = false, $encoding = 'utf-8')
{
    if (is_array($str)) return false;
    if (function_exists('mb_substr')) return mb_substr($str, (int)$start, ($length === false ? strlen_prestashop($str) : (int)$length), $encoding);
    return substr($str, $start, ($length === false ? strlen_prestashop($str) : (int)$length));
}

function strlen_prestashop($str, $encoding = 'UTF-8')
{
    if (is_array($str)) return false;
    $str = html_entity_decode($str, ENT_COMPAT, 'UTF-8');
    if (function_exists('mb_strlen')) return mb_strlen($str, $encoding);
    return strlen($str);
}

function add_to_array_prestashop($array, $key, $value)
{
    if (array_key_exists($key, $array)) {
        if (is_array($array[$key])) {
            $array[$key][] = $value;
        } else {
            $array[$key] = array($array[$key], $value);
        }
    } else {
        $array[$key] = array($value);
    }
}

/**
 * returns the rounded value of $value to specified precision, according to your configuration;
 *
 * @note : PHP 5.3.0 introduce a 3rd parameter mode in round function
 *
 * @param float $value
 * @param int $precision
 * @return float
 */
function ps_round($value, $precision = 0)
{
    static $method = null;

    if ($method == null) $method = PS_PRICE_ROUND_MODE;

    if ($method == 0) return ceilf($value, $precision);
    elseif ($method == 1) return floorf($value, $precision);
    return round($value, $precision);
}

/**
 * returns the rounded value down of $value to specified precision
 *
 * @param float $value
 * @param int $precision
 * @return float
 */
function ceilf($value, $precision = 0)
{
    $precision_factor = $precision == 0 ? 1 : pow(10, $precision);
    $tmp = $value * $precision_factor;
    $tmp2 = (string)$tmp;

    // If the current value has already the desired precision
    if (strpos($tmp2, '.') === false) return ($value);
    if ($tmp2[strlen($tmp2) - 1] == 0) return $value;
    return ceil($tmp) / $precision_factor;
}

/**
 * returns the rounded value up of $value to specified precision
 *
 * @param float $value
 * @param int $precision
 * @return float
 */
function floorf($value, $precision = 0)
{
    $precision_factor = $precision == 0 ? 1 : pow(10, $precision);
    $tmp = $value * $precision_factor;
    $tmp2 = (string)$tmp;

    // If the current value has already the desired precision
    if (strpos($tmp2, '.') === false) return ($value);
    if ($tmp2[strlen($tmp2) - 1] == 0) return $value;
    return floor($tmp) / $precision_factor;
}

?>