<?php

namespace App\Service\Cart;

use App\Repository\ProductRepository;
use Symfony\Component\HttpFoundation\RequestStack;

class CartService
{

    protected $session;
    protected $productRepository;
    public function __construct(RequestStack $requestStack, ProductRepository $productRepository)
    {
        $this->session = $requestStack->getSession();
        $this->productRepository = $productRepository;
    }

    public function getPanier(): array
    {
        return $this->session->get('panier', []);
    }


    public function add(int $id)
    {
        $panier = $this->getPanier();
        if (!empty($panier[$id])) {
            $panier[$id]++;
        } else {
            $panier[$id] = 1;
        }

        $this->session->set('panier', $panier);
    }

    public function remove(int $id)
    {
        $panier = $this->getPanier();

        if (!empty($panier[$id])) {
            unset($panier[$id]);
        }

        $this->session->set('panier', $panier);
    }

    public function getFullCart(): array
    {
        $panier = $this->getPanier();
        $panierWithData = [];

        foreach ($panier as $id => $quantity) {
            $panierWithData[] = [
                'product' => $this->productRepository->find($id),
                'quantity' => $quantity
            ];
        }

        return $panierWithData;
    }

    public function getTotal(): float
    {
        $panierWithData = $this->getFullCart();
        $total = 0;

        foreach ($panierWithData as $item) {
            $total += $item['product']->getPrice() * $item['quantity'];
        }
        return $total;
    }


    public function fullQuantity()
    {
        $panier = $this->getFullCart();

        $totalQuantity = 0;
    
        foreach ($panier as $item) {
            if (isset($item['quantity'])) {
                $totalQuantity += $item['quantity'];
            }
        }
    
        return $totalQuantity;
    }
}
