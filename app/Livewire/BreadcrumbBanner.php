<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;
use Illuminate\Support\Str;

class BreadcrumbBanner extends Component
{
    public $productId;
    public $productName;

    public function mount($productId = null)
    {
        $this->productId = $productId;

        if ($productId) {
            $product = Product::find($productId);

            if ($product) {
                $this->productName = $product->name;
            } else {
                $this->productName = 'Product not found';
            }
        } else {
            $this->productName = 'Page Title';
        }
    }

    public function render()
    {
        return view('livewire.breadcrumb-banner');
    }
}
