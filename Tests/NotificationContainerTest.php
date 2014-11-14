<?php
namespace MH\NotificationBundle\Tests;

use MH\NotificationBundle\NotificationCollectorContainer;

class NotificationContainerTest extends \PHPUnit_Framework_TestCase
{
    public function testFetchNotifications()
    {
        $notification = \Mockery::mock('\MH\NotificationBundle\Notification');
        $collector = \Mockery::mock('\MH\NotificationBundle\NotificationCollectorInterface');
        $collector->shouldReceive('collect')->andReturn([$notification]);

        $container = new NotificationCollectorContainer();
        $container->add($collector);
        $notifications = $container->collect();

        $this->assertCount(1, $notifications);
        $this->assertSame($notification, $notifications[0]);
    }
}
