#链接

## ElasticSearch 介绍

ElasticSearch是一个基于Lucene的搜索服务器，意思就是在lucene的功能基础之上，再次封装修改。然后提供分布式的全文搜索引擎。里面大部分用restful api接口 来提供。很多其他语言在原本的基础之上，再次封装一层。比如我们现在要说的php里面使用，es。当然 你也可以自己使用http请求，来请求他的接口获得自己想要开发的功能


## 代码

1、连接 

```php

$client = \Elasticsearch\ClientBuilder::create()
    ->setHosts($host)
    ->build();
 
```


- **create()**

实例化clientBuilder 类。看源码可以看出，create 方法里面是  return new static()；

- **setHosts($host)**

里面一定要传数组 如果不填，默认为本地地址。该数组可以填写多个host。指定你有多少个节点
例如：
```php
 $host = [
     '192.168.1.1:9200',         // IP + Port
      '192.168.1.2',              // Just IP
      'mydomain.server.com:9201', // Domain + Port
      'mydomain2.server.com',     // Just Domain
      'https://localhost',        // SSL to localhost
      'https://192.168.1.3:9200'  // SSL to IP + Port
  ];
  
  setHosts($host)

```

- **setRetries(2)**

设置重连次数失败.
当你总共有十个节点，如果设置为2 他会去重复的尝试2两次，如果两次都错，异常
 

 

