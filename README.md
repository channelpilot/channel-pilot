# ChannelPilot Module

## Installation

```
composer require channel-pilot/channel-pilot
```

## Configuration

In config_default.php (or specific) add

```
$config[AclConstants::ACL_DEFAULT_RULES] = [
[
    'bundle' => 'channel-pilot',
    'controller' => 'index',
    'action' => 'index',
    'type' => 'allow',
    ],
]
```

```
$config[KernelConstants::PROJECT_NAMESPACES] = [
    'ChannelPilot',
];
```

## Documentation

[Spryker Documentation](https://academy.spryker.com/developing_with_spryker/module_guide/modules.html)
