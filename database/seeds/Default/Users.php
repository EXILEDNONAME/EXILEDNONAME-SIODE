<?php

use Carbon\Carbon as Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class Users extends Seeder
{

  public function run()
  {
    $users = [
      [
        'id_access'         => '1',
        'name'              => 'Naufal Haidir Ridha',
        'username'          => 'admin',
        'phone'             => '08112448111',
        'email'             => 'admin@exilednoname.com',
        'api_token'         => hash('sha256', Str::random(60)),
        'password'          => bcrypt('1234'),
        'created_at'        => Carbon::now(),
      ],
      [
        'id_access'         => '2',
        'name'              => 'Administrator',
        'username'          => 'administrator',
        'phone'             => '08112448112',
        'email'             => 'administrator@exilednoname.com',
        'api_token'         => hash('sha256', Str::random(60)),
        'password'          => bcrypt('1234'),
        'created_at'        => Carbon::now(),
      ],
      [
        'id_access'         => '3',
        'name'              => 'Operator',
        'username'          => 'operator',
        'phone'             => '08112448113',
        'email'             => 'operator@exilednoname.com',
        'api_token'         => hash('sha256', Str::random(60)),
        'password'          => bcrypt('1234'),
        'created_at'        => Carbon::now(),
      ],
      [
        'id_access'         => '4',
        'name'              => 'User',
        'username'          => 'user',
        'phone'             => '08112448114',
        'email'             => 'user@exilednoname.com',
        'api_token'         => hash('sha256', Str::random(60)),
        'password'          => bcrypt('1234'),
        'created_at'        => Carbon::now(),
      ],
      [
        'id_access'         => '5',
        'name'              => 'XXX',
        'username'          => 'xxx',
        'phone'             => '08112448115',
        'email'             => 'xxx@exilednoname.com',
        'api_token'         => hash('sha256', Str::random(60)),
        'password'          => bcrypt('1234'),
        'created_at'        => Carbon::now(),
      ],
    ];

    User::insert($users);
  }
}
