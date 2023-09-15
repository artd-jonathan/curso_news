<?php
<<<<<<< HEAD

=======
>>>>>>> 1ef197be3156e9072b2d9044409c09aa68799bc0
namespace Curso\News\Model\Allnews\Source;

use Magento\Framework\Data\OptionSourceInterface;

class Status implements OptionSourceInterface
{
    protected $allNews;

    public function __construct(\Curso\News\Model\Allnews $allNews)
    {
        $this->allNews = $allNews;
    }
    /**
     *
     * @return array
     */
    public function toOptionArray()
    {
        $availableOptions = $this->allNews->getAvailableStatuses();
        $options = [];
        foreach ($availableOptions as $key => $value) {
            $options[] = [
                'label' => $value,
                'value' => $key,
            ];
        }
        return $options;
    }
}
