<?php
/**
 * Copyright © Risecommerce (support@risecommerce.com). All rights reserved.
 * 
 *
 * Glory to Ukraine! Glory to the heroes!
 */

namespace Risecommerce\BlogAmp\Plugin\Plumrocket\Amp;

/**
 * Plugin for helper data (amp extension by Plumrocket)
 */
class HelperDataPlugin
{
    /**
     * Add risecommerce blog actions to allowed list
     * @param  \Plumrocket\Amp\Helper\Data $helper
     * @param  array $allowedPages
     * @return array
     */
    public function afterGetAllowedPages(\Plumrocket\Amp\Helper\Data $helper, $allowedPages)
    {
        foreach ($allowedPages as &$value) {
            if (strpos($value, 'risecommerce_blog_') === 0) {
                $value = str_replace('risecommerce_blog_', 'blog_', $value);
            }
        }

        return $allowedPages;
    }
}
