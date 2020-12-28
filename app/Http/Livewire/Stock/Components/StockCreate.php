<?php



namespace App\Http\Livewire\Stock\Components;



use App\Models\Stock;

use Livewire\Component;

use Illuminate\Validation\Rule;



class StockCreate extends Component

{
    public $product;
    public $description;
    public $category;
    public $subcategory;
    public $available;
    public $price;


    public $display = false;

    public $options = NULL;

    protected $rules = [
        'subcategory' => 'required',
    ];

    public function updating()
    {
        $this->display = true;
    }

    public function updatedCategory()
    {
        $this->display = true;
    }

    public function store()
    {
        Stock::create([
            'product' => $this->product,
            'description' => $this->description,
            'category' => $this->category,
            'subcategory' => $this->subcategory,
            'available' => $this->available,
            'price' => $this->price,
        ]);
        $this->display = false;

        return redirect()->route('Stocks');
    }

    public function render()
    {
        if (!empty($this->category)) {
            $this->options = Stock::where('category', $this->category)->select('subcategory')->distinct()->orderBy('updated_at', 'desc')->get();
        }
        return view('livewire.stock.components.stock-create');
    }
}