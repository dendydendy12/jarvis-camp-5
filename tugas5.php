<?php

class Kendaraan {
  // properti
  public $merek;
  public $warna;
  public $ban;

  // konstruktor
  public function __construct($merek, $warna, $ban) {
    $this->merek = $merek;
    $this->warna = $warna;
    $this->ban = $ban;
  }

  // method
  public function infoKendaraan() {
    echo "Kendaraan {$this->merek} ini memiliki {$this->warna} warna dan {$this->ban} ban.";
  }
}

// class baru yang mewarisi class Kendaraan
class BMW extends Kendaraan {

  // properti baru
  public $mesin;

  // konstruktor
  public function __construct($merek, $warna, $ban, $mesin) {
    // memanggil konstruktor dari class parent
    parent::__construct($merek, $warna, $ban);

    $this->mesin = $mesin;
  }

  // method
  public function infoBMW() {
    echo "Mobil BMW ini memiliki {$this->warna} , {$this->ban} ban, dan mesin {$this->mesin}.";
  }
}

// membuat object berdasarkan class BMW
$mobilBMWku = new BMW("BMW", "warna merah", 4, "turbo");

// menampilkan informasi mobil BMW
echo $mobilBMWku->infoBMW();