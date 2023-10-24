<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Personnel;

class SearchBar extends Component
{
    public function render()
    {
        public $recherche = '';

        $results = Personnel::where('nom', 'like', "%$this->recherche%")
        ->orWhere('Matricule', 'like', "%$this->recherche%")
        ->orWhere('poste', 'like', "%$this->recherche%")
        ->paginate(6);
        return view('Admin.Personnel.recherche', ['results' => $results]);
    }
}
