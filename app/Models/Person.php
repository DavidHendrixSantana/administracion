<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Brackets\Media\HasMedia\ProcessMediaTrait;
use Brackets\Media\HasMedia\AutoProcessMediaTrait;
use Brackets\Media\HasMedia\HasMediaCollectionsTrait;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\HasMedia;
use Brackets\Media\HasMedia\HasMediaThumbsTrait;

class Person extends Model implements HasMedia 
{

    use ProcessMediaTrait;
    use AutoProcessMediaTrait;
    use HasMediaCollectionsTrait;
    use HasMediaThumbsTrait;
    

   
    public function registerMediaCollections(): void {
        $this->addMediaCollection('gallery');
    }


    public function registerMediaConversions(Media $media = null): void
    {
        $this->autoRegisterThumb200()
        ->greyscale()
            ->quality(80)
            ->withResponsiveImages();
    }
    
 

    protected $table = 'persons';

    protected $fillable = [
        'nombre',
        'tutor',
        'edad',
        'telefono',
        'nivel',
        'teacher_id',
        'schedule_id',
        'imagen',
    
    ];
    
    
    protected $dates = [
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/people/'.$this->getKey());
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'teacher_id', 'id');
    }

    public function schedule()
    {
        return $this->belongsTo(Schedule::class, 'schedule_id', 'id');
    }

}
