<?php
/**
 * Copyright © Risecommerce (support@risecommerce.com). All rights reserved.
 * 
 *
 * Glory to Ukraine! Glory to the heroes!
 */

namespace Risecommerce\BlogAmp\Block\Amp\Ldjson;

/**
 * Blog post list ldJson block
 */
class Post extends \Risecommerce\Blog\Block\Post\View\Richsnippets
{
    /**
     * Retrieve page structure structure data in JSON
     *
     * @return string
     */
    public function getJson()
    {
        $json = parent::getOptions();
        return str_replace('\/', '/', json_encode($json));
    }
}
