<?php
use Illuminate\Support\Facades\Route;


Route::get('/', function () { return view('welcome'); });

# Login  
Route::group(['prefix' => '/auth' ], function(){

    # return view('welcome');
    Route::get('/login',['uses'=>'Auth\AuthController@login','as'=>'auth.login']);
    Route::post('/validate',['uses'=>'Auth\AuthController@authorization','as'=>'auth.authorize']);
    Route::get('/logout', ['uses' => 'Auth\AuthController@logout', 'as' => 'auth.logout']);
    
});

Route::group(['prefix' => '/intranet', 'middleware' => 'auth' ], function(){

    Route::get('/dashboard', ['uses' => 'Intranet\DashboardController@index' , 'as' => 'intranet.dashboard' ]);

    # Opciones para los vehiculos
    Route::group(['prefix'=>'/vehiculos' ] ,function(){
        
        Route::get('/filter', ['uses' => 'Intranet\VehiculoController@filter' , 'as' => 'vehiculo.filter' ]);

        Route::get('/listar', ['uses' => 'Intranet\VehiculoController@listar' , 'as' => 'vehiculo.listar' ]);
        Route::get('/nuevo', ['uses' => 'Intranet\VehiculoController@nuevo_vehiculo' , 'as' => 'vehiculo.nuevo']);
        Route::post('/agregar', ['uses' => 'Intranet\VehiculoController@create' , 'as' => 'vehiculo.add']);

        Route::group(['prefix'=>'/reportes' ] ,function(){
            Route::get('/marcas', ['uses' => 'Intranet\VehiculoController@reporte_vehiculos_marcas' , 'as' => 'vehiculo.reporte.marcas' ]);
        });

    });

    # Opciones para los Propietarios
    Route::group(['prefix'=>'/propietarios' ] ,function(){
        
        Route::get('/filter', ['uses' => 'Intranet\PropietarioController@filter' , 'as' => 'propietarios.filter' ]);
        Route::get('/validar-cedula', ['uses' => 'Intranet\PropietarioController@validarCedula']);

        Route::get('/listar', ['uses' => 'Intranet\PropietarioController@listar' , 'as' => 'propietarios.listar' ]);
        Route::get('/nuevo', ['uses' => 'Intranet\PropietarioController@nuevo_propietario' , 'as' => 'propietarios.nuevo']);
        Route::post('/agregar', ['uses' => 'Intranet\PropietarioController@create' , 'as' => 'propietarios.agregar']);
    });

    # Opciones para los Conductores
    Route::group(['prefix'=>'/conductores' ] ,function(){
        Route::get('/listar', ['uses' => 'Intranet\ConductorController@listar' , 'as' => 'conductores.listar' ]);
        Route::post('/agregar', ['uses' => 'Intranet\ConductorController@create' , 'as' => 'conductores.agregar']);
    }); 

    Route::group(['prefix'=>'/validador-json' ] ,function(){
        Route::get('', ['uses' => 'Intranet\ValidadorController@index' , 'as' => 'validador.json' ]);
    });

}); 