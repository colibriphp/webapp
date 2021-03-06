<?php

namespace Colibri\WebApp\Rest\JsonMessages;

use Colibri\Http\Response as HttpResponse;

/**
 * Class Response
 * @package Colibri\WebApp\Response\JsonMessages
 */
class ContentResponse extends AbstractResponse
{
    
    /**
     * @var int
     */
    public $code    = HttpResponse::SUCCESS_OK;
    
    /**
     * @var null|array
     */
    public $content = null;
    
    /**
     * Response constructor.
     *
     * @param $code
     * @param $content
     */
    public function __construct($code, $content)
    {
        $this->code = $code;
        $this->content = $content;
    }
    
}