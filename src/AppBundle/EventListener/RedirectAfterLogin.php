<?php
/**
 * Created by PhpStorm.
 * User: gaby
 * Date: 22/01/2018
 * Time: 10:26
 */
namespace AppBundle\EventListener;
use Symfony\Component\EventDispatcher\Event;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class RedirectAfterLogin implements EventDispatcherInterface
{


    public function dispatch($eventName, Event $event = null)
    {
        // TODO: Implement dispatch() method.
    }

    public function addListener($eventName, $listener, $priority = 0)
    {
        // TODO: Implement addListener() method.
    }

    public function addSubscriber(EventSubscriberInterface $subscriber)
    {
        // TODO: Implement addSubscriber() method.
    }

    public function removeListener($eventName, $listener)
    {
        // TODO: Implement removeListener() method.
    }

    public function removeSubscriber(EventSubscriberInterface $subscriber)
    {
        // TODO: Implement removeSubscriber() method.
    }

    public function getListeners($eventName = null)
    {
        // TODO: Implement getListeners() method.
    }

    public function getListenerPriority($eventName, $listener)
    {
        // TODO: Implement getListenerPriority() method.
    }

    public function hasListeners($eventName = null)
    {
        // TODO: Implement hasListeners() method.
    }

}