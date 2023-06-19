<?php

namespace App\Http\Livewire\Clients;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use App\Models\FingerTemplate;
use App\Models\CreateFinger;

use Illuminate\Support\Facades\Hash;


class Entollement extends Component
{

    protected $listeners = ['holaMundo'];

    public $template_image;
    public $time_template;

    public $lbl;

    public $contador;


    public function holaMundo()
    {
        // dd('Hola mundo');
        // $this->lbl = "pipo";
    }

    public function mount()
    {
        $this->contador = 0;
        $this->template_image = asset('assets/images/finger-demo.jpg');

    }

    public function demo_demo()
    {
        $this->lbl = "pipo";
    }


    public function render()
    {
        return view('livewire.clients.entollement');
    }

    function get_data()
    {
        sleep(3);
        $img = file_get_contents(storage_path('app/public/' . 'demo.jpg'));
        $filePath = storage_path('app/public/demo.jpg');

        // ? verifica el estado de los huella

        $count = $this->get_create_finger();
        dd($count);
        $this->lbl = $count;

        $this->template_image = 'data:image/jpeg;base64,' . base64_encode($img);
    }



    function finger_all()
    {
        $data = FingerTemplate::get();

        $fingers = array();

        foreach ($data as $item) {
            array_push($fingers, array("finger" => Hash::make($item->finger_print)));
        }

        return  $fingers;

    }

    function get_create_finger()
    {
        return CreateFinger::get()->count();
    }





}
