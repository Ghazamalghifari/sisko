<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //membuat role admin
        $adminRole = new Role();
        $adminRole->name = "admin";
        $adminRole->display_name = "Admin";
        $adminRole->save();
        
        // Membuat sample admin
        $admin = new User();
        $admin->name= 'Admin Larapus';
        $admin->email = 'admin@gmail.com';
        $admin->password = bcrypt('rahasia');
        $admin->save();
        $admin->attachRole($adminRole);


        //membuat role pengajar
        $pengajarRole = new Role();
        $pengajarRole->name = "pengajar";
        $pengajarRole->display_name = "Pengajar";
        $pengajarRole->save();
        
        // Membuat sample pengajar
        $pengajar = new User();
        $pengajar->name= 'Pengajar Larapus';
        $pengajar->email = 'pengajar@gmail.com';
        $pengajar->password = bcrypt('rahasia');
        $pengajar->save();
        $pengajar->attachRole($pengajarRole);


        //membuat role uks
        $uksRole = new Role();
        $uksRole->name = "uks";
        $uksRole->display_name = "Uks";
        $uksRole->save();
        
        // Membuat sample uks
        $uks = new User();
        $uks->name= 'Uks Larapus';
        $uks->email = 'uks@gmail.com';
        $uks->password = bcrypt('rahasia');
        $uks->save();
        $uks->attachRole($uksRole);


        //membuat role perpustakaan
        $perpustakaanRole = new Role();
        $perpustakaanRole->name = "perpustakaan";
        $perpustakaanRole->display_name = "Perpustakaan";
        $perpustakaanRole->save();
        
        // Membuat sample perpustakaan
        $perpustakaan = new User();
        $perpustakaan->name= 'Perpustakaan Larapus';
        $perpustakaan->email = 'perpustakaan@gmail.com';
        $perpustakaan->password = bcrypt('rahasia');
        $perpustakaan->save();
        $perpustakaan->attachRole($perpustakaanRole);
    }
}
