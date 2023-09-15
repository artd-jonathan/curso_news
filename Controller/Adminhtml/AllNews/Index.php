<?php
namespace Curso\News\Controller\Adminhtml\AllNews;

class Index extends \Magento\Backend\App\Action
{
<<<<<<< HEAD
=======
	/**
	 * @var \Magento\Framework\View\Result\PageFactory $resultPageFactory
	 */
>>>>>>> 1ef197be3156e9072b2d9044409c09aa68799bc0
	protected $resultPageFactory;

	public function __construct(
		\Magento\Backend\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $resultPageFactory
	) {
		parent::__construct($context);
		$this->resultPageFactory = $resultPageFactory;
	}
	
	/**
     * Authorization level
     *
     * @see _isAllowed()
     */
	protected function _isAllowed()
	{
		return $this->_authorization->isAllowed('Curso_News::news_allnews');
	}

	public function execute()
	{
		$resultPage = $this->resultPageFactory->create();
		$resultPage->getConfig()->getTitle()->prepend(__('All News'));
		return $resultPage;
	}
}