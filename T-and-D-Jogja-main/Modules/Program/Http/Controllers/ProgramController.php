<?php

namespace Modules\Program\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Routing\Controller;
use GroceryCrud\Core\GroceryCrud;
use Illuminate\Support\Facades\Auth;
use Modules\Program\Entities\Program;
use Modules\Program\Entities\ProgramCategory;
use Modules\Program\Entities\ProgramLocation;
use Modules\Program\Entities\ProgramOffice;
use Modules\Program\Entities\ProgramType;

class ProgramController extends Controller
{
    private function _getDatabaseConnection() {
        $databaseConnection = config('database.default');
        $databaseConfig = config('database.connections.' . $databaseConnection);


        return [
            'adapter' => [
                'driver' => 'Pdo_Mysql',
                'database' => $databaseConfig['database'],
                'username' => $databaseConfig['username'],
                'password' => $databaseConfig['password'],
                'charset' => 'utf8'
            ]
        ];
    }

    private function _getGroceryCrudEnterprise() {
        $database = $this->_getDatabaseConnection();
        $config = config('grocerycrud');

        $crud = new GroceryCrud($config, $database);

        return $crud;
    }

    private function _show_output($output, $title = '') {
        if ($output->isJSONResponse) {
            return response($output->output, 200)
                  ->header('Content-Type', 'application/json')
                  ->header('charset', 'utf-8');
        }

        $css_files = $output->css_files;
        $js_files = $output->js_files;
        $output = $output->output;

        return view('grocery', [
            'output' => $output,
            'css_files' => $css_files,
            'js_files' => $js_files,
            'title' => $title
        ]);
    }

    public function type()
    {
        $title = "Program Type";

        $crud = $this->_getGroceryCrudEnterprise();
        $crud->setTable('program_types');
        $crud->setSkin('bootstrap-v4');
        $crud->setSubject('Type', 'Types');
        $crud->columns(['name', 'note', 'description', 'thumbnail', 'status_id',]);
        $crud->fields(['name', 'note', 'description', 'thumbnail', 'status_id',]);
        $crud->requiredFields(['name', 'note', 'description', 'thumbnail', 'status_id',]);
        $crud->setRelation('status_id', 'statuses', 'name');
        $crud->setFieldUpload('thumbnail', 'storage', '../storage');
        $crud->uniqueFields(['name']);
        $crud->displayAs([
            'status_id' => 'Status'
        ]);
        $crud->callbackAfterInsert(function ($s) {
            $user = ProgramType::find($s->insertId);
            $user->slug = Str::slug($user->name);
            $user->created_at = now();
            $user->save();
            return $s;
        });
        $crud->callbackAfterUpdate(function ($s) {
            $user = ProgramType::find($s->primaryKeyValue);
            $user->slug = Str::slug($user->name);
            $user->touch();
            return $s;
        });
        $output = $crud->render();

        return $this->_show_output($output, $title);
    }

    public function category()
    {
        $title = "Program Category";

        $crud = $this->_getGroceryCrudEnterprise();
        $crud->setTable('program_categories');
        $crud->setSkin('bootstrap-v4');
        $crud->setSubject('Category', 'Categories');
        $crud->columns(['name', 'status_id',]);
        $crud->fields(['name', 'status_id',]);
        $crud->requiredFields(['name', 'status_id',]);
        $crud->setRelation('status_id', 'statuses', 'name');
        $crud->displayAs([
            'status_id' => 'Status'
        ]);
        $crud->callbackAfterInsert(function ($s) {
            $user = ProgramCategory::find($s->insertId);
            $user->created_at = now();
            $user->save();
            return $s;
        });
        $crud->callbackAfterUpdate(function ($s) {
            $user = ProgramCategory::find($s->primaryKeyValue);
            $user->touch();
            return $s;
        });
        $output = $crud->render();

        return $this->_show_output($output, $title);
    }

    public function location()
    {
        $title = "Program Location";

        $crud = $this->_getGroceryCrudEnterprise();
        $crud->setTable('program_locations');
        $crud->setSkin('bootstrap-v4');
        $crud->setSubject('Location', 'Locations');
        $crud->columns(['name', 'note',]);
        $crud->fields(['name', 'note',]);
        $crud->requiredFields(['name']);
        $crud->setRelation('status_id', 'statuses', 'name');
        $crud->uniqueFields(['name']);
        $crud->displayAs([
            'status_id' => 'Status'
        ]);
        $crud->callbackAfterInsert(function ($s) {
            $user = ProgramLocation::find($s->insertId);
            $user->created_at = now();
            $user->slug = Str::slug($user->name);
            $user->save();
            return $s;
        });
        $crud->callbackAfterUpdate(function ($s) {
            $user = ProgramLocation::find($s->primaryKeyValue);
            $user->slug = Str::slug($user->name);
            $user->save();
            return $s;
        });
        $output = $crud->render();

        return $this->_show_output($output, $title);
    }

    public function office()
    {
        $title = "Program Office";

        $crud = $this->_getGroceryCrudEnterprise();
        $crud->setTable('program_offices');
        $crud->setSkin('bootstrap-v4');
        $crud->setSubject('Office', 'Offices');
        $crud->columns(['name', 'address', 'city', 'program_location_id']);
        $crud->fields(['name', 'address', 'city', 'program_location_id']);
        $crud->requiredFields(['name', 'address', 'city', 'program_location_id']);
        $crud->setRelation('program_location_id', 'program_locations', 'name');
        $crud->uniqueFields(['name']);
        $crud->displayAs([
            'program_location_id' => 'Location'
        ]);
        $crud->callbackAfterInsert(function ($s) {
            $user = ProgramOffice::find($s->insertId);
            $user->created_at = now();
            $user->save();
            return $s;
        });
        $crud->callbackAfterUpdate(function ($s) {
            $user = ProgramOffice::find($s->primaryKeyValue);
            $user->save();
            return $s;
        });
        $output = $crud->render();

        return $this->_show_output($output, $title);
    }

