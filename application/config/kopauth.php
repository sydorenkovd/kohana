<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @package   Modules
 * @category  Kopauth
 * @author    Fady Khalife
 * @link      http://opauth.org
 */
return array(
    /**
     * A random string used for signing of $auth response.
     */
    'security_salt' => 'frefdsfsdsdfdsfdswerewr3432423rewd32de32',
    
    /**
     * Path where Opauth is accessed.
     * 
     * Begins and ends with /
     * eg. if Opauth is reached via http://example.org/auth/, path is '/auth/'
     * if Opauth is reached via http://auth.example.org/, path is '/'
     */
    'path' => '/kopauth/authenticate/',
    
    /**
     * Callback transport, for sending of $auth response
     * 
     * 'session': Default. Works best unless callback_url is on a different domain than Opauth
     * 'post'   : Works cross-domain, but relies on availability of client-side JavaScript.
     * 'get'    : Works cross-domain, but may be limited or corrupted by browser URL length limit 
     *            (eg. IE8/IE9 has 2083-char limit)
     */
     'callback_transport' => 'session',
    
    /**
     * Strategy
     * Refer to individual strategy's documentation on configuration requirements.
     *
     * eg.
     * 'Strategy' => array(
     *     'Facebook' => array(
     *         'app_id' => 'APP ID',
     *         'app_secret' => 'APP_SECRET'
     *     ),
     * )
     */
    'Strategy' => array(
        // Define strategies and their respective configs here
        'Facebook' => array(
            'app_id'     => '000000000001',
            'app_secret' => '7e7cad2cc7eebab581643c12bf7e50f8',
        ),
    ),
);
