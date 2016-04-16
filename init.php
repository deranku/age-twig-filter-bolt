<?php

namespace Bolt\Extension\anku\age;

if (isset($app)) {
    $app['extensions']->register(new Extension($app));
}
