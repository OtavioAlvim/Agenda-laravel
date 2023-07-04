<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AgenteController;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// rota inicial do projeto, rota de login
Route::redirect('/', '/login');
//rota usada para fazer logout
// Route::delete('/agente/{id}',[LoginController::class,'destroy'])->Middleware('auth');//deixa acessar apenas se o usuario estiver logado
// rota usada para redirecionar para a home
Route::get('/welcome',[UserController::class,'index'])->Middleware('auth');//deixa acessar apenas se o usuario estiver logado
Route::view('/agente/tarefa', '/agente/tarefa');
Route::view('/agente/calendario', '/agente/calendario');
Route::view('/agente/relatorio', '/agente/relatorio');
Route::view('/agente/configuracao', '/agente/configuracao');
Route::view('/relatorio/importarPlanilha', '/relatorio/importarPlanilha');
Route::view('/implantacao/implantacaoAndamento', '/implantacao/implantacaoAndamento');
Route::view('/comercial/importarPlanilhaCliente', '/comercial/importarPlanilhaCliente');
Route::view('/comercial/clientes', '/comercial/clientes');
Route::view('/comercial/transmitirCadastros', '/comercial/transmitirCadastros');
