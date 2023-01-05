<?php
/**
 * Copyright © Risecommerce (support@risecommerce.com). All rights reserved.
 * 
 *
 * Glory to Ukraine! Glory to the heroes!
 */

namespace Risecommerce\BlogAmp\Plugin\Plumrocket\Amp;

/**
 * Plugin for source page (amp extension by Plumrocket)
 */
class SourcePagePlugin
{
    /**
     * Add risecommerce blog pages to soruce
     * @param  \Plumrocket\Amp\Model\System\Config\Source\Page $page
     * @param  array $pages
     * @return array
     */
    public function afterToArray(\Plumrocket\Amp\Model\System\Config\Source\Page $page, $pages)
    {
        $pages['risecommerce_blog_index_index'] = __('Blog Main Page');
        $pages['risecommerce_blog_post_view'] = __('Blog Post Pages');
        $pages['risecommerce_blog_category_view'] = __('Blog Category Pages');
        $pages['risecommerce_blog_category_view'] = __('Blog Category Pages');
        $pages['risecommerce_blog_archive_view'] = __('Blog Archive Pages');
        $pages['risecommerce_blog_author_view'] = __('Blog Author Pages');
        $pages['risecommerce_blog_tag_view'] = __('Blog Tag Pages');

        return $pages;
    }
}
