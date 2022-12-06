<?php
class Pegawai
{
    public $nip;
    public $nama;
    public $jabatan;
    public $agama;
    public $status;
    static $jml = 0;
    const PT = 'PT. Nurul Fikri Cipta Inovasi';
    
    public function __construct($nip, $nama, $jabatan, $agama, $status)
    {
        $this->nip = $nip;
        $this->nama = $nama;
        $this->jabatan = $jabatan;
        $this->agama = $agama;
        $this->status = $status;
        self::$jml++;
    }
    
    public function setGapok()
    {
        switch ($this->jabatan) {
            case 'Manager':
                $gapok = 15000000;
                break;
            case 'Asmen':
                $gapok = 10000000;
                break;
            case 'Kabag':
                $gapok = 7000000;
                break;
            case 'Staff':
                $gapok = 4000000;
                break;

            default:
                $gapok = 0;
        }

        return $gapok;
    }
    public function setTunjab()
    {
        $tunjab = 0.2 * $this->setGapok();
        return $tunjab;
    }
    public function setTunkel()
    {
        $tunkel = ($this->status == 'Menikah') ? 0.1 * $this->setGapok() : 0;
        $tunkel1 = ($this->status == 'Belum Menikah') ? $this->setGapok() : 0;
        return $tunkel;
        return $tunkel1;
    }
    public function setGator()
    {
        $gator = $this->setGapok() + $this->setTunjab() + $this->setTunkel();
        return $gator;
    }
    public function setZakatProfesi()
    {
        $zakat = ($this->agama == 'Islam' && $this->setGator() > 6000000) ? 0.025 * $this->setGator() : 0;
        return $zakat;
    }
    public function mencetak()
    {
        echo '<b><u>' . self::PT . '</u></b>' . '<br>';
        echo '<br/>NIP: ' . $this->nip;
        echo '<br/>Nama Pegawai: ' . $this->nama;
        echo '<br/>Jabatan: ' . $this->jabatan;
        echo '<br/>agama: ' . $this->agama;
        echo '<br/>Status: ' . $this->status;
        echo '<br/>Gaji Pokok: Rp' . number_format($this->setGapok(), 0, ',', '.');
        echo '<br/>Tunjangan Jabatan: Rp' . number_format($this->setTunjab(), 0, ',', '.');
        echo '<br/>Tunjangan Keluarga: Rp' . number_format($this->setTunkel(), 0, ',', '.');
        echo '<br/>Gaji Kotor: Rp' . number_format($this->setGator(), 0, ',', '.');
        echo '<br/>Zakat: Rp' . number_format($this->setZakatProfesi(), 0, ',', '.');

        echo '<hr/>';
    }
}