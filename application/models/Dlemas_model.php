<?php
class Dlemas_model extends CI_Model
{
    public function panggil()
    {
        $data = [
            'namasiswa' => $this->input->post('namasiswa'),
            'kode' => $this->input->post('kode'),
            'kelas' => $this->input->post('kelas'),
            'tgllahir' => $this->input->post('tgllahir'),
            'tmptlahir' => $this->input->post('tmptlahir'),
            'alamat' => $this->input->post('alamat'),
            'jk' => $this->input->post('jk'),
            'agama' => $this->input->post('agama'),
        ];
        return $data;
    }
}

