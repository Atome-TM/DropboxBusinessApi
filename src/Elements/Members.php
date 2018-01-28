<?php
namespace Atome\Elements;

use Atome\RequestTrait;

class Members
{
    use RequestTrait;

    /**
     * @var string
     */
    private $apiKey;

    private $endpoint = '/team/members';

    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
    }

    public function getInfo()
    {
        return $this->post($this->endpoint . '/get_info');
    }

    public function list($parameters = [])
    {
        return $this->post($this->endpoint . '/list', $parameters);
    }

    public function add($parameters = [])
    {
        return $this->post($this->endpoint . '/add', $parameters);
    }
}