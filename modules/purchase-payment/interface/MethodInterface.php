<?php
/**
 * Method
 * @package purchase-payment
 * @version 0.0.1
 */

namespace PurchasePayment\Iface;


interface MethodInterface
{
    public static function create(object $purchase, float $total, string $id): ?object;

    public static function exists(object $purchase, string $id): bool;

    public static function getFee(object $purchase, string $id): float;

    public static function getInstruction(object $purchase, object $payment);

    public static function getMethods(object $purchase): ?array;

    public static function lastError(): ?array;
}
