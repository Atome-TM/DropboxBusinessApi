<?php
namespace Atome;

use Atome\Elements\Team;

class DropboxBusiness
{
    /**
     * @var string
     */
    private $apiKey;

    use RequestTrait;

    public function __construct(string $apiKey)
    {
        if ( ! $apiKey) {
            throw new \Exception('API key is needed');
        }
        $this->apiKey = $apiKey;
    }

    public function team() {
        return new Team($this->apiKey);
    }

}