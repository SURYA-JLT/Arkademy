<?php
class Biodata{
	public function nama($nama,$umur){
         $this->data['name'] = $nama;
         $this->data['age'] = $umur;
 		return $this;
     }
	public function alamat($alamat){
 		$this->data['address'] = $alamat;
 		return $this;
     }
	public function hobi($hobi = array()){
 		$this->data['hobbies'] = $hobi;
 		return $this;
     }
	public function menikah($menikah){
 		$this->data['is_married'] = $menikah;
 		return $this;
     }
	public function sekolah($sekolah = array()){
 		$this->data['list_school'] = $sekolah;
 		return $this;
     }
	public function kemampuan($kemampuan = array()){
 		$this->data['skills'] = $kemampuan;
 		return $this;
     }
	public function tertarik($tertarik){
        $this->data['interest_in_coding'] = $tertarik;
        return $this;
    }
	public function konjson(){
        return json_encode($this->data, JSON_PRETTY_PRINT);
    }
}
$biodata 	= new Biodata();
$nama		= "SURYA RAHMANDA";
$umur       =  24;
$alamat		= "Jl. DWIJAYA 4 NO.90 RT.010 RW.001 JAKARTA SELATAN
$sekolah	= [
				"highSchool" 	=> "SMK 1 SOLOK-SELATAN",
				"university" 	=> "UNIVERSITAS PUTRA INDONESIA YPTK PADANG"
			  ];
$kemampuan	= ['PHP','JAVA','MYSQL','ADOBE PS','ADOBE PREMIERE PRO'];
print_r($biodata->nama($nama,$umur)
				->alamat($alamat)
				->hobi($hobi)
				->menikah(false)
				->sekolah($sekolah)
                ->kemampuan($kemampuan)
                ->tertarik(true)
				->konjson()
);

?>