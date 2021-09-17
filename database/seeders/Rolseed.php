<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class Rolseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rol1 = Role::create(['name'=>'administrador']);
        $rol2 = Role::create(['name'=>'contador']);
        $rol3 = Role::create(['name'=>'tesorero']);
          // permiso usuarios
        Permission::create(['name'=>'usuarios.index']);
        Permission::create(['name'=>'usuarios.crear']);
        Permission::create(['name'=>'usuarios.guardar']);
        Permission::create(['name'=>'usuarios.editar']);
        Permission::create(['name'=>'usuarios.actualizar']);
        //permisos proveedore
        Permission::create(['name'=>'proveedores.index']);
        Permission::create(['name'=>'proveedores.crear']);
        Permission::create(['name'=>'proveedores.guardar']);
        Permission::create(['name'=>'proveedores.editar']);
        Permission::create(['name'=>'proveedores.actualizar']);
        // permisos docentes
        Permission::create(['name'=>'docentes.index']);
        Permission::create(['name'=>'docentes.crear']);
        Permission::create(['name'=>'docentes.guardar']);
        Permission::create(['name'=>'docentes.editar']);
        Permission::create(['name'=>'docentes.actualizar']);
        //permisos ambientes
        Permission::create(['name'=>'ambientes.index']);
        Permission::create(['name'=>'ambientes.crear']);
        Permission::create(['name'=>'ambientes.guardar']);
        Permission::create(['name'=>'ambientes.editar']);
        Permission::create(['name'=>'ambientes.actualizar']);
        //permisos prestamos
        Permission::create(['name'=>'activos.index']);
        Permission::create(['name'=>'activos.crear']);
        Permission::create(['name'=>'activos.guardar']);
        Permission::create(['name'=>'activos.editar']);
        Permission::create(['name'=>'activos.actualizar']);
        //permisos prestamos
        Permission::create(['name'=>'prestamos.index']);
        Permission::create(['name'=>'prestamos.crear']);
        Permission::create(['name'=>'prestamos.guardar']);
        Permission::create(['name'=>'prestamos.editar']);
        Permission::create(['name'=>'prestamos.actualizar']);
        //permisos asignaciones
        Permission::create(['name'=>'asignaciones.index']);
        Permission::create(['name'=>'asignaciones.crear']);
        Permission::create(['name'=>'asignaciones.guardar']);
        Permission::create(['name'=>'asignaciones.editar']);
        Permission::create(['name'=>'asignaciones.actualizar']);
        //permisos Mttogarant
        Permission::create(['name'=>'Mttogarant.index']);
        Permission::create(['name'=>'Mttogarant.crear']);
        Permission::create(['name'=>'Mttogarant.guardar']);
        Permission::create(['name'=>'Mttogarant.editar']);
        Permission::create(['name'=>'Mttogarant.actualizar']);
    }
}
