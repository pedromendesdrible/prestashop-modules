{*
* 2007-2021 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
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
*  @author    PrestaShop SA <contact@prestashop.com>
*  @copyright 2007-2021 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

<div class="panel">
	<h3><i class="icon icon-credit-card"></i> {l s='Bloco Slide Texto' mod='blocoslidetexto'}
		<span class="panel-heading-action">
			<a id="desc-product-new" class="list-toolbar-btn" href="{$link->getAdminLink('AdminModules')}&configure=blocoslidetexto&addBlock">
				<span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="{l s='Add new' d='Admin.Actions'}" data-html="true">
					<i class="process-icon-new "></i>
				</span>
			</a>
		</span>
	</h3>

	<div id="slidesContent">
		<div id="slides">
			{foreach from=$blocos item=bloco}
			<div id="slides_{$bloco.id_blocoslidetexto}" class="panel">
				<div class="row">
					<div class="col-md-12">
						<h4 class="pull-left">#{$bloco.id_blocoslidetexto} - {$bloco.texto1}</h4>

						<div class="btn-group-action pull-right">
							<a class="btn btn-default" href="{$link->getAdminLink('AdminModules')}&configure=blocoslidetexto&editBlock&id={$bloco.id_blocoslidetexto}">
								<i class="icon-edit"></i>
								{l s='Edit' d='Admin.Actions'}
							</a>
							<a class="btn btn-default" href="{$link->getAdminLink('AdminModules')}&configure=blocoslidetexto&deleteBlock&id={$bloco.id_blocoslidetexto}">
								<i class="icon-trash"></i>
								{l s='Delete' d='Admin.Actions'}
							</a>
						</div>

					</div>
				</div>
			</div>
			{/foreach}
		</div>
	</div>

</div>
