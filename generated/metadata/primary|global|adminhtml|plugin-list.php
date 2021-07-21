<?php return array (
  0 => 
  array (
    'Magento\\Framework\\DB\\Adapter\\AdapterInterface' => 
    array (
      'execute_commit_callbacks' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\Model\\ExecuteCommitCallbacks',
      ),
    ),
    'Magento\\Framework\\App\\Response\\Http' => 
    array (
      'genericHeaderPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Response\\HeaderManager',
      ),
    ),
    'Magento\\Framework\\App\\ActionInterface' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
    ),
    'Magento\\Framework\\Url\\SecurityInfo' => 
    array (
      'storeUrlSecurityInfo' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\Url\\Plugin\\SecurityInfo',
      ),
    ),
    'Magento\\Framework\\Url\\RouteParamsResolver' => 
    array (
      'storeUrlRouteParamsResolver' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\Url\\Plugin\\RouteParamsResolver',
      ),
    ),
    'Magento\\Store\\Model\\Store' => 
    array (
      'themeDesignConfigGridIndexerStore' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Indexer\\Design\\Config\\Plugin\\Store',
      ),
    ),
    'Magento\\Store\\Model\\StoreResolver' => 
    array (
      'staging_preview_allowed_stores_check_bypass' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Plugin\\Store\\Model\\StoreResolver',
      ),
    ),
    'Magento\\Framework\\Session\\SidResolver' => 
    array (
      'pagebuilder_preview_sid_resolving' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageBuilder\\Plugin\\Framework\\Session\\SidResolver',
      ),
    ),
    'Magento\\Framework\\App\\Config\\Initial\\Converter' => 
    array (
      'cron_system_config_initial_converter_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Cron\\Model\\System\\Config\\Initial\\Converter',
      ),
    ),
    'Magento\\Framework\\Model\\ActionValidator\\RemoveAction' => 
    array (
      'companyFrameworkModelActionValidatorRemoveAction' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Company\\Plugin\\Framework\\Model\\ActionValidator\\RemoveActionPlugin',
      ),
    ),
    'Magento\\Framework\\App\\FrontController' => 
    array (
      'install' => 
      array (
        'sortOrder' => 40,
        'instance' => 'Magento\\Framework\\Module\\Plugin\\DbStatusValidator',
      ),
      'storeCookieValidate' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\Model\\Plugin\\StoreCookie',
      ),
    ),
    'Magento\\Framework\\Stdlib\\DateTime\\Timezone' => 
    array (
      'staging_datetime_timezone_bypass' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Plugin\\DateTime\\Timezone',
      ),
    ),
    'Magento\\Cms\\Model\\Wysiwyg\\Images\\Storage' => 
    array (
      'media_gallery_image_remove_metadata_after_wysiwyg' => 
      array (
        'sortOrder' => 10,
        'disabled' => false,
        'instance' => 'Magento\\MediaGallery\\Plugin\\Wysiwyg\\Images\\Storage',
      ),
    ),
    'Magento\\Framework\\Url\\ScopeInterface' => 
    array (
      'urlSignature' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Url\\Plugin\\Signature',
      ),
    ),
    'Magento\\Theme\\Model\\DesignConfigRepository' => 
    array (
      'save_design_settings_event_dispatching' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Design\\Config\\Plugin',
      ),
    ),
    'Magento\\Store\\Model\\Website' => 
    array (
      'themeDesignConfigGridIndexerWebsite' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Indexer\\Design\\Config\\Plugin\\Website',
      ),
      'reindex_customer_grid_after_website_remove' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerGridIndexAfterWebsiteDelete',
      ),
      'reindex_after_delete_website' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRule\\Plugin\\Indexer\\Website',
      ),
      'websiteDeletedNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CompanyCredit\\Plugin\\Store\\Model\\WebsitePlugin',
      ),
    ),
    'Magento\\Store\\Model\\Group' => 
    array (
      'themeDesignConfigGridIndexerStoreGroup' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Indexer\\Design\\Config\\Plugin\\StoreGroup',
      ),
    ),
    'Magento\\Config\\App\\Config\\Source\\DumpConfigSourceAggregated' => 
    array (
      'designConfigTheme' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Theme\\Model\\Design\\Config\\Plugin\\Dump',
      ),
    ),
    'Magento\\Framework\\Data\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
    ),
    'Magento\\Eav\\Model\\ResourceModel\\Entity\\Attribute' => 
    array (
      'storeLabelCaching' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Eav\\Plugin\\Model\\ResourceModel\\Entity\\Attribute',
      ),
    ),
    'Magento\\Eav\\Model\\Entity\\AbstractEntity' => 
    array (
      'clean_cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Cache\\FlushCacheByTags',
      ),
    ),
    'Magento\\Customer\\Model\\Session' => 
    array (
      'staging_preview_customer_session_id_change_bypass' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Plugin\\Customer\\Model\\Session',
      ),
    ),
    'Magento\\Customer\\Model\\ResourceModel\\Customer\\Collection' => 
    array (
      'amazon_login_customer_collection' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Amazon\\Login\\Plugin\\CustomerCollection',
      ),
    ),
    'Magento\\Customer\\Api\\CustomerRepositoryInterface' => 
    array (
      'transactionWrapper' => 
      array (
        'sortOrder' => -1,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerRepository\\TransactionWrapper',
      ),
      'companyCustomerSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Company\\Plugin\\Customer\\Api\\CustomerRepository\\Save',
      ),
      'companyCustomerDelete' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Company\\Plugin\\Customer\\Api\\CustomerRepository\\Delete',
      ),
      'companyCustomerQuery' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Company\\Plugin\\Customer\\Api\\CustomerRepository\\Query',
      ),
      'aroundCustomerSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NegotiableQuote\\Model\\Plugin\\Customer\\Model\\CustomerRepository',
      ),
      'aroundDeleteById' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NegotiableQuote\\Model\\Plugin\\Customer\\Model\\CustomerRepository',
      ),
      'login_as_customer_customer_repository_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerAssistance\\Plugin\\CustomerPlugin',
      ),
      'update_newsletter_subscription_on_customer_update' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Newsletter\\Model\\Plugin\\CustomerPlugin',
      ),
      'updateCreditHistoryAfterCustomerDelete' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CompanyCredit\\Plugin\\Customer\\Api\\CustomerRepositoryInterfacePlugin',
      ),
      'amazon_login_customer_repository' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Amazon\\Login\\Plugin\\CustomerRepository',
      ),
      'extensionAttributeVertexCustomerCode' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\CustomerRepositoryPlugin',
      ),
      'extensionAttributeVertexCustomerCountry' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\CustomerCountryAttributePlugin',
      ),
    ),
    'Magento\\Directory\\Model\\AllowedCountries' => 
    array (
      'customerAllowedCountries' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\AllowedCountries',
      ),
    ),
    'Magento\\PageCache\\Observer\\FlushFormKey' => 
    array (
      'customerFlushFormKey' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerFlushFormKey',
      ),
    ),
    'Magento\\Customer\\Model\\AccountManagement' => 
    array (
      'security_check_customer_password_reset_attempt' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Security\\Model\\Plugin\\AccountManagement',
      ),
      'mpsmtp_account_management' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\Smtp\\Plugin\\AccountManagement',
      ),
    ),
    'Magento\\AdvancedPricingImportExport\\Model\\Import\\AdvancedPricing' => 
    array (
      'invalidateAdvancedPriceIndexerOnImport' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdvancedPricingImportExport\\Model\\Indexer\\Product\\Price\\Plugin\\Import',
      ),
    ),
    'Magento\\Framework\\MessageQueue\\Consumer\\Config\\CompositeReader' => 
    array (
      'queueConfigPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\MessageQueue\\Config\\Consumer\\ConfigReaderPlugin',
      ),
    ),
    'Magento\\Framework\\MessageQueue\\Publisher\\Config\\CompositeReader' => 
    array (
      'queueConfigPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\MessageQueue\\Config\\Publisher\\ConfigReaderPlugin',
      ),
    ),
    'Magento\\Framework\\MessageQueue\\Topology\\Config\\CompositeReader' => 
    array (
      'queueConfigPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\MessageQueue\\Config\\Topology\\ConfigReaderPlugin',
      ),
    ),
    'Magento\\Framework\\Amqp\\Bulk\\Exchange' => 
    array (
      'amqpStoreIdFieldForAmqpBulkExchange' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AmqpStore\\Plugin\\Framework\\Amqp\\Bulk\\Exchange',
      ),
    ),
    'Magento\\AsynchronousOperations\\Model\\MassConsumerEnvelopeCallback' => 
    array (
      'amqpStoreIdFieldForAsynchronousOperationsMassConsumerEnvelopeCallback' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AmqpStore\\Plugin\\AsynchronousOperations\\MassConsumerEnvelopeCallback',
      ),
    ),
    'Magento\\Framework\\App\\Config\\Value' => 
    array (
      'admin_system_config_media_gallery_renditions' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGalleryRenditions\\Plugin\\UpdateRenditionsOnConfigChange',
      ),
      'admin_system_config_adobe_stock_save_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGallerySynchronization\\Plugin\\MediaGallerySyncTrigger',
      ),
      'webapiResourceSecurityCacheInvalidate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\WebapiSecurity\\Model\\Plugin\\CacheInvalidator',
      ),
    ),
    'Magento\\Authorization\\Model\\Role' => 
    array (
      'updateRoleUsersAcl' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\User\\Model\\Plugin\\AuthorizationRole',
      ),
    ),
    'Magento\\Indexer\\Model\\Indexer' => 
    array (
      'reindexRow' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Helper\\Indexer',
      ),
    ),
    'Magento\\Indexer\\Model\\Config\\Data' => 
    array (
      'indexerCategoryFlatConfigGet' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Category\\Flat\\Plugin\\IndexerConfigData',
      ),
      'indexerProductFlatConfigGet' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Product\\Flat\\Plugin\\IndexerConfigData',
      ),
      'catalogPermissionsIndexerConfigGet' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Model\\Indexer\\Plugin\\IndexerConfigData',
      ),
    ),
    'Magento\\Indexer\\Model\\Processor' => 
    array (
      'page-cache-indexer-reindex-clean-cache' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Indexer\\Model\\Processor\\CleanCache',
      ),
    ),
    'Magento\\Framework\\Indexer\\ActionInterface' => 
    array (
      'cache_cleaner_after_reindex' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Indexer\\Model\\Indexer\\CacheCleaner',
      ),
    ),
    'Magento\\Cms\\Model\\ResourceModel\\Page\\Grid\\Collection' => 
    array (
      'setStagingFlagCmsPageUpdate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CmsStaging\\Model\\ResourceModel\\Grid\\Collection\\UpdatePlugin',
      ),
    ),
    'Magento\\Cms\\Model\\ResourceModel\\Block\\Grid\\Collection' => 
    array (
      'setStagingFlagCmsBlockUpdate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CmsStaging\\Model\\ResourceModel\\Grid\\Collection\\UpdatePlugin',
      ),
    ),
    'Magento\\Cms\\Ui\\Component\\DataProvider' => 
    array (
      'filterCmsPageAndBlockUpdate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CmsStaging\\Ui\\Component\\DataProvider\\UpdatePlugin',
      ),
    ),
    'Magento\\Catalog\\Model\\Product' => 
    array (
      'cms' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Cms\\Model\\Plugin\\Product',
      ),
      'add_bundle_parent_identities' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Bundle\\Model\\Plugin\\ProductIdentitiesExtender',
      ),
      'catalogInventoryAfterLoad' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogInventory\\Model\\Plugin\\AfterProductLoad',
      ),
      'product_identities_extender' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Plugin\\ProductIdentitiesExtender',
      ),
      'catalogPermissionsProductChange' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Model\\Indexer\\Plugin\\Product',
      ),
      'shared_catalogs_model_product' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SharedCatalog\\Plugin\\UpdateItemsSku',
      ),
      'exclude_swatch_attribute' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Model\\Plugin\\Product',
      ),
    ),
    'Magento\\Customer\\Model\\ResourceModel\\Visitor' => 
    array (
      'catalogLog' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Plugin\\Log',
      ),
      'reportLog' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Reports\\Model\\Plugin\\Log',
      ),
    ),
    'Magento\\Catalog\\Model\\Category\\DataProvider' => 
    array (
      'set_page_layout_default_value' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Plugin\\SetPageLayoutDefaultValue',
      ),
      'catalogCategoryDataProviderTrimData' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Plugin\\Catalog\\Model\\Category\\DataProvider\\TrimData',
      ),
      'category_ui_form_url_key_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Plugin\\Catalog\\Block\\Adminhtml\\Category\\Tab\\Attributes',
      ),
      'catalog_permissions_category_data_provider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Model\\Plugin\\Catalog\\Category\\DataProvider',
      ),
      'google_optimizer_category_data_provider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GoogleOptimizer\\Model\\Plugin\\Catalog\\Category\\DataProvider',
      ),
    ),
    'Magento\\Theme\\Block\\Html\\Topmenu' => 
    array (
      'catalogTopmenu' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Block\\Topmenu',
      ),
      'catalogPermissionsCachingTopmenu' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Model\\Plugin\\Theme\\Block\\Html\\Topmenu',
      ),
    ),
    'Magento\\Framework\\Mview\\View\\StateInterface' => 
    array (
      'setStatusForMview' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Category\\Product\\Plugin\\MviewState',
      ),
      'catalogPermissionsIndexerSetStatusForMview' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Model\\Indexer\\Plugin\\MviewState',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\Collection' => 
    array (
      'joinProductsWhenFlatEnabled' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Model\\Plugin\\ResourceModel\\Product\\JoinProductsWhenFlatEnabled',
      ),
      'joinAttribute' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Model\\Plugin\\ResourceModel\\Product\\Collection',
      ),
    ),
    'Magento\\Store\\Model\\ResourceModel\\Website' => 
    array (
      'invalidatePriceIndexerOnWebsite' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Product\\Price\\Plugin\\Website',
      ),
      'categoryProductWebsiteAfterDelete' => 
      array (
        'sortOrder' => 0,
        'instance' => '\\Magento\\Catalog\\Model\\Indexer\\Category\\Product\\Plugin\\Website',
      ),
      'assign_website_to_default_stock' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\Store\\Model\\ResourceModel\\Website\\AssignWebsiteToDefaultStockPlugin',
      ),
      'delete_website_to_stock_link' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\Store\\Model\\ResourceModel\\Website\\DeleteWebsiteToStockLinkPlugin',
      ),
      'update_sales_channel_website_code' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\Store\\Model\\ResourceModel\\Website\\UpdateSalesChannelWebsiteCodePlugin',
      ),
    ),
    'Magento\\Store\\Model\\ResourceModel\\Store' => 
    array (
      'storeViewResourceAroundSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Category\\Flat\\Plugin\\StoreView',
      ),
      'catalogProductFlatIndexerStore' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Product\\Flat\\Plugin\\Store',
      ),
      'categoryStoreAroundSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Category\\Product\\Plugin\\StoreView',
      ),
      'productAttributesStoreViewSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Product\\Eav\\Plugin\\StoreView',
      ),
      'catalogsearchFulltextIndexerStoreView' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Plugin\\Store\\View',
      ),
      'invalidateTargetRuleOnStoreViewChange' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\TargetRule\\Model\\Indexer\\TargetRule\\Plugin\\Store',
      ),
      'catalogPermissionsIndexerStoreView' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Model\\Indexer\\Plugin\\Store\\View',
      ),
      'store_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Model\\Category\\Plugin\\Store\\View',
      ),
      'update_cms_url_rewrites_after_store_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CmsUrlRewrite\\Plugin\\Cms\\Model\\Store\\View',
      ),
    ),
    'Magento\\Store\\Model\\ResourceModel\\Group' => 
    array (
      'storeGroupResourceAroundSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Category\\Flat\\Plugin\\StoreGroup',
      ),
      'catalogProductFlatIndexerStoreGroup' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Product\\Flat\\Plugin\\StoreGroup',
      ),
      'categoryStoreGroupAroundSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Category\\Product\\Plugin\\StoreGroup',
      ),
      'storeGroupResourceAroundBeforeSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogInventory\\Model\\Indexer\\Stock\\Plugin\\StoreGroup',
      ),
      'catalogsearchFulltextIndexerStoreGroup' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Plugin\\Store\\Group',
      ),
      'invalidateTargetRuleOnStoreGroupChange' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\TargetRule\\Model\\Indexer\\TargetRule\\Plugin\\StoreGroup',
      ),
      'catalogPermissionsIndexerStoreGroup' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Model\\Indexer\\Plugin\\Store\\Group',
      ),
      'group_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Model\\Category\\Plugin\\Store\\Group',
      ),
    ),
    'Magento\\Customer\\Api\\GroupRepositoryInterface' => 
    array (
      'invalidatePriceIndexerOnCustomerGroup' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Product\\Price\\Plugin\\CustomerGroup',
      ),
      'customerGroupEdit' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Model\\Indexer\\Plugin\\GroupRepository',
      ),
      'groupRepositoryPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Company\\Plugin\\Customer\\Api\\ReassignCompaniesToDefaultGroup',
      ),
      'updateCompanyCustomerGroupPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SharedCatalog\\Plugin\\Customer\\Api\\UpdateCompanyCustomerGroupPlugin',
      ),
      'validateCustomerGroupDeletePlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SharedCatalog\\Plugin\\Customer\\Api\\ValidateCustomerGroupDeletePlugin',
      ),
      'updateSharedCatalogNamePlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SharedCatalog\\Plugin\\Customer\\Api\\UpdateSharedCatalogNamePlugin',
      ),
    ),
    'Magento\\Eav\\Model\\Entity\\Attribute\\Set' => 
    array (
      'invalidateEavIndexerOnAttributeSetSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Product\\Eav\\Plugin\\AttributeSet',
      ),
      'invalidateTargetRuleOnDeleteAttributeSet' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\TargetRule\\Model\\Indexer\\TargetRule\\Plugin\\AttributeSet',
      ),
    ),
    'Magento\\Catalog\\Helper\\Product\\Flat\\Indexer' => 
    array (
      'addRowIdToFlatDefinition' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Plugin\\Helper\\Product\\Flat\\FlatColumnsDefinition',
      ),
      'addRowIdToIndex' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Plugin\\Helper\\Product\\Flat\\FlatIndexes',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\TypeTransitionManager' => 
    array (
      'configurable_product_transition' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Product\\TypeTransitionManager\\Plugin\\Configurable',
      ),
      'downloadable_product_transition' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Downloadable\\Model\\Product\\TypeTransitionManager\\Plugin\\Downloadable',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\Config\\Backend\\ShowOutOfStock' => 
    array (
      'showOutOfStockValueChanged' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Plugin\\ShowOutOfStockConfig',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Config' => 
    array (
      'productListingAttributesCaching' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Model\\ResourceModel\\Config',
      ),
    ),
    'Magento\\Eav\\Model\\Entity\\Attribute\\Backend\\AbstractBackend' => 
    array (
      'attributeValidation' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Model\\Attribute\\Backend\\AttributeValidation',
      ),
      'ConfigurableProduct::skipValidation' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Plugin\\Model\\Attribute\\Backend\\AttributeValidation',
      ),
      'Price' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\PricePermissions\\Model\\Entity\\Attribute\\Backend\\Plugin\\AbstractBackend',
      ),
    ),
    'Magento\\Sales\\Api\\OrderItemRepositoryInterface' => 
    array (
      'get_gift_message' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftMessage\\Model\\Plugin\\OrderItemGet',
      ),
      'vertex_commodity_code_order_item_repository' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\CommodityCodeExtensionAttributeOrderItemRepository',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\Collection\\ProductLimitation' => 
    array (
      'isUsingPriceIndex' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Model\\Plugin\\ResourceModel\\Product\\Collection\\ProductLimitation',
      ),
    ),
    'Magento\\Eav\\Model\\ResourceModel\\ReadSnapshot' => 
    array (
      'catalogReadSnapshot' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Model\\ResourceModel\\ReadSnapshotPlugin',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\Item\\ToOrderItem' => 
    array (
      'copy_quote_files_to_order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Plugin\\QuoteItemProductOption',
      ),
      'append_bundle_data_to_order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Bundle\\Model\\Plugin\\QuoteItem',
      ),
      'append_gift_card_data_to_order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftCard\\Model\\Plugin\\QuoteItem',
      ),
      'gift_registry_item_from_quote_item' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftRegistry\\Model\\Plugin\\QuoteItem',
      ),
      'gift_message_quote_item_conversion' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftMessage\\Model\\Plugin\\QuoteItem',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Initialization\\Helper' => 
    array (
      'weeeAttributeOptionsProcess' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Plugin\\Catalog\\Controller\\Adminhtml\\Product\\Initialization\\Helper\\ProcessTaxAttribute',
      ),
      'vertex_custom_option_flex_field_after_save_initialization' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\CustomOptionFlexFieldExtensionAttributeInitializer',
      ),
      'Bundle' => 
      array (
        'sortOrder' => 60,
        'instance' => 'Magento\\Bundle\\Controller\\Adminhtml\\Product\\Initialization\\Helper\\Plugin\\Bundle',
      ),
      'product_save_rewrites_history_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Plugin\\Catalog\\Controller\\Adminhtml\\Product\\Initialization\\Helper',
      ),
      'configurable' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\ConfigurableProduct\\Controller\\Adminhtml\\Product\\Initialization\\Helper\\Plugin\\Configurable',
      ),
      'updateConfigurations' => 
      array (
        'sortOrder' => 60,
        'instance' => 'Magento\\ConfigurableProduct\\Controller\\Adminhtml\\Product\\Initialization\\Helper\\Plugin\\UpdateConfigurations',
      ),
      'cleanConfigurationTmpImages' => 
      array (
        'sortOrder' => 999,
        'instance' => 'Magento\\ConfigurableProduct\\Plugin\\Product\\Initialization\\CleanConfigurationTmpImages',
      ),
      'Downloadable' => 
      array (
        'sortOrder' => 70,
        'instance' => 'Magento\\Downloadable\\Controller\\Adminhtml\\Product\\Initialization\\Helper\\Plugin\\Downloadable',
      ),
      'GiftCardInitialize' => 
      array (
        'sortOrder' => 110,
        'instance' => 'Magento\\GiftCard\\Controller\\Adminhtml\\Product\\Initialization\\Helper\\Plugin\\GiftCard',
      ),
      'admin_gws_gallery_updater' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\Catalog\\Controller\\Adminhtml\\Product\\Initialization\\GalleryUpdater',
      ),
      'PricePermissions' => 
      array (
        'sortOrder' => 80,
        'instance' => 'Magento\\PricePermissions\\Controller\\Adminhtml\\Product\\Initialization\\Helper\\Plugin\\PricePermissions',
      ),
      'Rma' => 
      array (
        'sortOrder' => 70,
        'instance' => 'Magento\\Rma\\Plugin\\Catalog\\Controller\\Adminhtml\\Product\\Initialization\\HelperPlugin',
      ),
    ),
    'Magento\\Quote\\Model\\QuoteRepository' => 
    array (
      'multishipping_quote_repository' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Multishipping\\Plugin\\MultishippingQuoteRepository',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\Address' => 
    array (
      'convertQuoteAddressToCustomerAddress' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerCustomAttributes\\Model\\Plugin\\ConvertQuoteAddressToCustomerAddress',
      ),
      'after_address_collect_shipping_sates' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NegotiableQuote\\Model\\Plugin\\Quote\\Model\\Quote\\AddressPlugin',
      ),
      'manage_assignment_of_pickup_location_to_quote_address' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\InventoryInStorePickupQuote\\Plugin\\Quote\\Address\\ManageAssignmentOfPickupLocationToQuoteAddress',
      ),
      'purchaseOrderQuoteAddress' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PurchaseOrder\\Plugin\\Quote\\Model\\AddressPlugin',
      ),
      'companyShippingQuoteAddressPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CompanyShipping\\Plugin\\Model\\Quote\\AddressPlugin',
      ),
    ),
    'Magento\\Quote\\Model\\ResourceModel\\Quote\\Address' => 
    array (
      'load_pickup_location_for_quote_address' => 
      array (
        'sortOrder' => 30,
        'instance' => 'Magento\\InventoryInStorePickupQuote\\Plugin\\Quote\\Address\\LoadPickupLocationForQuoteAddress',
      ),
    ),
    'Magento\\Quote\\Model\\ResourceModel\\Quote' => 
    array (
      'substract_product_from_quotes' => 
      array (
        'sortOrder' => 800,
        'instance' => 'Magento\\CatalogStaging\\Plugin\\Quote\\SubstractProductFromQuotes',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product' => 
    array (
      'clean_quote_items_after_product_delete' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Quote\\Model\\Product\\Plugin\\RemoveQuoteItems',
      ),
      'update_quote_items_after_product_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Quote\\Model\\Product\\Plugin\\UpdateQuoteItems',
      ),
      'catalogsearchFulltextProduct' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Plugin\\Product',
      ),
      'delete_source_items' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\Catalog\\Model\\ResourceModel\\Product\\DeleteSourceItemsPlugin',
      ),
      'process_source_items_after_product_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\Catalog\\Model\\ResourceModel\\Product\\ProcessSourceItemsPlugin',
      ),
      'process_reservations_after_product_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\Catalog\\Model\\ResourceModel\\Product\\UpdateReservationsPlugin',
      ),
      'delete_reservations' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\Catalog\\Model\\ResourceModel\\Product\\DeleteReservationsPlugin',
      ),
      'vertex_commodity_code_product_resource_model' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\CommodityCodeExtensionAttributeProductResourceModelPlugin',
      ),
      'apply_catalog_rules_after_product_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRule\\Plugin\\Indexer\\Product\\Save\\ApplyRules',
      ),
      'reload_attributes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Plugin\\Model\\ResourceModel\\Product',
      ),
      'cleanups_wishlist_item_after_product_delete' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Wishlist\\Plugin\\Model\\ResourceModel\\Product',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Action' => 
    array (
      'quoteProductMassChange' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Quote\\Model\\Product\\Plugin\\MarkQuotesRecollectMassDisabled',
      ),
      'ReindexUpdatedProducts' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogInventory\\Model\\Plugin\\ReindexUpdatedProducts',
      ),
      'catalogsearchFulltextMassAction' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Plugin\\Product\\Action',
      ),
      'catalogPermissionsProductMassChange' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Model\\Indexer\\Plugin\\Product\\Action',
      ),
      'invalidate_pagecache_after_update_product_attributes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Model\\Product\\Action\\UpdateAttributesFlushCache',
      ),
      'price_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRule\\Plugin\\Model\\Product\\Action',
      ),
      'stagingMassAttributesUpdate' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Magento\\CatalogStaging\\Model\\Plugin\\Model\\Product\\ActionPlugin',
      ),
      'admingws_product_action_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Model\\Plugin\\ProductAction',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Attribute\\Backend\\Price' => 
    array (
      'bundle' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Bundle\\Model\\Plugin\\PriceBackend',
      ),
      'configurable' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Plugin\\PriceBackend',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Item' => 
    array (
      'bundle' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Bundle\\Model\\Sales\\Order\\Plugin\\Item',
      ),
    ),
    'Magento\\Bundle\\Model\\Product\\Type' => 
    array (
      'adapt_is_product_salable' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProduct\\Plugin\\Bundle\\Model\\Product\\Type\\AdaptIsSalablePlugin',
      ),
    ),
    'Magento\\BundleImportExport\\Model\\Import\\Product\\Type\\Bundle\\RelationsDataSaver' => 
    array (
      'sequence_application' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\BundleImportExportStaging\\Plugin\\BundleImportExport\\Model\\Import\\Product\\Type\\Bundle\\RelationsDataSaver',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Attribute\\Repository' => 
    array (
      'filterCustomAttribute' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogInventory\\Model\\Plugin\\FilterCustomAttribute',
      ),
      'process_extension_attributes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageBuilder\\Plugin\\Catalog\\Model\\Product\\Attribute\\RepositoryPlugin',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\View' => 
    array (
      'quantityValidators' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogInventory\\Block\\Plugin\\ProductView',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute\\Save' => 
    array (
      'massAction' => 
      array (
        'sortOrder' => 0,
        'disabled' => true,
        'instance' => 'Magento\\CatalogInventory\\Plugin\\MassUpdateProductAttribute',
      ),
      'inventoryUpdate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute\\Save\\ProcessInventoryPlugin',
      ),
      'Ddg_UpdateProductAttribute_MassActionPlugin' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Dotdigitalgroup\\Email\\Plugin\\CatalogProductAttributeSavePlugin',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Category' => 
    array (
      'catalogsearchFulltextCategory' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Plugin\\Category',
      ),
      'category_move_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Model\\Category\\Plugin\\Category\\Move',
      ),
      'category_delete_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Model\\Category\\Plugin\\Category\\Remove',
      ),
      'update_url_path_for_different_stores' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Model\\Category\\Plugin\\Category\\UpdateUrlPath',
      ),
      'deny_permission_category' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SharedCatalog\\Plugin\\Catalog\\Model\\ResourceModel\\DenyPermissionsForNewCategory',
      ),
      'fulltext_search_indexer' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Model\\Plugin\\Category',
      ),
      'catalogStaging' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Plugin\\Model\\ResourceModel\\Category',
      ),
      'admingws_category_resource_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Model\\Plugin\\CategoryResource',
      ),
      'admin_gws_check_category_can_be_saved' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\Catalog\\Model\\ResourceModel\\Category\\CheckCategoryCanBeSaved',
      ),
    ),
    'Magento\\Catalog\\Model\\Indexer\\Product\\Category\\Action\\Rows' => 
    array (
      'catalogsearchFulltextCategoryAssignment' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Plugin\\Product\\Category\\Action\\Rows',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Attribute' => 
    array (
      'catalogsearchFulltextIndexerAttribute' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Plugin\\Attribute',
      ),
      'catalogsearchAttributeSearchWeightCache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Attribute\\SearchWeight',
      ),
      'updateElasticsearchIndexerMapping' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Elasticsearch\\Model\\Indexer\\Fulltext\\Plugin\\Category\\Product\\Attribute',
      ),
      'invalidate_pagecache_after_attribute_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Model\\ResourceModel\\Attribute\\Save',
      ),
    ),
    'Magento\\Framework\\Search\\Request\\Config\\FilesystemReader' => 
    array (
      'catalogSearchDynamicFields' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Search\\ReaderPlugin',
      ),
      'productAttributesDynamicFields' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogGraphQl\\Plugin\\Search\\Request\\ConfigReader',
      ),
    ),
    'Magento\\Catalog\\Model\\Layer\\Search\\CollectionFilter' => 
    array (
      'searchQuery' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Layer\\Search\\Plugin\\CollectionFilter',
      ),
    ),
    'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Action\\DataProvider' => 
    array (
      'stockedProductsFilterPlugin' => 
      array (
        'sortOrder' => 0,
        'disabled' => true,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Plugin\\StockedProductsFilterPlugin',
      ),
      'stockedProductFilterByInventoryStockPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryElasticsearch\\Plugin\\CatalogSearch\\Model\\Indexer\\Fulltext\\Action\\DataProvider\\StockedProductFilterByInventoryStock',
      ),
    ),
    'Magento\\CatalogSearch\\Model\\ResourceModel\\Advanced\\Collection' => 
    array (
      'add_catalog_permissions_information' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ElasticsearchCatalogPermissions\\Plugin\\AddCategoryPermissionsToCollection',
      ),
    ),
    'Magento\\CatalogSearch\\Model\\ResourceModel\\Fulltext\\Collection' => 
    array (
      'add_catalog_permissions_information' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ElasticsearchCatalogPermissions\\Plugin\\AddCategoryPermissionsToFulltextCollection',
      ),
      'loadPreview' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Model\\Plugin\\ResourceModel\\Product\\Fulltext\\Collection',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Creditmemo' => 
    array (
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\History' => 
    array (
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Invoice' => 
    array (
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintAction' => 
    array (
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintCreditmemo' => 
    array (
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintInvoice' => 
    array (
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintShipment' => 
    array (
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Reorder' => 
    array (
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
      'redirect_blocked_company_user' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Company\\Plugin\\Sales\\Controller\\Order\\ReorderPlugin',
      ),
      'replaceQuoteItems' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NegotiableQuote\\Plugin\\Sales\\Controller\\Order\\ReorderPlugin',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Shipment' => 
    array (
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\View' => 
    array (
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
    ),
    'Magento\\Sales\\Model\\ResourceModel\\Order\\Shipment' => 
    array (
      'SaveSourceForShipment' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryShipping\\Plugin\\Sales\\ResourceModel\\Order\\Shipment\\SaveSourceForShipmentPlugin',
      ),
      'LoadSourceForShipment' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryShipping\\Plugin\\Sales\\ResourceModel\\Order\\Shipment\\LoadSourceForShipmentPlugin',
      ),
      'DeleteSourceForShipment' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryShipping\\Plugin\\Sales\\ResourceModel\\Order\\Shipment\\DeleteSourceForShipmentPlugin',
      ),
    ),
    'Magento\\Sales\\Model\\ResourceModel\\Order\\Creditmemo' => 
    array (
      'refundRewardPoints' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Reward\\Model\\Plugin\\RewardPointsRefund',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Payment\\Operations\\CaptureOperation' => 
    array (
      'removeCaptureCommentsPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CompanyCredit\\Plugin\\Sales\\Model\\Order\\Payment\\Operations\\RemoveCaptureCommentsPlugin',
      ),
    ),
    'Magento\\Sales\\Model\\ResourceModel\\Order\\Handler\\Address' => 
    array (
      'addressUpdate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Model\\Order\\Invoice\\Plugin\\AddressUpdate',
      ),
    ),
    'Magento\\Framework\\View\\Asset\\MergeService' => 
    array (
      'cleanMergedJsCss' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaStorage\\Model\\Asset\\Plugin\\CleanMergedJsCss',
      ),
    ),
    'Magento\\Checkout\\Model\\Session' => 
    array (
      'negotiableQuoteCheckoutSessionPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NegotiableQuote\\Model\\Plugin\\Checkout\\Model\\SessionPlugin',
      ),
      'purchaseOrderCheckoutSessionPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PurchaseOrder\\Plugin\\Checkout\\Model\\SessionPlugin',
      ),
    ),
    'Magento\\UrlRewrite\\Model\\StorageInterface' => 
    array (
      'storage_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Model\\Category\\Plugin\\Storage',
      ),
    ),
    'Magento\\CatalogUrlRewrite\\Model\\Storage\\DbStorage' => 
    array (
      'dynamic_storage_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Plugin\\DynamicCategoryRewrites',
      ),
    ),
    'Magento\\ImportExport\\Model\\Import' => 
    array (
      'catalogProductFlatIndexerImport' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogImportExport\\Model\\Indexer\\Product\\Flat\\Plugin\\Import',
      ),
      'invalidatePriceIndexerOnImport' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogImportExport\\Model\\Indexer\\Product\\Price\\Plugin\\Import',
      ),
      'invalidateStockIndexerOnImport' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogImportExport\\Model\\Indexer\\Stock\\Plugin\\Import',
      ),
      'invalidateEavIndexerOnImport' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogImportExport\\Model\\Indexer\\Product\\Eav\\Plugin\\Import',
      ),
      'invalidateProductCategoryIndexerOnImport' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogImportExport\\Model\\Indexer\\Product\\Category\\Plugin\\Import',
      ),
      'invalidateCategoryProductIndexerOnImport' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogImportExport\\Model\\Indexer\\Category\\Product\\Plugin\\Import',
      ),
      'targetRuleImportInvalidate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\TargetRule\\Model\\Indexer\\TargetRule\\Plugin\\Import',
      ),
      'catalogPermissionImport' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Model\\Indexer\\Plugin\\Import',
      ),
      'reindex_after_import' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRule\\Plugin\\Indexer\\ImportExport',
      ),
    ),
    'Magento\\CatalogImportExport\\Model\\Import\\Product' => 
    array (
      'staging-import-products' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogImportExportStaging\\Model\\Import\\ProductPlugin',
      ),
    ),
    'Magento\\Framework\\View\\Model\\Layout\\Merge' => 
    array (
      'widget-layout-update-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Widget\\Model\\ResourceModel\\Layout\\Plugin',
      ),
    ),
    'Magento\\Checkout\\Block\\Checkout\\LayoutProcessor' => 
    array (
      'ddg_sms_international_telephone_layout_processor_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Dotdigitalgroup\\Sms\\Plugin\\Block\\Checkout\\LayoutProcessor',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\Address\\ToOrderAddress' => 
    array (
      'convertQuoteAddressToOrderAddress' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerCustomAttributes\\Model\\Plugin\\ConvertQuoteAddressToOrderAddress',
      ),
      'gift_registry_quote_address_to_order_address' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftRegistry\\Model\\Plugin\\ConvertQuoteAddressToOrderAddress',
      ),
    ),
    'Magento\\Customer\\Block\\Widget\\Name' => 
    array (
      'formatPrefixSuffixOptions' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerCustomAttributes\\Plugin\\FormatPrefixSuffixOptions',
      ),
    ),
    'Magento\\Customer\\Model\\Address' => 
    array (
      'updateDataCustomerAddress' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerCustomAttributes\\Model\\Plugin\\AddCustomAttributesToCustomerAddress',
      ),
    ),
    'Magento\\CustomAttributeManagement\\Block\\Form' => 
    array (
      'set_customer_custom_attribute_for_company' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerCustomAttributes\\Plugin\\Customer\\Block\\Form\\CustomerCustomAttributePlugin',
      ),
    ),
    'Magento\\Checkout\\Api\\PaymentInformationManagementInterface' => 
    array (
      'process_billing_custom_customer_attributes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerCustomAttributes\\Model\\Plugin\\ProcessCustomerBillingAddressCustomAttributes',
      ),
      'validate-agreements' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CheckoutAgreements\\Model\\Checkout\\Plugin\\Validation',
      ),
      'disable-place-order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CheckoutStaging\\Plugin\\PaymentInformationManagementPlugin',
      ),
      'ProcessPaymentVaultInformationManagement' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Vault\\Plugin\\PaymentVaultInformationManagement',
      ),
    ),
    'Magento\\Checkout\\Api\\ShippingInformationManagementInterface' => 
    array (
      'process_shipping_custom_customer_attributes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PurchaseOrder\\Model\\Plugin\\ProcessCustomCustomerAttributes',
      ),
      'gift_registry_save_address' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftRegistry\\Model\\Plugin\\SaveAddress',
      ),
      'amazon_payment_shipping_information_management' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Amazon\\Payment\\Plugin\\ShippingInformationManagement',
      ),
    ),
    'Magento\\Checkout\\Api\\GuestPaymentInformationManagementInterface' => 
    array (
      'process_billing_custom_guest_attributes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerCustomAttributes\\Model\\Plugin\\ProcessGuestBillingAddressCustomAttributes',
      ),
      'validate-guest-agreements' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CheckoutAgreements\\Model\\Checkout\\Plugin\\GuestValidation',
      ),
      'disable-guest-place-order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CheckoutStaging\\Plugin\\GuestPaymentInformationManagementPlugin',
      ),
      'guest_payment_no_commit_after_event_workaround' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\GuestPaymentInformationManagementPlugin',
      ),
    ),
    'Magento\\Checkout\\Api\\GuestShippingInformationManagementInterface' => 
    array (
      'process_shipping_custom_guest_attributes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerCustomAttributes\\Model\\Plugin\\ProcessGuestShippingAddressCustomAttributes',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\Quote\\Item\\QuantityValidator\\Initializer\\Option' => 
    array (
      'configurable_product' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Quote\\Item\\QuantityValidator\\Initializer\\Option\\Plugin\\ConfigurableProduct',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\CartConfiguration' => 
    array (
      'configurable_product' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Product\\CartConfiguration\\Plugin\\Configurable',
      ),
      'Downloadable' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Downloadable\\Model\\Product\\CartConfiguration\\Plugin\\Downloadable',
      ),
      'GiftCard' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftCard\\Model\\Product\\CartConfiguration\\Plugin\\GiftCard',
      ),
      'isProductConfigured' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GroupedProduct\\Model\\Product\\Cart\\Configuration\\Plugin\\Grouped',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Admin\\Item' => 
    array (
      'configurable_product' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Order\\Admin\\Item\\Plugin\\Configurable',
      ),
    ),
    'Magento\\Catalog\\Helper\\Product\\Configuration' => 
    array (
      'configurable_product' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\ConfigurableProduct\\Helper\\Product\\Configuration\\Plugin',
      ),
      'grouped_options' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GroupedProduct\\Helper\\Product\\Configuration\\Plugin\\Grouped',
      ),
    ),
    'Magento\\Catalog\\Model\\Entity\\Product\\Attribute\\Group\\AttributeMapperInterface' => 
    array (
      'configurable_product' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Entity\\Product\\Attribute\\Group\\AttributeMapper\\Plugin',
      ),
    ),
    'Magento\\Catalog\\Api\\ProductRepositoryInterface' => 
    array (
      'configurableProductSaveOptions' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Plugin\\ProductRepositorySave',
      ),
      'vertex_commodity_code_product_repository' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\CommodityCodeExtensionAttributeProductRepositoryPlugin',
      ),
      'AdminProductRepositoryPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SharedCatalog\\Plugin\\Catalog\\Api\\AdminProductRepositoryInterfacePlugin',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Type' => 
    array (
      'configurable_output' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Product\\Type\\Plugin',
      ),
      'grouped_output' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GroupedProduct\\Model\\Product\\Type\\Plugin',
      ),
    ),
    'Magento\\ProductVideo\\Block\\Product\\View\\Gallery' => 
    array (
      'product_video_gallery' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Block\\Plugin\\Product\\Media\\Gallery',
      ),
    ),
    'Magento\\ConfigurableProduct\\Model\\Product\\Type\\Configurable' => 
    array (
      'add_swatch_attributes_to_configurable' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Model\\Plugin\\Configurable',
      ),
      'productCollectionPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableSharedCatalog\\Plugin\\ConfigurableProduct\\Model\\Product\\Type\\ConfigurablePlugin',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Pricing\\Renderer\\SalableResolver' => 
    array (
      'configurable' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Plugin\\Catalog\\Model\\Product\\Pricing\\Renderer\\SalableResolver',
      ),
    ),
    'Magento\\SalesRule\\Model\\Rule\\Condition\\Product' => 
    array (
      'apply_rule_on_configurable_children' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Plugin\\SalesRule\\Model\\Rule\\Condition\\Product',
      ),
    ),
    'Magento\\Tax\\Model\\Sales\\Total\\Quote\\CommonTaxCollector' => 
    array (
      'apply_tax_class_id' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Plugin\\Tax\\Model\\Sales\\Total\\Quote\\CommonTaxCollector',
      ),
      'vertexItemLevelMap' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\CommonTaxCollectorPlugin',
      ),
    ),
    'Magento\\SalesRule\\Model\\ResourceModel\\Rule\\Collection' => 
    array (
      'aroundSetValidationFilter' => 
      array (
        'sortOrder' => 500,
        'instance' => 'Magento\\AdvancedSalesRule\\Model\\ResourceModel\\Plugin\\Rule\\Collection',
      ),
      'beforeSetValidationFilter' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\SalesRuleStaging\\Model\\ResourceModel\\Plugin\\Rule\\Collection',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\Config' => 
    array (
      'append_sales_rule_keys_to_quote' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesRule\\Model\\Plugin\\QuoteConfigProductAttributes',
      ),
    ),
    'Magento\\Quote\\Model\\Cart\\CartTotalRepository' => 
    array (
      'coupon_label_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesRule\\Plugin\\CartTotalRepository',
      ),
      'multishipping_shipping_addresses' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Multishipping\\Model\\Cart\\CartTotalRepositoryPlugin',
      ),
      'rewardTotal' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Reward\\Model\\Plugin\\CartTotalRepository',
      ),
    ),
    'Magento\\Sales\\Model\\Service\\OrderService' => 
    array (
      'coupon_uses_decrement_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesRule\\Plugin\\CouponUsagesDecrement',
      ),
    ),
    'Magento\\Quote\\Model\\QuoteManagement' => 
    array (
      'coupon_uses_increment_plugin' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\SalesRule\\Plugin\\CouponUsagesIncrement',
      ),
      'validate_purchase_order_number' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\OfflinePayments\\Plugin\\ValidatePurchaseOrderNumber',
      ),
      'purchaseOrderCartManagementPlugin' => 
      array (
        'sortOrder' => 40,
        'instance' => 'Magento\\PurchaseOrder\\Plugin\\Quote\\Model\\QuoteManagementPlugin',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\Address\\ToOrder' => 
    array (
      'add_tax_to_order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\Quote\\ToOrderConverter',
      ),
      'set_pickup_location_to_order_during_address_conversion' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\InventoryInStorePickupQuote\\Plugin\\Quote\\SetPickupLocationToOrder',
      ),
    ),
    'Magento\\Quote\\Model\\Cart\\TotalsConverter' => 
    array (
      'add_tax_details' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\Quote\\GrandTotalDetailsPlugin',
      ),
      'giftCardAmountTotal' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftCardAccount\\Model\\Plugin\\TotalsConverter',
      ),
      'gift_wrapping_total' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftWrapping\\Model\\Plugin\\TotalsConverter',
      ),
      'vertex_calculation_message' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\TotalsCalculationMessagePlugin',
      ),
    ),
    'Magento\\Sales\\Api\\OrderRepositoryInterface' => 
    array (
      'save_order_tax' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\Plugin\\OrderSave',
      ),
      'orderRepositoryCompany' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Company\\Plugin\\Sales\\Api\\OrderRepositoryInterfacePlugin',
      ),
      'get_customer_balance' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerBalance\\Model\\Plugin\\OrderRepository',
      ),
      'gift_card_account' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftCardAccount\\Model\\Plugin\\OrderRepository',
      ),
      'save_gift_message' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftMessage\\Model\\Plugin\\OrderSave',
      ),
      'get_gift_message' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftMessage\\Model\\Plugin\\OrderGet',
      ),
      'get_order_gift_wrapping' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftWrapping\\Model\\Plugin\\OrderGiftWrapping',
      ),
      'get_order_item_gift_wrapping' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftWrapping\\Model\\Plugin\\OrderItemGiftWrapping',
      ),
      'get_pickup_location_for_order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickupSales\\Plugin\\Sales\\Order\\GetPickupLocationForOrderPlugin',
      ),
      'save_pickup_location_for_order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickupSales\\Plugin\\Sales\\Order\\SavePickupLocationForOrderPlugin',
      ),
      'rewardCreditmemoUpdater' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Reward\\Model\\Plugin\\OrderRepository',
      ),
      'get_vertex_order_item_attributes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\OrderRepositoryPlugin',
      ),
      'vertex_commodity_code_order_item_order_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\AddCommodityCodeToOrderItemPlugin',
      ),
      'addVertexCustomerCountryToOrderAddress' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\AddCustomerCountryToOrderAddressPlugin',
      ),
    ),
    'Magento\\Catalog\\Ui\\DataProvider\\Product\\Listing\\DataProvider' => 
    array (
      'taxSettingsProvider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Plugin\\Ui\\DataProvider\\TaxSettings',
      ),
      'wishlistSettingsDataProvider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Wishlist\\Plugin\\Ui\\DataProvider\\WishlistSettings',
      ),
      'weeeSettingsProvider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Plugin\\Ui\\DataProvider\\WeeeSettings',
      ),
    ),
    'Magento\\Wishlist\\Block\\Catalog\\Product\\View\\AddTo\\Wishlist' => 
    array (
      'getWishlistOptions' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftCard\\Block\\Product\\View\\Plugin',
      ),
    ),
    'Magento\\Wishlist\\Block\\Item\\Configure' => 
    array (
      'getWishlistOptions' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftCard\\Block\\Product\\View\\Plugin',
      ),
    ),
    'Magento\\GiftRegistry\\Helper\\Data' => 
    array (
      'getWishlistOptions' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftCard\\Helper\\GiftRegistry\\Plugin',
      ),
    ),
    'Magento\\Framework\\App\\FrontControllerInterface' => 
    array (
      'staging_preview_permissions_check' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Plugin\\Framework\\App\\FrontController',
      ),
      'configHash' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Deploy\\Model\\Plugin\\ConfigChangeDetector',
      ),
      'default_store_setter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\FrontController\\Plugin\\DefaultStore',
      ),
    ),
    'Magento\\Webapi\\Controller\\Rest' => 
    array (
      'beforeRestDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Plugin\\RestPlugin',
      ),
      'webapiContorllerRestAsync' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\WebapiAsync\\Plugin\\ControllerRest',
      ),
    ),
    'Magento\\PageCache\\Model\\Config' => 
    array (
      'staging_pagecache_bypass' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Plugin\\PageCache\\Model\\Config',
      ),
    ),
    'Magento\\Store\\Model\\BaseUrlChecker' => 
    array (
      'staging_store_baseurl_check_bypass' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Plugin\\Store\\Model\\BaseUrlChecker',
      ),
    ),
    'Magento\\Store\\Controller\\Store\\SwitchAction' => 
    array (
      'staging_preview_store_switch_fixing' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Plugin\\Store\\Controller\\Store\\SwitchAction',
      ),
    ),
    'Magento\\Customer\\Controller\\Ajax\\Login' => 
    array (
      'captcha_validation' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Captcha\\Model\\Customer\\Plugin\\AjaxLogin',
      ),
    ),
    'Magento\\Checkout\\Block\\Cart\\Sidebar' => 
    array (
      'login_captcha' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Captcha\\Model\\Cart\\ConfigPlugin',
      ),
    ),
    'Magento\\Framework\\App\\PageCache\\Identifier' => 
    array (
      'core-app-area-design-exception-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\PageCache\\Model\\App\\CacheIdentifierPlugin',
      ),
    ),
    'Magento\\Framework\\App\\PageCache\\Cache' => 
    array (
      'fpc-type-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageCache\\Model\\App\\PageCachePlugin',
      ),
    ),
    'Magento\\Wishlist\\Controller\\AbstractIndex' => 
    array (
      'authentication' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Wishlist\\Controller\\Index\\Plugin',
      ),
    ),
    'Magento\\Framework\\Model\\ResourceModel\\Db\\ObjectRelationProcessor' => 
    array (
      'object_constraints_resolver' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\ForeignKey\\ObjectRelationProcessor\\Plugin',
      ),
    ),
    'Magento\\Company\\Model\\Company\\Structure' => 
    array (
      'companyStructurePlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NegotiableQuote\\Plugin\\Company\\Model\\StructurePlugin',
      ),
    ),
    'Magento\\Wishlist\\Block\\Customer\\Sidebar' => 
    array (
      'is_visible_wishlist_sidebar' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Company\\Plugin\\Wishlist\\Block\\Customer\\SidebarPlugin',
      ),
    ),
    'Magento\\Sales\\Block\\Reorder\\Sidebar' => 
    array (
      'is_visible_reorder_sidebar' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Company\\Plugin\\Sales\\Block\\Reorder\\SidebarPlugin',
      ),
    ),
    'Magento\\Sales\\Api\\OrderManagementInterface' => 
    array (
      'orderManagementCompany' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Company\\Plugin\\Sales\\Api\\OrderManagementInterfacePlugin',
      ),
      'inventory_reservations_placement' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\Sales\\OrderManagement\\AppendReservationsAfterOrderPlacementPlugin',
      ),
    ),
    'Magento\\Quote\\Api\\CartRepositoryInterface' => 
    array (
      'save_fake_quota_in_preview' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CheckoutStaging\\Plugin\\SavePreviewQuotaPlugin',
      ),
      'quote_save' => 
      array (
        'sortOrder' => 30,
        'instance' => 'Magento\\NegotiableQuote\\Model\\Plugin\\Quote\\Model\\QuoteRepositoryPlugin',
      ),
      'remove_in_store_pickup_data' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickupMultishipping\\Plugin\\Quote\\RemoveInStorePickupDataInMultishippingModePlugin',
      ),
      'purchaseOrderCartRepositoryPlugin' => 
      array (
        'sortOrder' => 40,
        'instance' => 'Magento\\PurchaseOrder\\Plugin\\Quote\\Model\\QuoteRepositoryPlugin',
      ),
      'amazon_payment_quote_repository' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Amazon\\Payment\\Plugin\\QuoteRepository',
      ),
    ),
    'Magento\\MediaGallerySynchronizationApi\\Model\\ImportFilesComposite' => 
    array (
      'createMediaGalleryThumbnails' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGalleryUi\\Plugin\\CreateThumbnails',
      ),
    ),
    'Magento\\Cms\\Model\\ResourceModel\\Page' => 
    array (
      'cms_url_rewrite_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CmsUrlRewrite\\Plugin\\Cms\\Model\\ResourceModel\\Page',
      ),
    ),
    'Magento\\Integration\\Api\\IntegrationServiceInterface' => 
    array (
      'webapiIntegrationService' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Integration\\Model\\Plugin\\Integration',
      ),
    ),
    'Magento\\User\\Model\\User' => 
    array (
      'revokeTokensFromInactiveAdmins' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Integration\\Plugin\\Model\\AdminUser',
      ),
      'aroundAdminUserSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NegotiableQuote\\Model\\Plugin\\User\\Model\\User',
      ),
    ),
    'Magento\\Customer\\Model\\Customer' => 
    array (
      'revokeTokensFromInactiveCustomers' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Integration\\Plugin\\Model\\CustomerUser',
      ),
      'ddg_customer_sendNewAccountEmail_disabler' => 
      array (
        'sortOrder' => 1,
        'disabled' => false,
        'instance' => 'Dotdigitalgroup\\Email\\Plugin\\CustomerPlugin',
      ),
      'reward_notification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Reward\\Model\\Plugin\\CustomerPlugin',
      ),
    ),
    'Magento\\Company\\Api\\CompanyRepositoryInterface' => 
    array (
      'companyRepositoryPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CompanyPayment\\Plugin\\Company\\CompanyRepositoryPlugin',
      ),
      'quoteCompanyrepositoryPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NegotiableQuote\\Plugin\\Company\\Api\\CompanyRepositoryInterfacePlugin',
      ),
      'purchase_order_company_repository' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PurchaseOrder\\Plugin\\Company\\Model\\CompanyRepository',
      ),
      'companyShippingCompanyRepositoryPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CompanyShipping\\Plugin\\Company\\CompanyRepositoryPlugin',
      ),
    ),
    'Magento\\Company\\Model\\Company\\DataProvider' => 
    array (
      'companyDataProviderPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CompanyPayment\\Plugin\\Company\\DataProviderPlugin',
      ),
      'aroundGetSettingsData' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NegotiableQuote\\Model\\Plugin\\Company\\Model\\DataProvider',
      ),
      'purchase_order_company_data_provider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PurchaseOrder\\Plugin\\Company\\Model\\DataProvider',
      ),
      'afterGetCompanyResultData' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CompanyCredit\\Plugin\\Company\\Model\\DataProvider',
      ),
      'companyShippingDataProviderPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CompanyShipping\\Plugin\\Company\\DataProviderPlugin',
      ),
    ),
    'Magento\\Quote\\Api\\PaymentMethodManagementInterface' => 
    array (
      'paymentMethodManagementPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CompanyPayment\\Plugin\\Quote\\PaymentMethodManagementPlugin',
      ),
      'paymentMethodManagementPermissionPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CompanyCredit\\Plugin\\Quote\\PaymentMethodManagementPlugin',
      ),
    ),
    'Magento\\Company\\Model\\Customer\\Company' => 
    array (
      'companyPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CompanyPayment\\Plugin\\Company\\Model\\Customer\\CompanyPlugin',
      ),
      'afterCreateCompany' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CompanyCredit\\Plugin\\Company\\Model\\Customer\\CompanyPlugin',
      ),
    ),
    'Magento\\Config\\Model\\Config\\Backend\\Baseurl' => 
    array (
      'updateAnalyticsSubscription' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Analytics\\Model\\Plugin\\BaseUrlConfigPlugin',
      ),
    ),
    'Magento\\Quote\\Model\\QuoteRepository\\LoadHandler' => 
    array (
      'load_handler' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NegotiableQuote\\Model\\Plugin\\Quote\\Model\\LoadHandlerPlugin',
      ),
      'shipping_method' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NegotiableQuote\\Plugin\\Quote\\Model\\UpdateShippingMethodPlugin',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\ShippingAssignment\\ShippingAssignmentPersister' => 
    array (
      'shipping_assignment_persister' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NegotiableQuote\\Model\\Plugin\\Quote\\Model\\ShippingAssignmentPersisterPlugin',
      ),
    ),
    'Magento\\Quote\\Model\\Quote' => 
    array (
      'negotiableQuoteAroundPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NegotiableQuote\\Plugin\\Quote\\Model\\QuotePlugin',
      ),
      'remove_store_credit_after_product_delete' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerBalance\\Plugin\\Model\\Quote\\ResetCustomerBalanceUsage',
      ),
      'purchaseOrderQuoteAroundPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PurchaseOrder\\Plugin\\Quote\\Model\\QuotePlugin',
      ),
      'currencyNegotiableQuoteAdminhtmlPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NegotiableQuote\\Plugin\\Quote\\Model\\QuoteAdminhtmlPlugin',
      ),
    ),
    'Magento\\Checkout\\Model\\DefaultConfigProvider' => 
    array (
      'negotiable_quote_default_config_provider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NegotiableQuote\\Model\\Plugin\\Checkout\\Model\\DefaultConfigProviderPlugin',
      ),
      'TribugsCompanyAddressModelDefaultConfigProvider' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Tribugs\\CompanyAddress\\Plugin\\DefaultConfigProvider',
      ),
    ),
    'Magento\\Company\\Model\\Company' => 
    array (
      'companyAfterLoad' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NegotiableQuote\\Model\\Plugin\\Company\\Model\\Company',
      ),
    ),
    'Magento\\Quote\\Model\\Cart\\Totals\\ItemConverter' => 
    array (
      'beforeModelToDataObject' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NegotiableQuote\\Plugin\\Quote\\Model\\Cart\\Totals\\ItemConverterPlugin',
      ),
    ),
    'Magento\\Customer\\Controller\\Address\\FormPost' => 
    array (
      'redirectToQuote' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NegotiableQuote\\Plugin\\Customer\\Controller\\Address\\FormPostPlugin',
      ),
    ),
    'Magento\\Customer\\Api\\AddressRepositoryInterface' => 
    array (
      'saveQuoteAddress' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NegotiableQuote\\Plugin\\Customer\\SaveAddressPlugin',
      ),
    ),
    'Magento\\Customer\\Block\\Address\\Edit' => 
    array (
      'getSaveUrl' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NegotiableQuote\\Plugin\\Customer\\Block\\Address\\EditPlugin',
      ),
    ),
    'Magento\\Sales\\Model\\Order' => 
    array (
      'forceNegotiableQuoteRules' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\NegotiableQuote\\Plugin\\Sales\\Model\\Order\\ForceNegotiableQuoteRulesPlugin',
      ),
      'can_creditmemo_with_store_credit' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerBalance\\Plugin\\CreditMemoResolver',
      ),
      'express_order_invoice' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Paypal\\Plugin\\OrderCanInvoice',
      ),
      'paymentPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CompanyCredit\\Plugin\\Sales\\Model\\OrderPlugin',
      ),
      'admin-order-placement-comment' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerSales\\Plugin\\AdminAddCommentOnOrderPlacementPlugin',
      ),
    ),
    'Magento\\NegotiableQuote\\Model\\NegotiableQuoteRepository' => 
    array (
      'ddg_b2b_store_negotiable_quote_repository_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Dotdigitalgroup\\B2b\\Plugin\\NegotiableQuotePlugin',
      ),
    ),
    'Magento\\Quote\\Model\\Product\\QuoteItemsCleaner' => 
    array (
      'itemRemoveFromNegotiableQuotes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NegotiableQuote\\Plugin\\Quote\\Model\\QuoteItemPlugin',
      ),
    ),
    'Magento\\ScalableCheckout\\Model\\ResourceModel\\Quote\\Item\\Consumer' => 
    array (
      'itemRemoveConsumerFromNegotiableQuotes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NegotiableQuote\\Plugin\\Quote\\Model\\QuoteItemConsumerPlugin',
      ),
    ),
    'Magento\\Company\\Controller\\Adminhtml\\Index\\Save' => 
    array (
      'negotiableQuoteSaveCompany' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NegotiableQuote\\Plugin\\Company\\Controller\\Adminhtml\\Index\\SavePlugin',
      ),
    ),
    'Magento\\Checkout\\Controller\\Index\\Index' => 
    array (
      'redirectNotSubmittedQuote' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NegotiableQuote\\Plugin\\Checkout\\Controller\\Index\\IndexPlugin',
      ),
      'redirectPurchaserOrderCheckout' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PurchaseOrder\\Plugin\\Checkout\\Controller\\Index\\IndexPlugin',
      ),
      'amazon_login_checkout_controller' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Amazon\\Login\\Plugin\\CheckoutController',
      ),
    ),
    'Magento\\Quote\\Model\\QuoteAddressValidator' => 
    array (
      'quoteAddressValidatorPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NegotiableQuote\\Plugin\\Quote\\Model\\QuoteAddressValidatorPlugin',
      ),
    ),
    'Magento\\Quote\\Api\\CartTotalRepositoryInterface' => 
    array (
      'negotiableQuoteTotals' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NegotiableQuote\\Plugin\\Quote\\Api\\JoinNegotiableQuoteTotalsPlugin',
      ),
    ),
    'Magento\\Sales\\Model\\ResourceModel\\Collection\\ExpiredQuotesCollection' => 
    array (
      'filterOutNegotiableQuotes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NegotiableQuote\\Plugin\\Sales\\ExpiredQuotesCollectionPlugin',
      ),
      'cleanExpiredQuotesPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PersistentHistory\\Plugin\\CleanExpiredQuotesPlugin',
      ),
    ),
    'Magento\\Catalog\\Model\\Category' => 
    array (
      'targetRuleCategoryInvalidate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\TargetRule\\Model\\Indexer\\TargetRule\\Plugin\\Category',
      ),
      'categoryChange' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Model\\Indexer\\Plugin\\Category',
      ),
      'catalogStagingCategoryPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Plugin\\Model\\Category',
      ),
      'apply_after_products_assign' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRule\\Plugin\\Indexer\\Category',
      ),
    ),
    'Magento\\CustomerSegment\\Model\\Segment' => 
    array (
      'targetRuleCustomerSegmentInvalidate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\TargetRule\\Model\\Indexer\\TargetRule\\Plugin\\CustomerSegment',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Initialization\\Helper\\ProductLinks' => 
    array (
      'GroupedProduct' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GroupedProduct\\Model\\Product\\Initialization\\Helper\\ProductLinks\\Plugin\\Grouped',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\Link' => 
    array (
      'groupedProductLinkProcessor' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GroupedProduct\\Model\\ResourceModel\\Product\\Link\\RelationPersister',
      ),
    ),
    'Magento\\Catalog\\Model\\Layer\\FilterList' => 
    array (
      'catalogPermissionsFilterListRemovePrice' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Model\\Plugin\\Catalog\\Model\\Layer\\FilterList',
      ),
    ),
    'Magento\\Config\\Model\\Config' => 
    array (
      'configPermissionChange' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GoogleTagManager\\Model\\Plugin\\Config',
      ),
      'enableAdvancedCheckoutPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\QuickOrder\\Plugin\\Config\\Model\\EnableAdvancedCheckoutPlugin',
      ),
      'baseCurrencyChangeNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CompanyCredit\\Plugin\\Config\\Model\\ConfigPlugin',
      ),
    ),
    'Magento\\Framework\\Pricing\\Render\\PriceBox' => 
    array (
      'can_show_price_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Plugin\\Framework\\Pricing\\Render\\CanShowPricePlugin',
      ),
      'price_box_staging_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Plugin\\Catalog\\Pricing\\Render\\PriceBox',
      ),
    ),
    'Magento\\Config\\Model\\Config\\Structure\\Converter' => 
    array (
      'cron_backend_config_structure_converter_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Cron\\Model\\Backend\\Config\\Structure\\Converter',
      ),
    ),
    'Magento\\Framework\\App\\RouterInterface' => 
    array (
      'csp_aware_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Csp\\Plugin\\CspAwareControllerPlugin',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\TotalsCollector' => 
    array (
      'quoteCustomerSegmentUpdater' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerBalance\\Model\\Plugin\\TotalsCollector',
      ),
      'quoteGiftCardAmountUpdater' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftCardAccount\\Model\\Plugin\\TotalsCollector',
      ),
      'in-store-pickup-set-shipping-description' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickupQuote\\Plugin\\Quote\\Address\\SetShippingDescription',
      ),
      'quoteRewardAmountUpdater' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Reward\\Model\\Plugin\\TotalsCollector',
      ),
    ),
    'Magento\\Sales\\Api\\InvoiceRepositoryInterface' => 
    array (
      'get_customer_balance' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerBalance\\Model\\Plugin\\InvoiceRepository',
      ),
      'gift_card_account' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftCardAccount\\Model\\Plugin\\InvoiceRepository',
      ),
      'get_invoice_gift_wrapping' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftWrapping\\Model\\Plugin\\InvoiceGiftWrapping',
      ),
      'get_vertex_invoice_item_attributes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\InvoiceRepositoryPlugin',
      ),
    ),
    'Magento\\Sales\\Api\\CreditmemoRepositoryInterface' => 
    array (
      'get_customer_balance' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerBalance\\Model\\Plugin\\CreditmemoRepository',
      ),
      'gift_card_account' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftCardAccount\\Model\\Plugin\\CreditmemoRepository',
      ),
      'get_credit_memo_gift_wrapping' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftWrapping\\Model\\Plugin\\CreditMemoGiftWrapping',
      ),
      'get_vertex_creditmemo_item_attributes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\CreditmemoRepositoryPlugin',
      ),
    ),
    'Magento\\SalesSampleData\\Model\\Order\\Processor' => 
    array (
      'customer_balance' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Magento\\CustomerBalanceSampleData\\Model\\Plugin\\CustomerBalanceRefund',
      ),
    ),
    'Magento\\Framework\\Mail\\TransportInterface' => 
    array (
      'customer-sample-data-disable-registration-email-send' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerSampleData\\Magento\\Framework\\Mail\\Transport\\MailPlugin',
      ),
      'WindowsSmtpConfig' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Email\\Model\\Plugin\\WindowsSmtpConfig',
      ),
      'EmailDisable' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Email\\Model\\Mail\\TransportInterfacePlugin',
      ),
      'ddg_mail_transport' => 
      array (
        'sortOrder' => 1,
        'disabled' => false,
        'instance' => 'Dotdigitalgroup\\Email\\Plugin\\TransportPlugin',
      ),
      'mageplaza_mail_transport' => 
      array (
        'sortOrder' => 1,
        'disabled' => false,
        'instance' => 'Mageplaza\\Smtp\\Mail\\Transport',
      ),
    ),
    'Magento\\Checkout\\Block\\Cart\\LayoutProcessor' => 
    array (
      'checkout_cart_shipping_dhl' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Dhl\\Model\\Plugin\\Checkout\\Block\\Cart\\Shipping',
      ),
      'checkout_cart_shipping_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\OfflineShipping\\Model\\Plugin\\Checkout\\Block\\Cart\\Shipping',
      ),
    ),
    'Magento\\Framework\\View\\Page\\Config' => 
    array (
      'headIncludes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ThemeSampleData\\Plugin\\View\\Page\\Config',
      ),
    ),
    'Magento\\RequisitionListGraphQl\\Model\\RequisitionList\\Item\\AddItemsToRequisitionList' => 
    array (
      'processDownloadableOptionAddToList' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\DownloadableRequisitionListGraphQl\\Plugin\\AddDownloadableItemsToRequisitionList',
      ),
      'processBundleOptionsAddToList' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\BundleRequisitionListGraphQl\\Plugin\\AddBundleItemsToRequisitionList',
      ),
      'processConfigurableProductOptionsAddToList' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\ConfigurableRequisitionListGraphQl\\Plugin\\AddConfigurableItemsToRequisitionList',
      ),
      'processGiftCardOptionsAddToList' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\GiftCardRequisitionListGraphQl\\Plugin\\AddGiftCardItemsToRequisitionList',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Attribute\\RemoveProductAttributeData' => 
    array (
      'removeWeeAttributesData' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Plugin\\Catalog\\ResourceModel\\Attribute\\RemoveProductWeeData',
      ),
    ),
    'Magento\\Catalog\\Model\\Indexer\\Category\\Product\\Action\\Rows' => 
    array (
      'catalogsearchFulltextProductAssignment' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Elasticsearch\\Model\\Indexer\\Fulltext\\Plugin\\Category\\Product\\Action\\Rows',
      ),
    ),
    'Magento\\Framework\\Indexer\\Config\\DependencyInfoProvider' => 
    array (
      'indexerDependencyUpdaterPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Elasticsearch\\Model\\Indexer\\Plugin\\DependencyUpdaterPlugin',
      ),
    ),
    'Magento\\Email\\Model\\Template' => 
    array (
      'dotmailer_template_plugin' => 
      array (
        'sortOrder' => 100,
        'disabled' => false,
        'instance' => 'Dotdigitalgroup\\Email\\Plugin\\TemplatePlugin',
      ),
    ),
    'Magento\\Shipping\\Block\\DataProviders\\Tracking\\DeliveryDateTitle' => 
    array (
      'update_delivery_date_title' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Fedex\\Plugin\\Block\\DataProviders\\Tracking\\ChangeTitle',
      ),
      'ups_update_delivery_date_title' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Ups\\Plugin\\Block\\DataProviders\\Tracking\\ChangeTitle',
      ),
    ),
    'Magento\\Shipping\\Block\\Tracking\\Popup' => 
    array (
      'update_delivery_date_value' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Fedex\\Plugin\\Block\\Tracking\\PopupDeliveryDate',
      ),
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\Edit\\Index' => 
    array (
      'order_edit' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\GiftCardAccount\\Controller\\Adminhtml\\Order\\Edit\\Plugin',
      ),
    ),
    'Magento\\Company\\Controller\\Adminhtml\\Index\\Index' => 
    array (
      'shared_catalog_validate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SharedCatalog\\Plugin\\Company\\Controller\\Adminhtml\\Index\\IndexPlugin',
      ),
    ),
    'Magento\\SharedCatalog\\Model\\Repository' => 
    array (
      'ddg_b2b_shared_catalog_repository_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Dotdigitalgroup\\B2b\\Plugin\\SharedCatalogUpdatePlugin',
      ),
    ),
    'Magento\\Customer\\Model\\Customer\\Source\\GroupSourceInterface' => 
    array (
      'shared_catalogs_group' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SharedCatalog\\Plugin\\Source\\CustomerGroupPlugin',
      ),
    ),
    'Magento\\Customer\\Model\\Customer\\Attribute\\Source\\GroupSourceLoggedInOnlyInterface' => 
    array (
      'shared_catalogs_group' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SharedCatalog\\Plugin\\Source\\CustomerGroupPlugin',
      ),
    ),
    'Magento\\Customer\\Ui\\Component\\Listing\\Column\\Group\\Options' => 
    array (
      'shared_catalogs_group' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SharedCatalog\\Plugin\\Source\\CustomerGroupPlugin',
      ),
    ),
    'Magento\\CustomerSegment\\Model\\ResourceModel\\Segment\\Report\\Detail\\Group\\Option' => 
    array (
      'shared_catalogs_group' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SharedCatalog\\Plugin\\Source\\CustomerGroupReportPlugin',
      ),
    ),
    'Magento\\CatalogPermissions\\Model\\Permission' => 
    array (
      'shared_catalog_update_category_permissions' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SharedCatalog\\Plugin\\CatalogPermissions\\Model\\UpdateSharedCatalogCategoryPermissionsPlugin',
      ),
    ),
    'Magento\\CatalogPermissions\\Model\\Indexer\\Product\\IndexFiller' => 
    array (
      'shared_catalog_update_product_permissions' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SharedCatalog\\Plugin\\CatalogPermissions\\Model\\Indexer\\Product\\UpdateProductPermissionsPlugin',
      ),
    ),
    'Magento\\Catalog\\Api\\CategoryRepositoryInterface' => 
    array (
      'shared_catalog_delete_category_permissions' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SharedCatalog\\Plugin\\Catalog\\Api\\DeleteSharedCatalogCategoryPermissionsPlugin',
      ),
      'DateRangeDesignUpdateCategorySavePlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Plugin\\Api\\DateRangeDesignUpdateCategorySavePlugin',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Copier' => 
    array (
      'AssignSharedCatalogOnDuplicateProductPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SharedCatalog\\Plugin\\Catalog\\Model\\Product\\AssignSharedCatalogOnDuplicateProductPlugin',
      ),
      'copy_source_items' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalogAdminUi\\Plugin\\Catalog\\CopySourceItemsPlugin',
      ),
    ),
    'Magento\\AdvancedCheckout\\Block\\Adminhtml\\Sku\\Errors\\Grid\\Description' => 
    array (
      'shared_catalog_configure_button' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SharedCatalog\\Plugin\\AdvancedCheckout\\Block\\RenderConfigureButton',
      ),
    ),
    'Magento\\Elasticsearch\\SearchAdapter\\Aggregation\\Builder\\Term' => 
    array (
      'shared_catalog_update_elasticsearch_term_bucket_builder' => 
      array (
        'sortOrder' => 0,
        'instance' => '\\Magento\\SharedCatalog\\Plugin\\Elasticsearch\\SearchAdapter\\Aggregation\\Builder\\UpdateTermBucketBuilderPlugin',
      ),
    ),
    'Magento\\Catalog\\Api\\ProductCustomOptionRepositoryInterface' => 
    array (
      'isOptionExists' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Api\\Plugin\\ProductCustomOptionRepository',
      ),
      'vertex_custom_option_flex_field_db_handler' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\CustomOptionFlexFieldExtensionAttributeHandler',
      ),
    ),
    'Magento\\Catalog\\Model\\Indexer\\Product\\Flat\\Table\\BuilderInterface' => 
    array (
      'addRowIdToFlat' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Plugin\\Model\\Indexer\\Product\\Flat\\Table\\Builder',
      ),
    ),
    'Magento\\Catalog\\Model\\Indexer\\AbstractFlatState' => 
    array (
      'staging_flat_bypass' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Plugin\\Catalog\\Model\\Indexer\\AbstractFlatState',
      ),
    ),
    'Magento\\Catalog\\Controller\\Category\\View' => 
    array (
      'replaceIndex' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Model\\Plugin\\Controller\\View',
      ),
    ),
    'Magento\\Staging\\Model\\VersionManager' => 
    array (
      'catalogStagingVersionManager' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Plugin\\Staging\\Model\\VersionManager',
      ),
    ),
    'Magento\\GroupedProduct\\Model\\Product\\Type\\Grouped' => 
    array (
      'outOfStockFilter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GroupedCatalogInventory\\Plugin\\OutOfStockFilter',
      ),
      'grouped_product_minimum_advertised_price' => 
      array (
        'sortOrder' => 0,
        'instance' => '\\Magento\\MsrpGroupedProduct\\Plugin\\Model\\Product\\Type\\Grouped',
      ),
    ),
    'Magento\\ConfigurableProduct\\Model\\ResourceModel\\Product\\Type\\Configurable\\Product\\Collection' => 
    array (
      'catalogRulePriceForConfigurableProduct' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRuleConfigurable\\Plugin\\ConfigurableProduct\\Model\\ResourceModel\\AddCatalogRulePrice',
      ),
    ),
    'Magento\\RequisitionList\\Model\\RequisitionListItem\\SaveHandler' => 
    array (
      'aroundSaveItem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GroupedRequisitionList\\Plugin\\Model\\RequisitionListItem\\SaveHandler',
      ),
    ),
    'Magento\\RequisitionList\\Block\\Requisition\\View\\Item' => 
    array (
      'aroundGetProductUrlByItem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GroupedRequisitionList\\Plugin\\Block\\Requisition\\View\\Item',
      ),
    ),
    'Magento\\RequisitionList\\Model\\OptionsManagement' => 
    array (
      'afterGetOptions' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GroupedRequisitionList\\Plugin\\Model\\OptionsManagement',
      ),
    ),
    'Magento\\Inventory\\Model\\ResourceModel\\IsProductAssignedToStock' => 
    array (
      'cache_product_stock_assignment_check' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Inventory\\Plugin\\Inventory\\Model\\ResourceModel\\IsProductAssignedToStockCache',
      ),
    ),
    'Magento\\AdvancedCheckout\\Model\\AreProductsSalableForRequestedQty' => 
    array (
      'inventory_advanced_checkout_is_in_stock' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryAdvancedCheckout\\Plugin\\Model\\AreProductsSalablePlugin',
      ),
    ),
    'Magento\\BundleImportExport\\Model\\Import\\Product\\Type\\Bundle' => 
    array (
      'process_shipment_type_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleImportExport\\Plugin\\BundleImportExport\\Model\\Import\\Product\\Type\\Bundle\\ProcessShipmentTypePlugin',
      ),
    ),
    'Magento\\InventoryConfigurationApi\\Model\\IsSourceItemManagementAllowedForProductTypeInterface' => 
    array (
      'disable_bundle_type' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProduct\\Plugin\\InventoryConfigurationApi\\IsSourceItemManagementAllowedForProductType\\DisableBundleTypePlugin',
      ),
      'disable_grouped_type' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryGroupedProduct\\Plugin\\InventoryConfigurationApi\\IsSourceItemManagementAllowedForProductType\\DisableGroupedTypePlugin',
      ),
    ),
    'Magento\\Bundle\\Model\\ResourceModel\\Selection\\Collection' => 
    array (
      'adapt_add_quantity_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProduct\\Plugin\\Bundle\\Model\\ResourceModel\\Selection\\Collection\\AdaptAddQuantityFilterPlugin',
      ),
      'Bundle' => 
      array (
        'sortOrder' => 60,
        'instance' => 'Magento\\Bundle\\Model\\ResourceModel\\Selection\\Plugin\\Collection',
      ),
      'productCollectionPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\BundleSharedCatalog\\Plugin\\Bundle\\Model\\ResourceModel\\Selection\\CollectionPlugin',
      ),
    ),
    'Magento\\Bundle\\Api\\ProductLinkManagementInterface' => 
    array (
      'validate_source_items_before_add_bundle_selection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProduct\\Plugin\\Bundle\\Model\\LinkManagement\\ValidateSourceItemsBeforeAddBundleSelectionPlugin',
      ),
      'validate_source_items_before_save_bundle_selection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProduct\\Plugin\\Bundle\\Model\\LinkManagement\\ValidateSourceItemsBeforeSaveBundleSelectionPlugin',
      ),
      'reindex_source_items_after_add_bundle_selection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProductIndexer\\Plugin\\Bundle\\Model\\LinkManagement\\ReindexSourceItemsAfterAddBundleSelectionPlugin',
      ),
      'reindex_source_items_after_save_bundle_selection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProductIndexer\\Plugin\\Bundle\\Model\\LinkManagement\\ReindexSourceItemsAfterSaveBundleSelectionPlugin',
      ),
      'reindex_source_items_after_remove_bundle_selection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProductIndexer\\Plugin\\Bundle\\Model\\LinkManagement\\ReindexSourceItemsAfterRemoveBundleSelectionPlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Helper\\Stock' => 
    array (
      'adapt_assign_stock_status_to_bundle_product' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProduct\\Plugin\\CatalogInventory\\Helper\\Stock\\AdaptAssignStatusToProductPlugin',
      ),
      'adapt_add_in_stock_filter_to_collection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Helper\\Stock\\AdaptAddInStockFilterToCollectionPlugin',
      ),
      'adapt_add_stock_status_to_products' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Helper\\Stock\\AdaptAddStockStatusToProductsPlugin',
      ),
      'adapt_assign_status_to_product' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Helper\\Stock\\AdaptAssignStatusToProductPlugin',
      ),
    ),
    'Magento\\InventoryIndexer\\Indexer\\Stock\\Strategy\\Sync' => 
    array (
      'bundle_product_index_full' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProductIndexer\\Plugin\\InventoryIndexer\\Indexer\\Stock\\Strategy\\Sync\\ReindexFullPlugin',
      ),
      'bundle_product_index_list' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProductIndexer\\Plugin\\InventoryIndexer\\Indexer\\Stock\\Strategy\\Sync\\ReindexListPlugin',
      ),
      'update_product_prices_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\InventoryIndexer\\Indexer\\Stock\\Strategy\\Sync\\PriceIndexUpdatePlugin',
      ),
      'configurable_product_full_index' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryConfigurableProductIndexer\\Plugin\\InventoryIndexer\\Indexer\\Stock\\Strategy\\Sync\\ReindexFullPlugin',
      ),
      'configurable_product_index_list' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryConfigurableProductIndexer\\Plugin\\InventoryIndexer\\Indexer\\Stock\\Strategy\\Sync\\ReindexListPlugin',
      ),
      'grouped_product_index_list' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryGroupedProductIndexer\\Plugin\\InventoryIndexer\\Indexer\\Stock\\Strategy\\Sync\\ReindexListPlugin',
      ),
      'grouped_product_index_full' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryGroupedProductIndexer\\Plugin\\InventoryIndexer\\Indexer\\Stock\\Strategy\\Sync\\ReindexFullPlugin',
      ),
      'invalidate_products_cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCache\\Plugin\\InventoryIndexer\\Indexer\\Stock\\Strategy\\Sync\\CacheFlush',
      ),
    ),
    'Magento\\InventoryIndexer\\Indexer\\SourceItem\\Strategy\\Sync' => 
    array (
      'bundle_product_index' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProductIndexer\\Plugin\\InventoryIndexer\\Indexer\\SourceItem\\Strategy\\Sync\\SourceItemIndexerPlugin',
      ),
      'priceIndexUpdater' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\InventoryIndexer\\Indexer\\SourceItem\\Strategy\\Sync\\PriceIndexUpdater',
      ),
      'configurable_product_index' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\InventoryConfigurableProductIndexer\\Plugin\\InventoryIndexer\\Indexer\\SourceItem\\Strategy\\Sync\\SourceItemIndexerPlugin',
      ),
      'grouped_product_index' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryGroupedProductIndexer\\Plugin\\InventoryIndexer\\Indexer\\SourceItem\\Strategy\\Sync\\SourceItemIndexerPlugin',
      ),
      'invalidate_products_cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCache\\Plugin\\InventoryIndexer\\Indexer\\SourceItem\\Strategy\\Sync\\CacheFlush',
      ),
    ),
    'Magento\\InventoryApi\\Api\\StockRepositoryInterface' => 
    array (
      'prevent_default_stock_deleting' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\InventoryApi\\StockRepository\\PreventDeleting\\DefaultStockPlugin',
      ),
      'load_sales_channels_on_get_list' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\InventoryApi\\StockRepository\\LoadSalesChannelsOnGetListPlugin',
      ),
      'load_sales_channels_on_get' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\InventoryApi\\StockRepository\\LoadSalesChannelsOnGetPlugin',
      ),
      'save_sales_channels_links' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\InventorySales\\Plugin\\InventoryApi\\StockRepository\\SaveSalesChannelsLinksPlugin',
      ),
      'prevent_deleting_assigned_to_sales_channels_stock' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\InventoryApi\\StockRepository\\PreventDeletingAssignedToSalesChannelsStockPlugin',
      ),
      'add_notice_for_unassigned_sales_channels' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\InventorySalesAdminUi\\Plugin\\InventoryApi\\StockRepository\\AddNoticeForUnassignedSalesChannels',
      ),
    ),
    'Magento\\InventoryApi\\Api\\SourceItemsSaveInterface' => 
    array (
      'set_data_to_legacy_catalog_inventory_at_source_items_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\InventoryApi\\SetDataToLegacyCatalogInventoryAtSourceItemsSavePlugin',
      ),
      'reindex_after_source_items_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryIndexer\\Plugin\\InventoryApi\\ReindexAfterSourceItemsSavePlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\Indexer\\ProductPriceIndexFilter' => 
    array (
      'change_select_for_price_modifier' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Model\\Indexer\\ModifySelectInProductPriceIndexFilter',
      ),
    ),
    'Magento\\InventoryApi\\Api\\SourceItemsDeleteInterface' => 
    array (
      'set_to_zero_legacy_catalog_inventory_at_source_items_delete' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\InventoryApi\\SetToZeroLegacyCatalogInventoryAtSourceItemsDeletePlugin',
      ),
      'reindex_after_source_items_delete' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryIndexer\\Plugin\\InventoryApi\\ReindexAfterSourceItemsDeletePlugin',
      ),
      'inventory_low_quantity_notification_source_item_delete' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryLowQuantityNotification\\Plugin\\InventoryApi\\SourceItemsDeleteInterfacePlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\ResourceModel\\QtyCounterInterface' => 
    array (
      'update_source_item_at_legacy_qty_counter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\UpdateSourceItemAtLegacyQtyCounterPlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\ResourceModel\\Stock\\Item' => 
    array (
      'update_source_item_at_legacy_stock_item_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\UpdateSourceItemAtLegacyStockItemSavePlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\ResourceModel\\Stock\\Status' => 
    array (
      'adapt_add_stock_data_to_collection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Model\\ResourceModel\\Stock\\Status\\AdaptAddStockDataToCollectionPlugin',
      ),
      'adapt_add_stock_status_to_select' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Model\\ResourceModel\\Stock\\Status\\AdaptAddStockStatusToSelectPlugin',
      ),
      'adapt_add_is_in_stock_filter_to_collection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Model\\ResourceModel\\Stock\\Status\\AdaptAddIsInStockFilterToCollectionPlugin',
      ),
    ),
    'Magento\\InventorySalesApi\\Api\\GetStockBySalesChannelInterface' => 
    array (
      'adapt_stock_resolver_to_admin_website' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\InventorySalesApi\\StockResolver\\AdaptStockResolverToAdminWebsitePlugin',
      ),
    ),
    'Magento\\InventoryApi\\Api\\StockSourceLinksDeleteInterface' => 
    array (
      'prevent_delete_default_stock_links' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\InventoryApi\\StockSourceLinksDelete\\PreventDeleteDefaultStockLinksPlugin',
      ),
      'invalidate_after_stock_source_links_delete' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryIndexer\\Plugin\\InventoryApi\\InvalidateAfterStockSourceLinksDeletePlugin',
      ),
    ),
    'Magento\\Inventory\\Model\\SourceItem\\Command\\SourceItemsSaveWithoutLegacySynchronization' => 
    array (
      'set_data_to_legacy_catalog_inventory_at_source_items_save' => 
      array (
        'sortOrder' => 0,
        'disabled' => true,
      ),
    ),
    'Magento\\CatalogInventory\\Api\\StockRegistryInterface' => 
    array (
      'adapt_get_stock_status' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Api\\StockRegistry\\AdaptGetStockStatusPlugin',
      ),
      'adapt_get_stock_status_by_sku' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Api\\StockRegistry\\AdaptGetStockStatusBySkuPlugin',
      ),
      'adapt_get_product_stock_status' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Api\\StockRegistry\\AdaptGetProductStockStatusPlugin',
      ),
      'adapt_get_product_stock_status_by_sku' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Api\\StockRegistry\\AdaptGetProductStockStatusBySkuPlugin',
      ),
      'ddg_stock_update_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Dotdigitalgroup\\Email\\Plugin\\StockUpdatePlugin',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Initialization\\StockDataFilter' => 
    array (
      'allow_negative_min_qty' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\Catalog\\Controller\\Adminhtml\\Product\\Initialization\\StockDataFilter\\AllowNegativeMinQtyPlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Api\\Data\\StockItemInterface' => 
    array (
      'adapt_min_qty_to_backorders' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Api\\Data\\StockItemInterface\\AdaptMinQtyToBackordersPlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\Spi\\StockStateProviderInterface' => 
    array (
      'adapt_verify_stock_to_negative_min_qty' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Model\\Spi\\StockStateProvider\\AdaptVerifyStockToNegativeMinQtyPlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\ResourceModel\\StockStatusFilterInterface' => 
    array (
      'inventory_catalog_stock_status_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Model\\ResourceModel\\StockStatusFilterPlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Api\\StockStateInterface' => 
    array (
      'check_quote_item_qty' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\StockState\\CheckQuoteItemQtyPlugin',
      ),
      'suggest_qty' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\StockState\\SuggestQtyPlugin',
      ),
    ),
    'Magento\\InventoryReservationsApi\\Model\\AppendReservationsInterface' => 
    array (
      'prevent_append_reservation_on_not_manage_items_in_stock' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\InventoryReservationsApi\\PreventAppendReservationOnNotManageItemsInStockPlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\StockManagement' => 
    array (
      'process_back_item_qty' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\CatalogInventory\\StockManagement\\ProcessBackItemQtyPlugin',
      ),
      'process_revert_products_sale' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\CatalogInventory\\StockManagement\\ProcessRevertProductsSalePlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Api\\RegisterProductSaleInterface' => 
    array (
      'process_register_products_sale' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\CatalogInventory\\StockManagement\\ProcessRegisterProductsSalePlugin',
      ),
    ),
    'Magento\\SalesInventory\\Model\\Order\\ReturnProcessor' => 
    array (
      'process_return_product_qty_on_credit_memo' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\SalesInventory\\ProcessReturnQtyOnCreditMemoPlugin',
      ),
    ),
    'Magento\\InventoryConfigurationApi\\Api\\GetStockItemConfigurationInterface' => 
    array (
      'load_stock_item_is_in_stock' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\InventoryConfigurationApi\\GetStockItemConfiguration\\LoadIsInStockPlugin',
      ),
    ),
    'Magento\\InventorySalesApi\\Model\\GetSkuFromOrderItemInterface' => 
    array (
      'get_configurable_option_sku_from_order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryConfigurableProduct\\Plugin\\Sales\\GetSkuFromOrderItem',
      ),
    ),
    'Magento\\CatalogInventory\\Observer\\ParentItemProcessorInterface' => 
    array (
      'adapt_parent_stock_processor' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryConfigurableProduct\\Plugin\\CatalogInventory\\Observer\\ParentItemProcessor\\AdaptParentItemProcessorPlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\System\\Config\\Backend\\Minqty' => 
    array (
      'allow_negative_min_qty_in_config' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryConfiguration\\Plugin\\CatalogInventory\\Model\\System\\Config\\Backend\\Minqty\\AllowNegativeMinQtyInConfigPlugin',
      ),
    ),
    'Magento\\InventoryConfiguration\\Model\\GetLegacyStockItem' => 
    array (
      'cache_legacy_stock_item' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryConfiguration\\Plugin\\InventoryConfiguration\\Model\\GetLegacyStockItemCache',
      ),
    ),
    'Magento\\InventoryApi\\Api\\SourceRepositoryInterface' => 
    array (
      'updateSourceLatitudeAndLongitude' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\InventoryDistanceBasedSourceSelection\\Plugin\\FillSourceLatitudeAndLongitude',
      ),
      'invalidate_after_enabling_or_disabling_source' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryIndexer\\Plugin\\InventoryApi\\InvalidateAfterEnablingOrDisablingSourcePlugin',
      ),
      'load_in_store_pickup_on_get_list' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickup\\Plugin\\InventoryApi\\SourceRepository\\LoadInStorePickupOnGetListPlugin',
      ),
      'load_in_store_pickup_on_get' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickup\\Plugin\\InventoryApi\\SourceRepository\\LoadInStorePickupOnGetPlugin',
      ),
      'save_in_store_pickup_links' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickup\\Plugin\\InventoryApi\\SourceRepository\\SaveInStorePickupPlugin',
      ),
    ),
    'Magento\\InventoryApi\\Api\\StockSourceLinksSaveInterface' => 
    array (
      'invalidate_after_stock_source_links_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryIndexer\\Plugin\\InventoryApi\\InvalidateAfterStockSourceLinksSavePlugin',
      ),
    ),
    'Magento\\InventorySales\\Model\\PlaceReservationsForSalesEvent' => 
    array (
      'schedule_reservation_place' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryIndexer\\Plugin\\InventorySales\\EnqueueAfterPlaceReservationsForSalesEvent',
      ),
    ),
    'Magento\\InventoryCatalog\\Model\\UpdateInventory' => 
    array (
      'updateParentLegacyStockStatus' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryGroupedProduct\\Plugin\\InventoryCatalog\\Model\\UpdateParentStockStatusPlugin',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Link' => 
    array (
      'process_source_items_after_save_links' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryGroupedProductAdminUi\\Plugin\\Catalog\\Model\\Product\\Link\\ProcessSourceItemsAfterSaveAssociatedLinks',
      ),
    ),
    'Magento\\CatalogImportExport\\Model\\StockItemImporterInterface' => 
    array (
      'importStockItemDataForSourceItem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryImportExport\\Plugin\\Import\\SourceItemImporter',
      ),
    ),
    'Magento\\Quote\\Model\\ResourceModel\\Quote\\Address\\Collection' => 
    array (
      'add_pickup_location_to_quote_address' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\InventoryInStorePickupQuote\\Plugin\\Quote\\AddressCollection\\GetPickupLocationInformationPlugin',
      ),
    ),
    'Magento\\Quote\\Model\\ShippingAddressManagementInterface' => 
    array (
      'shipping_address_management_replace_shipping_address' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\InventoryInStorePickupQuote\\Plugin\\Quote\\ReplaceShippingAddressForShippingAddressManagement',
      ),
    ),
    'Magento\\Quote\\Api\\BillingAddressManagementInterface' => 
    array (
      'do_not_use_billing_address_for_shipping_for_in_store_pickup_quote' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\InventoryInStorePickupQuote\\Plugin\\Quote\\DoNotUseBillingAddressForShipping',
      ),
    ),
    'Magento\\Integration\\Model\\ConfigBasedIntegrationManager' => 
    array (
      'webapiSetup' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Webapi\\Model\\Plugin\\Manager',
      ),
    ),
    'Magento\\InventoryIndexer\\Model\\Queue\\UpdateIndexSalabilityStatus' => 
    array (
      'invalidate_products_cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCache\\Plugin\\InventoryIndexer\\Queue\\Reservation\\UpdateSalabilityStatus\\CacheFlush',
      ),
    ),
    'Magento\\InventoryCatalogApi\\Api\\BulkInventoryTransferInterface' => 
    array (
      'inventory_low_quantity_bulk_transfer' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryLowQuantityNotification\\Plugin\\InventoryCatalogApi\\BulkConfigurationTransferInterfacePlugin',
      ),
    ),
    'Magento\\InventoryCatalogApi\\Api\\BulkSourceAssignInterface' => 
    array (
      'inventory_low_quantity_bulk_source_assign' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryLowQuantityNotification\\Plugin\\InventoryCatalogApi\\BulkSourceAssignInterfacePlugin',
      ),
    ),
    'Magento\\InventoryCatalogApi\\Api\\BulkSourceUnassignInterface' => 
    array (
      'inventory_low_quantity_bulk_source_unassign' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryLowQuantityNotification\\Plugin\\InventoryCatalogApi\\BulkSourceUnassignInterfacePlugin',
      ),
    ),
    'Magento\\InventoryLowQuantityNotificationApi\\Api\\SourceItemConfigurationsSaveInterface' => 
    array (
      'update_legacy_stock_item_configuration_at_source_item_configuration_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryLowQuantityNotification\\Plugin\\InventoryLowQuantityNotificationApi\\UpdateLegacyStockItemConfigurationAtSourceItemConfigurationSavePlugin',
      ),
    ),
    'Magento\\Inventory\\Model\\ResourceModel\\SourceItem\\DeleteMultiple' => 
    array (
      'delete_source_items_configuration' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryLowQuantityNotification\\Plugin\\Inventory\\Model\\ResourceModel\\SourceItem\\DeleteMultiple\\DeleteSourceItemsConfigurationPlugin',
      ),
    ),
    'Magento\\ProductAlert\\Model\\ProductSalability' => 
    array (
      'product_alert_adapt_salability' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryProductAlert\\Plugin\\AdaptProductSalabilityPlugin',
      ),
    ),
    'Magento\\RequisitionList\\Model\\RequisitionListItem\\Validator\\Stock' => 
    array (
      'magentoRequisitionListStockPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryRequisitionList\\Plugin\\Model\\RequisitionListItem\\Validator\\StockPlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Block\\Stockqty\\AbstractStockqty' => 
    array (
      'magentoInventorySalesFrontendUiAbstractStockqty' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySalesFrontendUi\\Plugin\\Block\\Stockqty\\AbstractStockqtyPlugin',
      ),
    ),
    'Magento\\Setup\\Model\\FixtureGenerator\\EntityGeneratorFactory' => 
    array (
      'update_custom_table_map' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySetupFixtureGenerator\\Plugin\\Setup\\Model\\FixtureGenerator\\EntityGeneratorFactory\\UpdateCustomTableMapPlugin',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\ShipmentFactory' => 
    array (
      'assign_source_code_to_shipment' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryShipping\\Plugin\\Sales\\Shipment\\AssignSourceCodeToShipmentPlugin',
      ),
    ),
    'Magento\\Sales\\Api\\ShipmentRepositoryInterface' => 
    array (
      'GetListShipmentRepository' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryShipping\\Plugin\\Sales\\Model\\Order\\GetListShipmentRepositoryPlugin',
      ),
    ),
    'Magento\\VisualMerchandiser\\Model\\Resolver\\QuantityAndStock' => 
    array (
      'magentoVisualMerchandiserResolverQuantityAndStockPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryVisualMerchandiser\\Plugin\\Model\\Resolver\\QuantityAndStockPlugin',
      ),
    ),
    'Magento\\Backend\\Model\\Auth' => 
    array (
      'login_as_customer_admin_logout' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomer\\Plugin\\AdminLogoutPlugin',
      ),
      'security_admin_sessions_login' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Security\\Model\\Plugin\\Auth',
      ),
    ),
    'Magento\\Framework\\Api\\DataObjectHelper' => 
    array (
      'add_allow_remote_shopping_assistance_to_customer' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerGraphQl\\Plugin\\DataObjectHelperPlugin',
      ),
    ),
    'Magento\\LoginAsCustomerApi\\Api\\AuthenticateCustomerBySecretInterface' => 
    array (
      'process_shopping_cart' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerQuote\\Plugin\\LoginAsCustomerApi\\ProcessShoppingCartPlugin',
      ),
    ),
    'Magento\\MediaGalleryApi\\Api\\DeleteAssetsByPathsInterface' => 
    array (
      'remove_media_content_after_asset_is_removed_by_path' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaContent\\Plugin\\MediaGalleryAssetDeleteByPath',
      ),
      'delete_renditions_on_assets_delete' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGalleryRenditions\\Plugin\\RemoveRenditions',
      ),
    ),
    'Magento\\MediaGalleryApi\\Api\\DeleteDirectoriesByPathsInterface' => 
    array (
      'remove_media_content_after_asset_is_removed_by_directory_path' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaContent\\Plugin\\MediaGalleryAssetDeleteByDirectoryPath',
      ),
    ),
    'Magento\\MediaGallerySynchronization\\Model\\Consume' => 
    array (
      'synchronize_media_content' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaContentSynchronization\\Plugin\\SynchronizeMediaContent',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Gallery\\Processor' => 
    array (
      'media_gallery_image_remove_metadata' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGalleryCatalog\\Plugin\\Product\\Gallery\\RemoveAssetAfterRemoveImage',
      ),
    ),
    'Magento\\Cms\\Model\\Wysiwyg\\Images\\GetInsertImageContent' => 
    array (
      'set_rendition_path' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGalleryRenditions\\Plugin\\SetRenditionPath',
      ),
    ),
    'Magento\\MediaGallerySynchronizationApi\\Model\\CreateAssetFromFileInterface' => 
    array (
      'addMetadataToAssetCreatedFromFile' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGallerySynchronizationMetadata\\Plugin\\CreateAssetFromFileMetadata',
      ),
    ),
    'Magento\\Framework\\App\\MaintenanceMode' => 
    array (
      'amqp_maintenance_mode' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MessageQueue\\Model\\Plugin\\ResourceModel\\Lock',
      ),
    ),
    'Magento\\Wishlist\\Model\\Rss\\Wishlist' => 
    array (
      'aroundGetHeader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MultipleWishlist\\Model\\Plugin\\Rss\\Wishlist',
      ),
    ),
    'Magento\\MultipleWishlist\\Controller\\AbstractIndex' => 
    array (
      'multiple_enabled_filter' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\MultipleWishlist\\Controller\\Index\\Plugin',
      ),
    ),
    'Magento\\SharedCatalog\\Api\\ProductItemRepositoryInterface' => 
    array (
      'deleteItemsFromQuote' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\NegotiableQuoteSharedCatalog\\Plugin\\DeleteUnavailableQuoteItems',
      ),
      'deleteItemsFromNegotiableQuote' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\NegotiableQuoteSharedCatalog\\Plugin\\DeleteUnavailableNegotiableQuoteItems',
      ),
    ),
    'Magento\\NegotiableQuote\\Model\\Quote\\Totals' => 
    array (
      'totals_calculate_weee' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NegotiableQuoteWeee\\Plugin\\Model\\Quote\\TotalsPlugin',
      ),
    ),
    'Magento\\NegotiableQuote\\Model\\QuoteUpdatesInfo' => 
    array (
      'show_weee_attribute' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NegotiableQuoteWeee\\Plugin\\Model\\QuoteUpdatesInfoPlugin',
      ),
    ),
    'Magento\\Framework\\App\\Http' => 
    array (
      'framework-http-newrelic' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NewRelicReporting\\Plugin\\HttpPlugin',
      ),
    ),
    'Magento\\Framework\\App\\State' => 
    array (
      'framework-state-newrelic' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NewRelicReporting\\Plugin\\StatePlugin',
      ),
    ),
    'Symfony\\Component\\Console\\Command\\Command' => 
    array (
      'newrelic-describe-commands' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NewRelicReporting\\Plugin\\CommandPlugin',
      ),
    ),
    'Magento\\Framework\\Profiler\\Driver\\Standard\\Stat' => 
    array (
      'newrelic-describe-cronjobs' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NewRelicReporting\\Plugin\\StatPlugin',
      ),
    ),
    'Magento\\Newsletter\\Model\\Subscriber' => 
    array (
      'ddg_newsletter_disabler' => 
      array (
        'sortOrder' => 1,
        'disabled' => false,
        'instance' => 'Dotdigitalgroup\\Email\\Plugin\\SubscriberPlugin',
      ),
    ),
    'Magento\\CatalogWidget\\Block\\Product\\ProductsList' => 
    array (
      'pagebuilder_product_list' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageBuilder\\Plugin\\Catalog\\Block\\Product\\ProductsListPlugin',
      ),
    ),
    'Magento\\Payment\\Model\\Method\\AbstractMethod' => 
    array (
      'paymentMethodIsAvailable' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PaymentStaging\\Plugin\\Model\\Method\\PaymentMethodIsAvailable',
      ),
    ),
    'Magento\\Payment\\Model\\Method\\Adapter' => 
    array (
      'paymentGatewayIsAvailable' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PaymentStaging\\Plugin\\Model\\Method\\PaymentMethodIsAvailable',
      ),
    ),
    'Magento\\Sales\\Api\\Data\\OrderPaymentInterface' => 
    array (
      'PaymentVaultExtensionAttributeOperations' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Vault\\Plugin\\PaymentVaultAttributesLoad',
      ),
    ),
    'Magento\\Payment\\Model\\Checks\\Composite' => 
    array (
      'paypal_specification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Paypal\\Model\\Method\\Checks\\SpecificationPlugin',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Validation\\CanInvoice' => 
    array (
      'express_order_invoice' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Paypal\\Plugin\\ValidatorCanInvoice',
      ),
    ),
    'Magento\\Framework\\Session\\SessionStartChecker' => 
    array (
      'transparent_session_checker' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Paypal\\Plugin\\TransparentSessionChecker',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Payment' => 
    array (
      'paypal_transparent' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Paypal\\Plugin\\TransparentOrderPayment',
      ),
      'amazon_pay_order_payment' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Amazon\\Payment\\Plugin\\OrderCurrencyComment',
      ),
    ),
    'Magento\\NegotiableQuote\\Model\\History\\SnapshotManagement' => 
    array (
      'change_author_to_system_if_purchase_order_is_in_final_status' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PurchaseOrder\\Plugin\\NegotiableQuote\\Model\\History\\SnapshotManagement',
      ),
    ),
    'Magento\\SalesRule\\Model\\Coupon\\Quote\\UpdateCouponUsages' => 
    array (
      'purchaseOrderSalesRuleUpdateCouponUsagesPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\PurchaseOrder\\Plugin\\Quote\\Model\\UpdateCouponUsagesPlugin',
      ),
    ),
    'Magento\\CompanyCredit\\Model\\CompanyCreditPaymentConfigProvider' => 
    array (
      'purchaseOrderCompanyCreditConfigProviderPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PurchaseOrder\\Plugin\\CompanyCredit\\CompanyCreditPaymentConfigProviderPlugin',
      ),
    ),
    'Magento\\Quote\\Model\\AddressAdditionalDataProcessor' => 
    array (
      'persistent_remember_me_checkbox_processor' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Persistent\\Model\\Checkout\\AddressDataProcessorPlugin',
      ),
    ),
    'Magento\\Customer\\CustomerData\\Customer' => 
    array (
      'section_data' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Persistent\\Model\\Plugin\\CustomerData',
      ),
    ),
    'Magento\\Catalog\\Ui\\Component\\Listing\\Columns\\Price' => 
    array (
      'price-permission-grid-columns-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PricePermissions\\Ui\\Component\\Listing\\Columns\\Price\\Plugin',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Gallery\\CreateHandler' => 
    array (
      'external_video_media_entry_saver' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ProductVideo\\Model\\Plugin\\Catalog\\Product\\Gallery\\CreateHandler',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Gallery\\ReadHandler' => 
    array (
      'external_video_media_entry_reader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ProductVideo\\Model\\Plugin\\Catalog\\Product\\Gallery\\ReadHandler',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\Gallery' => 
    array (
      'external_video_media_resource_backend' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ProductVideo\\Model\\Plugin\\ExternalVideoResourceBackend',
      ),
    ),
    'Magento\\PurchaseOrder\\Model\\Customer\\Authorization\\ApproveRejectPurchaseOrder' => 
    array (
      'purchase_order_approve_reject_after_is_allowed' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PurchaseOrderRule\\Plugin\\Customer\\Authorization\\ApproveRejectPurchaseOrderPlugin',
      ),
    ),
    'Magento\\PurchaseOrder\\Model\\Customer\\Authorization\\ViewPurchaseOrder' => 
    array (
      'purchase_order_view_after_is_allowed' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PurchaseOrderRule\\Plugin\\Customer\\Authorization\\ViewPurchaseOrderPlugin',
      ),
    ),
    'Magento\\PurchaseOrder\\Model\\Notification\\Email\\ContentSource\\ApprovalRequiredAction' => 
    array (
      'purchase_order_approve_required_action_after_get_template_vars' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PurchaseOrderRule\\Plugin\\Notification\\Email\\ContentSource\\ApprovalRequiredActionPlugin',
      ),
    ),
    'Magento\\PurchaseOrder\\Model\\Notification\\Email\\ContentSource\\ApprovalAndPaymentDetailsRequiredAction' => 
    array (
      'purchase_order_approve_required_payment_details_action_after_get_template_vars' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PurchaseOrderRule\\Plugin\\Notification\\Email\\ContentSource\\ApprovalAndPaymentDetailsRequiredActionPlugin',
      ),
    ),
    'Magento\\PurchaseOrder\\Model\\PurchaseOrderManagement' => 
    array (
      'purchase_order_reject' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PurchaseOrderRule\\Plugin\\PurchaseOrderManagement',
      ),
    ),
    'Magento\\PurchaseOrder\\Block\\PurchaseOrder\\Grid' => 
    array (
      'purchase_order_grid' => 
      array (
        'sortOrder' => 0,
        'instance' => '\\Magento\\PurchaseOrderRule\\Plugin\\PurchaseOrder\\Grid',
      ),
    ),
    'Magento\\CatalogSearch\\Model\\ResourceModel\\EngineInterface' => 
    array (
      'addNotVisibleProductsToSearchIndex' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\QuickOrder\\Plugin\\CatalogSearch\\Model\\ResourceModel\\EngineInterfacePlugin',
      ),
    ),
    'Magento\\AdvancedCheckout\\Model\\Cart' => 
    array (
      'modifyCartItemsForQuickOrder' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\QuickOrder\\Plugin\\AdvancedCheckout\\ModifyAffectedItemsPlugin',
      ),
      'addExtraDataToCartItem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\QuickOrder\\Plugin\\AdvancedCheckout\\AddExtraDataToCartItemForQuickOrderPlugin',
      ),
      'setItemsQuantity' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\QuickOrder\\Plugin\\AdvancedCheckout\\SetQuantityForQuickOrderItemsPlugin',
      ),
      'prepareAddProductsBySku' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\QuickOrder\\Plugin\\AdvancedCheckout\\PrepareAddProductsBySkuPlugin',
      ),
    ),
    'Magento\\MediaStorage\\Model\\File\\Storage\\Synchronization' => 
    array (
      'remoteMedia' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\RemoteStorage\\Plugin\\MediaStorage',
      ),
    ),
    'Magento\\Framework\\Image\\Adapter\\AbstractAdapter' => 
    array (
      'remoteImageFile' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\RemoteStorage\\Plugin\\Image',
      ),
    ),
    'Magento\\ScheduledImportExport\\Model\\Scheduled\\Operation\\Data' => 
    array (
      'serverType' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\RemoteStorageCommerce\\Plugin\\ServerType',
      ),
    ),
    'Magento\\CustomerImportExport\\Model\\Import\\Customer' => 
    array (
      'rewardAttributes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Reward\\Model\\Plugin\\ImportCustomer',
      ),
    ),
    'Magento\\CustomerBalance\\Model\\Creditmemo\\Balance' => 
    array (
      'customerBalanceSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Reward\\Model\\Plugin\\CustomerBalance',
      ),
    ),
    'Magento\\SalesRule\\Model\\Rule' => 
    array (
      'salesRuleAroundSave' => 
      array (
        'sortOrder' => 500,
        'instance' => 'Magento\\AdvancedSalesRule\\Model\\Plugin\\Rule',
      ),
      'salesRuleDateResolver' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesRuleStaging\\Model\\Plugin\\DateResolverPlugin',
      ),
      'salesRuleBeforeBeforeSave' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\SalesRuleStaging\\Model\\Plugin\\Rule',
      ),
      'salesRuleConditionFieldsetIdResolver' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesRuleStaging\\Model\\Plugin\\ConditionFieldsetIdResolver',
      ),
      'salesRuleActionFieldsetIdResolver' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesRuleStaging\\Model\\Plugin\\ActionFieldsetIdResolver',
      ),
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\View\\Tab\\History' => 
    array (
      'sales-order-history-rma-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Rma\\Block\\Adminhtml\\Order\\View\\Tab\\HistoryPlugin',
      ),
    ),
    'Magento\\Rma\\Model\\RmaRepository' => 
    array (
      'authorization' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Rma\\Model\\Rma\\Plugin\\Authorization',
      ),
    ),
    'Magento\\Sales\\Model\\ResourceModel\\Provider\\UpdatedIdListProvider' => 
    array (
      'process_archive_entities' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesArchive\\Plugin\\ArchivedEntitiesProcessorPlugin',
      ),
    ),
    'Magento\\Sales\\Model\\RefundOrder' => 
    array (
      'refundOrderAfter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesInventory\\Model\\Plugin\\Order\\ReturnToStockOrder',
      ),
    ),
    'Magento\\Sales\\Model\\RefundInvoice' => 
    array (
      'refundInvoiceAfter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesInventory\\Model\\Plugin\\Order\\ReturnToStockInvoice',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Validation\\RefundOrderInterface' => 
    array (
      'refundOrderValidationAfter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesInventory\\Model\\Plugin\\Order\\Validation\\OrderRefundCreationArguments',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Validation\\RefundInvoiceInterface' => 
    array (
      'refundInvoiceValidationAfter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesInventory\\Model\\Plugin\\Order\\Validation\\InvoiceRefundCreationArguments',
      ),
    ),
    'Magento\\CatalogRule\\Model\\Rule' => 
    array (
      'catalogRuleDateResolver' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRuleStaging\\Model\\Plugin\\DateResolverPlugin',
      ),
      'addVariationsToProductRule' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRuleConfigurable\\Plugin\\CatalogRule\\Model\\Rule\\ConfigurableProductHandler',
      ),
      'configurableChildValidation' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRuleConfigurable\\Plugin\\CatalogRule\\Model\\Rule\\Validation',
      ),
      'catalogConditionFieldsetIdResolver' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRuleStaging\\Model\\Plugin\\ConditionFieldsetIdResolver',
      ),
    ),
    'Magento\\CatalogRule\\Observer\\ProcessFrontFinalPriceObserver' => 
    array (
      'previewCatalogPriceRule' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRuleStaging\\Model\\Plugin\\FinalPricePlugin',
      ),
    ),
    'Magento\\Banner\\Block\\Widget\\Banner' => 
    array (
      'additional_attributes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\BannerPageBuilder\\Plugin\\Widget\\Banner',
      ),
    ),
    'Magento\\PageBuilder\\Model\\Stage\\Renderer\\CmsStaticBlock' => 
    array (
      'dynamic_block_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\BannerPageBuilder\\Plugin\\CmsStaticBlockRenderer',
      ),
    ),
    'Magento\\Paypal\\Model\\ExpressConfigProvider' => 
    array (
      'purchase_order_paypal_express_config_urls' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PaypalPurchaseOrder\\Plugin\\Paypal\\Model\\ExpressConfigProvider',
      ),
    ),
    'Magento\\Paypal\\Controller\\Express\\AbstractExpress\\Cancel' => 
    array (
      'purchase_order_paypal_express_cancel_url' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PaypalPurchaseOrder\\Plugin\\Paypal\\Controller\\Express\\AbstractExpress\\Cancel',
      ),
    ),
    'Magento\\Paypal\\Model\\Api\\Nvp' => 
    array (
      'purchase_order_paypal_token_store' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PaypalPurchaseOrder\\Plugin\\Paypal\\Model\\Api\\NvpPlugin',
      ),
    ),
    'Magento\\Paypal\\Controller\\Express\\AbstractExpress' => 
    array (
      'purchase_order_paypal_express_abstract' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PaypalPurchaseOrder\\Plugin\\Paypal\\Controller\\Express\\AbstractExpress',
      ),
    ),
    'Magento\\CatalogGraphQl\\Model\\Resolver\\Products' => 
    array (
      'catalog_search_permissions' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissionsGraphQl\\Model\\Resolver\\Products',
      ),
    ),
    'Magento\\Company\\Model\\Company\\Save' => 
    array (
      'companyCreditCreatePlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CompanyCredit\\Plugin\\Company\\Model\\CompanyCreditCreatePlugin',
      ),
    ),
    'Magento\\Company\\Controller\\Adminhtml\\Index\\Edit' => 
    array (
      'beforeExecute' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CompanyCredit\\Plugin\\Company\\Controller\\Adminhtml\\Index\\EditPlugin',
      ),
    ),
    'Magento\\Rma\\Helper\\Eav' => 
    array (
      'removeStoreCreditResolutionOnAdminPanel' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CompanyCredit\\Plugin\\Rma\\Helper\\EavPlugin',
      ),
    ),
    'Magento\\Rma\\Block\\Form\\Renderer\\Select' => 
    array (
      'removeStoreCreditResolutionOnStorefront' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CompanyCredit\\Plugin\\Rma\\Block\\Form\\Renderer\\SelectPlugin',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\InvoiceQuantityValidator' => 
    array (
      'checkPartialInvoice' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CompanyCredit\\Plugin\\Sales\\Model\\Order\\InvoiceQuantityValidatorPlugin',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Eav\\Attribute' => 
    array (
      'save_swatches_option_params' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Model\\Plugin\\EavAttribute',
      ),
      'change_product_attribute' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRule\\Plugin\\Indexer\\Product\\Attribute',
      ),
      'invalidate_caches_after_attribute_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Plugin\\Catalog\\CacheInvalidate',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\AbstractProduct' => 
    array (
      'add_product_object_to_image_data_array' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Model\\Plugin\\ProductImage',
      ),
    ),
    'Magento\\LayeredNavigation\\Block\\Navigation\\FilterRenderer' => 
    array (
      'swatches_layered_renderer' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Magento\\Swatches\\Model\\Plugin\\FilterRenderer',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Attribute\\OptionManagement' => 
    array (
      'swatches_product_attribute_optionmanagement_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Plugin\\Eav\\Model\\Entity\\Attribute\\OptionManagement',
      ),
    ),
    'Magento\\Webapi\\Model\\ServiceMetadata' => 
    array (
      'webapiServiceMetadataAsync' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\WebapiAsync\\Plugin\\ServiceMetadata',
      ),
    ),
    'Magento\\Webapi\\Model\\Cache\\Type\\Webapi' => 
    array (
      'webapiCacheAsync' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\WebapiAsync\\Plugin\\Cache\\Webapi',
      ),
    ),
    'Magento\\Webapi\\Model\\Config\\Converter' => 
    array (
      'webapiResourceSecurity' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\WebapiSecurity\\Model\\Plugin\\AnonymousResourceSecurity',
      ),
    ),
    'Magento\\Checkout\\CustomerData\\Cart' => 
    array (
      'amazon_core_cart_section' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Amazon\\Core\\Plugin\\CartSection',
      ),
    ),
    'Magento\\Checkout\\Controller\\Cart\\Index' => 
    array (
      'amazon_login_cart_controller' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Amazon\\Login\\Plugin\\CartController',
      ),
    ),
    'Magento\\Customer\\Controller\\Account\\Login' => 
    array (
      'amazon_login_login_controller' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Amazon\\Login\\Plugin\\LoginController',
      ),
    ),
    'Magento\\Customer\\Controller\\Account\\Create' => 
    array (
      'amazon_login_create_controller' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Amazon\\Login\\Plugin\\CreateController',
      ),
    ),
    'Magento\\Sales\\Api\\OrderCustomerManagementInterface' => 
    array (
      'amazon_login_order_customer_service' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Amazon\\Login\\Plugin\\OrderCustomerManagement',
      ),
      'Ddg_CustomerManagementPlugin' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Dotdigitalgroup\\Email\\Plugin\\CustomerManagementPlugin',
      ),
    ),
    'Magento\\Quote\\Api\\Data\\PaymentInterface' => 
    array (
      'amazon_payment_additional_information' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Amazon\\Payment\\Plugin\\AdditionalInformation',
      ),
    ),
    'Amazon\\Payment\\Model\\Method\\AmazonLoginMethod' => 
    array (
      'disable_amazon_payment_method' => 
      array (
        'sortOrder' => 10,
        'disabled' => false,
        'instance' => 'Amazon\\Payment\\Plugin\\DisableAmazonPaymentMethod',
      ),
    ),
    'Magento\\Quote\\Model\\PaymentMethodManagement' => 
    array (
      'confirm_order_reference_on_payment_details_save' => 
      array (
        'sortOrder' => 10,
        'disabled' => false,
        'instance' => 'Amazon\\Payment\\Plugin\\ConfirmOrderReference',
      ),
    ),
    'Magento\\Framework\\Webapi\\ErrorProcessor' => 
    array (
      'amazon_payment_webapi_error_processor' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Amazon\\Payment\\Plugin\\WebapiErrorProcessor',
      ),
    ),
    'Magento\\Newsletter\\Controller\\Subscriber\\NewAction' => 
    array (
      'ddg_newsletter_email_capture' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Dotdigitalgroup\\Email\\Plugin\\NewsletterEmailCapturePlugin',
      ),
    ),
    'Magento\\Customer\\Model\\EmailNotificationInterface' => 
    array (
      'ddg_customer_email_disabler' => 
      array (
        'sortOrder' => 1,
        'disabled' => false,
        'instance' => 'Dotdigitalgroup\\Email\\Plugin\\CustomerEmailNotificationPlugin',
      ),
    ),
    'Magento\\Reports\\Model\\ResourceModel\\Product\\Collection' => 
    array (
      'ddg_reports_product_collection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Dotdigitalgroup\\Email\\Plugin\\ReportsProductCollectionPlugin',
      ),
    ),
    'Magento\\Framework\\Mail\\Template\\TransportBuilder' => 
    array (
      'Ddg_TransportBuilderPlugin' => 
      array (
        'sortOrder' => 1,
        'disabled' => false,
        'instance' => 'Dotdigitalgroup\\Email\\Plugin\\TransportBuilderPlugin',
      ),
      'mageplaza_mail_template_transport_builder' => 
      array (
        'sortOrder' => 1,
        'disabled' => false,
        'instance' => 'Mageplaza\\Smtp\\Mail\\Template\\TransportBuilder',
      ),
    ),
    'Magento\\Framework\\Mail\\MessageInterface' => 
    array (
      'dotmailer_message_plugin' => 
      array (
        'sortOrder' => 1,
        'disabled' => false,
        'instance' => 'Dotdigitalgroup\\Email\\Plugin\\MessagePlugin',
      ),
    ),
    'Magento\\Newsletter\\Controller\\Manage\\Index' => 
    array (
      'dotmailer_newsletter_plugin' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Dotdigitalgroup\\Email\\Plugin\\NewsletterManageIndexPlugin',
      ),
    ),
    'Magento\\UrlRewrite\\Controller\\Adminhtml\\Url\\Rewrite\\Save' => 
    array (
      'dotmailer_url_rewrite_save_plugin' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Dotdigitalgroup\\Email\\Plugin\\UrlRewriteSavePlugin',
      ),
    ),
    'Magento\\SalesRule\\Api\\CouponRepositoryInterface' => 
    array (
      'coupon_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Dotdigitalgroup\\Email\\Plugin\\CouponPlugin',
      ),
    ),
    'Magento\\SalesRule\\Model\\ResourceModel\\Coupon\\Collection' => 
    array (
      'ddg_generated_for_email_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Dotdigitalgroup\\Email\\Plugin\\CouponCollectionPlugin',
      ),
    ),
    'Magento\\SalesRule\\Model\\Utility' => 
    array (
      'ddg_coupon_expired_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Dotdigitalgroup\\Email\\Plugin\\CouponExpiredPlugin',
      ),
    ),
    'Dotdigitalgroup\\Email\\Controller\\Ajax\\Emailcapture' => 
    array (
      'ddg_chat_emailcapture_plugin' => 
      array (
        'sortOrder' => 1,
        'disabled' => false,
        'instance' => 'Dotdigitalgroup\\Chat\\Plugin\\EmailcapturePlugin',
      ),
    ),
    'Dotdigitalgroup\\Email\\Model\\Connector\\Datafield' => 
    array (
      'ddg_b2b_data_field_plugin' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Dotdigitalgroup\\B2b\\Plugin\\DataFieldPlugin',
      ),
      'ddg_enterprise_data_field_plugin' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Dotdigitalgroup\\Enterprise\\Plugin\\DataFieldPlugin',
      ),
    ),
    'Dotdigitalgroup\\Email\\Model\\Apiconnector\\CustomerDataFieldProvider' => 
    array (
      'ddg_b2b_customer_datafield_provider_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Dotdigitalgroup\\B2b\\Plugin\\CustomerDataFieldProviderPlugin',
      ),
      'ddg_enterprise_data_fields_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Dotdigitalgroup\\Enterprise\\Plugin\\CustomerDataFieldProviderPlugin',
      ),
    ),
    'Dotdigitalgroup\\Email\\Model\\Apiconnector\\Customer' => 
    array (
      'ddg_b2b_customer_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Dotdigitalgroup\\B2b\\Plugin\\CustomerPlugin',
      ),
      'ddg_enterprise_customer_plugin' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Dotdigitalgroup\\Enterprise\\Plugin\\CustomerPlugin',
      ),
    ),
    'Dotdigitalgroup\\Email\\Model\\Sync\\Catalog\\StoreCatalogSyncer' => 
    array (
      'ddg_b2b_store_catalog_syncer_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Dotdigitalgroup\\B2b\\Plugin\\StoreCatalogSyncerPlugin',
      ),
    ),
    'Dotdigitalgroup\\Email\\Model\\Product\\TierPriceFinder' => 
    array (
      'ddg_b2b_price_finder_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Dotdigitalgroup\\B2b\\Plugin\\TierPriceFinderPlugin',
      ),
    ),
    'Magento\\SharedCatalog\\Model\\ResourceModel\\ProductItem\\Price\\PriceProcessor' => 
    array (
      'ddg_b2b_shared_catalog_price_processor_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Dotdigitalgroup\\B2b\\Plugin\\SharedCatalogPriceProcessorPlugin',
      ),
    ),
    'Magento\\SharedCatalog\\Model\\ResourceModel\\ProductItem\\Price\\Consumer' => 
    array (
      'ddg_b2b_shared_catalog_price_consumer_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Dotdigitalgroup\\B2b\\Plugin\\SharedCatalogPriceConsumerPlugin',
      ),
    ),
    'Magento\\SharedCatalog\\Controller\\Adminhtml\\SharedCatalog\\Configure\\Save' => 
    array (
      'ddg_b2b_shared_catalog_save_configuration_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Dotdigitalgroup\\B2b\\Plugin\\SharedCatalogSaveConfigurationPlugin',
      ),
    ),
    'Dotdigitalgroup\\Email\\Setup\\Install\\DataMigrationTypeProvider' => 
    array (
      'ddg_b2b_data_migration_type_provider_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Dotdigitalgroup\\B2b\\Plugin\\DataMigrationTypeProviderPlugin',
      ),
    ),
    'Dotdigitalgroup\\Email\\Console\\Command\\Provider\\SyncProvider' => 
    array (
      'ddg_b2b_sync_provider_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Dotdigitalgroup\\B2b\\Plugin\\SyncProviderPlugin',
      ),
    ),
    'Magento\\SharedCatalog\\Model\\SharedCatalogBuilder' => 
    array (
      'ddg_b2b_shared_catalog_builder_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Dotdigitalgroup\\B2b\\Plugin\\SharedCatalogBuilderPlugin',
      ),
    ),
    'Magento\\SharedCatalog\\Controller\\Adminhtml\\SharedCatalog\\Company\\Assign' => 
    array (
      'ddg_b2b_shared_catalog_company_assign_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Dotdigitalgroup\\B2b\\Plugin\\SharedCatalogCompanyAssignPlugin',
      ),
    ),
    'Dotdigitalgroup\\Email\\Model\\Sync\\Importer\\ImporterQueueManager' => 
    array (
      'ddg_b2b_importer_queue_manager_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Dotdigitalgroup\\B2b\\Plugin\\ImporterQueueManagerPlugin',
      ),
    ),
    'Magento\\CustomerSegment\\Model\\ResourceModel\\Segment' => 
    array (
      'ddg_customer_segment_resource' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Dotdigitalgroup\\Enterprise\\Plugin\\SegmentPlugin',
      ),
    ),
    'Magento\\Shipping\\Controller\\Adminhtml\\Order\\Shipment\\Save' => 
    array (
      'ddg_new_shipment_plugin' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Dotdigitalgroup\\Sms\\Plugin\\Order\\Shipment\\NewShipmentPlugin',
      ),
    ),
    'Magento\\Shipping\\Controller\\Adminhtml\\Order\\Shipment\\AddTrack' => 
    array (
      'ddg_update_shipment_plugin' => 
      array (
        'sortOrder' => 3,
        'instance' => 'Dotdigitalgroup\\Sms\\Plugin\\Order\\Shipment\\ShipmentUpdatePlugin',
      ),
    ),
    'Dotdigitalgroup\\Email\\Model\\Cron\\Cleaner' => 
    array (
      'ddg_sms_cron_cleaner_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Dotdigitalgroup\\Sms\\Plugin\\CronCleanerPlugin',
      ),
    ),
    'Dotdigitalgroup\\Email\\Console\\Command\\Provider\\TaskProvider' => 
    array (
      'ddg_sms_task_provider_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Dotdigitalgroup\\Sms\\Plugin\\TaskProviderPlugin',
      ),
    ),
    'Klarna\\Core\\Helper\\KlarnaConfig' => 
    array (
      'klarnaKpKlarnaConfig' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Klarna\\Kp\\Plugin\\Helper\\KlarnaConfigPlugin',
      ),
    ),
    'Klarna\\Core\\Model\\Checkout\\Orderline\\Collector' => 
    array (
      'klarnaKpCollector' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Klarna\\Kp\\Plugin\\Model\\Checkout\\Orderline\\CollectorPlugin',
      ),
    ),
    'Magento\\Payment\\Helper\\Data' => 
    array (
      'klarnaKpPaymentData' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Klarna\\Kp\\Plugin\\Payment\\Helper\\DataPlugin',
      ),
    ),
    'Klarna\\Core\\Model\\Config' => 
    array (
      'klarnaKpConfig' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Klarna\\Kp\\Plugin\\Model\\ConfigPlugin',
      ),
    ),
    'Magento\\QuoteGraphQl\\Model\\Cart\\Payment\\AdditionalDataProviderPool' => 
    array (
      'klarnaKpGraphQlAdditionalDataProviderPool' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Klarna\\KpGraphQl\\Plugin\\Model\\Cart\\Payment\\AdditionalDataProviderPoolPlugin',
      ),
    ),
    'Magento\\QuoteGraphQl\\Model\\Resolver\\AvailablePaymentMethods' => 
    array (
      'klarnaKpGraphQlAvailablePaymentMethods' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Klarna\\KpGraphQl\\Plugin\\Model\\Resolver\\AvailablePaymentMethodsPlugin',
      ),
    ),
    'Magento\\Framework\\Mail\\Template\\TransportBuilderByStore' => 
    array (
      'mpsmtp_appTransportBuilder' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\Smtp\\Plugin\\Message',
      ),
    ),
    'Magento\\Framework\\View\\Asset\\Minification' => 
    array (
      'braintreeExcludeFromMinification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'PayPal\\Braintree\\Plugin\\ExcludeFromMinification',
      ),
    ),
    'Vertex\\Utility\\SoapClientFactory' => 
    array (
      'registerLastCreatedClient' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\SoapClientFactoryPlugin',
      ),
    ),
    'Vertex\\Utility\\ServiceActionPerformerFactory' => 
    array (
      'useObjectManager' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\ServiceActionPerformerFactoryPlugin',
      ),
    ),
    'Magento\\Sales\\Api\\OrderAddressRepositoryInterface' => 
    array (
      'extensionAttributeVertexVatCountryCode' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\VatCountryCodeAttributePlugin',
      ),
    ),
    'Magento\\Tax\\Api\\TaxCalculationInterface' => 
    array (
      'vertexTaxCalculation' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\TaxCalculationPlugin',
      ),
    ),
    'Magento\\Tax\\Model\\Sales\\Total\\Quote\\Tax' => 
    array (
      'vertexOrderLevelMap' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\TaxPlugin',
      ),
    ),
    'Magento\\CatalogStaging\\Api\\ProductStagingInterface' => 
    array (
      'vertex_commodity_code_staging' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\TaxStaging\\Model\\Plugin\\CommodityCodeExtensionAttributeProductStagingPlugin',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\ListProduct' => 
    array (
      'yotpo_yotpo_catalog_block_product_listproduct_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Yotpo\\Yotpo\\Plugin\\Catalog\\Block\\Product\\ListProduct',
      ),
    ),
    'Magento\\Review\\Block\\Product\\ReviewRenderer' => 
    array (
      'yotpo_yotpo_review_block_product_reviewrenderer_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Yotpo\\Yotpo\\Plugin\\Review\\Block\\Product\\ReviewRenderer',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\View\\Details' => 
    array (
      'yotpo_yotpo_catalog_block_product_view_details_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Yotpo\\Yotpo\\Plugin\\Catalog\\Block\\Product\\View\\Details',
      ),
    ),
    'Magento\\ConfigurableProduct\\Block\\DataProviders\\PermissionsData' => 
    array (
      'admin_gws_configurable_product_permissions_data_checker' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGwsConfigurableProduct\\Plugin\\PermissionsDataChecker',
      ),
    ),
    'Magento\\Staging\\Model\\Preview\\UrlBuilder' => 
    array (
      'admin_gws_staging_preview_url_builder' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGwsStaging\\Plugin\\PreviewUrlBuilder',
      ),
    ),
    'Magento\\Backend\\App\\AbstractAction' => 
    array (
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\Authentication',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
    ),
    'Magento\\Eav\\Model\\Adminhtml\\System\\Config\\Source\\Inputtype' => 
    array (
      'process_page_builder_input_type' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageBuilder\\Plugin\\Model\\Eav\\Adminhtml\\System\\Config\\Source\\InputtypePlugin',
      ),
      'append_compatible_input_types' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Plugin\\Eav\\System\\Config\\Source\\InputtypePlugin',
      ),
    ),
    'Magento\\Backend\\Model\\Auth\\Session' => 
    array (
      'security_admin_sessions_prolong' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Security\\Model\\Plugin\\AuthSession',
      ),
    ),
    'Magento\\Framework\\App\\Action\\Action' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'disabled' => true,
      ),
    ),
    'Magento\\Catalog\\Model\\Indexer\\Category\\Product\\Action\\Full' => 
    array (
      'invalidate_pagecache_after_full_reindex' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Model\\Indexer\\Category\\Product\\Execute',
      ),
    ),
    'Magento\\Eav\\Api\\AttributeSetRepositoryInterface' => 
    array (
      'remove_products' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Model\\AttributeSetRepository\\RemoveProducts',
      ),
    ),
    'Magento\\Catalog\\Model\\ProductLink\\Search' => 
    array (
      'processOutOfStockProducts' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogInventory\\Model\\Plugin\\ProductSearch',
      ),
    ),
    'Magento\\Customer\\Model\\Group' => 
    array (
      'reindex_after_delete_customer_group' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRule\\Plugin\\Indexer\\CustomerGroup',
      ),
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\Create\\Sidebar\\AbstractSidebar' => 
    array (
      'Bundle' => 
      array (
        'sortOrder' => 200,
        'instance' => 'Magento\\Bundle\\Block\\Adminhtml\\Order\\Create\\Sidebar',
      ),
      'configurable' => 
      array (
        'sortOrder' => 200,
        'instance' => 'Magento\\ConfigurableProduct\\Block\\Adminhtml\\Order\\Create\\Sidebar',
      ),
      'GroupedProduct' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\GroupedProduct\\Block\\Adminhtml\\Order\\Create\\Sidebar',
      ),
    ),
    'Magento\\Catalog\\Block\\Adminhtml\\Product\\Attribute\\Edit\\Tab\\Front' => 
    array (
      'search_weigh' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Block\\Plugin\\FrontTabPlugin',
      ),
    ),
    'Magento\\Backend\\Controller\\Adminhtml\\Auth\\Login' => 
    array (
      'security_login_form' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Security\\Model\\Plugin\\LoginController',
      ),
    ),
    'Magento\\User\\Model\\UserValidationRules' => 
    array (
      'user_expiration_validator' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Security\\Model\\Plugin\\UserValidationRules',
      ),
    ),
    'Magento\\User\\Block\\User\\Edit\\Tab\\Main' => 
    array (
      'user_expiration_user_form_field' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Security\\Model\\Plugin\\AdminUserForm',
      ),
    ),
    'Magento\\Catalog\\Block\\Adminhtml\\Product\\Edit\\Tab\\Attributes' => 
    array (
      'product_form_url_key_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Plugin\\Catalog\\Block\\Adminhtml\\Product\\Edit\\Tab\\Attributes',
      ),
    ),
    'Magento\\Bundle\\Block\\Adminhtml\\Catalog\\Product\\Edit\\Tab\\Attributes' => 
    array (
      'bundle_msrp_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Msrp\\Plugin\\Bundle\\Block\\Adminhtml\\Catalog\\Product\\Edit\\Tab\\Attributes',
      ),
    ),
    'Magento\\Customer\\Model\\Attribute' => 
    array (
      'validateCustomerAddressAttribute' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerCustomAttributes\\Model\\Plugin\\ValidateCustomerAddressAttribute',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Builder' => 
    array (
      'configurable' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\ConfigurableProduct\\Controller\\Adminhtml\\Product\\Builder\\Plugin',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Validator' => 
    array (
      'configurable' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Product\\Validator\\Plugin',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Invoice' => 
    array (
      'update_configurable_product_total_qty' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Plugin\\Model\\Order\\Invoice\\UpdateConfigurableProductTotalQty',
      ),
    ),
    'Magento\\Customer\\Model\\Customer\\DataProviderWithDefaultAddresses' => 
    array (
      'customerDataProvider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Company\\Plugin\\Customer\\Model\\Customer\\DataProviderPlugin',
      ),
      'login_as_customer_customer_data_provider_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerAssistance\\Plugin\\DataProviderWithDefaultAddressesPlugin',
      ),
      'ShowVertexCustomerAttributes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\CustomerDataProviderPlugin',
      ),
    ),
    'Magento\\Customer\\Model\\ResourceModel\\Grid\\Collection' => 
    array (
      'company' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Company\\Plugin\\Customer\\Model\\ResourceModel\\Grid\\CollectionPlugin',
      ),
    ),
    'Magento\\Customer\\Model\\ResourceModel\\Online\\Grid\\Collection' => 
    array (
      'onlineUserCompanyPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Company\\Plugin\\Customer\\Model\\ResourceModel\\Online\\Grid\\CollectionPlugin',
      ),
    ),
    'Magento\\Sales\\Model\\ResourceModel\\Order\\Grid\\Collection' => 
    array (
      'company' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Company\\Plugin\\Sales\\Model\\ResourceModel\\Order\\Grid\\CollectionPlugin',
      ),
      'braintreeSalesOrderGrid' => 
      array (
        'sortOrder' => 0,
        'instance' => '\\PayPal\\Braintree\\Plugin\\SalesOrderGridPlugin',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\ReservedAttributeList' => 
    array (
      'reservedAttributeListPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Company\\Plugin\\Catalog\\Model\\Product\\ReservedAttributeListPlugin',
      ),
    ),
    'Magento\\Cms\\Controller\\Adminhtml\\Page\\InlineEdit' => 
    array (
      'versionscms_cms_page_inline_edit_plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\VersionsCms\\Controller\\Adminhtml\\Cms\\Page\\InlineEdit\\Plugin',
      ),
    ),
    'Magento\\Sales\\Model\\AdminOrder\\Product\\Quote\\Initializer' => 
    array (
      'sales_adminorder_quote_initializer_plugin' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\GroupedProduct\\Model\\Sales\\AdminOrder\\Product\\Quote\\Plugin\\Initializer',
      ),
    ),
    'Magento\\Framework\\View\\TemplateEngineFactory' => 
    array (
      'debug_hints' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Developer\\Model\\TemplateEngine\\Plugin\\DebugHints',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Category\\Edit' => 
    array (
      'adminhtmlCategoryEditPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\VisualMerchandiser\\Plugin\\Catalog\\Controller\\Adminhtml\\Category\\EditPlugin',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Category\\Add' => 
    array (
      'adminhtmlCategoryAddPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\VisualMerchandiser\\Plugin\\Catalog\\Controller\\Adminhtml\\Category\\AddPlugin',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Category\\Save' => 
    array (
      'adminhtmlCategorySavePlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\VisualMerchandiser\\Plugin\\Catalog\\Controller\\Adminhtml\\Category\\SavePlugin',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\CategoryLink' => 
    array (
      'adminhtmlRankCategoryProductPositionsPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\VisualMerchandiser\\Plugin\\Catalog\\Model\\ResourceModel\\Product\\RankCategoryProductPositions',
      ),
    ),
    'Magento\\Backend\\Block\\Store\\Switcher' => 
    array (
      'entrprise_store_switcher_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Enterprise\\Model\\Plugin\\StoreSwitcher',
      ),
      'paypal_store_switcher' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Paypal\\Block\\Adminhtml\\Store\\SwitcherPlugin',
      ),
    ),
    'Magento\\Quote\\Api\\CartItemRepositoryInterface' => 
    array (
      'CartItemRepositoryPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SharedCatalog\\Plugin\\Quote\\Api\\CartItemRepositoryInterfacePlugin',
      ),
    ),
    'Magento\\Catalog\\Api\\Data\\CategoryInterface' => 
    array (
      'categoryPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\SharedCatalog\\Plugin\\Catalog\\Api\\Data\\CategoryInterfacePlugin',
      ),
    ),
    'Magento\\SalesRule\\Model\\Rule\\Metadata\\ValueProvider' => 
    array (
      'valueProviderPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SharedCatalog\\Plugin\\SalesRule\\Model\\Rule\\Metadata\\ValueProviderPlugin',
      ),
    ),
    'Magento\\Company\\Model\\ResourceModel\\Company\\Grid\\Collection' => 
    array (
      'customerGroup' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SharedCatalog\\Plugin\\Company\\Model\\ResourceModel\\Company\\Grid\\CollectionPlugin',
      ),
      'creditBalance' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CompanyCredit\\Plugin\\Company\\Model\\ResourceModel\\Company\\Grid\\CollectionPlugin',
      ),
    ),
    'Magento\\Backend\\Block\\Widget\\Grid\\Column\\Multistore' => 
    array (
      'AddCustomRendererTypes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SharedCatalog\\Plugin\\Backend\\Block\\Widget\\Grid\\Column\\Multistore\\AddCustomRendererTypes',
      ),
    ),
    'Magento\\CatalogPermissions\\Block\\Adminhtml\\Catalog\\Category\\Tab\\Permissions\\Row' => 
    array (
      'catalog_category_permissions_row_block_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SharedCatalog\\Plugin\\CatalogPermissions\\Block\\Adminhtml\\Catalog\\Category\\Tab\\Permissions\\RowPlugin',
      ),
    ),
    'Magento\\CatalogStaging\\Model\\Product\\DataProvider' => 
    array (
      'catalogStagingDataProvider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Model\\Entity\\DataProvider\\DataProviderPlugin',
      ),
    ),
    'Magento\\CatalogStaging\\Model\\Product\\Identifier\\DataProvider' => 
    array (
      'catalogStagingIdentifierDataProvider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Model\\Entity\\DataProvider\\Identifier\\DataProviderPlugin',
      ),
    ),
    'Magento\\CatalogStaging\\Model\\Category\\DataProvider' => 
    array (
      'catalogStagingCategoryDataProvider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Model\\Entity\\DataProvider\\DataProviderPlugin',
      ),
    ),
    'Magento\\CatalogStaging\\Model\\Category\\Identifier\\DataProvider' => 
    array (
      'catalogStagingCategoryDataProvider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Model\\Entity\\DataProvider\\Identifier\\DataProviderPlugin',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Category\\AggregateCount' => 
    array (
      'aggregateCountForCatalogStaging' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Plugin\\Model\\ResourceModel\\Category\\AggregateCount',
      ),
    ),
    'Magento\\Catalog\\Ui\\DataProvider\\Product\\Form\\Modifier\\Eav' => 
    array (
      'pagebuilder_product_form_eav' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\PageBuilder\\Plugin\\Catalog\\Ui\\DataProvider\\Product\\Form\\Modifier\\EavPlugin',
      ),
      'PricePermissions' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\PricePermissions\\Ui\\DataProvider\\Product\\Form\\Modifier\\Plugin\\Eav',
      ),
    ),
    'Magento\\Catalog\\Helper\\Product\\Edit\\Action\\Attribute' => 
    array (
      'catalogHelperProductAttributePlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => '\\Magento\\CatalogStaging\\Plugin\\Helper\\Product\\Edit\\Action\\Attribute',
      ),
    ),
    'Magento\\Cms\\Model\\Page\\DataProvider' => 
    array (
      'google_optimizer_cms_page_data_provider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GoogleOptimizer\\Model\\Plugin\\Cms\\Page\\DataProvider',
      ),
    ),
    'Magento\\Catalog\\Ui\\DataProvider\\Product\\Form\\NewCategoryDataProvider' => 
    array (
      'google_optimizer_product_new_category_data_provider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GoogleOptimizer\\Model\\Plugin\\Catalog\\Product\\Category\\DataProvider',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Creditmemo' => 
    array (
      'creditmemoAfterSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GoogleTagManager\\Model\\Plugin\\Creditmemo',
      ),
    ),
    'Magento\\CatalogRule\\Model\\Indexer\\Product\\ProductRuleIndexer' => 
    array (
      'productRuleReindex' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRuleConfigurable\\Plugin\\CatalogRule\\Model\\Indexer\\ProductRuleReindex',
      ),
    ),
    'Magento\\CatalogStaging\\Model\\Product\\Operation\\Update\\TemporaryUpdateProcessor' => 
    array (
      'flushAssociatedProductCache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GroupedProductStaging\\Model\\Product\\Operation\\Update\\FlushAssociatedProductCache',
      ),
    ),
    'Magento\\Bundle\\Ui\\DataProvider\\Product\\BundleDataProvider' => 
    array (
      'append_quantity_per_source' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProductAdminUi\\Plugin\\Bundle\\Ui\\DataProvider\\Product\\Form\\AddQuantityPerSourceToProductsData',
      ),
      'append_column_quantity_per_source' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProductAdminUi\\Plugin\\Bundle\\Ui\\DataProvider\\Product\\Form\\AddColumnQuantityPerSource',
      ),
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\Create\\Messages' => 
    array (
      'process_error_messages' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\Sales\\Block\\Order\\Create\\Messages\\ProcessMessagesPlugin',
      ),
    ),
    'Magento\\InventoryAdminUi\\Model\\Stock\\StockSourceLinkProcessor' => 
    array (
      'prevent_process_for_default_stock' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalogAdminUi\\Plugin\\InventoryAdminUi\\Stock\\StockSaveProcessor\\PreventProcessDefaultStockLinksPlugin',
      ),
    ),
    'Magento\\InventoryAdminUi\\Ui\\DataProvider\\SourceDataProvider' => 
    array (
      'prevent_disabling_default_source' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalogAdminUi\\Plugin\\InventoryAdminUi\\DataProvider\\PreventDisablingDefaultSourcePlugin',
      ),
      'convert_is_pickup_location_active_boolean_to_string' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\InventoryInStorePickupAdminUi\\Plugin\\Ui\\DataProvider\\ConvertBooleanToStringPlugin',
      ),
      'prevent_using_default_source_as_pickup_location_plugin' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\InventoryInStorePickupAdminUi\\Plugin\\InventoryAdminUi\\DataProvider\\PreventUsingDefaultSourceAsPickupLocationPlugin',
      ),
    ),
    'Magento\\ConfigurableProduct\\Block\\Adminhtml\\Product\\Steps\\Bulk' => 
    array (
      'adapt_configurable_wizard_bulk_block_to_msi' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryConfigurableProductAdminUi\\Plugin\\Block\\BulkStepChangeTemplate',
      ),
    ),
    'Magento\\ConfigurableProduct\\Block\\Adminhtml\\Product\\Steps\\Summary' => 
    array (
      'adapt_configurable_wizard_summary_block_to_msi' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryConfigurableProductAdminUi\\Plugin\\Block\\SummaryStepChangeTemplate',
      ),
    ),
    'Magento\\ConfigurableProduct\\Block\\Adminhtml\\Product\\Edit\\Tab\\Variations\\Config\\Matrix' => 
    array (
      'add_quantity_per_source_to_variations_matrix' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryConfigurableProductAdminUi\\Plugin\\Block\\AddQuantityPerSourceToVariationsMatrix',
      ),
    ),
    'Magento\\GroupedProduct\\Ui\\DataProvider\\Product\\GroupedProductDataProvider' => 
    array (
      'append_quantity_per_source' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\InventoryGroupedProductAdminUi\\Plugin\\Ui\\DataProvider\\Product\\Form\\AddQuantityPerSourceToProductsData',
      ),
      'append_column_quantity_per_source' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\InventoryGroupedProductAdminUi\\Plugin\\Ui\\DataProvider\\Product\\Form\\AddColumnQuantityPerSource',
      ),
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\View\\Info' => 
    array (
      'hide-edit-link' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickupSalesAdminUi\\Plugin\\Sales\\Order\\View\\ShippingAddress\\HideEditLink',
      ),
      'klarnaCoreValidationInfo' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Klarna\\Core\\Plugin\\Sales\\Block\\Adminhtml\\Order\\View\\InfoPlugin',
      ),
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\Create\\Save' => 
    array (
      'set-order-pickup-location' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickupSalesAdminUi\\Plugin\\Sales\\Controller\\AdminOrder\\Create\\SetPickupLocationFromPost',
      ),
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\View' => 
    array (
      'process_ship_button' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickupSalesAdminUi\\Plugin\\Sales\\Block\\Adminhtml\\Order\\ProcessShipButtonPlugin',
      ),
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\Invoice\\Create\\Form' => 
    array (
      'create_shipment_checkbox_processor' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickupSalesAdminUi\\Plugin\\Sales\\Block\\Adminhtml\\Order\\Invoice\\Create\\ProcessCreateShipment',
      ),
      'disallow_create_shipment_in_multi_source_mode' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryShippingAdminUi\\Plugin\\Sales\\Block\\Order\\Invoice\\Create\\DisallowCreateShipmentPlugin',
      ),
    ),
    'Magento\\Sales\\Model\\AdminOrder\\Create' => 
    array (
      'adapt_set_shipping_address_to_quote' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickupSalesAdminUi\\Plugin\\Sales\\Model\\AdminOrder\\Create\\AdaptSetShippingAddressPlugin',
      ),
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\Create\\Shipping\\Address' => 
    array (
      'process_shipping_address_form_fro_store_pickup' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickupSalesAdminUi\\Plugin\\Sales\\Block\\Adminhtml\\Order\\Create\\Shipping\\Address\\AdaptFormPlugin',
      ),
    ),
    'Magento\\Shipping\\Controller\\Adminhtml\\Order\\Shipment\\View' => 
    array (
      'shipment_tracking' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickupShippingAdminUi\\Plugin\\Shipping\\Controller\\Order\\Shipment\\View\\ShipmentTrackingPlugin',
      ),
    ),
    'Magento\\Shipping\\Block\\Adminhtml\\View' => 
    array (
      'shipment_tracking_button' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickupShippingAdminUi\\Plugin\\Shipping\\Block\\Adminhtml\\View\\ShipmentTrackingButtonPlugin',
      ),
    ),
    'Magento\\InventoryAdminUi\\Ui\\DataProvider\\StockDataProvider' => 
    array (
      'sales_channel_data' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySalesAdminUi\\Plugin\\InventoryAdminUi\\Ui\\StockDataProvider\\SalesChannels',
      ),
    ),
    'Magento\\Shipping\\Block\\Adminhtml\\Create' => 
    array (
      'back_button_url' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryShippingAdminUi\\Plugin\\Sales\\Block\\Shipment\\BackButtonUrlOnNewShipmentPagePlugin',
      ),
    ),
    'Magento\\Framework\\App\\Action\\AbstractAction' => 
    array (
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
    ),
    'Magento\\Backend\\Block\\Widget\\Button\\ToolbarInterface' => 
    array (
      'login_as_customer_button_toolbar' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerAdminUi\\Plugin\\Button\\ToolbarPlugin',
      ),
    ),
    'Magento\\Customer\\Model\\Metadata\\Form' => 
    array (
      'login_as_customer_customer_data_validate_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerAssistance\\Plugin\\CustomerDataValidatePlugin',
      ),
    ),
    'Magento\\LoginAsCustomerAdminUi\\Ui\\Customer\\Component\\Button\\DataProvider' => 
    array (
      'login_as_customer_button_data_provider_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerAssistance\\Plugin\\LoginAsCustomerButtonDataProviderPlugin',
      ),
    ),
    'Magento\\LoginAsCustomerAdminUi\\Ui\\Customer\\Component\\ConfirmationPopup\\Options' => 
    array (
      'login_as_customer_store_options_restricted_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerWebsiteRestriction\\Plugin\\StoreOptionsRestrictedPlugin',
      ),
    ),
    'Magento\\Catalog\\Model\\ImageUploader' => 
    array (
      'save_category_image' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGalleryCatalogIntegration\\Plugin\\SaveBaseCategoryImageInformation',
      ),
    ),
    'Magento\\Ui\\Component\\Form\\Element\\DataType\\Media\\OpenDialogUrl' => 
    array (
      'new_media_gallery_open_dialog_url' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGalleryIntegration\\Plugin\\NewMediaGalleryOpenDialogUrl',
      ),
    ),
    'Magento\\Framework\\File\\Uploader' => 
    array (
      'save_asset_image' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGalleryIntegration\\Plugin\\SaveImageInformation',
      ),
    ),
    'Magento\\Cms\\Block\\Adminhtml\\Wysiwyg\\Images\\Content' => 
    array (
      'add_search_button' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdobeStockImageAdminUi\\Plugin\\AddSearchButton',
      ),
    ),
    'Magento\\MediaGalleryUi\\Model\\GetDetailsByAssetId' => 
    array (
      'add_adobe_stock_image_details_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdobeStockImageAdminUi\\Plugin\\AddAdobeStockImageDetailsPlugin',
      ),
    ),
    'Magento\\MediaGalleryUi\\Ui\\Component\\Listing\\Columns\\Source\\Options' => 
    array (
      'add_adobe_stock_source_option_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdobeStockImageAdminUi\\Plugin\\AddAdobeStockSourceOptionPlugin',
      ),
    ),
    'Magento\\NegotiableQuote\\Block\\Quote\\Totals' => 
    array (
      'show_weee_attribute' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NegotiableQuoteWeee\\Plugin\\Block\\Adminhtml\\Quote\\TotalsPlugin',
      ),
    ),
    'Magento\\Banner\\Model\\Banner\\Validator' => 
    array (
      'prepare-save-data' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\BannerCustomerSegment\\Plugin\\Model\\Banner\\ValidatorPlugin',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\ImageFactory' => 
    array (
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageBuilder\\Plugin\\DesignLoader',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Attribute\\Frontend\\Inputtype\\Presentation' => 
    array (
      'process_page_builder' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageBuilder\\Plugin\\Model\\Eav\\Attribute\\PresentationPlugin',
      ),
    ),
    'Magento\\Framework\\Filter\\Template' => 
    array (
      'convertBackgroundImages' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageBuilder\\Plugin\\Filter\\TemplatePlugin',
      ),
    ),
    'Magento\\Backend\\Block\\Widget\\ContainerInterface' => 
    array (
      'admin_gws' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Model\\Block\\Container\\Plugin',
      ),
    ),
    'Magento\\Store\\Api\\WebsiteRepositoryInterface' => 
    array (
      'admin_gws_website_repository_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Model\\Plugin\\WebsiteRepository',
      ),
    ),
    'Magento\\CatalogEvent\\Block\\Adminhtml\\Catalog\\Category\\Edit\\AddEventButton' => 
    array (
      'admin_gws_category_event_buttons_limitation_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Model\\Plugin\\CategoryEventButton',
      ),
    ),
    'Magento\\User\\Controller\\Adminhtml\\User\\Role\\SaveRole' => 
    array (
      'admin_gws_save_role' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Model\\Plugin\\SaveRole',
      ),
    ),
    'Magento\\Catalog\\Ui\\Component\\Product\\MassAction' => 
    array (
      'admin_gws_massaction' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Ui\\Component\\Plugin\\Catalog\\Product\\MassAction',
      ),
    ),
    'Magento\\Catalog\\Block\\Adminhtml\\Product\\Edit\\Button\\AddAttribute' => 
    array (
      'admin_gws_add_attribute' => 
      array (
        'sortOrder' => 0,
        'instance' => '\\Magento\\AdminGws\\Block\\Adminhtml\\Plugin\\Catalog\\Product\\Edit\\Button\\AddAttribute',
      ),
    ),
    'Magento\\Catalog\\Ui\\Component\\Listing\\Columns\\ProductActions' => 
    array (
      'admin_gws_product_link' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\ProductLinkUpdater',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Edit' => 
    array (
      'admin_gws_store_switcher' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\ProductStoreSwitcherUpdater',
      ),
    ),
    'Magento\\Store\\Model\\StoreManagerInterface' => 
    array (
      'store_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\StoreFilter',
      ),
    ),
    'Magento\\Framework\\Model\\ResourceModel\\Db\\Collection\\AbstractCollection' => 
    array (
      'collection_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\CollectionFilter',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute\\Edit' => 
    array (
      'admin_gws_store_switcher_updater' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute\\StoreSwitcherUpdater',
      ),
    ),
    'Magento\\Catalog\\Block\\Adminhtml\\Product\\Edit\\Action\\Attribute' => 
    array (
      'admin_gws_attributes_block' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\Catalog\\Block\\Adminhtml\\Product\\Edit\\Action\\Attribute',
      ),
    ),
    'Magento\\SalesRule\\Model\\ResourceModel\\Rule\\Quote\\Collection' => 
    array (
      'quote_rule_collection_size_limiter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\CollectionSizeLimiter',
      ),
    ),
    'Magento\\CatalogRule\\Model\\ResourceModel\\Grid\\Collection' => 
    array (
      'catalog_rule_collection_size_limiter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\CollectionSizeLimiter',
      ),
    ),
    'Magento\\CustomerSegment\\Model\\ResourceModel\\Grid\\Collection' => 
    array (
      'customer_segment_collection_size_limiter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\CollectionSizeLimiter',
      ),
    ),
    'Magento\\Reminder\\Model\\ResourceModel\\Reminder\\Collection' => 
    array (
      'reminder_collection_size_limiter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\CollectionSizeLimiter',
      ),
    ),
    'Magento\\Authorization\\Model\\ResourceModel\\Role\\Grid\\Collection' => 
    array (
      'user_role_collection_size_limiter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\UserRoleCollectionSizeLimiter',
      ),
    ),
    'Magento\\Review\\Model\\ResourceModel\\Rating\\Grid\\Collection' => 
    array (
      'rating_collection_size_limiter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\Review\\RatingCollectionSizeLimiter',
      ),
    ),
    'Magento\\VisualMerchandiser\\Block\\Adminhtml\\Category\\Merchandiser' => 
    array (
      'admin_gws_category_products_block' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\VisualMerchandiser\\Block\\Adminhtml\\Category\\Merchandiser',
      ),
    ),
    'Magento\\VisualMerchandiser\\Block\\Adminhtml\\Category\\Merchandiser\\Grid' => 
    array (
      'admin_gws_category_products_grid' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\VisualMerchandiser\\Block\\Adminhtml\\Category\\Merchandiser\\Grid',
      ),
    ),
    'Magento\\User\\Model\\ResourceModel\\User\\Collection' => 
    array (
      'admin_user_collection_size_limiter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Model\\Plugin\\UserCollection',
      ),
    ),
    'Magento\\Review\\Block\\Adminhtml\\Rating' => 
    array (
      'rating_remove_add_button' => 
      array (
        'sortOrder' => 0,
        'instance' => '\\Magento\\AdminGws\\Plugin\\Review\\RatingRemoveAddButtonPlugin',
      ),
    ),
    'Magento\\Catalog\\Block\\Adminhtml\\Product\\Attribute\\Set\\Main' => 
    array (
      'product_attribute_set_remove_edit_buttons_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\ProductAttributeSetRemoveEditButtonsPlugin',
      ),
    ),
    'Magento\\Catalog\\Block\\Adminhtml\\Product\\Attribute\\Set\\Toolbar\\Main' => 
    array (
      'product_attribute_set_remove_add_button_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\ProductAttributeSetRemoveAddButtonPlugin',
      ),
    ),
    'Magento\\CustomerCustomAttributes\\Block\\Adminhtml\\Customer\\Attribute\\Edit' => 
    array (
      'customer_attribute_edit_remove_buttons' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\CustomerCustomAttributes\\CustomerAttributeEditRemoveButtonsPlugin',
      ),
    ),
    'Magento\\CustomerCustomAttributes\\Block\\Adminhtml\\Customer\\Address\\Attribute\\Edit' => 
    array (
      'customer_address_attribute_edit_remove_buttons' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\CustomerCustomAttributes\\CustomerAddressAttributeEditRemoveButtonsPlugin',
      ),
    ),
    'Magento\\Rma\\Block\\Adminhtml\\Rma\\Item\\Attribute\\Edit' => 
    array (
      'returns_attribute_edit_remove_buttons' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\Rma\\ReturnsAttributeEditRemoveButtonsPlugin',
      ),
    ),
    'Magento\\Config\\Model\\Config\\Structure' => 
    array (
      'paypal_system_configuration' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Paypal\\Model\\Config\\StructurePlugin',
      ),
    ),
    'Magento\\Config\\Model\\Config\\Structure\\Element\\Field' => 
    array (
      'paypal_system_configuration_field' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Paypal\\Model\\Config\\Structure\\Element\\FieldPlugin',
      ),
    ),
    'Magento\\ConfigurableProduct\\Block\\Adminhtml\\Product\\Edit\\Tab\\Variations\\Config' => 
    array (
      'Config' => 
      array (
        'sortOrder' => 82,
        'instance' => 'Magento\\PricePermissions\\Block\\Adminhtml\\ConfigurableProduct\\Product\\Edit\\Tab\\Variations\\Plugin\\Config',
      ),
    ),
    'Magento\\CatalogRule\\Block\\Adminhtml\\Promo\\Catalog' => 
    array (
      'promotion_permission' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PromotionPermissions\\Block\\Adminhtml\\Promo\\Catalog\\Plugin',
      ),
      'disable_apply_rules' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRuleStaging\\Block\\Adminhtml\\Promo\\Catalog\\Plugin',
      ),
    ),
    'Magento\\CatalogRule\\Block\\Adminhtml\\Edit\\GenericButton' => 
    array (
      'promotion_permission' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PromotionPermissions\\Block\\Adminhtml\\Promo\\Catalog\\Edit\\GenericButton\\Plugin',
      ),
    ),
    'Magento\\SalesRule\\Block\\Adminhtml\\Promo\\Quote' => 
    array (
      'promotion_permission' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PromotionPermissions\\Block\\Adminhtml\\Promo\\Quote\\Plugin',
      ),
    ),
    'Magento\\SalesRule\\Block\\Adminhtml\\Promo\\Quote\\Edit\\GenericButton' => 
    array (
      'promotion_permission' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PromotionPermissions\\Block\\Adminhtml\\Promo\\Quote\\Edit\\GenericButton\\Plugin',
      ),
    ),
    'Magento\\Reminder\\Block\\Adminhtml\\Reminder' => 
    array (
      'promotion_permission' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PromotionPermissions\\Block\\Adminhtml\\Reminder\\Plugin',
      ),
    ),
    'Magento\\Reminder\\Block\\Adminhtml\\Reminder\\Edit' => 
    array (
      'promotion_permission' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PromotionPermissions\\Block\\Adminhtml\\Reminder\\Edit\\Plugin',
      ),
    ),
    'Magento\\Rss\\Controller\\Adminhtml\\Feed\\Index' => 
    array (
      'adminAuthentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Rss\\App\\Action\\Plugin\\BackendAuthentication',
      ),
    ),
    'Magento\\SalesRuleStaging\\Model\\Rule\\FormDataProvider' => 
    array (
      'salesRuleStagingFormDataProvider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Model\\Entity\\DataProvider\\DataProviderPlugin',
      ),
    ),
    'Magento\\SalesRuleStaging\\Model\\Rule\\Identifier\\DataProvider' => 
    array (
      'salesRuleStagingPageDataProvider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Model\\Entity\\DataProvider\\Identifier\\DataProviderPlugin',
      ),
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\View\\Tab\\Invoices' => 
    array (
      'invoices_show_tab' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesArchive\\Plugin\\InvoicesSalesOrderViewTabPlugin',
      ),
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\View\\Tab\\Creditmemos' => 
    array (
      'creditmemos_show_tab' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesArchive\\Plugin\\CreditmemosSalesOrderViewTabPlugin',
      ),
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\View\\Tab\\Shipments' => 
    array (
      'shipments_show_tab' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesArchive\\Plugin\\ShipmentsSalesOrderViewTabPlugin',
      ),
    ),
    'Magento\\CatalogRuleStaging\\Model\\Rule\\DataProvider' => 
    array (
      'catalogRuleStagingDataProvider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Model\\Entity\\DataProvider\\DataProviderPlugin',
      ),
    ),
    'Magento\\CatalogRuleStaging\\Model\\Rule\\Identifier\\DataProvider' => 
    array (
      'catalogRuleStagingPageDataProvider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Model\\Entity\\DataProvider\\Identifier\\DataProviderPlugin',
      ),
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\Creditmemo\\Create\\Items' => 
    array (
      'refundButton' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CompanyCredit\\Plugin\\Sales\\Block\\Adminhtml\\Order\\Creditmemo\\Create\\ItemsPlugin',
      ),
    ),
    'Magento\\CustomerBalance\\Block\\Adminhtml\\Sales\\Order\\Creditmemo\\Controls' => 
    array (
      'hideRefundToStoreCreditField' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CompanyCredit\\Plugin\\CustomerBalance\\Block\\Adminhtml\\Sales\\Order\\Creditmemo\\ControlsPlugin',
      ),
    ),
    'Magento\\CompanyPayment\\Model\\Payment\\Checks\\CanUseForCompany' => 
    array (
      'removeCompanyCreditWhenNoCompany' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CompanyCredit\\Plugin\\Payment\\Checks\\CanUseForCompanyPlugin',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Attribute\\Save' => 
    array (
      'save_swatches_frontend_input' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Controller\\Adminhtml\\Product\\Attribute\\Plugin\\Save',
      ),
    ),
    'Magento\\Widget\\Model\\Widget' => 
    array (
      'change_widget_placeholder' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tinymce3\\Model\\Plugin\\Widget',
      ),
    ),
    'Magento\\AdminNotification\\Model\\ResourceModel\\System\\Message\\Collection\\Synchronized' => 
    array (
      'afterToArray' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AsynchronousOperations\\Model\\ResourceModel\\System\\Message\\Collection\\Synchronized\\Plugin',
      ),
    ),
    'Magento\\AdminNotification\\Ui\\Component\\DataProvider\\DataProvider' => 
    array (
      'afterGetMeta' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AsynchronousOperations\\Ui\\Component\\AdminNotification\\Plugin',
      ),
    ),
    'Magento\\Shipping\\Block\\Adminhtml\\Order\\Packaging' => 
    array (
      'usps' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Usps\\Block\\Adminhtml\\Order\\Packaging\\Plugin\\DisplayGirth',
      ),
    ),
    'Magento\\CmsStaging\\Model\\Page\\DataProvider' => 
    array (
      'cmsStagingPageDataProvider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Model\\Entity\\DataProvider\\DataProviderPlugin',
      ),
    ),
    'Magento\\CmsStaging\\Model\\Block\\DataProvider' => 
    array (
      'cmsStagingBlockDataProvider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Model\\Entity\\DataProvider\\DataProviderPlugin',
      ),
    ),
    'Magento\\CmsStaging\\Model\\Page\\Identifier\\DataProvider' => 
    array (
      'cmsStagingPageDataProvider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Model\\Entity\\DataProvider\\Identifier\\DataProviderPlugin',
      ),
    ),
    'Magento\\CmsStaging\\Model\\Block\\Identifier\\DataProvider' => 
    array (
      'cmsStagingBlockDataProvider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Model\\Entity\\DataProvider\\Identifier\\DataProviderPlugin',
      ),
    ),
    'Magento\\Cms\\Controller\\Adminhtml\\Page\\Save' => 
    array (
      'cmsstaging_page_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CmsStaging\\Controller\\Adminhtml\\Page\\Save\\Plugin',
      ),
    ),
    'Magento\\CmsStaging\\Controller\\Adminhtml\\Page\\Update\\Save' => 
    array (
      'cmsstaging_page_update_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CmsStaging\\Controller\\Adminhtml\\Page\\Update\\Save\\Plugin',
      ),
    ),
    'Magento\\Config\\Model\\Config\\Structure\\Data' => 
    array (
      'mageplaza_module_activate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\Core\\Model\\Config\\Structure\\Data',
      ),
    ),
    'Magento\\Backend\\Model\\Menu\\Builder\\AbstractCommand' => 
    array (
      'mageplaza_move_menu' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\Core\\Plugin\\MoveMenu',
      ),
    ),
    'Magento\\Config\\Model\\Config\\Structure\\Element\\Group' => 
    array (
      'ConfigGroupPlugin' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\GroupPlugin',
      ),
    ),
    'Magento\\Customer\\Model\\Customer\\DataProvider' => 
    array (
      'ShowVertexCustomerAttributes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\CustomerDataProviderPlugin',
      ),
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\Create\\Form\\Address' => 
    array (
      'vertex_addressvalidation_admin_order_form' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Vertex\\AddressValidation\\Plugin\\Adminhtml\\AddBlockToOrderCreateForm',
      ),
    ),
    'Magento\\Backend\\Block\\Dashboard\\Grids' => 
    array (
      'yotpo_yotpo_backend_block_dashboard_grids_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Yotpo\\Yotpo\\Plugin\\Backend\\Block\\Dashboard\\Grids',
      ),
    ),
  ),
  1 => 
  array (
    'CustomerGirdFilterPool' => NULL,
    'CustomerGridCollectionReporting' => NULL,
    'Magento\\Cms\\Ui\\Component\\Form\\Field\\PageLayout' => NULL,
    'Magento\\Catalog\\Ui\\DataProvider\\Product\\ProductCollectionFactory' => NULL,
    'Magento\\Catalog\\Ui\\DataProvider\\Product\\Form\\Modifier\\Pool' => NULL,
    'Magento\\Catalog\\Ui\\DataProvider\\Product\\Listing\\Modifier\\Pool' => NULL,
    'Magento\\Catalog\\Ui\\Component\\Form\\Field\\Category\\PageLayout' => NULL,
    'Magento\\CatalogSearch\\Model\\Session\\Storage' => NULL,
    'Magento\\CatalogSearch\\Model\\Session' => NULL,
    'Magento\\Catalog\\Ui\\BaseAllowedProductTypes' => NULL,
    'Magento\\Wishlist\\Model\\Session\\Storage' => NULL,
    'Magento\\Wishlist\\Model\\Session' => NULL,
    'Magento\\MediaGalleryUi\\Model\\Api\\SearchCriteria\\CollectionProcessor\\FilterProcessor' => NULL,
    'Magento\\MediaGalleryUi\\Model\\Api\\SearchCriteria\\CollectionProcessor\\SortingProcessor' => NULL,
    'Magento\\MediaGalleryUi\\Model\\Api\\SearchCriteria\\CollectionProcessor\\PaginationProcessor' => NULL,
    'Magento\\MediaGalleryUi\\Model\\Api\\SearchCriteria\\CollectionProcessor\\JoinProcessor' => NULL,
    'Magento\\MediaGalleryUi\\Model\\Api\\SearchCriteria\\CollectionProcessor' => NULL,
    'Magento\\Config\\Model\\Config\\Source\\Email\\Template\\Header' => NULL,
    'Magento\\Config\\Model\\Config\\Source\\Email\\Template\\Footer' => NULL,
    'Magento\\SharedCatalog\\Ui\\DataProvider\\Modifier\\Pool' => NULL,
    'Magento\\SharedCatalog\\Ui\\DataProvider\\Modifier\\GridPool' => NULL,
    'Magento\\SharedCatalog\\Ui\\DataProvider\\Modifier\\SharedCatalogPool' => NULL,
    'Magento\\CatalogStaging\\Block\\Adminhtml\\Update\\Upcoming' => NULL,
    'catalogStagingUpcomingGridActions' => NULL,
    'catalogStagingUpdateMetadataProvider' => NULL,
    'stagingCatalogUpdateCancelButton' => NULL,
    'stagingCatalogUpdatePreviewButton' => NULL,
    'stagingCatalogProductUpdateRemoveButton' => NULL,
    'catalogStagingBlockRemoveUpdateCancelButton' => NULL,
    'Magento\\CatalogStaging\\Ui\\DataProvider\\Product\\Form\\Modifier\\Pool' => NULL,
    'Magento\\CatalogStaging\\Ui\\DataProvider\\Product\\Form\\Modifier\\System' => NULL,
    'Magento\\CatalogStaging\\Ui\\DataProvider\\Product\\Form\\Modifier\\CustomOptions' => NULL,
    'Magento\\CatalogStaging\\Ui\\DataProvider\\Product\\Form\\Modifier\\Related' => NULL,
    'stagingCatalogCategoryUpdateMetadataProvider' => NULL,
    'stagingCatalogCategoryUpdateCancelButton' => NULL,
    'stagingCatalogCategoryRemoveUpdateCancelButton' => NULL,
    'stagingCatalogCategoryUpdatePreviewButton' => NULL,
    'stagingCatalogCategoryUpcomingGridActions' => NULL,
    'stagingCatalogCategoryUpdateRemoveButton' => NULL,
    'Magento\\CatalogStaging\\Block\\Adminhtml\\Category\\Update\\Upcoming' => NULL,
    'stagingCatalogCategoryUpcomingResult' => NULL,
    'stagingCatalogCategoryUpdateSelectResult' => NULL,
    'catalogProductAdvancedPricingModifier' => NULL,
    'categoryUpdateSaveSaveAction' => NULL,
    'categoryUpdateSaveAssignAction' => NULL,
    'categoryUpdateDeleteSaveAction' => NULL,
    'categoryUpdateDeleteAssignAction' => NULL,
    'categoryUpdateDeleteRemoveAction' => NULL,
    'categoryUpdateSave' => NULL,
    'categoryUpdateDelete' => NULL,
    'productUpdateSaveSaveAction' => NULL,
    'productUpdateSaveAssignAction' => NULL,
    'productUpdateDeleteSaveAction' => NULL,
    'productUpdateDeleteAssignAction' => NULL,
    'productUpdateDeleteRemoveAction' => NULL,
    'productUpdateSave' => NULL,
    'productUpdateDelete' => NULL,
    'Magento\\GiftMessageStaging\\Ui\\DataProvider\\Product\\Modifier\\GiftMessage' => NULL,
    'Magento\\GiftWrappingStaging\\Ui\\DataProvider\\Product\\Form\\Modifier\\GiftWrapping' => NULL,
    'Magento\\GoogleOptimizer\\Block\\Adminhtml\\Form\\CmsPage' => NULL,
    'Magento\\GoogleOptimizerStaging\\Ui\\DataProvider\\Product\\Form\\Modifier\\GoogleOptimizer' => NULL,
    'Magento\\GroupedProductStaging\\Ui\\DataProvider\\Product\\Form\\Modifier\\Grouped' => NULL,
    'Magento\\InventoryAdminUi\\Ui\\Component\\Control\\Source\\SaveSplitButton' => NULL,
    'Magento\\InventoryAdminUi\\Ui\\Component\\Control\\Stock\\SaveSplitButton' => NULL,
    'Magento\\InventoryAdminUi\\Ui\\Component\\Control\\Stock\\DeleteButton' => NULL,
    'Magento\\MediaGalleryCatalogUi\\Model\\SearchCriteria\\CollectionProcessor\\FilterProcessor\\Product' => NULL,
    'Magento\\MediaGalleryCatalogUi\\Model\\SearchCriteria\\CollectionProcessor\\FilterProcessor\\Category' => NULL,
    'Magento\\MediaGalleryCmsUi\\Model\\SearchCriteria\\CollectionProcessor\\FilterProcessor\\Page' => NULL,
    'Magento\\MediaGalleryCmsUi\\Model\\SearchCriteria\\CollectionProcessor\\FilterProcessor\\Block' => NULL,
    'Magento\\CatalogUrlRewriteStaging\\Ui\\DataProvider\\Product\\Form\\Modifier\\ProductUrlRewrite' => NULL,
    'Magento\\MsrpStaging\\Ui\\DataProvider\\Product\\Form\\Modifier\\Msrp' => NULL,
    'Magento\\PageBuilder\\Block\\Adminhtml\\ContentType\\Edit\\ModalCloseButton' => NULL,
    'AlignmentSource' => NULL,
    'Magento\\PageBuilder\\Model\\Source\\VideoAlignmentSource' => NULL,
    'TabAlignmentSource' => NULL,
    'Magento\\PageBuilder\\Model\\Source\\VerticalAlignment' => NULL,
    'AppearanceSourceBanner' => NULL,
    'AppearanceSourceBlock' => NULL,
    'AppearanceSourceButtons' => NULL,
    'AppearanceSourceButtonItem' => NULL,
    'AppearanceSourceColumn' => NULL,
    'AppearanceSourceDivider' => NULL,
    'AppearanceSourceHeading' => NULL,
    'AppearanceSourceHtml' => NULL,
    'AppearanceSourceImage' => NULL,
    'AppearanceSourceMap' => NULL,
    'AppearanceSourceProducts' => NULL,
    'AppearanceSourceRow' => NULL,
    'AppearanceSourceSlide' => NULL,
    'AppearanceSourceSlider' => NULL,
    'AppearanceSourceTabItem' => NULL,
    'AppearanceSourceTabs' => NULL,
    'AppearanceSourceText' => NULL,
    'AppearanceSourceVideo' => NULL,
    'BackgroundSizeSource' => NULL,
    'BackgroundTypeSource' => NULL,
    'CarouselModeSource' => NULL,
    'Magento\\PageBuilder\\Model\\Config\\ContentType\\AdditionalData\\Provider\\Wysiwyg\\BannerConfig' => NULL,
    'ImageMaxFileSizeDesktop' => NULL,
    'Magento\\PageBuilder\\Component\\Form\\Element\\CategoryWysiwyg' => NULL,
    'Magento\\Paypal\\Model\\Session\\Storage' => NULL,
    'Magento\\Paypal\\Model\\Session' => NULL,
    'Magento\\Paypal\\Model\\PayflowSession\\Storage' => NULL,
    'Magento\\Paypal\\Model\\PayflowSession' => NULL,
    'Magento\\ConfigurableProductStaging\\Ui\\DataProvider\\Product\\Form\\Modifier\\ConfigurablePanel' => NULL,
    'Magento\\ConfigurableProductStaging\\Ui\\DataProvider\\Product\\Form\\Modifier\\Composite' => NULL,
    'Magento\\RmaStaging\\Ui\\DataProvider\\Product\\Form\\Modifier\\Rma' => NULL,
    'salesRuleStagingUpdateMetadataProvider' => NULL,
    'Magento\\SalesRuleStaging\\Block\\Adminhtml\\Update\\Upcoming' => NULL,
    'salesRuleStagingBlockRemoveUpdateCancelButton' => NULL,
    'stagingSalesRuleUpdateCancelButton' => NULL,
    'stagingSalesRuleUpdatePreviewButton' => NULL,
    'stagingSalesRuleUpdateRemoveButton' => NULL,
    'salesRuleStagingUpcomingGridActions' => NULL,
    'stagingUpdateSalesRuleGridActions' => NULL,
    'salesRuleStagingUpdateGridActionProvider' => NULL,
    'salesRuleUpdateGridEditAction' => NULL,
    'salesRuleUpdateGridDeleteAction' => NULL,
    'ruleHydrator' => NULL,
    'ruleUpdateSaveSaveAction' => NULL,
    'ruleUpdateSaveAssignAction' => NULL,
    'ruleUpdateDeleteSaveAction' => NULL,
    'ruleUpdateDeleteAssignAction' => NULL,
    'ruleUpdateDeleteRemoveAction' => NULL,
    'ruleUpdateSave' => NULL,
    'ruleUpdateDelete' => NULL,
    'Magento\\SalesArchive\\Ui\\CreditmemoDataProvider' => NULL,
    'Magento\\SalesArchive\\Ui\\InvoiceDataProvider' => NULL,
    'Magento\\SalesArchive\\Ui\\ShipmentDataProvider' => NULL,
    'Magento\\CatalogRuleStaging\\Block\\Adminhtml\\Update\\Upcoming' => NULL,
    'catalogRuleStagingBlockRemoveUpdateCancelButton' => NULL,
    'stagingCatalogRuleUpdateCancelButton' => NULL,
    'stagingCatalogRuleUpdatePreviewButton' => NULL,
    'stagingCatalogRuleUpdateRemoveButton' => NULL,
    'catalogRuleStagingUpdateMetadataProvider' => NULL,
    'catalogRuleStagingUpcomingGridActions' => NULL,
    'stagingUpdateCatalogRuleGridActions' => NULL,
    'catalogRuleStagingUpdateGridActionProvider' => NULL,
    'catalogRuleUpdateGridEditAction' => NULL,
    'catalogRuleUpdateGridDeleteAction' => NULL,
    'Magento\\Swatches\\Block\\Adminhtml\\Product\\Attribute\\Edit\\FormFactory' => NULL,
    'stagingCmsPageUpdateMetadataProvider' => NULL,
    'stagingCmsBlockUpdateMetadataProvider' => NULL,
    'stagingCmsPageUpcomingGridActions' => NULL,
    'stagingCmsBlockUpcomingGridActions' => NULL,
    'stagingCmsPageDashboardGridActions' => NULL,
    'cmsPageStagingUpdateGridActionProvider' => NULL,
    'cmsPageUpdateGridEditAction' => NULL,
    'cmsPageUpdateGridDeleteAction' => NULL,
    'stagingCmsBlockDashboardGridActions' => NULL,
    'cmsBlockStagingUpdateGridActionProvider' => NULL,
    'cmsBlockEditUpdateGridAction' => NULL,
    'cmsBlockUpdateGridDeleteAction' => NULL,
    'stagingCmsPageUpdateCancelButton' => NULL,
    'stagingCmsPageRemoveUpdateCancelButton' => NULL,
    'stagingCmsPageUpdatePreviewButton' => NULL,
    'stagingCmsPageUpdateRemoveButton' => NULL,
    'stagingCmsBlockUpdateCancelButton' => NULL,
    'stagingCmsBlockRemoveUpdateCancelButton' => NULL,
    'stagingCmsBlockUpdatePreviewButton' => NULL,
    'stagingCmsBlockUpdateRemoveButton' => NULL,
    'Magento\\CmsStaging\\Block\\Adminhtml\\Page\\Update\\Upcoming' => NULL,
    'Magento\\CmsStaging\\Block\\Adminhtml\\Block\\Update\\Upcoming' => NULL,
    'cmsPageHydrator' => NULL,
    'cmsPageUpdateSaveSaveAction' => NULL,
    'cmsPageUpdateSaveAssignAction' => NULL,
    'cmsPageUpdateDeleteSaveAction' => NULL,
    'cmsPageUpdateDeleteAssignAction' => NULL,
    'cmsPageUpdateDeleteRemoveAction' => NULL,
    'cmsPageUpdateSave' => NULL,
    'cmsPageUpdateDelete' => NULL,
    'cmsBlockHydrator' => NULL,
    'cmsBlockUpdateSaveSaveAction' => NULL,
    'cmsBlockUpdateSaveAssignAction' => NULL,
    'cmsBlockUpdateDeleteSaveAction' => NULL,
    'cmsBlockUpdateDeleteAssignAction' => NULL,
    'cmsBlockUpdateDeleteRemoveAction' => NULL,
    'cmsBlockUpdateSave' => NULL,
    'cmsBlockUpdateDelete' => NULL,
    'Magento\\WeeeStaging\\Ui\\DataProvider\\Product\\Form\\Modifier\\Weee' => NULL,
    'Magento\\Cron\\Ui\\Model\\ResourceModel\\Schedule\\Collection' => NULL,
    'Dotdigitalgroup\\Email\\Ui\\Model\\ResourceModel\\Importer\\Collection' => NULL,
    'Dotdigitalgroup\\Email\\Ui\\Model\\ResourceModel\\Rules\\Collection' => NULL,
    'Dotdigitalgroup\\Email\\Ui\\Model\\ResourceModel\\Automation\\Collection' => NULL,
    'Dotdigitalgroup\\Email\\Ui\\Model\\ResourceModel\\Campaign\\Collection' => NULL,
    'Dotdigitalgroup\\Email\\Ui\\Model\\ResourceModel\\Contact\\Collection' => NULL,
    'Dotdigitalgroup\\Email\\Ui\\Model\\ResourceModel\\Catalog\\Collection' => NULL,
    'Dotdigitalgroup\\Email\\Ui\\Model\\ResourceModel\\Order\\Collection' => NULL,
    'Dotdigitalgroup\\Email\\Ui\\Model\\ResourceModel\\Review\\Collection' => NULL,
    'Dotdigitalgroup\\Email\\Ui\\Model\\ResourceModel\\Wishlist\\Collection' => NULL,
    'Dotdigitalgroup\\Email\\Ui\\Model\\ResourceModel\\Abandoned\\Collection' => NULL,
    'Dotdigitalgroup\\B2b\\Ui\\Model\\ResourceModel\\NegotiableQuote\\Collection' => NULL,
    'Dotdigitalgroup\\Sms\\Ui\\Model\\ResourceModel\\SmsOrder\\Collection' => NULL,
    'Magento\\Payment\\Gateway\\Request\\BuilderInterface' => NULL,
    'Magento\\Payment\\Gateway\\Request\\BuilderComposite' => NULL,
    'BraintreeAuthorizeRequest' => NULL,
    'BraintreeVaultAuthorizeRequest' => NULL,
    'Magento\\Framework\\DB\\Adapter\\AdapterInterface' => 
    array (
      'execute_commit_callbacks' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\Model\\ExecuteCommitCallbacks',
      ),
    ),
    'Laminas\\Stdlib\\MessageInterface' => NULL,
    'Laminas\\Stdlib\\Message' => NULL,
    'Laminas\\Http\\AbstractMessage' => NULL,
    'Laminas\\Stdlib\\ResponseInterface' => NULL,
    'Laminas\\Http\\Response' => NULL,
    'Laminas\\Http\\PhpEnvironment\\Response' => NULL,
    'Magento\\Framework\\App\\Response\\HttpInterface' => NULL,
    'Magento\\Framework\\App\\ResponseInterface' => NULL,
    'Magento\\Framework\\HTTP\\PhpEnvironment\\Response' => NULL,
    'Magento\\Framework\\App\\Response\\Http' => 
    array (
      'genericHeaderPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Response\\HeaderManager',
      ),
    ),
    'Magento\\Framework\\App\\ActionInterface' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
    ),
    'Magento\\Framework\\Url\\SecurityInfoInterface' => NULL,
    'Magento\\Framework\\Url\\SecurityInfo' => 
    array (
      'storeUrlSecurityInfo' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\Url\\Plugin\\SecurityInfo',
      ),
    ),
    'ArrayAccess' => NULL,
    'Magento\\Framework\\DataObject' => NULL,
    'Magento\\Framework\\Url\\RouteParamsResolverInterface' => NULL,
    'Magento\\Framework\\Url\\RouteParamsResolver' => 
    array (
      'storeUrlRouteParamsResolver' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\Url\\Plugin\\RouteParamsResolver',
      ),
    ),
    'Magento\\Framework\\Model\\AbstractModel' => NULL,
    'Magento\\Framework\\Api\\CustomAttributesDataInterface' => NULL,
    'Magento\\Framework\\Api\\ExtensibleDataInterface' => NULL,
    'Magento\\Framework\\Model\\AbstractExtensibleModel' => NULL,
    'Magento\\Framework\\App\\ScopeInterface' => NULL,
    'Magento\\Framework\\Url\\ScopeInterface' => 
    array (
      'urlSignature' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Url\\Plugin\\Signature',
      ),
    ),
    'Magento\\Framework\\DataObject\\IdentityInterface' => NULL,
    'Magento\\Store\\Api\\Data\\StoreInterface' => NULL,
    'Magento\\Store\\Model\\Store' => 
    array (
      'urlSignature' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Url\\Plugin\\Signature',
      ),
      'themeDesignConfigGridIndexerStore' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Indexer\\Design\\Config\\Plugin\\Store',
      ),
    ),
    'Magento\\Store\\Api\\StoreResolverInterface' => NULL,
    'Magento\\Store\\Model\\StoreResolver' => 
    array (
      'staging_preview_allowed_stores_check_bypass' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Plugin\\Store\\Model\\StoreResolver',
      ),
    ),
    'Magento\\Framework\\Session\\SidResolverInterface' => NULL,
    'Magento\\Framework\\Session\\SidResolver' => 
    array (
      'pagebuilder_preview_sid_resolving' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageBuilder\\Plugin\\Framework\\Session\\SidResolver',
      ),
    ),
    'Magento\\Framework\\Config\\ConverterInterface' => NULL,
    'Magento\\Framework\\App\\Config\\Initial\\Converter' => 
    array (
      'cron_system_config_initial_converter_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Cron\\Model\\System\\Config\\Initial\\Converter',
      ),
    ),
    'Magento\\Framework\\Model\\ActionValidator\\RemoveAction' => 
    array (
      'companyFrameworkModelActionValidatorRemoveAction' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Company\\Plugin\\Framework\\Model\\ActionValidator\\RemoveActionPlugin',
      ),
    ),
    'Magento\\Framework\\App\\FrontControllerInterface' => 
    array (
      'staging_preview_permissions_check' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Plugin\\Framework\\App\\FrontController',
      ),
      'default_store_setter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\FrontController\\Plugin\\DefaultStore',
      ),
      'configHash' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Deploy\\Model\\Plugin\\ConfigChangeDetector',
      ),
    ),
    'Magento\\Framework\\App\\FrontController' => 
    array (
      'staging_preview_permissions_check' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Plugin\\Framework\\App\\FrontController',
      ),
      'default_store_setter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\FrontController\\Plugin\\DefaultStore',
      ),
      'storeCookieValidate' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Store\\Model\\Plugin\\StoreCookie',
      ),
      'install' => 
      array (
        'sortOrder' => 40,
        'instance' => 'Magento\\Framework\\Module\\Plugin\\DbStatusValidator',
      ),
      'configHash' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Deploy\\Model\\Plugin\\ConfigChangeDetector',
      ),
    ),
    'Magento\\Framework\\Stdlib\\DateTime\\TimezoneInterface' => NULL,
    'Magento\\Framework\\Stdlib\\DateTime\\Timezone' => 
    array (
      'staging_datetime_timezone_bypass' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Plugin\\DateTime\\Timezone',
      ),
    ),
    'Magento\\Cms\\Model\\Wysiwyg\\Images\\Storage' => 
    array (
      'media_gallery_image_remove_metadata_after_wysiwyg' => 
      array (
        'sortOrder' => 10,
        'disabled' => false,
        'instance' => 'Magento\\MediaGallery\\Plugin\\Wysiwyg\\Images\\Storage',
      ),
    ),
    'Magento\\Theme\\Api\\DesignConfigRepositoryInterface' => NULL,
    'Magento\\Theme\\Model\\DesignConfigRepository' => 
    array (
      'save_design_settings_event_dispatching' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Design\\Config\\Plugin',
      ),
    ),
    'Magento\\Store\\Api\\Data\\WebsiteInterface' => NULL,
    'Magento\\Store\\Model\\Website' => 
    array (
      'themeDesignConfigGridIndexerWebsite' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Indexer\\Design\\Config\\Plugin\\Website',
      ),
      'reindex_customer_grid_after_website_remove' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerGridIndexAfterWebsiteDelete',
      ),
      'reindex_after_delete_website' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRule\\Plugin\\Indexer\\Website',
      ),
      'websiteDeletedNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CompanyCredit\\Plugin\\Store\\Model\\WebsitePlugin',
      ),
    ),
    'Magento\\Store\\Api\\Data\\GroupInterface' => NULL,
    'Magento\\Store\\Model\\Group' => 
    array (
      'themeDesignConfigGridIndexerStoreGroup' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Indexer\\Design\\Config\\Plugin\\StoreGroup',
      ),
    ),
    'Magento\\Config\\App\\Config\\Source\\DumpConfigSourceInterface' => NULL,
    'Magento\\Framework\\App\\Config\\ConfigSourceInterface' => NULL,
    'Magento\\Config\\App\\Config\\Source\\DumpConfigSourceAggregated' => 
    array (
      'designConfigTheme' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Theme\\Model\\Design\\Config\\Plugin\\Dump',
      ),
    ),
    'IteratorAggregate' => NULL,
    'Countable' => NULL,
    'Magento\\Framework\\Option\\ArrayInterface' => NULL,
    'Magento\\Framework\\Data\\CollectionDataSourceInterface' => NULL,
    'Traversable' => NULL,
    'Magento\\Framework\\Data\\OptionSourceInterface' => NULL,
    'Magento\\Framework\\View\\Element\\Block\\ArgumentInterface' => NULL,
    'Magento\\Framework\\Data\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
    ),
    'Magento\\Framework\\Model\\ResourceModel\\AbstractResource' => NULL,
    'Magento\\Framework\\Model\\ResourceModel\\Db\\AbstractDb' => NULL,
    'Magento\\Eav\\Model\\ResourceModel\\Entity\\Attribute' => 
    array (
      'storeLabelCaching' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Eav\\Plugin\\Model\\ResourceModel\\Entity\\Attribute',
      ),
    ),
    'Magento\\Eav\\Model\\Entity\\EntityInterface' => NULL,
    'Magento\\Eav\\Model\\ResourceModel\\Attribute\\DefaultEntityAttributes\\ProviderInterface' => NULL,
    'Magento\\Eav\\Model\\Entity\\AbstractEntity' => 
    array (
      'clean_cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Cache\\FlushCacheByTags',
      ),
    ),
    'Magento\\Framework\\Session\\SessionManagerInterface' => NULL,
    'Magento\\Framework\\Session\\SessionManager' => NULL,
    'Magento\\Customer\\Model\\Session' => 
    array (
      'staging_preview_customer_session_id_change_bypass' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Plugin\\Customer\\Model\\Session',
      ),
    ),
    'Magento\\Framework\\Data\\Collection\\AbstractDb' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
    ),
    'Magento\\Framework\\App\\ResourceConnection\\SourceProviderInterface' => NULL,
    'Magento\\Eav\\Model\\Entity\\Collection\\AbstractCollection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
    ),
    'Magento\\Eav\\Model\\Entity\\Collection\\VersionControl\\AbstractCollection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
    ),
    'Magento\\Customer\\Model\\ResourceModel\\Customer\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
      'amazon_login_customer_collection' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Amazon\\Login\\Plugin\\CustomerCollection',
      ),
    ),
    'Magento\\Customer\\Api\\CustomerRepositoryInterface' => 
    array (
      'transactionWrapper' => 
      array (
        'sortOrder' => -1,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerRepository\\TransactionWrapper',
      ),
      'companyCustomerSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Company\\Plugin\\Customer\\Api\\CustomerRepository\\Save',
      ),
      'companyCustomerDelete' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Company\\Plugin\\Customer\\Api\\CustomerRepository\\Delete',
      ),
      'companyCustomerQuery' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Company\\Plugin\\Customer\\Api\\CustomerRepository\\Query',
      ),
      'aroundCustomerSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NegotiableQuote\\Model\\Plugin\\Customer\\Model\\CustomerRepository',
      ),
      'aroundDeleteById' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NegotiableQuote\\Model\\Plugin\\Customer\\Model\\CustomerRepository',
      ),
      'login_as_customer_customer_repository_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerAssistance\\Plugin\\CustomerPlugin',
      ),
      'update_newsletter_subscription_on_customer_update' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Newsletter\\Model\\Plugin\\CustomerPlugin',
      ),
      'updateCreditHistoryAfterCustomerDelete' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CompanyCredit\\Plugin\\Customer\\Api\\CustomerRepositoryInterfacePlugin',
      ),
      'extensionAttributeVertexCustomerCode' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\CustomerRepositoryPlugin',
      ),
      'extensionAttributeVertexCustomerCountry' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\CustomerCountryAttributePlugin',
      ),
      'amazon_login_customer_repository' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Amazon\\Login\\Plugin\\CustomerRepository',
      ),
    ),
    'Magento\\Directory\\Model\\AllowedCountries' => 
    array (
      'customerAllowedCountries' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\AllowedCountries',
      ),
    ),
    'Magento\\Framework\\Event\\ObserverInterface' => NULL,
    'Magento\\PageCache\\Observer\\FlushFormKey' => 
    array (
      'customerFlushFormKey' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerFlushFormKey',
      ),
    ),
    'Magento\\Customer\\Api\\AccountManagementInterface' => NULL,
    'Magento\\Customer\\Model\\AccountManagement' => 
    array (
      'security_check_customer_password_reset_attempt' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Security\\Model\\Plugin\\AccountManagement',
      ),
      'mpsmtp_account_management' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\Smtp\\Plugin\\AccountManagement',
      ),
    ),
    'Magento\\ImportExport\\Model\\Import\\Entity\\AbstractEntity' => NULL,
    'Magento\\AdvancedPricingImportExport\\Model\\Import\\AdvancedPricing' => 
    array (
      'invalidateAdvancedPriceIndexerOnImport' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdvancedPricingImportExport\\Model\\Indexer\\Product\\Price\\Plugin\\Import',
      ),
    ),
    'Magento\\Framework\\MessageQueue\\Consumer\\Config\\ReaderInterface' => NULL,
    'Magento\\Framework\\Config\\ReaderInterface' => NULL,
    'Magento\\Framework\\MessageQueue\\Consumer\\Config\\CompositeReader' => 
    array (
      'queueConfigPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\MessageQueue\\Config\\Consumer\\ConfigReaderPlugin',
      ),
    ),
    'Magento\\Framework\\MessageQueue\\Publisher\\Config\\ReaderInterface' => NULL,
    'Magento\\Framework\\MessageQueue\\Publisher\\Config\\CompositeReader' => 
    array (
      'queueConfigPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\MessageQueue\\Config\\Publisher\\ConfigReaderPlugin',
      ),
    ),
    'Magento\\Framework\\MessageQueue\\Topology\\Config\\ReaderInterface' => NULL,
    'Magento\\Framework\\MessageQueue\\Topology\\Config\\CompositeReader' => 
    array (
      'queueConfigPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\MessageQueue\\Config\\Topology\\ConfigReaderPlugin',
      ),
    ),
    'Magento\\Framework\\MessageQueue\\Bulk\\ExchangeInterface' => NULL,
    'Magento\\Framework\\Amqp\\Bulk\\Exchange' => 
    array (
      'amqpStoreIdFieldForAmqpBulkExchange' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AmqpStore\\Plugin\\Framework\\Amqp\\Bulk\\Exchange',
      ),
    ),
    'Magento\\AsynchronousOperations\\Model\\MassConsumerEnvelopeCallback' => 
    array (
      'amqpStoreIdFieldForAsynchronousOperationsMassConsumerEnvelopeCallback' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AmqpStore\\Plugin\\AsynchronousOperations\\MassConsumerEnvelopeCallback',
      ),
    ),
    'Magento\\Framework\\App\\Config\\ValueInterface' => NULL,
    'Magento\\Framework\\App\\Config\\Value' => 
    array (
      'admin_system_config_media_gallery_renditions' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGalleryRenditions\\Plugin\\UpdateRenditionsOnConfigChange',
      ),
      'admin_system_config_adobe_stock_save_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGallerySynchronization\\Plugin\\MediaGallerySyncTrigger',
      ),
      'webapiResourceSecurityCacheInvalidate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\WebapiSecurity\\Model\\Plugin\\CacheInvalidator',
      ),
    ),
    'Magento\\Authorization\\Model\\Role' => 
    array (
      'updateRoleUsersAcl' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\User\\Model\\Plugin\\AuthorizationRole',
      ),
    ),
    'Magento\\Framework\\Indexer\\IndexerInterface' => NULL,
    'Magento\\Indexer\\Model\\Indexer' => 
    array (
      'reindexRow' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Helper\\Indexer',
      ),
    ),
    'Magento\\Framework\\Config\\DataInterface' => NULL,
    'Magento\\Framework\\Config\\Data' => NULL,
    'Magento\\Indexer\\Model\\Config\\Data' => 
    array (
      'indexerCategoryFlatConfigGet' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Category\\Flat\\Plugin\\IndexerConfigData',
      ),
      'indexerProductFlatConfigGet' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Product\\Flat\\Plugin\\IndexerConfigData',
      ),
      'catalogPermissionsIndexerConfigGet' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Model\\Indexer\\Plugin\\IndexerConfigData',
      ),
    ),
    'Magento\\Indexer\\Model\\Processor' => 
    array (
      'page-cache-indexer-reindex-clean-cache' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Indexer\\Model\\Processor\\CleanCache',
      ),
    ),
    'Magento\\Framework\\Indexer\\ActionInterface' => 
    array (
      'cache_cleaner_after_reindex' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Indexer\\Model\\Indexer\\CacheCleaner',
      ),
    ),
    'Magento\\Framework\\Model\\ResourceModel\\Db\\Collection\\AbstractCollection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
      'collection_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\CollectionFilter',
      ),
    ),
    'Magento\\Cms\\Model\\ResourceModel\\AbstractCollection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
      'collection_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\CollectionFilter',
      ),
    ),
    'Magento\\Cms\\Model\\ResourceModel\\Page\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
      'collection_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\CollectionFilter',
      ),
    ),
    'Magento\\Framework\\Api\\Search\\SearchResultInterface' => NULL,
    'Magento\\Framework\\Api\\SearchResultsInterface' => NULL,
    'Magento\\Cms\\Model\\ResourceModel\\Page\\Grid\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
      'collection_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\CollectionFilter',
      ),
      'setStagingFlagCmsPageUpdate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CmsStaging\\Model\\ResourceModel\\Grid\\Collection\\UpdatePlugin',
      ),
    ),
    'Magento\\Cms\\Model\\ResourceModel\\Block\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
      'collection_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\CollectionFilter',
      ),
    ),
    'Magento\\Cms\\Model\\ResourceModel\\Block\\Grid\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
      'collection_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\CollectionFilter',
      ),
      'setStagingFlagCmsBlockUpdate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CmsStaging\\Model\\ResourceModel\\Grid\\Collection\\UpdatePlugin',
      ),
    ),
    'Magento\\Framework\\View\\Element\\UiComponent\\DataProvider\\DataProviderInterface' => NULL,
    'Magento\\Framework\\View\\Element\\UiComponent\\DataProvider\\DataProvider' => NULL,
    'Magento\\Cms\\Ui\\Component\\DataProvider' => 
    array (
      'filterCmsPageAndBlockUpdate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CmsStaging\\Ui\\Component\\DataProvider\\UpdatePlugin',
      ),
    ),
    'Magento\\Catalog\\Model\\AbstractModel' => NULL,
    'Magento\\Framework\\Pricing\\SaleableInterface' => NULL,
    'Magento\\Catalog\\Api\\Data\\ProductInterface' => NULL,
    'Magento\\Catalog\\Model\\Product' => 
    array (
      'catalogInventoryAfterLoad' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogInventory\\Model\\Plugin\\AfterProductLoad',
      ),
      'product_identities_extender' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Plugin\\ProductIdentitiesExtender',
      ),
      'catalogPermissionsProductChange' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Model\\Indexer\\Plugin\\Product',
      ),
      'shared_catalogs_model_product' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SharedCatalog\\Plugin\\UpdateItemsSku',
      ),
      'exclude_swatch_attribute' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Model\\Plugin\\Product',
      ),
      'cms' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Cms\\Model\\Plugin\\Product',
      ),
      'add_bundle_parent_identities' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Bundle\\Model\\Plugin\\ProductIdentitiesExtender',
      ),
    ),
    'Magento\\Customer\\Model\\ResourceModel\\Visitor' => 
    array (
      'catalogLog' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Plugin\\Log',
      ),
      'reportLog' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Reports\\Model\\Plugin\\Log',
      ),
    ),
    'Magento\\Ui\\DataProvider\\AbstractDataProvider' => NULL,
    'Magento\\Ui\\DataProvider\\ModifierPoolDataProvider' => NULL,
    'Magento\\Catalog\\Model\\Category\\DataProvider' => 
    array (
      'set_page_layout_default_value' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Plugin\\SetPageLayoutDefaultValue',
      ),
      'catalogCategoryDataProviderTrimData' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Plugin\\Catalog\\Model\\Category\\DataProvider\\TrimData',
      ),
      'category_ui_form_url_key_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Plugin\\Catalog\\Block\\Adminhtml\\Category\\Tab\\Attributes',
      ),
      'catalog_permissions_category_data_provider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Model\\Plugin\\Catalog\\Category\\DataProvider',
      ),
      'google_optimizer_category_data_provider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GoogleOptimizer\\Model\\Plugin\\Catalog\\Category\\DataProvider',
      ),
    ),
    'Magento\\Framework\\View\\Element\\BlockInterface' => NULL,
    'Magento\\Framework\\View\\Element\\AbstractBlock' => NULL,
    'Magento\\Framework\\View\\Element\\Template' => NULL,
    'Magento\\Theme\\Block\\Html\\Topmenu' => 
    array (
      'catalogTopmenu' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Block\\Topmenu',
      ),
      'catalogPermissionsCachingTopmenu' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Model\\Plugin\\Theme\\Block\\Html\\Topmenu',
      ),
    ),
    'Magento\\Framework\\Mview\\View\\StateInterface' => 
    array (
      'setStatusForMview' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Category\\Product\\Plugin\\MviewState',
      ),
      'catalogPermissionsIndexerSetStatusForMview' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Model\\Indexer\\Plugin\\MviewState',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Collection\\AbstractCollection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
      'joinProductsWhenFlatEnabled' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Model\\Plugin\\ResourceModel\\Product\\JoinProductsWhenFlatEnabled',
      ),
      'joinAttribute' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Model\\Plugin\\ResourceModel\\Product\\Collection',
      ),
    ),
    'Magento\\Store\\Model\\ResourceModel\\Website' => 
    array (
      'invalidatePriceIndexerOnWebsite' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Product\\Price\\Plugin\\Website',
      ),
      'categoryProductWebsiteAfterDelete' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Category\\Product\\Plugin\\Website',
      ),
      'assign_website_to_default_stock' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\Store\\Model\\ResourceModel\\Website\\AssignWebsiteToDefaultStockPlugin',
      ),
      'delete_website_to_stock_link' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\Store\\Model\\ResourceModel\\Website\\DeleteWebsiteToStockLinkPlugin',
      ),
      'update_sales_channel_website_code' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\Store\\Model\\ResourceModel\\Website\\UpdateSalesChannelWebsiteCodePlugin',
      ),
    ),
    'Magento\\Store\\Model\\ResourceModel\\Store' => 
    array (
      'storeViewResourceAroundSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Category\\Flat\\Plugin\\StoreView',
      ),
      'catalogProductFlatIndexerStore' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Product\\Flat\\Plugin\\Store',
      ),
      'categoryStoreAroundSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Category\\Product\\Plugin\\StoreView',
      ),
      'productAttributesStoreViewSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Product\\Eav\\Plugin\\StoreView',
      ),
      'catalogsearchFulltextIndexerStoreView' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Plugin\\Store\\View',
      ),
      'invalidateTargetRuleOnStoreViewChange' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\TargetRule\\Model\\Indexer\\TargetRule\\Plugin\\Store',
      ),
      'catalogPermissionsIndexerStoreView' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Model\\Indexer\\Plugin\\Store\\View',
      ),
      'store_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Model\\Category\\Plugin\\Store\\View',
      ),
      'update_cms_url_rewrites_after_store_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CmsUrlRewrite\\Plugin\\Cms\\Model\\Store\\View',
      ),
    ),
    'Magento\\Store\\Model\\ResourceModel\\Group' => 
    array (
      'storeGroupResourceAroundSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Category\\Flat\\Plugin\\StoreGroup',
      ),
      'catalogProductFlatIndexerStoreGroup' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Product\\Flat\\Plugin\\StoreGroup',
      ),
      'categoryStoreGroupAroundSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Category\\Product\\Plugin\\StoreGroup',
      ),
      'storeGroupResourceAroundBeforeSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogInventory\\Model\\Indexer\\Stock\\Plugin\\StoreGroup',
      ),
      'catalogsearchFulltextIndexerStoreGroup' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Plugin\\Store\\Group',
      ),
      'invalidateTargetRuleOnStoreGroupChange' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\TargetRule\\Model\\Indexer\\TargetRule\\Plugin\\StoreGroup',
      ),
      'catalogPermissionsIndexerStoreGroup' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Model\\Indexer\\Plugin\\Store\\Group',
      ),
      'group_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Model\\Category\\Plugin\\Store\\Group',
      ),
    ),
    'Magento\\Customer\\Api\\GroupRepositoryInterface' => 
    array (
      'invalidatePriceIndexerOnCustomerGroup' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Product\\Price\\Plugin\\CustomerGroup',
      ),
      'customerGroupEdit' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Model\\Indexer\\Plugin\\GroupRepository',
      ),
      'groupRepositoryPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Company\\Plugin\\Customer\\Api\\ReassignCompaniesToDefaultGroup',
      ),
      'updateCompanyCustomerGroupPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SharedCatalog\\Plugin\\Customer\\Api\\UpdateCompanyCustomerGroupPlugin',
      ),
      'validateCustomerGroupDeletePlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SharedCatalog\\Plugin\\Customer\\Api\\ValidateCustomerGroupDeletePlugin',
      ),
      'updateSharedCatalogNamePlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SharedCatalog\\Plugin\\Customer\\Api\\UpdateSharedCatalogNamePlugin',
      ),
    ),
    'Magento\\Eav\\Api\\Data\\AttributeSetInterface' => NULL,
    'Magento\\Eav\\Model\\Entity\\Attribute\\Set' => 
    array (
      'invalidateEavIndexerOnAttributeSetSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Indexer\\Product\\Eav\\Plugin\\AttributeSet',
      ),
      'invalidateTargetRuleOnDeleteAttributeSet' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\TargetRule\\Model\\Indexer\\TargetRule\\Plugin\\AttributeSet',
      ),
    ),
    'Magento\\Framework\\App\\Helper\\AbstractHelper' => NULL,
    'Magento\\Catalog\\Helper\\Product\\Flat\\Indexer' => 
    array (
      'addRowIdToFlatDefinition' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Plugin\\Helper\\Product\\Flat\\FlatColumnsDefinition',
      ),
      'addRowIdToIndex' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Plugin\\Helper\\Product\\Flat\\FlatIndexes',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\TypeTransitionManager' => 
    array (
      'downloadable_product_transition' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Downloadable\\Model\\Product\\TypeTransitionManager\\Plugin\\Downloadable',
      ),
      'configurable_product_transition' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Product\\TypeTransitionManager\\Plugin\\Configurable',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\Config\\Backend\\AbstractValue' => 
    array (
      'admin_system_config_media_gallery_renditions' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGalleryRenditions\\Plugin\\UpdateRenditionsOnConfigChange',
      ),
      'admin_system_config_adobe_stock_save_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGallerySynchronization\\Plugin\\MediaGallerySyncTrigger',
      ),
      'webapiResourceSecurityCacheInvalidate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\WebapiSecurity\\Model\\Plugin\\CacheInvalidator',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\Config\\Backend\\ShowOutOfStock' => 
    array (
      'admin_system_config_media_gallery_renditions' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGalleryRenditions\\Plugin\\UpdateRenditionsOnConfigChange',
      ),
      'admin_system_config_adobe_stock_save_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGallerySynchronization\\Plugin\\MediaGallerySyncTrigger',
      ),
      'webapiResourceSecurityCacheInvalidate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\WebapiSecurity\\Model\\Plugin\\CacheInvalidator',
      ),
      'showOutOfStockValueChanged' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Plugin\\ShowOutOfStockConfig',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Config' => 
    array (
      'productListingAttributesCaching' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Model\\ResourceModel\\Config',
      ),
    ),
    'Magento\\Eav\\Model\\Entity\\Attribute\\Backend\\BackendInterface' => NULL,
    'Magento\\Eav\\Model\\Entity\\Attribute\\Backend\\AbstractBackend' => 
    array (
      'attributeValidation' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Model\\Attribute\\Backend\\AttributeValidation',
      ),
      'ConfigurableProduct::skipValidation' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Plugin\\Model\\Attribute\\Backend\\AttributeValidation',
      ),
      'Price' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\PricePermissions\\Model\\Entity\\Attribute\\Backend\\Plugin\\AbstractBackend',
      ),
    ),
    'Magento\\Sales\\Api\\OrderItemRepositoryInterface' => 
    array (
      'get_gift_message' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftMessage\\Model\\Plugin\\OrderItemGet',
      ),
      'vertex_commodity_code_order_item_repository' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\CommodityCodeExtensionAttributeOrderItemRepository',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\Collection\\ProductLimitation' => 
    array (
      'isUsingPriceIndex' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Model\\Plugin\\ResourceModel\\Product\\Collection\\ProductLimitation',
      ),
    ),
    'Magento\\Framework\\EntityManager\\Operation\\AttributeInterface' => NULL,
    'Magento\\Eav\\Model\\ResourceModel\\ReadHandler' => NULL,
    'Magento\\Eav\\Model\\ResourceModel\\ReadSnapshot' => 
    array (
      'catalogReadSnapshot' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Model\\ResourceModel\\ReadSnapshotPlugin',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\Item\\ToOrderItem' => 
    array (
      'copy_quote_files_to_order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Plugin\\QuoteItemProductOption',
      ),
      'append_bundle_data_to_order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Bundle\\Model\\Plugin\\QuoteItem',
      ),
      'append_gift_card_data_to_order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftCard\\Model\\Plugin\\QuoteItem',
      ),
      'gift_registry_item_from_quote_item' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftRegistry\\Model\\Plugin\\QuoteItem',
      ),
      'gift_message_quote_item_conversion' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftMessage\\Model\\Plugin\\QuoteItem',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Initialization\\Helper' => 
    array (
      'weeeAttributeOptionsProcess' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Plugin\\Catalog\\Controller\\Adminhtml\\Product\\Initialization\\Helper\\ProcessTaxAttribute',
      ),
      'vertex_custom_option_flex_field_after_save_initialization' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\CustomOptionFlexFieldExtensionAttributeInitializer',
      ),
      'product_save_rewrites_history_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Plugin\\Catalog\\Controller\\Adminhtml\\Product\\Initialization\\Helper',
      ),
      'admin_gws_gallery_updater' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\Catalog\\Controller\\Adminhtml\\Product\\Initialization\\GalleryUpdater',
      ),
      'configurable' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\ConfigurableProduct\\Controller\\Adminhtml\\Product\\Initialization\\Helper\\Plugin\\Configurable',
      ),
      'Bundle' => 
      array (
        'sortOrder' => 60,
        'instance' => 'Magento\\Bundle\\Controller\\Adminhtml\\Product\\Initialization\\Helper\\Plugin\\Bundle',
      ),
      'updateConfigurations' => 
      array (
        'sortOrder' => 60,
        'instance' => 'Magento\\ConfigurableProduct\\Controller\\Adminhtml\\Product\\Initialization\\Helper\\Plugin\\UpdateConfigurations',
      ),
      'Downloadable' => 
      array (
        'sortOrder' => 70,
        'instance' => 'Magento\\Downloadable\\Controller\\Adminhtml\\Product\\Initialization\\Helper\\Plugin\\Downloadable',
      ),
      'Rma' => 
      array (
        'sortOrder' => 70,
        'instance' => 'Magento\\Rma\\Plugin\\Catalog\\Controller\\Adminhtml\\Product\\Initialization\\HelperPlugin',
      ),
      'PricePermissions' => 
      array (
        'sortOrder' => 80,
        'instance' => 'Magento\\PricePermissions\\Controller\\Adminhtml\\Product\\Initialization\\Helper\\Plugin\\PricePermissions',
      ),
      'GiftCardInitialize' => 
      array (
        'sortOrder' => 110,
        'instance' => 'Magento\\GiftCard\\Controller\\Adminhtml\\Product\\Initialization\\Helper\\Plugin\\GiftCard',
      ),
      'cleanConfigurationTmpImages' => 
      array (
        'sortOrder' => 999,
        'instance' => 'Magento\\ConfigurableProduct\\Plugin\\Product\\Initialization\\CleanConfigurationTmpImages',
      ),
    ),
    'Magento\\Quote\\Api\\CartRepositoryInterface' => 
    array (
      'save_fake_quota_in_preview' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CheckoutStaging\\Plugin\\SavePreviewQuotaPlugin',
      ),
      'remove_in_store_pickup_data' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickupMultishipping\\Plugin\\Quote\\RemoveInStorePickupDataInMultishippingModePlugin',
      ),
      'amazon_payment_quote_repository' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Amazon\\Payment\\Plugin\\QuoteRepository',
      ),
      'quote_save' => 
      array (
        'sortOrder' => 30,
        'instance' => 'Magento\\NegotiableQuote\\Model\\Plugin\\Quote\\Model\\QuoteRepositoryPlugin',
      ),
      'purchaseOrderCartRepositoryPlugin' => 
      array (
        'sortOrder' => 40,
        'instance' => 'Magento\\PurchaseOrder\\Plugin\\Quote\\Model\\QuoteRepositoryPlugin',
      ),
    ),
    'Magento\\Quote\\Model\\QuoteRepository' => 
    array (
      'save_fake_quota_in_preview' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CheckoutStaging\\Plugin\\SavePreviewQuotaPlugin',
      ),
      'remove_in_store_pickup_data' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickupMultishipping\\Plugin\\Quote\\RemoveInStorePickupDataInMultishippingModePlugin',
      ),
      'multishipping_quote_repository' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Multishipping\\Plugin\\MultishippingQuoteRepository',
      ),
      'amazon_payment_quote_repository' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Amazon\\Payment\\Plugin\\QuoteRepository',
      ),
      'quote_save' => 
      array (
        'sortOrder' => 30,
        'instance' => 'Magento\\NegotiableQuote\\Model\\Plugin\\Quote\\Model\\QuoteRepositoryPlugin',
      ),
      'purchaseOrderCartRepositoryPlugin' => 
      array (
        'sortOrder' => 40,
        'instance' => 'Magento\\PurchaseOrder\\Plugin\\Quote\\Model\\QuoteRepositoryPlugin',
      ),
    ),
    'Magento\\Customer\\Model\\Address\\AddressModelInterface' => NULL,
    'Magento\\Customer\\Model\\Address\\AbstractAddress' => NULL,
    'Magento\\Quote\\Api\\Data\\AddressInterface' => NULL,
    'Magento\\Quote\\Model\\Quote\\Address' => 
    array (
      'convertQuoteAddressToCustomerAddress' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerCustomAttributes\\Model\\Plugin\\ConvertQuoteAddressToCustomerAddress',
      ),
      'after_address_collect_shipping_sates' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NegotiableQuote\\Model\\Plugin\\Quote\\Model\\Quote\\AddressPlugin',
      ),
      'purchaseOrderQuoteAddress' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PurchaseOrder\\Plugin\\Quote\\Model\\AddressPlugin',
      ),
      'companyShippingQuoteAddressPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CompanyShipping\\Plugin\\Model\\Quote\\AddressPlugin',
      ),
      'manage_assignment_of_pickup_location_to_quote_address' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\InventoryInStorePickupQuote\\Plugin\\Quote\\Address\\ManageAssignmentOfPickupLocationToQuoteAddress',
      ),
    ),
    'Magento\\Framework\\Model\\ResourceModel\\Db\\VersionControl\\AbstractDb' => NULL,
    'Magento\\Quote\\Model\\ResourceModel\\Quote\\Address' => 
    array (
      'load_pickup_location_for_quote_address' => 
      array (
        'sortOrder' => 30,
        'instance' => 'Magento\\InventoryInStorePickupQuote\\Plugin\\Quote\\Address\\LoadPickupLocationForQuoteAddress',
      ),
    ),
    'Magento\\Quote\\Model\\ResourceModel\\Quote' => 
    array (
      'substract_product_from_quotes' => 
      array (
        'sortOrder' => 800,
        'instance' => 'Magento\\CatalogStaging\\Plugin\\Quote\\SubstractProductFromQuotes',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\AbstractResource' => 
    array (
      'clean_cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Cache\\FlushCacheByTags',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product' => 
    array (
      'clean_cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Cache\\FlushCacheByTags',
      ),
      'clean_quote_items_after_product_delete' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Quote\\Model\\Product\\Plugin\\RemoveQuoteItems',
      ),
      'update_quote_items_after_product_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Quote\\Model\\Product\\Plugin\\UpdateQuoteItems',
      ),
      'catalogsearchFulltextProduct' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Plugin\\Product',
      ),
      'delete_source_items' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\Catalog\\Model\\ResourceModel\\Product\\DeleteSourceItemsPlugin',
      ),
      'process_source_items_after_product_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\Catalog\\Model\\ResourceModel\\Product\\ProcessSourceItemsPlugin',
      ),
      'process_reservations_after_product_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\Catalog\\Model\\ResourceModel\\Product\\UpdateReservationsPlugin',
      ),
      'delete_reservations' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\Catalog\\Model\\ResourceModel\\Product\\DeleteReservationsPlugin',
      ),
      'vertex_commodity_code_product_resource_model' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\CommodityCodeExtensionAttributeProductResourceModelPlugin',
      ),
      'apply_catalog_rules_after_product_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRule\\Plugin\\Indexer\\Product\\Save\\ApplyRules',
      ),
      'reload_attributes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Plugin\\Model\\ResourceModel\\Product',
      ),
      'cleanups_wishlist_item_after_product_delete' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Wishlist\\Plugin\\Model\\ResourceModel\\Product',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Action' => 
    array (
      'quoteProductMassChange' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Quote\\Model\\Product\\Plugin\\MarkQuotesRecollectMassDisabled',
      ),
      'ReindexUpdatedProducts' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogInventory\\Model\\Plugin\\ReindexUpdatedProducts',
      ),
      'catalogsearchFulltextMassAction' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Plugin\\Product\\Action',
      ),
      'catalogPermissionsProductMassChange' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Model\\Indexer\\Plugin\\Product\\Action',
      ),
      'invalidate_pagecache_after_update_product_attributes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Model\\Product\\Action\\UpdateAttributesFlushCache',
      ),
      'price_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRule\\Plugin\\Model\\Product\\Action',
      ),
      'admingws_product_action_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Model\\Plugin\\ProductAction',
      ),
      'stagingMassAttributesUpdate' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Magento\\CatalogStaging\\Model\\Plugin\\Model\\Product\\ActionPlugin',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Attribute\\Backend\\Price' => 
    array (
      'attributeValidation' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Model\\Attribute\\Backend\\AttributeValidation',
      ),
      'ConfigurableProduct::skipValidation' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Plugin\\Model\\Attribute\\Backend\\AttributeValidation',
      ),
      'Price' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\PricePermissions\\Model\\Entity\\Attribute\\Backend\\Plugin\\AbstractBackend',
      ),
      'bundle' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Bundle\\Model\\Plugin\\PriceBackend',
      ),
      'configurable' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Plugin\\PriceBackend',
      ),
    ),
    'Magento\\Sales\\Model\\AbstractModel' => NULL,
    'Magento\\Sales\\Api\\Data\\OrderItemInterface' => NULL,
    'Magento\\Sales\\Model\\Order\\Item' => 
    array (
      'bundle' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Bundle\\Model\\Sales\\Order\\Plugin\\Item',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Type\\AbstractType' => NULL,
    'Magento\\Bundle\\Model\\Product\\Type' => 
    array (
      'adapt_is_product_salable' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProduct\\Plugin\\Bundle\\Model\\Product\\Type\\AdaptIsSalablePlugin',
      ),
    ),
    'Magento\\BundleImportExport\\Model\\Import\\Product\\Type\\Bundle\\RelationsDataSaver' => 
    array (
      'sequence_application' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\BundleImportExportStaging\\Plugin\\BundleImportExport\\Model\\Import\\Product\\Type\\Bundle\\RelationsDataSaver',
      ),
    ),
    'Magento\\Catalog\\Api\\ProductAttributeRepositoryInterface' => NULL,
    'Magento\\Framework\\Api\\MetadataServiceInterface' => NULL,
    'Magento\\Catalog\\Model\\Product\\Attribute\\Repository' => 
    array (
      'filterCustomAttribute' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogInventory\\Model\\Plugin\\FilterCustomAttribute',
      ),
      'process_extension_attributes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageBuilder\\Plugin\\Catalog\\Model\\Product\\Attribute\\RepositoryPlugin',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\AbstractProduct' => 
    array (
      'add_product_object_to_image_data_array' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Model\\Plugin\\ProductImage',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\View' => 
    array (
      'add_product_object_to_image_data_array' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Model\\Plugin\\ProductImage',
      ),
      'quantityValidators' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogInventory\\Block\\Plugin\\ProductView',
      ),
    ),
    'Magento\\Framework\\App\\Action\\AbstractAction' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
      ),
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
    ),
    'Magento\\Framework\\App\\Action\\Action' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
        'disabled' => true,
      ),
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
    ),
    'Magento\\Backend\\App\\AbstractAction' => 
    array (
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\Authentication',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
    ),
    'Magento\\Backend\\App\\Action' => 
    array (
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\Authentication',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute' => 
    array (
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\Authentication',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
    ),
    'Magento\\Framework\\App\\Action\\HttpPostActionInterface' => NULL,
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute\\Save' => 
    array (
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'massAction' => 
      array (
        'sortOrder' => 0,
        'disabled' => true,
        'instance' => 'Magento\\CatalogInventory\\Plugin\\MassUpdateProductAttribute',
      ),
      'inventoryUpdate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute\\Save\\ProcessInventoryPlugin',
      ),
      'Ddg_UpdateProductAttribute_MassActionPlugin' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Dotdigitalgroup\\Email\\Plugin\\CatalogProductAttributeSavePlugin',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\Authentication',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Category' => 
    array (
      'clean_cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Cache\\FlushCacheByTags',
      ),
      'catalogsearchFulltextCategory' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Plugin\\Category',
      ),
      'category_move_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Model\\Category\\Plugin\\Category\\Move',
      ),
      'category_delete_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Model\\Category\\Plugin\\Category\\Remove',
      ),
      'update_url_path_for_different_stores' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Model\\Category\\Plugin\\Category\\UpdateUrlPath',
      ),
      'deny_permission_category' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SharedCatalog\\Plugin\\Catalog\\Model\\ResourceModel\\DenyPermissionsForNewCategory',
      ),
      'fulltext_search_indexer' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Model\\Plugin\\Category',
      ),
      'catalogStaging' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Plugin\\Model\\ResourceModel\\Category',
      ),
      'admingws_category_resource_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Model\\Plugin\\CategoryResource',
      ),
      'admin_gws_check_category_can_be_saved' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\Catalog\\Model\\ResourceModel\\Category\\CheckCategoryCanBeSaved',
      ),
    ),
    'Magento\\Catalog\\Model\\Indexer\\Category\\Product\\AbstractAction' => NULL,
    'Magento\\Catalog\\Model\\Indexer\\Product\\Category\\Action\\Rows' => 
    array (
      'catalogsearchFulltextCategoryAssignment' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Plugin\\Product\\Category\\Action\\Rows',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Attribute' => 
    array (
      'storeLabelCaching' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Eav\\Plugin\\Model\\ResourceModel\\Entity\\Attribute',
      ),
      'catalogsearchFulltextIndexerAttribute' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Plugin\\Attribute',
      ),
      'catalogsearchAttributeSearchWeightCache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Attribute\\SearchWeight',
      ),
      'updateElasticsearchIndexerMapping' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Elasticsearch\\Model\\Indexer\\Fulltext\\Plugin\\Category\\Product\\Attribute',
      ),
      'invalidate_pagecache_after_attribute_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Model\\ResourceModel\\Attribute\\Save',
      ),
    ),
    'Magento\\Framework\\Config\\Reader\\Filesystem' => NULL,
    'Magento\\Framework\\Search\\Request\\Config\\FilesystemReader' => 
    array (
      'catalogSearchDynamicFields' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Search\\ReaderPlugin',
      ),
      'productAttributesDynamicFields' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogGraphQl\\Plugin\\Search\\Request\\ConfigReader',
      ),
    ),
    'Magento\\Catalog\\Model\\Layer\\CollectionFilterInterface' => NULL,
    'Magento\\Catalog\\Model\\Layer\\Search\\CollectionFilter' => 
    array (
      'searchQuery' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Model\\Layer\\Search\\Plugin\\CollectionFilter',
      ),
    ),
    'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Action\\DataProvider' => 
    array (
      'stockedProductsFilterPlugin' => 
      array (
        'sortOrder' => 0,
        'disabled' => true,
        'instance' => 'Magento\\CatalogSearch\\Model\\Indexer\\Plugin\\StockedProductsFilterPlugin',
      ),
      'stockedProductFilterByInventoryStockPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryElasticsearch\\Plugin\\CatalogSearch\\Model\\Indexer\\Fulltext\\Action\\DataProvider\\StockedProductFilterByInventoryStock',
      ),
    ),
    'Magento\\CatalogSearch\\Model\\ResourceModel\\Advanced\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
      'joinProductsWhenFlatEnabled' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Model\\Plugin\\ResourceModel\\Product\\JoinProductsWhenFlatEnabled',
      ),
      'joinAttribute' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Model\\Plugin\\ResourceModel\\Product\\Collection',
      ),
      'add_catalog_permissions_information' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ElasticsearchCatalogPermissions\\Plugin\\AddCategoryPermissionsToCollection',
      ),
    ),
    'Magento\\CatalogSearch\\Model\\ResourceModel\\Fulltext\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
      'joinProductsWhenFlatEnabled' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Model\\Plugin\\ResourceModel\\Product\\JoinProductsWhenFlatEnabled',
      ),
      'joinAttribute' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Model\\Plugin\\ResourceModel\\Product\\Collection',
      ),
      'add_catalog_permissions_information' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ElasticsearchCatalogPermissions\\Plugin\\AddCategoryPermissionsToFulltextCollection',
      ),
      'loadPreview' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Model\\Plugin\\ResourceModel\\Product\\Fulltext\\Collection',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\View' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
        'disabled' => true,
      ),
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\Creditmemo' => 
    array (
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
    ),
    'Magento\\Sales\\Controller\\OrderInterface' => NULL,
    'Magento\\Framework\\App\\Action\\HttpGetActionInterface' => NULL,
    'Magento\\Framework\\App\\Action\\HttpHeadActionInterface' => NULL,
    'Magento\\Sales\\Controller\\Order\\Creditmemo' => 
    array (
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\History' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
        'disabled' => true,
      ),
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\Invoice' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
        'disabled' => true,
      ),
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Invoice' => 
    array (
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\PrintAction' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
        'disabled' => true,
      ),
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintAction' => 
    array (
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\PrintCreditmemo' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
        'disabled' => true,
      ),
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintCreditmemo' => 
    array (
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\PrintInvoice' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
        'disabled' => true,
      ),
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintInvoice' => 
    array (
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\PrintShipment' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
        'disabled' => true,
      ),
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintShipment' => 
    array (
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\Reorder' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
        'disabled' => true,
      ),
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Reorder' => 
    array (
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
      'redirect_blocked_company_user' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Company\\Plugin\\Sales\\Controller\\Order\\ReorderPlugin',
      ),
      'replaceQuoteItems' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NegotiableQuote\\Plugin\\Sales\\Controller\\Order\\ReorderPlugin',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\Shipment' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
        'disabled' => true,
      ),
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Shipment' => 
    array (
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\View' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
        'disabled' => true,
      ),
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'authentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Controller\\Order\\Plugin\\Authentication',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
    ),
    'Magento\\Sales\\Model\\ResourceModel\\EntityAbstract' => NULL,
    'Magento\\Sales\\Model\\Spi\\ShipmentResourceInterface' => NULL,
    'Magento\\Sales\\Model\\ResourceModel\\Order\\Shipment' => 
    array (
      'SaveSourceForShipment' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryShipping\\Plugin\\Sales\\ResourceModel\\Order\\Shipment\\SaveSourceForShipmentPlugin',
      ),
      'LoadSourceForShipment' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryShipping\\Plugin\\Sales\\ResourceModel\\Order\\Shipment\\LoadSourceForShipmentPlugin',
      ),
      'DeleteSourceForShipment' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryShipping\\Plugin\\Sales\\ResourceModel\\Order\\Shipment\\DeleteSourceForShipmentPlugin',
      ),
    ),
    'Magento\\Sales\\Model\\Spi\\CreditmemoResourceInterface' => NULL,
    'Magento\\Sales\\Model\\ResourceModel\\Order\\Creditmemo' => 
    array (
      'refundRewardPoints' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Reward\\Model\\Plugin\\RewardPointsRefund',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Payment\\Operations\\AbstractOperation' => NULL,
    'Magento\\Sales\\Model\\Order\\Payment\\Operations\\CaptureOperation' => 
    array (
      'removeCaptureCommentsPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CompanyCredit\\Plugin\\Sales\\Model\\Order\\Payment\\Operations\\RemoveCaptureCommentsPlugin',
      ),
    ),
    'Magento\\Sales\\Model\\ResourceModel\\Order\\Handler\\Address' => 
    array (
      'addressUpdate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Sales\\Model\\Order\\Invoice\\Plugin\\AddressUpdate',
      ),
    ),
    'Magento\\Framework\\View\\Asset\\MergeService' => 
    array (
      'cleanMergedJsCss' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaStorage\\Model\\Asset\\Plugin\\CleanMergedJsCss',
      ),
    ),
    'Magento\\Checkout\\Model\\Session' => 
    array (
      'negotiableQuoteCheckoutSessionPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NegotiableQuote\\Model\\Plugin\\Checkout\\Model\\SessionPlugin',
      ),
      'purchaseOrderCheckoutSessionPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PurchaseOrder\\Plugin\\Checkout\\Model\\SessionPlugin',
      ),
    ),
    'Magento\\UrlRewrite\\Model\\StorageInterface' => 
    array (
      'storage_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Model\\Category\\Plugin\\Storage',
      ),
    ),
    'Magento\\UrlRewrite\\Model\\UrlPersistInterface' => NULL,
    'Magento\\UrlRewrite\\Model\\UrlFinderInterface' => NULL,
    'Magento\\UrlRewrite\\Model\\Storage\\AbstractStorage' => 
    array (
      'storage_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Model\\Category\\Plugin\\Storage',
      ),
    ),
    'Magento\\UrlRewrite\\Model\\Storage\\DbStorage' => 
    array (
      'storage_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Model\\Category\\Plugin\\Storage',
      ),
    ),
    'Magento\\CatalogUrlRewrite\\Model\\Storage\\DbStorage' => 
    array (
      'storage_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Model\\Category\\Plugin\\Storage',
      ),
      'dynamic_storage_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Plugin\\DynamicCategoryRewrites',
      ),
    ),
    'Magento\\ImportExport\\Model\\AbstractModel' => NULL,
    'Magento\\ImportExport\\Model\\Import' => 
    array (
      'catalogProductFlatIndexerImport' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogImportExport\\Model\\Indexer\\Product\\Flat\\Plugin\\Import',
      ),
      'invalidatePriceIndexerOnImport' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogImportExport\\Model\\Indexer\\Product\\Price\\Plugin\\Import',
      ),
      'invalidateStockIndexerOnImport' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogImportExport\\Model\\Indexer\\Stock\\Plugin\\Import',
      ),
      'invalidateEavIndexerOnImport' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogImportExport\\Model\\Indexer\\Product\\Eav\\Plugin\\Import',
      ),
      'invalidateProductCategoryIndexerOnImport' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogImportExport\\Model\\Indexer\\Product\\Category\\Plugin\\Import',
      ),
      'invalidateCategoryProductIndexerOnImport' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogImportExport\\Model\\Indexer\\Category\\Product\\Plugin\\Import',
      ),
      'targetRuleImportInvalidate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\TargetRule\\Model\\Indexer\\TargetRule\\Plugin\\Import',
      ),
      'catalogPermissionImport' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Model\\Indexer\\Plugin\\Import',
      ),
      'reindex_after_import' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRule\\Plugin\\Indexer\\ImportExport',
      ),
    ),
    'Magento\\CatalogImportExport\\Model\\Import\\Product' => 
    array (
      'staging-import-products' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogImportExportStaging\\Model\\Import\\ProductPlugin',
      ),
    ),
    'Magento\\Framework\\View\\Layout\\ProcessorInterface' => NULL,
    'Magento\\Framework\\View\\Model\\Layout\\Merge' => 
    array (
      'widget-layout-update-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Widget\\Model\\ResourceModel\\Layout\\Plugin',
      ),
    ),
    'Magento\\Checkout\\Block\\Checkout\\LayoutProcessorInterface' => NULL,
    'Magento\\Checkout\\Block\\Checkout\\LayoutProcessor' => 
    array (
      'ddg_sms_international_telephone_layout_processor_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Dotdigitalgroup\\Sms\\Plugin\\Block\\Checkout\\LayoutProcessor',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\Address\\ToOrderAddress' => 
    array (
      'convertQuoteAddressToOrderAddress' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerCustomAttributes\\Model\\Plugin\\ConvertQuoteAddressToOrderAddress',
      ),
      'gift_registry_quote_address_to_order_address' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftRegistry\\Model\\Plugin\\ConvertQuoteAddressToOrderAddress',
      ),
    ),
    'Magento\\Customer\\Block\\Widget\\AbstractWidget' => NULL,
    'Magento\\Customer\\Block\\Widget\\Name' => 
    array (
      'formatPrefixSuffixOptions' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerCustomAttributes\\Plugin\\FormatPrefixSuffixOptions',
      ),
    ),
    'Magento\\Customer\\Model\\Address' => 
    array (
      'updateDataCustomerAddress' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerCustomAttributes\\Model\\Plugin\\AddCustomAttributesToCustomerAddress',
      ),
    ),
    'Magento\\CustomAttributeManagement\\Block\\Form' => 
    array (
      'set_customer_custom_attribute_for_company' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerCustomAttributes\\Plugin\\Customer\\Block\\Form\\CustomerCustomAttributePlugin',
      ),
    ),
    'Magento\\Checkout\\Api\\PaymentInformationManagementInterface' => 
    array (
      'process_billing_custom_customer_attributes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerCustomAttributes\\Model\\Plugin\\ProcessCustomerBillingAddressCustomAttributes',
      ),
      'validate-agreements' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CheckoutAgreements\\Model\\Checkout\\Plugin\\Validation',
      ),
      'disable-place-order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CheckoutStaging\\Plugin\\PaymentInformationManagementPlugin',
      ),
      'ProcessPaymentVaultInformationManagement' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Vault\\Plugin\\PaymentVaultInformationManagement',
      ),
    ),
    'Magento\\Checkout\\Api\\ShippingInformationManagementInterface' => 
    array (
      'process_shipping_custom_customer_attributes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PurchaseOrder\\Model\\Plugin\\ProcessCustomCustomerAttributes',
      ),
      'gift_registry_save_address' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftRegistry\\Model\\Plugin\\SaveAddress',
      ),
      'amazon_payment_shipping_information_management' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Amazon\\Payment\\Plugin\\ShippingInformationManagement',
      ),
    ),
    'Magento\\Checkout\\Api\\GuestPaymentInformationManagementInterface' => 
    array (
      'process_billing_custom_guest_attributes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerCustomAttributes\\Model\\Plugin\\ProcessGuestBillingAddressCustomAttributes',
      ),
      'validate-guest-agreements' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CheckoutAgreements\\Model\\Checkout\\Plugin\\GuestValidation',
      ),
      'disable-guest-place-order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CheckoutStaging\\Plugin\\GuestPaymentInformationManagementPlugin',
      ),
      'guest_payment_no_commit_after_event_workaround' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\GuestPaymentInformationManagementPlugin',
      ),
    ),
    'Magento\\Checkout\\Api\\GuestShippingInformationManagementInterface' => 
    array (
      'process_shipping_custom_guest_attributes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerCustomAttributes\\Model\\Plugin\\ProcessGuestShippingAddressCustomAttributes',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\Quote\\Item\\QuantityValidator\\Initializer\\Option' => 
    array (
      'configurable_product' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Quote\\Item\\QuantityValidator\\Initializer\\Option\\Plugin\\ConfigurableProduct',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\CartConfiguration' => 
    array (
      'GiftCard' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftCard\\Model\\Product\\CartConfiguration\\Plugin\\GiftCard',
      ),
      'Downloadable' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Downloadable\\Model\\Product\\CartConfiguration\\Plugin\\Downloadable',
      ),
      'isProductConfigured' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GroupedProduct\\Model\\Product\\Cart\\Configuration\\Plugin\\Grouped',
      ),
      'configurable_product' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Product\\CartConfiguration\\Plugin\\Configurable',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Admin\\Item' => 
    array (
      'configurable_product' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Order\\Admin\\Item\\Plugin\\Configurable',
      ),
    ),
    'Magento\\Catalog\\Helper\\Product\\Configuration\\ConfigurationInterface' => NULL,
    'Magento\\Catalog\\Helper\\Product\\Configuration' => 
    array (
      'grouped_options' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GroupedProduct\\Helper\\Product\\Configuration\\Plugin\\Grouped',
      ),
      'configurable_product' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\ConfigurableProduct\\Helper\\Product\\Configuration\\Plugin',
      ),
    ),
    'Magento\\Catalog\\Model\\Entity\\Product\\Attribute\\Group\\AttributeMapperInterface' => 
    array (
      'configurable_product' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Entity\\Product\\Attribute\\Group\\AttributeMapper\\Plugin',
      ),
    ),
    'Magento\\Catalog\\Api\\ProductRepositoryInterface' => 
    array (
      'AdminProductRepositoryPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SharedCatalog\\Plugin\\Catalog\\Api\\AdminProductRepositoryInterfacePlugin',
      ),
      'vertex_commodity_code_product_repository' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\CommodityCodeExtensionAttributeProductRepositoryPlugin',
      ),
      'configurableProductSaveOptions' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Plugin\\ProductRepositorySave',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Type' => 
    array (
      'configurable_output' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Product\\Type\\Plugin',
      ),
      'grouped_output' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GroupedProduct\\Model\\Product\\Type\\Plugin',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\View\\AbstractView' => 
    array (
      'add_product_object_to_image_data_array' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Model\\Plugin\\ProductImage',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\View\\Gallery' => 
    array (
      'add_product_object_to_image_data_array' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Model\\Plugin\\ProductImage',
      ),
    ),
    'Magento\\ProductVideo\\Block\\Product\\View\\Gallery' => 
    array (
      'add_product_object_to_image_data_array' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Model\\Plugin\\ProductImage',
      ),
      'product_video_gallery' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Block\\Plugin\\Product\\Media\\Gallery',
      ),
    ),
    'Magento\\ConfigurableProduct\\Model\\Product\\Type\\Configurable' => 
    array (
      'add_swatch_attributes_to_configurable' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Model\\Plugin\\Configurable',
      ),
      'productCollectionPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableSharedCatalog\\Plugin\\ConfigurableProduct\\Model\\Product\\Type\\ConfigurablePlugin',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Pricing\\Renderer\\SalableResolverInterface' => NULL,
    'Magento\\Catalog\\Model\\Product\\Pricing\\Renderer\\SalableResolver' => 
    array (
      'configurable' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Plugin\\Catalog\\Model\\Product\\Pricing\\Renderer\\SalableResolver',
      ),
    ),
    'Magento\\Rule\\Model\\Condition\\ConditionInterface' => NULL,
    'Magento\\Rule\\Model\\Condition\\AbstractCondition' => NULL,
    'Magento\\Rule\\Model\\Condition\\Product\\AbstractProduct' => NULL,
    'Magento\\SalesRule\\Model\\Rule\\Condition\\Product' => 
    array (
      'apply_rule_on_configurable_children' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Plugin\\SalesRule\\Model\\Rule\\Condition\\Product',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\Address\\Total\\CollectorInterface' => NULL,
    'Magento\\Quote\\Model\\Quote\\Address\\Total\\ReaderInterface' => NULL,
    'Magento\\Quote\\Model\\Quote\\Address\\Total\\AbstractTotal' => NULL,
    'Magento\\Tax\\Model\\Sales\\Total\\Quote\\CommonTaxCollector' => 
    array (
      'apply_tax_class_id' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Plugin\\Tax\\Model\\Sales\\Total\\Quote\\CommonTaxCollector',
      ),
      'vertexItemLevelMap' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\CommonTaxCollectorPlugin',
      ),
    ),
    'Magento\\Rule\\Model\\ResourceModel\\Rule\\Collection\\AbstractCollection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
      'collection_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\CollectionFilter',
      ),
    ),
    'Magento\\SalesRule\\Model\\ResourceModel\\Rule\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
      'collection_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\CollectionFilter',
      ),
      'beforeSetValidationFilter' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\SalesRuleStaging\\Model\\ResourceModel\\Plugin\\Rule\\Collection',
      ),
      'aroundSetValidationFilter' => 
      array (
        'sortOrder' => 500,
        'instance' => 'Magento\\AdvancedSalesRule\\Model\\ResourceModel\\Plugin\\Rule\\Collection',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\Config' => 
    array (
      'append_sales_rule_keys_to_quote' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesRule\\Model\\Plugin\\QuoteConfigProductAttributes',
      ),
    ),
    'Magento\\Quote\\Api\\CartTotalRepositoryInterface' => 
    array (
      'negotiableQuoteTotals' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NegotiableQuote\\Plugin\\Quote\\Api\\JoinNegotiableQuoteTotalsPlugin',
      ),
    ),
    'Magento\\Quote\\Model\\Cart\\CartTotalRepository' => 
    array (
      'negotiableQuoteTotals' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NegotiableQuote\\Plugin\\Quote\\Api\\JoinNegotiableQuoteTotalsPlugin',
      ),
      'coupon_label_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesRule\\Plugin\\CartTotalRepository',
      ),
      'multishipping_shipping_addresses' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Multishipping\\Model\\Cart\\CartTotalRepositoryPlugin',
      ),
      'rewardTotal' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Reward\\Model\\Plugin\\CartTotalRepository',
      ),
    ),
    'Magento\\Sales\\Api\\OrderManagementInterface' => 
    array (
      'orderManagementCompany' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Company\\Plugin\\Sales\\Api\\OrderManagementInterfacePlugin',
      ),
      'inventory_reservations_placement' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\Sales\\OrderManagement\\AppendReservationsAfterOrderPlacementPlugin',
      ),
    ),
    'Magento\\Sales\\Model\\Service\\OrderService' => 
    array (
      'orderManagementCompany' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Company\\Plugin\\Sales\\Api\\OrderManagementInterfacePlugin',
      ),
      'inventory_reservations_placement' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\Sales\\OrderManagement\\AppendReservationsAfterOrderPlacementPlugin',
      ),
      'coupon_uses_decrement_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesRule\\Plugin\\CouponUsagesDecrement',
      ),
    ),
    'Magento\\Quote\\Api\\CartManagementInterface' => NULL,
    'Magento\\Quote\\Model\\QuoteManagement' => 
    array (
      'validate_purchase_order_number' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\OfflinePayments\\Plugin\\ValidatePurchaseOrderNumber',
      ),
      'coupon_uses_increment_plugin' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\SalesRule\\Plugin\\CouponUsagesIncrement',
      ),
      'purchaseOrderCartManagementPlugin' => 
      array (
        'sortOrder' => 40,
        'instance' => 'Magento\\PurchaseOrder\\Plugin\\Quote\\Model\\QuoteManagementPlugin',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\Address\\ToOrder' => 
    array (
      'add_tax_to_order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\Quote\\ToOrderConverter',
      ),
      'set_pickup_location_to_order_during_address_conversion' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\InventoryInStorePickupQuote\\Plugin\\Quote\\SetPickupLocationToOrder',
      ),
    ),
    'Magento\\Quote\\Model\\Cart\\TotalsConverter' => 
    array (
      'add_tax_details' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\Quote\\GrandTotalDetailsPlugin',
      ),
      'giftCardAmountTotal' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftCardAccount\\Model\\Plugin\\TotalsConverter',
      ),
      'gift_wrapping_total' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftWrapping\\Model\\Plugin\\TotalsConverter',
      ),
      'vertex_calculation_message' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\TotalsCalculationMessagePlugin',
      ),
    ),
    'Magento\\Sales\\Api\\OrderRepositoryInterface' => 
    array (
      'save_order_tax' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Model\\Plugin\\OrderSave',
      ),
      'orderRepositoryCompany' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Company\\Plugin\\Sales\\Api\\OrderRepositoryInterfacePlugin',
      ),
      'get_customer_balance' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerBalance\\Model\\Plugin\\OrderRepository',
      ),
      'gift_card_account' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftCardAccount\\Model\\Plugin\\OrderRepository',
      ),
      'save_gift_message' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftMessage\\Model\\Plugin\\OrderSave',
      ),
      'get_gift_message' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftMessage\\Model\\Plugin\\OrderGet',
      ),
      'get_order_gift_wrapping' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftWrapping\\Model\\Plugin\\OrderGiftWrapping',
      ),
      'get_order_item_gift_wrapping' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftWrapping\\Model\\Plugin\\OrderItemGiftWrapping',
      ),
      'get_pickup_location_for_order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickupSales\\Plugin\\Sales\\Order\\GetPickupLocationForOrderPlugin',
      ),
      'save_pickup_location_for_order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickupSales\\Plugin\\Sales\\Order\\SavePickupLocationForOrderPlugin',
      ),
      'rewardCreditmemoUpdater' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Reward\\Model\\Plugin\\OrderRepository',
      ),
      'get_vertex_order_item_attributes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\OrderRepositoryPlugin',
      ),
      'vertex_commodity_code_order_item_order_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\AddCommodityCodeToOrderItemPlugin',
      ),
      'addVertexCustomerCountryToOrderAddress' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\AddCustomerCountryToOrderAddressPlugin',
      ),
    ),
    'Magento\\Catalog\\Ui\\DataProvider\\Product\\Listing\\DataProvider' => 
    array (
      'taxSettingsProvider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tax\\Plugin\\Ui\\DataProvider\\TaxSettings',
      ),
      'wishlistSettingsDataProvider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Wishlist\\Plugin\\Ui\\DataProvider\\WishlistSettings',
      ),
      'weeeSettingsProvider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Plugin\\Ui\\DataProvider\\WeeeSettings',
      ),
    ),
    'Magento\\Wishlist\\Block\\Catalog\\Product\\View\\AddTo\\Wishlist' => 
    array (
      'add_product_object_to_image_data_array' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Model\\Plugin\\ProductImage',
      ),
      'quantityValidators' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogInventory\\Block\\Plugin\\ProductView',
      ),
      'getWishlistOptions' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftCard\\Block\\Product\\View\\Plugin',
      ),
    ),
    'Magento\\Wishlist\\Block\\Item\\Configure' => 
    array (
      'getWishlistOptions' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftCard\\Block\\Product\\View\\Plugin',
      ),
    ),
    'Magento\\GiftRegistry\\Helper\\Data' => 
    array (
      'getWishlistOptions' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftCard\\Helper\\GiftRegistry\\Plugin',
      ),
    ),
    'Magento\\Webapi\\Controller\\Rest' => 
    array (
      'staging_preview_permissions_check' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Plugin\\Framework\\App\\FrontController',
      ),
      'default_store_setter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\FrontController\\Plugin\\DefaultStore',
      ),
      'beforeRestDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Plugin\\RestPlugin',
      ),
      'webapiContorllerRestAsync' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\WebapiAsync\\Plugin\\ControllerRest',
      ),
      'configHash' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Deploy\\Model\\Plugin\\ConfigChangeDetector',
      ),
    ),
    'Magento\\PageCache\\Model\\Config' => 
    array (
      'staging_pagecache_bypass' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Plugin\\PageCache\\Model\\Config',
      ),
    ),
    'Magento\\Store\\Model\\BaseUrlChecker' => 
    array (
      'staging_store_baseurl_check_bypass' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Plugin\\Store\\Model\\BaseUrlChecker',
      ),
    ),
    'Magento\\Store\\Controller\\Store\\SwitchAction' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
        'disabled' => true,
      ),
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'staging_preview_store_switch_fixing' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Plugin\\Store\\Controller\\Store\\SwitchAction',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
    ),
    'Magento\\Customer\\Controller\\Ajax\\Login' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
        'disabled' => true,
      ),
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'captcha_validation' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Captcha\\Model\\Customer\\Plugin\\AjaxLogin',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
    ),
    'Magento\\Checkout\\Block\\Cart\\AbstractCart' => NULL,
    'Magento\\Checkout\\Block\\Cart\\Sidebar' => 
    array (
      'login_captcha' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\Captcha\\Model\\Cart\\ConfigPlugin',
      ),
    ),
    'Magento\\Framework\\App\\PageCache\\Identifier' => 
    array (
      'core-app-area-design-exception-plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\PageCache\\Model\\App\\CacheIdentifierPlugin',
      ),
    ),
    'Magento\\Framework\\App\\CacheInterface' => NULL,
    'Magento\\Framework\\App\\Cache' => NULL,
    'Magento\\Framework\\App\\PageCache\\Cache' => 
    array (
      'fpc-type-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageCache\\Model\\App\\PageCachePlugin',
      ),
    ),
    'Magento\\Wishlist\\Controller\\IndexInterface' => NULL,
    'Magento\\Catalog\\Controller\\Product\\View\\ViewInterface' => NULL,
    'Magento\\Wishlist\\Controller\\AbstractIndex' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
        'disabled' => true,
      ),
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'authentication' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Wishlist\\Controller\\Index\\Plugin',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
    ),
    'Magento\\Framework\\Model\\ResourceModel\\Db\\ObjectRelationProcessor' => 
    array (
      'object_constraints_resolver' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\ForeignKey\\ObjectRelationProcessor\\Plugin',
      ),
    ),
    'Magento\\Company\\Model\\Company\\Structure' => 
    array (
      'companyStructurePlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NegotiableQuote\\Plugin\\Company\\Model\\StructurePlugin',
      ),
    ),
    'Magento\\Wishlist\\Block\\AbstractBlock' => 
    array (
      'add_product_object_to_image_data_array' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Model\\Plugin\\ProductImage',
      ),
    ),
    'Magento\\Wishlist\\Block\\Customer\\Sidebar' => 
    array (
      'add_product_object_to_image_data_array' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Model\\Plugin\\ProductImage',
      ),
      'is_visible_wishlist_sidebar' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Company\\Plugin\\Wishlist\\Block\\Customer\\SidebarPlugin',
      ),
    ),
    'Magento\\Sales\\Block\\Reorder\\Sidebar' => 
    array (
      'is_visible_reorder_sidebar' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Company\\Plugin\\Sales\\Block\\Reorder\\SidebarPlugin',
      ),
    ),
    'Magento\\MediaGallerySynchronizationApi\\Model\\ImportFilesInterface' => NULL,
    'Magento\\MediaGallerySynchronizationApi\\Model\\ImportFilesComposite' => 
    array (
      'createMediaGalleryThumbnails' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGalleryUi\\Plugin\\CreateThumbnails',
      ),
    ),
    'Magento\\Cms\\Model\\ResourceModel\\Page' => 
    array (
      'cms_url_rewrite_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CmsUrlRewrite\\Plugin\\Cms\\Model\\ResourceModel\\Page',
      ),
    ),
    'Magento\\Integration\\Api\\IntegrationServiceInterface' => 
    array (
      'webapiIntegrationService' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Integration\\Model\\Plugin\\Integration',
      ),
    ),
    'Magento\\Backend\\Model\\Auth\\Credential\\StorageInterface' => NULL,
    'Magento\\User\\Api\\Data\\UserInterface' => NULL,
    'Magento\\User\\Model\\User' => 
    array (
      'revokeTokensFromInactiveAdmins' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Integration\\Plugin\\Model\\AdminUser',
      ),
      'aroundAdminUserSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NegotiableQuote\\Model\\Plugin\\User\\Model\\User',
      ),
    ),
    'Magento\\Customer\\Model\\Customer' => 
    array (
      'revokeTokensFromInactiveCustomers' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Integration\\Plugin\\Model\\CustomerUser',
      ),
      'reward_notification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Reward\\Model\\Plugin\\CustomerPlugin',
      ),
      'ddg_customer_sendNewAccountEmail_disabler' => 
      array (
        'sortOrder' => 1,
        'disabled' => false,
        'instance' => 'Dotdigitalgroup\\Email\\Plugin\\CustomerPlugin',
      ),
    ),
    'Magento\\Company\\Api\\CompanyRepositoryInterface' => 
    array (
      'companyRepositoryPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CompanyPayment\\Plugin\\Company\\CompanyRepositoryPlugin',
      ),
      'quoteCompanyrepositoryPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NegotiableQuote\\Plugin\\Company\\Api\\CompanyRepositoryInterfacePlugin',
      ),
      'purchase_order_company_repository' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PurchaseOrder\\Plugin\\Company\\Model\\CompanyRepository',
      ),
      'companyShippingCompanyRepositoryPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CompanyShipping\\Plugin\\Company\\CompanyRepositoryPlugin',
      ),
    ),
    'Magento\\Company\\Model\\Company\\DataProvider' => 
    array (
      'companyDataProviderPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CompanyPayment\\Plugin\\Company\\DataProviderPlugin',
      ),
      'aroundGetSettingsData' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NegotiableQuote\\Model\\Plugin\\Company\\Model\\DataProvider',
      ),
      'purchase_order_company_data_provider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PurchaseOrder\\Plugin\\Company\\Model\\DataProvider',
      ),
      'afterGetCompanyResultData' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CompanyCredit\\Plugin\\Company\\Model\\DataProvider',
      ),
      'companyShippingDataProviderPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CompanyShipping\\Plugin\\Company\\DataProviderPlugin',
      ),
    ),
    'Magento\\Quote\\Api\\PaymentMethodManagementInterface' => 
    array (
      'paymentMethodManagementPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CompanyPayment\\Plugin\\Quote\\PaymentMethodManagementPlugin',
      ),
      'paymentMethodManagementPermissionPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CompanyCredit\\Plugin\\Quote\\PaymentMethodManagementPlugin',
      ),
    ),
    'Magento\\Company\\Model\\Customer\\Company' => 
    array (
      'companyPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CompanyPayment\\Plugin\\Company\\Model\\Customer\\CompanyPlugin',
      ),
      'afterCreateCompany' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CompanyCredit\\Plugin\\Company\\Model\\Customer\\CompanyPlugin',
      ),
    ),
    'Magento\\Config\\Model\\Config\\Backend\\Baseurl' => 
    array (
      'admin_system_config_media_gallery_renditions' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGalleryRenditions\\Plugin\\UpdateRenditionsOnConfigChange',
      ),
      'admin_system_config_adobe_stock_save_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGallerySynchronization\\Plugin\\MediaGallerySyncTrigger',
      ),
      'webapiResourceSecurityCacheInvalidate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\WebapiSecurity\\Model\\Plugin\\CacheInvalidator',
      ),
      'updateAnalyticsSubscription' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Analytics\\Model\\Plugin\\BaseUrlConfigPlugin',
      ),
    ),
    'Magento\\Quote\\Model\\QuoteRepository\\LoadHandler' => 
    array (
      'load_handler' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NegotiableQuote\\Model\\Plugin\\Quote\\Model\\LoadHandlerPlugin',
      ),
      'shipping_method' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NegotiableQuote\\Plugin\\Quote\\Model\\UpdateShippingMethodPlugin',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\ShippingAssignment\\ShippingAssignmentPersister' => 
    array (
      'shipping_assignment_persister' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NegotiableQuote\\Model\\Plugin\\Quote\\Model\\ShippingAssignmentPersisterPlugin',
      ),
    ),
    'Magento\\Quote\\Api\\Data\\CartInterface' => NULL,
    'Magento\\Quote\\Model\\Quote' => 
    array (
      'negotiableQuoteAroundPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NegotiableQuote\\Plugin\\Quote\\Model\\QuotePlugin',
      ),
      'remove_store_credit_after_product_delete' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerBalance\\Plugin\\Model\\Quote\\ResetCustomerBalanceUsage',
      ),
      'purchaseOrderQuoteAroundPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PurchaseOrder\\Plugin\\Quote\\Model\\QuotePlugin',
      ),
      'currencyNegotiableQuoteAdminhtmlPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NegotiableQuote\\Plugin\\Quote\\Model\\QuoteAdminhtmlPlugin',
      ),
    ),
    'Magento\\Checkout\\Model\\ConfigProviderInterface' => NULL,
    'Magento\\Checkout\\Model\\DefaultConfigProvider' => 
    array (
      'negotiable_quote_default_config_provider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NegotiableQuote\\Model\\Plugin\\Checkout\\Model\\DefaultConfigProviderPlugin',
      ),
      'TribugsCompanyAddressModelDefaultConfigProvider' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Tribugs\\CompanyAddress\\Plugin\\DefaultConfigProvider',
      ),
    ),
    'Magento\\Company\\Api\\Data\\CompanyInterface' => NULL,
    'Magento\\Company\\Model\\Company' => 
    array (
      'companyAfterLoad' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NegotiableQuote\\Model\\Plugin\\Company\\Model\\Company',
      ),
    ),
    'Magento\\Quote\\Model\\Cart\\Totals\\ItemConverter' => 
    array (
      'beforeModelToDataObject' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NegotiableQuote\\Plugin\\Quote\\Model\\Cart\\Totals\\ItemConverterPlugin',
      ),
    ),
    'Magento\\Customer\\Controller\\Address' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
        'disabled' => true,
      ),
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
    ),
    'Magento\\Customer\\Controller\\Address\\FormPost' => 
    array (
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'redirectToQuote' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NegotiableQuote\\Plugin\\Customer\\Controller\\Address\\FormPostPlugin',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
    ),
    'Magento\\Customer\\Api\\AddressRepositoryInterface' => 
    array (
      'saveQuoteAddress' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NegotiableQuote\\Plugin\\Customer\\SaveAddressPlugin',
      ),
    ),
    'Magento\\Directory\\Block\\Data' => NULL,
    'Magento\\Customer\\Block\\Address\\Edit' => 
    array (
      'getSaveUrl' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NegotiableQuote\\Plugin\\Customer\\Block\\Address\\EditPlugin',
      ),
    ),
    'Magento\\Sales\\Model\\EntityInterface' => NULL,
    'Magento\\Sales\\Api\\Data\\OrderInterface' => NULL,
    'Magento\\Sales\\Model\\Order' => 
    array (
      'express_order_invoice' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Paypal\\Plugin\\OrderCanInvoice',
      ),
      'can_creditmemo_with_store_credit' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerBalance\\Plugin\\CreditMemoResolver',
      ),
      'paymentPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CompanyCredit\\Plugin\\Sales\\Model\\OrderPlugin',
      ),
      'admin-order-placement-comment' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerSales\\Plugin\\AdminAddCommentOnOrderPlacementPlugin',
      ),
      'forceNegotiableQuoteRules' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\NegotiableQuote\\Plugin\\Sales\\Model\\Order\\ForceNegotiableQuoteRulesPlugin',
      ),
    ),
    'Magento\\NegotiableQuote\\Api\\NegotiableQuoteRepositoryInterface' => NULL,
    'Magento\\NegotiableQuote\\Model\\NegotiableQuoteRepository' => 
    array (
      'ddg_b2b_store_negotiable_quote_repository_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Dotdigitalgroup\\B2b\\Plugin\\NegotiableQuotePlugin',
      ),
    ),
    'Magento\\Quote\\Model\\Product\\QuoteItemsCleanerInterface' => NULL,
    'Magento\\Quote\\Model\\Product\\QuoteItemsCleaner' => 
    array (
      'itemRemoveFromNegotiableQuotes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NegotiableQuote\\Plugin\\Quote\\Model\\QuoteItemPlugin',
      ),
    ),
    'Magento\\ScalableCheckout\\Model\\ResourceModel\\Quote\\Item\\Consumer' => 
    array (
      'itemRemoveConsumerFromNegotiableQuotes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NegotiableQuote\\Plugin\\Quote\\Model\\QuoteItemConsumerPlugin',
      ),
    ),
    'Magento\\Company\\Controller\\Adminhtml\\Index\\Save' => 
    array (
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'negotiableQuoteSaveCompany' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NegotiableQuote\\Plugin\\Company\\Controller\\Adminhtml\\Index\\SavePlugin',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\Authentication',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
    ),
    'Magento\\Checkout\\Controller\\Action' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
        'disabled' => true,
      ),
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
    ),
    'Magento\\Checkout\\Controller\\Onepage' => 
    array (
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
    ),
    'Magento\\Checkout\\Controller\\Index\\Index' => 
    array (
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'redirectNotSubmittedQuote' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NegotiableQuote\\Plugin\\Checkout\\Controller\\Index\\IndexPlugin',
      ),
      'redirectPurchaserOrderCheckout' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PurchaseOrder\\Plugin\\Checkout\\Controller\\Index\\IndexPlugin',
      ),
      'amazon_login_checkout_controller' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Amazon\\Login\\Plugin\\CheckoutController',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
    ),
    'Magento\\Quote\\Model\\QuoteAddressValidator' => 
    array (
      'quoteAddressValidatorPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NegotiableQuote\\Plugin\\Quote\\Model\\QuoteAddressValidatorPlugin',
      ),
    ),
    'Magento\\Sales\\Model\\ResourceModel\\Collection\\ExpiredQuotesCollection' => 
    array (
      'filterOutNegotiableQuotes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NegotiableQuote\\Plugin\\Sales\\ExpiredQuotesCollectionPlugin',
      ),
      'cleanExpiredQuotesPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PersistentHistory\\Plugin\\CleanExpiredQuotesPlugin',
      ),
    ),
    'Magento\\Catalog\\Api\\Data\\CategoryInterface' => 
    array (
      'categoryPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\SharedCatalog\\Plugin\\Catalog\\Api\\Data\\CategoryInterfacePlugin',
      ),
    ),
    'Magento\\Catalog\\Api\\Data\\CategoryTreeInterface' => NULL,
    'Magento\\Catalog\\Model\\Category' => 
    array (
      'categoryChange' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Model\\Indexer\\Plugin\\Category',
      ),
      'targetRuleCategoryInvalidate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\TargetRule\\Model\\Indexer\\TargetRule\\Plugin\\Category',
      ),
      'catalogStagingCategoryPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Plugin\\Model\\Category',
      ),
      'apply_after_products_assign' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRule\\Plugin\\Indexer\\Category',
      ),
      'categoryPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\SharedCatalog\\Plugin\\Catalog\\Api\\Data\\CategoryInterfacePlugin',
      ),
    ),
    'Magento\\Rule\\Model\\AbstractModel' => NULL,
    'Magento\\CustomerSegment\\Model\\Segment' => 
    array (
      'targetRuleCustomerSegmentInvalidate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\TargetRule\\Model\\Indexer\\TargetRule\\Plugin\\CustomerSegment',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Initialization\\Helper\\ProductLinks' => 
    array (
      'GroupedProduct' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GroupedProduct\\Model\\Product\\Initialization\\Helper\\ProductLinks\\Plugin\\Grouped',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\Link' => 
    array (
      'groupedProductLinkProcessor' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GroupedProduct\\Model\\ResourceModel\\Product\\Link\\RelationPersister',
      ),
    ),
    'Magento\\Catalog\\Model\\Layer\\FilterList' => 
    array (
      'catalogPermissionsFilterListRemovePrice' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Model\\Plugin\\Catalog\\Model\\Layer\\FilterList',
      ),
    ),
    'Magento\\Config\\Model\\Config' => 
    array (
      'configPermissionChange' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GoogleTagManager\\Model\\Plugin\\Config',
      ),
      'enableAdvancedCheckoutPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\QuickOrder\\Plugin\\Config\\Model\\EnableAdvancedCheckoutPlugin',
      ),
      'baseCurrencyChangeNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CompanyCredit\\Plugin\\Config\\Model\\ConfigPlugin',
      ),
    ),
    'Magento\\Framework\\Pricing\\Render\\PriceBoxRenderInterface' => NULL,
    'Magento\\Framework\\Pricing\\Render\\PriceBox' => 
    array (
      'can_show_price_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Plugin\\Framework\\Pricing\\Render\\CanShowPricePlugin',
      ),
      'price_box_staging_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Plugin\\Catalog\\Pricing\\Render\\PriceBox',
      ),
    ),
    'Magento\\Config\\Model\\Config\\Structure\\Converter' => 
    array (
      'cron_backend_config_structure_converter_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Cron\\Model\\Backend\\Config\\Structure\\Converter',
      ),
    ),
    'Magento\\Framework\\App\\RouterInterface' => 
    array (
      'csp_aware_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Csp\\Plugin\\CspAwareControllerPlugin',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\TotalsCollector' => 
    array (
      'quoteCustomerSegmentUpdater' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerBalance\\Model\\Plugin\\TotalsCollector',
      ),
      'quoteGiftCardAmountUpdater' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftCardAccount\\Model\\Plugin\\TotalsCollector',
      ),
      'in-store-pickup-set-shipping-description' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickupQuote\\Plugin\\Quote\\Address\\SetShippingDescription',
      ),
      'quoteRewardAmountUpdater' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Reward\\Model\\Plugin\\TotalsCollector',
      ),
    ),
    'Magento\\Sales\\Api\\InvoiceRepositoryInterface' => 
    array (
      'get_customer_balance' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerBalance\\Model\\Plugin\\InvoiceRepository',
      ),
      'gift_card_account' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftCardAccount\\Model\\Plugin\\InvoiceRepository',
      ),
      'get_invoice_gift_wrapping' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftWrapping\\Model\\Plugin\\InvoiceGiftWrapping',
      ),
      'get_vertex_invoice_item_attributes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\InvoiceRepositoryPlugin',
      ),
    ),
    'Magento\\Sales\\Api\\CreditmemoRepositoryInterface' => 
    array (
      'get_customer_balance' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerBalance\\Model\\Plugin\\CreditmemoRepository',
      ),
      'gift_card_account' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftCardAccount\\Model\\Plugin\\CreditmemoRepository',
      ),
      'get_credit_memo_gift_wrapping' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GiftWrapping\\Model\\Plugin\\CreditMemoGiftWrapping',
      ),
      'get_vertex_creditmemo_item_attributes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\CreditmemoRepositoryPlugin',
      ),
    ),
    'Magento\\SalesSampleData\\Model\\Order\\Processor' => 
    array (
      'customer_balance' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Magento\\CustomerBalanceSampleData\\Model\\Plugin\\CustomerBalanceRefund',
      ),
    ),
    'Magento\\Framework\\Mail\\TransportInterface' => 
    array (
      'customer-sample-data-disable-registration-email-send' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerSampleData\\Magento\\Framework\\Mail\\Transport\\MailPlugin',
      ),
      'WindowsSmtpConfig' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Email\\Model\\Plugin\\WindowsSmtpConfig',
      ),
      'EmailDisable' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Email\\Model\\Mail\\TransportInterfacePlugin',
      ),
      'ddg_mail_transport' => 
      array (
        'sortOrder' => 1,
        'disabled' => false,
        'instance' => 'Dotdigitalgroup\\Email\\Plugin\\TransportPlugin',
      ),
      'mageplaza_mail_transport' => 
      array (
        'sortOrder' => 1,
        'disabled' => false,
        'instance' => 'Mageplaza\\Smtp\\Mail\\Transport',
      ),
    ),
    'Magento\\Checkout\\Block\\Cart\\LayoutProcessor' => 
    array (
      'checkout_cart_shipping_dhl' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Dhl\\Model\\Plugin\\Checkout\\Block\\Cart\\Shipping',
      ),
      'checkout_cart_shipping_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\OfflineShipping\\Model\\Plugin\\Checkout\\Block\\Cart\\Shipping',
      ),
    ),
    'Magento\\Framework\\View\\Page\\Config' => 
    array (
      'headIncludes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ThemeSampleData\\Plugin\\View\\Page\\Config',
      ),
    ),
    'Magento\\RequisitionListGraphQl\\Model\\RequisitionList\\Item\\AddItemsToRequisitionList' => 
    array (
      'processDownloadableOptionAddToList' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\DownloadableRequisitionListGraphQl\\Plugin\\AddDownloadableItemsToRequisitionList',
      ),
      'processBundleOptionsAddToList' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\BundleRequisitionListGraphQl\\Plugin\\AddBundleItemsToRequisitionList',
      ),
      'processConfigurableProductOptionsAddToList' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\ConfigurableRequisitionListGraphQl\\Plugin\\AddConfigurableItemsToRequisitionList',
      ),
      'processGiftCardOptionsAddToList' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\GiftCardRequisitionListGraphQl\\Plugin\\AddGiftCardItemsToRequisitionList',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Attribute\\RemoveProductAttributeData' => 
    array (
      'removeWeeAttributesData' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Weee\\Plugin\\Catalog\\ResourceModel\\Attribute\\RemoveProductWeeData',
      ),
    ),
    'Magento\\Catalog\\Model\\Indexer\\Category\\Product\\Action\\Rows' => 
    array (
      'catalogsearchFulltextProductAssignment' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Elasticsearch\\Model\\Indexer\\Fulltext\\Plugin\\Category\\Product\\Action\\Rows',
      ),
    ),
    'Magento\\Framework\\Indexer\\Config\\DependencyInfoProviderInterface' => NULL,
    'Magento\\Framework\\Indexer\\Config\\DependencyInfoProvider' => 
    array (
      'indexerDependencyUpdaterPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Elasticsearch\\Model\\Indexer\\Plugin\\DependencyUpdaterPlugin',
      ),
    ),
    'Magento\\Framework\\App\\TemplateTypesInterface' => NULL,
    'Magento\\Email\\Model\\AbstractTemplate' => NULL,
    'Magento\\Framework\\Mail\\TemplateInterface' => NULL,
    'Magento\\Email\\Model\\Template' => 
    array (
      'dotmailer_template_plugin' => 
      array (
        'sortOrder' => 100,
        'disabled' => false,
        'instance' => 'Dotdigitalgroup\\Email\\Plugin\\TemplatePlugin',
      ),
    ),
    'Magento\\Shipping\\Block\\DataProviders\\Tracking\\DeliveryDateTitle' => 
    array (
      'update_delivery_date_title' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Fedex\\Plugin\\Block\\DataProviders\\Tracking\\ChangeTitle',
      ),
      'ups_update_delivery_date_title' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Ups\\Plugin\\Block\\DataProviders\\Tracking\\ChangeTitle',
      ),
    ),
    'Magento\\Shipping\\Block\\Tracking\\Popup' => 
    array (
      'update_delivery_date_value' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Fedex\\Plugin\\Block\\Tracking\\PopupDeliveryDate',
      ),
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\Create' => 
    array (
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\Authentication',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\Create\\Index' => 
    array (
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\Authentication',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\Edit\\Index' => 
    array (
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'order_edit' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\GiftCardAccount\\Controller\\Adminhtml\\Order\\Edit\\Plugin',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\Authentication',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
    ),
    'Magento\\Company\\Controller\\Adminhtml\\Index' => 
    array (
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\Authentication',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
    ),
    'Magento\\Company\\Controller\\Adminhtml\\Index\\Index' => 
    array (
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'shared_catalog_validate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SharedCatalog\\Plugin\\Company\\Controller\\Adminhtml\\Index\\IndexPlugin',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\Authentication',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
    ),
    'Magento\\SharedCatalog\\Api\\SharedCatalogRepositoryInterface' => NULL,
    'Magento\\SharedCatalog\\Model\\Repository' => 
    array (
      'ddg_b2b_shared_catalog_repository_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Dotdigitalgroup\\B2b\\Plugin\\SharedCatalogUpdatePlugin',
      ),
    ),
    'Magento\\Customer\\Model\\Customer\\Source\\GroupSourceInterface' => 
    array (
      'shared_catalogs_group' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SharedCatalog\\Plugin\\Source\\CustomerGroupPlugin',
      ),
    ),
    'Magento\\Customer\\Model\\Customer\\Attribute\\Source\\GroupSourceLoggedInOnlyInterface' => 
    array (
      'shared_catalogs_group' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SharedCatalog\\Plugin\\Source\\CustomerGroupPlugin',
      ),
    ),
    'Magento\\Customer\\Ui\\Component\\Listing\\Column\\Group\\Options' => 
    array (
      'shared_catalogs_group' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SharedCatalog\\Plugin\\Source\\CustomerGroupPlugin',
      ),
    ),
    'Magento\\CustomerSegment\\Model\\ResourceModel\\Segment\\Report\\Detail\\Group\\Option' => 
    array (
      'shared_catalogs_group' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SharedCatalog\\Plugin\\Source\\CustomerGroupReportPlugin',
      ),
    ),
    'Magento\\CatalogPermissions\\Model\\Permission' => 
    array (
      'shared_catalog_update_category_permissions' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SharedCatalog\\Plugin\\CatalogPermissions\\Model\\UpdateSharedCatalogCategoryPermissionsPlugin',
      ),
    ),
    'Magento\\CatalogPermissions\\Model\\Indexer\\Product\\IndexFiller' => 
    array (
      'shared_catalog_update_product_permissions' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SharedCatalog\\Plugin\\CatalogPermissions\\Model\\Indexer\\Product\\UpdateProductPermissionsPlugin',
      ),
    ),
    'Magento\\Catalog\\Api\\CategoryRepositoryInterface' => 
    array (
      'shared_catalog_delete_category_permissions' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SharedCatalog\\Plugin\\Catalog\\Api\\DeleteSharedCatalogCategoryPermissionsPlugin',
      ),
      'DateRangeDesignUpdateCategorySavePlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Plugin\\Api\\DateRangeDesignUpdateCategorySavePlugin',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Copier' => 
    array (
      'AssignSharedCatalogOnDuplicateProductPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SharedCatalog\\Plugin\\Catalog\\Model\\Product\\AssignSharedCatalogOnDuplicateProductPlugin',
      ),
      'copy_source_items' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalogAdminUi\\Plugin\\Catalog\\CopySourceItemsPlugin',
      ),
    ),
    'Magento\\Backend\\Block\\Template' => NULL,
    'Magento\\AdvancedCheckout\\Block\\Adminhtml\\Sku\\Errors\\Grid\\Description' => 
    array (
      'shared_catalog_configure_button' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SharedCatalog\\Plugin\\AdvancedCheckout\\Block\\RenderConfigureButton',
      ),
    ),
    'Magento\\Elasticsearch\\SearchAdapter\\Aggregation\\Builder\\BucketBuilderInterface' => NULL,
    'Magento\\Elasticsearch\\SearchAdapter\\Aggregation\\Builder\\Term' => 
    array (
      'shared_catalog_update_elasticsearch_term_bucket_builder' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SharedCatalog\\Plugin\\Elasticsearch\\SearchAdapter\\Aggregation\\Builder\\UpdateTermBucketBuilderPlugin',
      ),
    ),
    'Magento\\Catalog\\Api\\ProductCustomOptionRepositoryInterface' => 
    array (
      'isOptionExists' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Api\\Plugin\\ProductCustomOptionRepository',
      ),
      'vertex_custom_option_flex_field_db_handler' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\CustomOptionFlexFieldExtensionAttributeHandler',
      ),
    ),
    'Magento\\Catalog\\Model\\Indexer\\Product\\Flat\\Table\\BuilderInterface' => 
    array (
      'addRowIdToFlat' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Plugin\\Model\\Indexer\\Product\\Flat\\Table\\Builder',
      ),
    ),
    'Magento\\Catalog\\Model\\Indexer\\AbstractFlatState' => 
    array (
      'staging_flat_bypass' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Plugin\\Catalog\\Model\\Indexer\\AbstractFlatState',
      ),
    ),
    'Magento\\Catalog\\Controller\\Category\\View' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
        'disabled' => true,
      ),
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'replaceIndex' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Model\\Plugin\\Controller\\View',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
    ),
    'Magento\\Staging\\Model\\VersionManager' => 
    array (
      'catalogStagingVersionManager' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Plugin\\Staging\\Model\\VersionManager',
      ),
    ),
    'Magento\\GroupedProduct\\Model\\Product\\Type\\Grouped' => 
    array (
      'outOfStockFilter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GroupedCatalogInventory\\Plugin\\OutOfStockFilter',
      ),
      'grouped_product_minimum_advertised_price' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MsrpGroupedProduct\\Plugin\\Model\\Product\\Type\\Grouped',
      ),
    ),
    'Magento\\ConfigurableProduct\\Model\\ResourceModel\\Product\\Type\\Configurable\\Product\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
      'joinProductsWhenFlatEnabled' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Model\\Plugin\\ResourceModel\\Product\\JoinProductsWhenFlatEnabled',
      ),
      'joinAttribute' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Model\\Plugin\\ResourceModel\\Product\\Collection',
      ),
      'catalogRulePriceForConfigurableProduct' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRuleConfigurable\\Plugin\\ConfigurableProduct\\Model\\ResourceModel\\AddCatalogRulePrice',
      ),
    ),
    'Magento\\RequisitionList\\Model\\RequisitionListItem\\SaveHandler' => 
    array (
      'aroundSaveItem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GroupedRequisitionList\\Plugin\\Model\\RequisitionListItem\\SaveHandler',
      ),
    ),
    'Magento\\RequisitionList\\Block\\Requisition\\View\\Item' => 
    array (
      'aroundGetProductUrlByItem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GroupedRequisitionList\\Plugin\\Block\\Requisition\\View\\Item',
      ),
    ),
    'Magento\\RequisitionList\\Model\\OptionsManagement' => 
    array (
      'afterGetOptions' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GroupedRequisitionList\\Plugin\\Model\\OptionsManagement',
      ),
    ),
    'Magento\\InventoryApi\\Model\\IsProductAssignedToStockInterface' => NULL,
    'Magento\\Inventory\\Model\\ResourceModel\\IsProductAssignedToStock' => 
    array (
      'cache_product_stock_assignment_check' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Inventory\\Plugin\\Inventory\\Model\\ResourceModel\\IsProductAssignedToStockCache',
      ),
    ),
    'Magento\\AdvancedCheckout\\Model\\AreProductsSalableForRequestedQtyInterface' => NULL,
    'Magento\\AdvancedCheckout\\Model\\AreProductsSalableForRequestedQty' => 
    array (
      'inventory_advanced_checkout_is_in_stock' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryAdvancedCheckout\\Plugin\\Model\\AreProductsSalablePlugin',
      ),
    ),
    'Magento\\CatalogImportExport\\Model\\Import\\Product\\Type\\AbstractType' => NULL,
    'Magento\\BundleImportExport\\Model\\Import\\Product\\Type\\Bundle' => 
    array (
      'process_shipment_type_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleImportExport\\Plugin\\BundleImportExport\\Model\\Import\\Product\\Type\\Bundle\\ProcessShipmentTypePlugin',
      ),
    ),
    'Magento\\InventoryConfigurationApi\\Model\\IsSourceItemManagementAllowedForProductTypeInterface' => 
    array (
      'disable_bundle_type' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProduct\\Plugin\\InventoryConfigurationApi\\IsSourceItemManagementAllowedForProductType\\DisableBundleTypePlugin',
      ),
      'disable_grouped_type' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryGroupedProduct\\Plugin\\InventoryConfigurationApi\\IsSourceItemManagementAllowedForProductType\\DisableGroupedTypePlugin',
      ),
    ),
    'Magento\\Bundle\\Model\\ResourceModel\\Selection\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
      'joinProductsWhenFlatEnabled' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Model\\Plugin\\ResourceModel\\Product\\JoinProductsWhenFlatEnabled',
      ),
      'joinAttribute' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Model\\Plugin\\ResourceModel\\Product\\Collection',
      ),
      'adapt_add_quantity_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProduct\\Plugin\\Bundle\\Model\\ResourceModel\\Selection\\Collection\\AdaptAddQuantityFilterPlugin',
      ),
      'productCollectionPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\BundleSharedCatalog\\Plugin\\Bundle\\Model\\ResourceModel\\Selection\\CollectionPlugin',
      ),
      'Bundle' => 
      array (
        'sortOrder' => 60,
        'instance' => 'Magento\\Bundle\\Model\\ResourceModel\\Selection\\Plugin\\Collection',
      ),
    ),
    'Magento\\Bundle\\Api\\ProductLinkManagementInterface' => 
    array (
      'validate_source_items_before_add_bundle_selection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProduct\\Plugin\\Bundle\\Model\\LinkManagement\\ValidateSourceItemsBeforeAddBundleSelectionPlugin',
      ),
      'validate_source_items_before_save_bundle_selection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProduct\\Plugin\\Bundle\\Model\\LinkManagement\\ValidateSourceItemsBeforeSaveBundleSelectionPlugin',
      ),
      'reindex_source_items_after_add_bundle_selection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProductIndexer\\Plugin\\Bundle\\Model\\LinkManagement\\ReindexSourceItemsAfterAddBundleSelectionPlugin',
      ),
      'reindex_source_items_after_save_bundle_selection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProductIndexer\\Plugin\\Bundle\\Model\\LinkManagement\\ReindexSourceItemsAfterSaveBundleSelectionPlugin',
      ),
      'reindex_source_items_after_remove_bundle_selection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProductIndexer\\Plugin\\Bundle\\Model\\LinkManagement\\ReindexSourceItemsAfterRemoveBundleSelectionPlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Helper\\Stock' => 
    array (
      'adapt_assign_stock_status_to_bundle_product' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProduct\\Plugin\\CatalogInventory\\Helper\\Stock\\AdaptAssignStatusToProductPlugin',
      ),
      'adapt_add_in_stock_filter_to_collection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Helper\\Stock\\AdaptAddInStockFilterToCollectionPlugin',
      ),
      'adapt_add_stock_status_to_products' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Helper\\Stock\\AdaptAddStockStatusToProductsPlugin',
      ),
      'adapt_assign_status_to_product' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Helper\\Stock\\AdaptAssignStatusToProductPlugin',
      ),
    ),
    'Magento\\InventoryIndexer\\Indexer\\Stock\\Strategy\\Sync' => 
    array (
      'bundle_product_index_full' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProductIndexer\\Plugin\\InventoryIndexer\\Indexer\\Stock\\Strategy\\Sync\\ReindexFullPlugin',
      ),
      'bundle_product_index_list' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProductIndexer\\Plugin\\InventoryIndexer\\Indexer\\Stock\\Strategy\\Sync\\ReindexListPlugin',
      ),
      'update_product_prices_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\InventoryIndexer\\Indexer\\Stock\\Strategy\\Sync\\PriceIndexUpdatePlugin',
      ),
      'configurable_product_full_index' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryConfigurableProductIndexer\\Plugin\\InventoryIndexer\\Indexer\\Stock\\Strategy\\Sync\\ReindexFullPlugin',
      ),
      'configurable_product_index_list' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryConfigurableProductIndexer\\Plugin\\InventoryIndexer\\Indexer\\Stock\\Strategy\\Sync\\ReindexListPlugin',
      ),
      'grouped_product_index_list' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryGroupedProductIndexer\\Plugin\\InventoryIndexer\\Indexer\\Stock\\Strategy\\Sync\\ReindexListPlugin',
      ),
      'grouped_product_index_full' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryGroupedProductIndexer\\Plugin\\InventoryIndexer\\Indexer\\Stock\\Strategy\\Sync\\ReindexFullPlugin',
      ),
      'invalidate_products_cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCache\\Plugin\\InventoryIndexer\\Indexer\\Stock\\Strategy\\Sync\\CacheFlush',
      ),
    ),
    'Magento\\InventoryIndexer\\Indexer\\SourceItem\\Strategy\\Sync' => 
    array (
      'bundle_product_index' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProductIndexer\\Plugin\\InventoryIndexer\\Indexer\\SourceItem\\Strategy\\Sync\\SourceItemIndexerPlugin',
      ),
      'priceIndexUpdater' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\InventoryIndexer\\Indexer\\SourceItem\\Strategy\\Sync\\PriceIndexUpdater',
      ),
      'grouped_product_index' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryGroupedProductIndexer\\Plugin\\InventoryIndexer\\Indexer\\SourceItem\\Strategy\\Sync\\SourceItemIndexerPlugin',
      ),
      'invalidate_products_cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCache\\Plugin\\InventoryIndexer\\Indexer\\SourceItem\\Strategy\\Sync\\CacheFlush',
      ),
      'configurable_product_index' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\InventoryConfigurableProductIndexer\\Plugin\\InventoryIndexer\\Indexer\\SourceItem\\Strategy\\Sync\\SourceItemIndexerPlugin',
      ),
    ),
    'Magento\\InventoryApi\\Api\\StockRepositoryInterface' => 
    array (
      'prevent_default_stock_deleting' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\InventoryApi\\StockRepository\\PreventDeleting\\DefaultStockPlugin',
      ),
      'load_sales_channels_on_get_list' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\InventoryApi\\StockRepository\\LoadSalesChannelsOnGetListPlugin',
      ),
      'load_sales_channels_on_get' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\InventoryApi\\StockRepository\\LoadSalesChannelsOnGetPlugin',
      ),
      'prevent_deleting_assigned_to_sales_channels_stock' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\InventoryApi\\StockRepository\\PreventDeletingAssignedToSalesChannelsStockPlugin',
      ),
      'add_notice_for_unassigned_sales_channels' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\InventorySalesAdminUi\\Plugin\\InventoryApi\\StockRepository\\AddNoticeForUnassignedSalesChannels',
      ),
      'save_sales_channels_links' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\InventorySales\\Plugin\\InventoryApi\\StockRepository\\SaveSalesChannelsLinksPlugin',
      ),
    ),
    'Magento\\InventoryApi\\Api\\SourceItemsSaveInterface' => 
    array (
      'set_data_to_legacy_catalog_inventory_at_source_items_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\InventoryApi\\SetDataToLegacyCatalogInventoryAtSourceItemsSavePlugin',
      ),
      'reindex_after_source_items_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryIndexer\\Plugin\\InventoryApi\\ReindexAfterSourceItemsSavePlugin',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\Indexer\\Price\\PriceModifierInterface' => NULL,
    'Magento\\CatalogInventory\\Model\\Indexer\\ProductPriceIndexFilter' => 
    array (
      'change_select_for_price_modifier' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Model\\Indexer\\ModifySelectInProductPriceIndexFilter',
      ),
    ),
    'Magento\\InventoryApi\\Api\\SourceItemsDeleteInterface' => 
    array (
      'set_to_zero_legacy_catalog_inventory_at_source_items_delete' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\InventoryApi\\SetToZeroLegacyCatalogInventoryAtSourceItemsDeletePlugin',
      ),
      'reindex_after_source_items_delete' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryIndexer\\Plugin\\InventoryApi\\ReindexAfterSourceItemsDeletePlugin',
      ),
      'inventory_low_quantity_notification_source_item_delete' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryLowQuantityNotification\\Plugin\\InventoryApi\\SourceItemsDeleteInterfacePlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\ResourceModel\\QtyCounterInterface' => 
    array (
      'update_source_item_at_legacy_qty_counter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\UpdateSourceItemAtLegacyQtyCounterPlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\ResourceModel\\Stock\\Item' => 
    array (
      'update_source_item_at_legacy_stock_item_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\UpdateSourceItemAtLegacyStockItemSavePlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\ResourceModel\\Stock\\Status' => 
    array (
      'adapt_add_stock_data_to_collection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Model\\ResourceModel\\Stock\\Status\\AdaptAddStockDataToCollectionPlugin',
      ),
      'adapt_add_stock_status_to_select' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Model\\ResourceModel\\Stock\\Status\\AdaptAddStockStatusToSelectPlugin',
      ),
      'adapt_add_is_in_stock_filter_to_collection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Model\\ResourceModel\\Stock\\Status\\AdaptAddIsInStockFilterToCollectionPlugin',
      ),
    ),
    'Magento\\InventorySalesApi\\Api\\GetStockBySalesChannelInterface' => 
    array (
      'adapt_stock_resolver_to_admin_website' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\InventorySalesApi\\StockResolver\\AdaptStockResolverToAdminWebsitePlugin',
      ),
    ),
    'Magento\\InventoryApi\\Api\\StockSourceLinksDeleteInterface' => 
    array (
      'prevent_delete_default_stock_links' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\InventoryApi\\StockSourceLinksDelete\\PreventDeleteDefaultStockLinksPlugin',
      ),
      'invalidate_after_stock_source_links_delete' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryIndexer\\Plugin\\InventoryApi\\InvalidateAfterStockSourceLinksDeletePlugin',
      ),
    ),
    'Magento\\Inventory\\Model\\SourceItem\\Command\\SourceItemsSaveWithoutLegacySynchronization' => 
    array (
      'set_data_to_legacy_catalog_inventory_at_source_items_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\InventoryApi\\SetDataToLegacyCatalogInventoryAtSourceItemsSavePlugin',
        'disabled' => true,
      ),
      'reindex_after_source_items_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryIndexer\\Plugin\\InventoryApi\\ReindexAfterSourceItemsSavePlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Api\\StockRegistryInterface' => 
    array (
      'adapt_get_stock_status' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Api\\StockRegistry\\AdaptGetStockStatusPlugin',
      ),
      'adapt_get_stock_status_by_sku' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Api\\StockRegistry\\AdaptGetStockStatusBySkuPlugin',
      ),
      'adapt_get_product_stock_status' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Api\\StockRegistry\\AdaptGetProductStockStatusPlugin',
      ),
      'adapt_get_product_stock_status_by_sku' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Api\\StockRegistry\\AdaptGetProductStockStatusBySkuPlugin',
      ),
      'ddg_stock_update_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Dotdigitalgroup\\Email\\Plugin\\StockUpdatePlugin',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Initialization\\StockDataFilter' => 
    array (
      'allow_negative_min_qty' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\Catalog\\Controller\\Adminhtml\\Product\\Initialization\\StockDataFilter\\AllowNegativeMinQtyPlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Api\\Data\\StockItemInterface' => 
    array (
      'adapt_min_qty_to_backorders' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Api\\Data\\StockItemInterface\\AdaptMinQtyToBackordersPlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\Spi\\StockStateProviderInterface' => 
    array (
      'adapt_verify_stock_to_negative_min_qty' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Model\\Spi\\StockStateProvider\\AdaptVerifyStockToNegativeMinQtyPlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\ResourceModel\\StockStatusFilterInterface' => 
    array (
      'inventory_catalog_stock_status_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\CatalogInventory\\Model\\ResourceModel\\StockStatusFilterPlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Api\\StockStateInterface' => 
    array (
      'check_quote_item_qty' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\StockState\\CheckQuoteItemQtyPlugin',
      ),
      'suggest_qty' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\StockState\\SuggestQtyPlugin',
      ),
    ),
    'Magento\\InventoryReservationsApi\\Model\\AppendReservationsInterface' => 
    array (
      'prevent_append_reservation_on_not_manage_items_in_stock' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\InventoryReservationsApi\\PreventAppendReservationOnNotManageItemsInStockPlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Api\\StockManagementInterface' => NULL,
    'Magento\\CatalogInventory\\Api\\RegisterProductSaleInterface' => 
    array (
      'process_register_products_sale' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\CatalogInventory\\StockManagement\\ProcessRegisterProductsSalePlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Api\\RevertProductSaleInterface' => NULL,
    'Magento\\CatalogInventory\\Model\\StockManagement' => 
    array (
      'process_register_products_sale' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\CatalogInventory\\StockManagement\\ProcessRegisterProductsSalePlugin',
      ),
      'process_back_item_qty' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\CatalogInventory\\StockManagement\\ProcessBackItemQtyPlugin',
      ),
      'process_revert_products_sale' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\CatalogInventory\\StockManagement\\ProcessRevertProductsSalePlugin',
      ),
    ),
    'Magento\\SalesInventory\\Model\\Order\\ReturnProcessor' => 
    array (
      'process_return_product_qty_on_credit_memo' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\SalesInventory\\ProcessReturnQtyOnCreditMemoPlugin',
      ),
    ),
    'Magento\\InventoryConfigurationApi\\Api\\GetStockItemConfigurationInterface' => 
    array (
      'load_stock_item_is_in_stock' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalog\\Plugin\\InventoryConfigurationApi\\GetStockItemConfiguration\\LoadIsInStockPlugin',
      ),
    ),
    'Magento\\InventorySalesApi\\Model\\GetSkuFromOrderItemInterface' => 
    array (
      'get_configurable_option_sku_from_order' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryConfigurableProduct\\Plugin\\Sales\\GetSkuFromOrderItem',
      ),
    ),
    'Magento\\CatalogInventory\\Observer\\ParentItemProcessorInterface' => 
    array (
      'adapt_parent_stock_processor' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryConfigurableProduct\\Plugin\\CatalogInventory\\Observer\\ParentItemProcessor\\AdaptParentItemProcessorPlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\System\\Config\\Backend\\Minqty' => 
    array (
      'admin_system_config_media_gallery_renditions' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGalleryRenditions\\Plugin\\UpdateRenditionsOnConfigChange',
      ),
      'admin_system_config_adobe_stock_save_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGallerySynchronization\\Plugin\\MediaGallerySyncTrigger',
      ),
      'webapiResourceSecurityCacheInvalidate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\WebapiSecurity\\Model\\Plugin\\CacheInvalidator',
      ),
      'allow_negative_min_qty_in_config' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryConfiguration\\Plugin\\CatalogInventory\\Model\\System\\Config\\Backend\\Minqty\\AllowNegativeMinQtyInConfigPlugin',
      ),
    ),
    'Magento\\InventoryConfiguration\\Model\\GetLegacyStockItem' => 
    array (
      'cache_legacy_stock_item' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryConfiguration\\Plugin\\InventoryConfiguration\\Model\\GetLegacyStockItemCache',
      ),
    ),
    'Magento\\InventoryApi\\Api\\SourceRepositoryInterface' => 
    array (
      'load_in_store_pickup_on_get_list' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickup\\Plugin\\InventoryApi\\SourceRepository\\LoadInStorePickupOnGetListPlugin',
      ),
      'invalidate_after_enabling_or_disabling_source' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryIndexer\\Plugin\\InventoryApi\\InvalidateAfterEnablingOrDisablingSourcePlugin',
      ),
      'load_in_store_pickup_on_get' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickup\\Plugin\\InventoryApi\\SourceRepository\\LoadInStorePickupOnGetPlugin',
      ),
      'save_in_store_pickup_links' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickup\\Plugin\\InventoryApi\\SourceRepository\\SaveInStorePickupPlugin',
      ),
      'updateSourceLatitudeAndLongitude' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\InventoryDistanceBasedSourceSelection\\Plugin\\FillSourceLatitudeAndLongitude',
      ),
    ),
    'Magento\\InventoryApi\\Api\\StockSourceLinksSaveInterface' => 
    array (
      'invalidate_after_stock_source_links_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryIndexer\\Plugin\\InventoryApi\\InvalidateAfterStockSourceLinksSavePlugin',
      ),
    ),
    'Magento\\InventorySalesApi\\Api\\PlaceReservationsForSalesEventInterface' => NULL,
    'Magento\\InventorySales\\Model\\PlaceReservationsForSalesEvent' => 
    array (
      'schedule_reservation_place' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryIndexer\\Plugin\\InventorySales\\EnqueueAfterPlaceReservationsForSalesEvent',
      ),
    ),
    'Magento\\InventoryCatalog\\Model\\UpdateInventory' => 
    array (
      'updateParentLegacyStockStatus' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryGroupedProduct\\Plugin\\InventoryCatalog\\Model\\UpdateParentStockStatusPlugin',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Link' => 
    array (
      'process_source_items_after_save_links' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryGroupedProductAdminUi\\Plugin\\Catalog\\Model\\Product\\Link\\ProcessSourceItemsAfterSaveAssociatedLinks',
      ),
    ),
    'Magento\\CatalogImportExport\\Model\\StockItemImporterInterface' => 
    array (
      'importStockItemDataForSourceItem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryImportExport\\Plugin\\Import\\SourceItemImporter',
      ),
    ),
    'Magento\\Framework\\Model\\ResourceModel\\Db\\VersionControl\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
      'collection_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\CollectionFilter',
      ),
    ),
    'Magento\\Quote\\Model\\ResourceModel\\Quote\\Address\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
      'collection_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\CollectionFilter',
      ),
      'add_pickup_location_to_quote_address' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\InventoryInStorePickupQuote\\Plugin\\Quote\\AddressCollection\\GetPickupLocationInformationPlugin',
      ),
    ),
    'Magento\\Quote\\Model\\ShippingAddressManagementInterface' => 
    array (
      'shipping_address_management_replace_shipping_address' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\InventoryInStorePickupQuote\\Plugin\\Quote\\ReplaceShippingAddressForShippingAddressManagement',
      ),
    ),
    'Magento\\Quote\\Api\\BillingAddressManagementInterface' => 
    array (
      'do_not_use_billing_address_for_shipping_for_in_store_pickup_quote' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\InventoryInStorePickupQuote\\Plugin\\Quote\\DoNotUseBillingAddressForShipping',
      ),
    ),
    'Magento\\Integration\\Model\\ConfigBasedIntegrationManager' => 
    array (
      'webapiSetup' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Webapi\\Model\\Plugin\\Manager',
      ),
    ),
    'Magento\\InventoryIndexer\\Model\\Queue\\UpdateIndexSalabilityStatus' => 
    array (
      'invalidate_products_cache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCache\\Plugin\\InventoryIndexer\\Queue\\Reservation\\UpdateSalabilityStatus\\CacheFlush',
      ),
    ),
    'Magento\\InventoryCatalogApi\\Api\\BulkInventoryTransferInterface' => 
    array (
      'inventory_low_quantity_bulk_transfer' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryLowQuantityNotification\\Plugin\\InventoryCatalogApi\\BulkConfigurationTransferInterfacePlugin',
      ),
    ),
    'Magento\\InventoryCatalogApi\\Api\\BulkSourceAssignInterface' => 
    array (
      'inventory_low_quantity_bulk_source_assign' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryLowQuantityNotification\\Plugin\\InventoryCatalogApi\\BulkSourceAssignInterfacePlugin',
      ),
    ),
    'Magento\\InventoryCatalogApi\\Api\\BulkSourceUnassignInterface' => 
    array (
      'inventory_low_quantity_bulk_source_unassign' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryLowQuantityNotification\\Plugin\\InventoryCatalogApi\\BulkSourceUnassignInterfacePlugin',
      ),
    ),
    'Magento\\InventoryLowQuantityNotificationApi\\Api\\SourceItemConfigurationsSaveInterface' => 
    array (
      'update_legacy_stock_item_configuration_at_source_item_configuration_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryLowQuantityNotification\\Plugin\\InventoryLowQuantityNotificationApi\\UpdateLegacyStockItemConfigurationAtSourceItemConfigurationSavePlugin',
      ),
    ),
    'Magento\\Inventory\\Model\\ResourceModel\\SourceItem\\DeleteMultiple' => 
    array (
      'delete_source_items_configuration' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryLowQuantityNotification\\Plugin\\Inventory\\Model\\ResourceModel\\SourceItem\\DeleteMultiple\\DeleteSourceItemsConfigurationPlugin',
      ),
    ),
    'Magento\\ProductAlert\\Model\\ProductSalability' => 
    array (
      'product_alert_adapt_salability' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryProductAlert\\Plugin\\AdaptProductSalabilityPlugin',
      ),
    ),
    'Magento\\RequisitionList\\Model\\RequisitionListItem\\ValidatorInterface' => NULL,
    'Magento\\RequisitionList\\Model\\RequisitionListItem\\Validator\\Stock' => 
    array (
      'magentoRequisitionListStockPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryRequisitionList\\Plugin\\Model\\RequisitionListItem\\Validator\\StockPlugin',
      ),
    ),
    'Magento\\CatalogInventory\\Block\\Stockqty\\AbstractStockqty' => 
    array (
      'magentoInventorySalesFrontendUiAbstractStockqty' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySalesFrontendUi\\Plugin\\Block\\Stockqty\\AbstractStockqtyPlugin',
      ),
    ),
    'Magento\\Setup\\Model\\FixtureGenerator\\EntityGeneratorFactory' => 
    array (
      'update_custom_table_map' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySetupFixtureGenerator\\Plugin\\Setup\\Model\\FixtureGenerator\\EntityGeneratorFactory\\UpdateCustomTableMapPlugin',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\ShipmentFactory' => 
    array (
      'assign_source_code_to_shipment' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryShipping\\Plugin\\Sales\\Shipment\\AssignSourceCodeToShipmentPlugin',
      ),
    ),
    'Magento\\Sales\\Api\\ShipmentRepositoryInterface' => 
    array (
      'GetListShipmentRepository' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryShipping\\Plugin\\Sales\\Model\\Order\\GetListShipmentRepositoryPlugin',
      ),
    ),
    'Magento\\VisualMerchandiser\\Model\\Resolver\\QuantityAndStock' => 
    array (
      'magentoVisualMerchandiserResolverQuantityAndStockPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryVisualMerchandiser\\Plugin\\Model\\Resolver\\QuantityAndStockPlugin',
      ),
    ),
    'Magento\\Backend\\Model\\Auth' => 
    array (
      'login_as_customer_admin_logout' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomer\\Plugin\\AdminLogoutPlugin',
      ),
      'security_admin_sessions_login' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Security\\Model\\Plugin\\Auth',
      ),
    ),
    'Magento\\Framework\\Api\\DataObjectHelper' => 
    array (
      'add_allow_remote_shopping_assistance_to_customer' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerGraphQl\\Plugin\\DataObjectHelperPlugin',
      ),
    ),
    'Magento\\LoginAsCustomerApi\\Api\\AuthenticateCustomerBySecretInterface' => 
    array (
      'process_shopping_cart' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerQuote\\Plugin\\LoginAsCustomerApi\\ProcessShoppingCartPlugin',
      ),
    ),
    'Magento\\MediaGalleryApi\\Api\\DeleteAssetsByPathsInterface' => 
    array (
      'remove_media_content_after_asset_is_removed_by_path' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaContent\\Plugin\\MediaGalleryAssetDeleteByPath',
      ),
      'delete_renditions_on_assets_delete' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGalleryRenditions\\Plugin\\RemoveRenditions',
      ),
    ),
    'Magento\\MediaGalleryApi\\Api\\DeleteDirectoriesByPathsInterface' => 
    array (
      'remove_media_content_after_asset_is_removed_by_directory_path' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaContent\\Plugin\\MediaGalleryAssetDeleteByDirectoryPath',
      ),
    ),
    'Magento\\MediaGallerySynchronization\\Model\\Consume' => 
    array (
      'synchronize_media_content' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaContentSynchronization\\Plugin\\SynchronizeMediaContent',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Gallery\\Processor' => 
    array (
      'media_gallery_image_remove_metadata' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGalleryCatalog\\Plugin\\Product\\Gallery\\RemoveAssetAfterRemoveImage',
      ),
    ),
    'Magento\\Cms\\Model\\Wysiwyg\\Images\\GetInsertImageContent' => 
    array (
      'set_rendition_path' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGalleryRenditions\\Plugin\\SetRenditionPath',
      ),
    ),
    'Magento\\MediaGallerySynchronizationApi\\Model\\CreateAssetFromFileInterface' => 
    array (
      'addMetadataToAssetCreatedFromFile' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGallerySynchronizationMetadata\\Plugin\\CreateAssetFromFileMetadata',
      ),
    ),
    'Magento\\Framework\\App\\MaintenanceMode' => 
    array (
      'amqp_maintenance_mode' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MessageQueue\\Model\\Plugin\\ResourceModel\\Lock',
      ),
    ),
    'Magento\\Framework\\App\\Rss\\DataProviderInterface' => NULL,
    'Magento\\Wishlist\\Model\\Rss\\Wishlist' => 
    array (
      'aroundGetHeader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MultipleWishlist\\Model\\Plugin\\Rss\\Wishlist',
      ),
    ),
    'Magento\\MultipleWishlist\\Controller\\IndexInterface' => NULL,
    'Magento\\MultipleWishlist\\Controller\\AbstractIndex' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
        'disabled' => true,
      ),
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'authentication' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Wishlist\\Controller\\Index\\Plugin',
      ),
      'multiple_enabled_filter' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\MultipleWishlist\\Controller\\Index\\Plugin',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
    ),
    'Magento\\SharedCatalog\\Api\\ProductItemRepositoryInterface' => 
    array (
      'deleteItemsFromNegotiableQuote' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\NegotiableQuoteSharedCatalog\\Plugin\\DeleteUnavailableNegotiableQuoteItems',
      ),
      'deleteItemsFromQuote' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\NegotiableQuoteSharedCatalog\\Plugin\\DeleteUnavailableQuoteItems',
      ),
    ),
    'Magento\\NegotiableQuote\\Model\\Quote\\Totals' => 
    array (
      'totals_calculate_weee' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NegotiableQuoteWeee\\Plugin\\Model\\Quote\\TotalsPlugin',
      ),
    ),
    'Magento\\NegotiableQuote\\Model\\QuoteUpdatesInfo' => 
    array (
      'show_weee_attribute' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NegotiableQuoteWeee\\Plugin\\Model\\QuoteUpdatesInfoPlugin',
      ),
    ),
    'Magento\\Framework\\AppInterface' => NULL,
    'Magento\\Framework\\App\\Http' => 
    array (
      'framework-http-newrelic' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NewRelicReporting\\Plugin\\HttpPlugin',
      ),
    ),
    'Magento\\Framework\\App\\State' => 
    array (
      'framework-state-newrelic' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NewRelicReporting\\Plugin\\StatePlugin',
      ),
    ),
    'Symfony\\Component\\Console\\Command\\Command' => 
    array (
      'newrelic-describe-commands' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NewRelicReporting\\Plugin\\CommandPlugin',
      ),
    ),
    'Magento\\Framework\\Profiler\\Driver\\Standard\\Stat' => 
    array (
      'newrelic-describe-cronjobs' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NewRelicReporting\\Plugin\\StatPlugin',
      ),
    ),
    'Magento\\Newsletter\\Model\\Subscriber' => 
    array (
      'ddg_newsletter_disabler' => 
      array (
        'sortOrder' => 1,
        'disabled' => false,
        'instance' => 'Dotdigitalgroup\\Email\\Plugin\\SubscriberPlugin',
      ),
    ),
    'Magento\\Widget\\Block\\BlockInterface' => NULL,
    'Magento\\CatalogWidget\\Block\\Product\\ProductsList' => 
    array (
      'add_product_object_to_image_data_array' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Model\\Plugin\\ProductImage',
      ),
      'pagebuilder_product_list' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageBuilder\\Plugin\\Catalog\\Block\\Product\\ProductsListPlugin',
      ),
    ),
    'Magento\\Payment\\Model\\MethodInterface' => NULL,
    'Magento\\Quote\\Api\\Data\\PaymentMethodInterface' => NULL,
    'Magento\\Payment\\Model\\Method\\AbstractMethod' => 
    array (
      'paymentMethodIsAvailable' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PaymentStaging\\Plugin\\Model\\Method\\PaymentMethodIsAvailable',
      ),
    ),
    'Magento\\Payment\\Model\\SaleOperationInterface' => NULL,
    'Magento\\Payment\\Model\\Method\\Adapter' => 
    array (
      'paymentGatewayIsAvailable' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PaymentStaging\\Plugin\\Model\\Method\\PaymentMethodIsAvailable',
      ),
    ),
    'Magento\\Sales\\Api\\Data\\OrderPaymentInterface' => 
    array (
      'PaymentVaultExtensionAttributeOperations' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Vault\\Plugin\\PaymentVaultAttributesLoad',
      ),
    ),
    'Magento\\Payment\\Model\\Checks\\SpecificationInterface' => NULL,
    'Magento\\Payment\\Model\\Checks\\Composite' => 
    array (
      'paypal_specification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Paypal\\Model\\Method\\Checks\\SpecificationPlugin',
      ),
    ),
    'Magento\\Sales\\Model\\ValidatorInterface' => NULL,
    'Magento\\Sales\\Model\\Order\\Validation\\CanInvoice' => 
    array (
      'express_order_invoice' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Paypal\\Plugin\\ValidatorCanInvoice',
      ),
    ),
    'Magento\\Framework\\Session\\SessionStartChecker' => 
    array (
      'transparent_session_checker' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Paypal\\Plugin\\TransparentSessionChecker',
      ),
    ),
    'Magento\\Payment\\Model\\InfoInterface' => NULL,
    'Magento\\Sales\\Model\\Order\\Payment\\Info' => NULL,
    'Magento\\Sales\\Model\\Order\\Payment' => 
    array (
      'PaymentVaultExtensionAttributeOperations' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Vault\\Plugin\\PaymentVaultAttributesLoad',
      ),
      'paypal_transparent' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Paypal\\Plugin\\TransparentOrderPayment',
      ),
      'amazon_pay_order_payment' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Amazon\\Payment\\Plugin\\OrderCurrencyComment',
      ),
    ),
    'Magento\\NegotiableQuote\\Model\\History\\SnapshotManagement' => 
    array (
      'change_author_to_system_if_purchase_order_is_in_final_status' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PurchaseOrder\\Plugin\\NegotiableQuote\\Model\\History\\SnapshotManagement',
      ),
    ),
    'Magento\\SalesRule\\Model\\Coupon\\Quote\\UpdateCouponUsages' => 
    array (
      'purchaseOrderSalesRuleUpdateCouponUsagesPlugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\PurchaseOrder\\Plugin\\Quote\\Model\\UpdateCouponUsagesPlugin',
      ),
    ),
    'Magento\\CompanyCredit\\Model\\CompanyCreditPaymentConfigProvider' => 
    array (
      'purchaseOrderCompanyCreditConfigProviderPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PurchaseOrder\\Plugin\\CompanyCredit\\CompanyCreditPaymentConfigProviderPlugin',
      ),
    ),
    'Magento\\Quote\\Model\\AddressAdditionalDataProcessor' => 
    array (
      'persistent_remember_me_checkbox_processor' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Persistent\\Model\\Checkout\\AddressDataProcessorPlugin',
      ),
    ),
    'Magento\\Customer\\CustomerData\\SectionSourceInterface' => NULL,
    'Magento\\Customer\\CustomerData\\Customer' => 
    array (
      'section_data' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Persistent\\Model\\Plugin\\CustomerData',
      ),
    ),
    'Magento\\Framework\\View\\Element\\UiComponentInterface' => NULL,
    'Magento\\Ui\\Component\\AbstractComponent' => NULL,
    'Magento\\Ui\\Component\\Listing\\Columns\\ColumnInterface' => NULL,
    'Magento\\Ui\\Component\\Listing\\Columns\\Column' => NULL,
    'Magento\\Catalog\\Ui\\Component\\Listing\\Columns\\Price' => 
    array (
      'price-permission-grid-columns-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PricePermissions\\Ui\\Component\\Listing\\Columns\\Price\\Plugin',
      ),
    ),
    'Magento\\Framework\\EntityManager\\Operation\\ExtensionInterface' => NULL,
    'Magento\\Catalog\\Model\\Product\\Gallery\\CreateHandler' => 
    array (
      'external_video_media_entry_saver' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ProductVideo\\Model\\Plugin\\Catalog\\Product\\Gallery\\CreateHandler',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Gallery\\ReadHandler' => 
    array (
      'external_video_media_entry_reader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ProductVideo\\Model\\Plugin\\Catalog\\Product\\Gallery\\ReadHandler',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\Gallery' => 
    array (
      'external_video_media_resource_backend' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ProductVideo\\Model\\Plugin\\ExternalVideoResourceBackend',
      ),
    ),
    'Magento\\PurchaseOrder\\Model\\Customer\\Authorization\\ActionInterface' => NULL,
    'Magento\\PurchaseOrder\\Model\\Customer\\Authorization\\ApproveRejectPurchaseOrder' => 
    array (
      'purchase_order_approve_reject_after_is_allowed' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PurchaseOrderRule\\Plugin\\Customer\\Authorization\\ApproveRejectPurchaseOrderPlugin',
      ),
    ),
    'Magento\\PurchaseOrder\\Model\\Customer\\Authorization\\ViewPurchaseOrder' => 
    array (
      'purchase_order_view_after_is_allowed' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PurchaseOrderRule\\Plugin\\Customer\\Authorization\\ViewPurchaseOrderPlugin',
      ),
    ),
    'Magento\\PurchaseOrder\\Model\\Notification\\ContentSourceInterface' => NULL,
    'Magento\\PurchaseOrder\\Model\\Notification\\Email\\ContentSource\\ApprovalRequiredAction' => 
    array (
      'purchase_order_approve_required_action_after_get_template_vars' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PurchaseOrderRule\\Plugin\\Notification\\Email\\ContentSource\\ApprovalRequiredActionPlugin',
      ),
    ),
    'Magento\\PurchaseOrder\\Model\\Notification\\Email\\ContentSource\\ApprovalAndPaymentDetailsRequiredAction' => 
    array (
      'purchase_order_approve_required_payment_details_action_after_get_template_vars' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PurchaseOrderRule\\Plugin\\Notification\\Email\\ContentSource\\ApprovalAndPaymentDetailsRequiredActionPlugin',
      ),
    ),
    'Magento\\PurchaseOrder\\Api\\PurchaseOrderManagementInterface' => NULL,
    'Magento\\PurchaseOrder\\Model\\PurchaseOrderManagement' => 
    array (
      'purchase_order_reject' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PurchaseOrderRule\\Plugin\\PurchaseOrderManagement',
      ),
    ),
    'Magento\\PurchaseOrder\\Block\\PurchaseOrder\\Grid' => 
    array (
      'purchase_order_grid' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PurchaseOrderRule\\Plugin\\PurchaseOrder\\Grid',
      ),
    ),
    'Magento\\CatalogSearch\\Model\\ResourceModel\\EngineInterface' => 
    array (
      'addNotVisibleProductsToSearchIndex' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\QuickOrder\\Plugin\\CatalogSearch\\Model\\ResourceModel\\EngineInterfacePlugin',
      ),
    ),
    'Magento\\Checkout\\Model\\Cart\\CartInterface' => NULL,
    'Magento\\AdvancedCheckout\\Model\\Cart' => 
    array (
      'modifyCartItemsForQuickOrder' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\QuickOrder\\Plugin\\AdvancedCheckout\\ModifyAffectedItemsPlugin',
      ),
      'addExtraDataToCartItem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\QuickOrder\\Plugin\\AdvancedCheckout\\AddExtraDataToCartItemForQuickOrderPlugin',
      ),
      'setItemsQuantity' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\QuickOrder\\Plugin\\AdvancedCheckout\\SetQuantityForQuickOrderItemsPlugin',
      ),
      'prepareAddProductsBySku' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\QuickOrder\\Plugin\\AdvancedCheckout\\PrepareAddProductsBySkuPlugin',
      ),
    ),
    'Magento\\MediaStorage\\Model\\File\\Storage\\Synchronization' => 
    array (
      'remoteMedia' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\RemoteStorage\\Plugin\\MediaStorage',
      ),
    ),
    'Magento\\Framework\\Image\\Adapter\\AdapterInterface' => NULL,
    'Magento\\Framework\\Image\\Adapter\\AbstractAdapter' => 
    array (
      'remoteImageFile' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\RemoteStorage\\Plugin\\Image',
      ),
    ),
    'Magento\\ScheduledImportExport\\Model\\Scheduled\\Operation\\Data' => 
    array (
      'serverType' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\RemoteStorageCommerce\\Plugin\\ServerType',
      ),
    ),
    'Magento\\ImportExport\\Model\\Import\\AbstractEntity' => NULL,
    'Magento\\ImportExport\\Model\\Import\\Entity\\AbstractEav' => NULL,
    'Magento\\CustomerImportExport\\Model\\Import\\AbstractCustomer' => NULL,
    'Magento\\CustomerImportExport\\Model\\Import\\Customer' => 
    array (
      'rewardAttributes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Reward\\Model\\Plugin\\ImportCustomer',
      ),
    ),
    'Magento\\CustomerBalance\\Model\\Creditmemo\\Balance' => 
    array (
      'customerBalanceSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Reward\\Model\\Plugin\\CustomerBalance',
      ),
    ),
    'Magento\\SalesRule\\Model\\Rule' => 
    array (
      'salesRuleDateResolver' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesRuleStaging\\Model\\Plugin\\DateResolverPlugin',
      ),
      'salesRuleConditionFieldsetIdResolver' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesRuleStaging\\Model\\Plugin\\ConditionFieldsetIdResolver',
      ),
      'salesRuleActionFieldsetIdResolver' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesRuleStaging\\Model\\Plugin\\ActionFieldsetIdResolver',
      ),
      'salesRuleBeforeBeforeSave' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\SalesRuleStaging\\Model\\Plugin\\Rule',
      ),
      'salesRuleAroundSave' => 
      array (
        'sortOrder' => 500,
        'instance' => 'Magento\\AdvancedSalesRule\\Model\\Plugin\\Rule',
      ),
    ),
    'Magento\\Backend\\Block\\Widget\\Tab\\TabInterface' => NULL,
    'Magento\\Sales\\Block\\Adminhtml\\Order\\View\\Tab\\History' => 
    array (
      'sales-order-history-rma-plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Rma\\Block\\Adminhtml\\Order\\View\\Tab\\HistoryPlugin',
      ),
    ),
    'Magento\\Rma\\Api\\RmaRepositoryInterface' => NULL,
    'Magento\\Rma\\Model\\RmaRepository' => 
    array (
      'authorization' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Rma\\Model\\Rma\\Plugin\\Authorization',
      ),
    ),
    'Magento\\Sales\\Model\\ResourceModel\\Provider\\NotSyncedDataProviderInterface' => NULL,
    'Magento\\Sales\\Model\\ResourceModel\\Provider\\UpdatedIdListProvider' => 
    array (
      'process_archive_entities' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesArchive\\Plugin\\ArchivedEntitiesProcessorPlugin',
      ),
    ),
    'Magento\\Sales\\Api\\RefundOrderInterface' => NULL,
    'Magento\\Sales\\Model\\RefundOrder' => 
    array (
      'refundOrderAfter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesInventory\\Model\\Plugin\\Order\\ReturnToStockOrder',
      ),
    ),
    'Magento\\Sales\\Api\\RefundInvoiceInterface' => NULL,
    'Magento\\Sales\\Model\\RefundInvoice' => 
    array (
      'refundInvoiceAfter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesInventory\\Model\\Plugin\\Order\\ReturnToStockInvoice',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Validation\\RefundOrderInterface' => 
    array (
      'refundOrderValidationAfter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesInventory\\Model\\Plugin\\Order\\Validation\\OrderRefundCreationArguments',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Validation\\RefundInvoiceInterface' => 
    array (
      'refundInvoiceValidationAfter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesInventory\\Model\\Plugin\\Order\\Validation\\InvoiceRefundCreationArguments',
      ),
    ),
    'Magento\\CatalogRule\\Api\\Data\\RuleInterface' => NULL,
    'Magento\\CatalogRule\\Model\\Rule' => 
    array (
      'catalogRuleDateResolver' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRuleStaging\\Model\\Plugin\\DateResolverPlugin',
      ),
      'addVariationsToProductRule' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRuleConfigurable\\Plugin\\CatalogRule\\Model\\Rule\\ConfigurableProductHandler',
      ),
      'configurableChildValidation' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRuleConfigurable\\Plugin\\CatalogRule\\Model\\Rule\\Validation',
      ),
      'catalogConditionFieldsetIdResolver' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRuleStaging\\Model\\Plugin\\ConditionFieldsetIdResolver',
      ),
    ),
    'Magento\\CatalogRule\\Observer\\ProcessFrontFinalPriceObserver' => 
    array (
      'previewCatalogPriceRule' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRuleStaging\\Model\\Plugin\\FinalPricePlugin',
      ),
    ),
    'Magento\\Banner\\Block\\Widget\\Banner' => 
    array (
      'additional_attributes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\BannerPageBuilder\\Plugin\\Widget\\Banner',
      ),
    ),
    'Magento\\PageBuilder\\Model\\Stage\\RendererInterface' => NULL,
    'Magento\\PageBuilder\\Model\\Stage\\Renderer\\CmsStaticBlock' => 
    array (
      'dynamic_block_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\BannerPageBuilder\\Plugin\\CmsStaticBlockRenderer',
      ),
    ),
    'Magento\\Paypal\\Model\\ExpressConfigProvider' => 
    array (
      'purchase_order_paypal_express_config_urls' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PaypalPurchaseOrder\\Plugin\\Paypal\\Model\\ExpressConfigProvider',
      ),
    ),
    'Magento\\Checkout\\Controller\\Express\\RedirectLoginInterface' => NULL,
    'Magento\\Paypal\\Controller\\Express\\AbstractExpress' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
        'disabled' => true,
      ),
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'purchase_order_paypal_express_abstract' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PaypalPurchaseOrder\\Plugin\\Paypal\\Controller\\Express\\AbstractExpress',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
    ),
    'Magento\\Paypal\\Controller\\Express\\AbstractExpress\\Cancel' => 
    array (
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'purchase_order_paypal_express_abstract' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PaypalPurchaseOrder\\Plugin\\Paypal\\Controller\\Express\\AbstractExpress',
      ),
      'purchase_order_paypal_express_cancel_url' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PaypalPurchaseOrder\\Plugin\\Paypal\\Controller\\Express\\AbstractExpress\\Cancel',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
    ),
    'Magento\\Paypal\\Model\\Api\\AbstractApi' => NULL,
    'Magento\\Paypal\\Model\\Api\\Nvp' => 
    array (
      'purchase_order_paypal_token_store' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PaypalPurchaseOrder\\Plugin\\Paypal\\Model\\Api\\NvpPlugin',
      ),
    ),
    'Magento\\Framework\\GraphQl\\Query\\ResolverInterface' => NULL,
    'Magento\\CatalogGraphQl\\Model\\Resolver\\Products' => 
    array (
      'catalog_search_permissions' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissionsGraphQl\\Model\\Resolver\\Products',
      ),
    ),
    'Magento\\Company\\Model\\Company\\Save' => 
    array (
      'companyCreditCreatePlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CompanyCredit\\Plugin\\Company\\Model\\CompanyCreditCreatePlugin',
      ),
    ),
    'Magento\\Company\\Controller\\Adminhtml\\Index\\Edit' => 
    array (
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'beforeExecute' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CompanyCredit\\Plugin\\Company\\Controller\\Adminhtml\\Index\\EditPlugin',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\Authentication',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
    ),
    'Magento\\Eav\\Helper\\Data' => NULL,
    'Magento\\Rma\\Helper\\Eav' => 
    array (
      'removeStoreCreditResolutionOnAdminPanel' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CompanyCredit\\Plugin\\Rma\\Helper\\EavPlugin',
      ),
    ),
    'Magento\\CustomAttributeManagement\\Block\\Form\\Renderer\\AbstractRenderer' => NULL,
    'Magento\\CustomAttributeManagement\\Block\\Form\\Renderer\\Select' => NULL,
    'Magento\\Rma\\Block\\Form\\Renderer\\Select' => 
    array (
      'removeStoreCreditResolutionOnStorefront' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CompanyCredit\\Plugin\\Rma\\Block\\Form\\Renderer\\SelectPlugin',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\InvoiceQuantityValidator' => 
    array (
      'checkPartialInvoice' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CompanyCredit\\Plugin\\Sales\\Model\\Order\\InvoiceQuantityValidatorPlugin',
      ),
    ),
    'Magento\\Eav\\Model\\Entity\\Attribute\\AttributeInterface' => NULL,
    'Magento\\Eav\\Api\\Data\\AttributeInterface' => NULL,
    'Magento\\Framework\\Api\\MetadataObjectInterface' => NULL,
    'Magento\\Eav\\Model\\Entity\\Attribute\\AbstractAttribute' => NULL,
    'Magento\\Eav\\Model\\Entity\\Attribute' => NULL,
    'Magento\\Catalog\\Api\\Data\\ProductAttributeInterface' => NULL,
    'Magento\\Eav\\Model\\Entity\\Attribute\\ScopedAttributeInterface' => NULL,
    'Magento\\Catalog\\Api\\Data\\EavAttributeInterface' => NULL,
    'Magento\\Catalog\\Model\\ResourceModel\\Eav\\Attribute' => 
    array (
      'save_swatches_option_params' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Model\\Plugin\\EavAttribute',
      ),
      'change_product_attribute' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRule\\Plugin\\Indexer\\Product\\Attribute',
      ),
      'invalidate_caches_after_attribute_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Plugin\\Catalog\\CacheInvalidate',
      ),
    ),
    'Magento\\LayeredNavigation\\Block\\Navigation\\FilterRendererInterface' => NULL,
    'Magento\\LayeredNavigation\\Block\\Navigation\\FilterRenderer' => 
    array (
      'swatches_layered_renderer' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Magento\\Swatches\\Model\\Plugin\\FilterRenderer',
      ),
    ),
    'Magento\\Catalog\\Api\\ProductAttributeOptionManagementInterface' => NULL,
    'Magento\\Catalog\\Api\\ProductAttributeOptionUpdateInterface' => NULL,
    'Magento\\Catalog\\Model\\Product\\Attribute\\OptionManagement' => 
    array (
      'swatches_product_attribute_optionmanagement_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Plugin\\Eav\\Model\\Entity\\Attribute\\OptionManagement',
      ),
    ),
    'Magento\\Webapi\\Model\\ServiceMetadata' => 
    array (
      'webapiServiceMetadataAsync' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\WebapiAsync\\Plugin\\ServiceMetadata',
      ),
    ),
    'Magento\\Framework\\Cache\\FrontendInterface' => NULL,
    'Magento\\Framework\\Cache\\Frontend\\Decorator\\Bare' => NULL,
    'Magento\\Framework\\Cache\\Frontend\\Decorator\\TagScope' => NULL,
    'Magento\\Webapi\\Model\\Cache\\Type\\Webapi' => 
    array (
      'webapiCacheAsync' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\WebapiAsync\\Plugin\\Cache\\Webapi',
      ),
    ),
    'Magento\\Webapi\\Model\\Config\\Converter' => 
    array (
      'webapiResourceSecurity' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\WebapiSecurity\\Model\\Plugin\\AnonymousResourceSecurity',
      ),
    ),
    'Magento\\Checkout\\CustomerData\\Cart' => 
    array (
      'amazon_core_cart_section' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Amazon\\Core\\Plugin\\CartSection',
      ),
    ),
    'Magento\\Checkout\\Controller\\Cart' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
        'disabled' => true,
      ),
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
    ),
    'Magento\\Checkout\\Controller\\Cart\\Index' => 
    array (
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'amazon_login_cart_controller' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Amazon\\Login\\Plugin\\CartController',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
    ),
    'Magento\\Customer\\Controller\\AccountInterface' => NULL,
    'Magento\\Customer\\Controller\\AbstractAccount' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
        'disabled' => true,
      ),
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
    ),
    'Magento\\Customer\\Controller\\Account\\Login' => 
    array (
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'amazon_login_login_controller' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Amazon\\Login\\Plugin\\LoginController',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
    ),
    'Magento\\Customer\\Controller\\Account\\Create' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
        'disabled' => true,
      ),
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'amazon_login_create_controller' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Amazon\\Login\\Plugin\\CreateController',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
    ),
    'Magento\\Sales\\Api\\OrderCustomerManagementInterface' => 
    array (
      'amazon_login_order_customer_service' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Amazon\\Login\\Plugin\\OrderCustomerManagement',
      ),
      'Ddg_CustomerManagementPlugin' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Dotdigitalgroup\\Email\\Plugin\\CustomerManagementPlugin',
      ),
    ),
    'Magento\\Quote\\Api\\Data\\PaymentInterface' => 
    array (
      'amazon_payment_additional_information' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Amazon\\Payment\\Plugin\\AdditionalInformation',
      ),
    ),
    'Amazon\\Payment\\Model\\Method\\AmazonLoginMethod' => 
    array (
      'paymentMethodIsAvailable' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PaymentStaging\\Plugin\\Model\\Method\\PaymentMethodIsAvailable',
      ),
      'disable_amazon_payment_method' => 
      array (
        'sortOrder' => 10,
        'disabled' => false,
        'instance' => 'Amazon\\Payment\\Plugin\\DisableAmazonPaymentMethod',
      ),
    ),
    'Magento\\Quote\\Model\\PaymentMethodManagement' => 
    array (
      'paymentMethodManagementPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CompanyPayment\\Plugin\\Quote\\PaymentMethodManagementPlugin',
      ),
      'paymentMethodManagementPermissionPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CompanyCredit\\Plugin\\Quote\\PaymentMethodManagementPlugin',
      ),
      'confirm_order_reference_on_payment_details_save' => 
      array (
        'sortOrder' => 10,
        'disabled' => false,
        'instance' => 'Amazon\\Payment\\Plugin\\ConfirmOrderReference',
      ),
    ),
    'Magento\\Framework\\Webapi\\ErrorProcessor' => 
    array (
      'amazon_payment_webapi_error_processor' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Amazon\\Payment\\Plugin\\WebapiErrorProcessor',
      ),
    ),
    'Magento\\Newsletter\\Controller\\Subscriber' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
        'disabled' => true,
      ),
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
    ),
    'Magento\\Newsletter\\Controller\\Subscriber\\NewAction' => 
    array (
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'ddg_newsletter_email_capture' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Dotdigitalgroup\\Email\\Plugin\\NewsletterEmailCapturePlugin',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
    ),
    'Magento\\Customer\\Model\\EmailNotificationInterface' => 
    array (
      'ddg_customer_email_disabler' => 
      array (
        'sortOrder' => 1,
        'disabled' => false,
        'instance' => 'Dotdigitalgroup\\Email\\Plugin\\CustomerEmailNotificationPlugin',
      ),
    ),
    'Magento\\Reports\\Model\\ResourceModel\\Product\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
      'joinProductsWhenFlatEnabled' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Model\\Plugin\\ResourceModel\\Product\\JoinProductsWhenFlatEnabled',
      ),
      'joinAttribute' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Model\\Plugin\\ResourceModel\\Product\\Collection',
      ),
      'ddg_reports_product_collection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Dotdigitalgroup\\Email\\Plugin\\ReportsProductCollectionPlugin',
      ),
    ),
    'Magento\\Framework\\Mail\\Template\\TransportBuilder' => 
    array (
      'Ddg_TransportBuilderPlugin' => 
      array (
        'sortOrder' => 1,
        'disabled' => false,
        'instance' => 'Dotdigitalgroup\\Email\\Plugin\\TransportBuilderPlugin',
      ),
      'mageplaza_mail_template_transport_builder' => 
      array (
        'sortOrder' => 1,
        'disabled' => false,
        'instance' => 'Mageplaza\\Smtp\\Mail\\Template\\TransportBuilder',
      ),
    ),
    'Magento\\Framework\\Mail\\MessageInterface' => 
    array (
      'dotmailer_message_plugin' => 
      array (
        'sortOrder' => 1,
        'disabled' => false,
        'instance' => 'Dotdigitalgroup\\Email\\Plugin\\MessagePlugin',
      ),
    ),
    'Magento\\Newsletter\\Controller\\Manage' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
        'disabled' => true,
      ),
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
    ),
    'Magento\\Newsletter\\Controller\\Manage\\Index' => 
    array (
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'dotmailer_newsletter_plugin' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Dotdigitalgroup\\Email\\Plugin\\NewsletterManageIndexPlugin',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
    ),
    'Magento\\UrlRewrite\\Controller\\Adminhtml\\Url\\Rewrite' => 
    array (
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\Authentication',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
    ),
    'Magento\\UrlRewrite\\Controller\\Adminhtml\\Url\\Rewrite\\Save' => 
    array (
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'dotmailer_url_rewrite_save_plugin' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Dotdigitalgroup\\Email\\Plugin\\UrlRewriteSavePlugin',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\Authentication',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
    ),
    'Magento\\SalesRule\\Api\\CouponRepositoryInterface' => 
    array (
      'coupon_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Dotdigitalgroup\\Email\\Plugin\\CouponPlugin',
      ),
    ),
    'Magento\\SalesRule\\Model\\ResourceModel\\Coupon\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
      'collection_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\CollectionFilter',
      ),
      'ddg_generated_for_email_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Dotdigitalgroup\\Email\\Plugin\\CouponCollectionPlugin',
      ),
    ),
    'Magento\\SalesRule\\Model\\Utility' => 
    array (
      'ddg_coupon_expired_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Dotdigitalgroup\\Email\\Plugin\\CouponExpiredPlugin',
      ),
    ),
    'Dotdigitalgroup\\Email\\Controller\\Ajax\\Emailcapture' => 
    array (
      'storeCheck' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Store\\App\\Action\\Plugin\\StoreCheck',
        'disabled' => true,
      ),
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'ddg_chat_emailcapture_plugin' => 
      array (
        'sortOrder' => 1,
        'disabled' => false,
        'instance' => 'Dotdigitalgroup\\Chat\\Plugin\\EmailcapturePlugin',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
    ),
    'Dotdigitalgroup\\Email\\Model\\Connector\\Datafield' => 
    array (
      'ddg_b2b_data_field_plugin' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Dotdigitalgroup\\B2b\\Plugin\\DataFieldPlugin',
      ),
      'ddg_enterprise_data_field_plugin' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Dotdigitalgroup\\Enterprise\\Plugin\\DataFieldPlugin',
      ),
    ),
    'Dotdigitalgroup\\Email\\Model\\Apiconnector\\CustomerDataFieldProvider' => 
    array (
      'ddg_b2b_customer_datafield_provider_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Dotdigitalgroup\\B2b\\Plugin\\CustomerDataFieldProviderPlugin',
      ),
      'ddg_enterprise_data_fields_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Dotdigitalgroup\\Enterprise\\Plugin\\CustomerDataFieldProviderPlugin',
      ),
    ),
    'Dotdigitalgroup\\Email\\Model\\Apiconnector\\ContactData' => NULL,
    'Dotdigitalgroup\\Email\\Model\\Apiconnector\\Customer' => 
    array (
      'ddg_b2b_customer_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Dotdigitalgroup\\B2b\\Plugin\\CustomerPlugin',
      ),
      'ddg_enterprise_customer_plugin' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Dotdigitalgroup\\Enterprise\\Plugin\\CustomerPlugin',
      ),
    ),
    'Dotdigitalgroup\\Email\\Model\\Sync\\Catalog\\StoreCatalogSyncer' => 
    array (
      'ddg_b2b_store_catalog_syncer_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Dotdigitalgroup\\B2b\\Plugin\\StoreCatalogSyncerPlugin',
      ),
    ),
    'Dotdigitalgroup\\Email\\Api\\TierPriceFinderInterface' => NULL,
    'Dotdigitalgroup\\Email\\Model\\Product\\TierPriceFinder' => 
    array (
      'ddg_b2b_price_finder_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Dotdigitalgroup\\B2b\\Plugin\\TierPriceFinderPlugin',
      ),
    ),
    'Magento\\SharedCatalog\\Model\\ResourceModel\\ProductItem\\Price\\PriceProcessor' => 
    array (
      'ddg_b2b_shared_catalog_price_processor_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Dotdigitalgroup\\B2b\\Plugin\\SharedCatalogPriceProcessorPlugin',
      ),
    ),
    'Magento\\SharedCatalog\\Model\\ResourceModel\\ProductItem\\Price\\Consumer' => 
    array (
      'ddg_b2b_shared_catalog_price_consumer_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Dotdigitalgroup\\B2b\\Plugin\\SharedCatalogPriceConsumerPlugin',
      ),
    ),
    'Magento\\SharedCatalog\\Controller\\Adminhtml\\SharedCatalog\\Configure\\Save' => 
    array (
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'ddg_b2b_shared_catalog_save_configuration_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Dotdigitalgroup\\B2b\\Plugin\\SharedCatalogSaveConfigurationPlugin',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\Authentication',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
    ),
    'Dotdigitalgroup\\Email\\Setup\\Install\\DataMigrationTypeProvider' => 
    array (
      'ddg_b2b_data_migration_type_provider_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Dotdigitalgroup\\B2b\\Plugin\\DataMigrationTypeProviderPlugin',
      ),
    ),
    'Dotdigitalgroup\\Email\\Console\\Command\\Provider\\SyncProvider' => 
    array (
      'ddg_b2b_sync_provider_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Dotdigitalgroup\\B2b\\Plugin\\SyncProviderPlugin',
      ),
    ),
    'Magento\\SharedCatalog\\Model\\SharedCatalogBuilder' => 
    array (
      'ddg_b2b_shared_catalog_builder_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Dotdigitalgroup\\B2b\\Plugin\\SharedCatalogBuilderPlugin',
      ),
    ),
    'Magento\\SharedCatalog\\Controller\\Adminhtml\\AbstractJsonAction' => 
    array (
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\Authentication',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
    ),
    'Magento\\SharedCatalog\\Controller\\Adminhtml\\SharedCatalog\\Company\\Assign' => 
    array (
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'ddg_b2b_shared_catalog_company_assign_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Dotdigitalgroup\\B2b\\Plugin\\SharedCatalogCompanyAssignPlugin',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\Authentication',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
    ),
    'Dotdigitalgroup\\Email\\Model\\Sync\\Importer\\ImporterQueueManager' => 
    array (
      'ddg_b2b_importer_queue_manager_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Dotdigitalgroup\\B2b\\Plugin\\ImporterQueueManagerPlugin',
      ),
    ),
    'Magento\\Rule\\Model\\ResourceModel\\AbstractResource' => NULL,
    'Magento\\CustomerSegment\\Model\\ResourceModel\\Segment' => 
    array (
      'ddg_customer_segment_resource' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Dotdigitalgroup\\Enterprise\\Plugin\\SegmentPlugin',
      ),
    ),
    'Magento\\Shipping\\Controller\\Adminhtml\\Order\\Shipment\\Save' => 
    array (
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'ddg_new_shipment_plugin' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Dotdigitalgroup\\Sms\\Plugin\\Order\\Shipment\\NewShipmentPlugin',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\Authentication',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
    ),
    'Magento\\Shipping\\Controller\\Adminhtml\\Order\\Shipment\\AddTrack' => 
    array (
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'ddg_update_shipment_plugin' => 
      array (
        'sortOrder' => 3,
        'instance' => 'Dotdigitalgroup\\Sms\\Plugin\\Order\\Shipment\\ShipmentUpdatePlugin',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\Authentication',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
    ),
    'Dotdigitalgroup\\Email\\Model\\Cron\\Cleaner' => 
    array (
      'ddg_sms_cron_cleaner_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Dotdigitalgroup\\Sms\\Plugin\\CronCleanerPlugin',
      ),
    ),
    'Dotdigitalgroup\\Email\\Console\\Command\\Provider\\TaskProvider' => 
    array (
      'ddg_sms_task_provider_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Dotdigitalgroup\\Sms\\Plugin\\TaskProviderPlugin',
      ),
    ),
    'Klarna\\Core\\Helper\\KlarnaConfig' => 
    array (
      'klarnaKpKlarnaConfig' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Klarna\\Kp\\Plugin\\Helper\\KlarnaConfigPlugin',
      ),
    ),
    'Klarna\\Core\\Model\\Checkout\\Orderline\\Collector' => 
    array (
      'klarnaKpCollector' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Klarna\\Kp\\Plugin\\Model\\Checkout\\Orderline\\CollectorPlugin',
      ),
    ),
    'Magento\\Payment\\Helper\\Data' => 
    array (
      'klarnaKpPaymentData' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Klarna\\Kp\\Plugin\\Payment\\Helper\\DataPlugin',
      ),
    ),
    'Klarna\\Core\\Model\\Config' => 
    array (
      'klarnaKpConfig' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Klarna\\Kp\\Plugin\\Model\\ConfigPlugin',
      ),
    ),
    'Magento\\QuoteGraphQl\\Model\\Cart\\Payment\\AdditionalDataProviderPool' => 
    array (
      'klarnaKpGraphQlAdditionalDataProviderPool' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Klarna\\KpGraphQl\\Plugin\\Model\\Cart\\Payment\\AdditionalDataProviderPoolPlugin',
      ),
    ),
    'Magento\\QuoteGraphQl\\Model\\Resolver\\AvailablePaymentMethods' => 
    array (
      'klarnaKpGraphQlAvailablePaymentMethods' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Klarna\\KpGraphQl\\Plugin\\Model\\Resolver\\AvailablePaymentMethodsPlugin',
      ),
    ),
    'Magento\\Framework\\Mail\\Template\\TransportBuilderByStore' => 
    array (
      'mpsmtp_appTransportBuilder' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\Smtp\\Plugin\\Message',
      ),
    ),
    'Magento\\Framework\\View\\Asset\\Minification' => 
    array (
      'braintreeExcludeFromMinification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'PayPal\\Braintree\\Plugin\\ExcludeFromMinification',
      ),
    ),
    'Vertex\\Utility\\SoapClientFactory' => 
    array (
      'registerLastCreatedClient' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\SoapClientFactoryPlugin',
      ),
    ),
    'Vertex\\Utility\\ServiceActionPerformerFactory' => 
    array (
      'useObjectManager' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\ServiceActionPerformerFactoryPlugin',
      ),
    ),
    'Magento\\Sales\\Api\\OrderAddressRepositoryInterface' => 
    array (
      'extensionAttributeVertexVatCountryCode' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\VatCountryCodeAttributePlugin',
      ),
    ),
    'Magento\\Tax\\Api\\TaxCalculationInterface' => 
    array (
      'vertexTaxCalculation' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\TaxCalculationPlugin',
      ),
    ),
    'Magento\\Tax\\Model\\Sales\\Total\\Quote\\Tax' => 
    array (
      'apply_tax_class_id' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Plugin\\Tax\\Model\\Sales\\Total\\Quote\\CommonTaxCollector',
      ),
      'vertexItemLevelMap' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\CommonTaxCollectorPlugin',
      ),
      'vertexOrderLevelMap' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\TaxPlugin',
      ),
    ),
    'Magento\\CatalogStaging\\Api\\ProductStagingInterface' => 
    array (
      'vertex_commodity_code_staging' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\TaxStaging\\Model\\Plugin\\CommodityCodeExtensionAttributeProductStagingPlugin',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\ListProduct' => 
    array (
      'add_product_object_to_image_data_array' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Model\\Plugin\\ProductImage',
      ),
      'yotpo_yotpo_catalog_block_product_listproduct_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Yotpo\\Yotpo\\Plugin\\Catalog\\Block\\Product\\ListProduct',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\ReviewRendererInterface' => NULL,
    'Magento\\Review\\Block\\Product\\ReviewRenderer' => 
    array (
      'yotpo_yotpo_review_block_product_reviewrenderer_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Yotpo\\Yotpo\\Plugin\\Review\\Block\\Product\\ReviewRenderer',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\View\\Details' => 
    array (
      'yotpo_yotpo_catalog_block_product_view_details_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Yotpo\\Yotpo\\Plugin\\Catalog\\Block\\Product\\View\\Details',
      ),
    ),
    'Magento\\ConfigurableProduct\\Block\\DataProviders\\PermissionsData' => 
    array (
      'admin_gws_configurable_product_permissions_data_checker' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGwsConfigurableProduct\\Plugin\\PermissionsDataChecker',
      ),
    ),
    'Magento\\Staging\\Model\\Preview\\UrlBuilder' => 
    array (
      'admin_gws_staging_preview_url_builder' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGwsStaging\\Plugin\\PreviewUrlBuilder',
      ),
    ),
    'Magento\\Eav\\Model\\Adminhtml\\System\\Config\\Source\\Inputtype' => 
    array (
      'process_page_builder_input_type' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageBuilder\\Plugin\\Model\\Eav\\Adminhtml\\System\\Config\\Source\\InputtypePlugin',
      ),
      'append_compatible_input_types' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Plugin\\Eav\\System\\Config\\Source\\InputtypePlugin',
      ),
    ),
    'Magento\\Backend\\Model\\Auth\\StorageInterface' => NULL,
    'Magento\\Backend\\Model\\Auth\\Session' => 
    array (
      'security_admin_sessions_prolong' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Security\\Model\\Plugin\\AuthSession',
      ),
    ),
    'Magento\\Catalog\\Model\\Indexer\\Category\\Product\\Action\\Full' => 
    array (
      'invalidate_pagecache_after_full_reindex' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Model\\Indexer\\Category\\Product\\Execute',
      ),
    ),
    'Magento\\Eav\\Api\\AttributeSetRepositoryInterface' => 
    array (
      'remove_products' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Plugin\\Model\\AttributeSetRepository\\RemoveProducts',
      ),
    ),
    'Magento\\Catalog\\Model\\ProductLink\\Search' => 
    array (
      'processOutOfStockProducts' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogInventory\\Model\\Plugin\\ProductSearch',
      ),
    ),
    'Magento\\Customer\\Model\\Group' => 
    array (
      'reindex_after_delete_customer_group' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRule\\Plugin\\Indexer\\CustomerGroup',
      ),
    ),
    'Magento\\Backend\\Block\\Widget' => NULL,
    'Magento\\Sales\\Block\\Adminhtml\\Order\\Create\\AbstractCreate' => NULL,
    'Magento\\Sales\\Block\\Adminhtml\\Order\\Create\\Sidebar\\AbstractSidebar' => 
    array (
      'GroupedProduct' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\GroupedProduct\\Block\\Adminhtml\\Order\\Create\\Sidebar',
      ),
      'Bundle' => 
      array (
        'sortOrder' => 200,
        'instance' => 'Magento\\Bundle\\Block\\Adminhtml\\Order\\Create\\Sidebar',
      ),
      'configurable' => 
      array (
        'sortOrder' => 200,
        'instance' => 'Magento\\ConfigurableProduct\\Block\\Adminhtml\\Order\\Create\\Sidebar',
      ),
    ),
    'Magento\\Backend\\Block\\Widget\\Form' => NULL,
    'Magento\\Backend\\Block\\Widget\\Form\\Generic' => NULL,
    'Magento\\Catalog\\Block\\Adminhtml\\Product\\Attribute\\Edit\\Tab\\Front' => 
    array (
      'search_weigh' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogSearch\\Block\\Plugin\\FrontTabPlugin',
      ),
    ),
    'Magento\\Backend\\Controller\\Adminhtml\\Auth' => 
    array (
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\Authentication',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
    ),
    'Magento\\Backend\\Controller\\Adminhtml\\Auth\\Login' => 
    array (
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'security_login_form' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Security\\Model\\Plugin\\LoginController',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\Authentication',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
    ),
    'Magento\\User\\Model\\UserValidationRules' => 
    array (
      'user_expiration_validator' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Security\\Model\\Plugin\\UserValidationRules',
      ),
    ),
    'Magento\\User\\Block\\User\\Edit\\Tab\\Main' => 
    array (
      'user_expiration_user_form_field' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Security\\Model\\Plugin\\AdminUserForm',
      ),
    ),
    'Magento\\Catalog\\Block\\Adminhtml\\Form' => NULL,
    'Magento\\Catalog\\Block\\Adminhtml\\Product\\Edit\\Tab\\Attributes' => 
    array (
      'product_form_url_key_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Plugin\\Catalog\\Block\\Adminhtml\\Product\\Edit\\Tab\\Attributes',
      ),
    ),
    'Magento\\Bundle\\Block\\Adminhtml\\Catalog\\Product\\Edit\\Tab\\Attributes' => 
    array (
      'product_form_url_key_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Plugin\\Catalog\\Block\\Adminhtml\\Product\\Edit\\Tab\\Attributes',
      ),
      'bundle_msrp_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Msrp\\Plugin\\Bundle\\Block\\Adminhtml\\Catalog\\Product\\Edit\\Tab\\Attributes',
      ),
    ),
    'Magento\\Eav\\Model\\Attribute' => NULL,
    'Magento\\Customer\\Model\\Attribute' => 
    array (
      'validateCustomerAddressAttribute' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CustomerCustomAttributes\\Model\\Plugin\\ValidateCustomerAddressAttribute',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Builder' => 
    array (
      'configurable' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\ConfigurableProduct\\Controller\\Adminhtml\\Product\\Builder\\Plugin',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Validator' => 
    array (
      'configurable' => 
      array (
        'sortOrder' => 50,
        'instance' => 'Magento\\ConfigurableProduct\\Model\\Product\\Validator\\Plugin',
      ),
    ),
    'Magento\\Sales\\Api\\Data\\InvoiceInterface' => NULL,
    'Magento\\Sales\\Model\\Order\\Invoice' => 
    array (
      'update_configurable_product_total_qty' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\ConfigurableProduct\\Plugin\\Model\\Order\\Invoice\\UpdateConfigurableProductTotalQty',
      ),
    ),
    'Magento\\Customer\\Model\\Customer\\DataProviderWithDefaultAddresses' => 
    array (
      'customerDataProvider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Company\\Plugin\\Customer\\Model\\Customer\\DataProviderPlugin',
      ),
      'login_as_customer_customer_data_provider_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerAssistance\\Plugin\\DataProviderWithDefaultAddressesPlugin',
      ),
      'ShowVertexCustomerAttributes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\CustomerDataProviderPlugin',
      ),
    ),
    'Magento\\Framework\\View\\Element\\UiComponent\\DataProvider\\SearchResult' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
      'collection_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\CollectionFilter',
      ),
    ),
    'Magento\\Customer\\Model\\ResourceModel\\Grid\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
      'collection_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\CollectionFilter',
      ),
      'company' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Company\\Plugin\\Customer\\Model\\ResourceModel\\Grid\\CollectionPlugin',
      ),
    ),
    'Magento\\Customer\\Model\\ResourceModel\\Online\\Grid\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
      'collection_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\CollectionFilter',
      ),
      'onlineUserCompanyPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Company\\Plugin\\Customer\\Model\\ResourceModel\\Online\\Grid\\CollectionPlugin',
      ),
    ),
    'Magento\\Sales\\Model\\ResourceModel\\Order\\Grid\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
      'collection_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\CollectionFilter',
      ),
      'company' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Company\\Plugin\\Sales\\Model\\ResourceModel\\Order\\Grid\\CollectionPlugin',
      ),
      'braintreeSalesOrderGrid' => 
      array (
        'sortOrder' => 0,
        'instance' => 'PayPal\\Braintree\\Plugin\\SalesOrderGridPlugin',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\ReservedAttributeList' => 
    array (
      'reservedAttributeListPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Company\\Plugin\\Catalog\\Model\\Product\\ReservedAttributeListPlugin',
      ),
    ),
    'Magento\\Cms\\Controller\\Adminhtml\\Page\\InlineEdit' => 
    array (
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'versionscms_cms_page_inline_edit_plugin' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\VersionsCms\\Controller\\Adminhtml\\Cms\\Page\\InlineEdit\\Plugin',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\Authentication',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
    ),
    'Magento\\Sales\\Model\\AdminOrder\\Product\\Quote\\Initializer' => 
    array (
      'sales_adminorder_quote_initializer_plugin' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\GroupedProduct\\Model\\Sales\\AdminOrder\\Product\\Quote\\Plugin\\Initializer',
      ),
    ),
    'Magento\\Framework\\View\\TemplateEngineFactory' => 
    array (
      'debug_hints' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\Developer\\Model\\TemplateEngine\\Plugin\\DebugHints',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Category' => 
    array (
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\Authentication',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Category\\Edit' => 
    array (
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'adminhtmlCategoryEditPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\VisualMerchandiser\\Plugin\\Catalog\\Controller\\Adminhtml\\Category\\EditPlugin',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\Authentication',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Category\\Add' => 
    array (
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'adminhtmlCategoryAddPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\VisualMerchandiser\\Plugin\\Catalog\\Controller\\Adminhtml\\Category\\AddPlugin',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\Authentication',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Category\\Save' => 
    array (
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'adminhtmlCategorySavePlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\VisualMerchandiser\\Plugin\\Catalog\\Controller\\Adminhtml\\Category\\SavePlugin',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\Authentication',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\CategoryLink' => 
    array (
      'adminhtmlRankCategoryProductPositionsPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\VisualMerchandiser\\Plugin\\Catalog\\Model\\ResourceModel\\Product\\RankCategoryProductPositions',
      ),
    ),
    'Magento\\Backend\\Block\\Store\\Switcher' => 
    array (
      'entrprise_store_switcher_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Enterprise\\Model\\Plugin\\StoreSwitcher',
      ),
      'paypal_store_switcher' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Paypal\\Block\\Adminhtml\\Store\\SwitcherPlugin',
      ),
    ),
    'Magento\\Quote\\Api\\CartItemRepositoryInterface' => 
    array (
      'CartItemRepositoryPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SharedCatalog\\Plugin\\Quote\\Api\\CartItemRepositoryInterfacePlugin',
      ),
    ),
    'Magento\\SalesRule\\Model\\Rule\\Metadata\\ValueProvider' => 
    array (
      'valueProviderPlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SharedCatalog\\Plugin\\SalesRule\\Model\\Rule\\Metadata\\ValueProviderPlugin',
      ),
    ),
    'Magento\\Company\\Model\\ResourceModel\\Company\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
      'collection_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\CollectionFilter',
      ),
    ),
    'Magento\\Company\\Model\\ResourceModel\\Company\\Grid\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
      'collection_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\CollectionFilter',
      ),
      'customerGroup' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SharedCatalog\\Plugin\\Company\\Model\\ResourceModel\\Company\\Grid\\CollectionPlugin',
      ),
      'creditBalance' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CompanyCredit\\Plugin\\Company\\Model\\ResourceModel\\Company\\Grid\\CollectionPlugin',
      ),
    ),
    'Magento\\Backend\\Block\\Widget\\Grid\\Column' => NULL,
    'Magento\\Backend\\Block\\Widget\\Grid\\Column\\Multistore' => 
    array (
      'AddCustomRendererTypes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SharedCatalog\\Plugin\\Backend\\Block\\Widget\\Grid\\Column\\Multistore\\AddCustomRendererTypes',
      ),
    ),
    'Magento\\Catalog\\Block\\Adminhtml\\Category\\AbstractCategory' => NULL,
    'Magento\\CatalogPermissions\\Block\\Adminhtml\\Catalog\\Category\\Tab\\Permissions\\Row' => 
    array (
      'catalog_category_permissions_row_block_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SharedCatalog\\Plugin\\CatalogPermissions\\Block\\Adminhtml\\Catalog\\Category\\Tab\\Permissions\\RowPlugin',
      ),
    ),
    'Magento\\Catalog\\Ui\\DataProvider\\Product\\Form\\ProductDataProvider' => NULL,
    'Magento\\CatalogStaging\\Model\\Product\\DataProvider' => 
    array (
      'catalogStagingDataProvider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Model\\Entity\\DataProvider\\DataProviderPlugin',
      ),
    ),
    'Magento\\CatalogStaging\\Model\\Product\\Identifier\\DataProvider' => 
    array (
      'catalogStagingIdentifierDataProvider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Model\\Entity\\DataProvider\\Identifier\\DataProviderPlugin',
      ),
    ),
    'Magento\\CatalogStaging\\Model\\Category\\DataProvider' => 
    array (
      'set_page_layout_default_value' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Catalog\\Model\\Plugin\\SetPageLayoutDefaultValue',
      ),
      'catalogCategoryDataProviderTrimData' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Plugin\\Catalog\\Model\\Category\\DataProvider\\TrimData',
      ),
      'category_ui_form_url_key_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogUrlRewrite\\Plugin\\Catalog\\Block\\Adminhtml\\Category\\Tab\\Attributes',
      ),
      'catalog_permissions_category_data_provider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogPermissions\\Model\\Plugin\\Catalog\\Category\\DataProvider',
      ),
      'google_optimizer_category_data_provider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GoogleOptimizer\\Model\\Plugin\\Catalog\\Category\\DataProvider',
      ),
      'catalogStagingCategoryDataProvider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Model\\Entity\\DataProvider\\DataProviderPlugin',
      ),
    ),
    'Magento\\CatalogStaging\\Model\\Category\\Identifier\\DataProvider' => 
    array (
      'catalogStagingCategoryDataProvider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Model\\Entity\\DataProvider\\Identifier\\DataProviderPlugin',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Category\\AggregateCount' => 
    array (
      'aggregateCountForCatalogStaging' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Plugin\\Model\\ResourceModel\\Category\\AggregateCount',
      ),
    ),
    'Magento\\Ui\\DataProvider\\Modifier\\ModifierInterface' => NULL,
    'Magento\\Catalog\\Ui\\DataProvider\\Product\\Form\\Modifier\\AbstractModifier' => NULL,
    'Magento\\Catalog\\Ui\\DataProvider\\Product\\Form\\Modifier\\Eav' => 
    array (
      'PricePermissions' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\PricePermissions\\Ui\\DataProvider\\Product\\Form\\Modifier\\Plugin\\Eav',
      ),
      'pagebuilder_product_form_eav' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\PageBuilder\\Plugin\\Catalog\\Ui\\DataProvider\\Product\\Form\\Modifier\\EavPlugin',
      ),
    ),
    'Magento\\Backend\\Helper\\Data' => NULL,
    'Magento\\Catalog\\Helper\\Product\\Edit\\Action\\Attribute' => 
    array (
      'catalogHelperProductAttributePlugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogStaging\\Plugin\\Helper\\Product\\Edit\\Action\\Attribute',
      ),
    ),
    'Magento\\Cms\\Model\\Page\\DataProvider' => 
    array (
      'google_optimizer_cms_page_data_provider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GoogleOptimizer\\Model\\Plugin\\Cms\\Page\\DataProvider',
      ),
    ),
    'Magento\\Catalog\\Ui\\DataProvider\\Product\\Form\\NewCategoryDataProvider' => 
    array (
      'google_optimizer_product_new_category_data_provider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GoogleOptimizer\\Model\\Plugin\\Catalog\\Product\\Category\\DataProvider',
      ),
    ),
    'Magento\\Sales\\Api\\Data\\CreditmemoInterface' => NULL,
    'Magento\\Sales\\Model\\Order\\Creditmemo' => 
    array (
      'creditmemoAfterSave' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GoogleTagManager\\Model\\Plugin\\Creditmemo',
      ),
    ),
    'Magento\\Framework\\Mview\\ActionInterface' => NULL,
    'Magento\\CatalogRule\\Model\\Indexer\\AbstractIndexer' => 
    array (
      'cache_cleaner_after_reindex' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Indexer\\Model\\Indexer\\CacheCleaner',
      ),
    ),
    'Magento\\CatalogRule\\Model\\Indexer\\Product\\ProductRuleIndexer' => 
    array (
      'cache_cleaner_after_reindex' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Indexer\\Model\\Indexer\\CacheCleaner',
      ),
      'productRuleReindex' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRuleConfigurable\\Plugin\\CatalogRule\\Model\\Indexer\\ProductRuleReindex',
      ),
    ),
    'Magento\\Staging\\Model\\Operation\\Update\\UpdateProcessorInterface' => NULL,
    'Magento\\CatalogStaging\\Model\\Product\\Operation\\Update\\TemporaryUpdateProcessor' => 
    array (
      'flushAssociatedProductCache' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GroupedProductStaging\\Model\\Product\\Operation\\Update\\FlushAssociatedProductCache',
      ),
    ),
    'Magento\\Catalog\\Ui\\DataProvider\\Product\\ProductDataProvider' => NULL,
    'Magento\\Bundle\\Ui\\DataProvider\\Product\\BundleDataProvider' => 
    array (
      'append_quantity_per_source' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProductAdminUi\\Plugin\\Bundle\\Ui\\DataProvider\\Product\\Form\\AddQuantityPerSourceToProductsData',
      ),
      'append_column_quantity_per_source' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryBundleProductAdminUi\\Plugin\\Bundle\\Ui\\DataProvider\\Product\\Form\\AddColumnQuantityPerSource',
      ),
    ),
    'Magento\\Framework\\View\\Element\\Messages' => NULL,
    'Magento\\Sales\\Block\\Adminhtml\\Order\\Create\\Messages' => 
    array (
      'process_error_messages' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySales\\Plugin\\Sales\\Block\\Order\\Create\\Messages\\ProcessMessagesPlugin',
      ),
    ),
    'Magento\\InventoryAdminUi\\Model\\Stock\\StockSourceLinkProcessor' => 
    array (
      'prevent_process_for_default_stock' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalogAdminUi\\Plugin\\InventoryAdminUi\\Stock\\StockSaveProcessor\\PreventProcessDefaultStockLinksPlugin',
      ),
    ),
    'Magento\\InventoryAdminUi\\Ui\\DataProvider\\SourceDataProvider' => 
    array (
      'prevent_disabling_default_source' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryCatalogAdminUi\\Plugin\\InventoryAdminUi\\DataProvider\\PreventDisablingDefaultSourcePlugin',
      ),
      'convert_is_pickup_location_active_boolean_to_string' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\InventoryInStorePickupAdminUi\\Plugin\\Ui\\DataProvider\\ConvertBooleanToStringPlugin',
      ),
      'prevent_using_default_source_as_pickup_location_plugin' => 
      array (
        'sortOrder' => 20,
        'instance' => 'Magento\\InventoryInStorePickupAdminUi\\Plugin\\InventoryAdminUi\\DataProvider\\PreventUsingDefaultSourceAsPickupLocationPlugin',
      ),
    ),
    'Magento\\Ui\\Block\\Component\\StepsWizard\\StepInterface' => NULL,
    'Magento\\Ui\\Block\\Component\\StepsWizard\\StepAbstract' => NULL,
    'Magento\\ConfigurableProduct\\Block\\Adminhtml\\Product\\Steps\\Bulk' => 
    array (
      'adapt_configurable_wizard_bulk_block_to_msi' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryConfigurableProductAdminUi\\Plugin\\Block\\BulkStepChangeTemplate',
      ),
    ),
    'Magento\\ConfigurableProduct\\Block\\Adminhtml\\Product\\Steps\\Summary' => 
    array (
      'adapt_configurable_wizard_summary_block_to_msi' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryConfigurableProductAdminUi\\Plugin\\Block\\SummaryStepChangeTemplate',
      ),
    ),
    'Magento\\ConfigurableProduct\\Block\\Adminhtml\\Product\\Edit\\Tab\\Variations\\Config\\Matrix' => 
    array (
      'add_quantity_per_source_to_variations_matrix' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryConfigurableProductAdminUi\\Plugin\\Block\\AddQuantityPerSourceToVariationsMatrix',
      ),
    ),
    'Magento\\GroupedProduct\\Ui\\DataProvider\\Product\\GroupedProductDataProvider' => 
    array (
      'append_quantity_per_source' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\InventoryGroupedProductAdminUi\\Plugin\\Ui\\DataProvider\\Product\\Form\\AddQuantityPerSourceToProductsData',
      ),
      'append_column_quantity_per_source' => 
      array (
        'sortOrder' => 10,
        'instance' => 'Magento\\InventoryGroupedProductAdminUi\\Plugin\\Ui\\DataProvider\\Product\\Form\\AddColumnQuantityPerSource',
      ),
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\AbstractOrder' => NULL,
    'Magento\\Sales\\Block\\Adminhtml\\Order\\View\\Info' => 
    array (
      'hide-edit-link' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickupSalesAdminUi\\Plugin\\Sales\\Order\\View\\ShippingAddress\\HideEditLink',
      ),
      'klarnaCoreValidationInfo' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Klarna\\Core\\Plugin\\Sales\\Block\\Adminhtml\\Order\\View\\InfoPlugin',
      ),
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\Create\\Save' => 
    array (
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'set-order-pickup-location' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickupSalesAdminUi\\Plugin\\Sales\\Controller\\AdminOrder\\Create\\SetPickupLocationFromPost',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\Authentication',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
    ),
    'Magento\\Backend\\Block\\Widget\\ContainerInterface' => 
    array (
      'admin_gws' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Model\\Block\\Container\\Plugin',
      ),
    ),
    'Magento\\Backend\\Block\\Widget\\Button\\ContextInterface' => NULL,
    'Magento\\Backend\\Block\\Widget\\Container' => 
    array (
      'admin_gws' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Model\\Block\\Container\\Plugin',
      ),
    ),
    'Magento\\Backend\\Block\\Widget\\Form\\Container' => 
    array (
      'admin_gws' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Model\\Block\\Container\\Plugin',
      ),
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\View' => 
    array (
      'admin_gws' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Model\\Block\\Container\\Plugin',
      ),
      'process_ship_button' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickupSalesAdminUi\\Plugin\\Sales\\Block\\Adminhtml\\Order\\ProcessShipButtonPlugin',
      ),
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\Invoice\\Create\\Form' => 
    array (
      'create_shipment_checkbox_processor' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickupSalesAdminUi\\Plugin\\Sales\\Block\\Adminhtml\\Order\\Invoice\\Create\\ProcessCreateShipment',
      ),
      'disallow_create_shipment_in_multi_source_mode' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryShippingAdminUi\\Plugin\\Sales\\Block\\Order\\Invoice\\Create\\DisallowCreateShipmentPlugin',
      ),
    ),
    'Magento\\Sales\\Model\\AdminOrder\\Create' => 
    array (
      'adapt_set_shipping_address_to_quote' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickupSalesAdminUi\\Plugin\\Sales\\Model\\AdminOrder\\Create\\AdaptSetShippingAddressPlugin',
      ),
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\Create\\Form\\AbstractForm' => NULL,
    'Magento\\Sales\\Block\\Adminhtml\\Order\\Create\\Form\\Address' => 
    array (
      'vertex_addressvalidation_admin_order_form' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Vertex\\AddressValidation\\Plugin\\Adminhtml\\AddBlockToOrderCreateForm',
      ),
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\Create\\Shipping\\Address' => 
    array (
      'process_shipping_address_form_fro_store_pickup' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickupSalesAdminUi\\Plugin\\Sales\\Block\\Adminhtml\\Order\\Create\\Shipping\\Address\\AdaptFormPlugin',
      ),
      'vertex_addressvalidation_admin_order_form' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Vertex\\AddressValidation\\Plugin\\Adminhtml\\AddBlockToOrderCreateForm',
      ),
    ),
    'Magento\\Shipping\\Controller\\Adminhtml\\Order\\Shipment\\View' => 
    array (
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'shipment_tracking' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickupShippingAdminUi\\Plugin\\Shipping\\Controller\\Order\\Shipment\\View\\ShipmentTrackingPlugin',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\Authentication',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
    ),
    'Magento\\Shipping\\Block\\Adminhtml\\View' => 
    array (
      'admin_gws' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Model\\Block\\Container\\Plugin',
      ),
      'shipment_tracking_button' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryInStorePickupShippingAdminUi\\Plugin\\Shipping\\Block\\Adminhtml\\View\\ShipmentTrackingButtonPlugin',
      ),
    ),
    'Magento\\InventoryAdminUi\\Ui\\DataProvider\\StockDataProvider' => 
    array (
      'sales_channel_data' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventorySalesAdminUi\\Plugin\\InventoryAdminUi\\Ui\\StockDataProvider\\SalesChannels',
      ),
    ),
    'Magento\\Shipping\\Block\\Adminhtml\\Create' => 
    array (
      'admin_gws' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Model\\Block\\Container\\Plugin',
      ),
      'back_button_url' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\InventoryShippingAdminUi\\Plugin\\Sales\\Block\\Shipment\\BackButtonUrlOnNewShipmentPagePlugin',
      ),
    ),
    'Magento\\Backend\\Block\\Widget\\Button\\ToolbarInterface' => 
    array (
      'login_as_customer_button_toolbar' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerAdminUi\\Plugin\\Button\\ToolbarPlugin',
      ),
    ),
    'Magento\\Customer\\Model\\Metadata\\Form' => 
    array (
      'login_as_customer_customer_data_validate_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerAssistance\\Plugin\\CustomerDataValidatePlugin',
      ),
    ),
    'Magento\\LoginAsCustomerAdminUi\\Ui\\Customer\\Component\\Button\\DataProvider' => 
    array (
      'login_as_customer_button_data_provider_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerAssistance\\Plugin\\LoginAsCustomerButtonDataProviderPlugin',
      ),
    ),
    'Magento\\LoginAsCustomerAdminUi\\Ui\\Customer\\Component\\ConfirmationPopup\\Options' => 
    array (
      'login_as_customer_store_options_restricted_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\LoginAsCustomerWebsiteRestriction\\Plugin\\StoreOptionsRestrictedPlugin',
      ),
    ),
    'Magento\\Catalog\\Model\\ImageUploader' => 
    array (
      'save_category_image' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGalleryCatalogIntegration\\Plugin\\SaveBaseCategoryImageInformation',
      ),
    ),
    'Magento\\Ui\\Component\\Form\\Element\\DataType\\Media\\OpenDialogUrl' => 
    array (
      'new_media_gallery_open_dialog_url' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGalleryIntegration\\Plugin\\NewMediaGalleryOpenDialogUrl',
      ),
    ),
    'Magento\\Framework\\File\\Uploader' => 
    array (
      'save_asset_image' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\MediaGalleryIntegration\\Plugin\\SaveImageInformation',
      ),
    ),
    'Magento\\Cms\\Block\\Adminhtml\\Wysiwyg\\Images\\Content' => 
    array (
      'admin_gws' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Model\\Block\\Container\\Plugin',
      ),
      'add_search_button' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdobeStockImageAdminUi\\Plugin\\AddSearchButton',
      ),
    ),
    'Magento\\MediaGalleryUi\\Model\\GetDetailsByAssetId' => 
    array (
      'add_adobe_stock_image_details_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdobeStockImageAdminUi\\Plugin\\AddAdobeStockImageDetailsPlugin',
      ),
    ),
    'Magento\\MediaGalleryUi\\Ui\\Component\\Listing\\Columns\\Source\\Options' => 
    array (
      'add_adobe_stock_source_option_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdobeStockImageAdminUi\\Plugin\\AddAdobeStockSourceOptionPlugin',
      ),
    ),
    'Magento\\NegotiableQuote\\Block\\Quote\\AbstractQuote' => NULL,
    'Magento\\NegotiableQuote\\Block\\Quote\\Totals' => 
    array (
      'show_weee_attribute' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\NegotiableQuoteWeee\\Plugin\\Block\\Adminhtml\\Quote\\TotalsPlugin',
      ),
    ),
    'Magento\\Banner\\Model\\Banner\\Validator' => 
    array (
      'prepare-save-data' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\BannerCustomerSegment\\Plugin\\Model\\Banner\\ValidatorPlugin',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\ImageFactory' => 
    array (
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageBuilder\\Plugin\\DesignLoader',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Attribute\\Frontend\\Inputtype\\Presentation' => 
    array (
      'process_page_builder' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageBuilder\\Plugin\\Model\\Eav\\Attribute\\PresentationPlugin',
      ),
    ),
    'Zend_Filter_Interface' => NULL,
    'Magento\\Framework\\Filter\\Template' => 
    array (
      'convertBackgroundImages' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PageBuilder\\Plugin\\Filter\\TemplatePlugin',
      ),
    ),
    'Magento\\Store\\Api\\WebsiteRepositoryInterface' => 
    array (
      'admin_gws_website_repository_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Model\\Plugin\\WebsiteRepository',
      ),
    ),
    'Magento\\Framework\\View\\Element\\UiComponent\\Control\\ButtonProviderInterface' => NULL,
    'Magento\\CatalogEvent\\Block\\Adminhtml\\Catalog\\Category\\Edit\\AddEventButton' => 
    array (
      'admin_gws_category_event_buttons_limitation_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Model\\Plugin\\CategoryEventButton',
      ),
    ),
    'Magento\\User\\Controller\\Adminhtml\\User\\Role' => 
    array (
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\Authentication',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
    ),
    'Magento\\User\\Controller\\Adminhtml\\User\\Role\\SaveRole' => 
    array (
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'admin_gws_save_role' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Model\\Plugin\\SaveRole',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\Authentication',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
    ),
    'Magento\\Catalog\\Ui\\Component\\Product\\MassAction' => 
    array (
      'admin_gws_massaction' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Ui\\Component\\Plugin\\Catalog\\Product\\MassAction',
      ),
    ),
    'Magento\\Catalog\\Block\\Adminhtml\\Product\\Edit\\Button\\Generic' => NULL,
    'Magento\\Catalog\\Block\\Adminhtml\\Product\\Edit\\Button\\AddAttribute' => 
    array (
      'admin_gws_add_attribute' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Block\\Adminhtml\\Plugin\\Catalog\\Product\\Edit\\Button\\AddAttribute',
      ),
    ),
    'Magento\\Catalog\\Ui\\Component\\Listing\\Columns\\ProductActions' => 
    array (
      'admin_gws_product_link' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\ProductLinkUpdater',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product' => 
    array (
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\Authentication',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Edit' => 
    array (
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'admin_gws_store_switcher' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\ProductStoreSwitcherUpdater',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\Authentication',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
    ),
    'Magento\\Store\\Model\\StoreManagerInterface' => 
    array (
      'store_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\StoreFilter',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute\\Edit' => 
    array (
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'admin_gws_store_switcher_updater' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute\\StoreSwitcherUpdater',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\Authentication',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
    ),
    'Magento\\Catalog\\Block\\Adminhtml\\Product\\Edit\\Action\\Attribute' => 
    array (
      'admin_gws_attributes_block' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\Catalog\\Block\\Adminhtml\\Product\\Edit\\Action\\Attribute',
      ),
    ),
    'Magento\\SalesRule\\Model\\ResourceModel\\Rule\\Quote\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
      'collection_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\CollectionFilter',
      ),
      'quote_rule_collection_size_limiter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\CollectionSizeLimiter',
      ),
      'beforeSetValidationFilter' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\SalesRuleStaging\\Model\\ResourceModel\\Plugin\\Rule\\Collection',
      ),
      'aroundSetValidationFilter' => 
      array (
        'sortOrder' => 500,
        'instance' => 'Magento\\AdvancedSalesRule\\Model\\ResourceModel\\Plugin\\Rule\\Collection',
      ),
    ),
    'Magento\\CatalogRule\\Model\\ResourceModel\\Rule\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
      'collection_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\CollectionFilter',
      ),
    ),
    'Magento\\CatalogRule\\Model\\ResourceModel\\Grid\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
      'collection_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\CollectionFilter',
      ),
      'catalog_rule_collection_size_limiter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\CollectionSizeLimiter',
      ),
    ),
    'Magento\\CustomerSegment\\Model\\ResourceModel\\Segment\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
      'collection_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\CollectionFilter',
      ),
    ),
    'Magento\\CustomerSegment\\Model\\ResourceModel\\Grid\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
      'collection_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\CollectionFilter',
      ),
      'customer_segment_collection_size_limiter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\CollectionSizeLimiter',
      ),
    ),
    'Magento\\Reminder\\Model\\ResourceModel\\Rule\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
      'collection_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\CollectionFilter',
      ),
    ),
    'Magento\\Reminder\\Model\\ResourceModel\\Reminder\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
      'collection_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\CollectionFilter',
      ),
      'reminder_collection_size_limiter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\CollectionSizeLimiter',
      ),
    ),
    'Magento\\Authorization\\Model\\ResourceModel\\Role\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
      'collection_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\CollectionFilter',
      ),
    ),
    'Magento\\Authorization\\Model\\ResourceModel\\Role\\Grid\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
      'collection_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\CollectionFilter',
      ),
      'user_role_collection_size_limiter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\UserRoleCollectionSizeLimiter',
      ),
    ),
    'Magento\\Review\\Model\\ResourceModel\\Rating\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
      'collection_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\CollectionFilter',
      ),
    ),
    'Magento\\Review\\Model\\ResourceModel\\Rating\\Grid\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
      'collection_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\CollectionFilter',
      ),
      'rating_collection_size_limiter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\Review\\RatingCollectionSizeLimiter',
      ),
    ),
    'Magento\\VisualMerchandiser\\Block\\Adminhtml\\Category\\Merchandiser' => 
    array (
      'admin_gws_category_products_block' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\VisualMerchandiser\\Block\\Adminhtml\\Category\\Merchandiser',
      ),
    ),
    'Magento\\Backend\\Block\\Widget\\Grid' => NULL,
    'Magento\\Backend\\Block\\Widget\\Grid\\ExportInterface' => NULL,
    'Magento\\Backend\\Block\\Widget\\Grid\\Extended' => NULL,
    'Magento\\Catalog\\Block\\Adminhtml\\Category\\Tab\\Product' => NULL,
    'Magento\\VisualMerchandiser\\Block\\Adminhtml\\Category\\Merchandiser\\Grid' => 
    array (
      'admin_gws_category_products_grid' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\VisualMerchandiser\\Block\\Adminhtml\\Category\\Merchandiser\\Grid',
      ),
    ),
    'Magento\\User\\Model\\ResourceModel\\User\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
      'collection_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\CollectionFilter',
      ),
      'admin_user_collection_size_limiter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Model\\Plugin\\UserCollection',
      ),
    ),
    'Magento\\Backend\\Block\\Widget\\Grid\\Container' => 
    array (
      'admin_gws' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Model\\Block\\Container\\Plugin',
      ),
    ),
    'Magento\\Review\\Block\\Adminhtml\\Rating' => 
    array (
      'admin_gws' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Model\\Block\\Container\\Plugin',
      ),
      'rating_remove_add_button' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\Review\\RatingRemoveAddButtonPlugin',
      ),
    ),
    'Magento\\Catalog\\Block\\Adminhtml\\Product\\Attribute\\Set\\Main' => 
    array (
      'product_attribute_set_remove_edit_buttons_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\ProductAttributeSetRemoveEditButtonsPlugin',
      ),
    ),
    'Magento\\Catalog\\Block\\Adminhtml\\Product\\Attribute\\Set\\Toolbar\\Main' => 
    array (
      'product_attribute_set_remove_add_button_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\ProductAttributeSetRemoveAddButtonPlugin',
      ),
    ),
    'Magento\\CustomerCustomAttributes\\Block\\Adminhtml\\Customer\\Attribute\\Edit' => 
    array (
      'admin_gws' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Model\\Block\\Container\\Plugin',
      ),
      'customer_attribute_edit_remove_buttons' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\CustomerCustomAttributes\\CustomerAttributeEditRemoveButtonsPlugin',
      ),
    ),
    'Magento\\CustomerCustomAttributes\\Block\\Adminhtml\\Customer\\Address\\Attribute\\Edit' => 
    array (
      'admin_gws' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Model\\Block\\Container\\Plugin',
      ),
      'customer_address_attribute_edit_remove_buttons' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\CustomerCustomAttributes\\CustomerAddressAttributeEditRemoveButtonsPlugin',
      ),
    ),
    'Magento\\Rma\\Block\\Adminhtml\\Rma\\Item\\Attribute\\Edit' => 
    array (
      'admin_gws' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Model\\Block\\Container\\Plugin',
      ),
      'returns_attribute_edit_remove_buttons' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\Rma\\ReturnsAttributeEditRemoveButtonsPlugin',
      ),
    ),
    'Magento\\Config\\Model\\Config\\Structure\\SearchInterface' => NULL,
    'Magento\\Config\\Model\\Config\\Structure' => 
    array (
      'paypal_system_configuration' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Paypal\\Model\\Config\\StructurePlugin',
      ),
    ),
    'Magento\\Config\\Model\\Config\\StructureElementInterface' => NULL,
    'Magento\\Config\\Model\\Config\\Structure\\ElementInterface' => NULL,
    'Magento\\Config\\Model\\Config\\Structure\\AbstractElement' => NULL,
    'Magento\\Config\\Model\\Config\\Structure\\Element\\Field' => 
    array (
      'paypal_system_configuration_field' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Paypal\\Model\\Config\\Structure\\Element\\FieldPlugin',
      ),
    ),
    'Magento\\ConfigurableProduct\\Block\\Adminhtml\\Product\\Edit\\Tab\\Variations\\Config' => 
    array (
      'Config' => 
      array (
        'sortOrder' => 82,
        'instance' => 'Magento\\PricePermissions\\Block\\Adminhtml\\ConfigurableProduct\\Product\\Edit\\Tab\\Variations\\Plugin\\Config',
      ),
    ),
    'Magento\\CatalogRule\\Block\\Adminhtml\\Promo\\Catalog' => 
    array (
      'admin_gws' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Model\\Block\\Container\\Plugin',
      ),
      'promotion_permission' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PromotionPermissions\\Block\\Adminhtml\\Promo\\Catalog\\Plugin',
      ),
      'disable_apply_rules' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CatalogRuleStaging\\Block\\Adminhtml\\Promo\\Catalog\\Plugin',
      ),
    ),
    'Magento\\CatalogRule\\Block\\Adminhtml\\Edit\\GenericButton' => 
    array (
      'promotion_permission' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PromotionPermissions\\Block\\Adminhtml\\Promo\\Catalog\\Edit\\GenericButton\\Plugin',
      ),
    ),
    'Magento\\SalesRule\\Block\\Adminhtml\\Promo\\Quote' => 
    array (
      'admin_gws' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Model\\Block\\Container\\Plugin',
      ),
      'promotion_permission' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PromotionPermissions\\Block\\Adminhtml\\Promo\\Quote\\Plugin',
      ),
    ),
    'Magento\\SalesRule\\Block\\Adminhtml\\Promo\\Quote\\Edit\\GenericButton' => 
    array (
      'promotion_permission' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PromotionPermissions\\Block\\Adminhtml\\Promo\\Quote\\Edit\\GenericButton\\Plugin',
      ),
    ),
    'Magento\\Reminder\\Block\\Adminhtml\\Reminder' => 
    array (
      'admin_gws' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Model\\Block\\Container\\Plugin',
      ),
      'promotion_permission' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PromotionPermissions\\Block\\Adminhtml\\Reminder\\Plugin',
      ),
    ),
    'Magento\\Reminder\\Block\\Adminhtml\\Reminder\\Edit' => 
    array (
      'admin_gws' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Model\\Block\\Container\\Plugin',
      ),
      'promotion_permission' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\PromotionPermissions\\Block\\Adminhtml\\Reminder\\Edit\\Plugin',
      ),
    ),
    'Magento\\Rss\\Controller\\Adminhtml\\Feed' => 
    array (
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\Authentication',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
    ),
    'Magento\\Rss\\Controller\\Adminhtml\\Feed\\Index' => 
    array (
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Rss\\App\\Action\\Plugin\\BackendAuthentication',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
    ),
    'Magento\\SalesRule\\Model\\Rule\\DataProvider' => NULL,
    'Magento\\SalesRuleStaging\\Model\\Rule\\FormDataProvider' => 
    array (
      'salesRuleStagingFormDataProvider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Model\\Entity\\DataProvider\\DataProviderPlugin',
      ),
    ),
    'Magento\\SalesRuleStaging\\Model\\Rule\\Identifier\\DataProvider' => 
    array (
      'salesRuleStagingPageDataProvider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Model\\Entity\\DataProvider\\Identifier\\DataProviderPlugin',
      ),
    ),
    'Magento\\Framework\\View\\Element\\Text' => NULL,
    'Magento\\Framework\\View\\Element\\Text\\ListText' => NULL,
    'Magento\\Sales\\Block\\Adminhtml\\Order\\View\\Tab\\Invoices' => 
    array (
      'invoices_show_tab' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesArchive\\Plugin\\InvoicesSalesOrderViewTabPlugin',
      ),
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\View\\Tab\\Creditmemos' => 
    array (
      'creditmemos_show_tab' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesArchive\\Plugin\\CreditmemosSalesOrderViewTabPlugin',
      ),
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\View\\Tab\\Shipments' => 
    array (
      'shipments_show_tab' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\SalesArchive\\Plugin\\ShipmentsSalesOrderViewTabPlugin',
      ),
    ),
    'Magento\\CatalogRule\\Model\\Rule\\DataProvider' => NULL,
    'Magento\\CatalogRuleStaging\\Model\\Rule\\DataProvider' => 
    array (
      'catalogRuleStagingDataProvider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Model\\Entity\\DataProvider\\DataProviderPlugin',
      ),
    ),
    'Magento\\CatalogRuleStaging\\Model\\Rule\\Identifier\\DataProvider' => 
    array (
      'catalogRuleStagingPageDataProvider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Model\\Entity\\DataProvider\\Identifier\\DataProviderPlugin',
      ),
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Items\\AbstractItems' => NULL,
    'Magento\\Sales\\Block\\Adminhtml\\Order\\Creditmemo\\Create\\Items' => 
    array (
      'refundButton' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CompanyCredit\\Plugin\\Sales\\Block\\Adminhtml\\Order\\Creditmemo\\Create\\ItemsPlugin',
      ),
    ),
    'Magento\\CustomerBalance\\Block\\Adminhtml\\Sales\\Order\\Creditmemo\\Controls' => 
    array (
      'hideRefundToStoreCreditField' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CompanyCredit\\Plugin\\CustomerBalance\\Block\\Adminhtml\\Sales\\Order\\Creditmemo\\ControlsPlugin',
      ),
    ),
    'Magento\\CompanyPayment\\Model\\Payment\\Checks\\CanUseForCompany' => 
    array (
      'removeCompanyCreditWhenNoCompany' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CompanyCredit\\Plugin\\Payment\\Checks\\CanUseForCompanyPlugin',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Attribute' => 
    array (
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\Authentication',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Attribute\\Save' => 
    array (
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'save_swatches_frontend_input' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Swatches\\Controller\\Adminhtml\\Product\\Attribute\\Plugin\\Save',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\Authentication',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
    ),
    'Magento\\Widget\\Model\\Widget' => 
    array (
      'change_widget_placeholder' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Tinymce3\\Model\\Plugin\\Widget',
      ),
    ),
    'Magento\\AdminNotification\\Model\\ResourceModel\\System\\Message\\Collection' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
      'collection_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\CollectionFilter',
      ),
    ),
    'Magento\\AdminNotification\\Model\\ResourceModel\\System\\Message\\Collection\\Synchronized' => 
    array (
      'currentPageDetection' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\Data\\Collection',
      ),
      'collection_filter' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AdminGws\\Plugin\\CollectionFilter',
      ),
      'afterToArray' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AsynchronousOperations\\Model\\ResourceModel\\System\\Message\\Collection\\Synchronized\\Plugin',
      ),
    ),
    'Magento\\AdminNotification\\Ui\\Component\\DataProvider\\DataProvider' => 
    array (
      'afterGetMeta' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\AsynchronousOperations\\Ui\\Component\\AdminNotification\\Plugin',
      ),
    ),
    'Magento\\Shipping\\Block\\Adminhtml\\Order\\Packaging' => 
    array (
      'usps' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Usps\\Block\\Adminhtml\\Order\\Packaging\\Plugin\\DisplayGirth',
      ),
    ),
    'Magento\\CmsStaging\\Model\\Page\\DataProvider' => 
    array (
      'google_optimizer_cms_page_data_provider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\GoogleOptimizer\\Model\\Plugin\\Cms\\Page\\DataProvider',
      ),
      'cmsStagingPageDataProvider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Model\\Entity\\DataProvider\\DataProviderPlugin',
      ),
    ),
    'Magento\\Cms\\Model\\Block\\DataProvider' => NULL,
    'Magento\\CmsStaging\\Model\\Block\\DataProvider' => 
    array (
      'cmsStagingBlockDataProvider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Model\\Entity\\DataProvider\\DataProviderPlugin',
      ),
    ),
    'Magento\\CmsStaging\\Model\\Page\\Identifier\\DataProvider' => 
    array (
      'cmsStagingPageDataProvider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Model\\Entity\\DataProvider\\Identifier\\DataProviderPlugin',
      ),
    ),
    'Magento\\CmsStaging\\Model\\Block\\Identifier\\DataProvider' => 
    array (
      'cmsStagingBlockDataProvider' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Staging\\Model\\Entity\\DataProvider\\Identifier\\DataProviderPlugin',
      ),
    ),
    'Magento\\Cms\\Controller\\Adminhtml\\Page\\Save' => 
    array (
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'cmsstaging_page_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CmsStaging\\Controller\\Adminhtml\\Page\\Save\\Plugin',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\Authentication',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
    ),
    'Magento\\CmsStaging\\Controller\\Adminhtml\\Page\\Update\\Save' => 
    array (
      'eventDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\EventDispatchPlugin',
      ),
      'actionFlagNoDispatch' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Framework\\App\\Action\\Plugin\\ActionFlagNoDispatchPlugin',
      ),
      'designLoader' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Plugin\\LoadDesignPlugin',
      ),
      'customerNotification' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Customer\\Model\\Plugin\\CustomerNotification',
      ),
      'themeRegistrationFromFilesystem' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\Theme\\Model\\Theme\\Plugin\\Registration',
      ),
      'cmsstaging_page_update_save' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Magento\\CmsStaging\\Controller\\Adminhtml\\Page\\Update\\Save\\Plugin',
      ),
      'adminMassactionKey' => 
      array (
        'sortOrder' => 11,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\MassactionKey',
      ),
      'log' => 
      array (
        'sortOrder' => 95,
        'instance' => 'Magento\\Logging\\App\\Action\\Plugin\\Log',
      ),
      'adminAuthentication' => 
      array (
        'sortOrder' => 100,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\Authentication',
      ),
      'adminLoadDesign' => 
      array (
        'sortOrder' => 101,
        'instance' => 'Magento\\Backend\\App\\Action\\Plugin\\LoadDesignPlugin',
      ),
    ),
    'Magento\\Framework\\Config\\Data\\Scoped' => NULL,
    'Magento\\Config\\Model\\Config\\Structure\\Data' => 
    array (
      'mageplaza_module_activate' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\Core\\Model\\Config\\Structure\\Data',
      ),
    ),
    'Magento\\Backend\\Model\\Menu\\Builder\\AbstractCommand' => 
    array (
      'mageplaza_move_menu' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Mageplaza\\Core\\Plugin\\MoveMenu',
      ),
    ),
    'Magento\\Config\\Model\\Config\\Structure\\Element\\AbstractComposite' => NULL,
    'Magento\\Config\\Model\\Config\\Structure\\Element\\Group' => 
    array (
      'ConfigGroupPlugin' => 
      array (
        'sortOrder' => 1,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\GroupPlugin',
      ),
    ),
    'Magento\\Customer\\Model\\Customer\\DataProvider' => 
    array (
      'ShowVertexCustomerAttributes' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Vertex\\Tax\\Model\\Plugin\\CustomerDataProviderPlugin',
      ),
    ),
    'Magento\\Backend\\Block\\Widget\\Tabs' => NULL,
    'Magento\\Backend\\Block\\Dashboard\\Grids' => 
    array (
      'yotpo_yotpo_backend_block_dashboard_grids_plugin' => 
      array (
        'sortOrder' => 0,
        'instance' => 'Yotpo\\Yotpo\\Plugin\\Backend\\Block\\Dashboard\\Grids',
      ),
    ),
  ),
  2 => 
  array (
    'Magento\\Framework\\DB\\Adapter\\AdapterInterface_commit___self' => 
    array (
      4 => 
      array (
        0 => 'execute_commit_callbacks',
      ),
    ),
    'Magento\\Framework\\DB\\Adapter\\AdapterInterface_rollBack___self' => 
    array (
      4 => 
      array (
        0 => 'execute_commit_callbacks',
      ),
    ),
    'Magento\\Framework\\App\\Response\\Http_sendResponse___self' => 
    array (
      1 => 
      array (
        0 => 'genericHeaderPlugin',
      ),
    ),
    'Magento\\Framework\\App\\ActionInterface_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Framework\\App\\ActionInterface_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\Framework\\Url\\SecurityInfo_isSecure___self' => 
    array (
      2 => 'storeUrlSecurityInfo',
    ),
    'Magento\\Framework\\Url\\RouteParamsResolver_setRouteParams___self' => 
    array (
      1 => 
      array (
        0 => 'storeUrlRouteParamsResolver',
      ),
    ),
    'Magento\\Framework\\Url\\ScopeInterface_getBaseUrl___self' => 
    array (
      4 => 
      array (
        0 => 'urlSignature',
      ),
    ),
    'Magento\\Store\\Model\\Store_getBaseUrl___self' => 
    array (
      4 => 
      array (
        0 => 'urlSignature',
      ),
    ),
    'Magento\\Store\\Model\\Store_save___self' => 
    array (
      4 => 
      array (
        0 => 'themeDesignConfigGridIndexerStore',
      ),
    ),
    'Magento\\Store\\Model\\Store_delete___self' => 
    array (
      4 => 
      array (
        0 => 'themeDesignConfigGridIndexerStore',
      ),
    ),
    'Magento\\Store\\Model\\StoreResolver_getCurrentStoreId___self' => 
    array (
      2 => 'staging_preview_allowed_stores_check_bypass',
    ),
    'Magento\\Framework\\Session\\SidResolver_getSid___self' => 
    array (
      4 => 
      array (
        0 => 'pagebuilder_preview_sid_resolving',
      ),
    ),
    'Magento\\Framework\\App\\Config\\Initial\\Converter_convert___self' => 
    array (
      4 => 
      array (
        0 => 'cron_system_config_initial_converter_plugin',
      ),
    ),
    'Magento\\Framework\\Model\\ActionValidator\\RemoveAction_isAllowed___self' => 
    array (
      2 => 'companyFrameworkModelActionValidatorRemoveAction',
    ),
    'Magento\\Framework\\App\\FrontControllerInterface_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'staging_preview_permissions_check',
        1 => 'default_store_setter',
        2 => 'configHash',
      ),
    ),
    'Magento\\Framework\\App\\FrontController_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'staging_preview_permissions_check',
        1 => 'default_store_setter',
        2 => 'storeCookieValidate',
        3 => 'install',
        4 => 'configHash',
      ),
    ),
    'Magento\\Framework\\Stdlib\\DateTime\\Timezone_isScopeDateInInterval___self' => 
    array (
      4 => 
      array (
        0 => 'staging_datetime_timezone_bypass',
      ),
    ),
    'Magento\\Cms\\Model\\Wysiwyg\\Images\\Storage_deleteFile___self' => 
    array (
      4 => 
      array (
        0 => 'media_gallery_image_remove_metadata_after_wysiwyg',
      ),
    ),
    'Magento\\Cms\\Model\\Wysiwyg\\Images\\Storage_deleteDirectory___self' => 
    array (
      4 => 
      array (
        0 => 'media_gallery_image_remove_metadata_after_wysiwyg',
      ),
    ),
    'Magento\\Theme\\Model\\DesignConfigRepository_save___self' => 
    array (
      4 => 
      array (
        0 => 'save_design_settings_event_dispatching',
      ),
    ),
    'Magento\\Theme\\Model\\DesignConfigRepository_delete___self' => 
    array (
      4 => 
      array (
        0 => 'save_design_settings_event_dispatching',
      ),
    ),
    'Magento\\Store\\Model\\Website_save___self' => 
    array (
      2 => 'themeDesignConfigGridIndexerWebsite',
    ),
    'Magento\\Store\\Model\\Website_delete___self' => 
    array (
      4 => 
      array (
        0 => 'themeDesignConfigGridIndexerWebsite',
      ),
      2 => 'reindex_customer_grid_after_website_remove',
    ),
    'Magento\\Store\\Model\\Website_delete_reindex_customer_grid_after_website_remove' => 
    array (
      4 => 
      array (
        0 => 'reindex_after_delete_website',
      ),
    ),
    'Magento\\Store\\Model\\Website_afterDelete___self' => 
    array (
      4 => 
      array (
        0 => 'websiteDeletedNotification',
      ),
    ),
    'Magento\\Store\\Model\\Group_delete___self' => 
    array (
      4 => 
      array (
        0 => 'themeDesignConfigGridIndexerStoreGroup',
      ),
    ),
    'Magento\\Config\\App\\Config\\Source\\DumpConfigSourceAggregated_get___self' => 
    array (
      4 => 
      array (
        0 => 'designConfigTheme',
      ),
    ),
    'Magento\\Framework\\Data\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Eav\\Model\\ResourceModel\\Entity\\Attribute_getStoreLabelsByAttributeId___self' => 
    array (
      2 => 'storeLabelCaching',
    ),
    'Magento\\Eav\\Model\\Entity\\AbstractEntity_save___self' => 
    array (
      4 => 
      array (
        0 => 'clean_cache',
      ),
    ),
    'Magento\\Eav\\Model\\Entity\\AbstractEntity_delete___self' => 
    array (
      4 => 
      array (
        0 => 'clean_cache',
      ),
    ),
    'Magento\\Customer\\Model\\Session_regenerateId___self' => 
    array (
      2 => 'staging_preview_customer_session_id_change_bypass',
    ),
    'Magento\\Customer\\Model\\Session_destroy___self' => 
    array (
      2 => 'staging_preview_customer_session_id_change_bypass',
    ),
    'Magento\\Framework\\Data\\Collection\\AbstractDb_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Eav\\Model\\Entity\\Collection\\AbstractCollection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Eav\\Model\\Entity\\Collection\\VersionControl\\AbstractCollection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Customer\\Model\\ResourceModel\\Customer\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Customer\\Model\\ResourceModel\\Customer\\Collection_addAttributeToFilter___self' => 
    array (
      2 => 'amazon_login_customer_collection',
    ),
    'Magento\\Customer\\Api\\CustomerRepositoryInterface_save___self' => 
    array (
      2 => 'transactionWrapper',
    ),
    'Magento\\Customer\\Api\\CustomerRepositoryInterface_save_transactionWrapper' => 
    array (
      1 => 
      array (
        0 => 'companyCustomerSave',
      ),
      4 => 
      array (
        0 => 'companyCustomerSave',
      ),
      2 => 'aroundCustomerSave',
    ),
    'Magento\\Customer\\Api\\CustomerRepositoryInterface_delete___self' => 
    array (
      2 => 'companyCustomerDelete',
    ),
    'Magento\\Customer\\Api\\CustomerRepositoryInterface_deleteById___self' => 
    array (
      2 => 'companyCustomerDelete',
    ),
    'Magento\\Customer\\Api\\CustomerRepositoryInterface_get___self' => 
    array (
      4 => 
      array (
        0 => 'companyCustomerQuery',
        1 => 'extensionAttributeVertexCustomerCode',
        2 => 'extensionAttributeVertexCustomerCountry',
        3 => 'amazon_login_customer_repository',
      ),
    ),
    'Magento\\Customer\\Api\\CustomerRepositoryInterface_getById___self' => 
    array (
      4 => 
      array (
        0 => 'companyCustomerQuery',
        1 => 'update_newsletter_subscription_on_customer_update',
        2 => 'extensionAttributeVertexCustomerCode',
        3 => 'extensionAttributeVertexCustomerCountry',
        4 => 'amazon_login_customer_repository',
      ),
    ),
    'Magento\\Customer\\Api\\CustomerRepositoryInterface_deleteById_companyCustomerDelete' => 
    array (
      1 => 
      array (
        0 => 'aroundCustomerSave',
        1 => 'aroundDeleteById',
      ),
      2 => 'update_newsletter_subscription_on_customer_update',
    ),
    'Magento\\Customer\\Api\\CustomerRepositoryInterface_save_aroundCustomerSave' => 
    array (
      2 => 'aroundDeleteById',
    ),
    'Magento\\Customer\\Api\\CustomerRepositoryInterface_save_aroundDeleteById' => 
    array (
      4 => 
      array (
        0 => 'login_as_customer_customer_repository_plugin',
        1 => 'update_newsletter_subscription_on_customer_update',
      ),
      2 => 'extensionAttributeVertexCustomerCode',
    ),
    'Magento\\Customer\\Api\\CustomerRepositoryInterface_delete_companyCustomerDelete' => 
    array (
      4 => 
      array (
        0 => 'update_newsletter_subscription_on_customer_update',
      ),
      2 => 'extensionAttributeVertexCustomerCode',
    ),
    'Magento\\Customer\\Api\\CustomerRepositoryInterface_getList___self' => 
    array (
      4 => 
      array (
        0 => 'update_newsletter_subscription_on_customer_update',
        1 => 'extensionAttributeVertexCustomerCode',
        2 => 'extensionAttributeVertexCustomerCountry',
      ),
    ),
    'Magento\\Customer\\Api\\CustomerRepositoryInterface_deleteById_update_newsletter_subscription_on_customer_update' => 
    array (
      2 => 'updateCreditHistoryAfterCustomerDelete',
    ),
    'Magento\\Customer\\Api\\CustomerRepositoryInterface_deleteById_updateCreditHistoryAfterCustomerDelete' => 
    array (
      2 => 'extensionAttributeVertexCustomerCode',
    ),
    'Magento\\Customer\\Api\\CustomerRepositoryInterface_delete_extensionAttributeVertexCustomerCode' => 
    array (
      4 => 
      array (
        0 => 'extensionAttributeVertexCustomerCountry',
      ),
    ),
    'Magento\\Customer\\Api\\CustomerRepositoryInterface_deleteById_extensionAttributeVertexCustomerCode' => 
    array (
      4 => 
      array (
        0 => 'extensionAttributeVertexCustomerCountry',
      ),
    ),
    'Magento\\Customer\\Api\\CustomerRepositoryInterface_save_extensionAttributeVertexCustomerCode' => 
    array (
      4 => 
      array (
        0 => 'extensionAttributeVertexCustomerCountry',
      ),
    ),
    'Magento\\Directory\\Model\\AllowedCountries_getAllowedCountries___self' => 
    array (
      1 => 
      array (
        0 => 'customerAllowedCountries',
      ),
    ),
    'Magento\\PageCache\\Observer\\FlushFormKey_execute___self' => 
    array (
      2 => 'customerFlushFormKey',
    ),
    'Magento\\Customer\\Model\\AccountManagement_initiatePasswordReset___self' => 
    array (
      1 => 
      array (
        0 => 'security_check_customer_password_reset_attempt',
      ),
    ),
    'Magento\\Customer\\Model\\AccountManagement_isEmailAvailable___self' => 
    array (
      4 => 
      array (
        0 => 'mpsmtp_account_management',
      ),
    ),
    'Magento\\AdvancedPricingImportExport\\Model\\Import\\AdvancedPricing_saveAdvancedPricing___self' => 
    array (
      4 => 
      array (
        0 => 'invalidateAdvancedPriceIndexerOnImport',
      ),
    ),
    'Magento\\AdvancedPricingImportExport\\Model\\Import\\AdvancedPricing_deleteAdvancedPricing___self' => 
    array (
      4 => 
      array (
        0 => 'invalidateAdvancedPriceIndexerOnImport',
      ),
    ),
    'Magento\\Framework\\MessageQueue\\Consumer\\Config\\CompositeReader_read___self' => 
    array (
      4 => 
      array (
        0 => 'queueConfigPlugin',
      ),
    ),
    'Magento\\Framework\\MessageQueue\\Publisher\\Config\\CompositeReader_read___self' => 
    array (
      4 => 
      array (
        0 => 'queueConfigPlugin',
      ),
    ),
    'Magento\\Framework\\MessageQueue\\Topology\\Config\\CompositeReader_read___self' => 
    array (
      4 => 
      array (
        0 => 'queueConfigPlugin',
      ),
    ),
    'Magento\\Framework\\Amqp\\Bulk\\Exchange_enqueue___self' => 
    array (
      1 => 
      array (
        0 => 'amqpStoreIdFieldForAmqpBulkExchange',
      ),
    ),
    'Magento\\AsynchronousOperations\\Model\\MassConsumerEnvelopeCallback_execute___self' => 
    array (
      2 => 'amqpStoreIdFieldForAsynchronousOperationsMassConsumerEnvelopeCallback',
    ),
    'Magento\\Framework\\App\\Config\\Value_save___self' => 
    array (
      4 => 
      array (
        0 => 'admin_system_config_media_gallery_renditions',
        1 => 'admin_system_config_adobe_stock_save_plugin',
      ),
    ),
    'Magento\\Framework\\App\\Config\\Value_afterSave___self' => 
    array (
      4 => 
      array (
        0 => 'webapiResourceSecurityCacheInvalidate',
      ),
    ),
    'Magento\\Authorization\\Model\\Role_save___self' => 
    array (
      4 => 
      array (
        0 => 'updateRoleUsersAcl',
      ),
    ),
    'Magento\\Indexer\\Model\\Indexer_isScheduled___self' => 
    array (
      4 => 
      array (
        0 => 'reindexRow',
      ),
    ),
    'Magento\\Indexer\\Model\\Config\\Data_get___self' => 
    array (
      4 => 
      array (
        0 => 'indexerCategoryFlatConfigGet',
        1 => 'indexerProductFlatConfigGet',
        2 => 'catalogPermissionsIndexerConfigGet',
      ),
    ),
    'Magento\\Indexer\\Model\\Processor_updateMview___self' => 
    array (
      4 => 
      array (
        0 => 'page-cache-indexer-reindex-clean-cache',
      ),
    ),
    'Magento\\Indexer\\Model\\Processor_reindexAllInvalid___self' => 
    array (
      4 => 
      array (
        0 => 'page-cache-indexer-reindex-clean-cache',
      ),
    ),
    'Magento\\Framework\\Indexer\\ActionInterface_executeFull___self' => 
    array (
      4 => 
      array (
        0 => 'cache_cleaner_after_reindex',
      ),
    ),
    'Magento\\Framework\\Indexer\\ActionInterface_executeList___self' => 
    array (
      4 => 
      array (
        0 => 'cache_cleaner_after_reindex',
      ),
    ),
    'Magento\\Framework\\Indexer\\ActionInterface_executeRow___self' => 
    array (
      4 => 
      array (
        0 => 'cache_cleaner_after_reindex',
      ),
    ),
    'Magento\\Framework\\Model\\ResourceModel\\Db\\Collection\\AbstractCollection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Framework\\Model\\ResourceModel\\Db\\Collection\\AbstractCollection_loadWithFilter___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\Framework\\Model\\ResourceModel\\Db\\Collection\\AbstractCollection_getSelectCountSql___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\Cms\\Model\\ResourceModel\\AbstractCollection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Cms\\Model\\ResourceModel\\AbstractCollection_loadWithFilter___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\Cms\\Model\\ResourceModel\\AbstractCollection_getSelectCountSql___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\Cms\\Model\\ResourceModel\\Page\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Cms\\Model\\ResourceModel\\Page\\Collection_loadWithFilter___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\Cms\\Model\\ResourceModel\\Page\\Collection_getSelectCountSql___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\Cms\\Model\\ResourceModel\\Page\\Grid\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Cms\\Model\\ResourceModel\\Page\\Grid\\Collection_loadWithFilter___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\Cms\\Model\\ResourceModel\\Page\\Grid\\Collection_getSelectCountSql___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\Cms\\Model\\ResourceModel\\Page\\Grid\\Collection_getItems___self' => 
    array (
      1 => 
      array (
        0 => 'setStagingFlagCmsPageUpdate',
      ),
    ),
    'Magento\\Cms\\Model\\ResourceModel\\Block\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Cms\\Model\\ResourceModel\\Block\\Collection_loadWithFilter___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\Cms\\Model\\ResourceModel\\Block\\Collection_getSelectCountSql___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\Cms\\Model\\ResourceModel\\Block\\Grid\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Cms\\Model\\ResourceModel\\Block\\Grid\\Collection_loadWithFilter___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\Cms\\Model\\ResourceModel\\Block\\Grid\\Collection_getSelectCountSql___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\Cms\\Model\\ResourceModel\\Block\\Grid\\Collection_getItems___self' => 
    array (
      1 => 
      array (
        0 => 'setStagingFlagCmsBlockUpdate',
      ),
    ),
    'Magento\\Cms\\Ui\\Component\\DataProvider_getSearchResult___self' => 
    array (
      1 => 
      array (
        0 => 'filterCmsPageAndBlockUpdate',
      ),
    ),
    'Magento\\Catalog\\Model\\Product_load___self' => 
    array (
      4 => 
      array (
        0 => 'catalogInventoryAfterLoad',
      ),
    ),
    'Magento\\Catalog\\Model\\Product_getIdentities___self' => 
    array (
      4 => 
      array (
        0 => 'product_identities_extender',
        1 => 'cms',
        2 => 'add_bundle_parent_identities',
      ),
    ),
    'Magento\\Catalog\\Model\\Product_save___self' => 
    array (
      4 => 
      array (
        0 => 'catalogPermissionsProductChange',
        1 => 'shared_catalogs_model_product',
      ),
    ),
    'Magento\\Catalog\\Model\\Product_delete___self' => 
    array (
      4 => 
      array (
        0 => 'catalogPermissionsProductChange',
      ),
    ),
    'Magento\\Catalog\\Model\\Product_getMediaAttributes___self' => 
    array (
      4 => 
      array (
        0 => 'exclude_swatch_attribute',
      ),
    ),
    'Magento\\Customer\\Model\\ResourceModel\\Visitor_clean___self' => 
    array (
      4 => 
      array (
        0 => 'catalogLog',
        1 => 'reportLog',
      ),
    ),
    'Magento\\Catalog\\Model\\Category\\DataProvider_getDefaultMetaData___self' => 
    array (
      4 => 
      array (
        0 => 'set_page_layout_default_value',
      ),
    ),
    'Magento\\Catalog\\Model\\Category\\DataProvider_getData___self' => 
    array (
      4 => 
      array (
        0 => 'catalogCategoryDataProviderTrimData',
      ),
    ),
    'Magento\\Catalog\\Model\\Category\\DataProvider_getAttributesMeta___self' => 
    array (
      4 => 
      array (
        0 => 'category_ui_form_url_key_plugin',
      ),
    ),
    'Magento\\Catalog\\Model\\Category\\DataProvider_prepareMeta___self' => 
    array (
      4 => 
      array (
        0 => 'catalog_permissions_category_data_provider',
        1 => 'google_optimizer_category_data_provider',
      ),
    ),
    'Magento\\Theme\\Block\\Html\\Topmenu_getHtml___self' => 
    array (
      1 => 
      array (
        0 => 'catalogTopmenu',
      ),
    ),
    'Magento\\Theme\\Block\\Html\\Topmenu_getIdentities___self' => 
    array (
      1 => 
      array (
        0 => 'catalogTopmenu',
      ),
    ),
    'Magento\\Theme\\Block\\Html\\Topmenu_getCacheKeyInfo___self' => 
    array (
      4 => 
      array (
        0 => 'catalogTopmenu',
      ),
    ),
    'Magento\\Theme\\Block\\Html\\Topmenu_toHtml___self' => 
    array (
      1 => 
      array (
        0 => 'catalogPermissionsCachingTopmenu',
      ),
    ),
    'Magento\\Framework\\Mview\\View\\StateInterface_setStatus___self' => 
    array (
      4 => 
      array (
        0 => 'setStatusForMview',
        1 => 'catalogPermissionsIndexerSetStatusForMview',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Collection\\AbstractCollection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\Collection_load___self' => 
    array (
      1 => 
      array (
        0 => 'joinProductsWhenFlatEnabled',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\Collection_joinAttribute___self' => 
    array (
      1 => 
      array (
        0 => 'joinAttribute',
      ),
    ),
    'Magento\\Store\\Model\\ResourceModel\\Website_delete___self' => 
    array (
      4 => 
      array (
        0 => 'invalidatePriceIndexerOnWebsite',
        1 => 'categoryProductWebsiteAfterDelete',
        2 => 'delete_website_to_stock_link',
      ),
    ),
    'Magento\\Store\\Model\\ResourceModel\\Website_save___self' => 
    array (
      4 => 
      array (
        0 => 'invalidatePriceIndexerOnWebsite',
        1 => 'assign_website_to_default_stock',
      ),
      2 => 'update_sales_channel_website_code',
    ),
    'Magento\\Store\\Model\\ResourceModel\\Store_save___self' => 
    array (
      4 => 
      array (
        0 => 'storeViewResourceAroundSave',
        1 => 'catalogProductFlatIndexerStore',
        2 => 'categoryStoreAroundSave',
        3 => 'productAttributesStoreViewSave',
        4 => 'catalogsearchFulltextIndexerStoreView',
        5 => 'catalogPermissionsIndexerStoreView',
        6 => 'store_plugin',
        7 => 'update_cms_url_rewrites_after_store_save',
      ),
      1 => 
      array (
        0 => 'invalidateTargetRuleOnStoreViewChange',
        1 => 'store_plugin',
      ),
    ),
    'Magento\\Store\\Model\\ResourceModel\\Store_delete___self' => 
    array (
      4 => 
      array (
        0 => 'categoryStoreAroundSave',
        1 => 'catalogsearchFulltextIndexerStoreView',
        2 => 'store_plugin',
      ),
    ),
    'Magento\\Store\\Model\\ResourceModel\\Group_save___self' => 
    array (
      4 => 
      array (
        0 => 'storeGroupResourceAroundSave',
        1 => 'catalogProductFlatIndexerStoreGroup',
        2 => 'categoryStoreGroupAroundSave',
        3 => 'storeGroupResourceAroundBeforeSave',
        4 => 'catalogsearchFulltextIndexerStoreGroup',
        5 => 'catalogPermissionsIndexerStoreGroup',
        6 => 'group_plugin',
      ),
      1 => 
      array (
        0 => 'invalidateTargetRuleOnStoreGroupChange',
      ),
    ),
    'Magento\\Store\\Model\\ResourceModel\\Group_delete___self' => 
    array (
      4 => 
      array (
        0 => 'categoryStoreGroupAroundSave',
        1 => 'catalogsearchFulltextIndexerStoreGroup',
      ),
    ),
    'Magento\\Customer\\Api\\GroupRepositoryInterface_save___self' => 
    array (
      2 => 'invalidatePriceIndexerOnCustomerGroup',
    ),
    'Magento\\Customer\\Api\\GroupRepositoryInterface_deleteById___self' => 
    array (
      4 => 
      array (
        0 => 'invalidatePriceIndexerOnCustomerGroup',
        1 => 'customerGroupEdit',
      ),
      2 => 'groupRepositoryPlugin',
    ),
    'Magento\\Customer\\Api\\GroupRepositoryInterface_save_invalidatePriceIndexerOnCustomerGroup' => 
    array (
      2 => 'customerGroupEdit',
    ),
    'Magento\\Customer\\Api\\GroupRepositoryInterface_delete___self' => 
    array (
      4 => 
      array (
        0 => 'customerGroupEdit',
      ),
    ),
    'Magento\\Customer\\Api\\GroupRepositoryInterface_deleteById_groupRepositoryPlugin' => 
    array (
      4 => 
      array (
        0 => 'updateCompanyCustomerGroupPlugin',
      ),
      1 => 
      array (
        0 => 'validateCustomerGroupDeletePlugin',
      ),
    ),
    'Magento\\Customer\\Api\\GroupRepositoryInterface_save_customerGroupEdit' => 
    array (
      4 => 
      array (
        0 => 'updateSharedCatalogNamePlugin',
      ),
    ),
    'Magento\\Eav\\Model\\Entity\\Attribute\\Set_save___self' => 
    array (
      1 => 
      array (
        0 => 'invalidateEavIndexerOnAttributeSetSave',
      ),
      4 => 
      array (
        0 => 'invalidateEavIndexerOnAttributeSetSave',
      ),
    ),
    'Magento\\Eav\\Model\\Entity\\Attribute\\Set_delete___self' => 
    array (
      4 => 
      array (
        0 => 'invalidateTargetRuleOnDeleteAttributeSet',
      ),
    ),
    'Magento\\Catalog\\Helper\\Product\\Flat\\Indexer_getFlatColumnsDdlDefinition___self' => 
    array (
      4 => 
      array (
        0 => 'addRowIdToFlatDefinition',
      ),
    ),
    'Magento\\Catalog\\Helper\\Product\\Flat\\Indexer_getFlatIndexes___self' => 
    array (
      4 => 
      array (
        0 => 'addRowIdToIndex',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\TypeTransitionManager_processProduct___self' => 
    array (
      2 => 'downloadable_product_transition',
    ),
    'Magento\\Catalog\\Model\\Product\\TypeTransitionManager_processProduct_downloadable_product_transition' => 
    array (
      2 => 'configurable_product_transition',
    ),
    'Magento\\CatalogInventory\\Model\\Config\\Backend\\AbstractValue_save___self' => 
    array (
      4 => 
      array (
        0 => 'admin_system_config_media_gallery_renditions',
        1 => 'admin_system_config_adobe_stock_save_plugin',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\Config\\Backend\\AbstractValue_afterSave___self' => 
    array (
      4 => 
      array (
        0 => 'webapiResourceSecurityCacheInvalidate',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\Config\\Backend\\ShowOutOfStock_save___self' => 
    array (
      4 => 
      array (
        0 => 'admin_system_config_media_gallery_renditions',
        1 => 'admin_system_config_adobe_stock_save_plugin',
        2 => 'showOutOfStockValueChanged',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\Config\\Backend\\ShowOutOfStock_afterSave___self' => 
    array (
      4 => 
      array (
        0 => 'webapiResourceSecurityCacheInvalidate',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Config_getAttributesUsedInListing___self' => 
    array (
      2 => 'productListingAttributesCaching',
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Config_getAttributesUsedForSortBy___self' => 
    array (
      2 => 'productListingAttributesCaching',
    ),
    'Magento\\Eav\\Model\\Entity\\Attribute\\Backend\\AbstractBackend_validate___self' => 
    array (
      2 => 'attributeValidation',
    ),
    'Magento\\Eav\\Model\\Entity\\Attribute\\Backend\\AbstractBackend_validate_attributeValidation' => 
    array (
      2 => 'ConfigurableProduct::skipValidation',
    ),
    'Magento\\Eav\\Model\\Entity\\Attribute\\Backend\\AbstractBackend_validate_ConfigurableProduct::skipValidation' => 
    array (
      1 => 
      array (
        0 => 'Price',
      ),
    ),
    'Magento\\Sales\\Api\\OrderItemRepositoryInterface_get___self' => 
    array (
      4 => 
      array (
        0 => 'get_gift_message',
        1 => 'vertex_commodity_code_order_item_repository',
      ),
    ),
    'Magento\\Sales\\Api\\OrderItemRepositoryInterface_delete___self' => 
    array (
      4 => 
      array (
        0 => 'vertex_commodity_code_order_item_repository',
      ),
    ),
    'Magento\\Sales\\Api\\OrderItemRepositoryInterface_getList___self' => 
    array (
      4 => 
      array (
        0 => 'vertex_commodity_code_order_item_repository',
      ),
    ),
    'Magento\\Sales\\Api\\OrderItemRepositoryInterface_save___self' => 
    array (
      4 => 
      array (
        0 => 'vertex_commodity_code_order_item_repository',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\Collection\\ProductLimitation_isUsingPriceIndex___self' => 
    array (
      4 => 
      array (
        0 => 'isUsingPriceIndex',
      ),
    ),
    'Magento\\Eav\\Model\\ResourceModel\\ReadSnapshot_execute___self' => 
    array (
      4 => 
      array (
        0 => 'catalogReadSnapshot',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\Item\\ToOrderItem_convert___self' => 
    array (
      1 => 
      array (
        0 => 'copy_quote_files_to_order',
      ),
      4 => 
      array (
        0 => 'append_bundle_data_to_order',
        1 => 'append_gift_card_data_to_order',
        2 => 'gift_registry_item_from_quote_item',
        3 => 'gift_message_quote_item_conversion',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Initialization\\Helper_initializeFromData___self' => 
    array (
      4 => 
      array (
        0 => 'weeeAttributeOptionsProcess',
        1 => 'admin_gws_gallery_updater',
      ),
      1 => 
      array (
        0 => 'Rma',
        1 => 'GiftCardInitialize',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Initialization\\Helper_mergeProductOptions___self' => 
    array (
      4 => 
      array (
        0 => 'vertex_custom_option_flex_field_after_save_initialization',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Initialization\\Helper_initialize___self' => 
    array (
      4 => 
      array (
        0 => 'product_save_rewrites_history_plugin',
        1 => 'configurable',
        2 => 'Bundle',
        3 => 'updateConfigurations',
        4 => 'Downloadable',
        5 => 'PricePermissions',
        6 => 'GiftCardInitialize',
        7 => 'cleanConfigurationTmpImages',
      ),
    ),
    'Magento\\Quote\\Api\\CartRepositoryInterface_save___self' => 
    array (
      4 => 
      array (
        0 => 'save_fake_quota_in_preview',
      ),
      1 => 
      array (
        0 => 'remove_in_store_pickup_data',
      ),
      2 => 'quote_save',
    ),
    'Magento\\Quote\\Api\\CartRepositoryInterface_get___self' => 
    array (
      4 => 
      array (
        0 => 'amazon_payment_quote_repository',
      ),
    ),
    'Magento\\Quote\\Api\\CartRepositoryInterface_getForCustomer___self' => 
    array (
      4 => 
      array (
        0 => 'amazon_payment_quote_repository',
      ),
    ),
    'Magento\\Quote\\Api\\CartRepositoryInterface_getActive___self' => 
    array (
      4 => 
      array (
        0 => 'amazon_payment_quote_repository',
      ),
      2 => 'quote_save',
    ),
    'Magento\\Quote\\Api\\CartRepositoryInterface_getActiveForCustomer___self' => 
    array (
      4 => 
      array (
        0 => 'amazon_payment_quote_repository',
      ),
    ),
    'Magento\\Quote\\Api\\CartRepositoryInterface_getActive_quote_save' => 
    array (
      2 => 'purchaseOrderCartRepositoryPlugin',
    ),
    'Magento\\Quote\\Model\\QuoteRepository_save___self' => 
    array (
      4 => 
      array (
        0 => 'save_fake_quota_in_preview',
      ),
      1 => 
      array (
        0 => 'remove_in_store_pickup_data',
        1 => 'multishipping_quote_repository',
      ),
      2 => 'quote_save',
    ),
    'Magento\\Quote\\Model\\QuoteRepository_get___self' => 
    array (
      4 => 
      array (
        0 => 'multishipping_quote_repository',
        1 => 'amazon_payment_quote_repository',
      ),
    ),
    'Magento\\Quote\\Model\\QuoteRepository_getList___self' => 
    array (
      4 => 
      array (
        0 => 'multishipping_quote_repository',
      ),
    ),
    'Magento\\Quote\\Model\\QuoteRepository_getForCustomer___self' => 
    array (
      4 => 
      array (
        0 => 'amazon_payment_quote_repository',
      ),
    ),
    'Magento\\Quote\\Model\\QuoteRepository_getActive___self' => 
    array (
      4 => 
      array (
        0 => 'amazon_payment_quote_repository',
      ),
      2 => 'quote_save',
    ),
    'Magento\\Quote\\Model\\QuoteRepository_getActiveForCustomer___self' => 
    array (
      4 => 
      array (
        0 => 'amazon_payment_quote_repository',
      ),
    ),
    'Magento\\Quote\\Model\\QuoteRepository_getActive_quote_save' => 
    array (
      2 => 'purchaseOrderCartRepositoryPlugin',
    ),
    'Magento\\Quote\\Model\\Quote\\Address_exportCustomerAddress___self' => 
    array (
      4 => 
      array (
        0 => 'convertQuoteAddressToCustomerAddress',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\Address_requestShippingRates___self' => 
    array (
      4 => 
      array (
        0 => 'after_address_collect_shipping_sates',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\Address_collectShippingRates___self' => 
    array (
      2 => 'purchaseOrderQuoteAddress',
    ),
    'Magento\\Quote\\Model\\Quote\\Address_addShippingRate___self' => 
    array (
      2 => 'companyShippingQuoteAddressPlugin',
    ),
    'Magento\\Quote\\Model\\Quote\\Address_afterSave___self' => 
    array (
      4 => 
      array (
        0 => 'manage_assignment_of_pickup_location_to_quote_address',
      ),
    ),
    'Magento\\Quote\\Model\\ResourceModel\\Quote\\Address_load___self' => 
    array (
      4 => 
      array (
        0 => 'load_pickup_location_for_quote_address',
      ),
    ),
    'Magento\\Quote\\Model\\ResourceModel\\Quote_subtractProductFromQuotes___self' => 
    array (
      2 => 'substract_product_from_quotes',
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\AbstractResource_save___self' => 
    array (
      4 => 
      array (
        0 => 'clean_cache',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\AbstractResource_delete___self' => 
    array (
      4 => 
      array (
        0 => 'clean_cache',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product_save___self' => 
    array (
      4 => 
      array (
        0 => 'clean_cache',
        1 => 'update_quote_items_after_product_save',
      ),
      2 => 'catalogsearchFulltextProduct',
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product_delete___self' => 
    array (
      4 => 
      array (
        0 => 'clean_cache',
        1 => 'clean_quote_items_after_product_delete',
      ),
      2 => 'catalogsearchFulltextProduct',
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product_delete_catalogsearchFulltextProduct' => 
    array (
      4 => 
      array (
        0 => 'delete_source_items',
        1 => 'delete_reservations',
      ),
      2 => 'reload_attributes',
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product_save_catalogsearchFulltextProduct' => 
    array (
      4 => 
      array (
        0 => 'process_source_items_after_product_save',
        1 => 'process_reservations_after_product_save',
        2 => 'vertex_commodity_code_product_resource_model',
        3 => 'apply_catalog_rules_after_product_save',
      ),
      1 => 
      array (
        0 => 'reload_attributes',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product_delete_reload_attributes' => 
    array (
      1 => 
      array (
        0 => 'cleanups_wishlist_item_after_product_delete',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Action_updateAttributes___self' => 
    array (
      4 => 
      array (
        0 => 'quoteProductMassChange',
        1 => 'ReindexUpdatedProducts',
        2 => 'catalogsearchFulltextMassAction',
        3 => 'catalogPermissionsProductMassChange',
        4 => 'invalidate_pagecache_after_update_product_attributes',
        5 => 'price_plugin',
      ),
      1 => 
      array (
        0 => 'stagingMassAttributesUpdate',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Action_updateWebsites___self' => 
    array (
      4 => 
      array (
        0 => 'catalogsearchFulltextMassAction',
        1 => 'catalogPermissionsProductMassChange',
        2 => 'invalidate_pagecache_after_update_product_attributes',
      ),
      1 => 
      array (
        0 => 'admingws_product_action_plugin',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Attribute\\Backend\\Price_validate___self' => 
    array (
      2 => 'attributeValidation',
    ),
    'Magento\\Catalog\\Model\\Product\\Attribute\\Backend\\Price_validate_attributeValidation' => 
    array (
      2 => 'ConfigurableProduct::skipValidation',
    ),
    'Magento\\Catalog\\Model\\Product\\Attribute\\Backend\\Price_validate_ConfigurableProduct::skipValidation' => 
    array (
      1 => 
      array (
        0 => 'Price',
      ),
      2 => 'bundle',
    ),
    'Magento\\Catalog\\Model\\Product\\Attribute\\Backend\\Price_validate_bundle' => 
    array (
      2 => 'configurable',
    ),
    'Magento\\Sales\\Model\\Order\\Item_getQtyToCancel___self' => 
    array (
      4 => 
      array (
        0 => 'bundle',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Item_isProcessingAvailable___self' => 
    array (
      4 => 
      array (
        0 => 'bundle',
      ),
    ),
    'Magento\\Bundle\\Model\\Product\\Type_isSalable___self' => 
    array (
      2 => 'adapt_is_product_salable',
    ),
    'Magento\\BundleImportExport\\Model\\Import\\Product\\Type\\Bundle\\RelationsDataSaver_saveOptions___self' => 
    array (
      1 => 
      array (
        0 => 'sequence_application',
      ),
    ),
    'Magento\\BundleImportExport\\Model\\Import\\Product\\Type\\Bundle\\RelationsDataSaver_saveSelections___self' => 
    array (
      1 => 
      array (
        0 => 'sequence_application',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Attribute\\Repository_getCustomAttributesMetadata___self' => 
    array (
      4 => 
      array (
        0 => 'filterCustomAttribute',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Attribute\\Repository_save___self' => 
    array (
      1 => 
      array (
        0 => 'process_extension_attributes',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Attribute\\Repository_get___self' => 
    array (
      4 => 
      array (
        0 => 'process_extension_attributes',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\AbstractProduct_getImage___self' => 
    array (
      1 => 
      array (
        0 => 'add_product_object_to_image_data_array',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\View_getImage___self' => 
    array (
      1 => 
      array (
        0 => 'add_product_object_to_image_data_array',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\View_getQuantityValidators___self' => 
    array (
      4 => 
      array (
        0 => 'quantityValidators',
      ),
    ),
    'Magento\\Framework\\App\\Action\\AbstractAction_execute___self' => 
    array (
      1 => 
      array (
        0 => 'storeCheck',
        1 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Framework\\App\\Action\\AbstractAction_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\Framework\\App\\Action\\AbstractAction_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'log',
      ),
    ),
    'Magento\\Framework\\App\\Action\\Action_execute___self' => 
    array (
      1 => 
      array (
        0 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Framework\\App\\Action\\Action_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\Framework\\App\\Action\\Action_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'log',
      ),
    ),
    'Magento\\Backend\\App\\AbstractAction_execute___self' => 
    array (
      1 => 
      array (
        0 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Backend\\App\\AbstractAction_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'themeRegistrationFromFilesystem',
      ),
    ),
    'Magento\\Backend\\App\\AbstractAction_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'adminMassactionKey',
        1 => 'log',
      ),
      2 => 'adminAuthentication',
    ),
    'Magento\\Backend\\App\\AbstractAction_dispatch_adminAuthentication' => 
    array (
      1 => 
      array (
        0 => 'adminLoadDesign',
      ),
    ),
    'Magento\\Backend\\App\\Action_execute___self' => 
    array (
      1 => 
      array (
        0 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Backend\\App\\Action_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'themeRegistrationFromFilesystem',
      ),
    ),
    'Magento\\Backend\\App\\Action_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'adminMassactionKey',
        1 => 'log',
      ),
      2 => 'adminAuthentication',
    ),
    'Magento\\Backend\\App\\Action_dispatch_adminAuthentication' => 
    array (
      1 => 
      array (
        0 => 'adminLoadDesign',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute_execute___self' => 
    array (
      1 => 
      array (
        0 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'themeRegistrationFromFilesystem',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'adminMassactionKey',
        1 => 'log',
      ),
      2 => 'adminAuthentication',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute_dispatch_adminAuthentication' => 
    array (
      1 => 
      array (
        0 => 'adminLoadDesign',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute\\Save_execute___self' => 
    array (
      1 => 
      array (
        0 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute\\Save_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'themeRegistrationFromFilesystem',
      ),
      4 => 
      array (
        0 => 'inventoryUpdate',
        1 => 'Ddg_UpdateProductAttribute_MassActionPlugin',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute\\Save_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'adminMassactionKey',
        1 => 'log',
      ),
      2 => 'adminAuthentication',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute\\Save_dispatch_adminAuthentication' => 
    array (
      1 => 
      array (
        0 => 'adminLoadDesign',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Category_save___self' => 
    array (
      4 => 
      array (
        0 => 'clean_cache',
      ),
      2 => 'catalogsearchFulltextCategory',
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Category_delete___self' => 
    array (
      4 => 
      array (
        0 => 'clean_cache',
      ),
      2 => 'category_delete_plugin',
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Category_changeParent___self' => 
    array (
      4 => 
      array (
        0 => 'category_move_plugin',
      ),
      1 => 
      array (
        0 => 'admingws_category_resource_plugin',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Category_save_catalogsearchFulltextCategory' => 
    array (
      4 => 
      array (
        0 => 'update_url_path_for_different_stores',
        1 => 'deny_permission_category',
      ),
      1 => 
      array (
        0 => 'admin_gws_check_category_can_be_saved',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Category_delete_category_delete_plugin' => 
    array (
      4 => 
      array (
        0 => 'fulltext_search_indexer',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Category_isForbiddenToDelete___self' => 
    array (
      4 => 
      array (
        0 => 'catalogStaging',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Category_deleteChildren___self' => 
    array (
      2 => 'catalogStaging',
    ),
    'Magento\\Catalog\\Model\\Indexer\\Product\\Category\\Action\\Rows_execute___self' => 
    array (
      4 => 
      array (
        0 => 'catalogsearchFulltextCategoryAssignment',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Attribute_getStoreLabelsByAttributeId___self' => 
    array (
      2 => 'storeLabelCaching',
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Attribute_save___self' => 
    array (
      1 => 
      array (
        0 => 'catalogsearchFulltextIndexerAttribute',
      ),
      4 => 
      array (
        0 => 'catalogsearchFulltextIndexerAttribute',
      ),
      2 => 'catalogsearchAttributeSearchWeightCache',
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Attribute_delete___self' => 
    array (
      1 => 
      array (
        0 => 'catalogsearchFulltextIndexerAttribute',
      ),
      4 => 
      array (
        0 => 'catalogsearchFulltextIndexerAttribute',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Attribute_save_catalogsearchAttributeSearchWeightCache' => 
    array (
      1 => 
      array (
        0 => 'updateElasticsearchIndexerMapping',
      ),
      4 => 
      array (
        0 => 'updateElasticsearchIndexerMapping',
        1 => 'invalidate_pagecache_after_attribute_save',
      ),
    ),
    'Magento\\Framework\\Search\\Request\\Config\\FilesystemReader_read___self' => 
    array (
      4 => 
      array (
        0 => 'catalogSearchDynamicFields',
        1 => 'productAttributesDynamicFields',
      ),
    ),
    'Magento\\Catalog\\Model\\Layer\\Search\\CollectionFilter_filter___self' => 
    array (
      4 => 
      array (
        0 => 'searchQuery',
      ),
    ),
    'Magento\\CatalogSearch\\Model\\Indexer\\Fulltext\\Action\\DataProvider_prepareProductIndex___self' => 
    array (
      1 => 
      array (
        0 => 'stockedProductFilterByInventoryStockPlugin',
      ),
    ),
    'Magento\\CatalogSearch\\Model\\ResourceModel\\Advanced\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\CatalogSearch\\Model\\ResourceModel\\Advanced\\Collection_load___self' => 
    array (
      1 => 
      array (
        0 => 'joinProductsWhenFlatEnabled',
        1 => 'add_catalog_permissions_information',
      ),
    ),
    'Magento\\CatalogSearch\\Model\\ResourceModel\\Advanced\\Collection_joinAttribute___self' => 
    array (
      1 => 
      array (
        0 => 'joinAttribute',
      ),
    ),
    'Magento\\CatalogSearch\\Model\\ResourceModel\\Fulltext\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\CatalogSearch\\Model\\ResourceModel\\Fulltext\\Collection_load___self' => 
    array (
      1 => 
      array (
        0 => 'joinProductsWhenFlatEnabled',
        1 => 'add_catalog_permissions_information',
        2 => 'loadPreview',
      ),
    ),
    'Magento\\CatalogSearch\\Model\\ResourceModel\\Fulltext\\Collection_joinAttribute___self' => 
    array (
      1 => 
      array (
        0 => 'joinAttribute',
      ),
    ),
    'Magento\\CatalogSearch\\Model\\ResourceModel\\Fulltext\\Collection_getFacetedData___self' => 
    array (
      1 => 
      array (
        0 => 'add_catalog_permissions_information',
      ),
    ),
    'Magento\\CatalogSearch\\Model\\ResourceModel\\Fulltext\\Collection_getSelectCountSql___self' => 
    array (
      1 => 
      array (
        0 => 'add_catalog_permissions_information',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\View_execute___self' => 
    array (
      1 => 
      array (
        0 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Sales\\Controller\\AbstractController\\View_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\View_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'log',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\Creditmemo_execute___self' => 
    array (
      1 => 
      array (
        0 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Sales\\Controller\\AbstractController\\Creditmemo_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\Creditmemo_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'log',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Creditmemo_execute___self' => 
    array (
      1 => 
      array (
        0 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Sales\\Controller\\Order\\Creditmemo_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Creditmemo_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'authentication',
        1 => 'log',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\History_execute___self' => 
    array (
      1 => 
      array (
        0 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Sales\\Controller\\Order\\History_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\History_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'authentication',
        1 => 'log',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\Invoice_execute___self' => 
    array (
      1 => 
      array (
        0 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Sales\\Controller\\AbstractController\\Invoice_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\Invoice_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'log',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Invoice_execute___self' => 
    array (
      1 => 
      array (
        0 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Sales\\Controller\\Order\\Invoice_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Invoice_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'authentication',
        1 => 'log',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\PrintAction_execute___self' => 
    array (
      1 => 
      array (
        0 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Sales\\Controller\\AbstractController\\PrintAction_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\PrintAction_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'log',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintAction_execute___self' => 
    array (
      1 => 
      array (
        0 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Sales\\Controller\\Order\\PrintAction_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintAction_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'authentication',
        1 => 'log',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\PrintCreditmemo_execute___self' => 
    array (
      1 => 
      array (
        0 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Sales\\Controller\\AbstractController\\PrintCreditmemo_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\PrintCreditmemo_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'log',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintCreditmemo_execute___self' => 
    array (
      1 => 
      array (
        0 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Sales\\Controller\\Order\\PrintCreditmemo_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintCreditmemo_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'authentication',
        1 => 'log',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\PrintInvoice_execute___self' => 
    array (
      1 => 
      array (
        0 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Sales\\Controller\\AbstractController\\PrintInvoice_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\PrintInvoice_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'log',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintInvoice_execute___self' => 
    array (
      1 => 
      array (
        0 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Sales\\Controller\\Order\\PrintInvoice_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintInvoice_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'authentication',
        1 => 'log',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\PrintShipment_execute___self' => 
    array (
      1 => 
      array (
        0 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Sales\\Controller\\AbstractController\\PrintShipment_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\PrintShipment_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'log',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintShipment_execute___self' => 
    array (
      1 => 
      array (
        0 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Sales\\Controller\\Order\\PrintShipment_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\PrintShipment_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'authentication',
        1 => 'log',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\Reorder_execute___self' => 
    array (
      1 => 
      array (
        0 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Sales\\Controller\\AbstractController\\Reorder_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\Reorder_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'log',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Reorder_execute___self' => 
    array (
      1 => 
      array (
        0 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Sales\\Controller\\Order\\Reorder_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
      2 => 'redirect_blocked_company_user',
    ),
    'Magento\\Sales\\Controller\\Order\\Reorder_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'authentication',
        1 => 'log',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Reorder_execute_redirect_blocked_company_user' => 
    array (
      2 => 'replaceQuoteItems',
    ),
    'Magento\\Sales\\Controller\\AbstractController\\Shipment_execute___self' => 
    array (
      1 => 
      array (
        0 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Sales\\Controller\\AbstractController\\Shipment_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\AbstractController\\Shipment_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'log',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Shipment_execute___self' => 
    array (
      1 => 
      array (
        0 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Sales\\Controller\\Order\\Shipment_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\Shipment_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'authentication',
        1 => 'log',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\View_execute___self' => 
    array (
      1 => 
      array (
        0 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Sales\\Controller\\Order\\View_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\Sales\\Controller\\Order\\View_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'authentication',
        1 => 'log',
      ),
    ),
    'Magento\\Sales\\Model\\ResourceModel\\Order\\Shipment_save___self' => 
    array (
      4 => 
      array (
        0 => 'SaveSourceForShipment',
      ),
    ),
    'Magento\\Sales\\Model\\ResourceModel\\Order\\Shipment_load___self' => 
    array (
      4 => 
      array (
        0 => 'LoadSourceForShipment',
      ),
    ),
    'Magento\\Sales\\Model\\ResourceModel\\Order\\Shipment_delete___self' => 
    array (
      4 => 
      array (
        0 => 'DeleteSourceForShipment',
      ),
    ),
    'Magento\\Sales\\Model\\ResourceModel\\Order\\Creditmemo_save___self' => 
    array (
      1 => 
      array (
        0 => 'refundRewardPoints',
      ),
      4 => 
      array (
        0 => 'refundRewardPoints',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Payment\\Operations\\CaptureOperation_capture___self' => 
    array (
      2 => 'removeCaptureCommentsPlugin',
    ),
    'Magento\\Sales\\Model\\ResourceModel\\Order\\Handler\\Address_process___self' => 
    array (
      4 => 
      array (
        0 => 'addressUpdate',
      ),
    ),
    'Magento\\Framework\\View\\Asset\\MergeService_cleanMergedJsCss___self' => 
    array (
      4 => 
      array (
        0 => 'cleanMergedJsCss',
      ),
    ),
    'Magento\\Checkout\\Model\\Session_getQuoteId___self' => 
    array (
      4 => 
      array (
        0 => 'negotiableQuoteCheckoutSessionPlugin',
        1 => 'purchaseOrderCheckoutSessionPlugin',
      ),
    ),
    'Magento\\UrlRewrite\\Model\\StorageInterface_replace___self' => 
    array (
      4 => 
      array (
        0 => 'storage_plugin',
      ),
    ),
    'Magento\\UrlRewrite\\Model\\StorageInterface_deleteByData___self' => 
    array (
      1 => 
      array (
        0 => 'storage_plugin',
      ),
    ),
    'Magento\\UrlRewrite\\Model\\Storage\\AbstractStorage_replace___self' => 
    array (
      4 => 
      array (
        0 => 'storage_plugin',
      ),
    ),
    'Magento\\UrlRewrite\\Model\\Storage\\AbstractStorage_deleteByData___self' => 
    array (
      1 => 
      array (
        0 => 'storage_plugin',
      ),
    ),
    'Magento\\UrlRewrite\\Model\\Storage\\DbStorage_replace___self' => 
    array (
      4 => 
      array (
        0 => 'storage_plugin',
      ),
    ),
    'Magento\\UrlRewrite\\Model\\Storage\\DbStorage_deleteByData___self' => 
    array (
      1 => 
      array (
        0 => 'storage_plugin',
      ),
    ),
    'Magento\\CatalogUrlRewrite\\Model\\Storage\\DbStorage_replace___self' => 
    array (
      4 => 
      array (
        0 => 'storage_plugin',
      ),
    ),
    'Magento\\CatalogUrlRewrite\\Model\\Storage\\DbStorage_deleteByData___self' => 
    array (
      1 => 
      array (
        0 => 'storage_plugin',
      ),
    ),
    'Magento\\CatalogUrlRewrite\\Model\\Storage\\DbStorage_findOneByData___self' => 
    array (
      2 => 'dynamic_storage_plugin',
    ),
    'Magento\\CatalogUrlRewrite\\Model\\Storage\\DbStorage_findAllByData___self' => 
    array (
      2 => 'dynamic_storage_plugin',
    ),
    'Magento\\ImportExport\\Model\\Import_importSource___self' => 
    array (
      4 => 
      array (
        0 => 'catalogProductFlatIndexerImport',
        1 => 'invalidatePriceIndexerOnImport',
        2 => 'invalidateStockIndexerOnImport',
        3 => 'invalidateEavIndexerOnImport',
        4 => 'invalidateProductCategoryIndexerOnImport',
        5 => 'invalidateCategoryProductIndexerOnImport',
        6 => 'targetRuleImportInvalidate',
        7 => 'catalogPermissionImport',
        8 => 'reindex_after_import',
      ),
    ),
    'Magento\\CatalogImportExport\\Model\\Import\\Product_saveProductEntity___self' => 
    array (
      1 => 
      array (
        0 => 'staging-import-products',
      ),
    ),
    'Magento\\Framework\\View\\Model\\Layout\\Merge_getDbUpdateString___self' => 
    array (
      2 => 'widget-layout-update-plugin',
    ),
    'Magento\\Checkout\\Block\\Checkout\\LayoutProcessor_process___self' => 
    array (
      4 => 
      array (
        0 => 'ddg_sms_international_telephone_layout_processor_plugin',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\Address\\ToOrderAddress_convert___self' => 
    array (
      4 => 
      array (
        0 => 'convertQuoteAddressToOrderAddress',
        1 => 'gift_registry_quote_address_to_order_address',
      ),
    ),
    'Magento\\Customer\\Block\\Widget\\Name_getPrefixOptions___self' => 
    array (
      2 => 'formatPrefixSuffixOptions',
    ),
    'Magento\\Customer\\Block\\Widget\\Name_getSuffixOptions___self' => 
    array (
      2 => 'formatPrefixSuffixOptions',
    ),
    'Magento\\Customer\\Model\\Address_updateData___self' => 
    array (
      1 => 
      array (
        0 => 'updateDataCustomerAddress',
      ),
    ),
    'Magento\\CustomAttributeManagement\\Block\\Form_getAttributeHtml___self' => 
    array (
      1 => 
      array (
        0 => 'set_customer_custom_attribute_for_company',
      ),
    ),
    'Magento\\Checkout\\Api\\PaymentInformationManagementInterface_savePaymentInformation___self' => 
    array (
      1 => 
      array (
        0 => 'process_billing_custom_customer_attributes',
        1 => 'validate-agreements',
        2 => 'ProcessPaymentVaultInformationManagement',
      ),
    ),
    'Magento\\Checkout\\Api\\PaymentInformationManagementInterface_savePaymentInformationAndPlaceOrder___self' => 
    array (
      1 => 
      array (
        0 => 'validate-agreements',
        1 => 'disable-place-order',
      ),
    ),
    'Magento\\Checkout\\Api\\ShippingInformationManagementInterface_saveAddressInformation___self' => 
    array (
      1 => 
      array (
        0 => 'process_shipping_custom_customer_attributes',
        1 => 'gift_registry_save_address',
        2 => 'amazon_payment_shipping_information_management',
      ),
    ),
    'Magento\\Checkout\\Api\\GuestPaymentInformationManagementInterface_savePaymentInformation___self' => 
    array (
      1 => 
      array (
        0 => 'process_billing_custom_guest_attributes',
      ),
    ),
    'Magento\\Checkout\\Api\\GuestPaymentInformationManagementInterface_savePaymentInformationAndPlaceOrder___self' => 
    array (
      1 => 
      array (
        0 => 'validate-guest-agreements',
        1 => 'disable-guest-place-order',
      ),
      4 => 
      array (
        0 => 'guest_payment_no_commit_after_event_workaround',
      ),
    ),
    'Magento\\Checkout\\Api\\GuestShippingInformationManagementInterface_saveAddressInformation___self' => 
    array (
      1 => 
      array (
        0 => 'process_shipping_custom_guest_attributes',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\Quote\\Item\\QuantityValidator\\Initializer\\Option_getStockItem___self' => 
    array (
      4 => 
      array (
        0 => 'configurable_product',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\CartConfiguration_isProductConfigured___self' => 
    array (
      2 => 'GiftCard',
    ),
    'Magento\\Catalog\\Model\\Product\\CartConfiguration_isProductConfigured_GiftCard' => 
    array (
      2 => 'Downloadable',
    ),
    'Magento\\Catalog\\Model\\Product\\CartConfiguration_isProductConfigured_Downloadable' => 
    array (
      2 => 'isProductConfigured',
    ),
    'Magento\\Catalog\\Model\\Product\\CartConfiguration_isProductConfigured_isProductConfigured' => 
    array (
      2 => 'configurable_product',
    ),
    'Magento\\Sales\\Model\\Order\\Admin\\Item_getSku___self' => 
    array (
      2 => 'configurable_product',
    ),
    'Magento\\Sales\\Model\\Order\\Admin\\Item_getName___self' => 
    array (
      2 => 'configurable_product',
    ),
    'Magento\\Sales\\Model\\Order\\Admin\\Item_getProductId___self' => 
    array (
      2 => 'configurable_product',
    ),
    'Magento\\Catalog\\Helper\\Product\\Configuration_getOptions___self' => 
    array (
      2 => 'grouped_options',
    ),
    'Magento\\Catalog\\Helper\\Product\\Configuration_getOptions_grouped_options' => 
    array (
      2 => 'configurable_product',
    ),
    'Magento\\Catalog\\Model\\Entity\\Product\\Attribute\\Group\\AttributeMapperInterface_map___self' => 
    array (
      2 => 'configurable_product',
    ),
    'Magento\\Catalog\\Api\\ProductRepositoryInterface_delete___self' => 
    array (
      2 => 'AdminProductRepositoryPlugin',
    ),
    'Magento\\Catalog\\Api\\ProductRepositoryInterface_delete_AdminProductRepositoryPlugin' => 
    array (
      4 => 
      array (
        0 => 'vertex_commodity_code_product_repository',
      ),
    ),
    'Magento\\Catalog\\Api\\ProductRepositoryInterface_get___self' => 
    array (
      4 => 
      array (
        0 => 'vertex_commodity_code_product_repository',
      ),
    ),
    'Magento\\Catalog\\Api\\ProductRepositoryInterface_getById___self' => 
    array (
      4 => 
      array (
        0 => 'vertex_commodity_code_product_repository',
      ),
    ),
    'Magento\\Catalog\\Api\\ProductRepositoryInterface_getList___self' => 
    array (
      4 => 
      array (
        0 => 'vertex_commodity_code_product_repository',
      ),
    ),
    'Magento\\Catalog\\Api\\ProductRepositoryInterface_save___self' => 
    array (
      4 => 
      array (
        0 => 'vertex_commodity_code_product_repository',
        1 => 'configurableProductSaveOptions',
      ),
      1 => 
      array (
        0 => 'configurableProductSaveOptions',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Type_getOptionArray___self' => 
    array (
      4 => 
      array (
        0 => 'configurable_output',
        1 => 'grouped_output',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\View\\AbstractView_getImage___self' => 
    array (
      1 => 
      array (
        0 => 'add_product_object_to_image_data_array',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\View\\Gallery_getImage___self' => 
    array (
      1 => 
      array (
        0 => 'add_product_object_to_image_data_array',
      ),
    ),
    'Magento\\ProductVideo\\Block\\Product\\View\\Gallery_getImage___self' => 
    array (
      1 => 
      array (
        0 => 'add_product_object_to_image_data_array',
      ),
    ),
    'Magento\\ProductVideo\\Block\\Product\\View\\Gallery_getOptionsMediaGalleryDataJson___self' => 
    array (
      4 => 
      array (
        0 => 'product_video_gallery',
      ),
    ),
    'Magento\\ConfigurableProduct\\Model\\Product\\Type\\Configurable_getUsedProductCollection___self' => 
    array (
      4 => 
      array (
        0 => 'add_swatch_attributes_to_configurable',
      ),
    ),
    'Magento\\ConfigurableProduct\\Model\\Product\\Type\\Configurable_getUsedProducts___self' => 
    array (
      4 => 
      array (
        0 => 'productCollectionPlugin',
      ),
    ),
    'Magento\\ConfigurableProduct\\Model\\Product\\Type\\Configurable_getParentIdsByChild___self' => 
    array (
      4 => 
      array (
        0 => 'productCollectionPlugin',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Pricing\\Renderer\\SalableResolver_isSalable___self' => 
    array (
      4 => 
      array (
        0 => 'configurable',
      ),
    ),
    'Magento\\SalesRule\\Model\\Rule\\Condition\\Product_validate___self' => 
    array (
      1 => 
      array (
        0 => 'apply_rule_on_configurable_children',
      ),
    ),
    'Magento\\Tax\\Model\\Sales\\Total\\Quote\\CommonTaxCollector_mapItem___self' => 
    array (
      4 => 
      array (
        0 => 'apply_tax_class_id',
      ),
      2 => 'vertexItemLevelMap',
    ),
    'Magento\\Tax\\Model\\Sales\\Total\\Quote\\CommonTaxCollector_mapItems___self' => 
    array (
      4 => 
      array (
        0 => 'vertexItemLevelMap',
      ),
    ),
    'Magento\\Tax\\Model\\Sales\\Total\\Quote\\CommonTaxCollector_getShippingDataObject___self' => 
    array (
      2 => 'vertexItemLevelMap',
    ),
    'Magento\\Tax\\Model\\Sales\\Total\\Quote\\CommonTaxCollector_mapAddress___self' => 
    array (
      2 => 'vertexItemLevelMap',
    ),
    'Magento\\Tax\\Model\\Sales\\Total\\Quote\\CommonTaxCollector_mapItemExtraTaxables___self' => 
    array (
      2 => 'vertexItemLevelMap',
    ),
    'Magento\\Rule\\Model\\ResourceModel\\Rule\\Collection\\AbstractCollection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Rule\\Model\\ResourceModel\\Rule\\Collection\\AbstractCollection_loadWithFilter___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\Rule\\Model\\ResourceModel\\Rule\\Collection\\AbstractCollection_getSelectCountSql___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\SalesRule\\Model\\ResourceModel\\Rule\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\SalesRule\\Model\\ResourceModel\\Rule\\Collection_loadWithFilter___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\SalesRule\\Model\\ResourceModel\\Rule\\Collection_getSelectCountSql___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\SalesRule\\Model\\ResourceModel\\Rule\\Collection_setValidationFilter___self' => 
    array (
      1 => 
      array (
        0 => 'beforeSetValidationFilter',
      ),
      2 => 'aroundSetValidationFilter',
    ),
    'Magento\\Quote\\Model\\Quote\\Config_getProductAttributes___self' => 
    array (
      4 => 
      array (
        0 => 'append_sales_rule_keys_to_quote',
      ),
    ),
    'Magento\\Quote\\Api\\CartTotalRepositoryInterface_get___self' => 
    array (
      4 => 
      array (
        0 => 'negotiableQuoteTotals',
      ),
    ),
    'Magento\\Quote\\Model\\Cart\\CartTotalRepository_get___self' => 
    array (
      4 => 
      array (
        0 => 'negotiableQuoteTotals',
        1 => 'coupon_label_plugin',
        2 => 'multishipping_shipping_addresses',
        3 => 'rewardTotal',
      ),
    ),
    'Magento\\Sales\\Api\\OrderManagementInterface_place___self' => 
    array (
      1 => 
      array (
        0 => 'orderManagementCompany',
      ),
      4 => 
      array (
        0 => 'orderManagementCompany',
      ),
      2 => 'inventory_reservations_placement',
    ),
    'Magento\\Sales\\Model\\Service\\OrderService_place___self' => 
    array (
      1 => 
      array (
        0 => 'orderManagementCompany',
      ),
      4 => 
      array (
        0 => 'orderManagementCompany',
      ),
      2 => 'inventory_reservations_placement',
    ),
    'Magento\\Sales\\Model\\Service\\OrderService_cancel___self' => 
    array (
      4 => 
      array (
        0 => 'coupon_uses_decrement_plugin',
      ),
    ),
    'Magento\\Quote\\Model\\QuoteManagement_submit___self' => 
    array (
      1 => 
      array (
        0 => 'validate_purchase_order_number',
        1 => 'coupon_uses_increment_plugin',
      ),
      4 => 
      array (
        0 => 'purchaseOrderCartManagementPlugin',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\Address\\ToOrder_convert___self' => 
    array (
      1 => 
      array (
        0 => 'add_tax_to_order',
        1 => 'set_pickup_location_to_order_during_address_conversion',
      ),
      4 => 
      array (
        0 => 'add_tax_to_order',
      ),
    ),
    'Magento\\Quote\\Model\\Cart\\TotalsConverter_process___self' => 
    array (
      4 => 
      array (
        0 => 'add_tax_details',
        1 => 'giftCardAmountTotal',
        2 => 'gift_wrapping_total',
      ),
      2 => 'vertex_calculation_message',
    ),
    'Magento\\Sales\\Api\\OrderRepositoryInterface_save___self' => 
    array (
      4 => 
      array (
        0 => 'save_order_tax',
        1 => 'save_gift_message',
        2 => 'save_pickup_location_for_order',
        3 => 'vertex_commodity_code_order_item_order_save',
        4 => 'addVertexCustomerCountryToOrderAddress',
      ),
    ),
    'Magento\\Sales\\Api\\OrderRepositoryInterface_get___self' => 
    array (
      4 => 
      array (
        0 => 'orderRepositoryCompany',
        1 => 'get_customer_balance',
        2 => 'gift_card_account',
        3 => 'get_gift_message',
        4 => 'get_order_gift_wrapping',
        5 => 'get_order_item_gift_wrapping',
        6 => 'get_pickup_location_for_order',
        7 => 'rewardCreditmemoUpdater',
        8 => 'get_vertex_order_item_attributes',
      ),
    ),
    'Magento\\Sales\\Api\\OrderRepositoryInterface_getList___self' => 
    array (
      4 => 
      array (
        0 => 'get_customer_balance',
        1 => 'gift_card_account',
        2 => 'get_gift_message',
        3 => 'get_order_gift_wrapping',
        4 => 'get_order_item_gift_wrapping',
        5 => 'rewardCreditmemoUpdater',
        6 => 'get_vertex_order_item_attributes',
      ),
    ),
    'Magento\\Catalog\\Ui\\DataProvider\\Product\\Listing\\DataProvider_getData___self' => 
    array (
      4 => 
      array (
        0 => 'taxSettingsProvider',
        1 => 'wishlistSettingsDataProvider',
        2 => 'weeeSettingsProvider',
      ),
    ),
    'Magento\\Wishlist\\Block\\Catalog\\Product\\View\\AddTo\\Wishlist_getImage___self' => 
    array (
      1 => 
      array (
        0 => 'add_product_object_to_image_data_array',
      ),
    ),
    'Magento\\Wishlist\\Block\\Catalog\\Product\\View\\AddTo\\Wishlist_getQuantityValidators___self' => 
    array (
      4 => 
      array (
        0 => 'quantityValidators',
      ),
    ),
    'Magento\\Wishlist\\Block\\Catalog\\Product\\View\\AddTo\\Wishlist_getWishlistOptions___self' => 
    array (
      4 => 
      array (
        0 => 'getWishlistOptions',
      ),
    ),
    'Magento\\Wishlist\\Block\\Item\\Configure_getWishlistOptions___self' => 
    array (
      4 => 
      array (
        0 => 'getWishlistOptions',
      ),
    ),
    'Magento\\GiftRegistry\\Helper\\Data_canAddToGiftRegistry___self' => 
    array (
      4 => 
      array (
        0 => 'getWishlistOptions',
      ),
    ),
    'Magento\\Webapi\\Controller\\Rest_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'staging_preview_permissions_check',
        1 => 'default_store_setter',
        2 => 'beforeRestDispatch',
        3 => 'webapiContorllerRestAsync',
        4 => 'configHash',
      ),
    ),
    'Magento\\PageCache\\Model\\Config_isEnabled___self' => 
    array (
      4 => 
      array (
        0 => 'staging_pagecache_bypass',
      ),
    ),
    'Magento\\Store\\Model\\BaseUrlChecker_isEnabled___self' => 
    array (
      4 => 
      array (
        0 => 'staging_store_baseurl_check_bypass',
      ),
    ),
    'Magento\\Store\\Controller\\Store\\SwitchAction_execute___self' => 
    array (
      1 => 
      array (
        0 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Store\\Controller\\Store\\SwitchAction_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
      2 => 'staging_preview_store_switch_fixing',
    ),
    'Magento\\Store\\Controller\\Store\\SwitchAction_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'log',
      ),
    ),
    'Magento\\Customer\\Controller\\Ajax\\Login_execute___self' => 
    array (
      1 => 
      array (
        0 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Customer\\Controller\\Ajax\\Login_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
      2 => 'captcha_validation',
    ),
    'Magento\\Customer\\Controller\\Ajax\\Login_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'log',
      ),
    ),
    'Magento\\Checkout\\Block\\Cart\\Sidebar_getConfig___self' => 
    array (
      4 => 
      array (
        0 => 'login_captcha',
      ),
    ),
    'Magento\\Framework\\App\\PageCache\\Identifier_getValue___self' => 
    array (
      4 => 
      array (
        0 => 'core-app-area-design-exception-plugin',
      ),
    ),
    'Magento\\Framework\\App\\PageCache\\Cache_save___self' => 
    array (
      1 => 
      array (
        0 => 'fpc-type-plugin',
      ),
    ),
    'Magento\\Framework\\App\\PageCache\\Cache_load___self' => 
    array (
      4 => 
      array (
        0 => 'fpc-type-plugin',
      ),
    ),
    'Magento\\Wishlist\\Controller\\AbstractIndex_execute___self' => 
    array (
      1 => 
      array (
        0 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Wishlist\\Controller\\AbstractIndex_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\Wishlist\\Controller\\AbstractIndex_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'authentication',
        1 => 'log',
      ),
    ),
    'Magento\\Framework\\Model\\ResourceModel\\Db\\ObjectRelationProcessor_delete___self' => 
    array (
      1 => 
      array (
        0 => 'object_constraints_resolver',
      ),
    ),
    'Magento\\Framework\\Model\\ResourceModel\\Db\\ObjectRelationProcessor_validateDataIntegrity___self' => 
    array (
      1 => 
      array (
        0 => 'object_constraints_resolver',
      ),
    ),
    'Magento\\Company\\Model\\Company\\Structure_getAllowedIds___self' => 
    array (
      4 => 
      array (
        0 => 'companyStructurePlugin',
      ),
    ),
    'Magento\\Company\\Model\\Company\\Structure_getAllowedChildrenIds___self' => 
    array (
      4 => 
      array (
        0 => 'companyStructurePlugin',
      ),
    ),
    'Magento\\Wishlist\\Block\\AbstractBlock_getImage___self' => 
    array (
      1 => 
      array (
        0 => 'add_product_object_to_image_data_array',
      ),
    ),
    'Magento\\Wishlist\\Block\\Customer\\Sidebar_getImage___self' => 
    array (
      1 => 
      array (
        0 => 'add_product_object_to_image_data_array',
      ),
    ),
    'Magento\\Wishlist\\Block\\Customer\\Sidebar_toHtml___self' => 
    array (
      2 => 'is_visible_wishlist_sidebar',
    ),
    'Magento\\Sales\\Block\\Reorder\\Sidebar_toHtml___self' => 
    array (
      2 => 'is_visible_reorder_sidebar',
    ),
    'Magento\\MediaGallerySynchronizationApi\\Model\\ImportFilesComposite_execute___self' => 
    array (
      1 => 
      array (
        0 => 'createMediaGalleryThumbnails',
      ),
    ),
    'Magento\\Cms\\Model\\ResourceModel\\Page_save___self' => 
    array (
      1 => 
      array (
        0 => 'cms_url_rewrite_plugin',
      ),
    ),
    'Magento\\Cms\\Model\\ResourceModel\\Page_delete___self' => 
    array (
      4 => 
      array (
        0 => 'cms_url_rewrite_plugin',
      ),
    ),
    'Magento\\Integration\\Api\\IntegrationServiceInterface_create___self' => 
    array (
      4 => 
      array (
        0 => 'webapiIntegrationService',
      ),
    ),
    'Magento\\Integration\\Api\\IntegrationServiceInterface_update___self' => 
    array (
      4 => 
      array (
        0 => 'webapiIntegrationService',
      ),
    ),
    'Magento\\Integration\\Api\\IntegrationServiceInterface_get___self' => 
    array (
      4 => 
      array (
        0 => 'webapiIntegrationService',
      ),
    ),
    'Magento\\Integration\\Api\\IntegrationServiceInterface_delete___self' => 
    array (
      4 => 
      array (
        0 => 'webapiIntegrationService',
      ),
    ),
    'Magento\\User\\Model\\User_save___self' => 
    array (
      4 => 
      array (
        0 => 'revokeTokensFromInactiveAdmins',
      ),
      2 => 'aroundAdminUserSave',
    ),
    'Magento\\User\\Model\\User_delete___self' => 
    array (
      1 => 
      array (
        0 => 'aroundAdminUserSave',
      ),
    ),
    'Magento\\Customer\\Model\\Customer_save___self' => 
    array (
      4 => 
      array (
        0 => 'revokeTokensFromInactiveCustomers',
      ),
    ),
    'Magento\\Customer\\Model\\Customer_beforeSave___self' => 
    array (
      1 => 
      array (
        0 => 'reward_notification',
      ),
    ),
    'Magento\\Customer\\Model\\Customer_sendNewAccountEmail___self' => 
    array (
      2 => 'ddg_customer_sendNewAccountEmail_disabler',
    ),
    'Magento\\Company\\Api\\CompanyRepositoryInterface_get___self' => 
    array (
      4 => 
      array (
        0 => 'companyRepositoryPlugin',
        1 => 'companyShippingCompanyRepositoryPlugin',
      ),
    ),
    'Magento\\Company\\Api\\CompanyRepositoryInterface_save___self' => 
    array (
      4 => 
      array (
        0 => 'companyRepositoryPlugin',
      ),
      2 => 'quoteCompanyrepositoryPlugin',
    ),
    'Magento\\Company\\Api\\CompanyRepositoryInterface_delete___self' => 
    array (
      1 => 
      array (
        0 => 'quoteCompanyrepositoryPlugin',
      ),
    ),
    'Magento\\Company\\Api\\CompanyRepositoryInterface_save_quoteCompanyrepositoryPlugin' => 
    array (
      4 => 
      array (
        0 => 'purchase_order_company_repository',
        1 => 'companyShippingCompanyRepositoryPlugin',
      ),
    ),
    'Magento\\Company\\Model\\Company\\DataProvider_getSettingsData___self' => 
    array (
      2 => 'companyDataProviderPlugin',
    ),
    'Magento\\Company\\Model\\Company\\DataProvider_getSettingsData_companyDataProviderPlugin' => 
    array (
      2 => 'aroundGetSettingsData',
    ),
    'Magento\\Company\\Model\\Company\\DataProvider_getSettingsData_aroundGetSettingsData' => 
    array (
      2 => 'purchase_order_company_data_provider',
    ),
    'Magento\\Company\\Model\\Company\\DataProvider_getCompanyResultData___self' => 
    array (
      4 => 
      array (
        0 => 'afterGetCompanyResultData',
      ),
    ),
    'Magento\\Company\\Model\\Company\\DataProvider_getSettingsData_purchase_order_company_data_provider' => 
    array (
      2 => 'companyShippingDataProviderPlugin',
    ),
    'Magento\\Quote\\Api\\PaymentMethodManagementInterface_getList___self' => 
    array (
      2 => 'paymentMethodManagementPlugin',
    ),
    'Magento\\Quote\\Api\\PaymentMethodManagementInterface_getList_paymentMethodManagementPlugin' => 
    array (
      2 => 'paymentMethodManagementPermissionPlugin',
    ),
    'Magento\\Company\\Model\\Customer\\Company_createCompany___self' => 
    array (
      4 => 
      array (
        0 => 'companyPlugin',
        1 => 'afterCreateCompany',
      ),
    ),
    'Magento\\Config\\Model\\Config\\Backend\\Baseurl_save___self' => 
    array (
      4 => 
      array (
        0 => 'admin_system_config_media_gallery_renditions',
        1 => 'admin_system_config_adobe_stock_save_plugin',
      ),
    ),
    'Magento\\Config\\Model\\Config\\Backend\\Baseurl_afterSave___self' => 
    array (
      4 => 
      array (
        0 => 'webapiResourceSecurityCacheInvalidate',
        1 => 'updateAnalyticsSubscription',
      ),
    ),
    'Magento\\Quote\\Model\\QuoteRepository\\LoadHandler_load___self' => 
    array (
      1 => 
      array (
        0 => 'load_handler',
      ),
      4 => 
      array (
        0 => 'shipping_method',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\ShippingAssignment\\ShippingAssignmentPersister_save___self' => 
    array (
      2 => 'shipping_assignment_persister',
    ),
    'Magento\\Quote\\Model\\Quote_assignCustomer___self' => 
    array (
      2 => 'negotiableQuoteAroundPlugin',
    ),
    'Magento\\Quote\\Model\\Quote_collectTotals___self' => 
    array (
      2 => 'negotiableQuoteAroundPlugin',
    ),
    'Magento\\Quote\\Model\\Quote_removeItem___self' => 
    array (
      4 => 
      array (
        0 => 'remove_store_credit_after_product_delete',
      ),
    ),
    'Magento\\Quote\\Model\\Quote_collectTotals_negotiableQuoteAroundPlugin' => 
    array (
      2 => 'purchaseOrderQuoteAroundPlugin',
    ),
    'Magento\\Quote\\Model\\Quote_beforeSave___self' => 
    array (
      2 => 'currencyNegotiableQuoteAdminhtmlPlugin',
    ),
    'Magento\\Quote\\Model\\Quote_getStore___self' => 
    array (
      4 => 
      array (
        0 => 'currencyNegotiableQuoteAdminhtmlPlugin',
      ),
    ),
    'Magento\\Checkout\\Model\\DefaultConfigProvider_getCheckoutUrl___self' => 
    array (
      4 => 
      array (
        0 => 'negotiable_quote_default_config_provider',
      ),
    ),
    'Magento\\Checkout\\Model\\DefaultConfigProvider_getDefaultSuccessPageUrl___self' => 
    array (
      4 => 
      array (
        0 => 'negotiable_quote_default_config_provider',
      ),
    ),
    'Magento\\Checkout\\Model\\DefaultConfigProvider_getConfig___self' => 
    array (
      4 => 
      array (
        0 => 'TribugsCompanyAddressModelDefaultConfigProvider',
      ),
    ),
    'Magento\\Company\\Model\\Company_load___self' => 
    array (
      4 => 
      array (
        0 => 'companyAfterLoad',
      ),
    ),
    'Magento\\Quote\\Model\\Cart\\Totals\\ItemConverter_modelToDataObject___self' => 
    array (
      1 => 
      array (
        0 => 'beforeModelToDataObject',
      ),
    ),
    'Magento\\Customer\\Controller\\Address_execute___self' => 
    array (
      1 => 
      array (
        0 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Customer\\Controller\\Address_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\Customer\\Controller\\Address_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'log',
      ),
    ),
    'Magento\\Customer\\Controller\\Address\\FormPost_execute___self' => 
    array (
      1 => 
      array (
        0 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Customer\\Controller\\Address\\FormPost_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
      4 => 
      array (
        0 => 'redirectToQuote',
      ),
    ),
    'Magento\\Customer\\Controller\\Address\\FormPost_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'log',
      ),
    ),
    'Magento\\Customer\\Api\\AddressRepositoryInterface_save___self' => 
    array (
      4 => 
      array (
        0 => 'saveQuoteAddress',
      ),
    ),
    'Magento\\Customer\\Block\\Address\\Edit_getSaveUrl___self' => 
    array (
      4 => 
      array (
        0 => 'getSaveUrl',
      ),
    ),
    'Magento\\Sales\\Model\\Order_canInvoice___self' => 
    array (
      4 => 
      array (
        0 => 'express_order_invoice',
      ),
    ),
    'Magento\\Sales\\Model\\Order_canCreditmemo___self' => 
    array (
      4 => 
      array (
        0 => 'can_creditmemo_with_store_credit',
      ),
    ),
    'Magento\\Sales\\Model\\Order_addStatusHistoryComment___self' => 
    array (
      2 => 'paymentPlugin',
    ),
    'Magento\\Sales\\Model\\Order_place___self' => 
    array (
      4 => 
      array (
        0 => 'admin-order-placement-comment',
      ),
      2 => 'forceNegotiableQuoteRules',
    ),
    'Magento\\NegotiableQuote\\Model\\NegotiableQuoteRepository_save___self' => 
    array (
      4 => 
      array (
        0 => 'ddg_b2b_store_negotiable_quote_repository_plugin',
      ),
    ),
    'Magento\\Quote\\Model\\Product\\QuoteItemsCleaner_execute___self' => 
    array (
      2 => 'itemRemoveFromNegotiableQuotes',
    ),
    'Magento\\ScalableCheckout\\Model\\ResourceModel\\Quote\\Item\\Consumer_processMessage___self' => 
    array (
      2 => 'itemRemoveConsumerFromNegotiableQuotes',
    ),
    'Magento\\Company\\Controller\\Adminhtml\\Index\\Save_execute___self' => 
    array (
      1 => 
      array (
        0 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Company\\Controller\\Adminhtml\\Index\\Save_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'themeRegistrationFromFilesystem',
      ),
    ),
    'Magento\\Company\\Controller\\Adminhtml\\Index\\Save_setCompanyRequestData___self' => 
    array (
      4 => 
      array (
        0 => 'negotiableQuoteSaveCompany',
      ),
    ),
    'Magento\\Company\\Controller\\Adminhtml\\Index\\Save_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'adminMassactionKey',
        1 => 'log',
      ),
      2 => 'adminAuthentication',
    ),
    'Magento\\Company\\Controller\\Adminhtml\\Index\\Save_dispatch_adminAuthentication' => 
    array (
      1 => 
      array (
        0 => 'adminLoadDesign',
      ),
    ),
    'Magento\\Checkout\\Controller\\Action_execute___self' => 
    array (
      1 => 
      array (
        0 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Checkout\\Controller\\Action_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\Checkout\\Controller\\Action_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'log',
      ),
    ),
    'Magento\\Checkout\\Controller\\Onepage_execute___self' => 
    array (
      1 => 
      array (
        0 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Checkout\\Controller\\Onepage_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\Checkout\\Controller\\Onepage_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'log',
      ),
    ),
    'Magento\\Checkout\\Controller\\Index\\Index_execute___self' => 
    array (
      1 => 
      array (
        0 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Checkout\\Controller\\Index\\Index_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
      2 => 'redirectNotSubmittedQuote',
    ),
    'Magento\\Checkout\\Controller\\Index\\Index_execute_redirectNotSubmittedQuote' => 
    array (
      2 => 'redirectPurchaserOrderCheckout',
    ),
    'Magento\\Checkout\\Controller\\Index\\Index_execute_redirectPurchaserOrderCheckout' => 
    array (
      4 => 
      array (
        0 => 'amazon_login_checkout_controller',
      ),
    ),
    'Magento\\Checkout\\Controller\\Index\\Index_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'log',
      ),
    ),
    'Magento\\Quote\\Model\\QuoteAddressValidator_validate___self' => 
    array (
      2 => 'quoteAddressValidatorPlugin',
    ),
    'Magento\\Sales\\Model\\ResourceModel\\Collection\\ExpiredQuotesCollection_getExpiredQuotes___self' => 
    array (
      4 => 
      array (
        0 => 'filterOutNegotiableQuotes',
        1 => 'cleanExpiredQuotesPlugin',
      ),
    ),
    'Magento\\Catalog\\Api\\Data\\CategoryInterface_save___self' => 
    array (
      1 => 
      array (
        0 => 'categoryPlugin',
      ),
      4 => 
      array (
        0 => 'categoryPlugin',
      ),
    ),
    'Magento\\Catalog\\Model\\Category_save___self' => 
    array (
      4 => 
      array (
        0 => 'categoryChange',
        1 => 'targetRuleCategoryInvalidate',
        2 => 'apply_after_products_assign',
        3 => 'categoryPlugin',
      ),
      1 => 
      array (
        0 => 'categoryPlugin',
      ),
    ),
    'Magento\\Catalog\\Model\\Category_move___self' => 
    array (
      2 => 'categoryChange',
    ),
    'Magento\\Catalog\\Model\\Category_delete___self' => 
    array (
      4 => 
      array (
        0 => 'targetRuleCategoryInvalidate',
        1 => 'apply_after_products_assign',
      ),
    ),
    'Magento\\Catalog\\Model\\Category_getCustomDesignDate___self' => 
    array (
      4 => 
      array (
        0 => 'catalogStagingCategoryPlugin',
      ),
    ),
    'Magento\\CustomerSegment\\Model\\Segment_delete___self' => 
    array (
      4 => 
      array (
        0 => 'targetRuleCustomerSegmentInvalidate',
      ),
    ),
    'Magento\\CustomerSegment\\Model\\Segment_save___self' => 
    array (
      4 => 
      array (
        0 => 'targetRuleCustomerSegmentInvalidate',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Initialization\\Helper\\ProductLinks_initializeLinks___self' => 
    array (
      1 => 
      array (
        0 => 'GroupedProduct',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\Link_saveProductLinks___self' => 
    array (
      4 => 
      array (
        0 => 'groupedProductLinkProcessor',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\Link_deleteProductLink___self' => 
    array (
      2 => 'groupedProductLinkProcessor',
    ),
    'Magento\\Catalog\\Model\\Layer\\FilterList_getFilters___self' => 
    array (
      4 => 
      array (
        0 => 'catalogPermissionsFilterListRemovePrice',
      ),
    ),
    'Magento\\Config\\Model\\Config_save___self' => 
    array (
      4 => 
      array (
        0 => 'configPermissionChange',
      ),
      2 => 'enableAdvancedCheckoutPlugin',
    ),
    'Magento\\Config\\Model\\Config_save_enableAdvancedCheckoutPlugin' => 
    array (
      2 => 'baseCurrencyChangeNotification',
    ),
    'Magento\\Framework\\Pricing\\Render\\PriceBox_getCacheKey___self' => 
    array (
      4 => 
      array (
        0 => 'can_show_price_plugin',
        1 => 'price_box_staging_plugin',
      ),
    ),
    'Magento\\Config\\Model\\Config\\Structure\\Converter_convert___self' => 
    array (
      4 => 
      array (
        0 => 'cron_backend_config_structure_converter_plugin',
      ),
    ),
    'Magento\\Framework\\App\\RouterInterface_match___self' => 
    array (
      4 => 
      array (
        0 => 'csp_aware_plugin',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\TotalsCollector_collect___self' => 
    array (
      1 => 
      array (
        0 => 'quoteCustomerSegmentUpdater',
        1 => 'quoteGiftCardAmountUpdater',
        2 => 'quoteRewardAmountUpdater',
      ),
      4 => 
      array (
        0 => 'in-store-pickup-set-shipping-description',
      ),
    ),
    'Magento\\Quote\\Model\\Quote\\TotalsCollector_collectQuoteTotals___self' => 
    array (
      1 => 
      array (
        0 => 'quoteGiftCardAmountUpdater',
      ),
    ),
    'Magento\\Sales\\Api\\InvoiceRepositoryInterface_get___self' => 
    array (
      4 => 
      array (
        0 => 'get_customer_balance',
        1 => 'gift_card_account',
        2 => 'get_invoice_gift_wrapping',
        3 => 'get_vertex_invoice_item_attributes',
      ),
    ),
    'Magento\\Sales\\Api\\InvoiceRepositoryInterface_getList___self' => 
    array (
      4 => 
      array (
        0 => 'get_customer_balance',
        1 => 'gift_card_account',
        2 => 'get_invoice_gift_wrapping',
      ),
    ),
    'Magento\\Sales\\Api\\InvoiceRepositoryInterface_save___self' => 
    array (
      1 => 
      array (
        0 => 'get_customer_balance',
        1 => 'gift_card_account',
      ),
    ),
    'Magento\\Sales\\Api\\CreditmemoRepositoryInterface_get___self' => 
    array (
      4 => 
      array (
        0 => 'get_customer_balance',
        1 => 'gift_card_account',
        2 => 'get_credit_memo_gift_wrapping',
        3 => 'get_vertex_creditmemo_item_attributes',
      ),
    ),
    'Magento\\Sales\\Api\\CreditmemoRepositoryInterface_getList___self' => 
    array (
      4 => 
      array (
        0 => 'get_customer_balance',
        1 => 'gift_card_account',
        2 => 'get_credit_memo_gift_wrapping',
        3 => 'get_vertex_creditmemo_item_attributes',
      ),
    ),
    'Magento\\Sales\\Api\\CreditmemoRepositoryInterface_save___self' => 
    array (
      4 => 
      array (
        0 => 'gift_card_account',
      ),
    ),
    'Magento\\SalesSampleData\\Model\\Order\\Processor_getCreditmemoData___self' => 
    array (
      2 => 'customer_balance',
    ),
    'Magento\\Framework\\Mail\\TransportInterface_sendMessage___self' => 
    array (
      2 => 'customer-sample-data-disable-registration-email-send',
    ),
    'Magento\\Framework\\Mail\\TransportInterface_sendMessage_customer-sample-data-disable-registration-email-send' => 
    array (
      1 => 
      array (
        0 => 'WindowsSmtpConfig',
      ),
      2 => 'EmailDisable',
    ),
    'Magento\\Framework\\Mail\\TransportInterface_sendMessage_EmailDisable' => 
    array (
      2 => 'ddg_mail_transport',
    ),
    'Magento\\Framework\\Mail\\TransportInterface_sendMessage_ddg_mail_transport' => 
    array (
      2 => 'mageplaza_mail_transport',
    ),
    'Magento\\Checkout\\Block\\Cart\\LayoutProcessor_isStateActive___self' => 
    array (
      4 => 
      array (
        0 => 'checkout_cart_shipping_dhl',
        1 => 'checkout_cart_shipping_plugin',
      ),
    ),
    'Magento\\Checkout\\Block\\Cart\\LayoutProcessor_isCityActive___self' => 
    array (
      4 => 
      array (
        0 => 'checkout_cart_shipping_dhl',
      ),
    ),
    'Magento\\Framework\\View\\Page\\Config_getIncludes___self' => 
    array (
      4 => 
      array (
        0 => 'headIncludes',
      ),
    ),
    'Magento\\RequisitionListGraphQl\\Model\\RequisitionList\\Item\\AddItemsToRequisitionList_prepareOptions___self' => 
    array (
      1 => 
      array (
        0 => 'processDownloadableOptionAddToList',
        1 => 'processBundleOptionsAddToList',
        2 => 'processConfigurableProductOptionsAddToList',
        3 => 'processGiftCardOptionsAddToList',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Attribute\\RemoveProductAttributeData_removeData___self' => 
    array (
      2 => 'removeWeeAttributesData',
    ),
    'Magento\\Catalog\\Model\\Indexer\\Category\\Product\\Action\\Rows_execute___self' => 
    array (
      4 => 
      array (
        0 => 'catalogsearchFulltextProductAssignment',
      ),
    ),
    'Magento\\Framework\\Indexer\\Config\\DependencyInfoProvider_getIndexerIdsToRunBefore___self' => 
    array (
      4 => 
      array (
        0 => 'indexerDependencyUpdaterPlugin',
      ),
    ),
    'Magento\\Framework\\Indexer\\Config\\DependencyInfoProvider_getIndexerIdsToRunAfter___self' => 
    array (
      4 => 
      array (
        0 => 'indexerDependencyUpdaterPlugin',
      ),
    ),
    'Magento\\Email\\Model\\Template___call___self' => 
    array (
      1 => 
      array (
        0 => 'dotmailer_template_plugin',
      ),
      4 => 
      array (
        0 => 'dotmailer_template_plugin',
      ),
    ),
    'Magento\\Email\\Model\\Template_getData___self' => 
    array (
      4 => 
      array (
        0 => 'dotmailer_template_plugin',
      ),
    ),
    'Magento\\Email\\Model\\Template_beforeSave___self' => 
    array (
      4 => 
      array (
        0 => 'dotmailer_template_plugin',
      ),
    ),
    'Magento\\Email\\Model\\Template_beforeLoad___self' => 
    array (
      4 => 
      array (
        0 => 'dotmailer_template_plugin',
      ),
    ),
    'Magento\\Email\\Model\\Template_afterLoad___self' => 
    array (
      4 => 
      array (
        0 => 'dotmailer_template_plugin',
      ),
    ),
    'Magento\\Shipping\\Block\\DataProviders\\Tracking\\DeliveryDateTitle_getTitle___self' => 
    array (
      4 => 
      array (
        0 => 'update_delivery_date_title',
        1 => 'ups_update_delivery_date_title',
      ),
    ),
    'Magento\\Shipping\\Block\\Tracking\\Popup_formatDeliveryDateTime___self' => 
    array (
      4 => 
      array (
        0 => 'update_delivery_date_value',
      ),
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\Create_execute___self' => 
    array (
      1 => 
      array (
        0 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\Create_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'themeRegistrationFromFilesystem',
      ),
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\Create_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'adminMassactionKey',
        1 => 'log',
      ),
      2 => 'adminAuthentication',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\Create_dispatch_adminAuthentication' => 
    array (
      1 => 
      array (
        0 => 'adminLoadDesign',
      ),
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\Create\\Index_execute___self' => 
    array (
      1 => 
      array (
        0 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\Create\\Index_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'themeRegistrationFromFilesystem',
      ),
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\Create\\Index_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'adminMassactionKey',
        1 => 'log',
      ),
      2 => 'adminAuthentication',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\Create\\Index_dispatch_adminAuthentication' => 
    array (
      1 => 
      array (
        0 => 'adminLoadDesign',
      ),
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\Edit\\Index_execute___self' => 
    array (
      1 => 
      array (
        0 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\Edit\\Index_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'themeRegistrationFromFilesystem',
        3 => 'order_edit',
      ),
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\Edit\\Index_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'adminMassactionKey',
        1 => 'log',
      ),
      2 => 'adminAuthentication',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\Edit\\Index_dispatch_adminAuthentication' => 
    array (
      1 => 
      array (
        0 => 'adminLoadDesign',
      ),
    ),
    'Magento\\Company\\Controller\\Adminhtml\\Index_execute___self' => 
    array (
      1 => 
      array (
        0 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Company\\Controller\\Adminhtml\\Index_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'themeRegistrationFromFilesystem',
      ),
    ),
    'Magento\\Company\\Controller\\Adminhtml\\Index_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'adminMassactionKey',
        1 => 'log',
      ),
      2 => 'adminAuthentication',
    ),
    'Magento\\Company\\Controller\\Adminhtml\\Index_dispatch_adminAuthentication' => 
    array (
      1 => 
      array (
        0 => 'adminLoadDesign',
      ),
    ),
    'Magento\\Company\\Controller\\Adminhtml\\Index\\Index_execute___self' => 
    array (
      1 => 
      array (
        0 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Company\\Controller\\Adminhtml\\Index\\Index_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'themeRegistrationFromFilesystem',
        3 => 'shared_catalog_validate',
      ),
    ),
    'Magento\\Company\\Controller\\Adminhtml\\Index\\Index_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'adminMassactionKey',
        1 => 'log',
      ),
      2 => 'adminAuthentication',
    ),
    'Magento\\Company\\Controller\\Adminhtml\\Index\\Index_dispatch_adminAuthentication' => 
    array (
      1 => 
      array (
        0 => 'adminLoadDesign',
      ),
    ),
    'Magento\\SharedCatalog\\Model\\Repository_save___self' => 
    array (
      4 => 
      array (
        0 => 'ddg_b2b_shared_catalog_repository_plugin',
      ),
    ),
    'Magento\\Customer\\Model\\Customer\\Source\\GroupSourceInterface_toOptionArray___self' => 
    array (
      4 => 
      array (
        0 => 'shared_catalogs_group',
      ),
    ),
    'Magento\\Customer\\Model\\Customer\\Source\\GroupSourceInterface_getAllOptions___self' => 
    array (
      4 => 
      array (
        0 => 'shared_catalogs_group',
      ),
    ),
    'Magento\\Customer\\Model\\Customer\\Attribute\\Source\\GroupSourceLoggedInOnlyInterface_toOptionArray___self' => 
    array (
      4 => 
      array (
        0 => 'shared_catalogs_group',
      ),
    ),
    'Magento\\Customer\\Model\\Customer\\Attribute\\Source\\GroupSourceLoggedInOnlyInterface_getAllOptions___self' => 
    array (
      4 => 
      array (
        0 => 'shared_catalogs_group',
      ),
    ),
    'Magento\\Customer\\Ui\\Component\\Listing\\Column\\Group\\Options_toOptionArray___self' => 
    array (
      4 => 
      array (
        0 => 'shared_catalogs_group',
      ),
    ),
    'Magento\\Customer\\Ui\\Component\\Listing\\Column\\Group\\Options_getAllOptions___self' => 
    array (
      4 => 
      array (
        0 => 'shared_catalogs_group',
      ),
    ),
    'Magento\\CustomerSegment\\Model\\ResourceModel\\Segment\\Report\\Detail\\Group\\Option_toOptionArray___self' => 
    array (
      4 => 
      array (
        0 => 'shared_catalogs_group',
      ),
    ),
    'Magento\\CatalogPermissions\\Model\\Permission_save___self' => 
    array (
      4 => 
      array (
        0 => 'shared_catalog_update_category_permissions',
      ),
    ),
    'Magento\\CatalogPermissions\\Model\\Permission_delete___self' => 
    array (
      4 => 
      array (
        0 => 'shared_catalog_update_category_permissions',
      ),
    ),
    'Magento\\CatalogPermissions\\Model\\Indexer\\Product\\IndexFiller_populate___self' => 
    array (
      4 => 
      array (
        0 => 'shared_catalog_update_product_permissions',
      ),
    ),
    'Magento\\Catalog\\Api\\CategoryRepositoryInterface_delete___self' => 
    array (
      4 => 
      array (
        0 => 'shared_catalog_delete_category_permissions',
      ),
    ),
    'Magento\\Catalog\\Api\\CategoryRepositoryInterface_save___self' => 
    array (
      1 => 
      array (
        0 => 'DateRangeDesignUpdateCategorySavePlugin',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Copier_copy___self' => 
    array (
      4 => 
      array (
        0 => 'AssignSharedCatalogOnDuplicateProductPlugin',
        1 => 'copy_source_items',
      ),
    ),
    'Magento\\AdvancedCheckout\\Block\\Adminhtml\\Sku\\Errors\\Grid\\Description_getConfigureButtonHtml___self' => 
    array (
      2 => 'shared_catalog_configure_button',
    ),
    'Magento\\Elasticsearch\\SearchAdapter\\Aggregation\\Builder\\Term_build___self' => 
    array (
      4 => 
      array (
        0 => 'shared_catalog_update_elasticsearch_term_bucket_builder',
      ),
    ),
    'Magento\\Catalog\\Api\\ProductCustomOptionRepositoryInterface_save___self' => 
    array (
      1 => 
      array (
        0 => 'isOptionExists',
      ),
      4 => 
      array (
        0 => 'vertex_custom_option_flex_field_db_handler',
      ),
    ),
    'Magento\\Catalog\\Api\\ProductCustomOptionRepositoryInterface_get___self' => 
    array (
      4 => 
      array (
        0 => 'vertex_custom_option_flex_field_db_handler',
      ),
    ),
    'Magento\\Catalog\\Api\\ProductCustomOptionRepositoryInterface_getList___self' => 
    array (
      4 => 
      array (
        0 => 'vertex_custom_option_flex_field_db_handler',
      ),
    ),
    'Magento\\Catalog\\Api\\ProductCustomOptionRepositoryInterface_getProductOptions___self' => 
    array (
      4 => 
      array (
        0 => 'vertex_custom_option_flex_field_db_handler',
      ),
    ),
    'Magento\\Catalog\\Api\\ProductCustomOptionRepositoryInterface_delete___self' => 
    array (
      2 => 'vertex_custom_option_flex_field_db_handler',
    ),
    'Magento\\Catalog\\Api\\ProductCustomOptionRepositoryInterface_duplicate___self' => 
    array (
      2 => 'vertex_custom_option_flex_field_db_handler',
    ),
    'Magento\\Catalog\\Model\\Indexer\\Product\\Flat\\Table\\BuilderInterface_getTable___self' => 
    array (
      4 => 
      array (
        0 => 'addRowIdToFlat',
      ),
    ),
    'Magento\\Catalog\\Model\\Indexer\\AbstractFlatState_isAvailable___self' => 
    array (
      2 => 'staging_flat_bypass',
    ),
    'Magento\\Catalog\\Controller\\Category\\View_execute___self' => 
    array (
      1 => 
      array (
        0 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Catalog\\Controller\\Category\\View_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'replaceIndex',
      ),
    ),
    'Magento\\Catalog\\Controller\\Category\\View_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'log',
      ),
    ),
    'Magento\\Staging\\Model\\VersionManager_setCurrentVersionId___self' => 
    array (
      1 => 
      array (
        0 => 'catalogStagingVersionManager',
      ),
    ),
    'Magento\\GroupedProduct\\Model\\Product\\Type\\Grouped_prepareForCartAdvanced___self' => 
    array (
      4 => 
      array (
        0 => 'outOfStockFilter',
      ),
    ),
    'Magento\\GroupedProduct\\Model\\Product\\Type\\Grouped_getAssociatedProductCollection___self' => 
    array (
      4 => 
      array (
        0 => 'grouped_product_minimum_advertised_price',
      ),
    ),
    'Magento\\ConfigurableProduct\\Model\\ResourceModel\\Product\\Type\\Configurable\\Product\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\ConfigurableProduct\\Model\\ResourceModel\\Product\\Type\\Configurable\\Product\\Collection_load___self' => 
    array (
      1 => 
      array (
        0 => 'joinProductsWhenFlatEnabled',
        1 => 'catalogRulePriceForConfigurableProduct',
      ),
    ),
    'Magento\\ConfigurableProduct\\Model\\ResourceModel\\Product\\Type\\Configurable\\Product\\Collection_joinAttribute___self' => 
    array (
      1 => 
      array (
        0 => 'joinAttribute',
      ),
    ),
    'Magento\\RequisitionList\\Model\\RequisitionListItem\\SaveHandler_saveItem___self' => 
    array (
      2 => 'aroundSaveItem',
    ),
    'Magento\\RequisitionList\\Block\\Requisition\\View\\Item_getProductUrlByItem___self' => 
    array (
      2 => 'aroundGetProductUrlByItem',
    ),
    'Magento\\RequisitionList\\Model\\OptionsManagement_getOptions___self' => 
    array (
      4 => 
      array (
        0 => 'afterGetOptions',
      ),
    ),
    'Magento\\Inventory\\Model\\ResourceModel\\IsProductAssignedToStock_execute___self' => 
    array (
      2 => 'cache_product_stock_assignment_check',
    ),
    'Magento\\AdvancedCheckout\\Model\\AreProductsSalableForRequestedQty_execute___self' => 
    array (
      2 => 'inventory_advanced_checkout_is_in_stock',
    ),
    'Magento\\BundleImportExport\\Model\\Import\\Product\\Type\\Bundle_prepareAttributesWithDefaultValueForSave___self' => 
    array (
      1 => 
      array (
        0 => 'process_shipment_type_plugin',
      ),
    ),
    'Magento\\InventoryConfigurationApi\\Model\\IsSourceItemManagementAllowedForProductTypeInterface_execute___self' => 
    array (
      2 => 'disable_bundle_type',
    ),
    'Magento\\InventoryConfigurationApi\\Model\\IsSourceItemManagementAllowedForProductTypeInterface_execute_disable_bundle_type' => 
    array (
      2 => 'disable_grouped_type',
    ),
    'Magento\\Bundle\\Model\\ResourceModel\\Selection\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Bundle\\Model\\ResourceModel\\Selection\\Collection_load___self' => 
    array (
      1 => 
      array (
        0 => 'joinProductsWhenFlatEnabled',
      ),
    ),
    'Magento\\Bundle\\Model\\ResourceModel\\Selection\\Collection_joinAttribute___self' => 
    array (
      1 => 
      array (
        0 => 'joinAttribute',
      ),
    ),
    'Magento\\Bundle\\Model\\ResourceModel\\Selection\\Collection_addQuantityFilter___self' => 
    array (
      2 => 'adapt_add_quantity_filter',
    ),
    'Magento\\Bundle\\Model\\ResourceModel\\Selection\\Collection_getItems___self' => 
    array (
      4 => 
      array (
        0 => 'productCollectionPlugin',
      ),
    ),
    'Magento\\Bundle\\Model\\ResourceModel\\Selection\\Collection_addStoreFilter___self' => 
    array (
      2 => 'Bundle',
    ),
    'Magento\\Bundle\\Api\\ProductLinkManagementInterface_addChild___self' => 
    array (
      1 => 
      array (
        0 => 'validate_source_items_before_add_bundle_selection',
      ),
      4 => 
      array (
        0 => 'reindex_source_items_after_add_bundle_selection',
      ),
    ),
    'Magento\\Bundle\\Api\\ProductLinkManagementInterface_saveChild___self' => 
    array (
      1 => 
      array (
        0 => 'validate_source_items_before_save_bundle_selection',
      ),
      4 => 
      array (
        0 => 'reindex_source_items_after_save_bundle_selection',
      ),
    ),
    'Magento\\Bundle\\Api\\ProductLinkManagementInterface_removeChild___self' => 
    array (
      4 => 
      array (
        0 => 'reindex_source_items_after_remove_bundle_selection',
      ),
    ),
    'Magento\\CatalogInventory\\Helper\\Stock_assignStatusToProduct___self' => 
    array (
      1 => 
      array (
        0 => 'adapt_assign_stock_status_to_bundle_product',
        1 => 'adapt_assign_status_to_product',
      ),
    ),
    'Magento\\CatalogInventory\\Helper\\Stock_addInStockFilterToCollection___self' => 
    array (
      2 => 'adapt_add_in_stock_filter_to_collection',
    ),
    'Magento\\CatalogInventory\\Helper\\Stock_addStockStatusToProducts___self' => 
    array (
      2 => 'adapt_add_stock_status_to_products',
    ),
    'Magento\\InventoryIndexer\\Indexer\\Stock\\Strategy\\Sync_executeFull___self' => 
    array (
      4 => 
      array (
        0 => 'bundle_product_index_full',
        1 => 'configurable_product_full_index',
        2 => 'grouped_product_index_full',
      ),
    ),
    'Magento\\InventoryIndexer\\Indexer\\Stock\\Strategy\\Sync_executeList___self' => 
    array (
      4 => 
      array (
        0 => 'bundle_product_index_list',
        1 => 'update_product_prices_plugin',
        2 => 'configurable_product_index_list',
        3 => 'grouped_product_index_list',
      ),
      2 => 'invalidate_products_cache',
    ),
    'Magento\\InventoryIndexer\\Indexer\\SourceItem\\Strategy\\Sync_executeList___self' => 
    array (
      4 => 
      array (
        0 => 'bundle_product_index',
        1 => 'priceIndexUpdater',
        2 => 'grouped_product_index',
        3 => 'invalidate_products_cache',
        4 => 'configurable_product_index',
      ),
    ),
    'Magento\\InventoryApi\\Api\\StockRepositoryInterface_deleteById___self' => 
    array (
      1 => 
      array (
        0 => 'prevent_default_stock_deleting',
        1 => 'prevent_deleting_assigned_to_sales_channels_stock',
      ),
    ),
    'Magento\\InventoryApi\\Api\\StockRepositoryInterface_getList___self' => 
    array (
      4 => 
      array (
        0 => 'load_sales_channels_on_get_list',
      ),
    ),
    'Magento\\InventoryApi\\Api\\StockRepositoryInterface_get___self' => 
    array (
      4 => 
      array (
        0 => 'load_sales_channels_on_get',
      ),
    ),
    'Magento\\InventoryApi\\Api\\StockRepositoryInterface_save___self' => 
    array (
      4 => 
      array (
        0 => 'add_notice_for_unassigned_sales_channels',
        1 => 'save_sales_channels_links',
      ),
    ),
    'Magento\\InventoryApi\\Api\\SourceItemsSaveInterface_execute___self' => 
    array (
      4 => 
      array (
        0 => 'set_data_to_legacy_catalog_inventory_at_source_items_save',
        1 => 'reindex_after_source_items_save',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\Indexer\\ProductPriceIndexFilter_modifyPrice___self' => 
    array (
      2 => 'change_select_for_price_modifier',
    ),
    'Magento\\InventoryApi\\Api\\SourceItemsDeleteInterface_execute___self' => 
    array (
      4 => 
      array (
        0 => 'set_to_zero_legacy_catalog_inventory_at_source_items_delete',
      ),
      2 => 'reindex_after_source_items_delete',
    ),
    'Magento\\InventoryApi\\Api\\SourceItemsDeleteInterface_execute_reindex_after_source_items_delete' => 
    array (
      4 => 
      array (
        0 => 'inventory_low_quantity_notification_source_item_delete',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\ResourceModel\\QtyCounterInterface_correctItemsQty___self' => 
    array (
      2 => 'update_source_item_at_legacy_qty_counter',
    ),
    'Magento\\CatalogInventory\\Model\\ResourceModel\\Stock\\Item_save___self' => 
    array (
      2 => 'update_source_item_at_legacy_stock_item_save',
    ),
    'Magento\\CatalogInventory\\Model\\ResourceModel\\Stock\\Status_addStockDataToCollection___self' => 
    array (
      2 => 'adapt_add_stock_data_to_collection',
    ),
    'Magento\\CatalogInventory\\Model\\ResourceModel\\Stock\\Status_addStockStatusToSelect___self' => 
    array (
      2 => 'adapt_add_stock_status_to_select',
    ),
    'Magento\\CatalogInventory\\Model\\ResourceModel\\Stock\\Status_addIsInStockFilterToCollection___self' => 
    array (
      2 => 'adapt_add_is_in_stock_filter_to_collection',
    ),
    'Magento\\InventorySalesApi\\Api\\GetStockBySalesChannelInterface_execute___self' => 
    array (
      2 => 'adapt_stock_resolver_to_admin_website',
    ),
    'Magento\\InventoryApi\\Api\\StockSourceLinksDeleteInterface_execute___self' => 
    array (
      1 => 
      array (
        0 => 'prevent_delete_default_stock_links',
      ),
      4 => 
      array (
        0 => 'invalidate_after_stock_source_links_delete',
      ),
    ),
    'Magento\\Inventory\\Model\\SourceItem\\Command\\SourceItemsSaveWithoutLegacySynchronization_execute___self' => 
    array (
      4 => 
      array (
        0 => 'reindex_after_source_items_save',
      ),
    ),
    'Magento\\CatalogInventory\\Api\\StockRegistryInterface_getStockStatus___self' => 
    array (
      4 => 
      array (
        0 => 'adapt_get_stock_status',
      ),
    ),
    'Magento\\CatalogInventory\\Api\\StockRegistryInterface_getStockStatusBySku___self' => 
    array (
      4 => 
      array (
        0 => 'adapt_get_stock_status_by_sku',
      ),
    ),
    'Magento\\CatalogInventory\\Api\\StockRegistryInterface_getProductStockStatus___self' => 
    array (
      2 => 'adapt_get_product_stock_status',
    ),
    'Magento\\CatalogInventory\\Api\\StockRegistryInterface_getProductStockStatusBySku___self' => 
    array (
      2 => 'adapt_get_product_stock_status_by_sku',
    ),
    'Magento\\CatalogInventory\\Api\\StockRegistryInterface_updateStockItemBySku___self' => 
    array (
      4 => 
      array (
        0 => 'ddg_stock_update_plugin',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Initialization\\StockDataFilter_filter___self' => 
    array (
      4 => 
      array (
        0 => 'allow_negative_min_qty',
      ),
    ),
    'Magento\\CatalogInventory\\Api\\Data\\StockItemInterface_getMinQty___self' => 
    array (
      4 => 
      array (
        0 => 'adapt_min_qty_to_backorders',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\Spi\\StockStateProviderInterface_verifyStock___self' => 
    array (
      4 => 
      array (
        0 => 'adapt_verify_stock_to_negative_min_qty',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\ResourceModel\\StockStatusFilterInterface_execute___self' => 
    array (
      2 => 'inventory_catalog_stock_status_filter',
    ),
    'Magento\\CatalogInventory\\Api\\StockStateInterface_checkQuoteItemQty___self' => 
    array (
      2 => 'check_quote_item_qty',
    ),
    'Magento\\CatalogInventory\\Api\\StockStateInterface_suggestQty___self' => 
    array (
      2 => 'suggest_qty',
    ),
    'Magento\\InventoryReservationsApi\\Model\\AppendReservationsInterface_execute___self' => 
    array (
      2 => 'prevent_append_reservation_on_not_manage_items_in_stock',
    ),
    'Magento\\CatalogInventory\\Api\\RegisterProductSaleInterface_registerProductsSale___self' => 
    array (
      2 => 'process_register_products_sale',
    ),
    'Magento\\CatalogInventory\\Model\\StockManagement_registerProductsSale___self' => 
    array (
      2 => 'process_register_products_sale',
    ),
    'Magento\\CatalogInventory\\Model\\StockManagement_backItemQty___self' => 
    array (
      2 => 'process_back_item_qty',
    ),
    'Magento\\CatalogInventory\\Model\\StockManagement_revertProductsSale___self' => 
    array (
      2 => 'process_revert_products_sale',
    ),
    'Magento\\SalesInventory\\Model\\Order\\ReturnProcessor_execute___self' => 
    array (
      2 => 'process_return_product_qty_on_credit_memo',
    ),
    'Magento\\InventoryConfigurationApi\\Api\\GetStockItemConfigurationInterface_execute___self' => 
    array (
      4 => 
      array (
        0 => 'load_stock_item_is_in_stock',
      ),
    ),
    'Magento\\InventorySalesApi\\Model\\GetSkuFromOrderItemInterface_execute___self' => 
    array (
      2 => 'get_configurable_option_sku_from_order',
    ),
    'Magento\\CatalogInventory\\Observer\\ParentItemProcessorInterface_process___self' => 
    array (
      2 => 'adapt_parent_stock_processor',
    ),
    'Magento\\CatalogInventory\\Model\\System\\Config\\Backend\\Minqty_save___self' => 
    array (
      4 => 
      array (
        0 => 'admin_system_config_media_gallery_renditions',
        1 => 'admin_system_config_adobe_stock_save_plugin',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\System\\Config\\Backend\\Minqty_afterSave___self' => 
    array (
      4 => 
      array (
        0 => 'webapiResourceSecurityCacheInvalidate',
      ),
    ),
    'Magento\\CatalogInventory\\Model\\System\\Config\\Backend\\Minqty_beforeSave___self' => 
    array (
      2 => 'allow_negative_min_qty_in_config',
    ),
    'Magento\\InventoryConfiguration\\Model\\GetLegacyStockItem_execute___self' => 
    array (
      2 => 'cache_legacy_stock_item',
    ),
    'Magento\\InventoryApi\\Api\\SourceRepositoryInterface_getList___self' => 
    array (
      4 => 
      array (
        0 => 'load_in_store_pickup_on_get_list',
      ),
    ),
    'Magento\\InventoryApi\\Api\\SourceRepositoryInterface_save___self' => 
    array (
      2 => 'invalidate_after_enabling_or_disabling_source',
    ),
    'Magento\\InventoryApi\\Api\\SourceRepositoryInterface_get___self' => 
    array (
      4 => 
      array (
        0 => 'load_in_store_pickup_on_get',
      ),
    ),
    'Magento\\InventoryApi\\Api\\SourceRepositoryInterface_save_invalidate_after_enabling_or_disabling_source' => 
    array (
      1 => 
      array (
        0 => 'save_in_store_pickup_links',
        1 => 'updateSourceLatitudeAndLongitude',
      ),
    ),
    'Magento\\InventoryApi\\Api\\StockSourceLinksSaveInterface_execute___self' => 
    array (
      4 => 
      array (
        0 => 'invalidate_after_stock_source_links_save',
      ),
    ),
    'Magento\\InventorySales\\Model\\PlaceReservationsForSalesEvent_execute___self' => 
    array (
      4 => 
      array (
        0 => 'schedule_reservation_place',
      ),
    ),
    'Magento\\InventoryCatalog\\Model\\UpdateInventory_execute___self' => 
    array (
      4 => 
      array (
        0 => 'updateParentLegacyStockStatus',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Link_saveProductRelations___self' => 
    array (
      4 => 
      array (
        0 => 'process_source_items_after_save_links',
      ),
    ),
    'Magento\\CatalogImportExport\\Model\\StockItemImporterInterface_import___self' => 
    array (
      4 => 
      array (
        0 => 'importStockItemDataForSourceItem',
      ),
    ),
    'Magento\\Framework\\Model\\ResourceModel\\Db\\VersionControl\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Framework\\Model\\ResourceModel\\Db\\VersionControl\\Collection_loadWithFilter___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\Framework\\Model\\ResourceModel\\Db\\VersionControl\\Collection_getSelectCountSql___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\Quote\\Model\\ResourceModel\\Quote\\Address\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Quote\\Model\\ResourceModel\\Quote\\Address\\Collection_loadWithFilter___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
      2 => 'add_pickup_location_to_quote_address',
    ),
    'Magento\\Quote\\Model\\ResourceModel\\Quote\\Address\\Collection_getSelectCountSql___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\Quote\\Model\\ShippingAddressManagementInterface_assign___self' => 
    array (
      1 => 
      array (
        0 => 'shipping_address_management_replace_shipping_address',
      ),
    ),
    'Magento\\Quote\\Api\\BillingAddressManagementInterface_assign___self' => 
    array (
      1 => 
      array (
        0 => 'do_not_use_billing_address_for_shipping_for_in_store_pickup_quote',
      ),
    ),
    'Magento\\Integration\\Model\\ConfigBasedIntegrationManager_processIntegrationConfig___self' => 
    array (
      4 => 
      array (
        0 => 'webapiSetup',
      ),
    ),
    'Magento\\Integration\\Model\\ConfigBasedIntegrationManager_processConfigBasedIntegrations___self' => 
    array (
      4 => 
      array (
        0 => 'webapiSetup',
      ),
    ),
    'Magento\\InventoryIndexer\\Model\\Queue\\UpdateIndexSalabilityStatus_execute___self' => 
    array (
      4 => 
      array (
        0 => 'invalidate_products_cache',
      ),
    ),
    'Magento\\InventoryCatalogApi\\Api\\BulkInventoryTransferInterface_execute___self' => 
    array (
      2 => 'inventory_low_quantity_bulk_transfer',
    ),
    'Magento\\InventoryCatalogApi\\Api\\BulkSourceAssignInterface_execute___self' => 
    array (
      4 => 
      array (
        0 => 'inventory_low_quantity_bulk_source_assign',
      ),
    ),
    'Magento\\InventoryCatalogApi\\Api\\BulkSourceUnassignInterface_execute___self' => 
    array (
      4 => 
      array (
        0 => 'inventory_low_quantity_bulk_source_unassign',
      ),
    ),
    'Magento\\InventoryLowQuantityNotificationApi\\Api\\SourceItemConfigurationsSaveInterface_execute___self' => 
    array (
      4 => 
      array (
        0 => 'update_legacy_stock_item_configuration_at_source_item_configuration_save',
      ),
    ),
    'Magento\\Inventory\\Model\\ResourceModel\\SourceItem\\DeleteMultiple_execute___self' => 
    array (
      4 => 
      array (
        0 => 'delete_source_items_configuration',
      ),
    ),
    'Magento\\ProductAlert\\Model\\ProductSalability_isSalable___self' => 
    array (
      2 => 'product_alert_adapt_salability',
    ),
    'Magento\\RequisitionList\\Model\\RequisitionListItem\\Validator\\Stock_validate___self' => 
    array (
      2 => 'magentoRequisitionListStockPlugin',
    ),
    'Magento\\CatalogInventory\\Block\\Stockqty\\AbstractStockqty_isMsgVisible___self' => 
    array (
      2 => 'magentoInventorySalesFrontendUiAbstractStockqty',
    ),
    'Magento\\CatalogInventory\\Block\\Stockqty\\AbstractStockqty_getStockQtyLeft___self' => 
    array (
      2 => 'magentoInventorySalesFrontendUiAbstractStockqty',
    ),
    'Magento\\Setup\\Model\\FixtureGenerator\\EntityGeneratorFactory_create___self' => 
    array (
      1 => 
      array (
        0 => 'update_custom_table_map',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\ShipmentFactory_create___self' => 
    array (
      4 => 
      array (
        0 => 'assign_source_code_to_shipment',
      ),
    ),
    'Magento\\Sales\\Api\\ShipmentRepositoryInterface_getList___self' => 
    array (
      4 => 
      array (
        0 => 'GetListShipmentRepository',
      ),
    ),
    'Magento\\VisualMerchandiser\\Model\\Resolver\\QuantityAndStock_joinStock___self' => 
    array (
      2 => 'magentoVisualMerchandiserResolverQuantityAndStockPlugin',
    ),
    'Magento\\Backend\\Model\\Auth_logout___self' => 
    array (
      1 => 
      array (
        0 => 'login_as_customer_admin_logout',
        1 => 'security_admin_sessions_login',
      ),
    ),
    'Magento\\Backend\\Model\\Auth_login___self' => 
    array (
      4 => 
      array (
        0 => 'security_admin_sessions_login',
      ),
    ),
    'Magento\\Framework\\Api\\DataObjectHelper_populateWithArray___self' => 
    array (
      4 => 
      array (
        0 => 'add_allow_remote_shopping_assistance_to_customer',
      ),
    ),
    'Magento\\LoginAsCustomerApi\\Api\\AuthenticateCustomerBySecretInterface_execute___self' => 
    array (
      1 => 
      array (
        0 => 'process_shopping_cart',
      ),
    ),
    'Magento\\MediaGalleryApi\\Api\\DeleteAssetsByPathsInterface_execute___self' => 
    array (
      2 => 'remove_media_content_after_asset_is_removed_by_path',
    ),
    'Magento\\MediaGalleryApi\\Api\\DeleteAssetsByPathsInterface_execute_remove_media_content_after_asset_is_removed_by_path' => 
    array (
      4 => 
      array (
        0 => 'delete_renditions_on_assets_delete',
      ),
    ),
    'Magento\\MediaGalleryApi\\Api\\DeleteDirectoriesByPathsInterface_execute___self' => 
    array (
      2 => 'remove_media_content_after_asset_is_removed_by_directory_path',
    ),
    'Magento\\MediaGallerySynchronization\\Model\\Consume_execute___self' => 
    array (
      4 => 
      array (
        0 => 'synchronize_media_content',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Gallery\\Processor_removeImage___self' => 
    array (
      4 => 
      array (
        0 => 'media_gallery_image_remove_metadata',
      ),
    ),
    'Magento\\Cms\\Model\\Wysiwyg\\Images\\GetInsertImageContent_execute___self' => 
    array (
      1 => 
      array (
        0 => 'set_rendition_path',
      ),
    ),
    'Magento\\MediaGallerySynchronizationApi\\Model\\CreateAssetFromFileInterface_execute___self' => 
    array (
      4 => 
      array (
        0 => 'addMetadataToAssetCreatedFromFile',
      ),
    ),
    'Magento\\Framework\\App\\MaintenanceMode_set___self' => 
    array (
      4 => 
      array (
        0 => 'amqp_maintenance_mode',
      ),
    ),
    'Magento\\Wishlist\\Model\\Rss\\Wishlist_getHeader___self' => 
    array (
      2 => 'aroundGetHeader',
    ),
    'Magento\\MultipleWishlist\\Controller\\AbstractIndex_execute___self' => 
    array (
      1 => 
      array (
        0 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\MultipleWishlist\\Controller\\AbstractIndex_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\MultipleWishlist\\Controller\\AbstractIndex_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'authentication',
        1 => 'multiple_enabled_filter',
        2 => 'log',
      ),
    ),
    'Magento\\SharedCatalog\\Api\\ProductItemRepositoryInterface_delete___self' => 
    array (
      4 => 
      array (
        0 => 'deleteItemsFromNegotiableQuote',
        1 => 'deleteItemsFromQuote',
      ),
    ),
    'Magento\\SharedCatalog\\Api\\ProductItemRepositoryInterface_deleteItems___self' => 
    array (
      4 => 
      array (
        0 => 'deleteItemsFromNegotiableQuote',
        1 => 'deleteItemsFromQuote',
      ),
    ),
    'Magento\\NegotiableQuote\\Model\\Quote\\Totals_getCatalogTotalPriceWithoutTax___self' => 
    array (
      4 => 
      array (
        0 => 'totals_calculate_weee',
      ),
    ),
    'Magento\\NegotiableQuote\\Model\\Quote\\Totals_getOriginalTaxValue___self' => 
    array (
      4 => 
      array (
        0 => 'totals_calculate_weee',
      ),
    ),
    'Magento\\NegotiableQuote\\Model\\Quote\\Totals_getCatalogTotalPriceWithTax___self' => 
    array (
      4 => 
      array (
        0 => 'totals_calculate_weee',
      ),
    ),
    'Magento\\NegotiableQuote\\Model\\Quote\\Totals_getSubtotal___self' => 
    array (
      4 => 
      array (
        0 => 'totals_calculate_weee',
      ),
    ),
    'Magento\\NegotiableQuote\\Model\\QuoteUpdatesInfo_getQuoteUpdatedData___self' => 
    array (
      4 => 
      array (
        0 => 'show_weee_attribute',
      ),
    ),
    'Magento\\Framework\\App\\Http_catchException___self' => 
    array (
      1 => 
      array (
        0 => 'framework-http-newrelic',
      ),
    ),
    'Magento\\Framework\\App\\State_setAreaCode___self' => 
    array (
      4 => 
      array (
        0 => 'framework-state-newrelic',
      ),
    ),
    'Symfony\\Component\\Console\\Command\\Command_run___self' => 
    array (
      1 => 
      array (
        0 => 'newrelic-describe-commands',
      ),
    ),
    'Magento\\Framework\\Profiler\\Driver\\Standard\\Stat_start___self' => 
    array (
      1 => 
      array (
        0 => 'newrelic-describe-cronjobs',
      ),
    ),
    'Magento\\Framework\\Profiler\\Driver\\Standard\\Stat_stop___self' => 
    array (
      1 => 
      array (
        0 => 'newrelic-describe-cronjobs',
      ),
    ),
    'Magento\\Newsletter\\Model\\Subscriber_sendConfirmationSuccessEmail___self' => 
    array (
      2 => 'ddg_newsletter_disabler',
    ),
    'Magento\\CatalogWidget\\Block\\Product\\ProductsList_getImage___self' => 
    array (
      1 => 
      array (
        0 => 'add_product_object_to_image_data_array',
      ),
    ),
    'Magento\\CatalogWidget\\Block\\Product\\ProductsList_createCollection___self' => 
    array (
      4 => 
      array (
        0 => 'pagebuilder_product_list',
      ),
    ),
    'Magento\\CatalogWidget\\Block\\Product\\ProductsList_getCacheKeyInfo___self' => 
    array (
      4 => 
      array (
        0 => 'pagebuilder_product_list',
      ),
    ),
    'Magento\\CatalogWidget\\Block\\Product\\ProductsList_getIdentities___self' => 
    array (
      4 => 
      array (
        0 => 'pagebuilder_product_list',
      ),
    ),
    'Magento\\Payment\\Model\\Method\\AbstractMethod_isAvailable___self' => 
    array (
      2 => 'paymentMethodIsAvailable',
    ),
    'Magento\\Payment\\Model\\Method\\Adapter_isAvailable___self' => 
    array (
      2 => 'paymentGatewayIsAvailable',
    ),
    'Magento\\Sales\\Api\\Data\\OrderPaymentInterface_getExtensionAttributes___self' => 
    array (
      4 => 
      array (
        0 => 'PaymentVaultExtensionAttributeOperations',
      ),
    ),
    'Magento\\Payment\\Model\\Checks\\Composite_isApplicable___self' => 
    array (
      4 => 
      array (
        0 => 'paypal_specification',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Validation\\CanInvoice_validate___self' => 
    array (
      4 => 
      array (
        0 => 'express_order_invoice',
      ),
    ),
    'Magento\\Framework\\Session\\SessionStartChecker_check___self' => 
    array (
      4 => 
      array (
        0 => 'transparent_session_checker',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Payment_getExtensionAttributes___self' => 
    array (
      4 => 
      array (
        0 => 'PaymentVaultExtensionAttributeOperations',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Payment_accept___self' => 
    array (
      4 => 
      array (
        0 => 'paypal_transparent',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Payment_prependMessage___self' => 
    array (
      1 => 
      array (
        0 => 'amazon_pay_order_payment',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Payment_formatPrice___self' => 
    array (
      4 => 
      array (
        0 => 'amazon_pay_order_payment',
      ),
    ),
    'Magento\\NegotiableQuote\\Model\\History\\SnapshotManagement_getCustomerId___self' => 
    array (
      4 => 
      array (
        0 => 'change_author_to_system_if_purchase_order_is_in_final_status',
      ),
    ),
    'Magento\\SalesRule\\Model\\Coupon\\Quote\\UpdateCouponUsages_execute___self' => 
    array (
      1 => 
      array (
        0 => 'purchaseOrderSalesRuleUpdateCouponUsagesPlugin',
      ),
    ),
    'Magento\\CompanyCredit\\Model\\CompanyCreditPaymentConfigProvider_getQuote___self' => 
    array (
      2 => 'purchaseOrderCompanyCreditConfigProviderPlugin',
    ),
    'Magento\\Quote\\Model\\AddressAdditionalDataProcessor_process___self' => 
    array (
      1 => 
      array (
        0 => 'persistent_remember_me_checkbox_processor',
      ),
    ),
    'Magento\\Customer\\CustomerData\\Customer_getSectionData___self' => 
    array (
      2 => 'section_data',
    ),
    'Magento\\Catalog\\Ui\\Component\\Listing\\Columns\\Price_prepare___self' => 
    array (
      2 => 'price-permission-grid-columns-plugin',
    ),
    'Magento\\Catalog\\Model\\Product\\Gallery\\CreateHandler_execute___self' => 
    array (
      1 => 
      array (
        0 => 'external_video_media_entry_saver',
      ),
      4 => 
      array (
        0 => 'external_video_media_entry_saver',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Gallery\\ReadHandler_execute___self' => 
    array (
      4 => 
      array (
        0 => 'external_video_media_entry_reader',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\Gallery_duplicate___self' => 
    array (
      4 => 
      array (
        0 => 'external_video_media_resource_backend',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\Gallery_createBatchBaseSelect___self' => 
    array (
      4 => 
      array (
        0 => 'external_video_media_resource_backend',
      ),
    ),
    'Magento\\PurchaseOrder\\Model\\Customer\\Authorization\\ApproveRejectPurchaseOrder_isAllowed___self' => 
    array (
      4 => 
      array (
        0 => 'purchase_order_approve_reject_after_is_allowed',
      ),
    ),
    'Magento\\PurchaseOrder\\Model\\Customer\\Authorization\\ViewPurchaseOrder_isAllowed___self' => 
    array (
      4 => 
      array (
        0 => 'purchase_order_view_after_is_allowed',
      ),
    ),
    'Magento\\PurchaseOrder\\Model\\Notification\\Email\\ContentSource\\ApprovalRequiredAction_getTemplateVars___self' => 
    array (
      4 => 
      array (
        0 => 'purchase_order_approve_required_action_after_get_template_vars',
      ),
    ),
    'Magento\\PurchaseOrder\\Model\\Notification\\Email\\ContentSource\\ApprovalAndPaymentDetailsRequiredAction_getTemplateVars___self' => 
    array (
      4 => 
      array (
        0 => 'purchase_order_approve_required_payment_details_action_after_get_template_vars',
      ),
    ),
    'Magento\\PurchaseOrder\\Model\\PurchaseOrderManagement_rejectPurchaseOrder___self' => 
    array (
      4 => 
      array (
        0 => 'purchase_order_reject',
      ),
    ),
    'Magento\\PurchaseOrder\\Block\\PurchaseOrder\\Grid_isAllowed___self' => 
    array (
      4 => 
      array (
        0 => 'purchase_order_grid',
      ),
    ),
    'Magento\\CatalogSearch\\Model\\ResourceModel\\EngineInterface_getAllowedVisibility___self' => 
    array (
      4 => 
      array (
        0 => 'addNotVisibleProductsToSearchIndex',
      ),
    ),
    'Magento\\AdvancedCheckout\\Model\\Cart_setAffectedItems___self' => 
    array (
      2 => 'modifyCartItemsForQuickOrder',
    ),
    'Magento\\AdvancedCheckout\\Model\\Cart_getAffectedItems___self' => 
    array (
      2 => 'modifyCartItemsForQuickOrder',
    ),
    'Magento\\AdvancedCheckout\\Model\\Cart_checkItem___self' => 
    array (
      1 => 
      array (
        0 => 'addExtraDataToCartItem',
      ),
    ),
    'Magento\\AdvancedCheckout\\Model\\Cart_checkItems___self' => 
    array (
      1 => 
      array (
        0 => 'setItemsQuantity',
      ),
    ),
    'Magento\\AdvancedCheckout\\Model\\Cart_prepareAddProductsBySku___self' => 
    array (
      1 => 
      array (
        0 => 'prepareAddProductsBySku',
      ),
    ),
    'Magento\\MediaStorage\\Model\\File\\Storage\\Synchronization_synchronize___self' => 
    array (
      1 => 
      array (
        0 => 'remoteMedia',
      ),
    ),
    'Magento\\Framework\\Image\\Adapter\\AbstractAdapter_open___self' => 
    array (
      1 => 
      array (
        0 => 'remoteImageFile',
      ),
    ),
    'Magento\\Framework\\Image\\Adapter\\AbstractAdapter_validateUploadFile___self' => 
    array (
      1 => 
      array (
        0 => 'remoteImageFile',
      ),
    ),
    'Magento\\Framework\\Image\\Adapter\\AbstractAdapter_watermark___self' => 
    array (
      1 => 
      array (
        0 => 'remoteImageFile',
      ),
    ),
    'Magento\\Framework\\Image\\Adapter\\AbstractAdapter_save___self' => 
    array (
      2 => 'remoteImageFile',
    ),
    'Magento\\ScheduledImportExport\\Model\\Scheduled\\Operation\\Data_getServerTypesOptionArray___self' => 
    array (
      4 => 
      array (
        0 => 'serverType',
      ),
    ),
    'Magento\\CustomerImportExport\\Model\\Import\\Customer_getValidColumnNames___self' => 
    array (
      4 => 
      array (
        0 => 'rewardAttributes',
      ),
    ),
    'Magento\\CustomerBalance\\Model\\Creditmemo\\Balance_save___self' => 
    array (
      1 => 
      array (
        0 => 'customerBalanceSave',
      ),
    ),
    'Magento\\SalesRule\\Model\\Rule_getFromDate___self' => 
    array (
      1 => 
      array (
        0 => 'salesRuleDateResolver',
      ),
    ),
    'Magento\\SalesRule\\Model\\Rule_getToDate___self' => 
    array (
      1 => 
      array (
        0 => 'salesRuleDateResolver',
      ),
    ),
    'Magento\\SalesRule\\Model\\Rule_getConditionsFieldSetId___self' => 
    array (
      2 => 'salesRuleConditionFieldsetIdResolver',
    ),
    'Magento\\SalesRule\\Model\\Rule_getActionsFieldSetId___self' => 
    array (
      2 => 'salesRuleActionFieldsetIdResolver',
    ),
    'Magento\\SalesRule\\Model\\Rule_beforeSave___self' => 
    array (
      1 => 
      array (
        0 => 'salesRuleBeforeBeforeSave',
      ),
    ),
    'Magento\\SalesRule\\Model\\Rule_save___self' => 
    array (
      2 => 'salesRuleAroundSave',
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\View\\Tab\\History_getFullHistory___self' => 
    array (
      4 => 
      array (
        0 => 'sales-order-history-rma-plugin',
      ),
    ),
    'Magento\\Rma\\Model\\RmaRepository_get___self' => 
    array (
      4 => 
      array (
        0 => 'authorization',
      ),
    ),
    'Magento\\Sales\\Model\\ResourceModel\\Provider\\UpdatedIdListProvider_getIds___self' => 
    array (
      4 => 
      array (
        0 => 'process_archive_entities',
      ),
    ),
    'Magento\\Sales\\Model\\RefundOrder_execute___self' => 
    array (
      4 => 
      array (
        0 => 'refundOrderAfter',
      ),
    ),
    'Magento\\Sales\\Model\\RefundInvoice_execute___self' => 
    array (
      4 => 
      array (
        0 => 'refundInvoiceAfter',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Validation\\RefundOrderInterface_validate___self' => 
    array (
      4 => 
      array (
        0 => 'refundOrderValidationAfter',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Validation\\RefundInvoiceInterface_validate___self' => 
    array (
      4 => 
      array (
        0 => 'refundInvoiceValidationAfter',
      ),
    ),
    'Magento\\CatalogRule\\Model\\Rule_getFromDate___self' => 
    array (
      1 => 
      array (
        0 => 'catalogRuleDateResolver',
      ),
    ),
    'Magento\\CatalogRule\\Model\\Rule_getToDate___self' => 
    array (
      1 => 
      array (
        0 => 'catalogRuleDateResolver',
      ),
    ),
    'Magento\\CatalogRule\\Model\\Rule_getMatchingProductIds___self' => 
    array (
      4 => 
      array (
        0 => 'addVariationsToProductRule',
      ),
    ),
    'Magento\\CatalogRule\\Model\\Rule_validate___self' => 
    array (
      4 => 
      array (
        0 => 'configurableChildValidation',
      ),
    ),
    'Magento\\CatalogRule\\Model\\Rule_getConditionsFieldSetId___self' => 
    array (
      2 => 'catalogConditionFieldsetIdResolver',
    ),
    'Magento\\CatalogRule\\Observer\\ProcessFrontFinalPriceObserver_execute___self' => 
    array (
      2 => 'previewCatalogPriceRule',
    ),
    'Magento\\Banner\\Block\\Widget\\Banner_getWidgetAttributes___self' => 
    array (
      4 => 
      array (
        0 => 'additional_attributes',
      ),
    ),
    'Magento\\PageBuilder\\Model\\Stage\\Renderer\\CmsStaticBlock_render___self' => 
    array (
      4 => 
      array (
        0 => 'dynamic_block_filter',
      ),
    ),
    'Magento\\Paypal\\Model\\ExpressConfigProvider_getConfig___self' => 
    array (
      4 => 
      array (
        0 => 'purchase_order_paypal_express_config_urls',
      ),
    ),
    'Magento\\Paypal\\Controller\\Express\\AbstractExpress_execute___self' => 
    array (
      1 => 
      array (
        0 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Paypal\\Controller\\Express\\AbstractExpress_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'purchase_order_paypal_express_abstract',
      ),
    ),
    'Magento\\Paypal\\Controller\\Express\\AbstractExpress_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'log',
      ),
    ),
    'Magento\\Paypal\\Controller\\Express\\AbstractExpress\\Cancel_execute___self' => 
    array (
      1 => 
      array (
        0 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Paypal\\Controller\\Express\\AbstractExpress\\Cancel_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'purchase_order_paypal_express_abstract',
      ),
      4 => 
      array (
        0 => 'purchase_order_paypal_express_cancel_url',
      ),
    ),
    'Magento\\Paypal\\Controller\\Express\\AbstractExpress\\Cancel_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'log',
      ),
    ),
    'Magento\\Paypal\\Model\\Api\\Nvp_getData___self' => 
    array (
      2 => 'purchase_order_paypal_token_store',
    ),
    'Magento\\CatalogGraphQl\\Model\\Resolver\\Products_resolve___self' => 
    array (
      1 => 
      array (
        0 => 'catalog_search_permissions',
      ),
    ),
    'Magento\\Company\\Model\\Company\\Save_save___self' => 
    array (
      4 => 
      array (
        0 => 'companyCreditCreatePlugin',
      ),
    ),
    'Magento\\Company\\Controller\\Adminhtml\\Index\\Edit_execute___self' => 
    array (
      1 => 
      array (
        0 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Company\\Controller\\Adminhtml\\Index\\Edit_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'themeRegistrationFromFilesystem',
        3 => 'beforeExecute',
      ),
    ),
    'Magento\\Company\\Controller\\Adminhtml\\Index\\Edit_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'adminMassactionKey',
        1 => 'log',
      ),
      2 => 'adminAuthentication',
    ),
    'Magento\\Company\\Controller\\Adminhtml\\Index\\Edit_dispatch_adminAuthentication' => 
    array (
      1 => 
      array (
        0 => 'adminLoadDesign',
      ),
    ),
    'Magento\\Rma\\Helper\\Eav_getAttributeOptionValues___self' => 
    array (
      2 => 'removeStoreCreditResolutionOnAdminPanel',
    ),
    'Magento\\Rma\\Block\\Form\\Renderer\\Select_getOptions___self' => 
    array (
      4 => 
      array (
        0 => 'removeStoreCreditResolutionOnStorefront',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\InvoiceQuantityValidator_validate___self' => 
    array (
      2 => 'checkPartialInvoice',
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Eav\\Attribute_beforeSave___self' => 
    array (
      1 => 
      array (
        0 => 'save_swatches_option_params',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Eav\\Attribute_afterSave___self' => 
    array (
      4 => 
      array (
        0 => 'save_swatches_option_params',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Eav\\Attribute_usesSource___self' => 
    array (
      4 => 
      array (
        0 => 'save_swatches_option_params',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Eav\\Attribute_save___self' => 
    array (
      4 => 
      array (
        0 => 'change_product_attribute',
        1 => 'invalidate_caches_after_attribute_save',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Eav\\Attribute_delete___self' => 
    array (
      4 => 
      array (
        0 => 'change_product_attribute',
      ),
    ),
    'Magento\\LayeredNavigation\\Block\\Navigation\\FilterRenderer_render___self' => 
    array (
      2 => 'swatches_layered_renderer',
    ),
    'Magento\\Catalog\\Model\\Product\\Attribute\\OptionManagement_add___self' => 
    array (
      1 => 
      array (
        0 => 'swatches_product_attribute_optionmanagement_plugin',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Attribute\\OptionManagement_update___self' => 
    array (
      1 => 
      array (
        0 => 'swatches_product_attribute_optionmanagement_plugin',
      ),
    ),
    'Magento\\Webapi\\Model\\ServiceMetadata_getServicesConfig___self' => 
    array (
      4 => 
      array (
        0 => 'webapiServiceMetadataAsync',
      ),
    ),
    'Magento\\Webapi\\Model\\Cache\\Type\\Webapi_load___self' => 
    array (
      1 => 
      array (
        0 => 'webapiCacheAsync',
      ),
    ),
    'Magento\\Webapi\\Model\\Cache\\Type\\Webapi_save___self' => 
    array (
      1 => 
      array (
        0 => 'webapiCacheAsync',
      ),
    ),
    'Magento\\Webapi\\Model\\Cache\\Type\\Webapi_remove___self' => 
    array (
      1 => 
      array (
        0 => 'webapiCacheAsync',
      ),
    ),
    'Magento\\Webapi\\Model\\Config\\Converter_convert___self' => 
    array (
      4 => 
      array (
        0 => 'webapiResourceSecurity',
      ),
    ),
    'Magento\\Checkout\\CustomerData\\Cart_getSectionData___self' => 
    array (
      4 => 
      array (
        0 => 'amazon_core_cart_section',
      ),
    ),
    'Magento\\Checkout\\Controller\\Cart_execute___self' => 
    array (
      1 => 
      array (
        0 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Checkout\\Controller\\Cart_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\Checkout\\Controller\\Cart_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'log',
      ),
    ),
    'Magento\\Checkout\\Controller\\Cart\\Index_execute___self' => 
    array (
      1 => 
      array (
        0 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Checkout\\Controller\\Cart\\Index_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
      4 => 
      array (
        0 => 'amazon_login_cart_controller',
      ),
    ),
    'Magento\\Checkout\\Controller\\Cart\\Index_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'log',
      ),
    ),
    'Magento\\Customer\\Controller\\AbstractAccount_execute___self' => 
    array (
      1 => 
      array (
        0 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Customer\\Controller\\AbstractAccount_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\Customer\\Controller\\AbstractAccount_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'log',
      ),
    ),
    'Magento\\Customer\\Controller\\Account\\Login_execute___self' => 
    array (
      1 => 
      array (
        0 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Customer\\Controller\\Account\\Login_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
      4 => 
      array (
        0 => 'amazon_login_login_controller',
      ),
    ),
    'Magento\\Customer\\Controller\\Account\\Login_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'log',
      ),
    ),
    'Magento\\Customer\\Controller\\Account\\Create_execute___self' => 
    array (
      1 => 
      array (
        0 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Customer\\Controller\\Account\\Create_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
      4 => 
      array (
        0 => 'amazon_login_create_controller',
      ),
    ),
    'Magento\\Customer\\Controller\\Account\\Create_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'log',
      ),
    ),
    'Magento\\Sales\\Api\\OrderCustomerManagementInterface_create___self' => 
    array (
      4 => 
      array (
        0 => 'amazon_login_order_customer_service',
        1 => 'Ddg_CustomerManagementPlugin',
      ),
    ),
    'Magento\\Quote\\Api\\Data\\PaymentInterface_getAdditionalInformation___self' => 
    array (
      4 => 
      array (
        0 => 'amazon_payment_additional_information',
      ),
    ),
    'Amazon\\Payment\\Model\\Method\\AmazonLoginMethod_isAvailable___self' => 
    array (
      2 => 'paymentMethodIsAvailable',
    ),
    'Amazon\\Payment\\Model\\Method\\AmazonLoginMethod_isAvailable_paymentMethodIsAvailable' => 
    array (
      4 => 
      array (
        0 => 'disable_amazon_payment_method',
      ),
    ),
    'Magento\\Quote\\Model\\PaymentMethodManagement_getList___self' => 
    array (
      2 => 'paymentMethodManagementPlugin',
    ),
    'Magento\\Quote\\Model\\PaymentMethodManagement_getList_paymentMethodManagementPlugin' => 
    array (
      2 => 'paymentMethodManagementPermissionPlugin',
    ),
    'Magento\\Quote\\Model\\PaymentMethodManagement_set___self' => 
    array (
      4 => 
      array (
        0 => 'confirm_order_reference_on_payment_details_save',
      ),
    ),
    'Magento\\Framework\\Webapi\\ErrorProcessor_maskException___self' => 
    array (
      1 => 
      array (
        0 => 'amazon_payment_webapi_error_processor',
      ),
    ),
    'Magento\\Newsletter\\Controller\\Subscriber_execute___self' => 
    array (
      1 => 
      array (
        0 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Newsletter\\Controller\\Subscriber_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\Newsletter\\Controller\\Subscriber_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'log',
      ),
    ),
    'Magento\\Newsletter\\Controller\\Subscriber\\NewAction_execute___self' => 
    array (
      1 => 
      array (
        0 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Newsletter\\Controller\\Subscriber\\NewAction_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
      4 => 
      array (
        0 => 'ddg_newsletter_email_capture',
      ),
    ),
    'Magento\\Newsletter\\Controller\\Subscriber\\NewAction_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'log',
      ),
    ),
    'Magento\\Customer\\Model\\EmailNotificationInterface_newAccount___self' => 
    array (
      2 => 'ddg_customer_email_disabler',
    ),
    'Magento\\Reports\\Model\\ResourceModel\\Product\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Reports\\Model\\ResourceModel\\Product\\Collection_load___self' => 
    array (
      1 => 
      array (
        0 => 'joinProductsWhenFlatEnabled',
      ),
    ),
    'Magento\\Reports\\Model\\ResourceModel\\Product\\Collection_joinAttribute___self' => 
    array (
      1 => 
      array (
        0 => 'joinAttribute',
      ),
    ),
    'Magento\\Reports\\Model\\ResourceModel\\Product\\Collection_addViewsCount___self' => 
    array (
      2 => 'ddg_reports_product_collection',
    ),
    'Magento\\Framework\\Mail\\Template\\TransportBuilder_setTemplateOptions___self' => 
    array (
      1 => 
      array (
        0 => 'Ddg_TransportBuilderPlugin',
        1 => 'mageplaza_mail_template_transport_builder',
      ),
    ),
    'Magento\\Framework\\Mail\\Template\\TransportBuilder_setTemplateIdentifier___self' => 
    array (
      1 => 
      array (
        0 => 'Ddg_TransportBuilderPlugin',
      ),
    ),
    'Magento\\Framework\\Mail\\Template\\TransportBuilder_setFrom___self' => 
    array (
      1 => 
      array (
        0 => 'mageplaza_mail_template_transport_builder',
      ),
    ),
    'Magento\\Framework\\Mail\\MessageInterface_setBody___self' => 
    array (
      1 => 
      array (
        0 => 'dotmailer_message_plugin',
      ),
    ),
    'Magento\\Newsletter\\Controller\\Manage_execute___self' => 
    array (
      1 => 
      array (
        0 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Newsletter\\Controller\\Manage_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
    ),
    'Magento\\Newsletter\\Controller\\Manage_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'log',
      ),
    ),
    'Magento\\Newsletter\\Controller\\Manage\\Index_execute___self' => 
    array (
      1 => 
      array (
        0 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Newsletter\\Controller\\Manage\\Index_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
      2 => 'dotmailer_newsletter_plugin',
    ),
    'Magento\\Newsletter\\Controller\\Manage\\Index_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'log',
      ),
    ),
    'Magento\\UrlRewrite\\Controller\\Adminhtml\\Url\\Rewrite_execute___self' => 
    array (
      1 => 
      array (
        0 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\UrlRewrite\\Controller\\Adminhtml\\Url\\Rewrite_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'themeRegistrationFromFilesystem',
      ),
    ),
    'Magento\\UrlRewrite\\Controller\\Adminhtml\\Url\\Rewrite_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'adminMassactionKey',
        1 => 'log',
      ),
      2 => 'adminAuthentication',
    ),
    'Magento\\UrlRewrite\\Controller\\Adminhtml\\Url\\Rewrite_dispatch_adminAuthentication' => 
    array (
      1 => 
      array (
        0 => 'adminLoadDesign',
      ),
    ),
    'Magento\\UrlRewrite\\Controller\\Adminhtml\\Url\\Rewrite\\Save_execute___self' => 
    array (
      1 => 
      array (
        0 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\UrlRewrite\\Controller\\Adminhtml\\Url\\Rewrite\\Save_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'themeRegistrationFromFilesystem',
      ),
      4 => 
      array (
        0 => 'dotmailer_url_rewrite_save_plugin',
      ),
    ),
    'Magento\\UrlRewrite\\Controller\\Adminhtml\\Url\\Rewrite\\Save_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'adminMassactionKey',
        1 => 'log',
      ),
      2 => 'adminAuthentication',
    ),
    'Magento\\UrlRewrite\\Controller\\Adminhtml\\Url\\Rewrite\\Save_dispatch_adminAuthentication' => 
    array (
      1 => 
      array (
        0 => 'adminLoadDesign',
      ),
    ),
    'Magento\\SalesRule\\Api\\CouponRepositoryInterface_getById___self' => 
    array (
      4 => 
      array (
        0 => 'coupon_plugin',
      ),
    ),
    'Magento\\SalesRule\\Api\\CouponRepositoryInterface_save___self' => 
    array (
      4 => 
      array (
        0 => 'coupon_plugin',
      ),
    ),
    'Magento\\SalesRule\\Model\\ResourceModel\\Coupon\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\SalesRule\\Model\\ResourceModel\\Coupon\\Collection_loadWithFilter___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\SalesRule\\Model\\ResourceModel\\Coupon\\Collection_getSelectCountSql___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\SalesRule\\Model\\ResourceModel\\Coupon\\Collection_addRuleToFilter___self' => 
    array (
      4 => 
      array (
        0 => 'ddg_generated_for_email_plugin',
      ),
    ),
    'Magento\\SalesRule\\Model\\Utility_canProcessRule___self' => 
    array (
      4 => 
      array (
        0 => 'ddg_coupon_expired_plugin',
      ),
    ),
    'Dotdigitalgroup\\Email\\Controller\\Ajax\\Emailcapture_execute___self' => 
    array (
      1 => 
      array (
        0 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Dotdigitalgroup\\Email\\Controller\\Ajax\\Emailcapture_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
      ),
      4 => 
      array (
        0 => 'ddg_chat_emailcapture_plugin',
      ),
    ),
    'Dotdigitalgroup\\Email\\Controller\\Ajax\\Emailcapture_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'log',
      ),
    ),
    'Dotdigitalgroup\\Email\\Model\\Connector\\Datafield_getContactDatafields___self' => 
    array (
      1 => 
      array (
        0 => 'ddg_b2b_data_field_plugin',
        1 => 'ddg_enterprise_data_field_plugin',
      ),
    ),
    'Dotdigitalgroup\\Email\\Model\\Apiconnector\\CustomerDataFieldProvider_getAdditionalDataFields___self' => 
    array (
      4 => 
      array (
        0 => 'ddg_b2b_customer_datafield_provider_plugin',
        1 => 'ddg_enterprise_data_fields_plugin',
      ),
    ),
    'Dotdigitalgroup\\Email\\Model\\Apiconnector\\Customer_setContactData___self' => 
    array (
      1 => 
      array (
        0 => 'ddg_b2b_customer_plugin',
        1 => 'ddg_enterprise_customer_plugin',
      ),
    ),
    'Dotdigitalgroup\\Email\\Model\\Sync\\Catalog\\StoreCatalogSyncer_syncByStore___self' => 
    array (
      4 => 
      array (
        0 => 'ddg_b2b_store_catalog_syncer_plugin',
      ),
    ),
    'Dotdigitalgroup\\Email\\Model\\Product\\TierPriceFinder_getTierPrices___self' => 
    array (
      2 => 'ddg_b2b_price_finder_plugin',
    ),
    'Magento\\SharedCatalog\\Model\\ResourceModel\\ProductItem\\Price\\PriceProcessor_createPricesUpdate___self' => 
    array (
      4 => 
      array (
        0 => 'ddg_b2b_shared_catalog_price_processor_plugin',
      ),
    ),
    'Magento\\SharedCatalog\\Model\\ResourceModel\\ProductItem\\Price\\PriceProcessor_createPricesDelete___self' => 
    array (
      4 => 
      array (
        0 => 'ddg_b2b_shared_catalog_price_processor_plugin',
      ),
    ),
    'Magento\\SharedCatalog\\Model\\ResourceModel\\ProductItem\\Price\\Consumer_processOperations___self' => 
    array (
      4 => 
      array (
        0 => 'ddg_b2b_shared_catalog_price_consumer_plugin',
      ),
    ),
    'Magento\\SharedCatalog\\Controller\\Adminhtml\\SharedCatalog\\Configure\\Save_execute___self' => 
    array (
      1 => 
      array (
        0 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\SharedCatalog\\Controller\\Adminhtml\\SharedCatalog\\Configure\\Save_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'themeRegistrationFromFilesystem',
        3 => 'ddg_b2b_shared_catalog_save_configuration_plugin',
      ),
      4 => 
      array (
        0 => 'ddg_b2b_shared_catalog_save_configuration_plugin',
      ),
    ),
    'Magento\\SharedCatalog\\Controller\\Adminhtml\\SharedCatalog\\Configure\\Save_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'adminMassactionKey',
        1 => 'log',
      ),
      2 => 'adminAuthentication',
    ),
    'Magento\\SharedCatalog\\Controller\\Adminhtml\\SharedCatalog\\Configure\\Save_dispatch_adminAuthentication' => 
    array (
      1 => 
      array (
        0 => 'adminLoadDesign',
      ),
    ),
    'Dotdigitalgroup\\Email\\Setup\\Install\\DataMigrationTypeProvider_getTypes___self' => 
    array (
      4 => 
      array (
        0 => 'ddg_b2b_data_migration_type_provider_plugin',
      ),
    ),
    'Dotdigitalgroup\\Email\\Console\\Command\\Provider\\SyncProvider_getAvailableSyncs___self' => 
    array (
      1 => 
      array (
        0 => 'ddg_b2b_sync_provider_plugin',
      ),
    ),
    'Magento\\SharedCatalog\\Model\\SharedCatalogBuilder_build___self' => 
    array (
      4 => 
      array (
        0 => 'ddg_b2b_shared_catalog_builder_plugin',
      ),
    ),
    'Magento\\SharedCatalog\\Controller\\Adminhtml\\AbstractJsonAction_execute___self' => 
    array (
      1 => 
      array (
        0 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\SharedCatalog\\Controller\\Adminhtml\\AbstractJsonAction_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'themeRegistrationFromFilesystem',
      ),
    ),
    'Magento\\SharedCatalog\\Controller\\Adminhtml\\AbstractJsonAction_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'adminMassactionKey',
        1 => 'log',
      ),
      2 => 'adminAuthentication',
    ),
    'Magento\\SharedCatalog\\Controller\\Adminhtml\\AbstractJsonAction_dispatch_adminAuthentication' => 
    array (
      1 => 
      array (
        0 => 'adminLoadDesign',
      ),
    ),
    'Magento\\SharedCatalog\\Controller\\Adminhtml\\SharedCatalog\\Company\\Assign_execute___self' => 
    array (
      1 => 
      array (
        0 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\SharedCatalog\\Controller\\Adminhtml\\SharedCatalog\\Company\\Assign_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'themeRegistrationFromFilesystem',
      ),
      4 => 
      array (
        0 => 'ddg_b2b_shared_catalog_company_assign_plugin',
      ),
    ),
    'Magento\\SharedCatalog\\Controller\\Adminhtml\\SharedCatalog\\Company\\Assign_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'adminMassactionKey',
        1 => 'log',
      ),
      2 => 'adminAuthentication',
    ),
    'Magento\\SharedCatalog\\Controller\\Adminhtml\\SharedCatalog\\Company\\Assign_dispatch_adminAuthentication' => 
    array (
      1 => 
      array (
        0 => 'adminLoadDesign',
      ),
    ),
    'Dotdigitalgroup\\Email\\Model\\Sync\\Importer\\ImporterQueueManager_getBulkQueue___self' => 
    array (
      1 => 
      array (
        0 => 'ddg_b2b_importer_queue_manager_plugin',
      ),
    ),
    'Magento\\CustomerSegment\\Model\\ResourceModel\\Segment_deleteSegmentCustomers___self' => 
    array (
      1 => 
      array (
        0 => 'ddg_customer_segment_resource',
      ),
    ),
    'Magento\\CustomerSegment\\Model\\ResourceModel\\Segment_aggregateMatchedCustomers___self' => 
    array (
      4 => 
      array (
        0 => 'ddg_customer_segment_resource',
      ),
    ),
    'Magento\\Shipping\\Controller\\Adminhtml\\Order\\Shipment\\Save_execute___self' => 
    array (
      1 => 
      array (
        0 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Shipping\\Controller\\Adminhtml\\Order\\Shipment\\Save_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'themeRegistrationFromFilesystem',
      ),
      4 => 
      array (
        0 => 'ddg_new_shipment_plugin',
      ),
    ),
    'Magento\\Shipping\\Controller\\Adminhtml\\Order\\Shipment\\Save_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'adminMassactionKey',
        1 => 'log',
      ),
      2 => 'adminAuthentication',
    ),
    'Magento\\Shipping\\Controller\\Adminhtml\\Order\\Shipment\\Save_dispatch_adminAuthentication' => 
    array (
      1 => 
      array (
        0 => 'adminLoadDesign',
      ),
    ),
    'Magento\\Shipping\\Controller\\Adminhtml\\Order\\Shipment\\AddTrack_execute___self' => 
    array (
      1 => 
      array (
        0 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Shipping\\Controller\\Adminhtml\\Order\\Shipment\\AddTrack_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'themeRegistrationFromFilesystem',
      ),
      4 => 
      array (
        0 => 'ddg_update_shipment_plugin',
      ),
    ),
    'Magento\\Shipping\\Controller\\Adminhtml\\Order\\Shipment\\AddTrack_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'adminMassactionKey',
        1 => 'log',
      ),
      2 => 'adminAuthentication',
    ),
    'Magento\\Shipping\\Controller\\Adminhtml\\Order\\Shipment\\AddTrack_dispatch_adminAuthentication' => 
    array (
      1 => 
      array (
        0 => 'adminLoadDesign',
      ),
    ),
    'Dotdigitalgroup\\Email\\Model\\Cron\\Cleaner_getTablesForCleanUp___self' => 
    array (
      1 => 
      array (
        0 => 'ddg_sms_cron_cleaner_plugin',
      ),
    ),
    'Dotdigitalgroup\\Email\\Console\\Command\\Provider\\TaskProvider_getAvailableTasks___self' => 
    array (
      1 => 
      array (
        0 => 'ddg_sms_task_provider_plugin',
      ),
    ),
    'Klarna\\Core\\Helper\\KlarnaConfig_getOmBuilderType___self' => 
    array (
      4 => 
      array (
        0 => 'klarnaKpKlarnaConfig',
      ),
    ),
    'Klarna\\Core\\Model\\Checkout\\Orderline\\Collector_isKlarnaActive___self' => 
    array (
      4 => 
      array (
        0 => 'klarnaKpCollector',
      ),
    ),
    'Magento\\Payment\\Helper\\Data_getPaymentMethods___self' => 
    array (
      4 => 
      array (
        0 => 'klarnaKpPaymentData',
      ),
    ),
    'Magento\\Payment\\Helper\\Data_getMethodInstance___self' => 
    array (
      2 => 'klarnaKpPaymentData',
    ),
    'Klarna\\Core\\Model\\Config_klarnaEnabled___self' => 
    array (
      4 => 
      array (
        0 => 'klarnaKpConfig',
      ),
    ),
    'Magento\\QuoteGraphQl\\Model\\Cart\\Payment\\AdditionalDataProviderPool_getData___self' => 
    array (
      1 => 
      array (
        0 => 'klarnaKpGraphQlAdditionalDataProviderPool',
      ),
    ),
    'Magento\\QuoteGraphQl\\Model\\Resolver\\AvailablePaymentMethods_resolve___self' => 
    array (
      4 => 
      array (
        0 => 'klarnaKpGraphQlAvailablePaymentMethods',
      ),
    ),
    'Magento\\Framework\\Mail\\Template\\TransportBuilderByStore_setFromByStore___self' => 
    array (
      1 => 
      array (
        0 => 'mpsmtp_appTransportBuilder',
      ),
    ),
    'Magento\\Framework\\View\\Asset\\Minification_getExcludes___self' => 
    array (
      4 => 
      array (
        0 => 'braintreeExcludeFromMinification',
      ),
    ),
    'Vertex\\Utility\\SoapClientFactory_create___self' => 
    array (
      4 => 
      array (
        0 => 'registerLastCreatedClient',
      ),
    ),
    'Vertex\\Utility\\SoapClientFactory_getDefaultOptions___self' => 
    array (
      4 => 
      array (
        0 => 'registerLastCreatedClient',
      ),
    ),
    'Vertex\\Utility\\ServiceActionPerformerFactory_create___self' => 
    array (
      2 => 'useObjectManager',
    ),
    'Magento\\Sales\\Api\\OrderAddressRepositoryInterface_delete___self' => 
    array (
      4 => 
      array (
        0 => 'extensionAttributeVertexVatCountryCode',
      ),
    ),
    'Magento\\Sales\\Api\\OrderAddressRepositoryInterface_deleteById___self' => 
    array (
      4 => 
      array (
        0 => 'extensionAttributeVertexVatCountryCode',
      ),
    ),
    'Magento\\Sales\\Api\\OrderAddressRepositoryInterface_get___self' => 
    array (
      4 => 
      array (
        0 => 'extensionAttributeVertexVatCountryCode',
      ),
    ),
    'Magento\\Sales\\Api\\OrderAddressRepositoryInterface_getList___self' => 
    array (
      4 => 
      array (
        0 => 'extensionAttributeVertexVatCountryCode',
      ),
    ),
    'Magento\\Sales\\Api\\OrderAddressRepositoryInterface_save___self' => 
    array (
      4 => 
      array (
        0 => 'extensionAttributeVertexVatCountryCode',
      ),
    ),
    'Magento\\Tax\\Api\\TaxCalculationInterface_calculateTax___self' => 
    array (
      2 => 'vertexTaxCalculation',
    ),
    'Magento\\Tax\\Model\\Sales\\Total\\Quote\\Tax_mapItem___self' => 
    array (
      4 => 
      array (
        0 => 'apply_tax_class_id',
      ),
      2 => 'vertexItemLevelMap',
    ),
    'Magento\\Tax\\Model\\Sales\\Total\\Quote\\Tax_mapItems___self' => 
    array (
      4 => 
      array (
        0 => 'vertexItemLevelMap',
      ),
    ),
    'Magento\\Tax\\Model\\Sales\\Total\\Quote\\Tax_getShippingDataObject___self' => 
    array (
      2 => 'vertexItemLevelMap',
    ),
    'Magento\\Tax\\Model\\Sales\\Total\\Quote\\Tax_mapAddress___self' => 
    array (
      2 => 'vertexItemLevelMap',
    ),
    'Magento\\Tax\\Model\\Sales\\Total\\Quote\\Tax_mapItemExtraTaxables___self' => 
    array (
      2 => 'vertexItemLevelMap',
    ),
    'Magento\\Tax\\Model\\Sales\\Total\\Quote\\Tax_mapQuoteExtraTaxables___self' => 
    array (
      2 => 'vertexOrderLevelMap',
    ),
    'Magento\\CatalogStaging\\Api\\ProductStagingInterface_schedule___self' => 
    array (
      4 => 
      array (
        0 => 'vertex_commodity_code_staging',
      ),
    ),
    'Magento\\CatalogStaging\\Api\\ProductStagingInterface_unschedule___self' => 
    array (
      4 => 
      array (
        0 => 'vertex_commodity_code_staging',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\ListProduct_getImage___self' => 
    array (
      1 => 
      array (
        0 => 'add_product_object_to_image_data_array',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\ListProduct_getReviewsSummaryHtml___self' => 
    array (
      2 => 'yotpo_yotpo_catalog_block_product_listproduct_plugin',
    ),
    'Magento\\Review\\Block\\Product\\ReviewRenderer_getReviewsSummaryHtml___self' => 
    array (
      2 => 'yotpo_yotpo_review_block_product_reviewrenderer_plugin',
    ),
    'Magento\\Catalog\\Block\\Product\\View\\Details_toHtml___self' => 
    array (
      1 => 
      array (
        0 => 'yotpo_yotpo_catalog_block_product_view_details_plugin',
      ),
    ),
    'Magento\\ConfigurableProduct\\Block\\DataProviders\\PermissionsData_isAllowedToManageAttributes___self' => 
    array (
      4 => 
      array (
        0 => 'admin_gws_configurable_product_permissions_data_checker',
      ),
    ),
    'Magento\\Staging\\Model\\Preview\\UrlBuilder_getPreviewUrl___self' => 
    array (
      1 => 
      array (
        0 => 'admin_gws_staging_preview_url_builder',
      ),
    ),
    'Magento\\Eav\\Model\\Adminhtml\\System\\Config\\Source\\Inputtype_toOptionArray___self' => 
    array (
      4 => 
      array (
        0 => 'process_page_builder_input_type',
      ),
    ),
    'Magento\\Eav\\Model\\Adminhtml\\System\\Config\\Source\\Inputtype_getVolatileInputTypes___self' => 
    array (
      4 => 
      array (
        0 => 'process_page_builder_input_type',
        1 => 'append_compatible_input_types',
      ),
    ),
    'Magento\\Backend\\Model\\Auth\\Session_prolong___self' => 
    array (
      2 => 'security_admin_sessions_prolong',
    ),
    'Magento\\Catalog\\Model\\Indexer\\Category\\Product\\Action\\Full_execute___self' => 
    array (
      4 => 
      array (
        0 => 'invalidate_pagecache_after_full_reindex',
      ),
    ),
    'Magento\\Eav\\Api\\AttributeSetRepositoryInterface_delete___self' => 
    array (
      4 => 
      array (
        0 => 'remove_products',
      ),
    ),
    'Magento\\Catalog\\Model\\ProductLink\\Search_prepareCollection___self' => 
    array (
      4 => 
      array (
        0 => 'processOutOfStockProducts',
      ),
    ),
    'Magento\\Customer\\Model\\Group_delete___self' => 
    array (
      4 => 
      array (
        0 => 'reindex_after_delete_customer_group',
      ),
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\Create\\Sidebar\\AbstractSidebar_getItemQty___self' => 
    array (
      2 => 'GroupedProduct',
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\Create\\Sidebar\\AbstractSidebar_isConfigurationRequired___self' => 
    array (
      2 => 'GroupedProduct',
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\Create\\Sidebar\\AbstractSidebar_getItemQty_GroupedProduct' => 
    array (
      2 => 'Bundle',
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\Create\\Sidebar\\AbstractSidebar_isConfigurationRequired_GroupedProduct' => 
    array (
      2 => 'Bundle',
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\Create\\Sidebar\\AbstractSidebar_getItemQty_Bundle' => 
    array (
      2 => 'configurable',
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\Create\\Sidebar\\AbstractSidebar_isConfigurationRequired_Bundle' => 
    array (
      2 => 'configurable',
    ),
    'Magento\\Catalog\\Block\\Adminhtml\\Product\\Attribute\\Edit\\Tab\\Front_setForm___self' => 
    array (
      1 => 
      array (
        0 => 'search_weigh',
      ),
    ),
    'Magento\\Backend\\Controller\\Adminhtml\\Auth_execute___self' => 
    array (
      1 => 
      array (
        0 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Backend\\Controller\\Adminhtml\\Auth_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'themeRegistrationFromFilesystem',
      ),
    ),
    'Magento\\Backend\\Controller\\Adminhtml\\Auth_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'adminMassactionKey',
        1 => 'log',
      ),
      2 => 'adminAuthentication',
    ),
    'Magento\\Backend\\Controller\\Adminhtml\\Auth_dispatch_adminAuthentication' => 
    array (
      1 => 
      array (
        0 => 'adminLoadDesign',
      ),
    ),
    'Magento\\Backend\\Controller\\Adminhtml\\Auth\\Login_execute___self' => 
    array (
      1 => 
      array (
        0 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Backend\\Controller\\Adminhtml\\Auth\\Login_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'themeRegistrationFromFilesystem',
        3 => 'security_login_form',
      ),
    ),
    'Magento\\Backend\\Controller\\Adminhtml\\Auth\\Login_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'adminMassactionKey',
        1 => 'log',
      ),
      2 => 'adminAuthentication',
    ),
    'Magento\\Backend\\Controller\\Adminhtml\\Auth\\Login_dispatch_adminAuthentication' => 
    array (
      1 => 
      array (
        0 => 'adminLoadDesign',
      ),
    ),
    'Magento\\User\\Model\\UserValidationRules_addUserInfoRules___self' => 
    array (
      4 => 
      array (
        0 => 'user_expiration_validator',
      ),
    ),
    'Magento\\User\\Block\\User\\Edit\\Tab\\Main_getFormHtml___self' => 
    array (
      2 => 'user_expiration_user_form_field',
    ),
    'Magento\\Catalog\\Block\\Adminhtml\\Product\\Edit\\Tab\\Attributes_setForm___self' => 
    array (
      4 => 
      array (
        0 => 'product_form_url_key_plugin',
      ),
    ),
    'Magento\\Bundle\\Block\\Adminhtml\\Catalog\\Product\\Edit\\Tab\\Attributes_setForm___self' => 
    array (
      4 => 
      array (
        0 => 'product_form_url_key_plugin',
        1 => 'bundle_msrp_plugin',
      ),
    ),
    'Magento\\Customer\\Model\\Attribute_beforeSave___self' => 
    array (
      1 => 
      array (
        0 => 'validateCustomerAddressAttribute',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Builder_build___self' => 
    array (
      4 => 
      array (
        0 => 'configurable',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Validator_validate___self' => 
    array (
      1 => 
      array (
        0 => 'configurable',
      ),
      4 => 
      array (
        0 => 'configurable',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Invoice_setTotalQty___self' => 
    array (
      1 => 
      array (
        0 => 'update_configurable_product_total_qty',
      ),
    ),
    'Magento\\Customer\\Model\\Customer\\DataProviderWithDefaultAddresses_getData___self' => 
    array (
      4 => 
      array (
        0 => 'customerDataProvider',
        1 => 'login_as_customer_customer_data_provider_plugin',
        2 => 'ShowVertexCustomerAttributes',
      ),
    ),
    'Magento\\Customer\\Model\\Customer\\DataProviderWithDefaultAddresses_getMeta___self' => 
    array (
      4 => 
      array (
        0 => 'login_as_customer_customer_data_provider_plugin',
        1 => 'ShowVertexCustomerAttributes',
      ),
    ),
    'Magento\\Framework\\View\\Element\\UiComponent\\DataProvider\\SearchResult_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Framework\\View\\Element\\UiComponent\\DataProvider\\SearchResult_loadWithFilter___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\Framework\\View\\Element\\UiComponent\\DataProvider\\SearchResult_getSelectCountSql___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\Customer\\Model\\ResourceModel\\Grid\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Customer\\Model\\ResourceModel\\Grid\\Collection_loadWithFilter___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
        1 => 'company',
      ),
    ),
    'Magento\\Customer\\Model\\ResourceModel\\Grid\\Collection_getSelectCountSql___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\Customer\\Model\\ResourceModel\\Grid\\Collection_addFieldToFilter___self' => 
    array (
      2 => 'company',
    ),
    'Magento\\Customer\\Model\\ResourceModel\\Online\\Grid\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Customer\\Model\\ResourceModel\\Online\\Grid\\Collection_loadWithFilter___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\Customer\\Model\\ResourceModel\\Online\\Grid\\Collection_getSelectCountSql___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\Customer\\Model\\ResourceModel\\Online\\Grid\\Collection_load___self' => 
    array (
      1 => 
      array (
        0 => 'onlineUserCompanyPlugin',
      ),
    ),
    'Magento\\Sales\\Model\\ResourceModel\\Order\\Grid\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Sales\\Model\\ResourceModel\\Order\\Grid\\Collection_loadWithFilter___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
        1 => 'company',
      ),
    ),
    'Magento\\Sales\\Model\\ResourceModel\\Order\\Grid\\Collection_getSelectCountSql___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
        1 => 'company',
      ),
    ),
    'Magento\\Sales\\Model\\ResourceModel\\Order\\Grid\\Collection_load___self' => 
    array (
      1 => 
      array (
        0 => 'braintreeSalesOrderGrid',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\ReservedAttributeList_isReservedAttribute___self' => 
    array (
      4 => 
      array (
        0 => 'reservedAttributeListPlugin',
      ),
    ),
    'Magento\\Cms\\Controller\\Adminhtml\\Page\\InlineEdit_execute___self' => 
    array (
      1 => 
      array (
        0 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Cms\\Controller\\Adminhtml\\Page\\InlineEdit_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'themeRegistrationFromFilesystem',
      ),
    ),
    'Magento\\Cms\\Controller\\Adminhtml\\Page\\InlineEdit_setCmsPageData___self' => 
    array (
      1 => 
      array (
        0 => 'versionscms_cms_page_inline_edit_plugin',
      ),
    ),
    'Magento\\Cms\\Controller\\Adminhtml\\Page\\InlineEdit_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'adminMassactionKey',
        1 => 'log',
      ),
      2 => 'adminAuthentication',
    ),
    'Magento\\Cms\\Controller\\Adminhtml\\Page\\InlineEdit_dispatch_adminAuthentication' => 
    array (
      1 => 
      array (
        0 => 'adminLoadDesign',
      ),
    ),
    'Magento\\Sales\\Model\\AdminOrder\\Product\\Quote\\Initializer_init___self' => 
    array (
      4 => 
      array (
        0 => 'sales_adminorder_quote_initializer_plugin',
      ),
    ),
    'Magento\\Framework\\View\\TemplateEngineFactory_create___self' => 
    array (
      4 => 
      array (
        0 => 'debug_hints',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Category_execute___self' => 
    array (
      1 => 
      array (
        0 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Category_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'themeRegistrationFromFilesystem',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Category_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'adminMassactionKey',
        1 => 'log',
      ),
      2 => 'adminAuthentication',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Category_dispatch_adminAuthentication' => 
    array (
      1 => 
      array (
        0 => 'adminLoadDesign',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Category\\Edit_execute___self' => 
    array (
      1 => 
      array (
        0 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Category\\Edit_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'themeRegistrationFromFilesystem',
        3 => 'adminhtmlCategoryEditPlugin',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Category\\Edit_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'adminMassactionKey',
        1 => 'log',
      ),
      2 => 'adminAuthentication',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Category\\Edit_dispatch_adminAuthentication' => 
    array (
      1 => 
      array (
        0 => 'adminLoadDesign',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Category\\Add_execute___self' => 
    array (
      1 => 
      array (
        0 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Category\\Add_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'themeRegistrationFromFilesystem',
        3 => 'adminhtmlCategoryAddPlugin',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Category\\Add_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'adminMassactionKey',
        1 => 'log',
      ),
      2 => 'adminAuthentication',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Category\\Add_dispatch_adminAuthentication' => 
    array (
      1 => 
      array (
        0 => 'adminLoadDesign',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Category\\Save_execute___self' => 
    array (
      1 => 
      array (
        0 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Category\\Save_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'themeRegistrationFromFilesystem',
        3 => 'adminhtmlCategorySavePlugin',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Category\\Save_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'adminMassactionKey',
        1 => 'log',
      ),
      2 => 'adminAuthentication',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Category\\Save_dispatch_adminAuthentication' => 
    array (
      1 => 
      array (
        0 => 'adminLoadDesign',
      ),
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Product\\CategoryLink_updateCategoryLinks___self' => 
    array (
      2 => 'adminhtmlRankCategoryProductPositionsPlugin',
    ),
    'Magento\\Backend\\Block\\Store\\Switcher_getHintUrl___self' => 
    array (
      4 => 
      array (
        0 => 'entrprise_store_switcher_plugin',
      ),
    ),
    'Magento\\Backend\\Block\\Store\\Switcher_getUrl___self' => 
    array (
      1 => 
      array (
        0 => 'paypal_store_switcher',
      ),
    ),
    'Magento\\Quote\\Api\\CartItemRepositoryInterface_getList___self' => 
    array (
      2 => 'CartItemRepositoryPlugin',
    ),
    'Magento\\SalesRule\\Model\\Rule\\Metadata\\ValueProvider_getMetadataValues___self' => 
    array (
      4 => 
      array (
        0 => 'valueProviderPlugin',
      ),
    ),
    'Magento\\Company\\Model\\ResourceModel\\Company\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Company\\Model\\ResourceModel\\Company\\Collection_loadWithFilter___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\Company\\Model\\ResourceModel\\Company\\Collection_getSelectCountSql___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\Company\\Model\\ResourceModel\\Company\\Grid\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Company\\Model\\ResourceModel\\Company\\Grid\\Collection_loadWithFilter___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
        1 => 'creditBalance',
      ),
    ),
    'Magento\\Company\\Model\\ResourceModel\\Company\\Grid\\Collection_getSelectCountSql___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\Company\\Model\\ResourceModel\\Company\\Grid\\Collection_load___self' => 
    array (
      1 => 
      array (
        0 => 'customerGroup',
      ),
    ),
    'Magento\\Backend\\Block\\Widget\\Grid\\Column\\Multistore_getRenderer___self' => 
    array (
      1 => 
      array (
        0 => 'AddCustomRendererTypes',
      ),
    ),
    'Magento\\CatalogPermissions\\Block\\Adminhtml\\Catalog\\Category\\Tab\\Permissions\\Row_canEditWebsites___self' => 
    array (
      4 => 
      array (
        0 => 'catalog_category_permissions_row_block_plugin',
      ),
    ),
    'Magento\\CatalogStaging\\Model\\Product\\DataProvider_getData___self' => 
    array (
      2 => 'catalogStagingDataProvider',
    ),
    'Magento\\CatalogStaging\\Model\\Product\\Identifier\\DataProvider_getData___self' => 
    array (
      2 => 'catalogStagingIdentifierDataProvider',
    ),
    'Magento\\CatalogStaging\\Model\\Category\\DataProvider_getDefaultMetaData___self' => 
    array (
      4 => 
      array (
        0 => 'set_page_layout_default_value',
      ),
    ),
    'Magento\\CatalogStaging\\Model\\Category\\DataProvider_getData___self' => 
    array (
      4 => 
      array (
        0 => 'catalogCategoryDataProviderTrimData',
      ),
      2 => 'catalogStagingCategoryDataProvider',
    ),
    'Magento\\CatalogStaging\\Model\\Category\\DataProvider_getAttributesMeta___self' => 
    array (
      4 => 
      array (
        0 => 'category_ui_form_url_key_plugin',
      ),
    ),
    'Magento\\CatalogStaging\\Model\\Category\\DataProvider_prepareMeta___self' => 
    array (
      4 => 
      array (
        0 => 'catalog_permissions_category_data_provider',
        1 => 'google_optimizer_category_data_provider',
      ),
    ),
    'Magento\\CatalogStaging\\Model\\Category\\Identifier\\DataProvider_getData___self' => 
    array (
      2 => 'catalogStagingCategoryDataProvider',
    ),
    'Magento\\Catalog\\Model\\ResourceModel\\Category\\AggregateCount_processDelete___self' => 
    array (
      2 => 'aggregateCountForCatalogStaging',
    ),
    'Magento\\Catalog\\Ui\\DataProvider\\Product\\Form\\Modifier\\Eav_setupAttributeMeta___self' => 
    array (
      4 => 
      array (
        0 => 'PricePermissions',
        1 => 'pagebuilder_product_form_eav',
      ),
    ),
    'Magento\\Catalog\\Ui\\DataProvider\\Product\\Form\\Modifier\\Eav_setupAttributeContainerMeta___self' => 
    array (
      4 => 
      array (
        0 => 'PricePermissions',
        1 => 'pagebuilder_product_form_eav',
      ),
    ),
    'Magento\\Catalog\\Ui\\DataProvider\\Product\\Form\\Modifier\\Eav_setupAttributeData___self' => 
    array (
      4 => 
      array (
        0 => 'PricePermissions',
      ),
    ),
    'Magento\\Catalog\\Helper\\Product\\Edit\\Action\\Attribute_getExcludedAttributes___self' => 
    array (
      4 => 
      array (
        0 => 'catalogHelperProductAttributePlugin',
      ),
    ),
    'Magento\\Cms\\Model\\Page\\DataProvider_prepareMeta___self' => 
    array (
      4 => 
      array (
        0 => 'google_optimizer_cms_page_data_provider',
      ),
    ),
    'Magento\\Catalog\\Ui\\DataProvider\\Product\\Form\\NewCategoryDataProvider_getMeta___self' => 
    array (
      4 => 
      array (
        0 => 'google_optimizer_product_new_category_data_provider',
      ),
    ),
    'Magento\\Sales\\Model\\Order\\Creditmemo_save___self' => 
    array (
      4 => 
      array (
        0 => 'creditmemoAfterSave',
      ),
    ),
    'Magento\\CatalogRule\\Model\\Indexer\\AbstractIndexer_executeFull___self' => 
    array (
      4 => 
      array (
        0 => 'cache_cleaner_after_reindex',
      ),
    ),
    'Magento\\CatalogRule\\Model\\Indexer\\AbstractIndexer_executeList___self' => 
    array (
      4 => 
      array (
        0 => 'cache_cleaner_after_reindex',
      ),
    ),
    'Magento\\CatalogRule\\Model\\Indexer\\AbstractIndexer_executeRow___self' => 
    array (
      4 => 
      array (
        0 => 'cache_cleaner_after_reindex',
      ),
    ),
    'Magento\\CatalogRule\\Model\\Indexer\\Product\\ProductRuleIndexer_executeFull___self' => 
    array (
      4 => 
      array (
        0 => 'cache_cleaner_after_reindex',
      ),
    ),
    'Magento\\CatalogRule\\Model\\Indexer\\Product\\ProductRuleIndexer_executeList___self' => 
    array (
      4 => 
      array (
        0 => 'cache_cleaner_after_reindex',
      ),
      2 => 'productRuleReindex',
    ),
    'Magento\\CatalogRule\\Model\\Indexer\\Product\\ProductRuleIndexer_executeRow___self' => 
    array (
      4 => 
      array (
        0 => 'cache_cleaner_after_reindex',
      ),
      2 => 'productRuleReindex',
    ),
    'Magento\\CatalogStaging\\Model\\Product\\Operation\\Update\\TemporaryUpdateProcessor_loadEntity___self' => 
    array (
      1 => 
      array (
        0 => 'flushAssociatedProductCache',
      ),
    ),
    'Magento\\CatalogStaging\\Model\\Product\\Operation\\Update\\TemporaryUpdateProcessor_buildEntity___self' => 
    array (
      1 => 
      array (
        0 => 'flushAssociatedProductCache',
      ),
    ),
    'Magento\\Bundle\\Ui\\DataProvider\\Product\\BundleDataProvider_getData___self' => 
    array (
      4 => 
      array (
        0 => 'append_quantity_per_source',
      ),
    ),
    'Magento\\Bundle\\Ui\\DataProvider\\Product\\BundleDataProvider_getMeta___self' => 
    array (
      4 => 
      array (
        0 => 'append_column_quantity_per_source',
      ),
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\Create\\Messages_toHtml___self' => 
    array (
      1 => 
      array (
        0 => 'process_error_messages',
      ),
    ),
    'Magento\\InventoryAdminUi\\Model\\Stock\\StockSourceLinkProcessor_process___self' => 
    array (
      2 => 'prevent_process_for_default_stock',
    ),
    'Magento\\InventoryAdminUi\\Ui\\DataProvider\\SourceDataProvider_getMeta___self' => 
    array (
      4 => 
      array (
        0 => 'prevent_disabling_default_source',
        1 => 'prevent_using_default_source_as_pickup_location_plugin',
      ),
    ),
    'Magento\\InventoryAdminUi\\Ui\\DataProvider\\SourceDataProvider_getData___self' => 
    array (
      4 => 
      array (
        0 => 'convert_is_pickup_location_active_boolean_to_string',
      ),
    ),
    'Magento\\ConfigurableProduct\\Block\\Adminhtml\\Product\\Steps\\Bulk_setTemplate___self' => 
    array (
      1 => 
      array (
        0 => 'adapt_configurable_wizard_bulk_block_to_msi',
      ),
    ),
    'Magento\\ConfigurableProduct\\Block\\Adminhtml\\Product\\Steps\\Summary_setTemplate___self' => 
    array (
      1 => 
      array (
        0 => 'adapt_configurable_wizard_summary_block_to_msi',
      ),
    ),
    'Magento\\ConfigurableProduct\\Block\\Adminhtml\\Product\\Edit\\Tab\\Variations\\Config\\Matrix_getProductMatrix___self' => 
    array (
      4 => 
      array (
        0 => 'add_quantity_per_source_to_variations_matrix',
      ),
    ),
    'Magento\\GroupedProduct\\Ui\\DataProvider\\Product\\GroupedProductDataProvider_getData___self' => 
    array (
      4 => 
      array (
        0 => 'append_quantity_per_source',
      ),
    ),
    'Magento\\GroupedProduct\\Ui\\DataProvider\\Product\\GroupedProductDataProvider_getMeta___self' => 
    array (
      4 => 
      array (
        0 => 'append_column_quantity_per_source',
      ),
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\View\\Info_getAddressEditLink___self' => 
    array (
      4 => 
      array (
        0 => 'hide-edit-link',
        1 => 'klarnaCoreValidationInfo',
      ),
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\Create\\Save_execute___self' => 
    array (
      1 => 
      array (
        0 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\Create\\Save_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'themeRegistrationFromFilesystem',
        3 => 'set-order-pickup-location',
      ),
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\Create\\Save_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'adminMassactionKey',
        1 => 'log',
      ),
      2 => 'adminAuthentication',
    ),
    'Magento\\Sales\\Controller\\Adminhtml\\Order\\Create\\Save_dispatch_adminAuthentication' => 
    array (
      1 => 
      array (
        0 => 'adminLoadDesign',
      ),
    ),
    'Magento\\Backend\\Block\\Widget\\ContainerInterface_canRender___self' => 
    array (
      2 => 'admin_gws',
    ),
    'Magento\\Backend\\Block\\Widget\\Container_canRender___self' => 
    array (
      2 => 'admin_gws',
    ),
    'Magento\\Backend\\Block\\Widget\\Form\\Container_canRender___self' => 
    array (
      2 => 'admin_gws',
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\View_canRender___self' => 
    array (
      2 => 'admin_gws',
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\View_addButton___self' => 
    array (
      2 => 'process_ship_button',
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\Invoice\\Create\\Form_canCreateShipment___self' => 
    array (
      4 => 
      array (
        0 => 'create_shipment_checkbox_processor',
        1 => 'disallow_create_shipment_in_multi_source_mode',
      ),
    ),
    'Magento\\Sales\\Model\\AdminOrder\\Create_setShippingAddress___self' => 
    array (
      2 => 'adapt_set_shipping_address_to_quote',
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\Create\\Form\\Address_getForm___self' => 
    array (
      4 => 
      array (
        0 => 'vertex_addressvalidation_admin_order_form',
      ),
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\Create\\Shipping\\Address_getForm___self' => 
    array (
      4 => 
      array (
        0 => 'process_shipping_address_form_fro_store_pickup',
        1 => 'vertex_addressvalidation_admin_order_form',
      ),
    ),
    'Magento\\Shipping\\Controller\\Adminhtml\\Order\\Shipment\\View_execute___self' => 
    array (
      1 => 
      array (
        0 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Shipping\\Controller\\Adminhtml\\Order\\Shipment\\View_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'themeRegistrationFromFilesystem',
      ),
      4 => 
      array (
        0 => 'shipment_tracking',
      ),
    ),
    'Magento\\Shipping\\Controller\\Adminhtml\\Order\\Shipment\\View_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'adminMassactionKey',
        1 => 'log',
      ),
      2 => 'adminAuthentication',
    ),
    'Magento\\Shipping\\Controller\\Adminhtml\\Order\\Shipment\\View_dispatch_adminAuthentication' => 
    array (
      1 => 
      array (
        0 => 'adminLoadDesign',
      ),
    ),
    'Magento\\Shipping\\Block\\Adminhtml\\View_canRender___self' => 
    array (
      2 => 'admin_gws',
    ),
    'Magento\\Shipping\\Block\\Adminhtml\\View_setLayout___self' => 
    array (
      1 => 
      array (
        0 => 'shipment_tracking_button',
      ),
    ),
    'Magento\\InventoryAdminUi\\Ui\\DataProvider\\StockDataProvider_getData___self' => 
    array (
      4 => 
      array (
        0 => 'sales_channel_data',
      ),
    ),
    'Magento\\Shipping\\Block\\Adminhtml\\Create_canRender___self' => 
    array (
      2 => 'admin_gws',
    ),
    'Magento\\Shipping\\Block\\Adminhtml\\Create_getBackUrl___self' => 
    array (
      4 => 
      array (
        0 => 'back_button_url',
      ),
    ),
    'Magento\\Backend\\Block\\Widget\\Button\\ToolbarInterface_pushButtons___self' => 
    array (
      1 => 
      array (
        0 => 'login_as_customer_button_toolbar',
      ),
    ),
    'Magento\\Customer\\Model\\Metadata\\Form_extractData___self' => 
    array (
      1 => 
      array (
        0 => 'login_as_customer_customer_data_validate_plugin',
      ),
    ),
    'Magento\\LoginAsCustomerAdminUi\\Ui\\Customer\\Component\\Button\\DataProvider_getData___self' => 
    array (
      4 => 
      array (
        0 => 'login_as_customer_button_data_provider_plugin',
      ),
    ),
    'Magento\\LoginAsCustomerAdminUi\\Ui\\Customer\\Component\\ConfirmationPopup\\Options_toOptionArray___self' => 
    array (
      4 => 
      array (
        0 => 'login_as_customer_store_options_restricted_plugin',
      ),
    ),
    'Magento\\Catalog\\Model\\ImageUploader_moveFileFromTmp___self' => 
    array (
      4 => 
      array (
        0 => 'save_category_image',
      ),
    ),
    'Magento\\Ui\\Component\\Form\\Element\\DataType\\Media\\OpenDialogUrl_get___self' => 
    array (
      4 => 
      array (
        0 => 'new_media_gallery_open_dialog_url',
      ),
    ),
    'Magento\\Framework\\File\\Uploader_save___self' => 
    array (
      4 => 
      array (
        0 => 'save_asset_image',
      ),
    ),
    'Magento\\Cms\\Block\\Adminhtml\\Wysiwyg\\Images\\Content_canRender___self' => 
    array (
      2 => 'admin_gws',
    ),
    'Magento\\Cms\\Block\\Adminhtml\\Wysiwyg\\Images\\Content_setLayout___self' => 
    array (
      1 => 
      array (
        0 => 'add_search_button',
      ),
    ),
    'Magento\\MediaGalleryUi\\Model\\GetDetailsByAssetId_execute___self' => 
    array (
      4 => 
      array (
        0 => 'add_adobe_stock_image_details_plugin',
      ),
    ),
    'Magento\\MediaGalleryUi\\Ui\\Component\\Listing\\Columns\\Source\\Options_toOptionArray___self' => 
    array (
      4 => 
      array (
        0 => 'add_adobe_stock_source_option_plugin',
      ),
    ),
    'Magento\\NegotiableQuote\\Block\\Quote\\Totals_getTotals___self' => 
    array (
      4 => 
      array (
        0 => 'show_weee_attribute',
      ),
    ),
    'Magento\\Banner\\Model\\Banner\\Validator_prepareSaveData___self' => 
    array (
      4 => 
      array (
        0 => 'prepare-save-data',
      ),
    ),
    'Magento\\Catalog\\Block\\Product\\ImageFactory_create___self' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Attribute\\Frontend\\Inputtype\\Presentation_getPresentationInputType___self' => 
    array (
      1 => 
      array (
        0 => 'process_page_builder',
      ),
    ),
    'Magento\\Catalog\\Model\\Product\\Attribute\\Frontend\\Inputtype\\Presentation_convertPresentationDataToInputType___self' => 
    array (
      4 => 
      array (
        0 => 'process_page_builder',
      ),
    ),
    'Magento\\Framework\\Filter\\Template_filter___self' => 
    array (
      4 => 
      array (
        0 => 'convertBackgroundImages',
      ),
    ),
    'Magento\\Store\\Api\\WebsiteRepositoryInterface_getDefault___self' => 
    array (
      2 => 'admin_gws_website_repository_plugin',
    ),
    'Magento\\CatalogEvent\\Block\\Adminhtml\\Catalog\\Category\\Edit\\AddEventButton_getButtonData___self' => 
    array (
      2 => 'admin_gws_category_event_buttons_limitation_plugin',
    ),
    'Magento\\User\\Controller\\Adminhtml\\User\\Role_execute___self' => 
    array (
      1 => 
      array (
        0 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\User\\Controller\\Adminhtml\\User\\Role_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'themeRegistrationFromFilesystem',
      ),
    ),
    'Magento\\User\\Controller\\Adminhtml\\User\\Role_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'adminMassactionKey',
        1 => 'log',
      ),
      2 => 'adminAuthentication',
    ),
    'Magento\\User\\Controller\\Adminhtml\\User\\Role_dispatch_adminAuthentication' => 
    array (
      1 => 
      array (
        0 => 'adminLoadDesign',
      ),
    ),
    'Magento\\User\\Controller\\Adminhtml\\User\\Role\\SaveRole_execute___self' => 
    array (
      1 => 
      array (
        0 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\User\\Controller\\Adminhtml\\User\\Role\\SaveRole_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'themeRegistrationFromFilesystem',
      ),
      4 => 
      array (
        0 => 'admin_gws_save_role',
      ),
    ),
    'Magento\\User\\Controller\\Adminhtml\\User\\Role\\SaveRole_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'adminMassactionKey',
        1 => 'log',
      ),
      2 => 'adminAuthentication',
    ),
    'Magento\\User\\Controller\\Adminhtml\\User\\Role\\SaveRole_dispatch_adminAuthentication' => 
    array (
      1 => 
      array (
        0 => 'adminLoadDesign',
      ),
    ),
    'Magento\\Catalog\\Ui\\Component\\Product\\MassAction_isActionAllowed___self' => 
    array (
      4 => 
      array (
        0 => 'admin_gws_massaction',
      ),
    ),
    'Magento\\Catalog\\Block\\Adminhtml\\Product\\Edit\\Button\\AddAttribute_getButtonData___self' => 
    array (
      4 => 
      array (
        0 => 'admin_gws_add_attribute',
      ),
    ),
    'Magento\\Catalog\\Ui\\Component\\Listing\\Columns\\ProductActions_prepareDataSource___self' => 
    array (
      4 => 
      array (
        0 => 'admin_gws_product_link',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product_execute___self' => 
    array (
      1 => 
      array (
        0 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'themeRegistrationFromFilesystem',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'adminMassactionKey',
        1 => 'log',
      ),
      2 => 'adminAuthentication',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product_dispatch_adminAuthentication' => 
    array (
      1 => 
      array (
        0 => 'adminLoadDesign',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Edit_execute___self' => 
    array (
      1 => 
      array (
        0 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Edit_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'themeRegistrationFromFilesystem',
      ),
      4 => 
      array (
        0 => 'admin_gws_store_switcher',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Edit_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'adminMassactionKey',
        1 => 'log',
      ),
      2 => 'adminAuthentication',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Edit_dispatch_adminAuthentication' => 
    array (
      1 => 
      array (
        0 => 'adminLoadDesign',
      ),
    ),
    'Magento\\Store\\Model\\StoreManagerInterface_getStores___self' => 
    array (
      4 => 
      array (
        0 => 'store_filter',
      ),
    ),
    'Magento\\Store\\Model\\StoreManagerInterface_getGroups___self' => 
    array (
      4 => 
      array (
        0 => 'store_filter',
      ),
    ),
    'Magento\\Store\\Model\\StoreManagerInterface_getWebsites___self' => 
    array (
      4 => 
      array (
        0 => 'store_filter',
      ),
    ),
    'Magento\\Store\\Model\\StoreManagerInterface_getDefaultStoreView___self' => 
    array (
      4 => 
      array (
        0 => 'store_filter',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute\\Edit_execute___self' => 
    array (
      1 => 
      array (
        0 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute\\Edit_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'themeRegistrationFromFilesystem',
      ),
      4 => 
      array (
        0 => 'admin_gws_store_switcher_updater',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute\\Edit_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'adminMassactionKey',
        1 => 'log',
      ),
      2 => 'adminAuthentication',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Action\\Attribute\\Edit_dispatch_adminAuthentication' => 
    array (
      1 => 
      array (
        0 => 'adminLoadDesign',
      ),
    ),
    'Magento\\Catalog\\Block\\Adminhtml\\Product\\Edit\\Action\\Attribute_getSaveUrl___self' => 
    array (
      4 => 
      array (
        0 => 'admin_gws_attributes_block',
      ),
    ),
    'Magento\\SalesRule\\Model\\ResourceModel\\Rule\\Quote\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\SalesRule\\Model\\ResourceModel\\Rule\\Quote\\Collection_loadWithFilter___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\SalesRule\\Model\\ResourceModel\\Rule\\Quote\\Collection_getSelectCountSql___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
        1 => 'quote_rule_collection_size_limiter',
      ),
    ),
    'Magento\\SalesRule\\Model\\ResourceModel\\Rule\\Quote\\Collection_setValidationFilter___self' => 
    array (
      1 => 
      array (
        0 => 'beforeSetValidationFilter',
      ),
      2 => 'aroundSetValidationFilter',
    ),
    'Magento\\CatalogRule\\Model\\ResourceModel\\Rule\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\CatalogRule\\Model\\ResourceModel\\Rule\\Collection_loadWithFilter___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\CatalogRule\\Model\\ResourceModel\\Rule\\Collection_getSelectCountSql___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\CatalogRule\\Model\\ResourceModel\\Grid\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\CatalogRule\\Model\\ResourceModel\\Grid\\Collection_loadWithFilter___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\CatalogRule\\Model\\ResourceModel\\Grid\\Collection_getSelectCountSql___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
        1 => 'catalog_rule_collection_size_limiter',
      ),
    ),
    'Magento\\CustomerSegment\\Model\\ResourceModel\\Segment\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\CustomerSegment\\Model\\ResourceModel\\Segment\\Collection_loadWithFilter___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\CustomerSegment\\Model\\ResourceModel\\Segment\\Collection_getSelectCountSql___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\CustomerSegment\\Model\\ResourceModel\\Grid\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\CustomerSegment\\Model\\ResourceModel\\Grid\\Collection_loadWithFilter___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\CustomerSegment\\Model\\ResourceModel\\Grid\\Collection_getSelectCountSql___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
        1 => 'customer_segment_collection_size_limiter',
      ),
    ),
    'Magento\\Reminder\\Model\\ResourceModel\\Rule\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Reminder\\Model\\ResourceModel\\Rule\\Collection_loadWithFilter___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\Reminder\\Model\\ResourceModel\\Rule\\Collection_getSelectCountSql___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\Reminder\\Model\\ResourceModel\\Reminder\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Reminder\\Model\\ResourceModel\\Reminder\\Collection_loadWithFilter___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\Reminder\\Model\\ResourceModel\\Reminder\\Collection_getSelectCountSql___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
        1 => 'reminder_collection_size_limiter',
      ),
    ),
    'Magento\\Authorization\\Model\\ResourceModel\\Role\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Authorization\\Model\\ResourceModel\\Role\\Collection_loadWithFilter___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\Authorization\\Model\\ResourceModel\\Role\\Collection_getSelectCountSql___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\Authorization\\Model\\ResourceModel\\Role\\Grid\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Authorization\\Model\\ResourceModel\\Role\\Grid\\Collection_loadWithFilter___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\Authorization\\Model\\ResourceModel\\Role\\Grid\\Collection_getSelectCountSql___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
        1 => 'user_role_collection_size_limiter',
      ),
    ),
    'Magento\\Review\\Model\\ResourceModel\\Rating\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Review\\Model\\ResourceModel\\Rating\\Collection_loadWithFilter___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\Review\\Model\\ResourceModel\\Rating\\Collection_getSelectCountSql___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\Review\\Model\\ResourceModel\\Rating\\Grid\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\Review\\Model\\ResourceModel\\Rating\\Grid\\Collection_loadWithFilter___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\Review\\Model\\ResourceModel\\Rating\\Grid\\Collection_getSelectCountSql___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
        1 => 'rating_collection_size_limiter',
      ),
    ),
    'Magento\\VisualMerchandiser\\Block\\Adminhtml\\Category\\Merchandiser_toHtml___self' => 
    array (
      1 => 
      array (
        0 => 'admin_gws_category_products_block',
      ),
    ),
    'Magento\\VisualMerchandiser\\Block\\Adminhtml\\Category\\Merchandiser\\Grid_addColumn___self' => 
    array (
      4 => 
      array (
        0 => 'admin_gws_category_products_grid',
      ),
    ),
    'Magento\\User\\Model\\ResourceModel\\User\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\User\\Model\\ResourceModel\\User\\Collection_loadWithFilter___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\User\\Model\\ResourceModel\\User\\Collection_getSelectCountSql___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
        1 => 'admin_user_collection_size_limiter',
      ),
    ),
    'Magento\\Backend\\Block\\Widget\\Grid\\Container_canRender___self' => 
    array (
      2 => 'admin_gws',
    ),
    'Magento\\Review\\Block\\Adminhtml\\Rating_canRender___self' => 
    array (
      2 => 'admin_gws',
    ),
    'Magento\\Review\\Block\\Adminhtml\\Rating_setLayout___self' => 
    array (
      4 => 
      array (
        0 => 'rating_remove_add_button',
      ),
    ),
    'Magento\\Catalog\\Block\\Adminhtml\\Product\\Attribute\\Set\\Main_setLayout___self' => 
    array (
      4 => 
      array (
        0 => 'product_attribute_set_remove_edit_buttons_plugin',
      ),
    ),
    'Magento\\Catalog\\Block\\Adminhtml\\Product\\Attribute\\Set\\Toolbar\\Main_setLayout___self' => 
    array (
      4 => 
      array (
        0 => 'product_attribute_set_remove_add_button_plugin',
      ),
    ),
    'Magento\\CustomerCustomAttributes\\Block\\Adminhtml\\Customer\\Attribute\\Edit_canRender___self' => 
    array (
      2 => 'admin_gws',
    ),
    'Magento\\CustomerCustomAttributes\\Block\\Adminhtml\\Customer\\Attribute\\Edit_setLayout___self' => 
    array (
      4 => 
      array (
        0 => 'customer_attribute_edit_remove_buttons',
      ),
    ),
    'Magento\\CustomerCustomAttributes\\Block\\Adminhtml\\Customer\\Address\\Attribute\\Edit_canRender___self' => 
    array (
      2 => 'admin_gws',
    ),
    'Magento\\CustomerCustomAttributes\\Block\\Adminhtml\\Customer\\Address\\Attribute\\Edit_setLayout___self' => 
    array (
      4 => 
      array (
        0 => 'customer_address_attribute_edit_remove_buttons',
      ),
    ),
    'Magento\\Rma\\Block\\Adminhtml\\Rma\\Item\\Attribute\\Edit_canRender___self' => 
    array (
      2 => 'admin_gws',
    ),
    'Magento\\Rma\\Block\\Adminhtml\\Rma\\Item\\Attribute\\Edit_setLayout___self' => 
    array (
      4 => 
      array (
        0 => 'returns_attribute_edit_remove_buttons',
      ),
    ),
    'Magento\\Config\\Model\\Config\\Structure_getElementByPathParts___self' => 
    array (
      2 => 'paypal_system_configuration',
    ),
    'Magento\\Config\\Model\\Config\\Structure\\Element\\Field_getConfigPath___self' => 
    array (
      4 => 
      array (
        0 => 'paypal_system_configuration_field',
      ),
    ),
    'Magento\\ConfigurableProduct\\Block\\Adminhtml\\Product\\Edit\\Tab\\Variations\\Config_toHtml___self' => 
    array (
      1 => 
      array (
        0 => 'Config',
      ),
    ),
    'Magento\\CatalogRule\\Block\\Adminhtml\\Promo\\Catalog_canRender___self' => 
    array (
      2 => 'admin_gws',
    ),
    'Magento\\CatalogRule\\Block\\Adminhtml\\Promo\\Catalog_canRender_admin_gws' => 
    array (
      4 => 
      array (
        0 => 'promotion_permission',
      ),
      1 => 
      array (
        0 => 'disable_apply_rules',
      ),
    ),
    'Magento\\CatalogRule\\Block\\Adminhtml\\Edit\\GenericButton_canRender___self' => 
    array (
      4 => 
      array (
        0 => 'promotion_permission',
      ),
    ),
    'Magento\\SalesRule\\Block\\Adminhtml\\Promo\\Quote_canRender___self' => 
    array (
      2 => 'admin_gws',
    ),
    'Magento\\SalesRule\\Block\\Adminhtml\\Promo\\Quote_canRender_admin_gws' => 
    array (
      4 => 
      array (
        0 => 'promotion_permission',
      ),
    ),
    'Magento\\SalesRule\\Block\\Adminhtml\\Promo\\Quote\\Edit\\GenericButton_canRender___self' => 
    array (
      4 => 
      array (
        0 => 'promotion_permission',
      ),
    ),
    'Magento\\Reminder\\Block\\Adminhtml\\Reminder_canRender___self' => 
    array (
      2 => 'admin_gws',
    ),
    'Magento\\Reminder\\Block\\Adminhtml\\Reminder_canRender_admin_gws' => 
    array (
      4 => 
      array (
        0 => 'promotion_permission',
      ),
    ),
    'Magento\\Reminder\\Block\\Adminhtml\\Reminder\\Edit_canRender___self' => 
    array (
      2 => 'admin_gws',
    ),
    'Magento\\Reminder\\Block\\Adminhtml\\Reminder\\Edit_canRender_admin_gws' => 
    array (
      4 => 
      array (
        0 => 'promotion_permission',
      ),
    ),
    'Magento\\Rss\\Controller\\Adminhtml\\Feed_execute___self' => 
    array (
      1 => 
      array (
        0 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Rss\\Controller\\Adminhtml\\Feed_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'themeRegistrationFromFilesystem',
      ),
    ),
    'Magento\\Rss\\Controller\\Adminhtml\\Feed_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'adminMassactionKey',
        1 => 'log',
      ),
      2 => 'adminAuthentication',
    ),
    'Magento\\Rss\\Controller\\Adminhtml\\Feed_dispatch_adminAuthentication' => 
    array (
      1 => 
      array (
        0 => 'adminLoadDesign',
      ),
    ),
    'Magento\\Rss\\Controller\\Adminhtml\\Feed\\Index_execute___self' => 
    array (
      1 => 
      array (
        0 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Rss\\Controller\\Adminhtml\\Feed\\Index_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'themeRegistrationFromFilesystem',
      ),
    ),
    'Magento\\Rss\\Controller\\Adminhtml\\Feed\\Index_dispatch___self' => 
    array (
      2 => 'adminAuthentication',
    ),
    'Magento\\Rss\\Controller\\Adminhtml\\Feed\\Index_dispatch_adminAuthentication' => 
    array (
      1 => 
      array (
        0 => 'adminMassactionKey',
        1 => 'log',
        2 => 'adminLoadDesign',
      ),
    ),
    'Magento\\SalesRuleStaging\\Model\\Rule\\FormDataProvider_getData___self' => 
    array (
      2 => 'salesRuleStagingFormDataProvider',
    ),
    'Magento\\SalesRuleStaging\\Model\\Rule\\Identifier\\DataProvider_getData___self' => 
    array (
      2 => 'salesRuleStagingPageDataProvider',
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\View\\Tab\\Invoices_canShowTab___self' => 
    array (
      4 => 
      array (
        0 => 'invoices_show_tab',
      ),
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\View\\Tab\\Creditmemos_canShowTab___self' => 
    array (
      4 => 
      array (
        0 => 'creditmemos_show_tab',
      ),
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\View\\Tab\\Shipments_canShowTab___self' => 
    array (
      4 => 
      array (
        0 => 'shipments_show_tab',
      ),
    ),
    'Magento\\CatalogRuleStaging\\Model\\Rule\\DataProvider_getData___self' => 
    array (
      2 => 'catalogRuleStagingDataProvider',
    ),
    'Magento\\CatalogRuleStaging\\Model\\Rule\\Identifier\\DataProvider_getData___self' => 
    array (
      2 => 'catalogRuleStagingPageDataProvider',
    ),
    'Magento\\Sales\\Block\\Adminhtml\\Order\\Creditmemo\\Create\\Items_toHtml___self' => 
    array (
      1 => 
      array (
        0 => 'refundButton',
      ),
    ),
    'Magento\\CustomerBalance\\Block\\Adminhtml\\Sales\\Order\\Creditmemo\\Controls_canRefundToCustomerBalance___self' => 
    array (
      4 => 
      array (
        0 => 'hideRefundToStoreCreditField',
      ),
    ),
    'Magento\\CompanyPayment\\Model\\Payment\\Checks\\CanUseForCompany_isApplicable___self' => 
    array (
      2 => 'removeCompanyCreditWhenNoCompany',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Attribute_execute___self' => 
    array (
      1 => 
      array (
        0 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Attribute_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'themeRegistrationFromFilesystem',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Attribute_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'adminMassactionKey',
        1 => 'log',
      ),
      2 => 'adminAuthentication',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Attribute_dispatch_adminAuthentication' => 
    array (
      1 => 
      array (
        0 => 'adminLoadDesign',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Attribute\\Save_execute___self' => 
    array (
      1 => 
      array (
        0 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Attribute\\Save_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'themeRegistrationFromFilesystem',
      ),
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Attribute\\Save_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'save_swatches_frontend_input',
        1 => 'adminMassactionKey',
        2 => 'log',
      ),
      2 => 'adminAuthentication',
    ),
    'Magento\\Catalog\\Controller\\Adminhtml\\Product\\Attribute\\Save_dispatch_adminAuthentication' => 
    array (
      1 => 
      array (
        0 => 'adminLoadDesign',
      ),
    ),
    'Magento\\Widget\\Model\\Widget_getPlaceholderImageUrl___self' => 
    array (
      2 => 'change_widget_placeholder',
    ),
    'Magento\\AdminNotification\\Model\\ResourceModel\\System\\Message\\Collection_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\AdminNotification\\Model\\ResourceModel\\System\\Message\\Collection_loadWithFilter___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\AdminNotification\\Model\\ResourceModel\\System\\Message\\Collection_getSelectCountSql___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\AdminNotification\\Model\\ResourceModel\\System\\Message\\Collection\\Synchronized_getCurPage___self' => 
    array (
      4 => 
      array (
        0 => 'currentPageDetection',
      ),
    ),
    'Magento\\AdminNotification\\Model\\ResourceModel\\System\\Message\\Collection\\Synchronized_loadWithFilter___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\AdminNotification\\Model\\ResourceModel\\System\\Message\\Collection\\Synchronized_getSelectCountSql___self' => 
    array (
      1 => 
      array (
        0 => 'collection_filter',
      ),
    ),
    'Magento\\AdminNotification\\Model\\ResourceModel\\System\\Message\\Collection\\Synchronized_toArray___self' => 
    array (
      4 => 
      array (
        0 => 'afterToArray',
      ),
    ),
    'Magento\\AdminNotification\\Ui\\Component\\DataProvider\\DataProvider_getMeta___self' => 
    array (
      4 => 
      array (
        0 => 'afterGetMeta',
      ),
    ),
    'Magento\\Shipping\\Block\\Adminhtml\\Order\\Packaging_isDisplayGirthValue___self' => 
    array (
      2 => 'usps',
    ),
    'Magento\\CmsStaging\\Model\\Page\\DataProvider_prepareMeta___self' => 
    array (
      4 => 
      array (
        0 => 'google_optimizer_cms_page_data_provider',
      ),
    ),
    'Magento\\CmsStaging\\Model\\Page\\DataProvider_getData___self' => 
    array (
      2 => 'cmsStagingPageDataProvider',
    ),
    'Magento\\CmsStaging\\Model\\Block\\DataProvider_getData___self' => 
    array (
      2 => 'cmsStagingBlockDataProvider',
    ),
    'Magento\\CmsStaging\\Model\\Page\\Identifier\\DataProvider_getData___self' => 
    array (
      2 => 'cmsStagingPageDataProvider',
    ),
    'Magento\\CmsStaging\\Model\\Block\\Identifier\\DataProvider_getData___self' => 
    array (
      2 => 'cmsStagingBlockDataProvider',
    ),
    'Magento\\Cms\\Controller\\Adminhtml\\Page\\Save_execute___self' => 
    array (
      1 => 
      array (
        0 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\Cms\\Controller\\Adminhtml\\Page\\Save_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'themeRegistrationFromFilesystem',
        3 => 'cmsstaging_page_save',
      ),
    ),
    'Magento\\Cms\\Controller\\Adminhtml\\Page\\Save_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'adminMassactionKey',
        1 => 'log',
      ),
      2 => 'adminAuthentication',
    ),
    'Magento\\Cms\\Controller\\Adminhtml\\Page\\Save_dispatch_adminAuthentication' => 
    array (
      1 => 
      array (
        0 => 'adminLoadDesign',
      ),
    ),
    'Magento\\CmsStaging\\Controller\\Adminhtml\\Page\\Update\\Save_execute___self' => 
    array (
      1 => 
      array (
        0 => 'eventDispatch',
      ),
      4 => 
      array (
        0 => 'eventDispatch',
      ),
      2 => 'actionFlagNoDispatch',
    ),
    'Magento\\CmsStaging\\Controller\\Adminhtml\\Page\\Update\\Save_execute_actionFlagNoDispatch' => 
    array (
      1 => 
      array (
        0 => 'designLoader',
        1 => 'customerNotification',
        2 => 'themeRegistrationFromFilesystem',
        3 => 'cmsstaging_page_update_save',
      ),
    ),
    'Magento\\CmsStaging\\Controller\\Adminhtml\\Page\\Update\\Save_dispatch___self' => 
    array (
      1 => 
      array (
        0 => 'adminMassactionKey',
        1 => 'log',
      ),
      2 => 'adminAuthentication',
    ),
    'Magento\\CmsStaging\\Controller\\Adminhtml\\Page\\Update\\Save_dispatch_adminAuthentication' => 
    array (
      1 => 
      array (
        0 => 'adminLoadDesign',
      ),
    ),
    'Magento\\Config\\Model\\Config\\Structure\\Data_merge___self' => 
    array (
      1 => 
      array (
        0 => 'mageplaza_module_activate',
      ),
    ),
    'Magento\\Backend\\Model\\Menu\\Builder\\AbstractCommand_execute___self' => 
    array (
      4 => 
      array (
        0 => 'mageplaza_move_menu',
      ),
    ),
    'Magento\\Config\\Model\\Config\\Structure\\Element\\Group_setData___self' => 
    array (
      2 => 'ConfigGroupPlugin',
    ),
    'Magento\\Customer\\Model\\Customer\\DataProvider_getData___self' => 
    array (
      4 => 
      array (
        0 => 'ShowVertexCustomerAttributes',
      ),
    ),
    'Magento\\Customer\\Model\\Customer\\DataProvider_getMeta___self' => 
    array (
      4 => 
      array (
        0 => 'ShowVertexCustomerAttributes',
      ),
    ),
    'Magento\\Backend\\Block\\Dashboard\\Grids_toHtml___self' => 
    array (
      1 => 
      array (
        0 => 'yotpo_yotpo_backend_block_dashboard_grids_plugin',
      ),
    ),
  ),
);