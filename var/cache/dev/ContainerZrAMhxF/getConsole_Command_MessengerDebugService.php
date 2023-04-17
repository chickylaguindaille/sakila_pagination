<?php

namespace ContainerZrAMhxF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_MessengerDebugService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'console.command.messenger_debug' shared service.
     *
     * @return \Symfony\Component\Messenger\Command\DebugCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Command/DebugCommand.php';

        $container->privates['console.command.messenger_debug'] = $instance = new \Symfony\Component\Messenger\Command\DebugCommand(['messenger.bus.default' => ['Symfony\\Component\\Mailer\\Messenger\\SendEmailMessage' => [0 => [0 => 'mailer.messenger.message_handler', 1 => []]], 'Symfony\\Component\\Notifier\\Message\\ChatMessage' => [0 => [0 => 'chatter.messenger.chat_handler', 1 => []]], 'Symfony\\Component\\Notifier\\Message\\SmsMessage' => [0 => [0 => 'texter.messenger.sms_handler', 1 => []]], 'Symfony\\Component\\Notifier\\Message\\PushMessage' => [0 => [0 => 'texter.messenger.push_handler', 1 => []]]]]);

        $instance->setName('debug:messenger');
        $instance->setDescription('List messages you can dispatch using the message buses');

        return $instance;
    }
}
