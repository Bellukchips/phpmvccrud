<?php

class Mahasiswa extends Controller
{
    public function index()
    {
        $data['title'] = "Daftar Mahasiswa";
        $data['mhs'] = $this->model('Mahasiswa_model')->getAllMhs();
        $this->view('templates/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['title'] = "Detail Mahasiswa";
        $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);
        $this->view('templates/header', $data);
        $this->view('mahasiswa/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('Mahasiswa_model')->tambahDataMahasiswa($_POST) > 0) {
            FlashMsg::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . 'Mahasiswa');
            exit;
        } else {
            FlashMsg::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . 'Mahasiswa');
            exit;
        }
    }

    public function delete($id)
    {
        if ($this->model('Mahasiswa_model')->hapusMahasiswa($id) > 0) {
            FlashMsg::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . 'Mahasiswa');
            exit;
        } else {
            FlashMsg::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . 'Mahasiswa');
            exit;
        }
    }
    public function getUbah()
    {
        echo json_encode($this->model('Mahasiswa_model')->getMahasiswaById($_POST['id']));
    }

    public function update()
    {
        if ($this->model('Mahasiswa_model')->ubahDataMahasiswa($_POST) > 0) {
            FlashMsg::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . 'Mahasiswa');
            exit;
        } else {
            FlashMsg::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . 'Mahasiswa');
            exit;
        }
    }

    public function cari()
    {
        $data['title'] = "Daftar Mahasiswa";
        $data['mhs'] = $this->model('Mahasiswa_model')->cariMahasiswa();
        $this->view('templates/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer');
    }
}
