<?php

class M_materi extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('materi');
    }

    public function belajar($id = null)
    {
        $query = $this->db->get_where('materi', array('id' => $id))->row();
        return $query;
    }

    public function detail_materi($id = null)
    {
        $query = $this->db->get_where('materi', array('id' => $id))->row();
        return $query;
    }

    public function delete_materi($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function update_materi($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function matematika_x()
    {
        $mapel = 'Formation enregistré';
        $kelas = 'Astronomy';
        $this->db->where('kelas', $kelas);
        $this->db->where('nama_mapel', $mapel);
        return $this->db->get('materi');
    }

    public function matematika_xi()
    {
        $mapel = 'Formation enregistré';
        $kelas = 'Aeronotics';
        $this->db->where('kelas', $kelas);
        $this->db->where('nama_mapel', $mapel);
        return $this->db->get('materi');
    }

    public function matematika_xii()
    {
        $mapel = 'Formation enregistré';
        $kelas = 'Robotics';
        $this->db->where('kelas', $kelas);
        $this->db->where('nama_mapel', $mapel);
        return $this->db->get('materi');
    }

    public function ipa_x()
    {
        $mapel = 'Cours en ligne';
        $kelas = 'Astronomy';
        $this->db->where('kelas', $kelas);
        $this->db->where('nama_mapel', $mapel);
        return $this->db->get('materi');
    }

    public function ipa_xi()
    {
        $mapel = 'Cours en ligne';
        $kelas = 'Aeronotics';
        $this->db->where('kelas', $kelas);
        $this->db->where('nama_mapel', $mapel);
        return $this->db->get('materi');
    }

    public function ipa_xii()
    {
        $mapel = 'Cours en ligne';
        $kelas = 'Robotics';
        $this->db->where('kelas', $kelas);
        $this->db->where('nama_mapel', $mapel);
        return $this->db->get('materi');
    }

    public function indo_x()
    {
        $mapel = 'Test';
        $kelas = 'Astronomy';
        $this->db->where('kelas', $kelas);
        $this->db->where('nama_mapel', $mapel);
        return $this->db->get('materi');
    }

    public function indo_xi()
    {
        $mapel = 'Test';
        $kelas = 'Aeronotics';
        $this->db->where('kelas', $kelas);
        $this->db->where('nama_mapel', $mapel);
        return $this->db->get('materi');
    }

    public function indo_xii()
    {
        $mapel = 'Test';
        $kelas = 'Robotics';
        $this->db->where('kelas', $kelas);
        $this->db->where('nama_mapel', $mapel);
        return $this->db->get('materi');
    }

    public function inggris_x()
    {
        $mapel = 'Actualité';
        $kelas = 'Astronomy';
        $this->db->where('kelas', $kelas);
        $this->db->where('nama_mapel', $mapel);
        return $this->db->get('materi');
    }

    public function inggris_xi()
    {
        $mapel = 'Actualité';
        $kelas = 'Aeronotics';
        $this->db->where('kelas', $kelas);
        $this->db->where('nama_mapel', $mapel);
        return $this->db->get('materi');
    }

    public function inggris_xii()
    {
        $mapel = 'Actualité';
        $kelas = 'Robotics';
        $this->db->where('kelas', $kelas);
        $this->db->where('nama_mapel', $mapel);
        return $this->db->get('materi');
    }

    public function agama_x()
    {
        $mapel = 'Examens';
        $kelas = 'Astronomy';
        $this->db->where('kelas', $kelas);
        $this->db->where('nama_mapel', $mapel);
        return $this->db->get('materi');
    }

    public function agama_xi()
    {
        $mapel = 'Examens';
        $kelas = 'Aeronotics';
        $this->db->where('kelas', $kelas);
        $this->db->where('nama_mapel', $mapel);
        return $this->db->get('materi');
    }

    public function agama_xii()
    {
        $mapel = 'Examens';
        $kelas = 'Robotics';
        $this->db->where('kelas', $kelas);
        $this->db->where('nama_mapel', $mapel);
        return $this->db->get('materi');
    }
}
