<?php
namespace Magento\Framework\Stdlib\DateTime\Timezone;

/**
 * Interceptor class for @see \Magento\Framework\Stdlib\DateTime\Timezone
 */
class Interceptor extends \Magento\Framework\Stdlib\DateTime\Timezone implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\ScopeResolverInterface $scopeResolver, \Magento\Framework\Locale\ResolverInterface $localeResolver, \Magento\Framework\Stdlib\DateTime $dateTime, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, $scopeType, $defaultTimezonePath, \Magento\Framework\Stdlib\DateTime\Intl\DateFormatterFactory $dateFormatterFactory)
    {
        $this->___init();
        parent::__construct($scopeResolver, $localeResolver, $dateTime, $scopeConfig, $scopeType, $defaultTimezonePath, $dateFormatterFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function isScopeDateInInterval($scope, $dateFrom = null, $dateTo = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isScopeDateInInterval');
        return $pluginInfo ? $this->___callPlugins('isScopeDateInInterval', func_get_args(), $pluginInfo) : parent::isScopeDateInInterval($scope, $dateFrom, $dateTo);
    }
}
