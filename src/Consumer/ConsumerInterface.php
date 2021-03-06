<?php

/*
 * This file is part of the Sonata Project package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\NotificationBundle\Consumer;

interface ConsumerInterface
{
    /**
     * Process a ConsumerEvent.
     *
     * @param ConsumerEvent $event
     */
    public function process(ConsumerEvent $event);
}
