<?php
class Pendidikan_model extends CI_Model {

    public function rules()
    {
        return[
        ['field' => 'judul',
        'label' => 'Judul',
        'rules' => 'required'],

        ['field'=> 'tahun',
        'label' => 'Tahun',
        'rules' => 'required'],

        ['field'=> 'ket',
        'label' => 'Keterangan',
        'rules' => 'required']
        ];
    }

    public function getAllPendidikan()
    {
        return $this->db->get('pendidikan')->result();
    }
    public function getById($id)
    {
        return $this->db->get_where('pendidikan', ["id" => $id])->row();
    }
    
    public function tambah(){
        $post = $this->input->post();
        $this->judul        = $post["judul"];
        $this->tahun        = $post["tahun"];
        $this->keterangan   = $post["ket"];

        $this->db->insert('pendidikan', $this);
    }

    public function edit(){
        $post = $this->input->post();
        $this->judul        = $post["judul"];
        $this->tahun        = $post["tahun"];
        $this->keterangan   = $post["ket"];

        $this->db->update('pendidikan', $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete('pendidikan', array("id" => $id));
    }

}
?>