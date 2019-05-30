# OVH Object Storage Adapter for Shopware

[![Join the chat at https://gitter.im/FriendsOfShopware/Lobby](https://badges.gitter.im/FriendsOfShopware/Lobby.svg)](https://gitter.im/FriendsOfShopware/Lobby)

This plugin allows you to manage your media files in Shopware on OVH Object Storage.


## Requirements
- Shopware 5.2.x or higher
- PHP 5.4.x or higher


## Installation

Download the plugin from the release page and enable it in shopware.

## Usage

Update your `config.php` in your root directory and fill in your own values

```php
'cdn' => [
    'backend' => 'sftp',
    'adapters' => [
        'ovh' => [
            'type' => 'ovh',
            'mediaUrl' => 'YOUR_CONTAINER_URL',
            'username'  => 'YOUR_REMOTE_USERNAME',
            'password'  => 'YOUR_REMOTE_PASSWORD',
            'tenantId'  => 'YOUR_TENTANT_ID',
            'container' => 'YOUR_CONTAINER_NAME',
            'region'    => 'YOUR_REGION' // Default DE1
        ]
    ]
]
```

## Contributing

Feel free to fork and send pull requests!


## Licence

This project uses the MIT License.