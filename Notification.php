<?php
namespace MH\NotificationBundle;

class Notification
{
    const LEVEL_CRITICAL = 'critical';
    const LEVEL_INFO = 'info';

    /**
     * @var string
     */
    private $level;

    /**
     * @var string
     */
    private $subject;

    /**
     * @var string
     */
    private $detail;

    /**
     * @var NotificationAction[]
     */
    private $actions;

    /**
     * @param string $level
     * @param string $subject
     * @param string $detail
     * @param NotificationAction[] $actions
     */
    public function __construct($level, $subject, $detail, $actions = [])
    {
        $this->level = $level;
        $this->subject = $subject;
        $this->detail = $detail;
        $this->actions = $actions;
    }

    /**
     * @return string
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @return String
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * @return NotificationAction[]
     */
    public function getActions()
    {
        return $this->actions;
    }
}
