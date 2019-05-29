<?php

namespace FroshOvhAdapter\Subscriber;

use Crehler\Flysystem\OvhObjectStorage;
use Crehler\Flysystem\OvhObjectStorageAdapter as Adapter;
use Enlight\Event\SubscriberInterface;
use Enlight_Event_EventArgs;

use League\Flysystem\AdapterInterface;

$path = __DIR__ . '/../vendor/autoload.php';

if (file_exists($path)) {
    require_once $path;
}


class AdapterCollectionSubscriber implements SubscriberInterface
{

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return [
            'Shopware_Collect_MediaAdapter_ovh' => 'createOvhAdapter'
        ];
    }

    /**
     * Creates adapter instance
     *
     * @param Enlight_Event_EventArgs $args
     * @return AdapterInterface
     */
    public function createOvhAdapter(Enlight_Event_EventArgs $args)
    {


        $defaultConfig = [
            'username'  => '',
            'password'  => '',
            'tenantId'  => '',
            'container' => '',
            'region'    => '',
        ];

        $options = array_merge($defaultConfig, $args->get('config'));


        $client = new OvhObjectStorage($options);

        return new Adapter($client->getContainer());

    }
}
