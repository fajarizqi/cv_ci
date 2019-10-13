<?php
class Keahlian_model extends CI_Model {

    public function rules()
    {
        return[
        ['field' => 'judul',
        'label' => 'Judul',
        'rules' => 'required'],

        ['field'=> 'icon',
        'label' => 'Icon',
        'rules' => 'required'],

        ['field'=> 'ket',
        'label' => 'Keterangan',
        'rules' => 'required']
        ];
    }

    public function getAllKeahlian()
    {
        return $this->db->get('keahlian')->result();
    }
    public function getById($id)
    {
        return $this->db->get_where('keahlian', ["id" => $id])->row();
    }
    
    public function tambah(){
        $post = $this->input->post();
        $this->judul        = $post["judul"];
        $this->icon        = $post["icon"];
        $this->keterangan   = $post["ket"];

        $this->db->insert('keahlian', $this);
    }

    public function edit(){
        $post = $this->input->post();
        $this->judul        = $post["judul"];
        $this->icon        = $post["icon"];
        $this->keterangan   = $post["ket"];

        $this->db->update('keahlian', $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete('keahlian', array("id" => $id));
    }

}
?>