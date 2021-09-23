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
        Permission::create(['name'=>'usuarios.index'])->assignRole([$rol1]);
        Permission::create(['name'=>'usuarios.crear'])->assignRole([$rol1]);
        Permission::create(['name'=>'usuarios.guardar'])->assignRole([$rol1]);
        Permission::create(['name'=>'usuarios.editar'])->assignRole([$rol1]);
        Permission::create(['name'=>'usuarios.actualizar'])->assignRole([$rol1]);
        Permission::create(['name'=>'usuarios.mostrar'])->syncRoles([$rol2,$rol2,$rol3]);

        //permisos proveedore
        Permission::create(['name'=>'proveedores.index'])->syncRoles([$rol2,$rol3]);
        Permission::create(['name'=>'proveedores.crear'])->assignRole([$rol2]);
        Permission::create(['name'=>'proveedores.guardar'])->assignRole([$rol2]);
        Permission::create(['name'=>'proveedores.editar'])->assignRole([$rol2]);
        Permission::create(['name'=>'proveedores.actualizar'])->assignRole([$rol2]);

        // permisos docentes
        Permission::create(['name'=>'docentes.index'])->syncRoles([$rol1,$rol3]);
        Permission::create(['name'=>'docentes.crear'])->syncRoles([$rol1,$rol3]);
        Permission::create(['name'=>'docentes.guardar'])->syncRoles([$rol1,$rol3]);
        Permission::create(['name'=>'docentes.editar'])->syncRoles([$rol1,$rol3]);
        Permission::create(['name'=>'docentes.actualizar'])->syncRoles([$rol1,$rol3]);

        //permisos ambientes
        Permission::create(['name'=>'ambientes.index'])->syncRoles([$rol1,$rol3]);
        Permission::create(['name'=>'ambientes.crear'])->syncRoles([$rol1,$rol3]);
        Permission::create(['name'=>'ambientes.guardar'])->syncRoles([$rol1,$rol3]);
        Permission::create(['name'=>'ambientes.editar'])->syncRoles([$rol1,$rol3]);
        Permission::create(['name'=>'ambientes.actualizar'])->syncRoles([$rol1,$rol3]);

        //permisos activos
        Permission::create(['name'=>'activos.index'])->syncRoles([$rol1,$rol2,$rol3]);
        Permission::create(['name'=>'activos.hv'])->syncRoles([$rol1,$rol2,$rol3]);
        Permission::create(['name'=>'activos.crear'])->syncRoles([$rol1,$rol2,$rol3]);
        Permission::create(['name'=>'activos.guardar'])->syncRoles([$rol1,$rol2,$rol3]);
        Permission::create(['name'=>'activos.editar'])->syncRoles([$rol1,$rol2,$rol3]);
        Permission::create(['name'=>'activos.actualizar'])->syncRoles([$rol1,$rol2,$rol3]);

        //permisos prestamos
        Permission::create(['name'=>'prestamos.index'])->syncRoles([$rol1,$rol3]);
        Permission::create(['name'=>'prestamos.crear'])->syncRoles([$rol1,$rol3]);
        Permission::create(['name'=>'prestamos.guardar'])->syncRoles([$rol1,$rol3]);
        Permission::create(['name'=>'prestamos.editar'])->syncRoles([$rol1,$rol3]);
        Permission::create(['name'=>'prestamos.actualizar'])->syncRoles([$rol1,$rol3]);

        //permisos Mttogarant
        Permission::create(['name'=>'Mttogarant.index'])->syncRoles([$rol1,$rol3]);
        Permission::create(['name'=>'Mttogarant.crear'])->assignRole([$rol3]);
        Permission::create(['name'=>'Mttogarant.guardar'])->assignRole([$rol3]);
        Permission::create(['name'=>'Mttogarant.editar'])->assignRole([$rol3]);
        Permission::create(['name'=>'Mttogarant.actualizar'])->assignRole([$rol3]);

        //reportes
        Permission::create(['name'=>'reportes.index'])->syncRoles([$rol1,$rol2]);
        Permission::create(['name'=>'reportes.reportes_proveedores'])->syncRoles([$rol1,$rol2]);
        Permission::create(['name'=>'reporte.reportes_docentes'])->syncRoles([$rol1,$rol2]);
        Permission::create(['name'=>'reportes.reportes_ambientes'])->syncRoles([$rol1,$rol2]);
        Permission::create(['name'=>'reportes.reportes_activos'])->syncRoles([$rol1,$rol2]);
        Permission::create(['name'=>'reportes.reportes_prestamos'])->syncRoles([$rol1,$rol2]);
        Permission::create(['name'=>'reportes.reportes_mantenimiento'])->syncRoles([$rol1,$rol2]);
    }
}
