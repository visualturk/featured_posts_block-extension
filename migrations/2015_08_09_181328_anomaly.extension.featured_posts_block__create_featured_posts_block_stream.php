<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

/**
 * Class AnomalyExtensionFeaturedPostsBlockCreateFeaturedPostsBlockStream
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 */
class AnomalyExtensionFeaturedPostsBlockCreateFeaturedPostsBlockStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'featured_posts_block'
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'limit' => [
            'required' => true
        ]
    ];

}
