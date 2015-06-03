<?php

class Attribute extends BaseModel {

	public function group()
	{
		return $this->belongsTo('AttributeGroup', 'attribute_group_id', 'id');
	}

    public function works()
    {
        return $this->belongsToMany('Work', 'work_assigned_attributes');
    }
}