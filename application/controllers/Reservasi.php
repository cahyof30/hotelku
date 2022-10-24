<?php
class Reservasi extends CI_Controller
{

    public function index()
    {
        $data['judul'] = "Halaman Reservasi";
        $this->load->view('v_header', $data);
        $this->load->view('v_form_reservasi');
        $this->load->view('v_footer', $data);
    }

    public function cetak()
    {
        $this->form_validation->set_rules(
            'nik',
            'NIK',
            'required|min_length[5]',
            [
                'required' => 'NIK harus diisi',
                'min_length[5]' => 'NIK tidak valid'
            ]
        );
        $this->form_validation->set_rules(
            'nama',
            'Nama Lengkap',
            'required',
            [
                'required' => 'Nama Lengkap harus diisi'
            ]
        );
        $this->form_validation->set_rules(
            'jkelamin',
            'Jenis Kelamin',
            'required',
            [
                'required' => 'Jenis Kelamin harus diisi'
            ]
        );
        $this->form_validation->set_rules(
            'alamat',
            'Alamat',
            'required',
            [
                'required' => 'Alamat harus diisi'
            ]
        );
        $this->form_validation->set_rules(
            'tipe',
            'Tipe',
            'required',
            [
                'required' => 'Tipe kamar harus diisi'
            ]
        );
        $this->form_validation->set_rules(
            'tgl',
            'Tanggal Check-in',
            'required',
            [
                'required' => 'Tanggal check-in harus diisi'
            ]
        );
        $this->form_validation->set_rules(
            'lama',
            'Lama Inap',
            'required',
            [
                'required' => 'Lama Inap harus diisi'
            ]
        );

        if ($this->form_validation->run() != true) {
            $this->load->view('v_header');
            $this->load->view('v_form_reservasi');
            $this->load->view('v_footer');
        } else {
            $this->load->view('v_header');
            $data = [
                'nik' => $this->input->post('nik'),
                'nama' => $this->input->post('nama'),
                'jkelamin' => $this->input->post('jkelamin'),
                'alamat' => $this->input->post('alamat'),
                'tipe' => $this->input->post('tipe'),
                'tgl' => $this->input->post('tgl'),
                'lama' => $this->input->post('lama')
            ];
            $this->load->view('v_reservasi', $data);
            $this->load->view('v_footer', $data);
        }
    }
}
