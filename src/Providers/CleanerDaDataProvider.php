<?php

namespace Teleport\DaData\Providers;

use Exception;

/**
 * Class CleanerDaDataProvider
 * @package Teleport\DaData\Providers
 */
class CleanerDaDataProvider
{

    use Client;

    /**
     * @var string
     */
    protected string $api  = 'https://cleaner.dadata.ru/api';

    /**
     * @var string
     */
    protected string $v    = 'v1';

    /**
     * @var string application/json
     */
    protected string $content_type = 'application/json';

    /**
     * @var string
     */
    protected string $token;

    /**
     * @var string
     */
    protected string $secret;

    /**
     * @var int
     */
    protected int $timeout;

    /**
     * CleanerDaDataProvider constructor.
     *
     * @param string $token
     * @param string $secret
     * @param int $timeout
     * @param string $v
     */
    public function __construct(string $token, string $secret, int $timeout = 10, string $v = 'v1')
    {
        $this->token    = $token;
        $this->secret   = $secret;
        $this->timeout  = $timeout;
        $this->v        = $v;

    }

    /**
     * @param string $method
     * @param array $data
     * @return array
     * @throws Exception
     */
    public function post(string $method, array $data = []) : array
    {
        $headers = [
            'Content-Type' => $this->content_type,
            'Authorization' => sprintf('Token %s', $this->token),
            'X-Secret' => $this->secret,
        ];
        $url    = sprintf('%s/%s/%s', $this->api, $this->v, $method);

        return $this->postData($headers, $url, $data, $this->timeout);
    }

}
