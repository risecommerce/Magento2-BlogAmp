<?php
/**
 * Copyright © Risecommerce (support@risecommerce.com). All rights reserved.
 * 
 *
 * Glory to Ukraine! Glory to the heroes!
 */
namespace Risecommerce\BlogAmp\Block\Amp\Og;

use Magento\Store\Model\ScopeInterface;

/**
 * Blog post opengraph for amp
 */

if (class_exists('\Plumrocket\Amp\Block\Page\Head\Og\AbstractOg')) {
    class PostIntermediate extends \Plumrocket\Amp\Block\Page\Head\Og\AbstractOg
    {
    }
} else {
    class PostIntermediate extends \Magento\Framework\View\Element\AbstractBlock
    {
    }
}

class Post extends PostIntermediate
{
    /**
     * Retrieve open graph params
     *
     * @return array
     */
    public function getOgParams()
    {
        $params = parent::getOgParams();
        $post = $this->getPost();

        return array_merge($params, [
            'type' => $post->getOgType() ?: 'article',
            'url' => $this->_helper->getCanonicalUrl($post->getPostUrl()),
            'image' => (string)$post->getImageUrl(),
        ]);
    }

    /**
     * Retrieve current post
     *
     * @return \Risecommerce\Blog\Model\Post
     */
    public function getPost()
    {
        return $this->_coreRegistry->registry('current_blog_post');
    }

    /**
     * Retrieve page main image
     *
     * @return string | null
     */
    public function getImage()
    {
        $image = $this->getPost()->getOgImage();

        if (!$image) {
            $image = $this->getPost()->getFirstImage();
        }

        if ($image) {
            return $this->stripTags($image);
        }
    }
}
