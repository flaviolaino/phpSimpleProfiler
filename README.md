# phpSimpleProfiler
The simplest php profiler library that you can find

## Usage
```php
include 'profiler.lib.php';

// start profiling //
$profile = profile();

// your script //
...

// end profiling //
$profile = profile($profile);

// get info //
print_r($profile);
```
