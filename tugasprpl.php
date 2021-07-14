<?php

// TUGAS PRPL PERTEMUAN14 
interface Shape{
    public function area();
}
//VOLUME BOLA
class Bola implements Shape{
    private $jarijaribola =20;
    public function area(){
        return 4/3 * (pi() *$this->jarijaribola*$this->jarijaribola*$this->jarijaribola ); }
}
// LUAS PERSEGI PANJANG
class PersegiPanjang implements Shape{
    private $panjang =85;
    private $lebar =200;
    public function area(){
    return $this->panjang * $this->lebar; }
}
//VOLUME KERUCUT
class Kerucut implements Shape{
    private $jarijarikerucut= 10;
    private $tinggikerucut = 10;
    public function area(){
        return 1/3 * (pi() * $this->jarijarikerucut * $this->jarijarikerucut * $this->tinggikerucut );}
}
//VOLUME KUBUS
class Kubus implements Shape{
    private $sisi = 12;
    public function area(){
        return $this->sisi * $this->sisi * $this->sisi; }
}
//KELILING LINGKARAN
class Lingkaran implements Shape{
    private $jarijarilingkaran = 8;
    public function area(){
        return 2 * (pi() * $this->jarijarilingkaran);   }
}
class AreaKalkulator {
    public function kalkulator(Shape $shapes)
    {
        $area = [];
        foreach ($shapes as $shape) {
            $area[] = $shape->area();
        }
        return array_sum($area);
    }
}
 echo "Bangun ruang : Bola<br>";
  $Bola = new Bola(20);
  echo 'Volume  Bola = '.$Bola->area() . "<br><br><br>";

  echo "Bangun ruang : Persegi Panjang<br>";
  $PersegiPanjang = new PersegiPanjang(85, 200);
  echo 'Luas Persegi Panjang = '. $PersegiPanjang->area() . "<br><br><br>";

 echo "Bangun ruang : Kerucut<br>";
  $Kerucut = new Kerucut(10, 10);
  echo 'Volume  Kerucut = '.$Kerucut->area() . "<br><br><br>";

 echo "Bangun ruang : Kubus<br>";
  $Kubus = new Kubus(12);
  echo 'Volume  Kubus = '.$Kubus->area() . "<br><br><br>";

 echo "Bangun ruang : Lingkaran<br>";
  $Lingkaran = new Lingkaran(8);
  echo 'Keliling  Lingkaran = '.$Lingkaran->area() . "<br><br><br>";


?>