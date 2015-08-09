<?php namespace Anomaly\FeaturedPostsBlockExtension;

use Anomaly\Streams\Platform\Addon\Extension\Extension;

/**
 * Class FeaturedPostsBlockExtension
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\FeaturedPostsBlockExtension
 */
class FeaturedPostsBlockExtension extends Extension
{

    /**
     * This extension provides the featured
     * posts block for the Blocks module.
     *
     * @var string
     */
    protected $provides = 'anomaly.module.blocks::block.featured_posts';

}
