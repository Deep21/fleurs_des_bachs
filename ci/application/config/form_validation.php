<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

$config = array(
    'address_add' => array(
        array(
            'field' => 'company',
            'label' => 'company',
            'rules' => 'required'
        ),
        array(
            'field' => 'address',
            'label' => 'address',
            'rules' => 'required|trim|xss_clean'
        ),

        array(
            'field' => 'postcode',
            'label' => 'postcode',
            'rules' => 'required|integer'
        ),
        array(
            'field' => 'city',
            'label' => 'city',
            'rules' => 'required|trim|xss_clean'
        ),
        array(
            'field' => 'phone',
            'label' => 'phone',
            'rules' => 'required|integer'
        ),
        array(
            'field' => 'phone_mobile',
            'label' => 'phone_mobile',
            'rules' => 'required|integer'
        ),
        array(
            'field' => 'alias',
            'label' => 'alias',
            'rules' => 'required'
        ),
        array(
            'field' => 'id_customer',
            'label' => 'id_customer',
            'rules' => 'required|integer'
        )
    ),

    'address_put' => array(
        array(
            'field' => 'company',
            'label' => 'company',
            'rules' => 'required|xss_clean'
        ),
        array(
            'field' => 'address',
            'label' => 'address',
            'rules' => 'required|trim|xss_clean'
        ),
        array(
            'field' => 'postcode',
            'label' => 'postcode',
            'rules' => 'required|integer'
        ),

        array(
            'field' => 'city',
            'label' => 'city',
            'rules' => 'required|trim|xss_clean'
        ),
        array(
            'field' => 'phone',
            'label' => 'phone',
            'rules' => 'required|integer'
        ),
        array(
            'field' => 'phone_mobile',
            'label' => 'phone_mobile',
            'rules' => 'required|integer'
        ),
        array(
            'field' => 'alias',
            'label' => 'alias',
            'rules' => 'required|xss_clean'
        )
    ),


    'customer_add' => array(
        array(
            'field' => 'email',
            'label' => 'email',
            'rules' => 'required|trim|xss_clean|valid_email|is_customer_exist'
        ),
        array(
            'field' => 'firstname',
            'label' => 'firstname',
            'rules' => 'required|trim|xss_clean|alpha'
        ),
        array(
            'field' => 'lastname',
            'label' => 'lastname',
            'rules' => 'required|trim|xss_clean|alpha'
        ),
        array(
            'field' => 'gender',
            'label' => 'gender',
            'rules' => 'integer|required'
        ),
        array(
            'field' => 'birthday',
            'label' => 'birthday',
            'rules' => 'required|isBirthDate'
        ),
        array(
            'field' => 'pwd',
            'label' => 'pwd',
            'rules' => 'alpha_numeric|required|min_length[5]|max_length[12]|crypt_md5'
        ),
        array(
            'field' => 'pwdconfirmed',
            'label' => 'pwdconfirmed',
            'rules' => 'alpha_numeric|required|min_length[5]|max_length[12]|matches[pwd]'
        )

    ),

    'customer_put' => array(
        array(
            'field' => 'email',
            'label' => 'email',
            'rules' => 'required|trim|xss_clean|valid_email'
        ),
        array(
            'field' => 'firstname',
            'label' => 'firstname',
            'rules' => 'required|trim|xss_clean|alpha'
        ),
        array(
            'field' => 'lastname',
            'label' => 'lastname',
            'rules' => 'required|trim|xss_clean|alpha'
        ),
        array(
            'field' => 'gender',
            'label' => 'gender',
            'rules' => 'integer|required'
        ),
        array(
            'field' => 'birthday',
            'label' => 'birthday',
            'rules' => 'required'
        ),
        array(
            'field' => 'pwd',
            'label' => 'pwd',
            'rules' => 'alpha_numeric|required|min_length[5]|max_length[12]|callback_crypt_md5'
        ),
        array(
            'field' => 'pwdconfirmed',
            'label' => 'pwdconfirmed',
            'rules' => 'alpha_numeric|required|min_length[5]|max_length[12]|matches[pwd]'
        )

    ),


    'sign_up' => array(
        array(
            'field' => 'login',
            'label' => 'login',
            'rules' => 'required|trim|xss_clean|valid_email'
        ),
        array(
            'field' => 'pwd',
            'label' => 'pwd',
            'rules' => 'alpha_numeric|required|min_length[5]|max_length[12]|trim|xss_clean|crypt_md5'
        )
    ),


    'product' => array(
        array(
            'field' => 'id_product',
            'label' => 'id',
            'rules' => 'required|integer|is_product_exist'
        )
    ),

    'filter' => array(

        array(
            'field' => 'limit',
            'label' => 'Limit',
            'rules' => 'integer'
        ),
        array(
            'field' => 'from',
            'label' => 'From',
            'rules' => 'isDate'
        ),
        array(
            'field' => 'to',
            'label' => 'To',
            'rules' => 'isDate'
        )
    ),


);
