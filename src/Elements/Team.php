<?php
namespace Atome\Elements;

use Atome\RequestTrait;

class Team
{
    use RequestTrait;

    /**
     * @var string
     */
    private $apiKey;

    private $endpoint = '/team';

    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
    }

    public function getInfo()
    {
        return $this->post($this->endpoint . '/get_info');
    }

    public function members()
    {
        return new Members($this->apiKey);
    }
}