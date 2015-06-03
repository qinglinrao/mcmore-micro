<?php

class Menu extends BaseModel {
    
    use SoftDeletingTrait;
    
    public function scopeGetList($query, $type = null)
    {
        if(is_array($type))
            $query = $query->whereIn('menu_type_code', $type);
        elseif(!empty($type))
            $query = $query->whereMenuTypeCode($type);

        return $query->visible()->priority()->orderBy('id', 'ASC');
    }
}
