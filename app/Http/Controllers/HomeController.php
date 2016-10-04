<?php
namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use PDO;
class HomeController extends Controller
{
    public function index()
    {
        //Passos controlador bàsic (glue/cola del model i vista):
        // 1) Aconseguir informació de l'usuari de la base de dades
        // 2) Mostrar vista home passant info del usuari
        $pdo = new PDO('sqlite:/home/pedro/Code/laravelManualAuth/database/database.sqlite');
        $query = $pdo->prepare('SELECT * FROM users WHERE id=1');
        $query->execute();
        $row = $query->fetch();
        dd($row);
        $user = new \stdClass();
        $user->name = "Pedro";
        $user->sn1 = "Martínez";
        return view('home')
            ->withUser($user);
//        $user = User::find(1);
    }
}
