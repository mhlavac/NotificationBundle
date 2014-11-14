<?php
namespace MH\NotificationBundle;

class NotificationAction
{
    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $label;

    /**
     * @param string $url
     * @param string $label
     */
    public function __construct($url, $label)
    {
        $this->url = $url;
        $this->label = $label;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }
}
