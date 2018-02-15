<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Gate;

use App\Boss;
use App\Instance;

class ProgressController extends Controller
{
    public function list() {
        $instances = Instance::orderBy('id','desc')->get();
        foreach($instances as $instance) {
            $images[$instance->name] = asset('wow_icons/zones/'.str_slug($instance->name).'-small.jpg');
            foreach(json_decode($instance->modes) as $mode) {
                foreach($instance->bosses()->where('mode',$mode)->get() as $boss) {
                    $raids[$instance->name][$mode][$boss->name]['id'] = $boss->id;
                    $raids[$instance->name][$mode][$boss->name]['npc_id'] = $boss->npc_id;
                    $raids[$instance->name][$mode][$boss->name]['done'] = $boss->done;
                }
            }
        }

        foreach($raids as $raid => $modes) {
            foreach($modes as $mode => $bosses) {
                $count = 0;
                foreach($bosses as $boss => $data) {
                    if($data['done'])
                        $count++;
                }
                $kills[$raid][$mode] = $count;
                $percent = $count / count($bosses) * 100;
                $progress[$raid][$mode] = $percent;
                if    ($percent == 0 ) $type = '';
                elseif($percent <= 25) $type = 'bg-danger';
                elseif($percent <= 50) $type = 'bg-warning';
                elseif($percent <= 75) $type = 'bg-success';
                else                   $type = 'bg-info';
                $color[$raid][$mode] = $type;
            }
        }

        return view('progress', [
            'raids' => $raids,
            'images' => $images,
            'kills' => $kills,
            'progress' => $progress,
            'color' => $color
        ]);
    }


    public function toggle(Boss $boss) {
      if(Gate::denies('ADMINISTRATOR'))
        return back()->withErrors(['You are not alowed to adjust progress']);

      $boss->done = !$boss->done;
      $boss->save();

      return back();
    }
}
