<?php
use Illuminate\Support\Facades\Route;


Route::get('/', function () { return view('welcome'); });

# Login  
Route::group(['prefix' => '/auth' ], function(){

    # return view('welcome');
    Route::get('/login',['uses'=>'Auth\AuthController@login','as'=>'auth.login']);
    Route::post('/validate',['uses'=>'Auth\AuthController@authorization','as'=>'auth.authorize']);

});

Route::group(['prefix' => '/intranet' ], function(){

    Route::get('/dashboard', ['uses' => 'Intranet\DashboardController@index' , 'as' => 'intranet.dashboard' ]);

    # Opciones para los vehiculos
    Route::group(['prefix'=>'/vehiculos' ] ,function(){
        Route::get('/listar', ['uses' => 'Intranet\VehiculoController@listar' , 'as' => 'vehiculo.listar' ]);
        Route::get('/nuevo', ['uses' => 'Intranet\VehiculoController@nuevo_vehiculo' , 'as' => 'vehiculo.nuevo']);
        Route::post('/agregar', ['uses' => 'Intranet\VehiculoController@create' , 'as' => 'vehiculo.add']);
    });

    # Opciones para los Propietarios
    Route::group(['prefix'=>'/propietarios' ] ,function(){
        Route::get('/listar', ['uses' => 'Intranet\PropietarioController@listar' , 'as' => 'propietarios.listar' ]);
        Route::post('/agregar', ['uses' => 'Intranet\PropietarioController@create' , 'as' => 'propietarios.agregar']);
    });

    # Opciones para los Conductores
     Route::group(['prefix'=>'/conductores' ] ,function(){
        Route::get('/listar', ['uses' => 'Intranet\ConductorController@listar' , 'as' => 'conductores.listar' ]);
        Route::post('/agregar', ['uses' => 'Intranet\ConductorController@create' , 'as' => 'conductores.agregar']);
    });

    # Informes Generales
    Route::group(['prefix' => 'informes'], function (){
    
        # Informe de placas por vehiculos
        Route::get('/', ['uses' => 'VehiculoController@index' , 'as' => 'informe_placas' ]);
        
    }); 

}); 