## 统计程序耗时和内存使用

### usage:

#### composer.json 内容如下
    {
        "require": {
            "vega/profiler":"1.0.0"
        },
        "repositories": [
            {
                "type": "composer",
                "url": "http://packagist.baidu.com/"
            },
            {
                "packagist": false
            } 
        ]
    }

### examples:
    
    //标记bs耗时开始时间点
    \Vega\Profiler\Profiler::start("bs");
    sleep(1);
    //标记bs耗时结束的时间点
    \Vega\Profiler\Profiler::end("bs");
    //输出耗时，单位默认是ms
    echo \Vega\Profiler\Profiler::getTime("bs")."\n"; //示例输出1000.109
    //以可读的方式输出
    echo \Vega\Profiler\Profiler::getTime("bs",true)."\n"; //示例输出1.000s

    \Vega\Profiler\Profiler::start("cs");
    usleep(10000);
    \Vega\Profiler\Profiler::end("cs");
    echo \Vega\Profiler\Profiler::getTime("cs")."\n"; //示例输出10.079
    echo \Vega\Profiler\Profiler::getTime("cs",true)."\n";//示例输出10.079ms
    //格式化输出耗时时间
    echo \Vega\Profiler\Profiler::getTime("cs",true,"cost:%.2f%s")."\n"; //示例输出cost:10.08ms

    //输出内存使用,默认单位是字节
    echo \Vega\Profiler\Profiler::getMemoryUsage()."\n"; //示例输出524288
    //以可读的方式输出内存使用    
    echo \Vega\Profiler\Profiler::getMemoryUsage(true)."\n"; //示例输出512.000KB
    //格式化输出内存使用
    echo \Vega\Profiler\Profiler::getMemoryUsage(true,'memoryusage:%.2f%s')."\n"; //示例输出memoryusage:512.00KB
    

    //输出内存使用峰值,默认单位是字节
    echo \Vega\Profiler\Profiler::getMemoryPeak()."\n"; //示例输出524288
    //以可读的方式输出内存使用    
    echo \Vega\Profiler\Profiler::getMemoryPeak(true)."\n";//示例输出512.000KB
    //格式化输出内存使用峰值
    echo \Vega\Profiler\Profiler::getMemoryPeak(true,'memorypeak:%.2f%s')."\n";//示例输出memorypeak:512.00KB

