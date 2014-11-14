<?php
namespace MH\NotificationBundle;

class NotificationCollectorContainer implements NotificationCollectorInterface
{
    /**
     * @var NotificationCollectorInterface[]
     */
    private $collectors;

    public function collect()
    {
        $notifications = [];
        foreach ($this->collectors as $collector) {
            $notifications = array_merge($notifications, $collector->collect());
        }

        return $notifications;
    }

    public function add(NotificationCollectorInterface $collector)
    {
        $this->collectors[] = $collector;
    }
}
