<?php
namespace MH\NotificationBundle;

interface NotificationCollectorInterface
{
    /**
     * @return Notification[]
     */
    public function collect();
}
