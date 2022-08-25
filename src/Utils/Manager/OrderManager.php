<?php

namespace App\Utils\Manager;

use App\Entity\Order;
use Doctrine\Persistence\ObjectRepository;

class OrderManager extends AbstractBaseManager
{
    /**
     * @return ObjectRepository
     */
    public function getRepository(): ObjectRepository
    {
        return $this->entityManager->getRepository(Order::class);
    }

    /**
     * @param object $order
     */
    public function remove(object $order)
    {
        $order->setIsDeleted(true);

        $this->save($order);
    }
}