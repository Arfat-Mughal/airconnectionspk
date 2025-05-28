<?php
// app/View/Components/VisaProducts.php
namespace App\View\Components;

use Illuminate\View\Component;

class VisaProducts extends Component
{
    public $visas;
     public $heading;
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($heading = 'Get a Tourist Visa')
    {
        $this->heading = $heading;
        $this->visas = [
            [
                'image' => 'https://cdn.travelsoft.net/site/101/pages/964b5857-cb80-4e0c-9f85-4b5b6f98791b/thumb.jpg',
                'title' => 'Thailand Tourist Visa',
                'url' => '#'
            ],
            [
                'image' => 'https://cdn.travelsoft.net/site/101/pages/29a623f0-58f9-4f21-b0e1-1f3baf6405ac/thumb.jpg',
                'title' => 'Indonesia Tourist Visa',
                'url' => '#'
            ],
            [
                'image' => 'https://cdn.travelsoft.net/site/101/pages/84247e6c-188b-4118-8380-e0be5114cd0d/thumb.jpg',
                'title' => 'Azerbaijan Tourist Visa',
                'url' => '#'
            ],
            [
                'image' => 'https://cdn.travelsoft.net/site/101/pages/470adb52-2bae-41c4-a4e9-f52b818def53/thumb.jpg',
                'title' => 'Kenya Tourist Visa',
                'url' => '#'
            ],
            [
                'image' => 'https://cdn.travelsoft.net/site/101/pages/ba54f88b-8798-4d1f-ab5c-c84ffcd37b58/thumb.jpg',
                'title' => 'Malaysia Tourist Visa',
                'url' => '#'
            ],
            [
                'image' => 'https://cdn.travelsoft.net/site/101/pages/25f137cd-f09c-43b6-bbba-d250080a9e1c/thumb.jpg',
                'title' => 'Singapore Tourist Visa',
                'url' => '#'
            ],
            [
                'image' => 'https://cdn.travelsoft.net/site/101/pages/d645fc77-7c25-45c9-ae1b-5bf042d03553/thumb.jpg',
                'title' => 'Sri Lanka Tourist Visa',
                'url' => '#'
            ],
            [
                'image' => 'https://cdn.travelsoft.net/site/101/pages/c7301a10-41fe-4078-9afc-7fc0767dce5f/thumb.jpg',
                'title' => 'Dubai Tourist Visa',
                'url' => '#'
            ]
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.visa-products');
    }
}