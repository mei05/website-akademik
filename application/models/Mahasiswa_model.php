<?php
defined('BASEPATH') or exit('No direct script access allowed');

use GuzzleHttp\Client;

class Mahasiswa_model extends CI_Model
{
    public $table = 'mahasiswa';
    public $id = 'mahasiswa.id';
    private $_client;
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->_client =  new Client([
            'base_uri' => 'http://localhost/rest-api-meinanda/Mahasiswa',
            'auth' => ['admin', '1234', 'nanda' => 'nanda']
        ]);
    }
    public function get()
    {

        $response = $this->_client->request('GET', 'mahasiswa', [
            'query' => [
                'BPF-TI' => 'bpftiabcde'
            ]
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result['data'];
    }
    public function getById($id)
    {
        //   $this->db->select('mahasiswa.*, prodi.nama as prodi');
        //   $this->db->from('mahasiswa');
        //   $this->db->join('prodi', 'mahasiswa.prodi = prodi.id');
        //   $this->db->where('mahasiswa.id', $id);
        //   $query = $this->db->get();
        //   return $query->row_array();

        $response = $this->_client->request('GET', 'mahasiswa', [
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
        //  $this->db->update($this->table, $data, $where);
        //  return $this->db->affected_rows();

        $response = $this->_client->request('PUT', 'mahasiswa', [
            'form_params' => $data
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function insert($data)
    {
        // $this->db->insert($this->table, $data);
        // return $this->db->insert_id();

        $response = $this->_client->request('POST', 'mahasiswa', [
            'form_params' => $data
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }
    public function delete($id)
    {
        //   $this->db->where($this->id, $id);
        //   $this->db->delete($this->table);
        //   return $this->db->affected_rows();

        $response = $this->_client->request('DELETE', 'mahasiswa', [
            'form_params' => [
                'id' => $id,
                'BPF-TI' => 'bpftiabcde'
            ]
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }
}
