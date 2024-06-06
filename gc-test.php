<?php

declare(strict_types=1);

final class Foo
{
    public string $string = 'GC TEST!!!';
    public self $self;
}

for ($i = 0; $i <= 10_000_000; ++$i) {
    $object = new Foo();
    $object->self = $object;
}

echo memory_get_peak_usage() / 1024 / 1024, PHP_EOL;
