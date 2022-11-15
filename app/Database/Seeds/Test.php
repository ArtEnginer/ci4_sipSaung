<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Test extends Seeder
{
    public function run()
    {
        //seed Table Tentang
        $data               =  [
            'id'            => 1,
            'judul'         => 'SIP SAUNG',
            'deskripsi'     => 'Ayo bergabung bersama kami dan jadi pelajar yang berprestasi',
            // json format to id, jenis, isi
            'alamat'        => json_encode([
                [
                    'id'    => 1,
                    'jenis' => 'Alamat',
                    'isi'   => 'Jl. Raya Cibaduyut No. 1, Cibaduyut, Kec. Cibiru, Kota Bandung, Jawa Barat 40614'
                ],
                [
                    'id'    => 2,
                    'jenis' => 'Kode Pos',
                    'isi'   => '40614'
                ],
                [
                    'id'    => 3,
                    'jenis' => 'Telepon',
                    'isi'   => '(022) 203 1234'
                ],
                [
                    'id'    => 4,
                    'jenis' => 'Email',
                    'isi'   => 'feby@gmail.com'
                ],
            ]),
            // json format to id, jenis, isi
            'contact'       => json_encode([
                [
                    'id'    => 1,
                    'jenis' => 'Whatsapp',
                    'isi'   => '08123456789'
                ],
                [
                    'id'    => 2,
                    'jenis' => 'Instagram',
                    'isi'   => 'feby'
                ],
                [
                    'id'    => 3,
                    'jenis' => 'Facebook',
                    'isi'   => 'feby'
                ],
                [
                    'id'    => 4,
                    'jenis' => 'Twitter',
                    'isi'   => 'feby'
                ],
            ]),
            // json format to id, jenis, isi
            'sosmed'        => json_encode([
                [
                    'id'    => 1,
                    'jenis' => 'Facebook',
                    'isi'   => 'feby'
                ],
                [
                    'id'    => 2,
                    'jenis' => 'Twitter',
                    'isi'   => 'feby'
                ],
                [
                    'id'    => 3,
                    'jenis' => 'Instagram',
                    'isi'   => 'feby'
                ],
                [
                    'id'    => 4,
                    'jenis' => 'Youtube',
                    'isi'   => 'feby'
                ],
            ]),
            'created_at'    => date('Y-m-d H: i: s'),
            'updated_at'    => date('Y-m-d H: i: s'),
        ];
        $this->db->table('ps_tentang')->insert($data);



        // jenis kelas
        $data                =  [
            [
                'id'         => 1,
                'nama'       => 'Reguler',
                'deskripsi'  => 'Kelas reguler adalah kelas yang
                berlangsung secara rutin dan teratur
                setiap hari',
                'created_at' => date('Y-m-d H: i: s'),
                'updated_at' => date('Y-m-d H: i: s'),
            ],
            [
                'id'         => 2,
                'nama'       => 'Karyawan',
                'deskripsi'  => 'Kelas karyawan adalah kelas yang
                berlangsung secara rutin dan teratur
                setiap hari',
                'created_at' => date('Y-m-d H: i: s'),
                'updated_at' => date('Y-m-d H: i: s'),
            ],
            [
                'id'         => 3,
                'nama'       => 'Mandiri',
                'deskripsi'  => 'Kelas mandiri adalah kelas yang
                berlangsung secara rutin dan teratur
                setiap hari',
                'created_at' => date('Y-m-d H: i: s'),
                'updated_at' => date('Y-m-d H: i: s'),
            ]
        ];

        $this->db->table('ps_jenis_kelas')->insertBatch($data);
    }
}
