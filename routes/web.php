<?php
use App\Http\Controllers\EmpresaVagaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\EnderecoEmpresaController;
use App\Http\Controllers\EnderecoUserController;
use App\Http\Controllers\FormacaoEscolarController;
use App\Http\Controllers\VagasController;
use App\Http\Controllers\VagasDisponiveisController;
use App\Http\Controllers\AdmUsuarioController;
use App\Models\Vagas;



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

Route::get('/', function () {
    
        return view('welcome');
})->name('welcome');

Route::get('/dashboard', function () {
    if(auth()->user()->is_admin == 1){

            return view('adm.usuario.index');

        }
    elseif(auth()->user()->is_admin ==2){
    
        return view('empresa.empresa.create');
    
    }
    else{

         return view('dashboard');
    }


   
})->middleware(['auth'])->name('dashboard');

Route::get('/index/empresa',[EmpresaController::class,'index'])->middleware(['auth'])->name('Empresa.index');

Route::get('/create/Empresa',[EmpresaController::class,'create'])->middleware(['auth'])->name('Empresa.create1');

Route::post('/create/Empresa',[EmpresaController::class,'create'])->middleware(['auth'])->name('Empresa.create');


Route::post('/store/Empresa',[EmpresaController::class,'store'])->middleware(['auth'])->name('Empresa.store');

Route::get('/store/Empresa',[EmpresaController::class,'store'])->middleware(['auth'])->name('Empresa.store1');



Route::get('/Empresa/show/{id}',[EmpresaController::class,'show'])->middleware(['auth'])->name('Empresa.show');

Route::put('/Empresa/update/{id}',[EmpresaController::class,'update'])->middleware(['auth'])->name('Empresa.update');

Route::delete('/Empresa/{id}',[EmpresaController::class, 'destroy'])->middleware(['auth'])->name('Empresa.delete');

Route::post('/Empresa/edit/{id}',[EmpresaController::class,'edit'])->middleware(['auth'])->name('Empresa.edit');

Route::get('/Empresa/edit/{id}',[EmpresaController::class,'edit'])->middleware(['auth'])->name('Empresa.edit1');
////////////////////////////////////////////////////////////////////////////////////////////


Route::get('/index/EnderecoEmpresa',[EnderecoEmpresaController::class,'index'])->middleware(['auth'])->name('EnderecoEmpresa.index');

Route::get('/create/EnderecoEmpresa',[EnderecoEmpresaController::class,'create'])->middleware(['auth'])->name('EnderecoEmpresa.create1');

Route::post('/create/EnderecoEmpresa',[EnderecoEmpresaController::class,'create'])->middleware(['auth'])->name('EnderecoEmpresa.create');


Route::post('/store/EnderecoEmpresa',[EnderecoEmpresaController::class,'store'])->middleware(['auth'])->name('EnderecoEmpresa.store');

Route::get('/store/EnderecoEmpresa',[EnderecoEmpresaController::class,'store'])->middleware(['auth'])->name('EnderecoEmpresa.store1');



Route::get('/EnderecoEmpresa/show/{id}',[EnderecoEmpresaController::class,'show'])->middleware(['auth'])->name('EnderecoEmpresa.show');

Route::put('/EnderecoEmpresa/update/{id}',[EnderecoEmpresaController::class,'update'])->middleware(['auth'])->name('EnderecoEmpresa.update');

Route::delete('/EnderecoEmpresa/{id}',[EnderecoEmpresaController::class, 'destroy'])->middleware(['auth'])->name('EnderecoEmpresa.delete');

Route::post('/EnderecoEmpresa/edit/{id}',[EnderecoEmpresaController::class,'edit'])->middleware(['auth'])->name('EnderecoEmpresa.edit');

Route::get('/EnderecoEmpresa/edit/{id}',[EnderecoEmpresaController::class,'edit'])->middleware(['auth'])->name('EnderecoEmpresa.edit1');

//////////////////////////////////////////////////////////////////////////////////////////
Route::get('/index/Empresavagas',[EmpresaVagaController::class,'index'])->middleware(['auth'])->name('EmpresaVagas.index');

Route::get('/create/EmpresaVagas',[EmpresaVagaController::class,'create'])->middleware(['auth'])->name('EmpresaVagas.create1');


Route::post('/create/EmpresaVagas',[EmpresaVagaController::class,'create'])->middleware(['auth'])->name('EmpresaVagas.create');


Route::post('/store/EmpresaVagas',[EmpresaVagaController::class,'store'])->middleware(['auth'])->name('EmpresaVagas.store');

Route::get('/store/EmpresaVagas',[EmpresaVagaController::class,'store'])->middleware(['auth'])->name('EmpresaVagas.store1');



Route::get('/Vagas/show/{id}',[EmpresaVagaController::class,'show'])->middleware(['auth'])->name('EmpresaVagas.show');

Route::put('/Vagas/update/{id}',[EmpresaVagaController::class,'update'])->middleware(['auth'])->name('EmpresaVagas.update');

Route::delete('/Vagas/{id}',[EmpresaVagaController::class, 'destroy'])->middleware(['auth'])->name('EmpresaVagas.delete');

Route::post('/Vagas/edit/{id}',[EmpresaVagaController::class,'edit'])->middleware(['auth'])->name('EmpresaVagas.edit');

