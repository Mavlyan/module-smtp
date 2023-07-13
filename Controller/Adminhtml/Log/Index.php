<?php

/**
 * @author Mygento Team
 * @copyright 2023 Mygento (https://www.mygento.com)
 * @package Mygento_Smtp
 */

namespace Mygento\Smtp\Controller\Adminhtml\Log;

use Magento\Backend\App\Action\Context;
use Magento\Framework\App\Request\DataPersistorInterface;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\Registry;
use Magento\Framework\View\Result\PageFactory;
use Mygento\Smtp\Api\LogRepositoryInterface;
use Mygento\Smtp\Controller\Adminhtml\Log;

class Index extends Log
{
    public function __construct(
        private readonly PageFactory $resultPageFactory,
        private readonly DataPersistorInterface $dataPersistor,
        LogRepositoryInterface $repository,
        Registry $coreRegistry,
        Context $context,
    ) {
        parent::__construct($repository, $coreRegistry, $context);
    }

    /**
     * Index action
     */
    public function execute(): ResultInterface
    {
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->resultPageFactory->create();
        $resultPage
            ->setActiveMenu('Mygento_Smtp::log')
            ->getConfig()
            ->getTitle()->prepend(__('Log')->render());

        $this->dataPersistor->clear('smtp_log');

        return $resultPage;
    }
}
