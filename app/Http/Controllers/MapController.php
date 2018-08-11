<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use FarhanWazir\GoogleMaps\GMaps;

class MapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
    **/


    public function map()
    {
        // only Map Show
//        $config['center'] = 'Sydney Airport,Sydney';
//        $config['zoom'] = '14';
//        $config['map_height'] = '400px';
//
//        $gmap = new GMaps();
//        $gmap->initialize($config);
//
//        $map = $gmap->create_map();
//        return view('map',compact('map'));

        // Map Maker
//        $config['center'] = 'Sydney Airport,Sydney';
//        $config['zoom'] = '14';
//        $config['map_height'] = '400px';
//
//        $gmap = new GMaps();
//        $gmap->initialize($config);
//
//        $marker['position'] = 'Sydney Airport,Sydney';
//        $marker['infowindow_content'] = 'Sydney Airport,Sydney';
//
//        $gmap->add_marker($marker);
//        $map = $gmap->create_map();
//        return view('map',compact('map'));


    }

    public function multiple_map_maker()
    {
        //Multiple Map Maker
        $config['center'] = 'Sydney Airport,Sydney';
        $config['zoom'] = '14';
        $config['map_height'] = '400px';

        $gmap = new GMaps();
        $gmap->initialize($config);

        $marker['position'] = 'Sydney Airport,Sydney';
        $marker['infowindow_content'] = 'Sydney Airport,Sydney';
        $gmap->add_marker($marker);

        $marker['position'] = 'Kogarah Golf Club,Sydney';
        $marker['infowindow_content'] = 'Kogarah Golf Club,Sydney';
        $gmap->add_marker($marker);

        $marker['position'] = 'The Lakes Golf Club,Sydney';
        $marker['infowindow_content'] = 'The Lakes Golf Club,Sydney';
        $gmap->add_marker($marker);

        $map = $gmap->create_map();
        return view('map',compact('map'));
    }


    public function geocaching()
    {
        $config['center'] = 'Sydney Airport,Sydney';
        $config['zoom'] = '14';
        $config['map_height'] = '400px';
        $config['geocodeCaching'] = true;

        $gmap = new GMaps();
        $gmap->initialize($config);

        $marker['position'] = 'Sydney Airport,Sydney';
        $marker['infowindow_content'] = 'Sydney Airport,Sydney';
        $gmap->add_marker($marker);

        $marker['position'] = 'Kogarah Golf Club,Sydney';
        $marker['infowindow_content'] = 'Kogarah Golf Club,Sydney';
        $gmap->add_marker($marker);

        $marker['position'] = 'The Lakes Golf Club,Sydney';
        $marker['infowindow_content'] = 'The Lakes Golf Club,Sydney';
        $gmap->add_marker($marker);

        $map = $gmap->create_map();
        return view('map',compact('map'));
    }

    public function direction()
    {
        $config['center'] = 'Sydney Airport,Sydney';
        $config['zoom'] = '14';
        $config['map_height'] = '500px';
        $config['geocodeCaching'] = true;

        $config['directions'] = true;
        $config['directionsStart'] = 'Sydney Airport,Sydney';
        $config['directionsEnd'] = 'Kogarah Golf Club,Sydney';
        $config['directionsDivID'] =  'directionsDiv';

        $gmap = new GMaps();
        $gmap->initialize($config);
        $map = $gmap->create_map();
        return view('map',compact('map'));

    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