    public function index()
    {
        $title = "Program";

        $crud = $this->_getGroceryCrudEnterprise();
        $crud->setTable('programs');
        $crud->setSkin('bootstrap-v4');
        $crud->setSubject('Program', 'Programs');
        $crud->columns(['name', 'short_description', 'program_category_id', 'program_type_id', 'program_location_id', 'program_office_id', 'status_id']);
        $crud->fields(['name', 'short_description', 'long_description', 'periode_tanggal', 'periode_hari', 'periode_waktu', 'thumbnail', 'price', 'program_category_id', 'program_type_id', 'program_location_id', 'program_office_id', 'status_id']);
        $crud->requiredFields(['name', 'short_description', 'long_description', 'periode_tanggal', 'periode_hari', 'periode_waktu', 'thumbnail', 'price', 'program_category_id', 'program_type_id', 'program_location_id', 'program_office_id', 'status_id']);
        $crud->setRelation('status_id', 'statuses', 'name');
        $crud->uniqueFields(['name']);
        $crud->setTexteditor(['long_description']);
        $crud->setFieldUpload('thumbnail', 'storage', 'storage');
        $crud->callbackAddForm(function ($data) {
           $data['periode_tanggal'] = '01 Januari 2020 - 15 Agustus 2020';
           $data['periode_hari'] = 'Mon-Fri';
           $data['periode_waktu'] = '09:00 - 16:00';
           return $data;
        });
        $crud->setRelation('program_category_id', 'program_categories', 'name');
        $crud->setRelation('program_type_id', 'program_types', 'name');
        $crud->setRelation('program_location_id', 'program_locations', 'name');
        $crud->setRelation('program_office_id', 'program_offices', 'name');
        $crud->setDependentRelation('program_office_id','program_location_id','program_location_id');
        $crud->fieldType('price', 'numeric');
        $crud->displayAs([
            'status_id' => 'Status',
            'program_category_id' => 'Category',
            'program_type_id' => 'Type',
            'program_location_id' => 'Location',
            'program_office_id' => 'Office'
        ]);
        $crud->callbackbeforeInsert(function ($s) {
            $s->data['user_id'] = Auth::id();
            return $s;
        });
        $crud->callbackAfterInsert(function ($s) {
            $user = Program::find($s->insertId);
            $user->created_at = now();
            $user->slug = Str::slug($user->name);
            $user->save();
            return $s;
        });
        $crud->callbackAfterUpdate(function ($s) {
            $user = Program::find($s->primaryKeyValue);
            $user->slug = Str::slug($user->name);
            $user->save();
            return $s;
        });
        $output = $crud->render();

        return $this->_show_output($output, $title);
    }

    public function members()
    {
        $title = "Program Member";

        $crud = $this->_getGroceryCrudEnterprise();
        $crud->setTable('program_buys');
        $crud->setSkin('bootstrap-v4');
        $crud->setSubject('Member', 'Members');
        $crud->unsetAdd()->unsetEdit()->unsetDelete();
        $crud->setRelation('program_id', 'programs', 'name');
        $crud->setRelation('user_id', 'users', '{name} {last_name}');
        $crud->displayAs([
            'program_id' => 'Program',
            'user_id' => 'Member',
            'is_paid' => 'Status',
            'created_at' => 'Registered at',
            'updated_at' => 'Paid at'
        ]);
        $crud->callbackColumn('is_paid', function ($value, $row) {
            return ($value == 0) ? "Belum Dibayar" : "Sudah Dibayar";
        });
        $crud->callbackColumn('price', function ($value, $row) {
            return "Rp. " . number_format($value, 0, ',', '.');
        });
        $crud->defaultOrdering('is_paid', 'asc');
        $output = $crud->render();

        return $this->_show_output($output, $title);
    }

    public function myprogram()
    {
        $title = "My Program";

        $crud = $this->_getGroceryCrudEnterprise();
        $crud->setTable('program_buys');
        $crud->setSkin('bootstrap-v4');
        $crud->setSubject('Program', 'Programs');
        $crud->unsetAdd()->unsetEdit()->unsetDelete();
        $crud->setRelation('program_id', 'programs', 'name');
        $crud->setRelation('user_id', 'users', '{name} {last_name}');
        $crud->displayAs([
            'program_id' => 'Program',
            'user_id' => 'Member',
            'is_paid' => 'Status',
            'created_at' => 'Registered at',
            'updated_at' => 'Paid at'
        ]);
        $crud->callbackColumn('is_paid', function ($value, $row) {
            return ($value == 0) ? "Belum Dibayar" : "Sudah Dibayar";
        });
        $crud->callbackColumn('price', function ($value, $row) {
            return "Rp. " . number_format($value, 0, ',', '.');
        });
        $crud->defaultOrdering('is_paid', 'asc');
        $crud->where([
            'user_id' => Auth::id()
        ]);
        $output = $crud->render();

        return $this->_show_output($output, $title);
    }
}
