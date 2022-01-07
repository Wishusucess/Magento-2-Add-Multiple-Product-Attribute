<?php
/**
 * Developer: Hemant Singh Magento 2x developer 
 * Website Url: http://www.wishusucess.com/
 * 
 */
namespace Wishusucess\MultipleAttributes\Setup;

use Magento\Eav\Setup\EavSetup;
use Magento\Eav\Setup\EavSetupFactory;
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{
	/**
	* EAV setup factory
	*
	* @var EavSetupFactory
	*/
	private $eavSetupFactory;

	/**
	* Init
	*
	* @param EavSetupFactory $eavSetupFactory
	*/
	public function __construct(EavSetupFactory $eavSetupFactory)
	{
		$this->eavSetupFactory = $eavSetupFactory;
	}
 
	public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
	{
		/** @var EavSetup $eavSetup */
		$eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);

		/**
		* Add attributes to the eav/attribute
		*/
		$eavSetup->addAttribute(
			\Magento\Catalog\Model\Product::ENTITY,
			'wishusucess_featured',
				[
					'group' => 'General',
					'type' => 'int',
					'backend' => '',
					'frontend' => '',
					'label' => 'Featured Product',
					'input' => 'boolean',
					'class' => '',
					'source' => '',
					'global' => \Magento\Catalog\Model\ResourceModel\Eav\Attribute::SCOPE_GLOBAL,
					'visible' => true,
					'required' => false,
					'user_defined' => true,
					'default' => '',
					'searchable' => false,
					'filterable' => false,
					'comparable' => false,
					'visible_on_front' => false,
					'used_in_product_listing' => true,
					'unique' => false,
					'apply_to' => 'simple,configurable,virtual,bundle,downloadable'
				],
			);

		  $eavSetup->addAttribute(
            \Magento\Catalog\Model\Product::ENTITY,
				'wishusucess_bestseller',
				[
					'group' => 'General',
					'type' => 'int',
					'backend' => '',
					'frontend' => '',
					'label' => 'Bestseller Product',
					'input' => 'boolean',
					'class' => '',
					'source' => '',
					'global' => \Magento\Catalog\Model\ResourceModel\Eav\Attribute::SCOPE_GLOBAL,
					'visible' => true,
					'required' => false,
					'user_defined' => true,
					'default' => '',
					'searchable' => false,
					'filterable' => false,
					'comparable' => false,
					'visible_on_front' => false,
					'used_in_product_listing' => true,
					'unique' => false,
					'apply_to' => 'simple,configurable,virtual,bundle,downloadable'
				],
			);

		  $eavSetup->addAttribute(
            \Magento\Catalog\Model\Product::ENTITY,
				'wishusucess_specialproducts',
				[
					'group' => 'General',
					'type' => 'int',
					'backend' => '',
					'frontend' => '',
					'label' => 'Special Product',
					'input' => 'boolean',
					'class' => '',
					'source' => '',
					'global' => \Magento\Catalog\Model\ResourceModel\Eav\Attribute::SCOPE_GLOBAL,
					'visible' => true,
					'required' => false,
					'user_defined' => true,
					'default' => '',
					'searchable' => false,
					'filterable' => false,
					'comparable' => false,
					'visible_on_front' => false,
					'used_in_product_listing' => true,
					'unique' => false,
					'apply_to' => 'simple,configurable,virtual,bundle,downloadable'
				],
			);

		  $eavSetup->addAttribute(
            \Magento\Catalog\Model\Product::ENTITY,				
				'wishusucess_newproducts',
				[
					'group' => 'General',
					'type' => 'int',
					'backend' => '',
					'frontend' => '',
					'label' => 'New Product',
					'input' => 'boolean',
					'class' => '',
					'source' => '',
					'global' => \Magento\Catalog\Model\ResourceModel\Eav\Attribute::SCOPE_GLOBAL,
					'visible' => true,
					'required' => false,
					'user_defined' => true,
					'default' => '',
					'searchable' => false,
					'filterable' => false,
					'comparable' => false,
					'visible_on_front' => false,
					'used_in_product_listing' => true,
					'unique' => false,
					'apply_to' => 'simple,configurable,virtual,bundle,downloadable'
				]
		);
	}
}