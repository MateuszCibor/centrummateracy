{**
 * 2007-2017 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2017 PrestaShop SA
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
{block name='product_miniature_item'}
{if isset($elementor) && $elementor}<div class="{if isset($carousel) && $carousel}product-carousel{else}col-{$nbMobile} col-md-{$nbTablet} col-lg-{$nbDesktop} col-xl-{$nbDesktop}{/if}">{/if}
    <div class="blok_promocyjny">
    <article class="product-miniature product-miniature-small js-product-miniature" data-id-product="{$product.id_product}"
             data-id-product-attribute="{$product.id_product_attribute}">

        <div class="row align-items-center list-small-gutters">
            {block name='product_thumbnail'}

                <div class="thumbnail-container col-3">
                    <a href="{$product.canonical_url}" class="thumbnail product-thumbnail">
                        {if $product.cover}
                        <img
                                src="{$product.cover.medium.url}"
                                alt="{$product.cover.legend}"
                                data-full-size-image-url="{$product.cover.large.url}"
                                class="img-fluid promocja_img"
                        >
                        {else}
                            <img
                                    src="{$urls.no_picture_image.bySize.small_default.url}"
                                    data-full-size-image-url="{$urls.no_picture_image.bySize.large_default.url}"
                                    class="img-fluid promocja_img"
                            >
                        {/if}
                    </a>

                </div>
            {/block}

            <div class="product-description col">
                {block name='product_name'}
                    <h4 class="product-title tytul_promocja"><a
                                href="{$product.canonical_url}">{$product.name|truncate:40:'...'}</a></h4>
                {/block}

                {block name='product_reviews'}
                    {hook h='displayProductListReviews' product=$product}
                {/block}

                {block name='product_price_and_shipping'}
                    {if $product.show_price}
                        <div class="product-price-and-shipping cena_promocja">
                            {hook h='displayProductPriceBlock' product=$product type="before_price"}
                            <span class="regular-price text-muted cena_przekreslona">{$product.regular_price}</span>
                            {if $product.has_discount}
                                {hook h='displayProductPriceBlock' product=$product type="old_price"}
                                <span class="product-price cena_nowa" content="{$product.price_amount}">{$product.price}</span>

                            {/if}
                            {hook h='displayProductPriceBlock' product=$product type='unit_price'}


                            {hook h='displayProductPriceBlock' product=$product type='weight'}
                        </div>

                    {/if}
                {/block}


            </div>

            {if isset($richData) && $richData}
            <span itemprop="isRelatedTo"  itemscope itemtype="https://schema.org/Product" >
            {if $product.cover}
                <meta itemprop="image" content="{$product.cover.medium.url}">
            {else}
                <meta itemprop="image" content="{$urls.no_picture_image.bySize.home_default.url}">
            {/if}

                <meta itemprop="name" content="{$product.name}"/>
            <meta itemprop="url" content="{$product.canonical_url}"/>
            <meta itemprop="description" content="{$product.description_short|strip_tags:'UTF-8'|truncate:360:'...'}"/>

            <span itemprop="offers" itemscope itemtype="https://schema.org/Offer" >
                {if isset($currency.iso_code)}
                    <meta itemprop="priceCurrency" content="{$currency.iso_code}">
                {/if}
                <meta itemprop="price" content="{$product.price_amount}"/>
            </span>
            </span>
            {/if}


        </div>
    </article>
    {hook h='PSProductCountdown' id_product=$product.id_product}
        <form action="{$product.add_to_cart_url}" method="post">

            <input type="hidden" name="id_product" value="{$product.id}">
            <div class="input-group input-group-add-cart">
                <button
                        class="btnw btn-product-list add-to-cart przycisk_kupteraz_zegar"
                        data-button-action="add-to-cart"
                        type="submit"
                        {if !$product.add_to_cart_url}
                            disabled
                        {/if}
                ><i class="fa fa-shopping-bag"
                    aria-hidden="true"></i> {l s='Add to cart' d='Shop.Theme.Actions'}
                </button>
            </div>

        </form>
    </div>
    {if isset($elementor) && $elementor}</div>{/if}
{/block}
