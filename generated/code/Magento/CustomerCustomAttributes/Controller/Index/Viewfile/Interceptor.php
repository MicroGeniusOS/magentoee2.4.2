<?php
namespace Magento\CustomerCustomAttributes\Controller\Index\Viewfile;

/**
 * Interceptor class for @see \Magento\CustomerCustomAttributes\Controller\Index\Viewfile
 */
class Interceptor extends \Magento\CustomerCustomAttributes\Controller\Index\Viewfile implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Response\Http\FileFactory $fileFactory, \Magento\Framework\Url\DecoderInterface $urlDecoder, \Magento\Framework\File\Mime $mime, \Magento\Customer\Model\Session $session, \Magento\CustomerCustomAttributes\Model\Customer\Attribute\File\Download\Validator $downloadValidator, \Magento\CustomerCustomAttributes\Model\Customer\FileDownload $fileDownload, \Magento\Framework\App\RequestInterface $request, \Magento\Framework\Controller\ResultFactory $resultFactory)
    {
        $this->___init();
        parent::__construct($fileFactory, $urlDecoder, $mime, $session, $downloadValidator, $fileDownload, $request, $resultFactory);
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
