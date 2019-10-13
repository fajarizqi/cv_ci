<?php
class Skill_model extends CI_Model {

    public function rules()
    {
        return[
        ['field' => 'judul',
        'label' => 'Judul',
        'rules' => 'required'],

        ['field'=> 'persentase',
        'label' => 'Persentase',
        'rules' => 'required'],

        ['field'=> 'warna',
        'label' => 'Warna',
        'rules' => 'required']
        ];
    }

    public function getAllSkill()
    {
        return $this->db->get('skill')->result();
    }
    public function getById($id)
    {
        return $this->db->get_where('skill', ["id" => $id])->row();
    }
    
    public function tambah(){
        $post = $this->input->post();
        $this->judul        = $post["judul"];
        $this->persentase        = $post["persentase"];
        $this->warna   = $post["warna"];

        $this->db->insert('skill', $this);
    }

    public function edit(){
        $post = $this->input->post();
        $this->judul        = $post["judul"];
        $this->persentase        = $post["persentase"];
        $this->warna   = $post["warna"];

        $this->db->update('skill', $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete('skill', array("id" => $id));
    }

}
?>