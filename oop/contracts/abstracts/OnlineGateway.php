<?php


abstract class OnlineGateway
{
    protected $options;

    public function __construct()
    {
        $this->options = [
            'mellat' => [
                'username' => "shahab",
                'password' => 'asdas5d5as',
                'product_id' => '646'
            ],
            'saman' => [
                'username' => "asdas554",
                'password' => 'asda44452',
                'product_id' => 'asda555'
            ],
            'zarinpal' => [
                'api_token' => "aasdas6dasd5wqef13sdfs1d",
            ]
        ];
    }

    abstract public function sendRequest();

    abstract public function verifyRequest();
}

class Mellat extends OnlineGateway
{
    private $gatewayName;
    private $mellat_options;

    public function __construct()
    {
        $this->gatewayName = "mellat";
        parent::__construct();
        $this->mellat_options = $this->options[$this->gatewayName];
    }

    public function sendRequest()
    {
        var_dump($this->mellat_options);
    }

    public function verifyRequest()
    {
        // TODO: Implement verifyRequest() method.
    }

}

$mellat = Factory::make('mellat');
$mellat->sendRequest();

class Factory{
    public static function make($class)
    {
        $className = ucfirst($class);
        if (!class_exists($className)){
            return false;
        }
        return new $className;
    }
}
