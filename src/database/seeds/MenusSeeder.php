<?php

use Laravella\Crud\Log;

class UlSeedMenus extends Seeder
{

        private function __addMenu($label, $href, $iconClass = 'icon-file', $parentId = null) {
            $group = array('label'=>$label, 'href'=>$href, 'parent_id'=>$parentId, 'icon_class'=>$iconClass);     
            $menuId = DB::table('_db_menus')->insertGetId($group);
            Log::write('info', $label.' menu created');
            return $menuId;
        }
        
        private function __addMenuPermissions($menuId, $groupName) {
            $usergroup = DB::table('usergroups')->where('group', $groupName)->first();
            if (is_object($usergroup)) {
                $usergroupId = $usergroup->id;
                DB::table('_db_menu_permissions')->insertGetId(array('menu_id'=>$menuId, 'usergroup_id'=>$usergroupId));
            }
        }
        
	public function run()
	{

                $adminId = DB::table('_db_menus')->where('label','Admin')->first()->id;
                Log::write('info', $adminId . ' admin id');
                
                $this->__addMenu('divider', null, '', $adminId);
                $menuId = $this->__addMenu('Uploads', '/upload', 'icon-file', $adminId);
                
                $this->__addMenuPermissions($menuId, 'superadmin');
                $this->__addMenuPermissions($menuId, 'admin');
                
                //tables
                //fields
                //actions
                //views
                //action views
                //log
                //audit
                //install
                //reinstall
		
	}
}
?>