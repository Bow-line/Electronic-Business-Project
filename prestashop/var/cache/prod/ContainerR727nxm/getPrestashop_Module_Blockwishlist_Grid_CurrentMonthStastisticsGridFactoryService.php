<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.module.blockwishlist.grid.current_month_stastistics_grid_factory' shared service.

return $this->services['prestashop.module.blockwishlist.grid.current_month_stastistics_grid_factory'] = new \PrestaShop\PrestaShop\Core\Grid\GridFactory(${($_ = isset($this->services['prestashop.module.blockwishlist.grid.current_month_statistics_grid_definition_factory']) ? $this->services['prestashop.module.blockwishlist.grid.current_month_statistics_grid_definition_factory'] : $this->load('getPrestashop_Module_Blockwishlist_Grid_CurrentMonthStatisticsGridDefinitionFactoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.module.blockwishlist.grid.current_month_statistics_data_factory']) ? $this->services['prestashop.module.blockwishlist.grid.current_month_statistics_data_factory'] : $this->load('getPrestashop_Module_Blockwishlist_Grid_CurrentMonthStatisticsDataFactoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.core.grid.filter.form_factory']) ? $this->services['prestashop.core.grid.filter.form_factory'] : $this->load('getPrestashop_Core_Grid_Filter_FormFactoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.core.hook.dispatcher']) ? $this->services['prestashop.core.hook.dispatcher'] : $this->getPrestashop_Core_Hook_DispatcherService()) && false ?: '_'});
