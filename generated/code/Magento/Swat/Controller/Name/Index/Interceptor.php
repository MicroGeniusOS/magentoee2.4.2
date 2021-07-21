<?php
namespace Magento\Swat\Controller\Name\Index;

/**
 * Interceptor class for @see \Magento\Swat\Controller\Name\Index
 */
class Interceptor extends \Magento\Swat\Controller\Name\Index implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\Encryption\UrlCoder $urlCoder, \Magento\User\Model\UserFactory $userFactory, \Magento\Swat\Model\Jwt $jwt)
    {
        $this->___init();
        parent::__construct($context, $urlCoder, $userFactory, $jwt);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        return $pluginInfo ? $this->___callPlugins('dispatch', func_get_args(), $pluginInfo) : parent::dispatch($request);
    }
}
