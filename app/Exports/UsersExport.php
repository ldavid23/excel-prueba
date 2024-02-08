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
            'Password',
            'sede'
        ];
    }
    public function array() : array
    {
        $usuarios = User::all();
        $lista = array();
         foreach($usuarios as $user){
            $lista[] = [
                $user->id,
                $user->name,
                $user->email,
                $user->password,
                $user->sede->id
            ];
         }
         return $lista;
        //$lista = array(User::all());
        //return $lista;
    }
}
