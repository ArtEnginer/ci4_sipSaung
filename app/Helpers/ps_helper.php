<?php

function getBulan($obj = false)
{
    $bulan = [
        [
            'num' => '01',
            'name' => 'Januari',
        ],
        [
            'num' => '02',
            'name' => 'Februari',
        ],
        [
            'num' => '03',
            'name' => 'Maret',
        ],
        [
            'num' => '04',
            'name' => 'April',
        ],
        [
            'num' => '05',
            'name' => 'Mei',
        ],
        [
            'num' => '06',
            'name' => 'Juni',
        ],
        [
            'num' => '07',
            'name' => 'Juli',
        ],
        [
            'num' => '08',
            'name' => 'Agustus',
        ],
        [
            'num' => '09',
            'name' => 'September',
        ],
        [
            'num' => '10',
            'name' => 'Oktober',
        ],
        [
            'num' => '11',
            'name' => 'November',
        ],
        [
            'num' => '12',
            'name' => 'Desember',
        ],
    ];

    if ($obj) {
        $bulanobj = [];
        foreach ($bulan as $key => $value) {
            $temp = new stdClass;
            $temp->num = $value['num'];
            $temp->name = $value['name'];
            $bulanobj[] = $temp;
        }
        return $bulanobj;
    }

    return $bulan;
}

// get bulan with param obj num
function getBulanObj($num, $isObj = false)
{
    $bulan = getBulan($isObj);
    if ($isObj) {
        foreach ($bulan as $key => $value) {
            if ($value->num == $num) {
                return $value;
            }
        }
    }
    foreach ($bulan as $key => $value) {
        if ($value['num'] == $num) {
            return $value;
        }
    }
    return false;
}

// Tipe Status with style
function getStatus($obj=false)
{
    $status = [
        [
            'num' => '100',
            'name' => 'Pending',
            'style' => 'warning',
        ],
        [
            'num' => '200',
            'name' => 'Diterima',
            'style' => 'success',
        ],
        [
            'num' => '300',
            'name' => 'Ditolak',
            'style' => 'danger',
        ],
    ];

    if ($obj) {
        $statusobj = [];
        foreach ($status as $key => $value) {
            $temp = new stdClass;
            $temp->num = $value['num'];
            $temp->name = $value['name'];
            $temp->style = $value['style'];
            $statusobj[] = $temp;
        }
        return $statusobj;
    }

    return $status;
}

// get status with param obj num
function getStatusObj($num, $isObj = false)
{
    $status = getStatus($isObj);
    if ($isObj) {
        foreach ($status as $key => $value) {
            if ($value->num == $num) {
                return $value;
            }
        }
    }
    foreach ($status as $key => $value) {
        if ($value['num'] == $num) {
            return $value;
        }
    }
    return false;
}


