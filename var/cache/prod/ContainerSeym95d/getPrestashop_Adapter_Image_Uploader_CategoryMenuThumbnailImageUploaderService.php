<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.image.uploader.category_menu_thumbnail_image_uploader' shared service.

return $this->services['prestashop.adapter.image.uploader.category_menu_thumbnail_image_uploader'] = new \PrestaShop\PrestaShop\Adapter\Image\Uploader\CategoryMenuThumbnailUploader(${($_ = isset($this->services['prestashop.adapter.cache_clearer']) ? $this->services['prestashop.adapter.cache_clearer'] : $this->load('getPrestashop_Adapter_CacheClearerService.php')) && false ?: '_'});
