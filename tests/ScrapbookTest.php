<?php

namespace MatthiasMullie\Psr16\Tests;

use MatthiasMullie\Psr16\SimpleCacheTestCase;
use MatthiasMullie\Scrapbook\Adapters\MemoryStore;
use MatthiasMullie\Scrapbook\Psr16\SimpleCache;

/**
 * Run the test suite on a matthiasmullie/scrapbook adapter.
 *
 * That's all any psr/simple-cache-implementation needs to test its
 * implementation.
 */
class ScrapbookTest extends SimpleCacheTestCase
{
    public function createSimpleCache()
    {
        // in-memory cache
        $cache = new MemoryStore();

        return new SimpleCache($cache);
    }
}
