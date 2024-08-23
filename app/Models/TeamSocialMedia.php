<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamSocialMedia extends Model
{
    use HasFactory;

    protected $table = 'team_social_medias';

    protected $primary_key = 'id';

    protected $fillable = [
        'name',
        'team_id',
        'link',

    ];

    public function teamMember()
    {
        return $this->belongsTO(TeamMember::class);
    }
}
