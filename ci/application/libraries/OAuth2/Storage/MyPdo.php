<?php

namespace OAuth2\Storage;

/**
 * Simple PDO storage for all storage types
 *
 * NOTE: This class is meant to get users started
 * quickly. If your application requires further
 * customization, extend this class or create your own.
 *
 * NOTE: Passwords are stored in plaintext, which is never
 * a good idea.  Be sure to override this for your application
 *
 * @author Brent Shaffer <bshafs at gmail dot com>
 */
class MyPdo extends Pdo
{

    public function __construct($connection, $config = array(), $prefix)
    {
        $table_config = array(
            'client_table' => $prefix . 'oauth_clients',
            'access_token_table' => $prefix . 'oauth_access_tokens',
            'refresh_token_table' => $prefix . 'oauth_refresh_tokens',
            'code_table' => $prefix . 'oauth_authorization_codes',
            'user_table' => $prefix . 'oauth_users',
            'jwt_table' => $prefix . 'oauth_jwt',
            'scope_table' => $prefix . 'oauth_scopes',
            'public_key_table' => $prefix . 'oauth_public_keys',
        );
        parent::__construct($connection, $table_config);
    }

}
