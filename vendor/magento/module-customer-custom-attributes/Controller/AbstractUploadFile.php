<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\CustomerCustomAttributes\Controller;

use Magento\Framework\App\Action\HttpPostActionInterface;
use Magento\Customer\Model\FileUploader;
use Magento\Customer\Model\FileUploaderFactory;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Exception\LocalizedException;
use Psr\Log\LoggerInterface;
use Magento\Customer\Model\FileProcessorFactory;
use Magento\Framework\App\ActionInterface;
use Magento\Customer\Api\MetadataInterface;
use Magento\Framework\App\RequestInterface;

/**
 * Class for uploading files for customer or address custom attributes
 */
abstract class AbstractUploadFile implements ActionInterface, HttpPostActionInterface
{
    /**
     * @var FileUploaderFactory
     */
    private $fileUploaderFactory;

    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * @var FileProcessorFactory
     */
    private $fileProcessorFactory;

    /**
     * @var RequestInterface
     */
    private $request;

    /**
     * @var ResultFactory
     */
    private $resultFactory;

    private $metadata;

    /**
     * @param FileUploaderFactory $fileUploaderFactory
     * @param LoggerInterface $logger
     * @param FileProcessorFactory $fileProcessorFactory
     * @param RequestInterface $request
     * @param ResultFactory $resultFactory
     */
    public function __construct(
        FileUploaderFactory $fileUploaderFactory,
        LoggerInterface $logger,
        FileProcessorFactory $fileProcessorFactory,
        RequestInterface $request,
        ResultFactory $resultFactory,
        MetadataInterface $metadata
    ) {
        $this->fileUploaderFactory = $fileUploaderFactory;
        $this->logger = $logger;
        $this->fileProcessorFactory = $fileProcessorFactory;
        $this->request = $request;
        $this->resultFactory = $resultFactory;
        $this->metadata = $metadata;
    }

    /**
     * @inheritDoc
     */
    public function execute()
    {
        try {
            $requestedFiles = $this->request->getFiles();
            if (empty($requestedFiles)) {
                $result = $this->processError(__('No files for upload.'));
            } else {
                $attributeCode = key($requestedFiles->toArray());
                $attributeMetadata = $this->metadata->getAttributeMetadata($attributeCode);
                /** @var FileUploader $fileUploader */
                $fileUploader = $this->fileUploaderFactory->create(
                    [
                        'attributeMetadata' => $attributeMetadata,
                        'entityTypeCode' => $this->getEntityType(),
                        'scope' => $attributeCode,
                    ]
                );
                $isCustomer = true;

                $errors = $fileUploader->validate();
                if (true !== $errors) {
                    $errorMessage = implode('</br>', $errors);
                    $result = $this->processError(($errorMessage));
                } else {
                    $result = $fileUploader->uploadFile(false);
                    $this->moveTmpFileToSuitableFolder($result, $isCustomer);
                }
            }
        } catch (LocalizedException $e) {
            $result = $this->processError($e->getMessage(), $e->getCode());
        } catch (\Exception $e) {
            $this->logger->critical($e);
            $result = $this->processError(__('Something went wrong.'));
        }

        /** @var \Magento\Framework\Controller\Result\Json $resultJson */
        $resultJson = $this->resultFactory->create(ResultFactory::TYPE_JSON);
        $resultJson->setData($result);

        return $resultJson;
    }

    /**
     * Move file from temporary folder to media folder
     *
     * @param array $fileInfo
     */
    private function moveTmpFileToSuitableFolder(&$fileInfo)
    {
        $fileName = $fileInfo['file'];

        $fileProcessor = $this->fileProcessorFactory
            ->create(['entityTypeCode' => $this->getEntityType()]);

        $newFilePath = $fileProcessor->moveTemporaryFile($fileName);
        $fileInfo['file'] = $newFilePath;
        $fileInfo['url'] = $fileProcessor->getViewUrl(
            $newFilePath,
            'file'
        );
    }

    /**
     * Prepare result array for errors
     *
     * @param string $message
     * @param int $code
     * @return array
     */
    private function processError($message, $code = 0)
    {
        $result = [
            'error' => $message,
            'errorcode' => $code,
        ];

        return $result;
    }

    abstract protected function getEntityType(): string;
}
