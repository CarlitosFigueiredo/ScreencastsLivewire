<?php

namespace App\Livewire\Order\Index;

use App\Models\Store;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]
class Page extends Component
{
    public Store $store;
    public $orders;

    public function mount(Store $store)
    {
        $this->orders = $store->orders()->take(10)->get();
    }

    public function render()
    {
        return view('livewire.order.index.page');
    }
}
