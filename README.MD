# Hyperf Async Event

## Installation
```
composer require mmfei/hyperf-async-event
```
## Configuration
### Publish config
```
php bin/hyperf.php vendor:publish mmfei/hyperf-async-event
```
## Config files:
```
+ ./config/autoload/async_queue.php
+ ./config/autoload/dependencies.php
+ ./config/autoload/processer.php
+ ./config/autoload/redis.php
```
## Usage
```php
\Hyperf\Utils\ApplicationContext::getContainer()->get(EventDispatcherInterface::class)->dispatch($event);
```
