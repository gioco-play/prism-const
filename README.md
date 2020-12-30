## PrismPlus工具

### 偏好設定
```php
php bin/hyperf.php vendor:publish "gioco-plus/prism-plus"
```

### 快取
```php
# 依赖注入

/**
 * 快取
 * @Inject()
 * @var CacheService
 */
protected $cache;

/**
 * 清除快取
 * @Inject()
 * @var CacheFlushService
 */
protected $cacheFlush;

```

```php
# 配置MongoDb連線

/**
 * @Inject()
 * @var DbManager
 */
protected $dbManger;

# 使用
$this->dbManger->opMongoDb('gf')->insert("hyperf_test", [
    'aaa'=>'a',
    'bbb'=>'b',
    'ccc'=>'c'
]);

# 獲取Config
$this->config->get("mongodb.{$confName}");
```
