<?php

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register web routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | contains the "web" middleware group. Now create something great!
  |
 */
Route::get('/phpinfo', function () {
    return view('phpinfo');
});
Route::get('/textos/regras', function () {
    return view('/textos.regras');
});
Route::get('/users/emailsend', function () {
    return view('/users/emailsend');
});
Route::get('/', 'HomeController@index')->name('/');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/links', 'HomeController@links')->name('links');

Route::get('/visitas', 'HomeController@visitas')->name('visitas');
Route::get('/visitasindex', 'HomeController@visitasIndex')->name('visitasindex');
Route::get('/storevisitas', 'HomeController@storevisitas')->name('storevisitas');

Route::get('/xat', 'HomeController@getPostagens')->name('xat');
Route::post('/xat/store/', 'HomeController@storeChat')->name('xat.store');

Route::get('/noaccess', 'HomeController@noaccess')->name('noaccess');

Route::get('/mostrarlogingoogle', 'UserController@mostrarLoginGoogle')->name('mostrarlogingoogle');
Route::get('/google/{email}/{nome}', 'UserController@loginGoogle')->name('google');
Route::get('/users/creategoogle/{email}/{nome}', 'UserController@storegoogle')->name('users.storegoogle');
Route::post('/users/ressetsenha/', 'UserController@ressetSenha')->name('users.ressetsenha');
Route::get('/users/setsenha/{email}/{password}', 'UserController@setSenha')->name('users.setsenha');
Route::put('/users/updatesenha/{id}', 'UserController@updateSenha')->name('users.updatesenha');
Route::get('/users/emailsend', 'UserController@emailSend')->name('users.emailsend');

Route::get('/descricao/{id}', 'ClasseController@descricao')->name('descricao');
Route::get('/jogo/fichas/showfichauserjogo/{id}/{id_cronica}', 'JogoController@showFichaUserJogo')->name('jogo.fichas.showfichauserjogo');
Route::get('/jogo/fichas/', 'JogoController@listFichasUser')->name('jogo.fichas');
Route::get('/cronicas/visitante', 'CronicaController@index')->name('cronicas.visitante');
Route::get('/users/create', 'UserController@create')->name('users.create');
Route::get('/jogo/cronicas/uma/{id}', 'JogoController@showCronicaVisitante')->name('jogo.cronicas.showuma');

