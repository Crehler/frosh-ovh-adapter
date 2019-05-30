# OVH Object Storage Adapter for Shopware

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