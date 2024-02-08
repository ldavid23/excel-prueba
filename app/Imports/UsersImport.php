<?php

namespace App\Imports;

use App\Models\User;
use App\Models\Sede;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UsersImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $sede = Sede::where('nombre', '=', $row['sede'])->first();
        
        return new User([
            'name'     => $row['user'],
            'email'    => $row['email'], 
            'password' => Hash::make($row['password']),  
            'sede_id'  => $sede->id 
        ]);
    }
}
