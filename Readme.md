#php ElasticSearch 使用方式

## 本地测试安装php，nginx，EleasticSearch

1.开启环境
```
docker-compose up -d  开启elasticsearch

```

然后docker ps 看是否是三个docker服务在运行。
例如我本机的机器
```
CONTAINER ID        IMAGE               COMMAND                  CREATED             STATUS              PORTS                              NAMES
6cbb89042cec        nginx               "nginx -g 'daemon ..."   30 minutes ago      Up 30 minutes       0.0.0.0:80->80/tcp                 nginx
4d66e98b16f7        bitnami/php-fpm     "php-fpm -F --pid ..."   30 minutes ago      Up 30 minutes       9000/tcp                           php
8e9d03238490        elasticsearch       "/docker-entrypoin..."   30 minutes ago      Up 30 minutes       0.0.0.0:9200->9200/tcp, 9300/tcp   es

```

如果是小于2G内存的机器，可能存在运行es错误的情况 ，如果发现es不能正确开启，把es 的配置文件，/etc/elasticsearch/config/jvm.options 挂载出来，修改Xmx2g 为Xmx512m

如果正确开启，属于ip:9200 可以打开 看到如下结果 这里有版本号，和节点id
```
{
  "name" : "1SkBy2K",
  "cluster_name" : "elasticsearch",
  "cluster_uuid" : "LZQJFR5HQeOoY7oN0yPyxQ",
  "version" : {
    "number" : "5.6.9",
    "build_hash" : "877a590",
    "build_date" : "2018-04-12T16:25:14.838Z",
    "build_snapshot" : false,
    "lucene_version" : "6.6.1"
  },
  "tagline" : "You Know, for Search"
}

```
