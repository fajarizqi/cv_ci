<?php
class Biodata_model extends CI_Model {
    private $_table = 'biodata';

    public $id;
    public function rules()
    {
        return[
        ['field' => 'nama_lengkap',
        'label' => 'Nama Lengkap',
        'rules' => 'required'],
        
        ['field'=> 'nama_panggilan',
        'label' => 'Nama Panggilan',
        'rules' => 'required'],

        ['field'=> 'ttl',
        'label' => 'TTL',
        'rules' => 'required'],

        ['field'=> 'jk',
        'label' => 'Jenis Kelamin',
        'rules' => 'required'],

        ['field'=> 'telp',
        'label' => 'NO. Telp',
        'rules' => 'required'],

        ['field'=> 'alamat',
        'label' => 'Alamat',
        'rules' => 'required'],

        ['field'=> 'email',
        'label' => 'Email',
        'rules' => 'required'],

        ['field'=> 'agama',
        'label' => 'Agama',
        'rules' => 'required'],

        ['field'=> 'resume',
        'label' => 'Resume',
        'rules' => 'required']
        ];
        
    }

    public function getAllBiodata()
    {
        return $this->db->get('biodata')->result();
    }
    public function getAllBiodata1()
    {
        return $this->db->get('biodata')->row_array();
    }
    public function getById($biodata_id)
    {
        return $this->db->get_where('biodata', ["id" => $biodata_id])->row();
    }
    
    public function tambah(){
        $post = $this->input->post();
        $this->id           = uniqid();
        $this->nama         = $post["nama_lengkap"];
        $this->jenis_kelamin= $post["jk"];
        $this->ttl          = $post["ttl"];
        $this->agama         = $post["agama"];
        $this->alamat       = $post["alamat"];
        $this->email        = $post["email"];
        $this->telpon       = $post["telp"];
        $this->resume       = $post["resume"];
        $this->nama_pendek    = $post["nama_panggilan"];
        $this->foto         = $_FILES["foto"];

        $this->db->insert('biodata', $this);
    }

    public function edit(){
        $post = $this->input->post();
        $this->nama         = $post["nama_lengkap"];
        $this->jenis_kelamin= $post["jk"];
        $this->ttl          = $post["ttl"];
        $this->agama         = $post["agama"];
        $this->alamat       = $post["alamat"];
        $this->email        = $post["email"];
        $this->telpon       = $post["telp"];
        $this->resume       = $post["resume"];
        $this->nama_pendek    = $post["nama_panggilan"];

        if (!empty($_FILES["foto"]["name"])) {
            $this->foto = $this->_uploadImage();
        } else {
            $this->foto = $post["old_image"];
        }

        $this->db->update('biodata', $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete('biodata', array("id" => $id));
    }

    private function _uploadImage()
    {
        $post                           = $this->input->post();
        $config['upload_path']          = './assets/images/biodata/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['file_name']            = $this->id;
        $config['overwrite']			= true;
        $config['max_size']             = 2048; // 2MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;
        $this->load->library('upload', $config);
        
        if ($this->upload->do_upload('foto')) {
            return $this->upload->data("file_name");
        }
        
        // return "default.jpg";
    }
}
?>