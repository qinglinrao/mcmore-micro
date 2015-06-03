<?php

class AttributeGroup extends BaseModel {

    public function scopeCases($query)
    {
        return $query->whereType('work');
    }

	public function attributes()
	{
		return $this->hasMany('Attribute', 'attribute_group_id');
	}
}