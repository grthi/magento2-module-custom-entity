<?php
/**
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this module to newer
 * versions in the future.
 *
 * @category  Smile
 * @package   Smile\CustomEntity
 * @author    Maxime Leclercq <maxime.leclercq@smile.fr>
 * @copyright 2019 Smile
 * @license   Open Software License ("OSL") v. 3.0
 */
namespace Smile\CustomEntity\Model\CustomEntity\AttributeSet;

use Smile\CustomEntity\Model\ResourceModel\CustomEntity\AttributeSet\Url as UrlResourceModel;

/**
 * Attribute set url model.
 *
 * @category Smile
 * @package  Smile\CustomEntity
 * @author   Maxime Leclercq <maxime.leclercq@smile.fr>
 */
class Url
{
    /**
     * @var UrlResourceModel
     */
    private $urlResourceModel;

    /**
     * Url constructor.
     *
     * @param UrlResourceModel $urlResourceModel Attribute set url resource model.
     */
    public function __construct(
        UrlResourceModel $urlResourceModel
    ) {
        $this->urlResourceModel = $urlResourceModel;
    }

    /**
     * Return attribute set id from url key.
     *
     * @param string $urlKey Attribute set url key.
     *
     * @return int
     * @throws \Magento\Framework\Exception\NotFoundException
     */
    public function checkIdentifier(string $urlKey): int
    {
        return $this->urlResourceModel->checkIdentifier($urlKey);
    }
}