Route::get('/Vagas/edit/{id}',[EmpresaVagaController::class,'edit'])->middleware(['auth'])->name('EmpresaVagas.edit1');

//////////////////////////////////////////////////////////////////////////////////////

Route::get('/index/EnderecoUser',[EnderecoUserController::class,'index'])->middleware(['auth'])->name('EnderecoUser.index');

Route::get('/create/EnderecoUser',[EnderecoUserController::class,'create'])->middleware(['auth'])->name('EnderecoUser.create1');

Route::post('/create/EnderecoEmpresa',[EnderecoUserController::class,'create'])->middleware(['auth'])->name('EnderecoUser.create');


Route::post('/store/EnderecoUser',[EnderecoUserController::class,'store'])->middleware(['auth'])->name('EnderecoUser.store');

Route::get('/store/EnderecoUser',[EnderecoEmpresaController::class,'store'])->middleware(['auth'])->name('EnderecoUser.store1');



Route::get('/EnderecoUser/show/{id}',[EnderecoUserController::class,'show'])->middleware(['auth'])->name('EnderecoUser.show');

Route::put('/EnderecoUser/update/{id}',[EnderecoUserController::class,'update'])->middleware(['auth'])->name('EnderecoUser.update');

Route::delete('/EnderecoUser/{id}',[EnderecoUserController::class, 'destroy'])->middleware(['auth'])->name('EnderecoUser.delete');

Route::post('/EnderecoUser/edit/{id}',[EnderecoUserController::class,'edit'])->middleware(['auth'])->name('EnderecoUser.edit');

Route::get('/EnderecoEmpresa/edit/{id}',[EnderecoUserController::class,'edit'])->middleware(['auth'])->name('EnderecoEmpresa.edit1');

/////////////////////////////////////////////////////////////////////////////////////////

Route::get('/index/FormacaoEscolar',[FormacaoEscolarController::class,'index'])->middleware(['auth'])->name('FormacaoEscolar.index');

Route::get('/create/FormacaoEscolar',[FormacaoEscolarController::class,'create'])->middleware(['auth'])->name('FormacaoEscolar.create1');

Route::post('/create/FormacaoEscolar',[FormacaoEscolarController::class,'create'])->middleware(['auth'])->name('FormacaoEscolar.create');


Route::post('/store/FormacaoEscolar',[FormacaoEscolarController::class,'store'])->middleware(['auth'])->name('FormacaoEscolar.store');

Route::get('/store/FormacaoEscolar',[FormacaoEscolaresaController::class,'store'])->middleware(['auth'])->name('FormacaoEscolar.store1');



Route::get('/FormacaoEscolar/show/{id}',[FormacaoEscolarController::class,'show'])->middleware(['auth'])->name('FormacaoEscolar.show');

Route::put('/FormacaoEscolar/update/{id}',[FormacaoEscolarController::class,'update'])->middleware(['auth'])->name('FormacaoEscolar.update');

Route::delete('/FormacaoEscolar/{id}',[FormacaoEscolarController::class, 'destroy'])->middleware(['auth'])->name('FormacaoEscolar.delete');

Route::post('/FormacaoEscolar/edit/{id}',[FormacaoEscolarController::class,'edit'])->middleware(['auth'])->name('FormacaoEscolar.edit');

Route::get('/FormacaoEscolar/edit/{id}',[FormacaoEscolarController::class,'edit'])->middleware(['auth'])->name('FormacaoEscolar.edit1');

/////////////////////////////////////////////////////////////////////////////////////

Route::get('/index/vagas',[VagasController::class,'index'])->middleware(['auth'])->name('Vagas.index');

Route::get('/create/Vagas',[VagasController::class,'create'])->middleware(['auth'])->name('Vagas.create');

Route::post('/create/Vaga1',[VagasController::class,'create'])->middleware(['auth'])->name('Vagas.create1');


Route::post('/store/Vagas',[VagasController::class,'store'])->middleware(['auth'])->name('Vagas.store');

Route::get('/store/Vagas',[VagasController::class,'store'])->middleware(['auth'])->name('Vagas.store1');



Route::get('/Vagas/show/{id}',[VagasController::class,'show'])->middleware(['auth'])->name('Vagas.show');

Route::put('/Vagas/update/{id}',[VagasController::class,'update'])->middleware(['auth'])->name('Vagas.update');

Route::delete('/Vagas/{id}',[VagasController::class, 'destroy'])->middleware(['auth'])->name('Vagas.delete');

Route::post('/Vagas/edit/{id}',[VagasController::class,'edit'])->middleware(['auth'])->name('Vagas.edit');

Route::get('/Vagas/edit/{id}',[VagasController::class,'edit'])->middleware(['auth'])->name('Vagas.edit1');
////////////////////////////////////////////////////////////////////////////////////////////

Route::get('/index/vagasdisponiveis',[VagasDisponiveisController::class,'index'])->middleware(['auth'])->name('Vagas.index');

Route::get('/create/Vagasdisponiveis',[VagasDisponiveisController::class,'create'])->middleware(['auth'])->name('Vagas.create1');

Route::post('/create/Vagadisponiveis',[VagasDisponiveisController::class,'create'])->middleware(['auth'])->name('Vagas.create');
///////////////////////////////////////////////////////////////////////##################

Route::get('/index/usuario',[AdmUsuarioController::class,'index'])->middleware(['auth'])->name('usuario.index');


require __DIR__.'/auth.php';
