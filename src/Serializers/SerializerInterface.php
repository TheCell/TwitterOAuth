<?php namespace TwitterOAuth\Serializers;

/**
 * TwitterOAuth - https://github.com/ricardoper/TwitterOAuth
 * PHP library to communicate with Twitter OAuth API version 1.1
 *
 * @author Ricardo Pereira <github@ricardopereira.es>
 * @copyright 2016
 */

interface SerializerInterface
{

    /**
     * Format Output
     *
     * @param string $response
     * @return mixed
     */
    public function format($response);
}
