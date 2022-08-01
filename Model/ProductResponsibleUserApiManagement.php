<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Aiti\ProductResponsibleUserApi\Model;

class ProductResponsibleUserApiManagement implements \Aiti\ProductResponsibleUserApi\Api\ProductResponsibleUserApiManagementInterface
{

    /**
     * {@inheritdoc}
     */
    public function getProductResponsibleUserApi($param)
    {
        return 'hello api GET return the $param ' . $param;
    }
}

