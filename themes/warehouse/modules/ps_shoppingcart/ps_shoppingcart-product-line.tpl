<div class="row no-gutters align-items-center">
    <div class="col-3">
        <span class="product-image media-middle">
      {if $product.cover} <a href="{$product.url}"><img src="{$product.cover.bySize.cart_default.url}"
                                                        alt="{$product.name|escape:'quotes'}"
                                                        class="img-fluid"></a>{/if}
</span>
    </div>
    <div class="col col-info">
        <div class="pb-1">
            <a href="{$product.url}">{$product.name}</a>
        </div>

        {if isset($product.attributes) && $product.attributes}
            <div class="product-attributes text-muted pb-1">
                {foreach from=$product.attributes key="attribute" item="value"}
                    <div class="product-line-info">
                        <span class="label">{$attribute}:</span>
                        <span class="value">{$value}</span>
                    </div>
                {/foreach}
            </div>
        {/if}

        <div class="row align-items-center mt-2 no-gutters">
            <div class="col mr-2">
                {if isset($product.is_gift) && $product.is_gift}
                    <input
                            class="form-control block-cart-product-quantity-gift"
                            type="number"
                            value="{$product.quantity}"
                            disabled
                    />
                {else}
                    <input
                            class="block-cart-product-quantity form-control js-cart-line-product-quantity"
                            data-down-url="{$product.down_quantity_url}"
                            data-up-url="{$product.up_quantity_url}"
                            data-update-url="{$product.update_quantity_url}"
                            data-product-id="{$product.id_product}"
                            data-link-place="cart-preview"
                            type="number"
                            value="{$product.quantity}"
                            name="product-quantity-spin"
                            min="{$product.minimal_quantity}"
                    />
                {/if}
            </div>
            <div class="col">
                <span class="text-muted">x</span> <span>{$product.price}</span>
            </div>

            <div class="col col-auto">
                <a class="remove-from-cart"
                   rel="nofollow"
                   href="{$product.remove_from_cart_url}"
                   data-link-action="delete-from-cart"
                   data-link-place="cart-preview"
                   data-id-product="{$product.id_product|escape:'javascript'}"
                   data-id-product-attribute="{$product.id_product_attribute|escape:'javascript'}"
                   data-id-customization="{$product.id_customization|escape:'javascript'}"
                   title="{l s='remove from cart' d='Shop.Theme.Actions'}"
                >
                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                </a>
            </div>

        </div>

    </div>
</div>


