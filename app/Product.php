<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = ['id'];

    protected $appends = ['code_label'];

    public function size()
    {
        return $this->belongsTo(Size::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function warehouse()
    {
        return $this->belongsTo(Warehouse::class);
    }

    public function colour()
    {
        return $this->belongsTo(Colour::class);
    }

    public function getCodeLabelAttribute()
    {
        return "{$this->type->code}-{$this->colour->code}-{$this->size->code}-{$this->warehouse->code}-{$this->id}";
    }
}