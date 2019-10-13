<?php
class Pengalaman_model extends CI_Model {

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

    public function getAllPengalaman()
    {
        return $this->db->get('pengalaman')->result();
    }
    public function getById($id)
    {
        return $this->db->get_where('pengalaman', ["id" => $id])->row();
    }
    
    public function tambah(){
        $post = $this->input->post();
        $this->judul        = $post["judul"];
        $this->tahun        = $post["tahun"];
        $this->keterangan   = $post["ket"];

        $this->db->insert('pengalaman', $this);
    }

    public function edit(){
        $post = $this->input->post();
        $this->judul        = $post["judul"];
        $this->tahun        = $post["tahun"];
        $this->keterangan   = $post["ket"];

        $this->db->update('pengalaman', $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete('pengalaman', array("id" => $id));
    }

}
?>