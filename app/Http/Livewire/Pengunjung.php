<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Pengunjung as ModalPengunjung;
use Illuminate\Database\Eloquent\Builder;

class Pengunjung extends Component
{
    public $pengunjungs;
    public $cari;

    public function render()
    {
        if ($this->cari) {
            $this->pengunjungs = ModalPengunjung::where('cf', 'LIKE', "%$this->cari%")
                ->orWhere('fullName', 'LIKE', "%$this->cari%")
//                ->orWhereHas('fullName', function (Builder $query) {
//                    $query->where('nama_diagnosa', 'like', "%$this->cari%");
//                })
                ->orWhere('keterangan', 'LIKE', "%$this->cari%")
//                ->orWhereHas('gejala', function (Builder $query) {
//                    $query->where('nama_gejala', 'like', "%$this->cari%");
//                })
                ->get();
        } else {
            $this->pengunjungs = ModalPengunjung::all();
        }
        return view('livewire.pengunjung');
    }
}
