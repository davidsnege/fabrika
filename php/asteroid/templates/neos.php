<?php

        $loop = '
        <div class="container-fluid">
            <div class="row">
                <h1 class="h3 mb-4 text-gray-800">Neos</h1>

                <br>

            </div>

            <div class="row">

            <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data from NASA about NEOS</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th scope="col">id</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Nasa jpl_url</th>
                                            <th scope="col">Absolute mag.</th>
                                            <th scope="col">Diametro Km Min</th>
                                            <th scope="col">Diametro Km Max</th>
                                            <th scope="col">Hazardous</th>
                                            <th scope="col">Is sentry object</th>
                                            <th scope="col">Close Approach</th>                               
                                            <th scope="col">km/s</th>
                                            <th scope="col">km/h</th>
                                            <th scope="col">ml/h</th>
                                            <th scope="col">Astronomical</th>
                                            <th scope="col">Lunar</th>
                                            <th scope="col">Kilometers</th>
                                            <th scope="col">Miles</th>                               
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ';

                                        // FOREACH LOOP TO ALL ITEMS SEARCH
                                foreach($call as $newArray => $newResponse){
                                        foreach($newResponse as $itemRes => $item){
                                    
                                            foreach($item as $new => $newItem){
                                                $loop .= '<tr><td>';
                                                $loop .= $newItem->id;
                                                $loop .= '</td>';
                                                $loop .= '<td>';
                                                $loop .= $newItem->name;
                                                $loop .= '</td>';
                                                $loop .= '<td>';
                                                $loop .= '<a href="'.$newItem->nasa_jpl_url.'" target="_blank">';
                                                $loop .= $newItem->nasa_jpl_url;
                                                $loop .= '</a>';
                                                $loop .= '</td>';
                                                $loop .= '<td>';
                                                $loop .= $newItem->absolute_magnitude_h;
                                                $loop .= '</td>';
                                    
                                                foreach($newItem as $diameter => $diametro){
                                                    if($diametro->kilometers->estimated_diameter_min !== null){
                                                    $loop .= '<td>';    
                                                    $loop .= $diametro->kilometers->estimated_diameter_min;
                                                    $loop .= '</td>';
                                                    }
                                                        if($diametro->kilometers->estimated_diameter_max !== null){
                                                        $loop .= '<td>';    
                                                        $loop .= $diametro->kilometers->estimated_diameter_max;
                                                        $loop .= '</td>';
                                                        }
                                                }
                                                    $loop .= '<td>';
                                                    if($newItem->is_potentially_hazardous_asteroid == 1){
                                                    $loop .= "Danger";
                                                    }else{
                                                    $loop .= "Not Danger";
                                                    }
                                                    // $loop .= $newItem->is_potentially_hazardous_asteroid; 
                                                    $loop .= '</td>';
                                    
                                                    $loop .= '<td>';
                                                    $loop .= $newItem->is_sentry_object;  
                                                    $loop .= '</td>';
                                    
                                                foreach($newItem->close_approach_data as $close => $closeData){
                                                        $loop .= '<td>';
                                                        $loop .= $closeData->close_approach_date;
                                                        $loop .= '</td>';
                                                        // $loop .= '<td>';
                                                        // $loop .= $closeData->close_approach_date_full;
                                                        // $loop .= '</td>';
                                                        // $loop .= '<td>';
                                                        // $loop .= $closeData->epoch_date_close_approach;
                                                        // $loop .= '</td>';
                                                            $loop .= '<td>';
                                                            $loop .= $closeData->relative_velocity->kilometers_per_second;
                                                            $loop .= '</td>';
                                                            $loop .= '<td>';
                                                            $loop .= $closeData->relative_velocity->kilometers_per_hour;
                                                            $loop .= '</td>';
                                                            $loop .= '<td>';
                                                            $loop .= $closeData->relative_velocity->miles_per_hour;
                                                            $loop .= '</td>';
                                                                $loop .= '<td>';
                                                                $loop .= $closeData->miss_distance->astronomical;
                                                                $loop .= '</td>';
                                                                $loop .= '<td>';
                                                                $loop .= $closeData->miss_distance->lunar;
                                                                $loop .= '</td>';
                                                                $loop .= '<td>';
                                                                $loop .= $closeData->miss_distance->kilometers;
                                                                $loop .= '</td>';
                                                                $loop .= '<td>';
                                                                $loop .= $closeData->miss_distance->miles;     
                                                                $loop .= '</td>';                   
                                                                    // $loop .= '<td>';
                                                                    // $loop .= $closeData->orbiting_body;  
                                                                    // $loop .= '</td>';
                                                                    $loop .= '</tr>';                      
                                                }
                                            }
                                        }
                                    }

    $loop .=                            '
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
    
            </div>

        </div>
        ';


        $loop .= '';


?>