Route::get('/votos/{id_alternativa}/{id_pergunta}', 'VotacaoController@storeVoto')->name('votos.store');
Route::get('/votos', 'VotacaoController@getVotos')->name('votos');
Route::group(["middleware" => 'auth'], function () {
    
    
    Route::get('/users/edit/{id}', 'UserController@editautor')->name('users.edit');
    Route::put('/users/update/{id}', 'UserController@updateautor')->name('users.update');
    
    Route::get('/jogo/classes/', 'JogoController@index')->name('jogo.classes');
    Route::get('/jogo/classes/show/{id}', 'JogoController@showClasse')->name('jogo.classes.show');
    Route::get('/jogo/fichas/show/{id}/{id_fichaUser}', 'JogoController@showFicha')->name('jogo.fichas.show');
    Route::post('/jogo/ficha_user/', 'JogoController@storeFicha')->name('jogo.ficha_user');
    Route::get('/jogo/fichas/listfichas/{id}', 'JogoController@listFichas')->name('jogo.fichas.listfichas');
    Route::get('/jogo/fichas/showfichauser/{id}', 'JogoController@showFichaUser')->name('jogo.fichas.showfichauser');
    Route::post('/jogo/cronicas/{id}', 'JogoController@showCronica')->name('jogo.cronicas.show');
    Route::get('/cronicas/finalizar/{id}', 'JogoController@finalizar')->name('cronicas.finalizar');
    Route::get('/cronicas/getfinalizada/{id}', 'JogoController@getFinalizada')->name('cronicas.getfinalizada');
    Route::get('/jogo/fichauser/situacao/{id}', 'JogoController@getSituacao')->name('jogo.fichaUser.situacao');
    Route::post('/jogo/mestrar/{id}', 'JogoController@mestrar')->name('jogo.mestrar');
    
    Route::post('/jogo/postagem/', 'JogoController@storePostagem')->name('jogo.postagem.store');
    Route::post('/jogo/postagemxat/', 'JogoController@storePostagemChat')->name('jogo.postagem.storexat');
    Route::get('/jogo/postagens/get/{id}/{id_cronica}', 'JogoController@getUltimasPostagens')->name('jogo.postagens.get');
    Route::get('/jogo/postagens/getxat/{id}/{id_cronica}', 'JogoController@getUltimasPostagensChat')->name('jogo.postagens.getxat');
    Route::get('/jogo/cronicas/postagens/{id_cronica}', 'JogoController@getPostagens')->name('jogo.cronicas.postagens');
    Route::get('/jogo/cronicas/postagensxat/{id_cronica}', 'JogoController@getPostagensChat')->name('jogo.cronicas.postagensxat');
    
    Route::put('/jogo/fichas/update/{id}', 'JogoController@atualizarFicha')->name('jogo.fichas.update');
    Route::get('/jogo/valor/get/{id}', 'JogoController@getValor')->name('jogo.valor.get');
    Route::get('/jogo/valor/getbonus/{id}', 'JogoController@getBonus')->name('jogo.valor.getbonus');
    Route::get('/jogo/fichas/concluir/{id}', 'JogoController@concluir')->name('jogo.fichas.concluir');
    Route::get('/jogo/cronicas/iniciar/{id}', 'JogoController@iniciar')->name('jogo.cronicas.iniciar');
    Route::get('/jogo/cronicas/reabrir/{id}', 'JogoController@reabrir')->name('jogo.cronicas.reabrir');
    Route::get('/jogo/fichas/atualizardom/{idRaca}/{idAugurio}/{idTribo}', 'JogoController@atualizarDom')->name('jogo.fichas.atualizardom');
    Route::get('/jogo/fichauser/retirarficha/{id}', 'JogoController@retirarFicha')->name('jogo.fichauser.retirarficha');
    Route::get('/jogo/fichauser/get/{id}', 'JogoController@getFichas')->name('jogo.fichauser.get');
    
    //Estes métodos deveriam ser do tipo PUT, mas o fetch javascript não aceita requisições desse tipo
    Route::post('/jogo/valor/updatecronica', 'JogoController@atualizarValorCronica')->name('jogo.valor.updatecronica');
    Route::post('/jogo/valor/update', 'JogoController@atualizarValor')->name('jogo.valor.update');
    Route::post('/jogo/fichauser/update', 'JogoController@updateFicha')->name('jogo.fichauser.update');
    Route::post('/jogo/fichauser/updateanotacoes', 'JogoController@atualizarAnotacoesFicha')->name('jogo.fichauser.updateanotacoes');
    
    
    

    
    Route::get('/cronicas/create', 'CronicaController@create')->name('cronicas.create');
    Route::get('/cronicas/', 'CronicaController@index')->name('cronicas');
    Route::post('/cronicas/', 'CronicaController@store')->name('cronicas.store');
    Route::get('/cronicas/show/{id}', 'CronicaController@show')->name('cronicas.show');
    Route::get('/cronicas/edit/{id}', 'CronicaController@edit')->name('cronicas.edit');
    Route::put('/cronicas/update/{id}', 'CronicaController@update')->name('cronicas.update');
    Route::group(['middleware' => 'App\Http\Middleware\IsAdmin'], function() {
        Route::post('/admin/notice/store/', 'HomeController@storeNotice')->name('admin.notice.store');
        Route::post('/admin/page/store/', 'HomeController@storePage')->name('admin.page.store');
        Route::get('/admin/users/', 'UserController@index')->name('admin.users');
        Route::post('/admin/users/', 'UserController@store')->name('admin.users.store');
        Route::get('/admin/users/createadmin', 'UserController@createAdmin')->name('admin.users.createadmin');
        Route::delete('/admin/users/delete/{id}', 'UserController@destroy')->name('admin.users.delete');
        Route::get('/admin/users/edit/{id}', 'UserController@edit')->name('admin.users.edit');
        Route::put('/admin/users/update/{id}', 'UserController@update')->name('admin.users.update');
        
        Route::get('/admin/classes/create', 'ClasseController@create')->name('admin.classes.create');
        Route::get('/admin/classes/', 'ClasseController@index')->name('admin.classes');
        Route::post('/admin/classes/', 'ClasseController@store')->name('admin.classes.store');
        Route::delete('/admin/classes/delete/{id}', 'ClasseController@destroy')->name('admin.classes.delete');
        Route::get('/admin/classes/show/{id}', 'ClasseController@show')->name('admin.classes.show');
        Route::get('/admin/classes/edit/{id}', 'ClasseController@edit')->name('admin.classes.edit');
        Route::put('/admin/classes/update/{id}', 'ClasseController@update')->name('admin.classes.update');
        
        Route::get('/admin/fichas/create/{id}', 'FichaController@create')->name('admin.fichas.create');
        Route::get('/admin/fichas/show/{id}', 'FichaController@show')->name('admin.fichas.show');//teste
        Route::get('/admin/fichas/', 'FichaController@index')->name('admin.fichas');
        Route::post('/admin/fichas/', 'FichaController@store')->name('admin.fichas.store');
        Route::delete('/admin/fichas/delete/{id}', 'FichaController@destroy')->name('admin.fichas.delete');
        Route::get('/admin/fichas/edit/{id}', 'FichaController@edit')->name('admin.fichas.edit');
        Route::put('/admin/fichas/update/{id}', 'FichaController@update')->name('admin.fichas.update');
        
        Route::delete('/admin/cronicas/delete/{id}', 'CronicaController@destroy')->name('admin.cronicas.delete');
        Route::get('/admin/cronicas/finalizar/{id}', 'JogoController@finalizarAdmin')->name('admin.cronicas.finalizar');
        
        Route::delete('/admin/fichauser/delete/{id}', 'JogoController@deleteFicha')->name('admin.fichauser.delete');
        
        Route::get('/admin/graphs', 'AdminController@graphs')->name('admin.graphs');
        Route::get('/admin/getvisitas', 'AdminController@getVisitas')->name('admin.getvisitas');
        
        Route::get('/admin/perguntas', 'VotacaoController@index')->name('admin.perguntas');
        Route::get('/admin/perguntas/create', 'VotacaoController@create')->name('admin.perguntas.create');
        Route::post('/admin/perguntas/', 'VotacaoController@store')->name('admin.perguntas.store');
        Route::get('/admin/perguntas/show/{id}', 'VotacaoController@show')->name('admin.perguntas.show');
        Route::delete('/admin/perguntas/delete/{id}', 'VotacaoController@destroy')->name('admin.perguntas.delete');
        Route::get('/admin/perguntas/edit/{id}', 'VotacaoController@edit')->name('admin.perguntas.edit');
        Route::put('/admin/perguntas/update/{id}', 'VotacaoController@update')->name('admin.perguntas.update');
        
        Route::post('/admin/alternativas/', 'VotacaoController@storeAlternativa')->name('admin.alternativas.store');
        
        //Este método deveria ser do tipo DELETE, mas o fetch javascript não aceita requisições desse tipo
        Route::post('/admin/alternativas/delete', 'VotacaoController@destroyAlternativa')->name('admin.alternativas.delete');
        
        
    });
});
Auth::routes();