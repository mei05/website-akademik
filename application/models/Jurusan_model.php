<?php
defined('BASEPATH') or exit('No direct script access allowed');

use GuzzleHttp\Client;

class Jurusan_model extends CI_Model
{
    public $table = 'jurusan';
    public $id = 'jurusan.id';
    private $_client;
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->_client =  new Client([
            'base_uri' => 'http://localhost/rest-api-meinanda/Jurusan',
            'auth' => ['admin', '1234', 'nanda' => 'nanda']
        ]);
    }
    public function get()
    {
        //    $this->db->select('j.*,d.nama as nama_kajur');
        //    $this->db->from('jurusan j');
        //    $this->db->join('dosen d', 'j.nama_kajur = d.id');
        //    $query = $this->db->get();
        //    return $query->result_array();

        $response = $this->_client->request('GET', 'jurusan', [
            'query' => [
                'BPF-TI' => 'bpftiabcde'
            ]
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result['data'];
    }
    public function getById($id)
    {
        //    $this->db->from($this->table);
        //    $this->db->where('id', $id);
        //    $query = $this->db->get();
        //    return $query->row_array();

        $response = $this->_client->request('GET', 'jurusan', [
            'query' => [
                'id' => $id,
                'BPF-TI' => 'bpftiabcde'
            ]
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result['data'][0];
    }
    public function update($where, $data)
    {
        //    $this->db->update($this->table, $data, $where);
        //    return $this->db->affected_rows();
        $response = $this->_client->request('PUT', 'jurusan', [
            'form_params' => $data
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }
    public function insert($data)
    {
        //    $this->db->insert($this->table, $data);
        //    return $this->db->insert_id();

        $response = $this->_client->request('POST', 'jurusan', [
            'form_params' => $data
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }
    public function delete($id)
    {
        //    $this->db->where($this->id, $id);
        //    $this->db->delete($this->table);
        //    return $this->db->affected_rows();

        $response = $this->_client->request('DELETE', 'jurusan', [
            'form_params' => [
                'id' => $id,
                'BPF-TI' => 'bpftiabcde'
            ]
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }
}
