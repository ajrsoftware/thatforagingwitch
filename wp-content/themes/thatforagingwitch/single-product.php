<?php

namespace App;

use Timber\Timber;
use App\Models\Product;
use Rareloop\Lumberjack\Post;
use Rareloop\Lumberjack\Helpers;
use App\Http\Controllers\Controller;
use Rareloop\Lumberjack\Http\Responses\TimberResponse;

class SingleProductController extends Controller
{
    public function handle()
    {
        $context = Timber::get_context();
        $product = new Post();

        $context['post'] = $product;
        $product = wc_get_product($context['post']->ID);
        $context['product'] = $product;

        $related_limit = wc_get_loop_prop('columns');
        $related_ids = wc_get_related_products($context['product']->id, $related_limit);
        $context['related_products'] = Timber::get_posts($related_ids);

        return new TimberResponse('woo/single-product.twig', $context);
    }
}
