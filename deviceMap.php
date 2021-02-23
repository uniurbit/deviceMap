<?php

/**
 * Plugins.php
 *
 * -Description-
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>
 *
 * @author     Vittorio Russo
 * @link       
 * @copyright  2020
 */

namespace LibreNMS\Plugins;

class deviceMap
{
    public function menu()
    {
        echo('<li><a href="plugin/?p='.get_class().'">Map</a></li>');
    }

    //end menu()

    public function device_overview_container($device)
    {
        echo '<div class="container-fluid"><div class="row"> <div class="col-md-12"> <div class="panel panel-default panel-condensed"> <div class="panel-heading"><strong>' . get_class() . ' Plugin </strong> </div>';
	
        echo '  Plugin Mappatura <br>';
	include 'Map.inc.html';
        echo '</div></div></div></div>';
    }


    public function port_container($device, $port)
    {
        echo '<div class="container-fluid"><div class="row"> <div class="col-md-12"> <div class="panel panel-default panel-condensed"> <div class="panel-heading"><strong>' . get_class() . ' plugin in "Port" tab</strong> </div>';
        echo 'Example display in Port tab</br>';
        echo '</div></div></div></div>';
    }

}
