<?php

namespace CShort\MantisIssue;

class MantisIssue
{

    private $mantis_url;
    private $mantis_user;
    private $mantis_pass;

    // @var MantisConnect
    public $client;

    /**
     * Create a new MantisIssue Instance
     *
     */
    public function __construct($mantis_url, $mantis_user, $mantis_pass, $wsdlOptions = array())
    {
        $this->mantis_url = $mantis_url;
        $this->mantis_user = $mantis_user;
        $this->mantis_pass = $mantis_pass;

        $this->client = new MantisConnect($mantis_url, $wsdlOptions);

        return $this;
    }
}
