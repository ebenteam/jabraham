<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Caffeinated\Shinobi\Traits\ShinobiTrait;
use Illuminate\Notifications\Notifiable;

class Invitado extends Model
{
    protected $fillable = [
        'IDINVITADO','IDOTRA_IGLESIA', 'ID_FUENTE_LLEGADA','IDSEDE','ID_QUIEN_INVITA',
        'IDCONSOLIDADO_POR', 'NOMBRE', 'APELLIDO', 'TELEFONO','EMAIL', 'IDENTIFICACION',
        'NUM_BOLETA', 'EDAD','PETICION', 'DIRECCION','INVITA_MIEMBRO', 
    ];
}