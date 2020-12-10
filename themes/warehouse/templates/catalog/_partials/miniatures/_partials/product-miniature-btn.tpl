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

<div class="product-add-cart">
    {if $product.add_to_cart_url && ($product.quantity > 0 || $product.allow_oosp) && !$configuration.is_catalog}
        <form action="{$product.add_to_cart_url}" method="post">

            <input type="hidden" name="id_product" value="{$product.id}">
            <div class="input-group input-group-add-cart">
{*                <input*}
{*                        type="number"*}
{*                        name="qty"*}
{*                        value="{if isset($product.product_attribute_minimal_quantity) && $product.product_attribute_minimal_quantity neq ''}{$product.product_attribute_minimal_quantity}{else}{$product.minimal_quantity}{/if}"*}
{*                        class="form-control input-qty"*}
{*                        min="{if isset($product.product_attribute_minimal_quantity)}{$product.product_attribute_minimal_quantity}{else}{$product.minimal_quantity}{/if}"*}
{*                >*}

                <button
                        class="add_product"
                        data-button-action="add-to-cart"
                        type="submit"
                        {if !$product.add_to_cart_url}
                            disabled
                        {/if}
                >
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
<g>
    <g>
        <g>
            <path d="M497.287,147.126h-256V35.31h29.425v73.563c0,4.875,3.951,8.828,8.828,8.828s8.828-3.952,8.828-8.828V32.368     c0-8.113-6.599-14.713-14.713-14.713h-35.31c-8.113,0-14.713,6.6-14.713,14.713v114.759H14.713     C6.599,147.126,0,153.726,0,161.839v82.391c0,8.113,6.599,14.713,14.713,14.713h21.632l8.205,65.643     c-20.086,17.802-32.78,43.768-32.78,72.656c0,53.543,43.561,97.103,97.103,97.103c53.542,0,97.103-43.56,97.103-97.103     c0-34.257-17.848-64.406-44.718-81.695l-2.43-19.445c-0.606-4.839-5.014-8.272-9.855-7.665c-4.836,0.605-8.268,5.016-7.665,9.854     l0.971,7.771c-10.42-3.83-21.672-5.923-33.406-5.923c-17.45,0-33.826,4.65-47.994,12.742l-6.742-53.938h443.15     c8.113,0,14.713-6.599,14.713-14.713v-82.391C512,153.726,505.401,147.126,497.287,147.126z M108.874,317.793     c43.808,0,79.448,35.64,79.448,79.448c0,43.808-35.64,79.448-79.448,79.448c-43.808,0-79.448-35.64-79.448-79.448     C29.425,353.433,65.065,317.793,108.874,317.793z M215.282,241.287H17.655v-76.506h197.627     c-9.409,10.009-15.19,23.465-15.19,38.253S205.873,231.278,215.282,241.287z M256,241.287c-21.093,0-38.253-17.161-38.253-38.253     s17.16-38.253,38.253-38.253s38.253,17.161,38.253,38.253S277.093,241.287,256,241.287z M494.345,241.287H296.718     c9.409-10.009,15.19-23.465,15.19-38.253s-5.781-28.244-15.19-38.253h197.627V241.287z"/>
            <path d="M463.073,288.437c-4.84-0.604-9.249,2.826-9.855,7.665l-16.689,133.507H229.517c-4.876,0-8.828,3.952-8.828,8.828     s3.951,8.828,8.828,8.828h214.805c4.451,0,8.207-3.314,8.759-7.733l17.655-141.241     C471.341,293.454,467.909,289.041,463.073,288.437z"/>
            <path d="M256,188.322c-8.113,0-14.713,6.599-14.713,14.713s6.599,14.713,14.713,14.713s14.713-6.599,14.713-14.713     S264.113,188.322,256,188.322z"/>
            <path d="M264.828,391.356v-94.161c0-4.875-3.951-8.828-8.828-8.828s-8.828,3.952-8.828,8.828v94.161     c0,4.875,3.951,8.828,8.828,8.828S264.828,396.232,264.828,391.356z"/>
            <path d="M350.173,400.185c4.387,0,8.19-3.267,8.749-7.734l11.77-94.161c0.605-4.838-2.827-9.249-7.665-9.854     c-4.842-0.611-9.25,2.826-9.855,7.665l-11.77,94.161c-0.605,4.837,2.827,9.249,7.665,9.854     C349.438,400.161,349.807,400.185,350.173,400.185z"/>
            <path d="M67.678,406.069h32.368v32.368c0,4.875,3.951,8.828,8.828,8.828c4.876,0,8.828-3.952,8.828-8.828v-32.368h32.368     c4.876,0,8.828-3.952,8.828-8.828s-3.951-8.828-8.828-8.828h-32.368v-32.368c0-4.875-3.951-8.828-8.828-8.828     c-4.876,0-8.828,3.952-8.828,8.828v32.368H67.678c-4.876,0-8.828,3.952-8.828,8.828S62.802,406.069,67.678,406.069z"/>
        </g>
    </g>
</g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
</svg>

                </button>
            </div>

        </form>
    {else}
        <a href="{$product.url}"
           class="add_product"
        > <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
<g>
    <g>
        <path d="M510.484,251.474C447.574,168.069,354.819,120.235,256,120.235S64.425,168.07,1.515,251.474    c-2.02,2.679-2.02,6.371,0,9.051C64.425,343.93,157.181,391.765,256,391.765s191.574-47.834,254.484-131.239    C512.505,257.846,512.505,254.153,510.484,251.474z M256,376.736c-92.263,0-179.064-43.928-239.014-120.736    C76.936,179.192,163.737,135.264,256,135.264c92.262,0,179.063,43.928,239.014,120.736    C435.063,332.808,348.262,376.736,256,376.736z"/>
    </g>
</g>
                <g>
                    <g>
                        <path d="M345.357,176.3c-2.763-3.096-7.514-3.367-10.611-0.603c-3.096,2.764-3.366,7.515-0.603,10.611    c17.128,19.19,26.562,43.942,26.562,69.692c0,57.734-46.971,104.704-104.705,104.704c-57.735,0-104.705-46.971-104.705-104.704    S198.265,151.295,256,151.295c16.904,0,33.036,3.902,47.945,11.596c3.686,1.901,8.22,0.456,10.124-3.232    c1.903-3.688,0.456-8.221-3.232-10.124c-16.821-8.681-35.783-13.269-54.836-13.269c-66.022,0-119.734,53.712-119.734,119.734    S189.978,375.734,256,375.734S375.734,322.021,375.734,256C375.734,226.552,364.945,198.248,345.357,176.3z"/>
                    </g>
                </g>
                <g>
                    <g>
                        <path d="M256,208.407c-26.242,0-47.593,21.35-47.593,47.593c0,26.242,21.351,47.593,47.593,47.593s47.593-21.351,47.593-47.593    S282.242,208.407,256,208.407z M256,288.563c-17.955,0-32.564-14.608-32.564-32.564s14.609-32.564,32.564-32.564    c17.956,0,32.564,14.608,32.564,32.564S273.956,288.563,256,288.563z"/>
                    </g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
</svg>
        </a>
    {/if}
</div>