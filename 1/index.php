<?php
#1
class Buku
{
  public $judul_buku;
  public $pengarang;
  public $penerbit;
  public $tahun_terbit;
  public $cetakan;
}
#2
class Kendaraan
{
  public $jenis_kendaraan;
  public $jumlah_roda; 
  public $merk;
  public $bahan_bakar;
  public $harga;
  public $tahun_pembuatan;

  public function CekSubsidi()
  {
    if ($this->bahan_bakar == 'premium' && $this->tahun_pembuatan <= 2005) {
      return 'Ya';
    } else {
      return 'Tidak';
    }
  }

  #3
  public function hargaSecond()
  {
    $this->harga = 20;
    $this->tahun_pembuatan = 2011;
    if ($this->tahun_pembuatan > 2010) {
      return $this->harga - (20/100*$this->harga);
    } elseif ($this->tahun_pembuatan >= 2005 && $this->tahun_pembuatan <= 2010) {
      return $this->harga - (30/100*$this->harga);
    } elseif ($this->tahun_pembuatan < 2005) {
      return $this->harga - (40/100*$this->harga);
    }
  }
}

#4
class Player{
  public $hp = 10000;
  public $mp = 5000;
  public $weapon;
  public $armor;
  public $skill;

  public function useSkill($skillName, $mpCost)
  {
    $this->skill = $skillName;
    $this->mp = $this->mp - $mpCost;

    return "menggunakan skill $this->skill menggunakan mp sebanyak $mpCost sisa mp $this->mp";
  }

  public function takeDamage($damage){
    $this->hp = $this->hp - $damage;
    return "hp -$damage, sisa hp = $this->hp";
  }

  public function useWeapon($weapon){
    $this->weapon = $weapon;
    return "menggunakan $weapon";
  }
}
