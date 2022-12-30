<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalController extends Controller
{
    #Membuat Property Animals (array)
    public $animals = ['Kucing', 'Ayam', 'Ikan'];
    

    #Menambahkan nama hewan menggunakn method foreach
    public function index() {
        $no = 1;
        echo "Menampilkan Data Hewan <br>";
        foreach($this->animals as $animal){
            echo $no++ . ' . ' . $animal. '<br>';
        }
    }


    
    public function store(Request $request){
        array_push($this->animals, $request->nama);
        echo "Menambahkan Hewan Baru <br>";
        $this->index();
    }


    #Mengupdate nama hewan menggunakn method array_push
    public function update(Request $request, $id){
        $this->animals[$id] = $request->nama;
        echo "Mengupdate nama hewan id $id <br>";
        $this->index();
    }


    #Menghapus data hewan menggunakn method array_splice atau unset
    public function destroy($id) {
        unset($this->animals[$id]);
        echo "Menghapus Data hewan id $id ";
        $this->index();
    }
}
