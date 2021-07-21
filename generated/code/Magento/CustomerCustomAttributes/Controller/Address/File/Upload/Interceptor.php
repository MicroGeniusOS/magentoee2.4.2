<?php
namespace Magento\CustomerCustomAttributes\Controller\Address\File\Upload;

/**
 * Interceptor class for @see \Magento\CustomerCustomAttributes\Controller\Address\File\Upload
 */
class Interceptor extends \Magento\CustomerCustomAttributes\Controller\Address\File\Upload implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Customer\Model\FileUploaderFactory $fileUploaderFactory, \Psr\Log\LoggerInterface $logger, \Magento\Customer\Model\FileProcessorFactory $fileProcessorFactory, \Magento\Framework\App\RequestInterface $request, \Magento\Framework\Controller\ResultFactory $resultFactory, \Magento\Customer\Api\AddressMetadataInterface $addressMetadataService)
    {
        $this->___init();
        parent::__construct($fileUploaderFactory, $logger, $fileProcessorFactory, $request, $resultFactory, $addressMetadataService);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }
}
