<?php
defined('BASEPATH') or exit('No direct script access allowed');

use GuzzleHttp\Client;

class Prodi_model extends CI_Model
{
    public $table = 'prodi';
    public $id = 'prodi.id';
    private $_client;
    public function __construct()
    {
        parent::__construct();
        $this->_client =  new Client([
            'base_uri' => 'http://localhost/rest-api-meinanda/Prodi',
            'auth' => ['admin', '1234', 'nanda' => 'nanda']
        ]);
    }
    public function get()
    {
        //    $this->db->select('p.*,j.nama as jurusan, d.nama as nama_kaprodi');
        //    $this->db->from('prodi p');
        //    $this->db->join('jurusan j', 'p.jurusan = j.id');
        //    $this->db->join('dosen d', 'p.nama_kaprodi = d.id');
        //    $query = $this->db->get();
        //    return $query->result_array();

        $response = $this->_client->request('GET', 'prodi', [
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

        $response = $this->_client->request('GET', 'prodi', [
            'query' => [
                'id' => $id,
                'BPF-TI' => 'bpftiabcde'
            ]
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result['data'][0];
    }
    public function update($data)
    {
        //    $this->db->update($this->table, $data, $where);
        //    return $this->db->affected_rows();

        $response = $this->_client->request('PUT', 'prodi', [
            'form_params' => $data
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }
    public function insert($data)
    {
        //    $this->db->insert($this->table, $data);
        //    return $this->db->insert_id();

        $response = $this->_client->request('POST', 'prodi', [
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

        $response = $this->_client->request('DELETE', 'prodi', [
            'form_params' => [
                'id' => $id,
                'BPF-TI' => 'bpftiabcde'
            ]
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }
}
