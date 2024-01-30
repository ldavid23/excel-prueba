<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class UsersExport implements FromArray, WithHeadings, ShouldAutoSize
{
    public function headings(): array
    {
        return [
            'Id',
            'User',
            'Email',
            'email_verifi_at',
            'created_at',
            'update_at'
        ];
    }
    public function array() : array
    {
        // $usuarios = User::all();
        // $lista = array();
        // foreach($usuarios as $user){
        //     $lista[] = $user;
        // }
        // return $lista;
        $lista = array(User::all());
        return $lista;
    }
}
