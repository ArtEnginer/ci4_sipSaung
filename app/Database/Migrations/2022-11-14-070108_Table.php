<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Table extends Migration
{
    public function up()
    {
        //Table Siswa
        $this->forge->addField([
            'id'                 => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama'               => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'nisn'               => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'nik'                => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'tempat_lahir'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'tanggal_lahir'      => [
                'type'           => 'DATE',
            ],
            'jenis_kelamin'      => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'agama'              => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'alamat'             => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'asal_sekolah'        => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'no_hp'              => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'email'              => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'nama_ayah'          => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'nama_ibu'           => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'pekerjaan_ayah'     => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'pekerjaan_ibu'      => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'no_hp_ortu'         => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'tanggal_mulai'      => [
                'type'           => 'DATE',
            ],
            'tanggal_selesai'    => [
                'type'           => 'DATE',
            ],
            'jenis_kelas'        => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'status'             => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'created_at'         => [
                'type'           => 'DATETIME',
                'null'           => true,
            ],
            'updated_at'         => [
                'type'           => 'DATETIME',
                'null'           => true,
            ],

        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('ps_siswa');

        //Table Jenis Kelas
        $this->forge->addField([
            'id'                 => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama'               => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'deskripsi'          => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'created_at'         => [
                'type'           => 'DATETIME',
                'null'           => true,
            ],
            'updated_at'         => [
                'type'           => 'DATETIME',
                'null'           => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('ps_jenis_kelas');

        // Table tentang
        $this->forge->addField([
            'id'                 => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'judul'              => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'deskripsi'          => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'alamat'            => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'contact'           => [
                'type'           => 'json',
            ],
            'sosial media'     => [
                'type'           => 'json',
            ],
            'created_at'         => [
                'type'           => 'DATETIME',
                'null'           => true,
            ],
            'updated_at'         => [
                'type'           => 'DATETIME',
                'null'           => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('ps_tentang');
    }

    public function down()
    {
        $this->forge->dropTable('ps_siswa');
        $this->forge->dropTable('ps_jenis_kelas');
        $this->forge->dropTable('ps_tentang');
    }
}
